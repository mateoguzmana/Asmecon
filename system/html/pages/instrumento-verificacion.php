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
			$query99		="SELECT * FROM Verificacionins WHERE Instrumento='$Id'";
			$result99		=mysql_query($query99, $id);
			
			While($row99	=mysql_fetch_array($result99))
			{
			$count++;
			$Idins 		=$row99["Id"];
			$Fecha		=$row99["Fecha"];
			$Proxima 	=$row99["Proxima"];
			$Frecuencia =$row99["Frecuencia"];
			$Accion 	=$row99["Accion"];
			$Actividad 	=$row99["Actividad"];
			$Observacion=$row99["Observacion"];
			$Responsable=$row99["Responsable"];
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
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Plan de verificación</a></li>
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
												<form class="form-horizontal form-validate" role="form" method="post" action="instrumento-verificacion-2.php" novalidate>
                                                        <?
                                                    }
                                                    else{?>
                                                    	<form class="form-horizontal form-validate" role="form" method="post" action="instrumento-verificacion-3.php" novalidate>
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
																	<label for="Fecha" class="control-label">Fecha</label>
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
																	<label for="Proxima" class="control-label">Proxima</label>
																	<div class='input-group date' id='demo-date-end'>
																		<input type="text" value="<?=$Proxima?>" class="form-control" required name="Proxima" id="Proxima"/>
																		<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Frecuencia" class="control-label">Frecuencia</label>
																	<input type="text" name="Frecuencia" id="Frecuencia" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Frecuencia?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Accion" class="control-label">Accion</label>
																	<input type="text" name="Accion" id="Accion" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Accion?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Actividad" class="control-label">Actividad</label>
																	<input type="text" name="Actividad" id="Actividad" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Actividad?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Observacion" class="control-label">Observación</label>
																	<input type="text" name="Observacion" id="Observacion" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Observacion?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
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
