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
					
					
			$Id 				=$_REQUEST["Id"];

			$query88		="SELECT * FROM Instrumentos WHERE Id='$Id'";
			$result88		=mysql_query($query88, $id);
			
			While($row88	=mysql_fetch_array($result88))
			{
			$Nombre88		=$row88["Nombre"];
			}
			$query99		="SELECT * FROM Calibracionins WHERE Instrumento='$Id'";
			$result99		=mysql_query($query99, $id);
			
			while($row99	=mysql_fetch_array($result99))
			{
			$count++;
			$Idins 				=$row99["Id"];
			$Certificado 		=$row99["Certificado"];
			$Incertidumbre		=$row99["Incertidumbre"];
			$Desviacion 		=$row99["Desviacion"];
			$Fecha				=$row99["Fecha"];
			$FechaVence 		=$row99["FechaVence"];
			$Resultado			=$row99["Resultado"];
			$Responsable		=$row99["Responsable"];
			$ToleranciaProceso	=$row99["ToleranciaProceso"];
			$DesviacionMaxima 	=$row99["DesviacionMaxima"];
			$ToleranciaDesviacion=$row99["ToleranciaDesviacion"];
			$Medicion 			=$row99["Medicion"];
			$Unidad 			=$row99["Unidad"];
			$RangoMedicion 		=$row99["RangoMedicion"];
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
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/bootstrap-datetimepicker/bootstrap-datetimepicker.css?1403937882" />
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
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Plan de calibración</a></li>
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
														if($count==0){
														?>
												<form class="form-horizontal form-validate" role="form" method="post" action="instrumento-calibracion-2.php" novalidate>
                                                        <?
                                                    	}
                                                    else{
                                                    	?>
                                                    	<form class="form-horizontal form-validate" role="form" method="post" action="instrumento-calibracion-3.php" novalidate>
                                                    <?  }
														}
														else
														{
														?>
												<form class="form-horizontal form-validate" role="form" method="post"  novalidate>
                                                        <?
														}
														?>
                                                
													<div class="row">
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Instrumento" class="control-label">Instrumento</label>
																	<input type="text" name="Instrumento" id="Instrumento" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Id?>" onChange="javascript:this.value=this.value.toUpperCase();" required  readonly>
																	<input type="hidden" value="<?=$Idins?>" name="Id">
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Certificado" class="control-label">Certificado Nº</label>
																	<input type="text" name="Certificado" id="Certificado" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Certificado?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Incertidumbre" class="control-label">Incertidumbre</label>
																	<input type="text" name="Incertidumbre" id="Incertidumbre" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Incertidumbre?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Desviacion" class="control-label">Desviacion Encontrada</label>
																	<input type="text" name="Desviacion" id="Desviacion" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Desviacion?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Fecha" class="control-label">Fecha Calibracion</label>
																	<div class='input-group date' id='demo-date-start'>
																		<input type="text" value="<?=$Fecha?>" class="form-control" required name="Fecha" id="Fecha"/>
																		<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="FechaVence" class="control-label">Fecha Vence</label>
																	<div class='input-group date' id='demo-date-end'>
																		<input type="text" value="<?=$FechaVence?>" class="form-control" required name="FechaVence" id="FechaVence"/>
																		<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Resultado" class="control-label">Resultado</label>
																	<input type="text" name="Resultado" id="Resultado" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Resultado?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Responsable" class="control-label">Responsable</label>
																	<input type="text" name="Responsable" id="Responsable" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Responsable?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
														<hr width="90%">
														<h4>Requisitos de medición</h4>
														<fieldset><legend>Calculo de tolerencia vs Desviación</legend>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="ToleranciaProceso" class="control-label">Tolerancia del Proceso</label>
																	<input type="text" name="ToleranciaProceso" id="ToleranciaProceso" class="form-control" placeholder="Descripción del Instrumento" value="<?=$ToleranciaProceso?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="DesviacionMaxima" class="control-label">Desviación Maxima Encontrada</label>
																	<input type="text" name="DesviacionMaxima" id="DesviacionMaxima" class="form-control" placeholder="Descripción del Instrumento" value="<?=$DesviacionMaxima?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="ToleranciaDesviacion" class="control-label">Tolerancia vs Desviación</label>
																	<input type="text" name="ToleranciaDesviacion" id="ToleranciaDesviacion" class="form-control" placeholder="Descripción del Instrumento" value="<?=$ToleranciaDesviacion?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														</fieldset>
														</div>
														<div class="col-sm-6">
															<hr width="90%">
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Medicion" class="control-label">Medición</label>
																	<input type="text" name="Medicion" id="Medicion" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Medicion?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Unidad" class="control-label">Unidad</label>
																	<input type="text" name="Unidad" id="Unidad" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Unidad?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="RangoMedicion" class="control-label">Rango de Medicion</label>
																	<input type="text" name="RangoMedicion" id="RangoMedicion" class="form-control" placeholder="Descripción del Instrumento" value="<?=$RangoMedicion?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														</div>
													</div>
                                                    

                                                    
                                                    
                                                    
												  
												  


													<div class="form-group">
														<div class="col-lg-11 col-md-10 col-sm-9">

                                                        
                                                        
                                                        <?
                                                        if($MosPerz1 == 1)
														{
														?>
															<button type="submit" class="btn btn-primary">Realizar Operación</button>
                                                        <?
														}
														?> 
														<button type="button" id="enviar" class="btn btn-support5" onclick="location.href='act-instrumento.php?Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>'">Volver</button>
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
		<script src="../../assets/js/core/demo/DemoFormComponents.js"></script>
		<script src="../../assets/js/libs/inputmask/jquery.inputmask.bundle.min.js"></script>
		<script src="../../assets/js/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
		<script src="../../assets/js/libs/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>
        <script src="../../assets/js/libs/bootstrap-datetimepicker/locales/bootstrap-datetimepicker.es.js"></script>
		<!-- END JAVASCRIPT -->

	</body>
</html>
