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

				

					
					$Idt				=$_REQUEST["Id"];
					
					$Lin 				=$_REQUEST["Linea"];

                    $queryped			="SELECT * FROM SubMediciones WHERE Id = '$Idt'";
                    $resultped			=mysql_query($queryped, $id);
                                                
                    While($rowped		=mysql_fetch_array($resultped))
                    {
					$Nombre				=$rowped["Nombre"];
					$Codigo				=$rowped["Codigo"];
					$Linea  			=$rowped["Linea"];
					$Categoria 			=$rowped["Categoria"];
					}
					
					$queryKK 			="SELECT * FROM CatMediciones WHERE Id='$Categoria'";
					$resultKK 			=mysql_query($queryKK,$id);
					while 				($rowkk=mysql_fetch_array($resultKK)) {
					$IdKK 				=$rowkk["Id"];
					$NombreKK 			=$rowkk["Nombre"];	
					}
					
					if(empty($Lin)){
					$Linea=$Linea;
					}else{
					$Linea=$Lin;	
					}

					$queryQQ 			="SELECT * FROM Areas WHERE Id='$Linea'";
					$resultQQ 			=mysql_query($queryQQ,$id);
					while 				($rowQQ=mysql_fetch_array($resultQQ)) {
					$IdQQ 				=$rowQQ["Id"];
					$NombreQQ 			=$rowQQ["Nombre"];	
					}
				
					$queryTITMEN		="SELECT* FROM Menusub WHERE Id = ".$_REQUEST["Idsubmenu"] ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
					$NombreTITMEN		=$rowTITMEN["Nombre"];
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
		<script type="text/javascript">
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
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Modificar Tolerancia</a></li>
										</ul>
									</div>
									<!-- END PROFILE TABS -->

									<div class="tab-content">

										<!-- START PROFILE EDITOR -->
										<div class="tab-pane active" id="editDetails">
											<div class="box-body style-white">
												<form class="form-horizontal form-validate" role="form" method="post" action="act-submedidas-3.php" novalidate>
                                                
                                                <input name="Id"  id="Id" type="hidden" value="<?=$Idt?>">
													<div class="row">
                                                    	<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Linea" class="control-label">Linea</label>
																	<input name="Linea" id="Linea" type="hidden" value="<?=$Linea?>">
																	  <select name="jumpMenu" id="jumpMenu" class="form-control" onChange="MM_jumpMenu('parent',this,0)" required>
            															<?
                                                                        if(!empty($Linea))
																		{
																		?>
                                                                 		<option value="act-submedidas-2.php?Id=<?=$Idt?>&Linea=<?=$Linea?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>" selected><?=$NombreQQ?></option>
                                                                        <?
																		}
																		else{
																		?>
                                                                        <option value="" selected>Seleccione una Linea</option>
																		<?
																		}
                                                                        $query88		="SELECT * FROM Areas where  Id <> '$Linea' and Muestra = 0 order by Nombre";
                                                                        $result88		=mysql_query($query88, $id);
                                                                        
                                                                        while($row88	=mysql_fetch_array($result88))
                                                                        {
                                                                        $Id88			=$row88["Id"];
																		$Nombre88		=$row88["Nombre"];
                                                                        ?>
                                                                        <option value="act-submedidas-2.php?Id=<?=$Idt?>&Linea=<?=$Id88?>&Idmenu=<?=$Idmenux?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>"><?=$Nombre88?></option>
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
																	<label for="Categoria" class="control-label">Categoria</label>
																	 <select name="Categoria" id="Categoria" class="form-control select2-list" data-placeholder="Seleccione Categoria" required>
            
                                                                        <option value="<?=$IdKK?>" selected><?=$NombreKK?></option>

																		<?
                                                                        $queryNN		="SELECT * FROM CatMediciones where  Id <> '$Categoria' and Muestra = 0 AND Linea='$Linea'  order by Nombre";
                                                                        $resultNN		=mysql_query($queryNN, $id);
                                                                        
                                                                        While($rowNN	=mysql_fetch_array($resultNN))
                                                                        {
                                                                        $IdNN			=$rowNN["Id"];
																		$NombreNN		=$rowNN["Nombre"];
                                                                        ?>
                                                                        <option value="<?=$IdNN?>"><?=$NombreNN?></option>
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
																<label for="Nombre" class="control-label">Nombre</label>
																	<input name="Nombre" type="text" required class="form-control" id="Nombre" placeholder="Ingrese un Nombre" onChange="javascript:this.value=this.value.toUpperCase();" value="<?=$Nombre?>" required>
																</div>
															</div>
															</div>
															<div class="col-sm-6">
															<div class="form-group">
                                                              <div class="col-sm-12">
																<label for="Codigo" class="control-label">Código</label>
																	<input name="Codigo" type="text" required class="form-control" id="Codigo" placeholder="Ingrese un Nombre" onChange="javascript:this.value=this.value.toUpperCase();" value="<?=$Codigo?>" required>
																</div>
															</div>
															</div>
													</div>
                                                    

                                                    
                                                    
                                                    
												  
												  


													<div class="form-group">
														<div class="col-lg-11 col-md-10 col-sm-9">
															<button type="submit" class="btn btn-primary">Realizar Operación</button> 
                                                            <input name="Volver" type="button" class="btn btn-warning" value="Volver"  onClick="location.href='<?=$_SESSION['anterior']?>'">
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
