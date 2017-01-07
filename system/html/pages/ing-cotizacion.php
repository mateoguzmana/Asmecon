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


				
					$queryTITMEN		="SELECT* FROM Menusub WHERE Id = ".$_REQUEST["Idsubmenu"] ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
					$NombreTITMEN		=$rowTITMEN["Nombre"];
					}
					
					

					
					$LineaMenuS			=$NombreTITMEN;
					
					$Idcliente			=$_REQUEST["Idcliente"];
					$Idserv				=$_REQUEST["Idserv"];
					
					
					$queryTITMES		="SELECT* FROM Servicios WHERE Id = '$Idserv'" ;
					$resultTITMES		=mysql_query($queryTITMES, $id);
					
					While($rowTITMES	=mysql_fetch_array($resultTITMES))
					{
					$Nombreser			=$rowTITMES["Nombre"];
					}
					
					
                          if($Nombreser == 'LABORATORIO Y CALIBRACIÓN')
						  {
							 $poner		=	'INSTRUMENTO'; 
							 $recoge	=	'1'; 
						  }
						  else
						  {
							 $poner		=	'PLANO';   
							 $recoge	=	'2'; 
						  }
					
					
					$queryTITMEN		="SELECT* FROM Clientes WHERE Id = '$Idcliente'" ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
					$Nombreclien		=$rowTITMEN["Nombre"];
					$Nitclien			=$rowTITMEN["Cedula"];
					$Ciudadclien		=$rowTITMEN["Ciudad"];
					$Dirclien			=$rowTITMEN["Dir"];
					$Telefonoclien		=$rowTITMEN["Telefono"];
					$Emailclien			=$rowTITMEN["Email"];
					}

					
					$horaactual 		=date("Y-m-d");
					


					
					
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
												<form class="form-horizontal form-validate" role="form" method="post" action="ing-cotizacion-2.php" id="form1" name="form1" novalidate>
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
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Información de Contacto</a></li>
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
																	<label for="Tipo" class="control-label">Servicio</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
                                                              	<input name="Idserv" id="Idserv" type="hidden" value="<?=$Idserv?>">
                                                              	<input name="Nombreser" id="Nombreser" type="hidden" value="<?=$Nombreser?>">
                                                                <select name="jumpMenu" id="jumpMenu" class="form-control" onChange="MM_jumpMenu('parent',this,0)"required  data-placeholder="Seleccione un Servicio" style="background-color:#CCC">
            
                                                                        <?
                                                                        if(!empty($Idserv))
																		{
																		?>
                                                                  <option value="ing-cotizacion.php?Idserv=<?=$Idserv?>&Idcliente=<?=$Idcliente?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>" selected><?=$Nombreser?></option>
                                                                        <?
																		}
																		else
																		{
																		?>
                                                                        <option value="ing-cotizacion.php" selected>Seleccione un Servicio</option>
                                                                        <?
																		}
																		
                                                                        $queryTIS		="SELECT* FROM Servicios where Muestra = 0 and Id <> '$Idserv' order by Nombre";
                                                                        $resultTIS		=mysql_query($queryTIS, $id);
                                                                        
                                                                        While($rowTIS	=mysql_fetch_array($resultTIS))
                                                                        {
                                                                        $IdTIS			=$rowTIS["Id"];
																		$NombreTIS		=$rowTIS["Nombre"];
                                                                        ?>
                                                                        <option value="ing-cotizacion.php?Idserv=<?=$IdTIS?>&Idcliente=<?=$Idcliente?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>"><?=$NombreTIS?></option>
																		<?
																		}
																		?>

                                                                </select>

															  </div>
															</div>
														</div>
                                                        
												</div>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
<?
if(!empty($Idserv))
{
?>
                                                
                                                
													<div class="row">
                                                    
                                                    
														<div class="col-sm-6">
															<div class="form-group">
															  <div class="col-lg-2 col-md-4 col-sm-6">
																<label for="Tipo" class="control-label">Cliente</label>
															    <input name="Idmenu" type="hidden" id="Idmenu" value="<?=$_REQUEST["Idmenu"]?>">
																<input name="Idsubmenu" type="hidden" id="Idsubmenu" value="<?=$_REQUEST["Idsubmenu"]?>">
															    <input name="Idopcmenu" type="hidden" id="Idopcmenu" value="<?=$_REQUEST["Idopcmenu"]?>">
															  </div>
																<div class="col-lg-10 col-md-8 col-sm-6">
                                                              	<input name="Idcliente" id="Idcliente" type="hidden" value="<?=$Idcliente?>">
                                                              	<input name="Nombrecli" id="Nombrecli" type="hidden" value="<?=$Nombreclien?>">
                                                                <select name="jumpMenu" id="jumpMenu" class="form-control" onChange="MM_jumpMenu('parent',this,0)"required  data-placeholder="Seleccione el Cliente" style="background-color:#CCC">
            
                                                                        <?
                                                                        if(!empty($Idcliente))
																		{
																		?>
                                                                  <option value="ing-cotizacion.php?Idserv=<?=$Idserv?>&Idcliente=<?=$Idcliente?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>" selected><?=$Nombreclien?></option>
                                                                        <?
																		}
																		else
																		{
																		?>
                                                                        <option value="ing-cotizacion.php?Idserv=<?=$Idserv?>" selected>Seleccione el Cliente</option>
                                                                        <?
																		}
																		
                                                                        $queryTIP		="SELECT* FROM Clientes where Muestra = 0 and Id <> '$Idcliente' order by Nombre";
                                                                        $resultTIP		=mysql_query($queryTIP, $id);
                                                                        
                                                                        While($rowTIP	=mysql_fetch_array($resultTIP))
                                                                        {
                                                                        $IdTIP			=$rowTIP["Id"];
																		$NombreTIP		=$rowTIP["Nombre"];
                                                                        ?>
                                                                        <option value="ing-cotizacion.php?Idserv=<?=$Idserv?>&Idcliente=<?=$IdTIP?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>"><?=$NombreTIP?></option>
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
																	<label for="Nit" class="control-label">Nit</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
                                                                	<input type="text" name="Nit" id="Nit" class="form-control" placeholder="Nit del Cliente" value="<?=$Nitclien?>" required readonly style="background-color: #CCC">
																</div>
															</div>
														</div>
                                                        
                                              </div>
<?
}
?>
                                                     
                                                     <div class="row">   
                                                        
<?
if(!empty($Idcliente))
{
?>


														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Direccion" class="control-label">Dirección</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
                                                                	<input type="text" name="Direccion" id="Direccion" class="form-control" placeholder="Dirección del Cliente" value="<?=$Dirclien?>" required readonly style="background-color:#CCC">
																</div>
															</div>
														</div>
                                                        
                                                        
                                                        
														<div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                                    <label class="control-label">Ciudad</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text" class="form-control" name="Ciudad" id="Ciudad" value ="<?=$Ciudadclien?>" placeholder="Ciudad del Cliente" required readonly style="background-color:#CCC">
                                                                </div>
                                                            </div>
														</div>






                                                     </div>   
                                                     
                                              <div class="row">  
                                                     
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Telefono" class="control-label">Teléfono</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
                                                                	<input type="text" name="Telefono" id="Telefono" class="form-control" placeholder="Teléfono del Cliente" value="<?=$Telefonoclien?>" required readonly style="background-color:#CCC">
																</div>
															</div>
														</div>
                                                        
                                                        
                                                        
														<div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                                    <label class="control-label">Email</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text" class="form-control" name="Email" id="Email" value ="<?=$Emailclien?>" placeholder="Email del Cliente" required readonly style="background-color:#CCC">
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
					</div><!--end .section-body -->
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
<div class="section-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="box style-transparent">
									<!-- START PROFILE TABS -->
									<div class="box-head">
										<ul class="nav nav-tabs tabs-transparent" data-toggle="tabs">
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Información del servicio</a></li>
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
																	<label for="Direccion" class="control-label">Asunto</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
                                                                	<input type="text" name="Asunto" id="Asunto" class="form-control" placeholder="Ingrese un Asunto" required onChange="javascript:this.value=this.value.toUpperCase();">
																</div>
															</div>
											     </div>
                                                        
                                                        
                                                        
													<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Tipo" class="control-label">Información</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
                                                                
                                                                
                                                                <select name="Informacion" id="Informacion" class="form-control select2-list" data-placeholder="Seleccione una Opción" required>
            
                                                                        <option value="" selected>Seleccione una Opción</option>

                                                                            <option value="PLANO">PLANO</option>
                                                                            <option value="REPUESTO">REPUESTO</option>
                                                                            <option value="NORMAS">NORMAS</option>
                                                                            <option value="INSTRUMENTO">INSTRUMENTO</option>
                                                                            <option value="INFORMACION TECNICA">INFORMACION TECNICA</option>

            
                                                                </select>

																</div>
															</div>
														</div>






                                              </div>   
                                                     
                                                     <div class="row">  
                                                     
                                                             <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <div class="col-lg-2 col-md-4 col-sm-6">
                                                                                <label for="Alcance" class="control-label">Alcance</label>
                                                                            </div>
                                                                            <div class="col-lg-10 col-md-8 col-sm-6">
                                                                                <input type="text" name="Alcance" id="Alcance" class="form-control" placeholder="Ingrese un Alcance" required onChange="javascript:this.value=this.value.toUpperCase();">
                                                                            </div>
                                                                        </div>
                                                             </div>
                                                        
                                                        
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <div class="col-lg-2 col-md-4 col-sm-6">
                                                                            <label class="control-label">Informe</label>
                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            <input type="text" class="form-control" name="Informe" id="Informe"  placeholder="Informe a Entregar"  required onChange="javascript:this.value=this.value.toUpperCase();">
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                     </div>   
                                                     


                                                     <div class="row">  
                                                     
                                                             <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <div class="col-lg-2 col-md-4 col-sm-6">
                                                                                <label for="Lugar" class="control-label">Lugar</label>
                                                                            </div>
                                                                            <div class="col-lg-10 col-md-8 col-sm-6">
                                                                                <input type="text" name="Lugar" id="Lugar" class="form-control" placeholder="Lugar de Inspección" required onChange="javascript:this.value=this.value.toUpperCase();">
                                                                            </div>
                                                                        </div>
                                                             </div>
                                                        
                                                        
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <div class="col-lg-2 col-md-4 col-sm-6">
                                                                            <label class="control-label">Transporte</label>
                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            <input type="text" class="form-control" name="Transporte" id="Transporte"  placeholder="Transporte"  required onChange="javascript:this.value=this.value.toUpperCase();">
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                     </div>   
                                                     
                                                     
                                                     
                                                     
                                                     
                                                     <div class="row">  
                                                     
                                                             <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <div class="col-lg-2 col-md-4 col-sm-6">
                                                                                <label for="Embalaje" class="control-label">Embalaje</label>
                                                                            </div>
                                                                            <div class="col-lg-10 col-md-8 col-sm-6">
                                                                                <input type="text" name="Embalaje" id="Embalaje" class="form-control" placeholder="Embalaje" required onChange="javascript:this.value=this.value.toUpperCase();">
                                                                            </div>
                                                                        </div>
                                                             </div>
                                                        
                                                        
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <div class="col-lg-2 col-md-4 col-sm-6">
                                                                            <label class="control-label">Validez</label>
                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            <input type="text" class="form-control" name="Validez" id="Validez"  placeholder="Validez"  required onChange="javascript:this.value=this.value.toUpperCase();">
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                     </div> 
                                                     
                                                     
                                                     
                                                     
                                                     
                                                     
                                                     
                                                     <div class="row">  
                                                     
                                                             <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <div class="col-lg-2 col-md-4 col-sm-6">
                                                                                <label for="Embalaje" class="control-label">Pago</label>
                                                                            </div>
                                                                            <div class="col-lg-10 col-md-8 col-sm-6">
                                                                                <input type="text" name="Forma" id="Forma" class="form-control" placeholder="Forma de Pago" required onChange="javascript:this.value=this.value.toUpperCase();">
                                                                            </div>
                                                                        </div>
                                                             </div>
                                                        
                                                        
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <div class="col-lg-2 col-md-4 col-sm-6">
                                                                            <label class="control-label">Entrega</label>
                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            <input type="text" class="form-control" name="Entrega" id="Entrega"  placeholder="Tiempo de Entrega"  required onChange="javascript:this.value=this.value.toUpperCase();">
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
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Descripción de la Cotización</a></li>
										</ul>
									</div>
									<!-- END PROFILE TABS -->

									<div class="tab-content">

										<!-- START PROFILE EDITOR -->
										<div class="tab-pane active" id="editDetails">
											<div class="box-body style-white">
											  <div class="form-group">
												  	<div class="col-lg-1 col-md-2 col-sm-3">
																	<label for="Descripcion" class="control-label">Detalles</label>
											    	</div>
																<div class="col-lg-11 col-md-10 col-sm-9">
                                                                  <textarea name="Descripcion" rows="3" class="form-control" id="Descripcion" placeholder="Detalles / Observaciones" onChange="javascript:this.value=this.value.toUpperCase();"></textarea>
																</div>
											  </div>
														
                                                        
<div class="row"> 
													
                        <div class="control-group">
																<div class="col-lg-1 col-md-2 col-sm-3">
																	<label for="" class="control-label"></label>
																</div>
																<div class="col-lg-11 col-md-10 col-sm-9">
                          

                                <table width="100%" border="1" class="btn-support3" style="font-size:10px; font-weight:bold; height:15px; margin-bottom:10px;" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="10%" height="33">&nbsp;CANT.</td>
                                    <td width="15%">&nbsp;<?=$poner?></td>
                                    <td width="48%">&nbsp;DESCRIPCIÓN</td>
                                    <td width="7%">&nbsp;</td>
                                    <td width="10%">&nbsp;V/UNID.</td>
                                    <td width="10%" align="right">
                                    <a id="agregarCampo" href="#" style="border:0px;"><img src="../../assets/img/add.png" border= "0" style="margin-right:5px;"></a></td>
                                  </tr>
                                </table>
                          										</div>
                        </div> 

                                                     
                                                     
                                                     
                                                     
						<div class="control-group">
																<div class="col-lg-1 col-md-2 col-sm-3">
																	<label for="" class="control-label"></label>
																</div>
																<div class="col-lg-11 col-md-10 col-sm-9">
                          
<div id="contenedor">
    <div class="added">
                                <table width="100%" border="0" style="font-size:11px; border-color:#E4E4E4" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="10%"><input type="text" name="cant1" id="cant1" placeholder="CANTIDAD" style="width:99%; font-size:11px;" onKeyUp="puntitos(this,this.value.charAt(this.value.length-1));" required/></td>
                                    <td width="15%"><input type="text" name="plano1" id="plano1" placeholder="<?=$poner?>" style="width:99%; font-size:11px;" onChange="javascript:this.value=this.value.toUpperCase();" required/>
                                    <input name="Idobra1" type="hidden" id="Idcotiz1"></td>
                                    <td width="48%"><input type="text" name="descri1" id="descri1" placeholder="DESCRIPCION" style="width:99%; font-size:11px;" onChange="javascript:this.value=this.value.toUpperCase();" required/></td>
                                    <td width="7%"> <a href="#" onClick="window.open('lista-precios.php?Recoge=<?=$recoge?>&Cont=1','precios','menubar=no,scrollbars=yes, width=600, height=600');return false"><img src="../../assets/img/buscar.gif" boder = "0"></a></td>
                                    <td width="10%"><input type="text" name="vlr1" id="vlr1" required placeholder="V/UNID" style="width:99%; font-size:11px;" onKeyUp="puntitos(this,this.value.charAt(this.value.length-1));"/></td>
                                    <td width="10%" align="right">
                                    <a href="#" class="borrar"><img src="../../assets/img/delete.png" border = "0" style="margin-right:5px;"></a></td>
                                  </tr>
                                </table>






    
        
        
    </div>
</div>
																</div>
                          
                                
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
															<br/><br/><button type="submit" id="enviar" class="btn btn-primary">Realizar Operación</button>
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
        <script src="../../assets/js/libs/bootstrap-datetimepicker/locales/bootstrap-datetimepicker.es.js"></script>
		<script src="../../assets/js/core/demo/DemoFormComponents.js"></script>
		<script src="../../assets/js/libs/jquery-validation/dist/additional-methods.min.js"></script>
		<script src="../../assets/js/core/App.js"></script>
		<script src="../../assets/js/core/demo/Demo.js"></script>
		<!-- END JAVASCRIPT -->




<script type="text/javascript">

	 
$(document).ready(function() 
{

    var MaxInputs       = 50; //Número Maximo de Campos
    var contenedor      = $("#contenedor"); //ID del contenedor
    var AddButton       = $("#agregarCampo"); //ID del Botón Agregar

    //var x = número de campos existentes en el contenedor
    var x = $("#contenedor div").length + 1;
    var FieldCount = x-1; //para el seguimiento de los campos
	


    $(AddButton).click(function (e) 
	{
        if(x <= MaxInputs) //max input box allowed
        {
            FieldCount++;

            //agregar campo
            $(contenedor).append('<div><table width="100%" border="0" style="font-size:11px; border-color:#E4E4E4;" cellpadding="0" cellspacing="0" height="20"><tr><td width="10%"><input type="text" name="cant'+ FieldCount +'" id="cant'+ FieldCount +'" placeholder="CANTIDAD" style="width:99%; font-size:11px;" onKeyUp="puntitos(this,this.value.charAt(this.value.length-1));" required/></td> <td width="15%"><input type="text" name="plano'+ FieldCount +'" id="plano'+ FieldCount +'" placeholder="<?=$poner?>" style="width:99%; font-size:11px;" onChange="javascript:this.value=this.value.toUpperCase();" required/><input type="hidden" name="Idcotiz'+ FieldCount +'" id="Idcotiz'+ FieldCount +'"></td><td width="48%"><input type="text" name="descri'+ FieldCount +'" id="descri'+ FieldCount +'" placeholder="DESCRIPCION" style="width:99%; font-size:11px;" onChange="javascript:this.value=this.value.toUpperCase();" required/></td> <td width="7%"><a href="#" onClick="window.open(&quot;lista-precios.php?Recoge=<?=$recoge?>&Cont='+ FieldCount +'&quot;,&quot;precios&quot;,&quot;menubar=no,scrollbars=yes, width=600, height=600&quot;);return false"><img src="../../assets/img/buscar.gif" boder = "0"></a></td> <td width="10%"><input type="text" name="vlr'+ FieldCount +'" id="vlr'+ FieldCount +'" placeholder="V/UNID" style="width:99%; font-size:11px;" onKeyUp="puntitos(this,this.value.charAt(this.value.length-1));" required/></td><td width="10%" align="right"><a href="#" class="borrar"><img src="../../assets/img/delete.png" border = "0" style="margin-right:5px;"></a></td></tr></table></div>');

            x++; //text box increment
        }
        return false;
    });

    $("body").on("click",".borrar", function(e)
	{ //click en eliminar campo
        if( x > 1 ) 
		{
            $(this).parent().parent().remove(); //eliminar el campo
            x--;
			
        }
        return false;
    });
	
	


    $(enviar).click(function (e) 
	{
        if(  x == 1 ) 
		{
           alert("No hay movimientos cargados.");
		    return false;
        }
		else
		{
			 return true;
		}
       
    });
	
	
});
 
</script>

    <!-- END JAVASCRIPT CODES FOR THE CURRENT PAGE -->
        <!-- END JAVASCRIPT CODES -->        
        
 
	</body>
</html>
