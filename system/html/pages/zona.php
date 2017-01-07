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

$FechaActual	= date('Y-m-d');
$DiasActual     = date('d',strtotime($FechaActual));

//Funcion diferencia de días

function DiferenciaDias($Actual,$Proxima){
	if (!is_integer($Actual)) $Actual = strtotime($Actual);
    if (!is_integer($Proxima)) $Proxima = strtotime($Proxima);  
    
       return floor(abs($Actual - $Proxima) / 60 / 60 / 24);
}
					
// Consulta calibración
				
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
?>
		      </div>
		  </div><!--end #sidebar-->
			<!-- END SIDEBAR -->

			<!-- BEGIN CONTENT-->
			<div id="content">
				<section>
					<div class="section-header">
						<h3 class="text-standard"><i class="fa fa-fw fa-arrow-circle-right text-gray-light"></i> Home</h3>
					</div>
					<div class="section-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="box style-transparent">
									<!-- START PROFILE TABS -->
									<div class="box-head">
										<ul class="nav nav-tabs tabs-transparent" data-toggle="tabs">
											<li class="active"><a href="#overview"><i class="fa fa-inbox"></i> Ultimos Ingresos</a></li>
											<li><a href="#editDetails"><i class="fa fa-edit"></i> Ultimas Salidas</a></li>
										</ul>
									</div>
									<!-- END PROFILE TABS -->

									<div class="tab-content">
										<!-- START PROFILE OVERVIEW -->
										<div class="tab-pane active" id="overview">
											<div class="box-tiles style-white">
												<div class="row">
													<!-- START PROFILE SIDEBAR --><!--end .col-sm-3 -->
													<!-- END PROFILE SIDEBAR -->

													<!-- START PROFILE CONTENT -->
													<div class="col-lg-12">
													  <div class="box-body">
														  <div class="row">
																<div class="col-sm-8">
																	<p class="lead">Plan de calibración.</p>
																</div>

															</div>
															<div class="row">&nbsp;</div><!-- Extra row gap-->
															<div class="row">
																<div class="box-body">
																	<div class="table-responsive">
																		<table class="table table-bordered">
																			<thead>
																				<tr>
																				<th>Código instrumento</th>
																				<th>Fecha vencimiento</th>
																				<th>Días restantes</th>
																				</tr>																			
																			</thead>
																			<tbody><?
																			$query1  		= "SELECT * FROM Calibracionins WHERE FechaVence <> '0000-00-00' order by FechaVence ASC LIMIT 5";
																			$result1 		= mysql_query($query1,$id);
																			while 			($row1=mysql_fetch_array($result1)) {
																			$IdCali 		= $row1["Id"];
																			$CodigoCali 	= $row1["Codigo"];
																			$InstrumentoCali= $row1["Instrumento"];
																			$FechaCali 		= $row1["FechaVence"];
																			
																			// Consulta codigo
																			$queryDD 		= "SELECT * FROM InstrumentosDOS WHERE Id='$InstrumentoCali'";
																			$resultDD 		= mysql_query($queryDD,$id);
																			while ($rowDD 	=mysql_fetch_array($resultDD)) {
																			$CodigoCali 	=$rowDD["Codigo"];
																			}
																			//Diferencia de días
																			
																			$DiferenciaCali = DiferenciaDias($FechaActual,$FechaCali);
																			
																			if($DiferenciaCali<=5) {
																			$TextoCA    ="Faltan ".$DiferenciaCali." días para calibrar el instrumento ".$CodigoCali;
																			}
																			else{
																			$TextoCA="No tiene proximas calibraciones.";
																			}
																			?>
																			<tr>
																				<td><?=$CodigoCali?></td>
																				<td><?=$FechaCali?></td>
																				<td>Faltan <?=$DiferenciaCali?> días</td>
																			</tr>
																			<?
																			}?>
																			</tbody>
																		</table>
																	</div><!--end .table-responsive -->
																</div><!--end .col-sm-8 -->
			
            
                                                                
                                                                
                                                                
                                                                
															</div><!--end .row -->
														</div>
													</div><!--end .col-sm-9 -->
													<!-- END PROFILE CONTENT -->

												</div><!--end .row -->
											</div><!--end .box-body -->
										</div><!--end .tab-pane -->
										<!-- END PROFILE OVERVIEW -->

										<!-- START PROFILE EDITOR -->
										<div class="tab-pane" id="editDetails">
											<div class="box-body style-white">
										 					<div class="row">
																<div class="col-sm-8">
																	<p class="lead">Plan de verificación.</p>
																</div>

															</div>
                                                
																<div class="box-body">
																	<div class="table-responsive">
																		<table class="table table-bordered">
																			<thead>
																				<tr>
																					<th>Código instrumento</th>
																					<th>Fecha vencimiento</th>
																					<th>Días restantes</th>
																				</tr>
																			</thead>
																			<tbody>
																				
																					<?
																					// Consulta verificación
																					$query2  		= "SELECT * FROM Verificacionins WHERE Proxima <> '0000-00-00' ORDER BY Proxima ASC LIMIT 5";
																					$result2 		= mysql_query($query2,$id);		
																					while 			($row2=mysql_fetch_array($result2)) {
																					$IdVeri			= $row2["Id"];
																					$InstrumentoVeri= $row2["Instrumento"];
																					$FechaVeri  	= $row2["Proxima"];
																					
																					// Consulta codigo
																					$querySS 		= "SELECT * FROM InstrumentosDOS WHERE Id='$InstrumentoVeri'";
																					$resultSS 		= mysql_query($querySS,$id);
																					while ($rowSS 	= mysql_fetch_array($resultSS)) {
																					$CodigoVeri 	=$rowSS["Codigo"];
																					}
																					//Diferencia de días
																					$DiferenciaVeri = DiferenciaDias($FechaActual,$FechaVeri);
																					
																					if($DiferenciaVeri<=5) {
																					$TextoVE    ="Faltan ".$DiferenciaVeri." días para verificar el instrumento ".$CodigoVeri;
																					}
																					else{
																					$TextoVE="No tiene verificaciones proximas.";	
																					}
																					?>
																					<tr>																	
																					<td><?=$CodigoVeri?></td>
																					<td><?=$FechaVeri?></td>
																					<td><?=$DiferenciaVeri?></td>
																					</tr>
																					<?
																					}
																					?>
																			</tbody>
																		</table>
																	</div><!--end .table-responsive -->
																</div><!--end .col-sm-8 -->
                                                

											</div><!--end .box-body -->
										</div><!--end .tab-pane -->
										<!-- END PROFILE EDITOR -->

									</div><!--end .tab-content -->
								</div><!--end .box -->
							</div><!--end .col-lg-12 -->
						</div><!--end .row -->
                        
                        
                        







						<div class="row">
							<!-- START COLORED BOX -->
							<div class="col-lg-6">
								<div class="box box-bordered style-primary">
									<div class="box-head">
										<header><h4 class="text-light"><i class="fa fa-fw fa-tag"></i> Proximo plan de <strong>calibración:</strong></h4></header>
										<div class="tools">
											<div class="btn-group btn-group-transparent">
												<a class="btn btn-equal btn-sm btn-collapse"><i class="fa fa-angle-down"></i></a>
												<a class="btn btn-equal btn-sm btn-close"><i class="fa fa-times"></i></a>
											</div>
										</div>
									</div>
									<div class="box-body">
										<blockquote><?=$TextoCA?></blockquote>
									</div>
								</div>
							</div><!--end .col-lg-6 -->
							<!-- END COLORED BOX -->

							<!-- START GRADIENT BOX -->
							<div class="col-lg-6">
								<div class="box box-bordered style-primary-gradient">
									<div class="box-head">
										<header><h4 class="text-light"><i class="fa fa-fw fa-tag"></i> Proximo plan de <strong>verificación</strong></h4></header>
										<div class="tools">
											<div class="btn-group btn-group-transparent">
												<a class="btn btn-equal btn-sm btn-collapse"><i class="fa fa-angle-down"></i></a>
												<a class="btn btn-equal btn-sm btn-close"><i class="fa fa-times"></i></a>
											</div>
										</div>
									</div>
									<div class="box-body">
									
										<blockquote><?=$TextoVE?></blockquote>
									</div>
								</div>
							</div><!--end .col-lg-6 -->
							<!-- END GRADIENT BOX -->

						</div>










                        
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
		<script src="../../assets/js/core/App.js"></script>
		<script src="../../assets/js/core/demo/Demo.js"></script>
		<!-- END JAVASCRIPT -->

	</body>
</html>
