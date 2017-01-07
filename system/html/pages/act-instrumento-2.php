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
					
					
					
					
					$IdUS				=$_REQUEST['Id']; 
					
					 $queryUSERS		="SELECT* FROM Instrumentos where Id = '$IdUS'";
					 $resultUSERS		=mysql_query($queryUSERS, $id);
													
					 While($rowUSERS	=mysql_fetch_array($resultUSERS))
					 {
						$Nombre				=$rowUSERS["Nombre"];
						$TipoInstrumento	=$rowUSERS["TipoInstrumento"];

						$Rut				=$rowUSERS["Foto"];
					 }
					
					$query33				="SELECT * FROM Tipoinstrumento WHERE Id='$TipoInstrumento'";
					$result33 				=mysql_query($query33,$id);
					while ($row33			=mysql_fetch_array($result33)) {

					$NombreRR 				=$row33["Nombre"];
					$IdRR 					=$row33["Id"];
					}
					
					$query44				="SELECT * FROM Verificacionins WHERE Instrumento='$IdUS'";
					$result44 				=mysql_query($query44,$id);
					while ($row44			=mysql_fetch_array($result44)) {
					$Verif++;
					$IdACT 					=$row44["Id"];
					$Fecha					=$row44["Fecha"];
					$Proxima				=$row44["Proxima"];
					$Frecuencia				=$row44["Frecuencia"];
					$Accion 				=$row44["Accion"];
					$Actividad				=$row44["Actividad"];
					$Observacion 			=$row44["Observacion"];
					$Responsable            =$row44["Responsable"]; 					
					}

					$query55				="SELECT * FROM Calibracionins WHERE Instrumento='$IdUS'";
					$result55 				=mysql_query($query55,$id);
					while ($row55			=mysql_fetch_array($result55)) {
					$Calib++;
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
					<div class="section-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="box style-transparent">
									<!-- START PROFILE TABS -->
									<div class="box-head">
										<ul class="nav nav-tabs tabs-transparent" data-toggle="tabs">
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Informacion de Instrumento</a></li>
										</ul>
									</div>
									<!-- END PROFILE TABS -->

									<div class="tab-content">

										<!-- START PROFILE EDITOR -->
										<div class="tab-pane active" id="editDetails">
											<div class="box-body style-white">
												
												<form class="form-horizontal form-validate" enctype="multipart/form-data"  role="form" method="post" action="act-instrumento-3.php" novalidate>
                                                
                                                
													<div class="row">
                                                    
                                                    
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Nombre" class="control-label">Nombre</label>
																	<input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Nombre" value="<?=$Nombre?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																	<input type="hidden" name="Id" value="<?=$IdUS?>">
																</div>
															</div>
														</div>

                                                     	<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	 <label for="email" class="control-label">Tipo de instrumento</label>
                                                                <select name="TipoInstrumento" id="TipoInstrumento" class="form-control select2-list" data-placeholder="Seleccione Categoria" required>
            
                                                                        <option value="<?=$IdRR?>" selected><?=$NombreRR?></option>

																		<?
                                                                        $queryTIP		="SELECT * FROM Tipoinstrumento where Activo = 0 and Muestra = 0 order by Nombre";
                                                                        $resultTIP		=mysql_query($queryTIP, $id);
                                                                        
                                                                        While($rowTIP	=mysql_fetch_array($resultTIP))
                                                                        {
                                                                        $IdTIP			=$rowTIP["Id"];
																		$NombreTIP		=$rowTIP["Nombre"];
                                                                        ?>
                                                                        <option value="<?=$IdTIP?>"><?=$NombreTIP?></option>
																		<?
																		}
																		?>

            
                                                                </select>
																</div>
															</div>
														</div>

														<div class="col-sm-6">

															<div class="form-group">
															<div class="col-sm-12">
															<label for="Contrasena" class="control-label">Foto</label>
															</div>
															  <div class="col-sm-12">
															  	<div class="col-sm-8"><input name="foto" class="form-control"  type="file" id="foto"></div>
																<div class="col-sm-4"><? if(!empty($Rut)){?><a href="instrumentos/<?=$Rut?>" target="_blank">(Ver Foto)</a><? }?></div>
                                                                </div>
															</div>
														</div>
                                                         <!-- START LARGE TEXT MODAL MARKUP -->
                                               	 <div class="modal fade" id="textModal<?=$IdUS?>" tabindex="-1" role="dialog" aria-labelledby="textModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                               
                                                            </div>
                                                            <div class="modal-body">
                                                                <img src="instrumentos/<?=$Rut?>">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                                
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                                <!-- END LARGE TEXT MODAL MARKUP -->
                                                        
													</div>


													<div class="form-group">
														
														<div class="col-lg-11 col-md-10 col-sm-9">
															<button type="submit" class="btn btn-primary">Realizar Operación</button>
															<button type="button" id="enviar" class="btn btn-support5" onclick="location.href='act-instrumento.php?Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>'">Volver</button> 
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
