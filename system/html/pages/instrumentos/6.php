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
					

					
					$Id					=$_REQUEST['Id'];
			
					$query				="SELECT* FROM Recepcion where Id = '$Id' Order by Id ASC" ;
					$result				=mysql_query($query, $id);
					
					While($row			=mysql_fetch_array($result))
					{
					$Idservicio			=$row["Idservicio"];
					$Fecha				=$row["Fecha"];
					$Cotizacion			=$row["Cotizacion"];
					$Cliente			=$row["Cliente"];
					$Nit				=$row["Nit"];
					$Foto				=$row["Foto"];
					$Descripcion		=$row["Descripcion"];
					$Tipoinst			=$row["Tipoinst"];
					$Identificacion		=$row["Identificacion"];
					$Soporte			=$row["Soporte"];
					$Nrosopo			=$row["Nrosopo"];
					$Unidades			=$row["Unidades"];
					$Comentarios		=$row["Comentarios"];
					$Fechahora			=$row["Fechahora"];
					$Usuario			=$row["Usuario"];
					$Salida				=$row["Salida"];
					$Usuariosaca		=$row["Usuariosaca"];
					$Fechasale			=$row["Fechasale"];
					$Certificado		=$row["Certificado"];
					$Observaciones		=$row["Observaciones"];
					}
					

					$queryS					="SELECT* FROM Soporte where Id = '$Soporte' and Activo = 0 and Muestra = 0  ORDER BY Nombre" ;
					$resultS				=mysql_query($queryS, $id);
					
					while($rowS				=mysql_fetch_array($resultS))
					{
					$NombresopoS			= $rowS["Nombre"];
					$IdsopoS				= $rowS["Id"];
					}


					if($Salida == 1)
					{
					$ponga 	=	'readonly disabled';	
					}
					else
					{
					$ponga 	=	'';	
					}
					
					$Idccotiz			=$_REQUEST["Idccotiz"];
					
					if(empty($Idccotiz))
					{
					$Idccotiz			=$Cotizacion;	
					}
					else
					{
					$Idccotiz			=$Idccotiz;	
					}

					
					$Idserv				=$_REQUEST["Idserv"];
					

					if(empty($Idserv))
					{
					$Idserv				=$Idservicio;	
					}
					else
					{
					$Idserv				=$Idserv;	
					}

					
					
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
					
					
					$queryTITMEN		="SELECT * FROM Cotizaciones WHERE Id = '$Idccotiz'" ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
					$Nombreclien		=$rowTITMEN["Cliente"];
					$Nitclien			=$rowTITMEN["Nit"];
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
												<form class="form-horizontal form-validate" role="form" method="post" action="act-recepcion-3.php" id="form1" name="form1" enctype="multipart/form-data" novalidate>
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
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Información de Cotización</a></li>
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
                                                              	<input name="Id" id="Id" type="hidden" value="<?=$Id?>">
                                                              	<input name="Idccotiz" id="Idccotiz" type="hidden" value="<?=$Idccotiz?>">
                                                              	<input name="Nitclien" id="Nitclien" type="hidden" value="<?=$Nitclien?>">
                                                              	<input name="Idservicio" id="Idservicio" type="hidden" value="<?=$Idserv?>">
                                                                <select name="jumpMenu" id="jumpMenu" class="form-control" onChange="MM_jumpMenu('parent',this,0)"required  data-placeholder="Seleccione un Servicio" style="background-color:#CCC" <?=$ponga?>>
            
                                                                        <?
                                                                        if(!empty($Idserv))
																		{
																		?>
                                                                  <option value="act-recepcion-2.php?Id=<?=$Id?>&Idserv=<?=$Idserv?>&Idccotiz=<?=$Idccotiz?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>" selected><?=$Nombreser?></option>
                                                                        <?
																		}
																		else
																		{
																		?>
                                                                        <option value="act-recepcion-2.php?Id=<?=$Id?>" selected>Seleccione un Servicio</option>
                                                                        <?
																		}
																		
                                                                        $queryTIS		="SELECT* FROM Servicios where Muestra = 0 and Id <> '$Idcliente' order by Nombre";
                                                                        $resultTIS		=mysql_query($queryTIS, $id);
                                                                        
                                                                        While($rowTIS	=mysql_fetch_array($resultTIS))
                                                                        {
                                                                        $IdTIS			=$rowTIS["Id"];
																		$NombreTIS		=$rowTIS["Nombre"];
                                                                        ?>
                                                                        <option value="act-recepcion-2.php?Id=<?=$Id?>&Idserv=<?=$IdTIS?>&Idccotiz=<?=$Idccotiz?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>"><?=$NombreTIS?></option>
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
																<label for="Tipo" class="control-label">Nro. Cotización </label>
															    <input name="Idmenu" type="hidden" id="Idmenu" value="<?=$_REQUEST["Idmenu"]?>" <?=$ponga?>>
																<input name="Idsubmenu" type="hidden" id="Idsubmenu" value="<?=$_REQUEST["Idsubmenu"]?>">
															    <input name="Idopcmenu" type="hidden" id="Idopcmenu" value="<?=$_REQUEST["Idopcmenu"]?>">
															  </div>
																<div class="col-lg-10 col-md-8 col-sm-6">
																  <select name="jumpMenu" id="jumpMenu" class="form-control" onChange="MM_jumpMenu('parent',this,0)"required  data-placeholder="Seleccione una Cotización" style="background-color:#CCC" <?=$ponga?>>
            
                                                                        <?
                                                                        if(!empty($Idccotiz))
																		{
																		?>
                                                                  <option value="act-recepcion-2.php?Id=<?=$Id?>&Idserv=<?=$Idserv?>&Idccotiz=<?=$Idccotiz?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>" selected><?=$Idccotiz?></option>
                                                                        <?
																		}
																		else
																		{
																		?>
                                                                        <option value="act-recepcion-2.php?Id=<?=$Id?>&Idserv=<?=$Idserv?>" selected>Seleccione una Cotización</option>
                                                                        <?
																		}
																		
                                                                        $queryTIP		="SELECT* FROM Cotizaciones where Estado = 'SI' and Id <> '$Idccotiz' order by Id";
                                                                        $resultTIP		=mysql_query($queryTIP, $id);
                                                                        
                                                                        While($rowTIP	=mysql_fetch_array($resultTIP))
                                                                        {
                                                                        $IdTIP			=$rowTIP["Id"];
                                                                        ?>
                                                                        <option value="act-recepcion-2.php?Id=<?=$Id?>&Idserv=<?=$Idserv?>&Idccotiz=<?=$IdTIP?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>"><?=$IdTIP?></option>
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
																	<label for="Nit" class="control-label">Cliente</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
                                                                	<input type="text" name="Cliente" id="Cliente" class="form-control" placeholder="Cliente" value="<?=$Nombreclien?>" required readonly style="background-color: #CCC" <?=$ponga?>>
																</div>
															</div>
														</div>
                                                        
                                              </div>
<?
}
?>
                                                     
                                                        
<?
if(!empty($Idccotiz))
{
?>





                                                     

  
														
                                                        
                                                         

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        


                                                        

                                                        
                                                        


                                                    
                                                    

                                                    
                                                    


                                                
                                                
                                                
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
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Información del Ingreso</a></li>
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
                                                                        <input type="text" class="form-control" required name="Fecha" id="Fecha" value="<?=$Fecha?>" <?=$ponga?>/>
                                                            <?
                                                            if($Salida == 0)
															{
															?>
                                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            <?
															}
															?>
                                                                    </div>
                                                                </div>
															</div>
											     </div>
                                                 


                                                        
                                                        
                                                        
													<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Tipo" class="control-label">Descripción</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
<?
		$query					="SELECT COUNT(*) AS TOTAL FROM Descripcion where Idservicio = '$Idserv'  and Activo = 0 and Muestra = 0  ORDER BY Nombre" ;
		$result					=mysql_query($query, $id);
		
		while($row				=mysql_fetch_array($result))
		{
		$TOTAL0					= $row["TOTAL"];
		}
		
		if($TOTAL0 == 0)
		{
?>                        
                      
<input id="Descripcion" name="Descripcion"  value="<?=$Descripcion?>" placeholder="Descripción" class="form-control" type="text" onChange="javascript:this.value=this.value.toUpperCase();" required <?=$ponga?>>
<?
		}
		else
		{
?>                      
                      
                                <select name="Informacion" id="Informacion" class="form-control select2-list" data-placeholder="Seleccione una Opción" required <?=$ponga?>>
                                <option value="<?=$Descripcion?>"><?=$Descripcion?></option>
                                
<?
			$query					="SELECT* FROM Descripcion where Idservicio = '$Idserv'  and Activo = 0 and Muestra = 0   ORDER BY Nombre" ;
			$result					=mysql_query($query, $id);
			
			while($row				=mysql_fetch_array($result))
			{
			$Nombredesc				= $row["Nombre"];
			$Iddesc					= $row["Id"];
?>  
                                    <option value="<?=$Nombredesc?>"><?=$Nombredesc?></option>
                                    
<?
			}
?>
                                                                


            
                                </select>
                                
<?
		}
?>
																</div>
															</div>
														</div>






                                              </div>   
                                              
                                              

                                                     
                                                     
                    
<?
		$query					="SELECT COUNT(*) AS TOTAL FROM Tipoinstrumento where Idservicio = '$Idserv' and Activo = 0 and Muestra = 0  ORDER BY Nombre" ;
		$result					=mysql_query($query, $id);
		
		while($row				=mysql_fetch_array($result))
		{
		$TOTAL1					= $row["TOTAL"];
		}
		
		if($TOTAL1 > 0)
		{
?>
                    
                                                     <div class="row">  
                                                     
                                                             <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                        
                                                                            <div class="col-lg-2 col-md-4 col-sm-6">
                                                                                <label for="Tipoinst" class="control-label">Instrumento</label>
                                                                            </div>
                                                                        
                                                                            <div class="col-lg-10 col-md-8 col-sm-6">
                            
                                <select name="Tipoinst" id="Tipoinst" class="form-control select2-list" data-placeholder="Seleccione una Opción" required <?=$ponga?>>

                            
                                    <option value="<?=$Tipoinst?>" selected><?=$Tipoinst?></option>
<?
			$query					="SELECT* FROM Tipoinstrumento where Idservicio = '$Idserv' and Activo = 0 and Muestra = 0  ORDER BY Nombre" ;
			$result					=mysql_query($query, $id);
			
			while($row				=mysql_fetch_array($result))
			{
			$Nombretipo				= $row["Nombre"];
			$Idtipo					= $row["Id"];
?> 
                                    <option value="<?=$Nombretipo?>"><?=$Nombretipo?></option>
<?
			}
?>

                                </select>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                     </div>  
                    
<?
		}
?>
                                                    
                                                    
                                                    
                                                     
                                                     
                                                     <div class="row">  
                                                     
                                                             <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <div class="col-lg-2 col-md-4 col-sm-6">
                                                                            <?
                                                                            if($Idserv == 4)
																			{
																			?>
                                                                                <label for="Identificacion" class="control-label">Plano</label>
                                                                            <?
																			}
                                                                            else
																			{
																			?>  
                                                                                <label for="Identificacion" class="control-label">Identificación</label>
                                                                            <?
																			}
																			?> 
                                                                            </div>
                                                                            <div class="col-lg-10 col-md-8 col-sm-6">
                                                                                <input type="text" name="Identificacion" id="Identificacion" class="form-control" placeholder="Ingrese una Identificación" value="<?=$Identificacion?>" required onChange="javascript:this.value=this.value.toUpperCase();" <?=$ponga?>>
                                                                            </div>
                                                                        </div>
                                                             </div>
                                                        
                                                        
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <div class="col-lg-2 col-md-4 col-sm-6">
                                                                            <label class="control-label">Soporte</label>
                                                                        </div>
                                                                        <div class="col-md-10">
                                <select name="Soporte" id="Soporte" class="form-control select2-list" data-placeholder="Seleccione una Opción" required <?=$ponga?>>

                            
                                    <option value="<?=$Soporte?>" selected><?=$NombresopoS?></option>
<?
			$query					="SELECT* FROM Soporte where Idservicio = '$Idserv' and Activo = 0 and Muestra = 0  ORDER BY Nombre" ;
			$result					=mysql_query($query, $id);
			
			while($row				=mysql_fetch_array($result))
			{
			$Nombresopo				= $row["Nombre"];
			$Idsopo					= $row["Id"];
?>
                                    <option value="<?=$Idsopo?>"><?=$Nombresopo?></option>
<?
			}
?>

                                </select>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                     </div>   
                                                     
                                                     
                                                     
                                                     
                                                     
                                                     
                                                     
                                                     
                                                     


                                                     <div class="row">  
                                                     
                                                             <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <div class="col-lg-2 col-md-4 col-sm-6">
                                                                                <label for="Lugar" class="control-label">Nro Soporte</label>
                                                                            </div>
                                                                            <div class="col-lg-10 col-md-8 col-sm-6">
                                                                                <input type="text" name="Nrosopo" id="Nrosopo" class="form-control" placeholder="Nro de Soporte" value="<?=$Nrosopo?>" required onChange="javascript:this.value=this.value.toUpperCase();" <?=$ponga?>>
                                                                            </div>
                                                                        </div>
                                                             </div>
                                                        
                                                        
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <div class="col-lg-2 col-md-4 col-sm-6">
                                                                            <label class="control-label">Unidades</label>
                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            <input type="text" class="form-control" value="<?=$Unidades?>" name="Unidades" id="Unidades"  placeholder="Unidades"  required onChange="javascript:this.value=this.value.toUpperCase();" <?=$ponga?>>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                     </div>   
                                                     
                                                     <div class="row">  
                                                         <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <div class="col-lg-2 col-md-4 col-sm-6">
                                                                            <label for="Direccion" class="control-label">Foto de Ingreso</label>
                                                                        </div>
                                                                        <div class="col-lg-10 col-md-8 col-sm-6">
                                                                        
                            <?
							if(!empty($Foto))
							{
							?>
                                Foto (<a href="recepcion/<?=$Foto?>" target="_blank">Ver Foto</a>)
							<?
							}
							?>
                                                                        
                                                                             <input id="foto" name="foto" type="file" class="form-control" <?=$ponga?>>
                                                                        </div>
                                                                    </div>
                                                         </div>
                                                     
                                                     </div>  
                                                     <div class="row">  
                                                     <br><br>
                                                     </div>
                                                     
                                                     <div class="row">  
                                                     
                                                     
                                                     
                                                     
<?

			$contest				=0;
			$query					="SELECT* FROM Estado where Idservicio = '$Idserv' and Activo = 0 and Muestra = 0  ORDER BY Nombre" ;
			$result					=mysql_query($query, $id);
			
			while($row				=mysql_fetch_array($result))
			{
			$Nombreest				= $row["Nombre"];
			$Nombrees				= strtolower($row["Nombre"]);
			$Nombrees				= mb_strtolower($Nombrees,'UTF-8');
			$Nombrees 				= ucwords($Nombrees); 
			$Cant 					= $row["Cant"];
			
			$Idest					= $row["Id"];
			
			
			$queryR					="SELECT* FROM Recepcionestados where Idrecep = '$Id' AND Nombre = '$Nombreest'  ORDER BY Nombre" ;
			$resultR				=mysql_query($queryR, $id);
			
			while($rowR				=mysql_fetch_array($resultR))
			{
			$ValorR					= $rowR["Valor"];
			$CantR 					= $rowR["Cant"];
			}
			

					if(!empty($CantR))
					{
					$mueZtra	=	'block';	
					}
					else
					{
					$mueZtra	=	'none';	
					}
			
			$contest++;
?> 


                    <!-- Text input-->
                                                             <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                        
                                                                         <div class="col-lg-2 col-md-4 col-sm-6">
                                                                                <label for="<?=$Nombreest?>" class="control-label"><?=$Nombrees?></label>
                                                                            </div>
                                                                        
                                                                            <div class="col-lg-10 col-md-8 col-sm-6">
                                                                            
                              <? 
							  if($Cant == 1) 
							  { 
							  ?>                                              
                              <select id="estad<?=$contest?>" name="estad<?=$contest?>" class="form-control select2-list"  onchange="showDiv<?=$contest?>(this)"  required <?=$ponga?>
							  <? 
							  } 
							  else
							  {
							  ?>
                              <select id="estad<?=$contest?>" name="estad<?=$contest?>" class="form-control select2-list" required <?=$ponga?>
							  <? 
							  } 
							  ?> 
                                                                
                                                                            
                                    <option value="<?=$ValorR?>"><?=$ValorR?></option>
                                    <option value="<?=$ValorR?>"><?=$ValorR?></option>
                                    <option value="B">BUENO</option>
                                    <option value="R">REGULAR</option>
                                    <option value="M">MALO</option>
                                    <option value="SI">SI</option>
                                    <option value="NO">NO</option>
                                    <option value="NA">NO APLICA</option>
                                    
                                </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                    <? 
													if($Cant == 1) 
													{ 
													?>
                                                                
                                                    <div id="hidden_div<?=$contest?>" style="display: <?=$mueZtra?>;">
														<div class="col-sm-6">
															<div class="form-group">
                                                            
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Otra" class="control-label">Cantidad</label>
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" name="Cant<?=$contest?>" id="Cant<?=$contest?>" class="form-control" placeholder="Ingrese una cantidad" value="<?=$CantR?>" onKeyPress="return isNumberKey(event);" required>
																</div>
                                                                
                                                   			</div> 
														</div>
													</div> 
                                                    
                                                    <? 
													} 
													?>  
                                                                
                        
<?
			$ValorR					= '';
			$CantR 					= '';
			$Cant 					= '';
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
					</div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
                                                            <?
                                                            if($Salida == 1)
															{
															?>         
         
<div class="section-body">
						
							<div class="col-lg-12">
								<div class="box style-transparent">
									<!-- START PROFILE TABS -->
									<div class="box-head">
										<ul class="nav nav-tabs tabs-transparent" data-toggle="tabs">
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Información de Salida</a></li>
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
                                                                                <label for="Identificacion" class="control-label">Fecha</label>
                                                                            </div>
                                                                            <div class="col-lg-10 col-md-8 col-sm-6">
                                                                                <input type="text" name="Fechasale" id="Fechasale" class="form-control" placeholder="Ingrese una Identificación" value="<?=$Fechasale?>" required onChange="javascript:this.value=this.value.toUpperCase();" <?=$ponga?>>
                                                                            </div>
                                                                        </div>
                                                             </div>
                                                             
                                                             <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <div class="col-lg-2 col-md-4 col-sm-6">
                                                                                <label for="Usuariosaca" class="control-label">Usuario</label>
                                                                            </div>
                                                                            <div class="col-lg-10 col-md-8 col-sm-6">
                                                                                <input type="text" name="Usuariosaca" id="Usuariosaca" class="form-control" placeholder="Ingrese una Identificación" value="<?=$Usuariosaca?>" required onChange="javascript:this.value=this.value.toUpperCase();" <?=$ponga?>>
                                                                            </div>
                                                                        </div>
                                                             </div>
                                                             
                                                             

                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
<br>
                                    
                                    
<h4 class="modal-title" id="formModalLabel">DOCUMENTACIÓN ENTREGADA</h4>                                                     
                                                     
<hr>                                                    

<?
			$contdoc				=0;
			$query					="SELECT* FROM Documentacion where Idservicio = '$Idserv' and Activo = 0 and Muestra = 0 ORDER BY Nombre" ;
			$result					=mysql_query($query, $id);
			
			while($row				=mysql_fetch_array($result))
			{
			$Nombredoc				= $row["Nombre"];
			$Nombredo				= strtolower($row["Nombre"]);
			$Nombredo				= mb_strtolower($Nombredo,'UTF-8');
			$Nombredo 				= ucwords($Nombredo); 
			$Iddoc					= $row["Id"];
			
			$queryD					="SELECT* FROM Recepciondocument where Idrecep = '$Id' AND Nombre = '$Nombredoc'  ORDER BY Nombre" ;
			$resultD				=mysql_query($queryD, $id);
			
			while($rowD				=mysql_fetch_array($resultD))
			{
			$ValorD					= $rowD["Valor"];
			}
			
			
			$contdoc++;
?> 

                                                             <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                        
                                                                         <div class="col-lg-2 col-md-4 col-sm-6">
                                                                                <label for="<?=$Nombredoc?>" class="control-label"><?=$Nombredo?></label>
                                                                            </div>
                                                                        
                                                                            <div class="col-lg-10 col-md-8 col-sm-6">
                                <select id="document<?=$contdoc?>" name="document<?=$contdoc?>" class="form-control select2-list" required <?=$ponga?>>
                                    <option value="<?=$ValorD?>" selected><?=$ValorD?></option>
                                    <option value="X">X</option>
                                    <option value="SI">SI</option>
                                    <option value="NO">NO</option>
                                    <option value="NA">NA</option>
                                    
                                </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                    
                    
                    
                    
<?
			}
?>                                                       
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <div class="col-lg-2 col-md-4 col-sm-6">
                                                                                <label for="Certificado" class="control-label"></label>
                                                                            </div>
                                                                            <div class="col-lg-10 col-md-8 col-sm-6">
                                                                                
                                                                            </div>
                                                                        </div>
                                                             </div>
                                            
                                            </div>
                                            
                                            <div class="row">
                                            
                                            
                                            
                                            
                                                              <div class="form-group">
                                                                    <div class="col-lg-1 col-md-2 col-sm-3">
                                                                                    <label for="Usuariosaca" class="control-label">Observaciones</label>
                                                                    </div>
                                                                                <div class="col-lg-11 col-md-10 col-sm-9">
                                                                                  <textarea name="Observaciones" rows="3" class="form-control" id="Observaciones" placeholder="Detalles / Observaciones" onChange="javascript:this.value=this.value.toUpperCase();" <?=$ponga?>><?=$Observaciones?></textarea>
                                                                                </div>
                                                              </div>
                                            </div>
                                                
										  </div><!--end .box-body -->
                                          
										</div><!--end .tab-pane -->
										<!-- END PROFILE EDITOR -->

									</div><!--end .tab-content -->
								</div><!--end .box -->
							</div><!--end .col-lg-12 -->

					</div>         
         

         
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
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Descripción del Ingreso</a></li>
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
                                                                  <textarea name="Descripcion" rows="3" class="form-control" id="Descripcion" placeholder="Detalles / Observaciones" onChange="javascript:this.value=this.value.toUpperCase();" <?=$ponga?>><?=$Comentarios?></textarea>
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
                                                        
                                                            <?
                                                            if($Salida == 0)
															{
															?>
                                                            <br/><br/><button type="submit" id="enviar" class="btn btn-primary">Realizar Cambios</button> 
                                                            <button type="button" id="enviar" class="btn btn-success" data-toggle="modal" data-target="#formModal">Confirmar Salida</button>
                                                            <?
															}
															?>
                                                        
                                                        
															<button type="button" id="enviar" class="btn btn-support5" onClick="location.href='act-recepcion.php?Id=<?=$Id?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>'">Volver</button> 
                                                        <?
														}
														?> 
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
         



<?
}
?>








                    
                    
												</form>
				</section>
                
                
                
                
				<!-- START FORM MODAL MARKUP -->
				<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
						  <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="formModalLabel">Confirmar Salida</h4>
							</div>
	
                            <form action="act-recepcion-4.php" method="post" enctype="multipart/form-data" name="form1" class="form-horizontal form-validate" id="form1" novalidate role="form">
                              <input name="Id" id="Id" type="hidden" value="<?=$Id?>">
                              <input name="Salida" id="Salida" type="hidden" value="a">
                              <span class="col-lg-2 col-md-4 col-sm-6">
                              <input name="Idmenu" type="hidden" id="Idmenu" value="<?=$_REQUEST["Idmenu"]?>">
                              <input name="Idsubmenu" type="hidden" id="Idsubmenu" value="<?=$_REQUEST["Idsubmenu"]?>">
                              <input name="Idopcmenu" type="hidden" id="Idopcmenu" value="<?=$_REQUEST["Idopcmenu"]?>">
                              <input name="Idservic" id="Idservic" type="hidden" value="<?=$Idserv?>">
                              </span>
								<div class="modal-body">
                                
                                
                                

									<div class="form-group">
										<div class="col-lg-12">
											<label for="Forma" class="control-label">Fecha de Salida</label>
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-12">
														<div class='input-group date' id='demo-date-start'>
															<input type="text" class="form-control" required name="Fechasale" id="Fechasale"/>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														</div>
										</div>
									</div>     
                                    


									<div class="form-group">
										<div class="col-lg-12">
											<label for="Forma" class="control-label">Usuario que aprueba</label>
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-12">
																<select id="Usuariosaca" name="Usuariosaca" class="form-control" required>
                                                                  <option value="" selected></option>
<?
													$query						="SELECT* FROM Usuarios where Muestra = 0 order by Nombre" ;
													$result						=mysql_query($query, $id);
													
													while($row					=mysql_fetch_array($result))
													{
													$Usuario					= $row["Nombre"];
?>
                                                                  <option value="<?=$Usuario?>"><?=$Usuario?></option>
<?
													}
?>
                                                                </select>
										</div>
									</div>
                                    
                                    

                                    
                                    
<hr>
                                    
                                    
<h4 class="modal-title" id="formModalLabel">DOCUMENTACIÓN ENTREGADA</h4>                                                     
                                                     
<hr>                                                    

<?
			$contdoc				=0;
			$query					="SELECT* FROM Documentacion where Idservicio = '$Idserv' and Activo = 0 and Muestra = 0 ORDER BY Nombre" ;
			$result					=mysql_query($query, $id);
			
			while($row				=mysql_fetch_array($result))
			{
			$Nombredoc				= $row["Nombre"];
			$Nombredo				= strtolower($row["Nombre"]);
			$Nombredo				= mb_strtolower($Nombredo,'UTF-8');
			$Nombredo 				= ucwords($Nombredo); 
			$Iddoc					= $row["Id"];
			
			$contdoc++;
?> 

									<div class="form-group">
										<div class="col-lg-12">
                                                                                <label for="<?=$Nombredoc?>" class="control-label"><?=$Nombredo?></label>
                                        </div>
    								</div>                           

									<div class="form-group">
										<div class="col-lg-12">
                                <select id="documen<?=$contdoc?>" name="documen<?=$contdoc?>" class="form-control select2-list" required>
                                    <option value="" selected><?=$Nombredoc?></option>
                                    <option value="X">X</option>
                                    <option value="SI">SI</option>
                                  	<option value="NO">NO</option>
                                    <option value="NA">NA</option>
                                    
                                </select>
                                        </div>
    								</div>   
                    
                    
                    
                    
<?
			}
?>
                                                     
                                                     
                                                     
                                                     
                                                     
                                                     

                                    
                                    
                                    
                                    
                                    

                                    
								  <div class="form-group">
										<div class="col-lg-12">
											<label for="Observaciones" class="control-label">Observaciones</label>
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-12">
                                          <textarea name="Observaciones" rows="4" required class="form-control" id="Observaciones" placeholder="Observaciones" onChange="javascript:this.value=this.value.toUpperCase();"><?=$Nombreaprueba?></textarea>
										</div>
									</div>    

							  </div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
									<button type="submit" class="btn btn-primary">Aprobar</button>
								</div>
							</form>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
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
        <script src="../../assets/js/libs/bootstrap-datetimepicker/locales/bootstrap-datetimepicker.es.js"></script>
		<script src="../../assets/js/core/demo/DemoFormComponents.js"></script>
		<script src="../../assets/js/libs/jquery-validation/dist/additional-methods.min.js"></script>
		<script src="../../assets/js/core/App.js"></script>
		<script src="../../assets/js/core/demo/Demo.js"></script>
		<!-- END JAVASCRIPT -->






    <!-- END JAVASCRIPT CODES FOR THE CURRENT PAGE -->
        <!-- END JAVASCRIPT CODES -->        
        
 
	</body>
</html>
