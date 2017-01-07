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



				
					$queryTITMEN		="SELECT* FROM Menusub WHERE Id = ".$_REQUEST["Idsubmenu"] ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
					$NombreTITMEN		=$rowTITMEN["Nombre"];
					}
					
					

					
					$LineaMenuS			=$NombreTITMEN;
					
					$Idccotiz			=$_REQUEST["Idccotiz"];
					$Idord				=$_REQUEST["Idord"];
					$Piezas				=$_REQUEST["Piezas"];
					$Medidas			=$_REQUEST["Medidas"];
					
					
					
					$queryTITMEN		="SELECT* FROM Cotizaciones WHERE Id = '$Idccotiz'" ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
					$Nombreclien		=$rowTITMEN["Cliente"];
					$Nitclien			=$rowTITMEN["Nit"];
					}


					$query				="SELECT* FROM Recepcion where Cotizacion = '$Idccotiz' Order by Id ASC" ;
					$result				=mysql_query($query, $id);
					
					While($row			=mysql_fetch_array($result))
					{
					$Idrecp				=$row["Id"];
					$Plano				=$row["Identificacion"];
					}
					
					$query				="SELECT* FROM Facturas where Idorden = '$Idord' and Idcotiz = '$Idccotiz' Order by Id ASC" ;
					$result				=mysql_query($query, $id);
					
					While($row			=mysql_fetch_array($result))
					{
					$Idfact				=$row["Id"];
					}
					
					
					$horaactual 		=date("Y-m-d");
					

					$query				="SELECT Id FROM Clientes where Nombre = '$Nombreclien'" ;
					$result				=mysql_query($query, $id);
					
					While($row			=mysql_fetch_array($result))
					{
					$Idcliente			=$row["Id"];

					}
					
					
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
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/select2/select2.css?1403937881" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/multi-select/multi-select.css?1403937882" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/bootstrap-datetimepicker/bootstrap-datetimepicker.css?1403937882" />
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
</SCRIPT> 



 <SCRIPT LANGUAGE="JavaScript">
function puntitos(donde,caracter)
{
pat = /[\*,\+,\(,\),\?,\\,\$,\[,\],\^]/
valor = donde.value
largo = valor.length
crtr = true
if(isNaN(caracter) || pat.test(caracter) == true)
	{
	if (pat.test(caracter)==true) 
		{caracter = "\\" + caracter}
	carcter = new RegExp(caracter,"g")
	valor = valor.replace(carcter,"")
	donde.value = valor
	crtr = false
	}
else
	{

	var nums = new Array()
	cont = 0
	for(m=0;m<largo;m++)
		{
		if(valor.charAt(m) == "." || valor.charAt(m) == " ")
			{continue;}
		else{
			nums[cont] = valor.charAt(m)
			cont++
			}
		
		}
	}


var cad1="",cad2="",tres=0
if(largo > 3 && crtr == true)
	{
	for (k=nums.length-1;k>=0;k--)
		{
		cad1 = nums[k]
		cad2 = cad1 + cad2
		tres++
		if((tres%3) == 0)
			{
			if(k!=0){
				cad2 = "." + cad2
				}
			}
		}
	 donde.value = cad2
	}
}
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
 </script>  
 
 




<SCRIPT LANGUAGE="JavaScript">
<?
			$contest				=0;
			$query					="SELECT* FROM Estado where Idservicio = '$Idserv' and Activo = 0 and Muestra = 0  ORDER BY Nombre" ;
			$result					=mysql_query($query, $id);
			
			while($row				=mysql_fetch_array($result))
			{
			$Cante 					=$row["Cant"];
			$contest++;
			
				if($Cante > 0)
				{
?>

function showDiv<?=$contest?>(elem<?=$contest?>)
{
	
 

   if(elem<?=$contest?>.value == 'SI')
   {
	   
      document.getElementById('hidden_div<?=$contest?>').style.display = "block";
   }
   else if(elem<?=$contest?>.value != 'SI')
   {
      document.getElementById('hidden_div<?=$contest?>').style.display = "none";
   }
   else if(elem<?=$contest?>.value != '')
   {
      document.getElementById('hidden_div<?=$contest?>').style.display = "none";
   }
   else if(elem<?=$contest?>.value == '')
   {
      document.getElementById('hidden_div<?=$contest?>').style.display = "none";
   }
   

   
}

<?
				}
			}
?>
</script> 
 
      
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
			      <h3 class="text-light text-white"><span><strong>Asmecon</strong></span></h3>
			      </a> 
               </div>

<?
include("../../includes/menu.php");
?>


		      </div>
		  </div><!--end #sidebar-->
			<!-- END SIDEBAR -->
            
            
			<!-- BEGIN CONTENT-->
			<div id="content">
				<section>
					<div class="section-header">
						<h3 class="text-standard"><i class="fa fa-fw fa-arrow-circle-right text-gray-light"></i> <?=$LineaMenuS?></h3>
					</div>
                    
                    
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
												<form class="form-horizontal form-validate" role="form" method="post" action="add-formato-d-paso.php" id="form1" name="form1" enctype="multipart/form-data" novalidate>
                                                        <?
														}
														else
														{
														?>
												<form class="form-horizontal form-validate" role="form" method="post"  id="form1" name="form1" novalidate>
                                                        <?
														}
														?>
                    
					<div class="section-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="box style-transparent">
									<!-- START PROFILE TABS -->
									<div class="box-head">
										<ul class="nav nav-tabs tabs-transparent" data-toggle="tabs">
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Información de General</a></li>
										</ul>
									</div>
									<!-- END PROFILE TABS -->

									<div class="tab-content">

										<!-- START PROFILE EDITOR -->
										<div class="tab-pane active" id="editDetails">
											<div class="box-body style-white">

												
                                                
                                                
                                            
                                                
                                                
												<div class="row">
                                                    
                                                    

                                                        
                                                        
                                                        
<?
if(!empty($Idccotiz))
{
?>
                                                        
                                                        
											     <div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
                                                         		<input name="Idmenu" type="hidden" id="Idmenu" value="<?=$_REQUEST["Idmenu"]?>">
                                                                <input name="Idsubmenu" type="hidden" id="Idsubmenu" value="<?=$_REQUEST["Idsubmenu"]?>">
                                                                <input name="Idopcmenu" type="hidden" id="Idopcmenu" value="<?=$_REQUEST["Idopcmenu"]?>">
                                                              	<input name="Idcotiz" id="Idcotiz" type="hidden" value="<?=$Idccotiz?>">
                                                              	<input name="Nitclien" id="Nitclien" type="hidden" value="<?=$Nitclien?>">
                                                              	<input name="Idfact" id="Idfact" type="hidden" value="<?=$Idfact?>">
                                                              	<input name="Idrecep" id="Idrecep" type="hidden" value="<?=$Idrecp?>">
                                                                <input name="Idorden" id="Idorden" type="hidden" value="<?=$Idord?>">
                                                                <label for="Cliente" class="control-label" >Cliente</label>
																</div>
                                                                <div class="col-lg-10 col-md-8 col-sm-6">
                                                                        <input name="Cliente" type="text" required class="form-control" id="Cliente" style="background-color:#CCC" value="<?=$Nombreclien?>" readonly/>
                                                                </div>
															</div>
											     </div>
                                                 
											     <div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																  <label for="Orden" class="control-label">Nro. Orden</label>
																</div>
                                                                <div class="col-lg-10 col-md-8 col-sm-6">
                                                                        <input name="Orden" type="text" required class="form-control" id="Orden" style="background-color:#CCC" value="<?=$Idord?>" readonly/>
                                                                </div>
															</div>
											     </div>
                                                 
											     <div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																  <label for="Rip" class="control-label">Rip</label>
																</div>
                                                                <div class="col-lg-10 col-md-8 col-sm-6">
                                                                        <input name="Rip" type="text" required class="form-control" id="Rip" style="background-color:#CCC" value="<?=$Idrecp?>" readonly/>
                                                                </div>
															</div>
											     </div>
                                               
                                                 
											     <div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Plano" class="control-label">Plano</label>
																</div>
                                                                <div class="col-lg-10 col-md-8 col-sm-6">
                                                                        <input name="Plano" type="text" required class="form-control" id="Plano" style="background-color:#CCC" value="<?=$Plano?>" readonly />
                                                                </div>
															</div>
											     </div>
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
<?
}
?>   
                                                        
                                                        
                                                        
                                                        
												</div>
                                                

                                                
											</div><!--end .box-body -->
										</div><!--end .tab-pane -->
										<!-- END PROFILE EDITOR -->

									</div><!--end .tab-content -->
								</div><!--end .box -->
							</div><!--end .col-lg-12 -->
						</div><!--end .row -->
					</div><!--end .section-body -->
                    
                    
                    
                    
                    
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
                    
                    
                    
                                                        
<?
if(!empty($Idccotiz))
{
?>                   
                    
                    
                    
<div class="section-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="box style-transparent">
									<!-- START PROFILE TABS -->
									<div class="box-head">
										<ul class="nav nav-tabs tabs-transparent" data-toggle="tabs">
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Información Dimensional</a></li>
										</ul>
									</div>
									<!-- END PROFILE TABS -->

									<div class="tab-content">

										<!-- START PROFILE EDITOR -->
										<div class="tab-pane active" id="editDetails">
											<div class="box-body style-white">
											  <div class="row">  
                                              
                                              

                                                      

											     <div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Direccion" class="control-label">Fecha</label>
																</div>
                                                                <div class="col-lg-10 col-md-8 col-sm-6">
                                                                    <div class='input-group date' id='demo-date-inline'>
                                                                        <input type="text" class="form-control" required name="Fecha" id="Fecha" />
                                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                    </div>
                                                                </div>
															</div>
											     </div>
                                                 


											     <div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Descripcion" class="control-label">Descripción</label>
																</div>
                                                                <div class="col-lg-10 col-md-8 col-sm-6">
                                                                        <input name="Descripcion" type="text" required class="form-control" id="Descripcion" onChange="javascript:this.value=this.value.toUpperCase();"/>
                                                                </div>
															</div>
											     </div>
                                                    

											     <div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Proveedor" class="control-label">Proveedor</label>
																</div>
                                                                <div class="col-lg-10 col-md-8 col-sm-6">
                                                                        
								<select name="Proveedor" id="Proveedor" class="form-control select2-list" data-placeholder="Seleccione una Opción" required>

                            
                                    <option value="" selected>Seleccione un Proveedor</option>
<?
			$queryP					="SELECT* FROM Proveedores where Muestra = 0  ORDER BY Nombre" ;
			$resultP				=mysql_query($queryP, $id);
			
			while($rowP				=mysql_fetch_array($resultP))
			{
			$NombreP				= $rowP["Nombre"];
			$CedulaP				= $rowP["Cedula"];
?> 
                                    <option value="<?=$CedulaP?>"><?=$NombreP?></option>
<?
			}
?>

                                </select> 
                                                                        
                                                                        
                                                                        
                                                                </div>
															</div>
											     </div>
                                                

											     <div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Sub_cliente" class="control-label">Sub Cliente</label>
																</div>
                                                                <div class="col-lg-10 col-md-8 col-sm-6">
                                                                        
								<select name="Sub_cliente" id="Sub_cliente" class="form-control select2-list" data-placeholder="Seleccione una Opción" required>

                            <option value="">Seleccione un Sub Cliente</option>
                                    
<?
			$queryP					="SELECT * FROM Clientesde WHERE Idcliente='$Idcliente'";
			$resultP				=mysql_query($queryP, $id);
			
			while($rowP	=mysql_fetch_array($resultP))
			{
			$NombreClide	= $rowP["Nombre"];
			$IdClide	= $rowP["Id"];
?> 
                                    <option value="<?=$NombreClide?>"><?=$NombreClide?></option>
<?
			}
?>

                                </select> 
                                                                        
                                                                        
                                                                        
                                                                </div>
															</div>
											     </div>


                                                     

											     <div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Cantidad" class="control-label">Cantidad</label>
																</div>
                                                                <div class="col-lg-10 col-md-8 col-sm-6">
                                                                        <input name="Cantidad" type="text" required class="form-control" id="Cantidad" onChange="javascript:this.value=this.value.toUpperCase();"/>
                                                                </div>
															</div>
											     </div>  
                                                       
                                                       
                                                     

											     <div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Dureza" class="control-label">Dureza</label>
																</div>
                                                                <div class="col-lg-10 col-md-8 col-sm-6">
                                                                        <input name="Dureza" type="text" required class="form-control" id="Dureza" onChange="javascript:this.value=this.value.toUpperCase();"/>
                                                                </div>
															</div>
											     </div>  
                                                       
                                                     

											     <div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Obtenida" class="control-label">Obtenida</label>
																</div>
                                                                <div class="col-lg-10 col-md-8 col-sm-6">
                                                                        <input name="Obtenida" type="text" required class="form-control" id="Obtenida" onChange="javascript:this.value=this.value.toUpperCase();"/>
                                                                </div>
															</div>
											     </div>  
                                                 
                                                     
											     <div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Material" class="control-label">Material</label>
																</div>
                                                                <div class="col-lg-10 col-md-8 col-sm-6">
                                                                        <input name="Material" type="text" required class="form-control" id="Material" onChange="javascript:this.value=this.value.toUpperCase();"/>
                                                                </div>
															</div>
											     </div> 
                                                     
                                                     
                                                        
                                                 <div class="col-sm-6">
                                                            <div class="form-group">
                                                                   <div class="col-lg-2 col-md-4 col-sm-6">
                                                                            <label for="Diagrama" class="control-label">Diagrama</label>
                                                                   </div>
                                                                   <div class="col-lg-10 col-md-8 col-sm-6">
                                                                             <input id="foto" name="foto" type="file" class="form-control" >
                                                                   </div>
                                                            </div>
                                                 </div>






                                              </div>   
                                              
                                              


                                                     
                                                     

                                                
                                                
										  </div><!--end .box-body -->
										</div><!--end .tab-pane -->
										<!-- END PROFILE EDITOR -->

									</div><!--end .tab-content -->
								</div><!--end .box -->
							</div><!--end .col-lg-12 -->
						</div><!--end .row -->
					</div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
         
         
         
         
         
         
         
         
         
         
<div class="section-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="box style-transparent">
									<!-- START PROFILE TABS -->
									<div class="box-head">
										<ul class="nav nav-tabs tabs-transparent" data-toggle="tabs">
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Observaciones del Formato</a></li>
										</ul>
									</div>
									<!-- END PROFILE TABS -->

									<div class="tab-content">

										<!-- START PROFILE EDITOR -->
										<div class="tab-pane active" id="editDetails">
											<div class="box-body style-white">
											  <div class="form-group">
												  	<div class="col-sm-12">
																	<label for="Descripcion" class="control-label">Observaciones</label>
                                                                  <textarea name="Observaciones" rows="3" class="form-control" id="Observaciones" placeholder="Observaciones" onChange="javascript:this.value=this.value.toUpperCase();"></textarea>
																</div>
											  </div>
														
                                                        
                                                         

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        


                                                        

                                                        
                                                        



													<div class="form-group">
														<div class="col-lg-11 col-md-10 col-sm-9">
                                                        <?
                                                        if($MosPerz1 == 1)
														{
														?>
															<br/><br/><button type="submit" id="enviar" class="btn btn-primary">CONTINUAR</button>
                                                        <?
														}
														?> 
														</div>
													</div>
                                                    
                                                    
<?
}
?>
                                                    
                                                    


                                                
                                                
                                                
										  </div><!--end .box-body -->
										</div><!--end .tab-pane -->
										<!-- END PROFILE EDITOR -->

									</div><!--end .tab-content -->
								</div><!--end .box -->
							</div><!--end .col-lg-12 -->
						</div><!--end .row -->
					</div>         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
                    
                    
                    
                    
                    
                    
                    
                    
                    
												</form>
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
        
		<script src="../../assets/js/libs/select2/select2.min.js"></script>
		<script src="../../assets/js/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
		<script src="../../assets/js/libs/multi-select/jquery.multi-select.js"></script>
		<script src="../../assets/js/libs/inputmask/jquery.inputmask.bundle.min.js"></script>
		<script src="../../assets/js/libs/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="../../assets/js/libs/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>
		<script src="../../assets/js/core/demo/DemoFormComponents.js"></script>
		<script src="../../assets/js/libs/jquery-validation/dist/additional-methods.min.js"></script>
		<script src="../../assets/js/core/App.js"></script>
		<script src="../../assets/js/core/demo/Demo.js"></script>
		<!-- END JAVASCRIPT -->






    <!-- END JAVASCRIPT CODES FOR THE CURRENT PAGE -->
        <!-- END JAVASCRIPT CODES -->        
        
 
	</body>
</html>
