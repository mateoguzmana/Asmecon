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
					
					
					$Id					=$_REQUEST["Id"];
					$Envia				=$_REQUEST["Envia"];
					$Paso				=$_REQUEST["Paso"];
					$Idf				=$_REQUEST["Idf"];
					
					
					$queryTITMEN		="SELECT* FROM Fdimensional WHERE Id = '$Id'" ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
						$Nitclien					= $rowTITMEN["Nit"];
						$Idfact						= $rowTITMEN["Idfact"];
						$Idrecep					= $rowTITMEN["Idrecep"];
						$Idord						= $rowTITMEN["Idorden"];
						$Idccotiz					= $rowTITMEN["Idcotiz"];
						$Cliente					= $rowTITMEN["Cliente"];
						$Rip						= $rowTITMEN["Rip"];
						$Plano						= $rowTITMEN["Plano"];
						$Fecha						= $rowTITMEN["Fecha"];
						$Descripcion				= $rowTITMEN["Descripcion"];
						$Proveedor					= $rowTITMEN["Proveedor"];
						$Subcliente					= $rowTITMEN["Subcliente"];
						$Cantidad					= $rowTITMEN["Cantidad"];
						$Dureza						= $rowTITMEN["Dureza"];
						$Obtenida					= $rowTITMEN["Obtenida"];
						$Material					= $rowTITMEN["Material"];
						$Observaciones				= $rowTITMEN["Observaciones"];
						$Diagrama					= $rowTITMEN["Diagrama"];
					}
					
					

					$Piezas				=$_REQUEST["Piezas"];
					$Medidas			=$_REQUEST["Medidas"];
					$Idproc				=$_REQUEST["Idproc"];
					$Idtole				=$_REQUEST["Idtole"];


					
					$queryTITMEN		="SELECT* FROM Proveedores WHERE Cedula = '$Proveedor'" ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
					$Nombreprove		=$rowTITMEN["Nombre"];
					}
					
					$queryTITMEN		="SELECT* FROM Tipoproced WHERE Id = '$Idproc'" ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
					$Nombreproce		=$rowTITMEN["Nombre"];
					}
					
					$queryTITMEN		="SELECT* FROM Tipoprocedopc WHERE Id = '$Idtole'" ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
					$Nombretole			=$rowTITMEN["Nombre"];
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
	if (charCode > 31 && (charCode < 48 || charCode > 57) )
	return false;
	return true;
	

	
}
	//-->
</SCRIPT> 

<SCRIPT language=Javascript>
<!--
function isNumberKeys(evt)
{
	var charCode = (evt.which) ? evt.which : event.keyCode

	if (!((charCode >47 && charCode <=57) || ( charCode ==8)||(charCode==46)||( charCode == 0)||(charCode==127))) 
	
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
                                                              	<input name="Idccotiz" id="Idccotiz" type="hidden" value="<?=$Idccotiz?>">
                                                              	<input name="Nitclien" id="Nitclien" type="hidden" value="<?=$Nitclien?>">
                                                              	<input name="Idservicio" id="Idservicio" type="hidden" value="<?=$Idserv?>">
                                                              	<label for="Cliente" class="control-label" >Cliente</label>
																</div>
                                                                <div class="col-lg-10 col-md-8 col-sm-6">
                                                                        <input name="Cliente" type="text" required class="form-control" id="Cliente" style="background-color:#CCC" value="<?=$Cliente?>" readonly/>
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
                                                                        <input name="Rip" type="text" required class="form-control" id="Rip" style="background-color:#CCC" value="<?=$Rip?>" readonly/>
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
                                                                        <input name="Fecha" type="text" required class="form-control" id="Fecha" value="<?=$Fecha?>" readonly/>

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
                                                                        <input name="Descripcion" type="text" required class="form-control" id="Descripcion" readonly onChange="javascript:this.value=this.value.toUpperCase();" value="<?=$Descripcion?>"/>
                                                                </div>
															</div>
											     </div>
                                                    

											     <div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Proveedor" class="control-label">Proveedor</label>
																</div>
                                                                <div class="col-lg-10 col-md-8 col-sm-6">
                                                                        
								<select name="Proveedor" id="Proveedor" class="form-control select2-list" data-placeholder="Seleccione una Opción" readonly required>

                            
                                    <option value="<?=$Proveedor?>" selected><?=$Nombreprove?></option>


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
                                                                        <input name="Sub_cliente" type="text" required class="form-control" id="Sub_cliente" readonly onChange="javascript:this.value=this.value.toUpperCase();" value="<?=$Subcliente?>"/>
                                                                </div>
															</div>
											     </div>
                                                 



											     <div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Cantidad" class="control-label">Cantidad</label>
																</div>
                                                                <div class="col-lg-10 col-md-8 col-sm-6">
                                                                        <input name="Cantidad" type="text" required class="form-control" id="Cantidad" readonly onChange="javascript:this.value=this.value.toUpperCase();" value="<?=$Cantidad?>"/>
                                                                </div>
															</div>
											     </div>  
                                                       
                                                       
                                                     

											     <div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Dureza" class="control-label">Dureza</label>
																</div>
                                                                <div class="col-lg-10 col-md-8 col-sm-6">
                                                                        <input name="Dureza" type="text" required class="form-control" id="Dureza" readonly onChange="javascript:this.value=this.value.toUpperCase();" value="<?=$Dureza?>"/>
                                                                </div>
															</div>
											     </div>  
                                                       
                                                     

											     <div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Obtenida" class="control-label">Obtenida</label>
																</div>
                                                                <div class="col-lg-10 col-md-8 col-sm-6">
                                                                        <input name="Obtenida" type="text" required class="form-control" id="Obtenida" readonly onChange="javascript:this.value=this.value.toUpperCase();" value="<?=$Obtenida?>"/>
                                                                </div>
															</div>
											     </div>  
                                                 
                                                     
											     <div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
																	<label for="Material" class="control-label">Material</label>
																</div>
                                                                <div class="col-lg-10 col-md-8 col-sm-6">
                                                                        <input name="Material" type="text" required class="form-control" id="Material" readonly onChange="javascript:this.value=this.value.toUpperCase();" value="<?=$Material?>"/>
                                                                </div>
															</div>
											     </div> 
                                                     
                                                     
                                                        
                                                 <div class="col-sm-6">
                                                            <div class="form-group">
                                                                   <div class="col-lg-2 col-md-4 col-sm-6">
                                                                            <label for="Diagrama" class="control-label">Diagrama</label>
                                                                   </div>
                                                              <div class="col-lg-10 col-md-8 col-sm-6">
                                                                              <? if(!empty($Diagrama)) {?>(<a href="Fdimensional/<?=$Diagrama?>" target="_blank">ver diagrama</a>)<? }?>
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
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Observaciones</a></li>
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
                                                                  <textarea name="Descripcion" rows="3" readonly class="form-control" id="Descripcion" placeholder="Detalles / Observaciones" onChange="javascript:this.value=this.value.toUpperCase();"><?=$Observaciones?></textarea>
												</div>
											  </div>
														
                                                        
                                                         

                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        


                                                        

                                                        
                                                        




                                                    
                                                    

                                                    
                                                    


                                                
                                                
                                                
										  </div><!--end .box-body -->
										</div><!--end .tab-pane -->
										<!-- END PROFILE EDITOR -->

									</div><!--end .tab-content -->
								</div><!--end .box -->
							</div><!--end .col-lg-12 -->
						</div><!--end .row -->

 
 
                    
 
					<div class="section-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="box style-transparent">
									<!-- START PROFILE TABS -->
									<div class="box-head">
										<ul class="nav nav-tabs tabs-transparent" data-toggle="tabs">
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Piezas y Medidas</a></li>
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
																<div class="col-sm-12">

                                                                
																  <label for="Cliente" class="control-label" >Nro. Piezas</label>
																<select name="jumpMenu" id="jumpMenu"  class="form-control select2-list" onChange="MM_jumpMenu('parent',this,0)"required  data-placeholder="Seleccione las Piezas" style="background-color:#CCC">
            
                                                                        <?
                                                                        if(!empty($Piezas))
																		{
																		?>
                                                                  <option value="add-formato-d-3.php?Idtole=<?=$Idtole?>&Idproc=<?=$Idproc?>&Idord=<?=$Idord?>&Id=<?=$Id?>&Idccotiz=<?=$Idccotiz?>&Piezas=<?=$Piezas?>&Medidas=<?=$Medidas?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>" selected><?=$Piezas?></option>
                                                                        <?
																		}
																		else
																		{
																		?>
                                                                        <option value="add-formato-d-3.php?Idtole=<?=$Idtole?>&Idproc=<?=$Idproc?>&Idord=<?=$Idord?>&Id=<?=$Id?>&Idccotiz=<?=$Idccotiz?>&Piezas=<?=$i?>&Medidas=<?=$Medidas?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>" selected>Seleccione el Nro. de Piezas</option>
                                                                        <?
																		}
																		
																		if($Paso == 0)
																		{
																		
                                                                        for ($i = 1; $i < 500; $i++) 
																		{
                                                                        ?>
                                                                        <option value="add-formato-d-3.php?Idtole=<?=$Idtole?>&Idproc=<?=$Idproc?>&Idord=<?=$Idord?>&Id=<?=$Id?>&Idccotiz=<?=$Idccotiz?>&Piezas=<?=$i?>&Medidas=<?=$Medidas?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>"><?=$i?></option>
																		<?
																		}
																		
																		}
																		?>

                                                                </select>







                                
                                
                                                                </div>
															</div>
											     </div>
                                                 
											     <div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																  <label for="Orden" class="control-label">Nro. Medidas</label>
																<select name="jumpMenu" id="jumpMenu"  class="form-control select2-list" onChange="MM_jumpMenu('parent',this,0)"required  data-placeholder="Seleccione las Medidas" style="background-color:#CCC">
            
                                                                        <?
                                                                        if(!empty($Medidas))
																		{
																		?>
                                                                  		<option value="add-formato-d-3.php?Idtole=<?=$Idtole?>&Idproc=<?=$Idproc?>&Idord=<?=$Idord?>&Id=<?=$Id?>&Idccotiz=<?=$Idccotiz?>&Piezas=<?=$Piezas?>&Medidas=<?=$Medidas?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>" selected><?=$Medidas?></option>
                                                                        <?
																		}
																		else
																		{
																		?>
                                                                        <option value="add-formato-d-3.php?Idtole=<?=$Idtole?>&Idproc=<?=$Idproc?>&Idord=<?=$Idord?>&Id=<?=$Id?>&Idccotiz=<?=$Idccotiz?>&Piezas=<?=$Piezas?>&Medidas=<?=$a?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>" selected>Seleccione el Nro. de Medidas</option>
                                                                        <?
																		}
																		if($Paso == 0)
																		{
																			
                                                                        for ($a = 1; $a < 500; $a++) 
																		{
                                                                        ?>
                                                                        <option value="add-formato-d-3.php?Idtole=<?=$Idtole?>&Idproc=<?=$Idproc?>&Idord=<?=$Idord?>&Id=<?=$Id?>&Idccotiz=<?=$Idccotiz?>&Piezas=<?=$Piezas?>&Medidas=<?=$a?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>"><?=$a?></option>
																		<?
																		}
																		
																		}
																		?>

                                                                </select>

                                                                </div>
															</div>
											     </div>
                                                 
											     
                                               
                                                 

                                                 
                                                 
                                                 
											     <div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																  <label for="Orden" class="control-label">Procedimiento</label>
																<select name="jumpMenu" id="jumpMenu"  class="form-control select2-list" onChange="MM_jumpMenu('parent',this,0)"required  data-placeholder="Seleccione las Medidas" style="background-color:#CCC">
            
                                                                        <?
                                                                        if(!empty($Idproc))
																		{
																		?>
                                                                  		<option value="add-formato-d-3.php?Idtole=<?=$Idtole?>&Idproc=<?=$Idproc?>&Idord=<?=$Idord?>&Id=<?=$Id?>&Idccotiz=<?=$Idccotiz?>&Piezas=<?=$Piezas?>&Medidas=<?=$Medidas?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>" selected><?=$Nombreproce?></option>
                                                                        <?
																		}
																		else
																		{
																		?>
                                                                        <option value="add-formato-d-3.php?Idtole=<?=$Idtole?>&Idproc=<?=$Idproc?>&Idord=<?=$Idord?>&Id=<?=$Id?>&Idccotiz=<?=$Idccotiz?>&Piezas=<?=$Piezas?>&Medidas=<?=$Medidas?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>" selected>Seleccione el Procedimiento</option>
                                                                        <?
																		}
																		
																		if($Paso == 0)
																		{
																			
																		$queryTI1		="SELECT* FROM Tipoproced where Muestra = 0 order by Nombre";
																		$resultTI1		=mysql_query($queryTI1, $id);
																								
																		While($rowTI1	=mysql_fetch_array($resultTI1))
																		{
																		$NombreTI1		=$rowTI1["Nombre"];
																		$IdTI1			=$rowTI1["Id"];
                                                                        ?>
                                                                        <option value="add-formato-d-3.php?Idtole=<?=$Idtole?>&Idproc=<?=$IdTI1?>&Idord=<?=$Idord?>&Id=<?=$Id?>&Idccotiz=<?=$Idccotiz?>&Piezas=<?=$Piezas?>&Medidas=<?=$Medidas?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>"><?=$NombreTI1?></option>
																		<?
																		}
																		
																		}
																		?>

                                                                </select>

                                                                </div>
															</div>
											     </div>                         
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
                                                 
											     <div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																  <label for="Orden" class="control-label">Tolerancia</label>
																<select name="jumpMenu" id="jumpMenu"  class="form-control select2-list" onChange="MM_jumpMenu('parent',this,0)"required  data-placeholder="Seleccione las Medidas" style="background-color:#CCC">
            
                                                                        <?
                                                                        if(!empty($Idproc))
																		{
																		?>
                                                                  		<option value="add-formato-d-3.php?Idtole=<?=$Idtole?>&Idproc=<?=$Idproc?>&Idord=<?=$Idord?>&Id=<?=$Id?>&Idccotiz=<?=$Idccotiz?>&Piezas=<?=$Piezas?>&Medidas=<?=$Medidas?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>" selected><?=$Nombretole?></option>
                                                                        <?
																		}
																		else
																		{
																		?>
                                                                        <option value="add-formato-d-3.php?Idtole=<?=$Idtole?>&Idproc=<?=$Idproc?>&Idord=<?=$Idord?>&Id=<?=$Id?>&Idccotiz=<?=$Idccotiz?>&Piezas=<?=$Piezas?>&Medidas=<?=$Medidas?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>" selected>Seleccione la Tolerancia</option>
                                                                        <?
																		}
																		
																		if($Paso == 0)
																		{
																			
																		$queryTI2		="SELECT* FROM Tipoprocedopc where Idtipoproc = '$Idproc' and Muestra = 0 order by Nombre";
																		$resultTI2		=mysql_query($queryTI2, $id);
																								
																		While($rowTI2	=mysql_fetch_array($resultTI2))
																		{
																		$NombreTI2		=$rowTI2["Nombre"];
																		$IdTI2			=$rowTI2["Id"];
                                                                        ?>
                                                                        <option value="add-formato-d-3.php?Idtole=<?=$IdTI2?>&Idproc=<?=$IdTI1?>&Idord=<?=$Idord?>&Id=<?=$Id?>&Idccotiz=<?=$Idccotiz?>&Piezas=<?=$Piezas?>&Medidas=<?=$Medidas?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>"><?=$NombreTI2?></option>
																		<?
																		}
																		
																		}
																		?>

                                                                </select>

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
                    
                    
                    
                    
                    
                    
                    
					</div>         
    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                                      
                    
                                                        
<?
if($Piezas > 0  && $Medidas > 0 && $Idtole > 0 && $Idproc > 0)
{
?>                   
                    
                    
                    

                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<div class="section-body">   
						<!-- START DATATABLE 1 -->
						<div class="row">
							<div class="col-lg-12">
									<div class="table-responsive">
                                    
<?
														if($Envia == 0 && $Paso == 0)
														{
?>
												<form class="form-horizontal form-validate" role="form" method="get" action="add-formato-d-3.php" id="form1" name="form1" enctype="multipart/form-data" novalidate>
                                                        <?
														}
														elseif($Envia == 1 && $Paso == 0)
														{
														?>
												<form class="form-horizontal form-validate" role="form" method="post" action="add-formato-d-4.php" id="form1" name="form1" enctype="multipart/form-data" novalidate>
                                                        <?
														}
														elseif($Envia == 1 && $Paso == 1)
														{
														?>
												<form class="form-horizontal form-validate" role="form" method="post" action="add-formato-d-5.php" id="form1" name="form1" enctype="multipart/form-data" novalidate>
                                                        <?
														}
														?>
                                                        
                                           		  <input name="Id" type="hidden" id="Id" value="<?=$Id?>">
                                                  <input name="Idmenu" type="hidden" id="Idmenu" value="<?=$_REQUEST["Idmenu"]?>">
                                                  <input name="Idsubmenu" type="hidden" id="Idsubmenu" value="<?=$_REQUEST["Idsubmenu"]?>">
                                                                <input name="Idopcmenu" type="hidden" id="Idopcmenu" value="<?=$_REQUEST["Idopcmenu"]?>">
                                                  <input name="Medidas" type="hidden" id="Medidas" value="<?=$Medidas?>">
                                                                <input name="Piezas" type="hidden" id="Piezas" value="<?=$Piezas?>">
                                                                <input name="Envia" type="hidden" id="Envia" value="1">
                                                                <input name="Idtole" type="hidden" id="Idtole" value="<?=$Idtole?>">
                                                                <input name="Idproc" type="hidden" id="Idproc" value="<?=$Idproc?>">
                                                                <input name="Idf" id="Idf" type="hidden" value="<?=$Idf?>">

                                                                
                                                                            
										<table style="background-color:white;" class="table table-hover table-responsive">
                                        

                                                        

											<thead>
                                            

                                            
												<tr style="background-color:#D8FFB0">
                                                <th>MEDIDAS</th>
                                                <?
                                                for ($i = 1; $i <= $Medidas; $i++) 
												{
												?>
                                                
													<th style="text-align:center; background-color:#D8FFB0;"><?=$i?></th>
                                                <?
												}
												?>

												</tr>
                                                
												<tr style="background-color:#FFF">
                                                <th style="background-color:#E3E4E0"></th>
                                                <?
                                                for ($i = 1; $i <= $Medidas; $i++) 
												{
													
													if($Envia == 1)
													{
														$Valor					=$_REQUEST["Vlr".$i];	
														
														if($Envia == 1 && $Paso == 1)
														{
														
															$queryFS		="SELECT* FROM Fdimensionalitemsc where Idformato = '$Id' AND Medida = '$i' Order by Id ASC" ;
															$resultFS		=mysql_query($queryFS, $id);
																				
															while($rowFS	=mysql_fetch_array($resultFS))
															{
															$Valor			=$rowFS["Ref"];
															}
														
														}
														
														
														
													}
												?>
                                                
													<th><input type="text" name="Vlr<?=$i?>" id="Vlr<?=$i?>" class="form-control" placeholder="" value="<?=$Valor?>" onKeyPress="return isNumberKeys(event);" required style="width:99%; font-size:11px; background-color:#EFEFEF; border:0px; text-align:center;"></th>
                                                <?
												}
												?>
                                               </tr> 
                                               
<?
													if($Envia == 1)
													{
?>
                                               
											  <tr style="background-color:#D8FFB0">
                                                <th style="background-color:#E3E4E0">Pieza No.</th>
                                                <?
                                                for ($i = 1; $i <= $Medidas; $i++) 
												{
													if($Envia == 1)
													{
														$Valora 					=$_REQUEST["Vlr".$i];	
														

														
															$queryUSERS			="SELECT* FROM Tolerancia where (Idtipoproc = '$Idproc' and Idtipoprocopc = '$Idtole' and Muestra = 0)";
															$resultUSERS		=mysql_query($queryUSERS, $id);
																											
															While($rowUSERS		=mysql_fetch_array($resultUSERS))
															{
															$Desde				=$rowUSERS["Desde"];	
															$Hasta				=$rowUSERS["Hasta"];
															$Tolerancia			=$rowUSERS["Tolerancia"];
															$Tolerancia			=str_replace(",",".",$Tolerancia);
															
															if($Desde <= $Valora && $Hasta >= $Valora)
															{
															$Valor1 			=$Valora+$Tolerancia;
															$Valor2 			=$Valora-$Tolerancia;
															
															}
															
															if($Envia == 1 && $Paso == 1)
															{
															
																$queryFS		="SELECT* FROM Fdimensionalitemsc where Idformato = '$Id' AND Medida = '$i' Order by Id ASC" ;
																$resultFS		=mysql_query($queryFS, $id);
																					
																while($rowFS	=mysql_fetch_array($resultFS))
																{
																$Valor1			=$rowFS["Desde"];
																$Valor2			=$rowFS["Hasta"];

																}
															
															}
														
														
														}
														


													}
												?>
                                                
													<th><input name="Vlr1<?=$i?>" type="text" required class="form-control" id="Vlr1<?=$i?>" placeholder="" style="width:99%; font-size:11px; background-color: #FFF; border:0px; text-align:center;" onKeyPress="return isNumberKeys(event);" value="<?=$Valor1?>" onchange="Individual2(<?=$i?>);"> <br> <input name="Vlr2<?=$i?>" type="text" required class="form-control" id="Vlr2<?=$i?>" placeholder="" style="width:99%; font-size:11px; background-color:#FFF; border:0px; text-align:center;" onKeyPress="return isNumberKeys(event);" value="<?=$Valor2?>" onchange="Individual2(<?=$i?>);"></th>
                                                <?
												}
												?>
                                               </tr> 


<?
													}
?>


<?
													if($Envia == 0)
													{
?>
												<tr style="background-color:#fff">
                                                <th style="background-color:#E3E4E0"></th>
                                                <?
                                                for ($i = 1; $i <= $Medidas; $i++) 
												{
												?>
                                                
													<?
                                                    if($Medidas == $i)
													{
													?>
                                                    <th style="text-align:right;"><input name="Procesar" type="submit" class="btn btn-support5" style="width:90px;" value="PROCESAR"></th>
                                                    <?
													}
													else
													{
													?>
                                                    <th></th>
                                                    <?
													}
													?>
                                                <?
												}
												?>
                                               </tr> 
                                               
                                               
<?
													}
?>

                                               
                                               
											</thead>

 
                                            
											<tbody>
<?
													if($Envia == 1)
													{
?>
												
															<?
                                                            for ($a = 1; $a <= $Piezas; $a++) 
                                                            {
                                                            ?>
                                                            <tr class="gradeA">
                                                            <td style="background-color:#E3E4E0"><?=$a?></td>
                                                                <?
                                                                for ($o = 1; $o <= $Medidas; $o++) 
                                                                {
																	if($Envia == 1 && $Paso == 1)
																	{
																
																		$queryF			="SELECT* FROM Fdimensionalitemsc where Idformato = '$Id' AND Pieza = '$a' AND Medida = '$o' Order by Id ASC" ;
																		$resultF		=mysql_query($queryF, $id);
																				
																		while($rowF		=mysql_fetch_array($resultF))
																		{
																		$ValorF			=$rowF["Valor"];
																		$ResultadoF		=$rowF["Resultado"];
																		}
	
																		$ValorF 				=str_ireplace(".",",",$ValorF);
																	}
                                                                ?>
                                                                
                                                                    <td>
                                                                    <table width="100%" border="0">
                                                                      <tr>
                                                                        <td width="50%"><input type="text" name="Itm<?=$a?><?=$o?>" id="Itm<?=$a?><?=$o?>" class="form-control" placeholder="" value="<?=$ValorF?>" onKeyPress="return isNumberKeys(event);" style="width:99%; font-size:11px; background-color: #EFEDBA; border:0px; text-align:center;" onchange="Individual(<?=$a?><?=$o?>,<?=$o?>,<?=$o?>,<?=$o?>,<?=$a?><?=$o?>);"></td>
                                                                        <td width="50%" id="Ras<?=$a?><?=$o?>" style="text-align:center;font-size:8px;"><?=$ResultadoF?></td>
                                                                      </tr>
                                                                    </table>
                                                                    </td>
            
            
                                                                    
                                                                <?
																	$ValorF			='';
																	$ResultadoF		='';
                                                                }
                                                                ?>
            
                                                                
               
                                                            </tr>
                                                            <?
                                                            }
                                                            ?>


<?
													}
?>


















<?
													if($Envia == 1 && $Paso == 1)
													{
?>
												

                                                            <tr class="gradeA">
                                                            <td style="background-color: #FEABB1">%</td>
                                                                <?
                                                                for ($e = 1; $e <= $Medidas; $e++) 
                                                                {

																		$queryE			="SELECT AVG(Valor) AS Valor FROM Fdimensionalitemsc where Idformato = '$Id' AND Medida = '$e' Order by Id ASC" ;
																		$resultE		=mysql_query($queryE, $id);
																				
																		while($rowE		=mysql_fetch_array($resultE))
																		{
																		$ValorE			=$rowE["Valor"];
																		}
																		
																		$queryR			="SELECT* FROM Fdimensionalitemsc where Idformato = '$Id' AND Medida = '$e' Order by Id ASC" ;
																		$resultR		=mysql_query($queryR, $id);
																				
																		while($rowR		=mysql_fetch_array($resultR))
																		{
																		$DesdeR			=$rowR["Desde"];
																		$HastaR			=$rowR["Hasta"];
																		}
																		
																		if(($DesdeR >= $ValorE) && ($HastaR <= $ValorE))
																		{
																			$ResultadoR	= 'CUMPLE';
																		}
																		else
																		{
																			$ResultadoR	= 'NO CUMPLE';
																		}
																		

                                                                ?>
                                                                
                                                                    <td id="Filares<?=$e?>" style="background-color: #FEABB1">
                                                                    <table width="100%" border="0">
                                                                      <tr>
                                                                        <td width="50%" id="Valres<?=$e?>" style="text-align:center;"><?=$ValorE?></td>
                                                                        <td width="50%" id="Res<?=$e?>" style="text-align:center;font-size:8px;"><?=$ResultadoR?></td>
                                                                      </tr>
                                                                    </table>
                                                                    </td>
            
            
                                                                    
                                                                <?
																	$ValorF			='';
																	$ResultadoF		='';
                                                                }
                                                                ?>
            
                                                                
               
                                                            </tr>



<?
													}
?>


											</tbody>
										</table>
                                        			<div class="col-sm-6"></div>
                                        			<?
													if($Envia == 1)
													{
													?>
													<div class="form-group" style="text-align:left;">


                                                        <?
                                                        if($Paso == 1)
														{
														?>
															<br/><br/><button type="submit" id="enviar" class="btn btn-primary">GUARDAR Y SALIR</button>
                                                        <?
														}
														else
														{
														?> 
															<br/><br/><button type="submit" id="enviar" class="btn btn-primary">CONTINUAR PROCESO</button>
                                                        <?
														}
														?> 
                                                            
													</div>
													<?
													}
													?>
													</div>
                                        			<div class="col-sm-6">
                                        			&nbsp;
                                        			</div>

                                        

                                        
                                        
                                        
                                        
                                        
                                        
												</form>                                        
                                        
									</div><!--end .box-body -->
							</div><!--end .col-lg-12 -->
						</div>
						<!-- END DATATABLE 1 -->    
</div>    
    
    
    
    
<?
}
?>

				</section>
			</div><!--end #content-->
			<!-- END CONTENT -->

		</div><!--end #base-->
		<!-- END BASE -->

		<!-- BEGIN JAVASCRIPT -->
       
		<script src="../../assets/js/libs/jquery/jquery-1.11.0.min.js"></script>
		<script src="../../assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="../../assets/js/libs/jquery-ui/jquery-ui-1.10.3.complete.min.js"></script>
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

		<!--AJAX INDIVIDUAL PARA CADA DATO-->
		<script type="text/javascript">
		function Individual(Item,Valor,Valor1,Valor2,Campo){
		ItemX=document.getElementById("Itm"+Item).value;
		ValorX=document.getElementById("Vlr"+Valor).value;
		ValorUNO=document.getElementById("Vlr1"+Valor1).value;
		ValorDOS=document.getElementById("Vlr2"+Valor2).value;
		CampoX=$("#Ras"+Campo);

		/* Campos de abajo */

		Sumados=0;

		for (var y=0;y<=<?=$o?>;y++){
		Suma=$("#Itm"+y+Valor).val();
		if(!isNaN(Suma)){
		Sumados+=parseInt(Suma);
		}
		}

		ResultadoTOTAL=(Sumados/<?=$Piezas?>);

		RR=$("#Valres"+Valor);

		if (ResultadoTOTAL % 1 == 0) {
        RR.html(ResultadoTOTAL);
    	}
    	else{
        RR.html(ResultadoTOTAL.toFixed(2));
    	}

		

		SS=$("#Res"+Valor);
		Filares=$("#Filares"+Valor);

		if (ResultadoTOTAL<=ValorUNO && ResultadoTOTAL>=ValorDOS){
		SS.html("CUMPLE");
		Filares.animate({  backgroundColor: "white",  color: "black",}, 300 );
        Filares.delay(300);
        Filares.animate({ backgroundColor: "#FEABB1",color: "black", }, 300 );
		}
		else{
		SS.html("NO CUMPLE");
		Filares.animate({  backgroundColor: "white",  color: "black",}, 300 );
        Filares.delay(300);
        Filares.animate({  backgroundColor: "#FEABB1",  color: "black",}, 300 );
		}

		/* Campos individuales */

		if (ItemX<=ValorUNO && ItemX>=ValorDOS){
		CampoX.html("CUMPLE");
		CampoX.animate({  backgroundColor: "#04B404",  color: "white",}, 500 );
		}
		else{
		CampoX.html("NO CUMPLE");
		CampoX.animate({  backgroundColor: "#FE2E2E",  color: "white",}, 500 );
		}
		};

		function Individual2(Valor){
		Val1=$("#Vlr1"+Valor).val();
		Val2=$("#Vlr2"+Valor).val();
		Val=$("#Vlr"+Valor);
		Valres=$("#Valres"+Valor).html();


		/*Cogiendo todos los datos de la tabla*/
		for (var i=0;i<=<?=$o?>;i++) {
		Item=$("#Itm"+i+Valor);
		RespItem=$("#Ras"+i+Valor);
		ValorItem=Item.val();
		if (ValorItem<=Val1 && ValorItem>=Val2) {
		RespItem.html("CUMPLE");
		RespItem.animate({  backgroundColor: "#04B404",  color: "white",}, 500 );
		}
		else{
		RespItem.html("NO CUMPLE");
		RespItem.animate({  backgroundColor: "#FE2E2E",  color: "white",}, 500 );
		}
		};
		/*Finalizando todos los datos de la tabla*/


		SS=$("#Res"+Valor);
		Filares=$("#Filares"+Valor);

		if (Valres<=Val1 && Valres>=Val2) {
		SS.html("CUMPLE");
		Val.animate({  backgroundColor: "white",  color: "black",}, 300 );
        Val.delay(300);
        Val.animate({ backgroundColor: "#EFEFEF",color: "black", }, 300 );
		Filares.animate({  backgroundColor: "white",  color: "black",}, 300 );
        Filares.delay(300);
        Filares.animate({ backgroundColor: "#FEABB1",color: "black", }, 300 );
		}
		else{
		SS.html("NO CUMPLE");
		Val.animate({  backgroundColor: "white",  color: "black",}, 300 );
        Val.delay(300);
        Val.animate({ backgroundColor: "#EFEFEF",color: "black", }, 300 );
		Filares.animate({  backgroundColor: "white",  color: "black",}, 300 );
        Filares.delay(300);
        Filares.animate({ backgroundColor: "#FEABB1",color: "black", }, 300 );
		}

		};
		</script>
		<!--FIN AJAX INDIVIDUAL-->




    <!-- END JAVASCRIPT CODES FOR THE CURRENT PAGE -->
        <!-- END JAVASCRIPT CODES -->        
        
 
	</body>
</html>
