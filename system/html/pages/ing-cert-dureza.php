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
					

					
					$horaactual 		=date("Y-m-d");


					$Fechas 			=$_REQUEST["F"];
					$OrdenCompra 		=$_REQUEST["O"];					
					$Cliente 			=$_REQUEST["C"];


					$queryONE 		="SELECT * FROM Clientes WHERE Id='$Cliente' || Nombre='$Cliente'";
                    $resultONE 		=mysql_query($queryONE,$id);
                    while ($rowONE 	=mysql_fetch_array($resultONE)){
                    $IdONE 			=$rowONE["Id"];
                    $NombreONE 		=$rowONE["Nombre"];
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

 <SCRIPT LANGUAGE="JavaScript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
 </script>  
 
 
<script type="text/javascript">
<!--
function isNumberKeys(evt)
{
	var charCode = (evt.which) ? evt.which : event.keyCode

	if (!((charCode >47 && charCode <=57) || (charCode ==8)||(charCode==46)||( charCode == 0)||(charCode==127))) 
	
	return false;
	return true;
	

	
}
	//-->
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
                                            
                                            
                                            
                                            

					<form class="form-horizontal form-validate" role="form" method="post" action="ing-cert-dureza-2.php" id="form1" name="form1" enctype="multipart/form-data" novalidate>

					<div class="section-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="box style-transparent">
									<!-- START PROFILE TABS -->
									<div class="box-head">
										<ul class="nav nav-tabs tabs-transparent" data-toggle="tabs">
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Ingresar certificado</a></li>
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
                                                        	            <label class="control-label">Cliente</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	      	<select name="Cliente" id="Cliente" class="form-control" required>
                                                        	      	<?if(!empty($Cliente)){?>
                                                        	      	<option value="<?=$IdONE?>"><?=$NombreONE?></option>
                                                        	      	<?}else{?>
                                                        	      	<option value="">Seleccione un proveedor</option>
                                                        	      	<?
                                                        	      	}
                                                        	      	$query1 		="SELECT * FROM Clientes WHERE Muestra=0";
                                                        	      	$result1 		=mysql_query($query1,$id);
                                                        	      	while ($row1 	=mysql_fetch_array($result1)){
                                                        	      	$IdProv    		=$row1["Id"];
                                                        	      	$NombreProv 	=$row1["Nombre"];
                                                        	      	?>
                                                        	      	<option value="<?=$IdProv?>"><?=$NombreProv?></option>
                                                        	      	<?}?>
                                                        	      	</select>
                                                        	        </div>
                                                        	    </div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<div class="col-lg-2 col-md-4 col-sm-6">
																		<label for="Fecha" class="control-label">Fecha</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
																		<div class='input-group date' id='demo-date-start'>
																<input type="text" value="<?=$Fechas?>" class="form-control" required name="Fecha" id="Fecha"/>
																<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																	</div>
																	</div>
																</div>
															</div>

														</div>


														<div class="row">
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Orden de compra</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="OrdenCompra" id="OrdenCompra" value="<?=$OrdenCompra?>" placeholder="Orden de compra" onChange="javascript:this.value=this.value.toUpperCase();" required>
                                                        	        </div>
                                                        	    </div>
															</div>
															
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Descripción</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="Descripcion" id="Descripcion" value="<?=$Descripcion?>" placeholder="Descripción" onChange="javascript:this.value=this.value.toUpperCase();" required>
                                                        	        </div>
                                                        	    </div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Material</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="Material" id="Material" value="<?=$Material?>" placeholder="Material" onChange="javascript:this.value=this.value.toUpperCase();" required>
                                                        	        </div>
                                                        	    </div>
															</div>
														</div>
														<hr size="90%">
														<div class="row">
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Trazabilidad</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	      	<select name="Trazabilidad" id="Trazabilidad" class="form-control" onchange="PatronReferencia();" required>
                                                        	      	<option value="">Seleccione un instrumento</option>
                                                        	      	<?
                                                        	      	$queryR 		="SELECT * FROM InstrumentosDOS WHERE Muestra=0";
                                                        	      	$resultR 		=mysql_query($queryR,$id);
                                                        	      	while ($rowR 	=mysql_fetch_array($resultR)){
                                                        	      	$IdIns    		=$rowR["Id"];
                                                        	      	$Codigo	 		=$rowR["Codigo"];
                                                        	      	?>
                                                        	      	<option value="<?=$IdIns?>"><?=$Codigo?></option>
                                                        	      	<?}?>
                                                        	      	</select>
                                                        	        </div>
                                                        	    </div>
															</div>
															
														</div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group">
																	<div class="col-sm-1">
																		<label for="Patron" class="control-label"></label>
                                                        	        </div>
                                                        	        <div class="col-sm-11">
																		<textarea  name="Patron" id="Patron" class="form-control" placeholder="Patrón de referencia" onChange="javascript:this.value=this.value.toUpperCase();" required readonly disabled></textarea>
																	</div>
																</div>
															</div>	
														</div>
														<hr size="90%">
														<div class="row">
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">UK</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="UK" id="UK" value="<?=$UK?>" placeholder="UK" onChange="javascript:this.value=this.value.toUpperCase();Total();" required>
                                                        	        </div>
                                                        	    </div>
															</div>
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Tipo de dureza</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	      	<select name="TipoDureza" id="TipoDureza" class="form-control" onchange="Requerida();" required>
                                                        	      	<option value="">Seleccione un tipo de dureza</option>
                                                        	      	<?
                                                        	      	$queryF 		="SELECT * FROM TipoDureza WHERE Muestra=0";
                                                        	      	$resultF 		=mysql_query($queryF,$id);
                                                        	      	while ($rowF 	=mysql_fetch_array($resultF)){
                                                        	      	$IdF    		=$rowF["Id"];
                                                        	      	$NombreF	 	=$rowF["Nombre"];
                                                        	      	?>
                                                        	      	<option value="<?=$IdF?>"><?=$NombreF?></option>
                                                        	      	<?}?>
                                                        	      	</select>
                                                        	        </div>
                                                        	    </div>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Carga aplicada (N)</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="CargaAplicada" id="CargaAplicada" value="<?=$CargaAplicada?>" placeholder="Carga aplicada" onChange="javascript:this.value=this.value.toUpperCase();" required>
                                                        	        </div>
                                                        	    </div>
															</div>
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Foto</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input name="foto" class="form-control" type="file" id="foto">
                                                        	        </div>
                                                        	    </div>
															</div>
														</div>
														<hr size="90%">

														<div class="row">
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Num. Medidas</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	      	<select name="Medidas" id="Medidas" class="form-control select2-list" required onchange="Create();">
                                                        	      	<option value="">Seleccione un número de medidas</option>
                                                        	      	<?
                                                        	      	for ($i=1; $i <= 10; $i++) {
                                                        	      	?>
                                                        	      	<option value="<?=$i?>"><?=$i?></option>
                                                        	      	<?}?>
                                                        	      	</select>
                                                        	        </div>
                                                        	    </div>
															</div>
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Num. Puntos</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	      	<select name="Puntos" id="Puntos" class="form-control select2-list" required onchange="Create();">
                                                        	      	<option value="">Seleccione un número de puntos</option>
                                                        	      	<?
                                                        	      	for ($i=1; $i <= 10; $i++) {
                                                        	      	?>
                                                        	      	<option value="<?=$i?>"><?=$i?></option>
                                                        	      	<?}?>
                                                        	      	</select>
                                                        	        </div>
                                                        	    </div>
															</div>
														</div>
														<hr size="90%">
														<div class="row">
															<div class="col-md-1">
                                                        	    <label class="control-label">&nbsp;</label>
                                                        	</div>
															<div class="col-md-11">
																<div style="display:none;" id="Tabla">

																</div>
															</div>
														</div>

														<div id="One" style="display:none;" class="row">
															<div class="col-md-1">
                                                        	            <label class="control-label">&nbsp;</label>
                                                        	        </div>
															<div class="col-md-6">
																	<table class="table table-hover table-condensed">
																		<tr>
																			<td colspan="5" class="text-center" style="font-size:17px;background-color:#F5D0A9;"><strong>Dureza requerida</strong></td>
																		</tr>
																		<tr>
																			<td rowspan="2"><input type="text" class="form-control text-center" id="Req1" name="Req1" style="max-width:90px;min-height:63px;font-size:20px;" onchange="Requerida();Total();" onKeyPress='return isNumberKeys(event);'></td>
																			<td>
																			  <table>
																				<tr>
																				  <td>
																				  	<div class="input-group">
																				  		<span class="input-group-addon" style="font-size:15px;"><strong>&nbsp;&nbsp;+&nbsp;</strong></span>
																				  		<input type="text" class="form-control text-center" id="Req2" name="Req2" style="max-width:60px;min-height:31.5px;font-size:15px;" onchange="Requerida();Total();" onKeyPress='return isNumberKeys(event);'>
																				 	</div>
																				  </td>
																				</tr>
																				<tr>
																				  <td>
																				  	<div class="input-group">
																				  		<span class="input-group-addon" style="font-size:15px;"><strong>&nbsp;—</strong></span>
																				  		<input type="text" class="form-control text-center" id="Req3" name="Req3" style="max-width:60px;min-height:31.5px;font-size:15px;" onchange="Requerida();Total();" onKeyPress='return isNumberKeys(event);'>
																				 	</div>
																				  </td>
																				</tr>
																			  </table>
																			</td>
																			<td>
																			  <table>
																				<tr>
																				  <td>
																				  	<input type="text" value="Max." class="form-control text-center" style="max-width:90px;min-height:31.5px;font-size:15px;" readonly disabled>
																				  </td>
																				</tr>
																				<tr>
																				  <td>
																				  	<input type="text" value="Min." class="form-control text-center" style="max-width:90px;min-height:31.5px;font-size:15px;" readonly disabled>
																				  </td>
																				</tr>
																			  </table>
																			</td>
																			<td>
																			  <table>
																				<tr>
																				  <td>
																				  	<input type="text" class="form-control text-center" id="Req4" name="Req4"style="max-width:90px;min-height:31.5px;font-size:15px;" readonly>
																				  </td>
																				</tr>
																				<tr>
																				  <td>
																				  	<input type="text" class="form-control text-center" id="Req5" name="Req5" style="max-width:90px;min-height:31.5px;font-size:15px;" readonly>
																				  </td>
																				</tr>
																			  </table>
																			</td>
																			<td rowspan="2"><input type="text" class="form-control text-center" id="Req6" name="Req6" style="min-width:90px;min-height:63px;font-size:20px;" onclick="Requerida();" onchange="javascript:this.value=this.value.toUpperCase();Total();" readonly></td>
																		</tr>
																	</table>
															</div>
															<div class="col-md-5">
																	<table class="table table-hover table-condensed">
																		<tr>
																			<td colspan="5" class="text-center" style="font-size:17px;background-color:#F5D0A9;"><strong>Dureza obtenida</strong></td>
																		</tr>
																		<tr>
																			<td rowspan="2" width="33%"><input type="text" id="Obt1" name="Obt1" class="form-control text-center" style="min-height:63px;font-size:20px;" readonly></td>
																			<td rowspan="2" width="34%"><input type="text" id="Obt3" name="Obt3" class="form-control text-center" style="min-height:63px;font-size:20px;" readonly></td>
																			<td rowspan="2" width="33%">
																				<div class="input-group">
																				<span class="input-group-addon" style="font-size:20px;"><strong>±</strong></span>
																				<input id="Obt2" name="Obt2" type="text" class="form-control text-center" style="min-height:63px;font-size:20px;" readonly>
																				</div>
																			</td>
																		</tr>
																	</table>
															</div>
														</div>

														<div id="Two" style="display:none;" class="row">
															<div class="col-md-1">
                                                        	            <label class="control-label">&nbsp;</label>
                                                        	        </div>
															<div class="col-md-6">
																<table style="background-color:#E6E6FA;" class="table table-condensed">
																	<tr>
																		<td><input type="text" class="form-control" value="Resultado" style="font-size:20px;background-color:#E6E6FA;min-height:50px;max-width:140px;" readonly disabled></input></td>
																		<td><input type="text" class="form-control" id="Resultado" name="Resultado" style="font-size:20px;min-height:50px;"  readonly></input></td>
																	</tr>
																</table>
															</div>
														</div>

														<div class="form-group">
															<div class="col-sm-1">
															<label for="Descripcion" class="control-label"></label>
                                                        	</div>

															<div class="col-lg-11 col-md-10 col-sm-9">
																	<button type="submit" class="btn btn-primary">Realizar Operación</button>
																	<button type="button" class="btn btn-support5">Ejecutar</button>
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
                           
         

					</form>
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
		<script src="../../assets/js/core/demo/DemoFormComponents.js"></script>
		<script src="../../assets/js/libs/jquery-validation/dist/additional-methods.min.js"></script>
		<script src="../../assets/js/core/App.js"></script>
		<script src="../../assets/js/core/demo/Demo.js"></script>
		<!-- END JAVASCRIPT -->
		<!-- AJAX PARA CARGA EL PATRÓN DE REFERENCIA-->
		<script type="text/javascript">
		function PatronReferencia(){
		var Id 	   = $("#Trazabilidad").val();
		var Patron = $("#Patron");
 		$.ajax({
  		url: "patron-referencia.php",    // Página destino
  		type: "GET",   // En caso de ser GET o POST
  		data: "Id="+Id,  // Parámetros a enviar en este caso
  		success: function(response){
 		Patron.html(response);
  		}
		});
		};
		</script>
		<!--FIN AJAX-->
		<!--SCRIPT PARA CREAR TABLA-->
		<script type="text/javascript">
		//Función para crear las tablas
		function Create(){
		var Medidas = $("#Medidas").val();
		var Puntos  = $("#Puntos").val();
		var Tabla 	= $("#Tabla");

		var Filas="";
		var Columnas="";
		var Promedio="";
		var NumFilas="";
		var NumPuntos="";
		var FilasDerecha="";
		var Desviacion="";

		for (x = 1; x <=Puntos; x++) {
		Filas+="<tr>";
		for (i = 1; i <=Medidas; i++) {
		Filas+="<td><input type='text' id='Vlr"+x+i+"' name='Vlr"+x+i+"' class='form-control text-center' onchange='PromedioColumna("+i+");PromedioFila("+x+");DesviacionEstandar("+x+");Total();' onKeyPress='return isNumberKeys(event);' required></td>";
		}
		Filas+="</tr>";
		}

		for (y = 1; y <=Medidas; y++) {
		Promedio+="<td><input type='text' id='Prom"+y+"' name='Prom"+y+"' class='form-control text-center' style='background-color:#D8D8D8;' readonly required></td>";
		NumFilas+="<td class='text-center' style='background-color:#D8D8D8;'><label><strong>"+y+"</strong></label></td>";
		}

		FilasDerecha+="<tr><td class='text-center' style='background-color:#D8D8D8;'><label><strong>Promedio</strong></label></td></tr>";
		NumPuntos+="<tr><td class='text-center' style='background-color:#D8D8D8;'><label><strong>Prueba Nº ↓</strong></label></td></tr>";
		Desviacion+="<tr><td class='text-center' style='background-color:#D8D8D8;'><label><strong>Desviación</strong></label></td></tr>";
		for(z=1;z<=Puntos;z++){
		FilasDerecha+="<tr><td class='text-center'><input type='text' class='form-control text-center' id='Derecho"+z+"' name='Derecho"+z+"' value='' readonly></td></tr>";
		NumPuntos+="<tr><td class='text-center'><input type='text' class='form-control text-center' style='background-color:#D8D8D8;' value="+z+" readonly disabled></td></tr>";
		Desviacion+="<tr><td class='text-center'><input type='text' class='form-control text-center' id='Desv"+z+"' name='Desv"+z+"' value='' readonly></td></tr>";
		}
		FilasDerecha+="<tr><td class='text-center'><input type='text' id='Rain' name='Rain' class='form-control text-center' style='background-color:#99FF99;' readonly></td></tr>";
		NumPuntos+="<tr><td class='text-center'><input type='text' value='Promedio' class='form-control text-center' style='background-color:#D8D8D8;' readonly disabled></td></tr>";
		Desviacion+="<tr><td class='text-center'><input type='text' id='Desviacion' name='Desviacion' class='form-control text-center' style='background-color:#99FF99;' readonly></td></tr>";

		var Contenido="<table><tr><td>";
		Contenido+="<table class='table table-hover table-condensed'>"+NumPuntos+"</table></td>";
		Contenido+="<td><table class='table table-hover table-condensed'><tr>"+NumFilas+"</tr>"+Filas+"<tr>"+Promedio+"</tr></table></td>";
		Contenido+="<td><table class='table table-hover table-condensed'>"+FilasDerecha+"</table></td>";
		Contenido+="<td><table class='table table-hover table-condensed'>"+Desviacion+"</table></td></tr></table>";
		

		if (Medidas!="" && Puntos!="") { //Muestra
		Tabla.html(Contenido);
		Tabla.show("slow");
		$("#One").show("slow");
		$("#Two").show("slow");
		}
		else{ //Esconde
		Tabla.hide("slow");
		Tabla.html("");
		$("#One").hide("slow");
		$("#Two").hide("slow");
		}

		}
		//Fin de la función para crear las tablas


		//Función para calcular los promedios de cada columna
		function PromedioColumna(Columna){
		var Medidas = $("#Medidas").val();
		var Puntos  = $("#Puntos").val();
		var Campo 	= $("#Prom"+Columna);
		var Sumados = 0;
		var Total 	= 0;
		var Promedio= 0;

		for(x=0;x<=Puntos;x++){
		Total=$("#Vlr"+x+Columna).val();
		Total=parseInt(Total);

		if(!isNaN(Total)){
		Sumados+=Total;
		}
		Promedio=Sumados/Puntos;
		};

		if (Promedio % 1 == 0) {
		Campo.val(Promedio);
    	}
    	else{
		Campo.val(Promedio.toFixed(2));
    	}

    	Campo.animate({  backgroundColor: "#04B404",  color: "black",}, 300 );
        Campo.delay(60);
        Campo.animate({ backgroundColor: "#D8D8D8",color: "black", }, 300 );

		};
		//Fin de la función para promedio de cada columna

		//Función para el promedio de cada fila
		function PromedioFila(Fila){
		var Medidas = $("#Medidas").val();
		var Puntos  = $("#Puntos").val();
		var Campo 	= $("#Derecho"+Fila);
		var Sumados = 0;
		var Total 	= 0;
		var Promedio= 0;

		for(x=0;x<=Medidas;x++){
		Total=$("#Vlr"+Fila+x).val();
		Total=parseInt(Total);

		if(!isNaN(Total)){
		Sumados+=Total;
		}
		Promedio=Sumados/Medidas;
		};

		if (Promedio % 1 == 0) {
		Campo.val(Promedio);
    	}
    	else{
		Campo.val(Promedio.toFixed(2));
    	}

    	Campo.animate({  backgroundColor: "#04B404",  color: "black",}, 300 );
        Campo.delay(60);
        Campo.animate({ backgroundColor: "#D8D8D8",color: "black", }, 300 );

		};
		//Fin de la funcion para el promedio de cada fila

		//Funcion para el resultado total
		function Total(){
		var Medidas   = $("#Medidas").val();
		var Puntos    = $("#Puntos").val();
		var Campo     = $("#Rain");
		var Obt1 	  = $("#Obt1");
		var Obt2 	  = $("#Obt2");
		var Obt 	  = Obt1.val();
		var Req4 	  = $("#Req4").val();
		var Req5 	  = $("#Req5").val();
		var Sumados   = 0;
		var Total 	  = 0;
		var Promedio  = 0;
		var Resultado = $("#Resultado");

		// Desviación maxima
		var Dev 	  = $("#Desviacion");
		var Incertidumbre=$("#UK").val();
		var Desviaciones=new Array();


		for(var r=0;r<=Puntos;r++){
		var ar=(r-1);
		Desviaciones[ar]=$("#Desv"+r).val();
		}
		var max=Math.max.apply(null,Desviaciones);
		Dev.val(max);
		//Fin desviación maxima

		//Campo para la dureza obtenida
		var ObtTOTAL=parseFloat(Incertidumbre)+parseFloat(max);
		if (ObtTOTAL % 1 == 0) {
		Obt2.val(ObtTOTAL);
    	}
    	else{
		Obt2.val(ObtTOTAL.toFixed(2));
    	}
		//Fin dureza obtenida

		//Función del promedio total
		for(x=0;x<=Puntos;x++){
		Total=$("#Derecho"+x).val();
		Total=parseInt(Total);

		if(!isNaN(Total)){
		Sumados+=Total;
		}
		};

		Promedio=Sumados/Puntos;

		if (Promedio % 1 == 0) {
		Campo.val(Promedio);
		Obt1.val(Promedio);
    	}
    	else{
		Campo.val(Promedio.toFixed(2));
		Obt1.val(Promedio.toFixed(2));
    	}
    	//FIn de la funcion del promedio

    	//Funcion cumple o no cumple
    	if(Obt<=Req4 && Obt>=Req5){
    	Resultado.val("CUMPLE");
    	}
    	else{
    	Resultado.val("NO CUMPLE");
    	}
    	//Fin de funcion cumple o no cumple

    	//Animando los campos
    	Campo.animate({  backgroundColor: "white",  color: "black",}, 300 );
        Campo.delay(60);
        Campo.animate({ backgroundColor: "#99FF99",color: "black", }, 300 );

        Obt1.animate({  backgroundColor: "#99FF99",  color: "black",}, 300 );
        Obt1.delay(60);
        Obt1.animate({ backgroundColor: "white",color: "black", }, 300 );

        Resultado.animate({  backgroundColor: "#99FF99",  color: "black",}, 300 );
        Resultado.delay(60);
        Resultado.animate({ backgroundColor: "white",color: "black", }, 300 );

        //Fin de la animación de los campos del resultado total
		};
		//Fin de la funcion del resultado total

		//Función dureza requeridad
		function Requerida(){
		var Tipo   = $("#TipoDureza option:selected").html(); 

		var Campo1 = $("#Req1").val();
		var Campo2 = $("#Req2").val();
		var Campo3 = $("#Req3").val();
		var Campo4 = $("#Req4");
		var Campo5 = $("#Req5");
		var Campo6 = $("#Req6");

		var Obt3   = $("#Obt3");

		var Suma   = 0;
		var Resta  = 0;

		Suma =parseFloat(Campo1)+parseFloat(Campo2);
		Resta=(Campo1-Campo3);

		Campo4.val(Suma);
		Campo5.val(Resta);

		Campo6.val(Tipo);
		Obt3.val(Tipo);
		Obt3.animate({  backgroundColor: "#99FF99",  color: "black",}, 300 );
        Obt3.delay(60);
        Obt3.animate({ backgroundColor: "white",color: "black", }, 300 );
		};
		//FIn funcion dureza requerida

		//Función desviacion estándar
		function DesviacionEstandar(Fila){
		var Medidas = $("#Medidas").val();
		var Puntos  = $("#Puntos").val();
		var Campo 	= $("#Desv"+Fila);
		var Promedio= $("#Derecho"+Fila).val();
		var Valor1 	= 0;
		var Valor2 	= 0; 
		var Valor3 	= 0;
		var Valor4 	= 0;
		var Valor5 	= 0;
		var Valor6 	= 0;
		var Valor7 	= 0;
		var x;

		for (var i=1;i<=Medidas;i++) {
		x=$("#Vlr"+Fila+i).val(); //Valor de cada número
		Valor1=(x-Promedio);  	  //Promedio menos valor
		Valor3+=Math.pow(Valor1,2);//Todos al cuadrado
		};
		
		Valor4=(Medidas-1); 	  //Valor por el que se divide todo al cuadrado
		Valor5=(Valor3/Valor4);   //División
		Valor6=Math.pow(Valor5,2);//Valor 6 es la varianza, varianza al cuadrado
		Valor2=Math.exp(Math.log(Valor6) / 2); //Raiz cuadrada de el resultado es igual a la desviacón estandar
		Valor7=Math.sqrt(Valor2);
		if (Valor7 % 1 == 0) {
		Campo.val(Valor7); //Imprimiendo si no tiene decimales
    	}
    	else{
		Campo.val(Valor7.toFixed(2)); //Si tiene decimales redondea en dos
    	}
		};
		//Fin función desviación estándar 
		</script>
		<!--FIN SCRIPT CREAR TABLA-->
	</body>
</html>
