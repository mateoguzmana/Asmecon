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
				

					

					

					
					
					$IdP				=$_REQUEST["IdP"];
					
					$queryTITMEN		="SELECT* FROM Menusub WHERE Id = ".$_REQUEST["Idsubmenu"] ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
					$NombreTITMEN		=$rowTITMEN["Nombre"];
					}
					
					
					$queryPW				="SELECT* FROM Tipoproced where Muestra = 0  ORDER BY Nombre" ;
					$resultPW				=mysql_query($queryPW, $id);
																							
					while($rowPW			=mysql_fetch_array($resultPW))
					{
					$NombrePW				= $rowPW["Nombre"];
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
		<!-- END STYLESHEETS -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="../../assets/js/libs/utils/html5shiv.js?1401481649"></script>
		<script type="text/javascript" src="../../assets/js/libs/utils/respond.min.js?1401481651"></script>
		<![endif]-->
        
<SCRIPT language=Javascript>
<!--
function isNumberKey(evt)
{
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
	return false;
	return true;
	}
	//-->
	
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
	
</SCRIPT> 
 
<SCRIPT language=Javascript>
<!--
function isNumberKeys(evt)
{
	var charCode = (evt.which) ? evt.which : event.keyCode

	if (!((charCode >47 && charCode <=57) || ( charCode ==8)||(charCode==44)||( charCode == 0)||(charCode==127))) 
	
	return false;
	return true;
	

	
}
	//-->
</SCRIPT> 
        
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
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Crear Rango</a></li>
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
                                            
                                            
                                            
                                            
                                                        <?
                                                        if($MosPerz1 == 1)
														{
														?>
												<form class="form-horizontal form-validate" role="form" method="post" action="add-rango-2.php" novalidate>
                                                        <?
														}
														else
														{
														?>
												<form class="form-horizontal form-validate" role="form" method="post"  novalidate>
                                                        <?
														}
														?>
                                                
										<div class="row">
                                        
                                        
                                        
                                        
                                        
                                                        
															<div class="form-group">
																<div class="col-lg-1 col-md-2 col-sm-3">
																	<label for="Tipo" class="control-label">Procedimiento</label>
																</div>
                                                                
                                                                <div class="col-lg-11 col-md-10 col-sm-9">





																<input name="Idproc" id="Idproc" type="hidden" value="<?=$IdP?>">
                                                                
                                                                <select name="jumpMenu" id="jumpMenu"  class="form-control select2-list" onChange="MM_jumpMenu('parent',this,0)"required  data-placeholder="Seleccione un Tipo de Procedimiento">
            
 																		<?
                                                                        if(!empty($IdP))
																		{
																		?>
                                                                 		<option value="add-rango.php?IdP=<?=$IdP?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>" selected><?=$NombrePW?></option>
 																		<?
																		}
																		else
																		{
																		?>
                                                                 		<option value="add-rango.php?IdP=<?=$IdP?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>" selected>Seleccione un Tipo de Procedimiento</option>
 																		<?
																		}
																		?>
                                                                        
																		<?
																		$queryP					="SELECT* FROM Tipoproced where Muestra = 0  ORDER BY Nombre" ;
																		$resultP				=mysql_query($queryP, $id);
																		
																		while($rowP				=mysql_fetch_array($resultP))
																		{
																		$NombreP				= $rowP["Nombre"];
																		$IdPR					= $rowP["Id"];
																		?> 
                      
                                                                        <option value="add-rango.php?IdP=<?=$IdPR?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>"><?=$NombreP?></option>
                                                                        <?
																		}
																		?>

                                                                </select>







                                
                                
                                                                </div>
															</div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                  <?
                                  if(!empty($IdP))
								  {
								  ?>      
                                        
                                        
                                        
                                                    
															<div class="form-group">
																<div class="col-lg-1 col-md-2 col-sm-3">
																	<label for="Tipo" class="control-label">Tolerancia</label>
																</div>
                                                                <div class="col-lg-11 col-md-10 col-sm-9">
                                                                        
								<select name="Tipo" id="Tipo" class="form-control select2-list" data-placeholder="Seleccione un Tolerancia" required>

                            
                                    <option value="" selected>Seleccione la Tolerancia</option>
<?
			$queryPt				="SELECT* FROM Tipoprocedopc where Idtipoproc = '$IdP' and Muestra = 0  ORDER BY Nombre" ;
			$resultPt				=mysql_query($queryPt, $id);
			
			while($rowPt			=mysql_fetch_array($resultPt))
			{
			$NombrePt				= $rowPt["Nombre"];
			$IdPt					= $rowPt["Id"];
?> 
                                    <option value="<?=$IdPt?>"><?=$NombrePt?></option>
<?
			}
?>

                                </select> 
                                                                        
                                                                        
                                                                        
                                                                </div>
															</div>
                                                    

															<div class="form-group">
                                                              <div class="col-lg-1 col-md-2 col-sm-3">
																<label for="Desde" class="control-label">Desde</label>
															  </div>
                                                                <div class="col-lg-11 col-md-10 col-sm-9">
																	<input type="text" name="Desde" id="Desde" class="form-control" placeholder="Ingrese valor Desde" onKeyPress="return isNumberKey(event);" required data-rule-minlength="1">
																</div>
															</div>


															<div class="form-group">
                                                              <div class="col-lg-1 col-md-2 col-sm-3">
																<label for="Hasta" class="control-label">Hasta</label>
															  </div>
                                                                <div class="col-lg-11 col-md-10 col-sm-9">
																	<input type="text" name="Hasta" id="Hasta" class="form-control" placeholder="Ingrese valor Hasta" onKeyPress="return isNumberKey(event);" required data-rule-minlength="1">
																</div>
															</div>
                                                    
															<div class="form-group">
                                                              <div class="col-lg-1 col-md-2 col-sm-3">
																<label for="Tolerancia" class="control-label">Tolerancia</label>
															  </div>
                                                                <div class="col-lg-11 col-md-10 col-sm-9">
																	<input type="text" name="Tolerancia" id="Tolerancia" class="form-control" placeholder="Ingrese la Tolerancia" onKeyPress="return isNumberKeys(event);" required data-rule-minlength="1">
																</div>
															</div>
                                                    
												  
												  

                                                
													<div class="form-group">
														<div class="col-lg-1 col-md-2 col-sm-3">
															<label for="email" class="control-label"></label>
														</div>
														 <div class="col-lg-11 col-md-10 col-sm-9">

                                                        
                                                        
                                                        <?
                                                        if($MosPerz1 == 1)
														{
														?>
															<button type="submit" class="btn btn-primary">Realizar Operación</button>
                                                        <?
														}
														?> 
														</div>
													</div>
                                                    
<?
								  }
?>        
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
		<script src="../../assets/js/core/BootstrapFixed.js"></script>
		<script src="../../assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="../../assets/js/libs/spin.js/spin.min.js"></script>
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
		<script src="../../assets/js/libs/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="../../assets/js/libs/jquery-validation/dist/additional-methods.min.js"></script>
		<script src="../../assets/js/core/App.js"></script>
		<script src="../../assets/js/core/demo/Demo.js"></script>
		<!-- END JAVASCRIPT -->

	</body>
</html>
