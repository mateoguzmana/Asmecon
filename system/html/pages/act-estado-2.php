<?
session_start();


if (empty($_SESSION['sesionx']))
{
?>
<script type="text/javascript">

	alert('Su sesion ha finadlizado.');
	parent.location.href=('login.php');

</script>
<?
}

include("../../includes/conexion.php");

$_SESSION['anterior']	=	$_SERVER['REQUEST_URI']; 
				

					

					
		$Id						= $_REQUEST["Id"];

		$query			="SELECT* FROM Estado where Id = '$Id'" ;
		$result			=mysql_query($query, $id);
		
		While($row		=mysql_fetch_array($result))
		{
		$Ids			=$row["Id"];
		$NombreD		=$row["Nombre"];
		}
					
				
					$queryTITMEN		="SELECT* FROM Menusub WHERE Id = ".$_REQUEST["Idsubmenu"] ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
					$NombreTITMEN		=$rowTITMEN["Nombre"];
					}
					
					

					
					$LineaMenuS			=$NombreTITMEN;		
					
					
					

					
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?
        include("../../includes/title.php");
		?>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,600,700,800' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/bootstrap.css?1403937764" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/boostbox.css?1403937765" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/boostbox_responsive.css?1403937765" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/font-awesome.min.css?1401481653" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/jquery-ui/jquery-ui-boostbox.css?1403937766" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/bootstrap-colorpicker/bootstrap-colorpicker.css?1403937882" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/bootstrap-tagsinput/bootstrap-tagsinput.css?1403937883" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/typeahead/typeahead.css?1403937883" />
		<!-- END STYLESHEETS -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="../../assets/js/libs/utils/html5shiv.js?1401481649"></script>
		<script type="text/javascript" src="../../assets/js/libs/utils/respond.min.js?1401481651"></script>
		<![endif]-->
	</head>
	<body >

		<!-- BEGIN HEADER-->
		<header id="header">

<?
include("../../includes/navbar.php");
?>

		</header>
		<!-- END HEADER-->

		<!-- BEGIN BASE-->
		<div id="base">

			<!-- BEGIN SIDEBAR-->
			<div id="sidebar">
			  <div class="sidebar-back"></div>
			  <div class="sidebar-content">
			    <div class="nav-brand"> <a class="main-brand" href="zona.php">
			      <h3 class="text-light text-white"><span><strong><?=$NombreEmpresa?></strong></span></h3>
			      </a> 
               </div>
					<?
                    include("../../includes/menu.php");
                    ?>		      </div>
		  </div><!--end #sidebar-->
			<!-- END SIDEBAR -->
            
            
			<!-- BEGIN CONTENT-->
			<div id="content">
				<section>
					<div class="section-header">
						<h3 class="text-standard"><i class="fa fa-fw fa-arrow-circle-right text-gray-light"></i> <?=$NombreTITMEN?></h3>
					</div>
					<div class="section-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="box style-transparent">
									<!-- START PROFILE TABS -->
									<div class="box-head">
										<ul class="nav nav-tabs tabs-transparent" data-toggle="tabs">
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Asignar Estado a Servicio</a></li>
										</ul>
									</div>
									<!-- END PROFILE TABS -->

									<div class="tab-content">

										<!-- START PROFILE EDITOR -->
										<div class="tab-pane active" id="editDetails">
											<div class="box-body style-white">
                                            
<?
							$MosPerz1		=	0;
					

							
							$queryPerz1			="SELECT* FROM Permisos where Idtipo = '$tipouzer'  and Men = '$Idmenux' and Submenu = '$Idsubmenux' and Opciones = '$Idopcmenux' ";
							$resultPerz1		=mysql_query($queryPerz1, $id);
							
							while($rowPerz1		=mysql_fetch_array($resultPerz1))
							{
							$MosPerzA			=$rowPerz1["Agr"];
							
							
								if($MosPerzA > 0)
								{
								$MosPerz1	=	1;
								}
							}
?>
                                            



<script type="text/javascript">
function validar()
{
    if (document.form2.Nombre.value == "")
	{
        alert("Debe ingresar un Nombre");
		form2.Nombre.focus();
        return false;
    }
		
    cont = 0
	
    for (i=0; i<document.form2.elements.length; i++)
    {
        if(document.form2.elements[i].type == "checkbox")
        {
          if(document.form2.elements[i].checked == 1)
          {
			
			cont = cont + 1; 

          }
        }
    } 
	
	

	
	
    if (cont > 0)
	{
        if(confirm("Desea asignar estos servicios?"))
		{
            document.form2.submit();
        }
    }
    else
	{
        alert("Debe seleccionar al menos un Servicio");
        return false;
    }
        
}
</script> 











    
                                            
                                            
                                                        <?
                                                        if($MosPerz1 == 1)
														{
														?>
												<form class="form-horizontal form-validate" role="form" method="post" action="act-estado-3.php"  name="form2" id="form2" novalidate>
                                                        <?
														}
														else
														{
														?>
												<form method="post" class="form-horizontal form-validate"  novalidate role="form">
                                                        <?
														}
														?>
                                                    <div class="row">
															<div class="form-group">
                                                              <div class="col-lg-1 col-md-2 col-sm-3">
																<label for="Nombre" class="control-label">Nombre</label>
															  </div>
                                                                <div class="col-lg-11 col-md-10 col-sm-9">
																	<input name="Nombre" type="text" required class="form-control" id="Nombre" placeholder="Ingrese un Nombre" onChange="javascript:this.value=this.value.toUpperCase();" value="<?=$NombreD?>" data-rule-minlength="1">
																</div>
															</div>

													</div>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                

                                                    
													<div class="row">
													  <div class="form-group">

                                                    
                                                              
 <?
		$count					=0;
		$query					="SELECT* FROM Servicios where Activo = 0 ORDER BY Nombre" ;
		$result					=mysql_query($query, $id);
		
		while($row				=mysql_fetch_array($result))
		{
		$Nombre					= ($row["Nombre"]);
		$Id						= $row["Id"];
		$Cant					= $row["Cant"];
		
		
			$queryS			="SELECT COUNT(*) AS TOTAL FROM Estado where Idservicio = '$Id' and Nombre = '$NombreD' and Activo = 0" ;
			$resultS		=mysql_query($queryS, $id);
		
			While($rowS		=mysql_fetch_array($resultS))
			{
			$TOTAL			=$rowS["TOTAL"];
			}
				if($TOTAL > 0)
				{
				$activa		='checked';
				$activa1	='active';	
				}
				else
				{
				$activa		='';	
				$activa1	='';
				}
				
				
			$queryC			="SELECT COUNT(*) AS TOTAL FROM Estado where Idservicio = '$Id' and Nombre = '$NombreD' and Cant = '1' and Activo = 0" ;
			$resultC		=mysql_query($queryC, $id);
		
			While($rowC		=mysql_fetch_array($resultC))
			{
			$TOTALC			=$rowC["TOTAL"];
			}

				if($TOTALC > 0)
				{
				$activO		='checked';
				$activO1	='active';	
				}
				else
				{
				$activO		='';	
				$activO1	='';
				}
					
			$count++
?> 
  
                                                              <div class="col-lg-1 col-md-2 col-sm-3">
																<label for="Nombre" class="control-label"></label>
															  </div>
                                                              
                                                        	  <div class="col-lg-11 col-md-10 col-sm-9">
                                                                
                                                                    <div data-toggle="buttons">
                                                                      <label class="btn checkbox-inline btn-checkbox-danger-inverse <?=$activa1?>">
                                                                            <?=$Nombre?> <input name="pasa<?=$count?>" type="checkbox" id="pasa<?=$count?>" value="1"  <?=$activa?>>
                                                                            <input name="Id<?=$count?>" type="hidden" id="Id<?=$count?>" value="<?=$Id?>">
                                                                      </label>
                                                                        
                                                                      <label class="btn checkbox-inline btn-checkbox-danger-inverse <?=$activO1?>">
                                                                            SOLICITAR CANTIDAD <input name="Cant<?=$count?>" type="checkbox" id="Cant<?=$count?>" value="1"  <?=$activO?>>
                                                                       </label>
                                                                        
                                                                    </div>
                                                                
																
														  	</div>
                                                            
                                                            
<?

			
		$TOTAL	=	0;	
		}
?>
                                                                
                                                                


													</div>
                                                    
</div>
                                                    
                                                    
                                                    
												  
												  

													<div class="row">
                                                          <div class="form-group">
    
                                                              <div class="col-lg-1 col-md-2 col-sm-3">
																<label for="Nombre" class="control-label"></label>
															  </div>
                                                              
                                                        	  <div class="col-lg-11 col-md-10 col-sm-9">
                                                               <?
                                                                if($MosPerz1 == 1)
                                                                {
                                                                ?>
																	<input name="Total" id="Total" type="hidden" value="<?=$count?>">
                                                                    <button type="button" class="btn btn-primary"  onclick='validar()' >Realizar Operación</button>
                                                                <?
                                                                }
                                                                ?> 
                                                                </div>
                                                                <div class="col-lg-11 col-md-10 col-sm-9">
        
                                                                
                                                                
 
                                                                </div>
                                                        </div>
													</div> 
                                                    

												</form>
											</div><!--end .box-body -->
										</div><!--end .tab-pane -->
										<!-- END PROFILE EDITOR -->

									</div><!--end .tab-content -->
								</div><!--end .box -->
							</div><!--end .col-lg-12 -->
						</div><!--end .row -->
					</div><!--end .section-body -->
				</section>
			</div><!--end #content-->
			<!-- END CONTENT -->

		</div><!--end #base-->
		<!-- END BASE -->

		<!-- BEGIN JAVASCRIPT -->
		<script src="../../assets/js/libs/jquery/jquery-1.11.0.min.js"></script>
		<script src="../../assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="../../assets/js/libs/jquery-ui/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="../../assets/js/core/BootstrapFixed.js"></script>
		<script src="../../assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="../../assets/js/libs/spin.js/spin.min.js"></script>
		<script src="../../assets/js/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
		<script src="../../assets/js/libs/moment/moment.min.js"></script>
		<script src="../../assets/js/libs/flot/jquery.flot.min.js"></script>
		<script src="../../assets/js/libs/flot/jquery.flot.time.min.js"></script>
		<script src="../../assets/js/libs/flot/jquery.flot.resize.min.js"></script>
		<script src="../../assets/js/libs/flot/jquery.flot.orderBars.js"></script>
		<script src="../../assets/js/libs/flot/jquery.flot.pie.js"></script>
		<script src="../../assets/js/libs/jquery-knob/jquery.knob.js"></script>
		<script src="../../assets/js/libs/sparkline/jquery.sparkline.min.js"></script>
		<script src="../../assets/js/libs/slimscroll/jquery.slimscroll.min.js"></script>
		<script src="../../assets/js/core/demo/DemoCharts.js"></script>
        <script src="../../assets/js/core/demo/DemoFormComponents.js"></script>
		<script src="../../assets/js/libs/multi-select/jquery.multi-select.js"></script>
		<script src="../../assets/js/libs/inputmask/jquery.inputmask.bundle.min.js"></script>
		<script src="../../assets/js/libs/moment/moment.min.js"></script>
		<script src="../../assets/js/libs/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="../../assets/js/libs/jquery-validation/dist/additional-methods.min.js"></script>
        <script src="../../assets/js/libs/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>
        <script src="../../assets/js/libs/bootstrap-datetimepicker/locales/bootstrap-datetimepicker.es.js"></script>
		<script src="../../assets/js/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
		<script src="../../assets/js/core/App.js"></script>
		<script src="../../assets/js/core/demo/Demo.js"></script>
		<!-- END JAVASCRIPT -->

	</body>
</html>
