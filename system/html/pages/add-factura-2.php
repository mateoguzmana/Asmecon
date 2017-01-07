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
					

					
					
					



		$Id				=$_REQUEST["Id"];
		
		$query			="SELECT* FROM Ordenes where Id = '$Id' ORDER BY Id Desc" ;
		$result			=mysql_query($query, $id);
		
		While($row		=mysql_fetch_array($result))
		{
		$Idcotiz		=$row["Idcotiz"];
		$Fechaord		=$row["Fechaord"];
		$Fechaentrega	=$row["Fechaentrega"];
		$Valororg		=$row["Valororg"];
		$Valor			=$row["Valor"];
		$Factura		=$row["Factura"];
		$Fechafact		=$row["Fechafact"];
		$Fechafin		=$row["Fechafin"];
		$Aprobo			=$row["Aprobo"];
		$Ordencte		=$row["Ordencte"];
		}
		
		if($Factura		== '000000' )
		{
		$Factura	=	'';	
		}
		
		if($Fechafact	== '0000-00-00' )
		{
		$Fechafact	=	'';	
		}
		
		if($Fechafin	== '0000-00-00' )
		{
		$Fechafin	=	'';	
		}
		

		$query			="SELECT* FROM Cotizaciones where Id = '$Idcotiz' " ;
		$result			=mysql_query($query, $id);
		
		while($row		=mysql_fetch_array($result))
		{
		$Cliente		=$row["Cliente"];
		$Nit			=$row["Nit"];
		$Contacto		=$row["Contacto"];
		$Telefono		=$row["Telefono"];
		$Direccion		=$row["Direccion"];
		$Ciudad			=$row["Ciudad"];
		$Email			=$row["Email"];
		$Fax			=$row["Fax"];
		$Estado			=$row["Estado"];
		$Servicio		=$row["Servicio"];
		}






		$desactivar 	=	'readonly disabled';	











					
					
					
					
					
					
					
					$queryTITMES		="SELECT* FROM Servicios WHERE Nombre = '$Servicio'" ;
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
												<form class="form-horizontal form-validate" role="form" method="post" action="add-factura-3.php" id="form1" name="form1" novalidate>
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
                                                              	<input name="Idcotiz" id="Idcotiz" type="hidden" value="<?=$Idcotiz?>">
                                                              	<input name="Nombreser" id="Nombreser" type="hidden" value="<?=$Nombreser?>">
                                                              	<input name="Id" id="Id" type="hidden" value="<?=$Id?>">
                                                                <select name="jumpMenu" id="jumpMenu" class="form-control" onChange="MM_jumpMenu('parent',this,0)"required  data-placeholder="Seleccione un Servicio" style="background-color:#CCC" <?=$desactivar?>>
            

                                                                  <option value="act-cotizacion-2.php?Id=<?=$Id?>&Idserv=<?=$Idserv?>&Idcliente=<?=$Idcliente?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>" selected><?=$Nombreser?></option>


                                                                </select>

															  </div>
															</div>
														</div>
                                                        
												</div>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                

                                                
                                                
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
                                                                <select name="jumpMenu" id="jumpMenu" class="form-control" onChange="MM_jumpMenu('parent',this,0)"required  data-placeholder="Seleccione el Cliente" style="background-color:#CCC" <?=$desactivar?>>
            

                                                                  <option value="act-cotizacion-2.php?Id=<?=$Id?>&Idserv=<?=$Idserv?>&Idcliente=<?=$Idcliente?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>" selected><?=$Cliente?></option>
                             

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
                                                                	<input type="text" name="Nit" id="Nit" class="form-control" placeholder="Nit del Cliente" value="<?=$Nit?>" required readonly style="background-color: #CCC" <?=$desactivar?>>
																</div>
															</div>
														</div>
                                                        
                                              </div>

                                                     
                                                     <div class="row">   
                                                        



														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Direccion" class="control-label">Dirección</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
                                                                	<input type="text" name="Direccion" id="Direccion" class="form-control" placeholder="Dirección del Cliente" value="<?=$Direccion?>" readonly style="background-color:#CCC" <?=$desactivar?>>
																</div>
															</div>
														</div>
                                                        
                                                        
                                                        
														<div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                                    <label class="control-label">Ciudad</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text" class="form-control" name="Ciudad" id="Ciudad" value ="<?=$Ciudad?>" placeholder="Ciudad del Cliente" readonly style="background-color:#CCC" <?=$desactivar?>>
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
                                                                	<input type="text" name="Telefono" id="Telefono" class="form-control" placeholder="Teléfono del Cliente" value="<?=$Telefono?>" readonly style="background-color:#CCC" <?=$desactivar?>>
																</div>
															</div>
														</div>
                                                        
                                                        
                                                        
														<div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                                    <label class="control-label">Email</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text" class="form-control" name="Email" id="Email" value ="<?=$Email?>" placeholder="Email del Cliente" readonly style="background-color:#CCC" <?=$desactivar?>>
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
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Información del Servicio</a></li>
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
                                                                    <label for="Fechaord" class="control-label">Fecha Orden</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    
                                                                        <input name="Fechaord" type="text" required class="form-control" id="Fechaord" value="<?=$Fechaord?>" <?=$desactivar?>/>
                                                                    
                                                                </div>
                                                            </div>
														</div>
     

														<div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                                    <label for="Fechaord" class="control-label">Fecha Entrega</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    
                                                                        <input name="Fechaentrega" type="text" required class="form-control" id="Fechaentrega" value="<?=$Fechaentrega?>" <?=$desactivar?>/>
                                                                        
                                                                   
                                                                </div>
                                                            </div>
														</div>
                                                        

                                
														<div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                                    <label for="Fechaord" class="control-label">Nro. Orden</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input name="Ordencte" type="text"  required class="form-control" id="Ordencte"  placeholder="Nro. Orden del cliente" onChange="javascript:this.value=this.value.toUpperCase();" value="<?=$Ordencte?>" <?=$desactivar?>>
                                                                </div>
                                                            </div>
														</div>
                                    
                                    
												<div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                                    <label for="Fechaord" class="control-label"></label>
                                                                </div>
                                                                <div class="col-md-10">
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
                                    <td width="55%">&nbsp;DESCRIPCIÓN</td>
                                    <td width="20%">&nbsp;V/UNID.</td>
                                  </tr>
                                </table>
                          										</div>
                        </div> 

                                                     
                                                     
                                                     
                                                     
						<div class="control-group">
																<div class="col-lg-1 col-md-2 col-sm-3">
																	<label for="" class="control-label"></label>
																</div>
																<div class="col-lg-11 col-md-10 col-sm-9">
                          

<?
		$Cont						=0;
		$query						="SELECT* FROM Cotizacionesitem where Idcotiz = '$Idcotiz'" ;
		$result						=mysql_query($query, $id);
		
		while($row					=mysql_fetch_array($result))
		{
		$Cant						= $row["Cant"];
		$Plano						= $row["Plano"];
		$Descripcion				= $row["Descripcion"];
		$Valor						= $row["Valor"];
		$Valort						= $Valor+$Valort;
		$Valor						=number_format($Valor,0,'','.');
		
		
		
		
		$Cont++;
?>  
<div id="contenedor<?=$Cont?>">
    <div class="added">
                                <table width="100%" border="0" style="font-size:11px; border-color:#E4E4E4" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="10%"><input type="text" name="cant<?=$Cont?>" id="cant<?=$Cont?>" placeholder="CANTIDAD" value="<?=$Cant?>" style="width:99%; font-size:11px;" onKeyUp="puntitos(this,this.value.charAt(this.value.length-1));" required <?=$desactivar?>/></td>
                                    <td width="15%"><input type="text" name="plano<?=$Cont?>" id="plano<?=$Cont?>" value="<?=$Plano?>" placeholder="<?=$poner?>" style="width:99%; font-size:11px;" onChange="javascript:this.value=this.value.toUpperCase();" required <?=$desactivar?>/>
                                    <input name="Idcotiz<?=$Cont?>" type="hidden" id="Idcotiz<?=$Cont?>" value="<?=$Id?>"></td>
                                    <td width="55%"><input type="text" name="descri<?=$Cont?>" id="descri<?=$Cont?>" value="<?=$Descripcion?>" placeholder="DESCRIPCION" style="width:99%; font-size:11px;" onChange="javascript:this.value=this.value.toUpperCase();" required <?=$desactivar?>/></td>
                                    <td width="20%"><input type="text" name="vlr<?=$Cont?>" id="vlr<?=$Cont?>" value="<?=$Valor?>"  required placeholder="V/UNID" style="width:99%; font-size:11px;" onKeyUp="puntitos(this,this.value.charAt(this.value.length-1));" <?=$desactivar?>/></td>
                                  </tr>
                                </table>




    
        
        
    </div>
</div>
<?
		}
?>

<br>

                                <table width="100%" border="0" style="font-size:11px; border-color:#E4E4E4" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="10%"></td>
                                    <td width="15%"></td>
                                    <td width="48%"></td>
                                    <td width="7%" align="right"><strong>TOTAL&nbsp;&nbsp;</strong></td>
                                    <td width="10%"><input type="text" name="Valort" id="Valort" value="<?=number_format($Valort,0,'','.');?>"  required placeholder="V/UNID" style="width:99%; font-size:11px;" onKeyUp="puntitos(this,this.value.charAt(this.value.length-1));" <?=$desactivar?>/></td>
                                    <td width="10%" align="right"></td>
                                  </tr>
                                </table>																</div>
                          
                                
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
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Relación Costo Beneficio</a></li>
										</ul>
									</div>
									<!-- END PROFILE TABS -->

									<div class="tab-content">

										<!-- START PROFILE EDITOR -->
										<div class="tab-pane active" id="editDetails">
											<div class="box-body style-white">

														
                                                        
<div class="row"> 
													
                        <div class="control-group">
																<div class="col-lg-1 col-md-2 col-sm-3">
																	<label for="" class="control-label"></label>
																</div>
																<div class="col-lg-11 col-md-10 col-sm-9">
                          


                                
                                <table width="100%" border="1" class="btn-support3" style="font-size:10px; font-weight:bold; height:15px; margin-bottom:10px;" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="50%" height="33">&nbsp;OPERACIÓN</td>
                                    <td width="5%">&nbsp;CANT.</td>
                                    <td width="10%">&nbsp;</td>
                                    <td width="15%">&nbsp;V/UNID</td>
                                    <td width="20%">&nbsp;TOTAL.</td>
                                  </tr>
                                </table>
                                
                                
                          										</div>
                        </div> 

<?
$Transporte						=$Valort*0.2; 
$Calibracion					=$Valort*0.05; 
$Icontec						=$Valort*0.05; 


$VALOR1							=$Valort-($Icontec+$Calibracion+$Transporte); 
$GRANTOTAL						=$Icontec+$Calibracion+$Transporte+$VALOR1; 
$IVA							=$GRANTOTAL*0.16; 
$GRANTOTALIVA					=$IVA+$GRANTOTAL; 
?>                          
                                                     
                                                     
                        <input name="TOTAL" id="TOTAL" type="hidden" value="<?=$Valort?>" required> 
                                                     
						<div class="control-group">
																<div class="col-lg-1 col-md-2 col-sm-3">
																	<label for="" class="control-label"></label>
																</div>
																<div class="col-lg-11 col-md-10 col-sm-9">

								<table width="100%" border="0" style="font-size:10px; font-weight:bold;">
                                  <tr>
                                    <td width="50%">
                                    
                                    <input name="CONCEP1" type="text" id="CONCEP1" placeholder="OPERACION" style="width:97%; font-size:9px;" value="METROLOGIA BÁSICA" readonly/></td>
                                    <td width="5%">
                                    <input name="CANT1" type="text" id="CANT1" placeholder="CANT"  style="width:97%; font-size:9px;" value="1" readonly />
                                    
                                    
                                    
                                    </td>
                                    <td width="10%"><input name="OPC1" type="text" id="OPC1" placeholder="" style="width:97%; font-size:9px;" value="Medición" readonly/></td>
                                    <td width="15%"><input name="VLR1" type="text" id="VLR1" placeholder="V/UNID" style="width:97%; font-size:9px;" value="<?=$VALOR1?>" readonly  /></td>
                                    <td width="20%"><input name="TOTAL1" type="text" id="TOTAL1" placeholder="TOTAL" style="width:97%; font-size:9px;" value="<?=$VALOR1?>" readonly /></td>
                                  </tr>
                                </table>
                          
                          
                                <table width="100%" border="0" style="font-size:10px; font-weight:bold;">
                                  <tr>
                                    
                                    <td width="50%">
                                      <input name="CONCEP2" type="text" id="CONCEP2" placeholder="METROLOGIA BÁSICA" style="width:97%; font-size:9px;" value="INGENIERÍA DE PLANOS" readonly/>
                                    </td>
                                    <td width="5%"><input name="CANT2" type="text" id="CANT2" placeholder="CANT"  style="width:97%; font-size:9px;" value="1" readonly /></td>
                                    <td width="10%">
                                      <input name="OPC2" type="text" id="OPC2" placeholder="" style="width:97%; font-size:9px;" value="Geometria" readonly/>
                                    </td>
                                    <td width="15%">
                                      <input name="VLR2" type="text" id="VLR2" placeholder="V/UNID" style="width:97%; font-size:9px;" value="0" readonly/>
                                    </td>
                                    <td width="20%">
                                      <input name="TOTAL2" type="text" id="TOTAL2" placeholder="TOTAL" style="width:97%; font-size:9px;" value="0" readonly/>
                                    </td>
                                  </tr>
                                </table>
                            
                            

                            <table width="100%" border="0" style="font-size:10px; font-weight:bold;">
                                  <tr>
                                    <td width="50%"><input name="CONCEP3" type="text" id="CONCEP3" placeholder="TRANSPORTE" style="width:97%; font-size:9px;" value="TRANSPORTE" readonly/></td>
                                    <td width="5%"><input name="CANT3" type="text" id="CANT3" placeholder="CANT"  style="width:97%; font-size:9px;" value="1" readonly /></td>
                                    <td width="10%"><input name="OPC3" type="text" id="OPC3" placeholder="" style="width:97%; font-size:9px;" value="transporte" readonly/></td>
                                    <td width="15%"><input name="VLR3" type="text" id="VLR3" placeholder="V/UNID" style="width:97%; font-size:9px;" value="<?=$Transporte?>" readonly/></td>
                                    <td width="20%"><input name="TOTAL3" type="text" id="TOTAL3" placeholder="TOTAL" style="width:97%; font-size:9px;" value="<?=$Transporte?>" readonly /></td>
                              </tr>
                                </table>
                                
                                
                                
                                
                            <table width="100%" border="0" style="font-size:10px; font-weight:bold;">
                                  <tr>
                                    <td width="50%"><input name="CONCEP4" type="text" id="CONCEP4" placeholder="ENSAYOS" style="width:97%; font-size:9px;" value="ENSAYOS" readonly/></td>
                                    <td width="5%"><input name="CANT4" type="text" id="CANT4" placeholder="CANT" style="width:97%; font-size:9px;" onChange="calculo(this.value,VLR4.value,TOTAL4,GRANTOTAL);" value="0" readonly /></td>
                                    <td width="10%"><input name="OPC4" type="text" id="OPC4" placeholder="" style="width:97%; font-size:9px;" value="UDEA" readonly/></td>
                                    <td width="15%"><input name="VLR4" type="text" id="VLR4" placeholder="V/UNID" style="width:97%; font-size:9px;" value="0" readonly /></td>
                                    <td width="20%"><input name="TOTAL4" type="text" id="TOTAL4" placeholder="TOTAL" style="width:97%; font-size:9px;" value="0" readonly/></td>
                              </tr>
                                </table>

                            
                            <table width="100%" border="0" style="font-size:10px; font-weight:bold;">
                                  <tr>
                                    <td width="50%"><input name="CONCEP5" type="text" id="CONCEP5" placeholder="CALIBRACIÓN INSTRUMENTOS" style="width:97%; font-size:9px;" value="CALIBRACIÓN INSTRUMENTOS" readonly/></td>
                                    <td width="5%"><input name="CANT5" type="text" id="CANT5" placeholder="CANT" style="width:97%; font-size:9px;" onChange="calculo(this.value,VLR5.value,TOTAL5,GRANTOTAL);" value="1" readonly /></td>
                                    <td width="10%"><input name="OPC5" type="text" id="OPC5" placeholder="" style="width:97%; font-size:9px;" value="SIC" readonly/></td>
                                    <td width="15%"><input name="VLR5" type="text" id="VLR5" placeholder="V/UNID" style="width:97%; font-size:9px;" value="<?=$Calibracion?>" readonly /></td>
                                    <td width="20%"><input name="TOTAL5" type="text" id="TOTAL5" placeholder="TOTAL" style="width:97%; font-size:9px;" value="<?=$Calibracion?>" readonly/></td>
                              </tr>
                                </table>
                                

                                
                                <table width="100%" border="0" style="font-size:10px; font-weight:bold;">
                                  <tr>
                                    <td width="50%"><input name="CONCEP6" type="text" id="CONCEP6" placeholder="INFORMES GENERADOS" style="width:97%; font-size:9px;" value="INFORMES GENERADOS" readonly/></td>
                                    <td width="5%"><input name="CANT6" type="text" id="CANT6" placeholder="CANT" style="width:97%; font-size:9px;" onChange="calculo(this.value,VLR6.value,TOTAL6,GRANTOTAL);" value="1" readonly /></td>
                                    <td width="10%"><input name="OPC6" type="text" id="OPC6" placeholder="" style="width:97%; font-size:9px;" value="Icontec" readonly/></td>
                                    <td width="15%"><input name="VLR6" type="text" id="VLR6" placeholder="V/UNID" style="width:97%; font-size:9px;" value="<?=$Icontec?>" readonly /></td>
                                    <td width="20%"><input name="TOTAL6" type="text" id="TOTAL6" placeholder="TOTAL" style="width:97%; font-size:9px;" value="<?=$Icontec?>" readonly /></td>
                                  </tr>
                                </table>
                                
                            <table width="100%" border="0" style="font-size:10px; font-weight:bold;">
                                  <tr>
                                    <td width="50%"></td>
                                    <td width="5%"></td>
                                    <td width="10%"></td>
                                    <td width="15%" align="right">TOTAL NETO:&nbsp;</td>
                                    <td width="20%">

                            
                            
                                    <input name="GRANTOTAL" type="text" id="GRANTOTAL" placeholder="GRAN TOTAL" style="width:97%; font-size:11px;" value="<?=$GRANTOTAL?>" readonly />
                                    
                                    
                                    </td>
                              </tr>
                                </table>
                                <table width="100%" border="0" style="font-size:10px; font-weight:bold;">
                                  <tr>
                                    <td width="50%">&nbsp;</td>
                                    <td width="5%">&nbsp;</td>
                                    <td width="10%">&nbsp;</td>
                                    <td width="15%"><input name="VLRA" type="text" id="VLRA" placeholder="V/UNID" style="width:97%; font-size:9px;" value="IVA 16%" readonly /></td>
                                    <td width="20%"><input name="IVA" type="text" id="IVA" placeholder="TOTAL" style="width:97%; font-size:9px;" value="<?=$IVA?>" readonly /></td>
                                  </tr>
                                </table>
                                <table width="100%" border="0" style="font-size:10px; font-weight:bold;">
                                  <tr>
                                    <td width="50%"></td>
                                    <td width="5%"></td>
                                    <td width="10%"></td>
                                    <td width="15%" align="right">GRAN TOTAL:&nbsp;</td>
                                    <td width="20%"><input name="GRANTOTAL2" type="text" id="GRANTOTAL2" placeholder="GRAN TOTAL" style="width:97%; font-size:11px;" value="<?=$GRANTOTALIVA?>" readonly /></td>
                                  </tr>
                                </table>




    
        
        


<br>


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
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Información del Facturación</a></li>
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
                                                                    <label for="Fechaf" class="control-label">Fecha Fact.</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <div class='input-group date' id='demo-date-start'>
                                                                        <input name="Fechaf" type="text" required class="form-control" id="Fechaf"/>
                                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
														</div>
     

														<div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="col-lg-2 col-md-4 col-sm-6">
                                                                    <label for="Fechau" class="control-label">Fecha Venc.</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <div class='input-group date' id='demo-date-end'>
                                                                        <input name="Fechau" type="text" required class="form-control" id="Fechau"/>
                                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                        
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
															<br/><br/>
                                                            
                                                            
                                                            

                                                            <button type="submit" id="enviar" class="btn btn-primary">Realizar Cambios</button> 


                                                            
                                                          <button type="button" id="enviar" class="btn btn-support5" onClick="location.href='add-factura.php?Id=<?=$Id?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>'">Volver</button> 
                                                       
                                                      		<br/><br/>
                                                        <?
														}
														?> 
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
                    
                    
                    
                    
                    
                    
                    
				  </form>
				</section>
                
                
                
                
                
                
				<!-- START FORM MODAL MARKUP --><!-- /.modal -->
				<!-- END FORM MODAL MARKUP -->


         
         
         
         
         
         
         
         
         
         
         
				<!-- START FORM MODAL MARKUP --><!-- /.modal -->
				<!-- END FORM MODAL MARKUP -->
                
                
                
                
                
                
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




<script type="text/javascript">

	 
$(document).ready(function() 
{

    var MaxInputs       = 50; //Número Maximo de Campos
    var contenedor      = $("#contenedor<?=$Cont?>"); //ID del contenedor
    var AddButton       = $("#agregarCampo"); //ID del Botón Agregar

    //var x = número de campos existentes en el contenedor
    var x = $("#contenedor<?=$Cont?> div").length + <?=$Cont?>;
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
