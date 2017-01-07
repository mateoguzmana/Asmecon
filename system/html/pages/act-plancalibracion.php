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
				

					
					$Idt				=$_REQUEST["Id"];
					
                    $queryped			="SELECT* FROM Tipouser where Id = '$Idt'";
                    $resultped			=mysql_query($queryped, $id);
                                                
                    While($rowped		=mysql_fetch_array($resultped))
                    {
					$Nombre				=$rowped["Nombre"];
					}
					
					
				
					$queryTITMEN		="SELECT* FROM Menusub WHERE Id = ".$_REQUEST["Idsubmenu"] ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
					$NombreTITMEN		=$rowTITMEN["Nombre"];
					}
					
					
					$query55				="SELECT * FROM Calibracionins WHERE Id='$Idt'";
					$result55 				=mysql_query($query55,$id);
					while ($row55			=mysql_fetch_array($result55)) {
					$Calib++;
					$IdUS 					=$row55["Instrumento"];
					$IdCAC 					=$row55["Id"];
					$Certificado			=$row55["Certificado"];
					$Incertidumbre			=$row55["Incertidumbre"];
					$Desviacion				=$row55["Desviacion"];
					$FechaCAC 				=$row55["Fecha"];
					$FechaVence				=$row55["FechaVence"];
					$Resultado 				=$row55["Resultado"];
					$ResponsableCAC         =$row55["Responsable"]; 	
					$ToleranciaProceso 		=$row55["ToleranciaProceso"];
					$DesviacionMaxima 		=$row55["DesviacionMaxima"];
					$ToleranciaDesviacion  	=$row55["ToleranciaDesviacion"];
					$Medicion 				=$row55["Medicion"];
					$Unidad 				=$row55["Unidad"];
					$RangoMedicion			=$row55["RangoMedicion"];
					$RutCAC 				=$row55["Foto"];
					}										

					if($Frecuencia1=="360"){
					$Dato="1 AÑO | 360";
					}
					elseif ($Frecuencia1=="720") {
					$Dato="2 AÑOS | 720";
					}
					elseif ($Frecuencia1=="1080") {
					$Dato="3 AÑOS | 1080";
					}
					elseif ($Frecuencia1=="1440") {
					$Dato="4 AÑOS | 1440";
					}
					elseif ($Frecuencia1=="1800") {
					$Dato="5 AÑOS | 1800";
					}
					elseif ($Frecuencia1=="2196") {
					$Dato="6 AÑOS | 2196";
					}
					elseif ($Frecuencia1=="3600") {
					$Dato="10 AÑOS | 3600";
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
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Modificar plan de calibración</a></li>
										</ul>
									</div>
									<!-- END PROFILE TABS -->

									<div class="tab-content">

										<!-- START PROFILE EDITOR -->
										<div class="tab-pane active" id="editDetails">
											<div class="box-body style-white">
												<form class="form-horizontal form-validate" role="form" method="post" action="instrumento-calibracion-3.php" enctype="multipart/form-data" novalidate>
													<div class="row">
                                                             	<form class="form-horizontal form-validate" role="form" enctype="multipart/form-data" method="post" action="instrumento-calibracion-2.php" novalidate>
																	<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																	<label for="Instrumento" class="control-label">Instrumento</label><br>
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" name="Instrumento" class="form-control" placeholder="Instrumento" value="<?=$IdUS?>" onChange="javascript:this.value=this.value.toUpperCase();" required readonly>
																	<input type="hidden" value="<?=$Idt?>" name="Id">
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																	<label for="Certificado" class="control-label">Certificado Nº</label><br>
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" class="form-control" name="Certificado" value="<?=$Certificado?>" placeholder="Certificado Nº" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																	<label for="Incertidumbre" class="control-label">Incertidumbre</label><br>
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" name="Incertidumbre" class="form-control" value="<?=$Incertidumbre?>" placeholder="Incertidumbre" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																	<label for="DesviacionEncontrada" class="control-label">Desviación encontrada</label><br>
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" class="form-control" name="Desviacion" value="<?=$Desviacion?>" placeholder="Desviación encontrada" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																	<label for="FechaCalibracion" class="control-label">Fecha calibración</label><br>
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<div class='input-group date' id='demo-date-uno'>
																		<input type="text" class="form-control" value="<?=$FechaCAC?>" required name="Fecha" id="Fecha"/>
																		<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																	<label for="FechaVence" class="control-label">Fecha Vence</label><br>
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<div class='input-group date' id='demo-date-dos'>
																		<input type="text" class="form-control" value="<?=$FechaVence?>" required name="FechaVence" id="FechaVence"/>
																		<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																	<label for="Resultado" class="control-label">Resultado</label><br>
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<select name="Resultado" id="Resultado" class="form-control" required>
																		<option value="<?=$Resultado?>" selected><?=$Resultado?></option>
																		<option value="CONFORME">CONFORME</option>
																		<option value="NO CONFORME">NO CONFORME</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																	<label for="Responsable" class="control-label">Responsable</label><br>
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" class="form-control" name="Responsable" value="<?=$ResponsableCAC?>" placeholder="Responsable" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
															<div class="col-lg-12 col-md-12 col-sm-6">
																	<label for="Foto" class="control-label">Foto</label><br>
															</div>
															</div>
															<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
															  	<input name="foto" class="form-control"  type="file" id="foto">
															  	</div>
                                                                </div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
															<div class="col-lg-12 col-md-12 col-sm-6">
															<label for="Foto" class="control-label"></label><br>
															</div>
															</div>
															<div class="form-group">
															<div class="col-sm-12">
																<? if(!empty($RutCAC)){?><a href="instrumentosdos/certificados/<?=$RutCAC?>" target="_blank">(Ver Foto)</a><? }?>
															</div>
														</div>
														</div>
														<hr width="90%">
														<h4>&nbsp;&nbsp;&nbsp;Requesitos de medición</h4>
														<div class="col-sm-6">
															<fieldset><legend>Calculo de tolerancia vs Desviación</legend>
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																		<label for="Calculo" class="control-label">Tolerancia del proceso</label>
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" class="form-control" autocomplete="off" value="<?=$ToleranciaProceso?>" name="ToleranciaProceso" onchange="calculo()" id="ToleranciaProceso" required>
																</div>
															</div>
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																		<label for="DesviacionMaxima" class="control-label">Desviación máxima encontrada</label>
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" class="form-control" name="DesviacionMaxima" value="<?=$DesviacionMaxima?>" autocomplete="off" onchange="calculo()" id="DesviacionMaxima" required>
																</div>
															</div>
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																		<label for="ToleranciaDesviacion" class="control-label">Tolerancia vs desviación</label>
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" class="form-control" name="ToleranciaDesviacion"  value="<?=$ToleranciaDesviacion?>" autocomplete="off" id="ToleranciaDesv" required readonly>
																</div>
															</div>
														</fielset>
														<script type="text/javascript">
														function calculo(){
														var tolerancia=document.getElementById("ToleranciaProceso").value;
														var desviacion=document.getElementById("DesviacionMaxima").value;
														var formula=((tolerancia*2)/desviacion);
														var resultado=document.getElementById("ToleranciaDesv");
														if(desviacion!="" && tolerancia!=""){
														resultado.value=formula;
															}
														}
														</script>
														</div>	
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																	<label for="Medicion" class="control-label">Medición</label><br>
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<select name="Medicion" id="Medicion" class="form-control" required>
																		<option value="<?=$Medicion?>" selected><?=$Medicion?></option>
																		<option value="LONGITUD">LONGITUD</option>
																		<option value="ANGULOS">ÁNGULOS</option>
																		<option value="TEMPERATURA">TEMPERATURA</option>
																	</select>
																</div>
															</div>
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																	<label for="Unidad" class="control-label">Unidad</label><br>
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<select name="Unidad" id="Unidad" class="form-control" required>
																		<option value="<?=$Unidad?>" selected><?=$Unidad?></option>
																		<option value="MILIMETRO">MILÍMETRO</option>
																		<option value="PULGADA">PULGADA</option>
																		<option value="GRADOS">GRADOS</option>
																		<option value="GRADOS CELSIUS">GRADOS CELSIUS</option>
																	</select>
																</div>
															</div>
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																	<label for="RangoMedicion" class="control-label">Rango de medición</label><br>
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" class="form-control" name="RangoMedicion" value="<?=$RangoMedicion?>" placeholder="Rango de medición" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
                                                             </div> 
                                                         </fieldset>
                                                    

                                                    
                                                    
                                                    
												  
												  


													<div class="form-group">
														<div class="col-lg-11 col-md-10 col-sm-9">
															<button type="submit" class="btn btn-primary">Realizar Operación</button> 
                                                            <input name="Volver" type="button" class="btn btn-warning" value="Volver"  onClick="location.href='act-instrumentodos-2.php?Id=<?=$IdUS?>&Idsubmenu=<?=$_REQUEST["Idsubmenu"]?>&Idmenu=<?=$_REQUEST["Idmenu"]?>&Idopcmenu=<?=$_REQUEST["Idopcmenu"]?>'">
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
