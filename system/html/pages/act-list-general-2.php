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

					$Id 			=$_REQUEST["Id"];


					$query 		    ="SELECT * FROM ListadoPlanos WHERE Id = '$Id'";
					$result 	    =mysql_query($query,$id);
					while($row      =mysql_fetch_array($result)){
					$OrdenTrabajo 	=$row["OrdenTrabajo"];
					$Factura 		=$row["Factura"];
					$Rip 			=$row["Rip"];
					$Cliente		=$row["Cliente"];
					$Instalacion	=$row["Instalacion"];
					$Sistema 		=$row["Sistema"];
					$Subsistema 	=$row["Subsistema"];
					$Equipo 		=$row["Equipo"];
					$Descripcion 	=$row["Descripcion"];
					$Requerimiento 	=$row["Requerimiento"];
					$Cod_sap 		=$row["Cod_sap"];
					$Codigocon 		=$row["Codigocon"];
					$Fechas			=$row["Fecha"];
					$Observaciones 	=$row["Observaciones"];
					$A 				=$row["A"];
					$B 				=$row["B"];
					$C  			=$row["C"];
					$Longitud 		=$row["Longitud"];
					$Exterior 		=$row["Exterior"];
					$Interior 		=$row["Interior"];
					$Angulos 		=$row["Angulos"];
					$PiezaPlano 	=$row["PiezaPlano"];
					$Foto 			=$row["Foto"];
					}

					if (!empty($OrdenTrabajo)) {
					$OrdenTrabajo   = $OrdenTrabajo;
					}else{
					$OrdenTrabajo 	=$_REQUEST["Orden"];
					}
					if (!empty($Factura)) {
					$Factura   = $Factura;
					}else{
					$Factura 		=$_REQUEST["Factura"];
					}

					$queryONE 		="SELECT * FROM Ordenes WHERE Id = '$OrdenTrabajo'";
                   	$resultONE 		=mysql_query($queryONE,$id);
                   	while ($rowONE 	=mysql_fetch_array($resultONE)){
                   	$IdONE    		=$rowONE["Id"];	 	
                   	}	
                   	$queryTWO 		="SELECT * FROM Facturas WHERE Id = '$Factura'";
                    $resultTWO 		=mysql_query($queryTWO,$id);
                    while ($rowTWO 	=mysql_fetch_array($resultTWO)){
                    $IdTWO    		=$rowTWO["Id"];
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
 
 



 
 
      
	</head>
	<body onload="CargaDatos();">

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
                                            
                                            
                                            
                                            

					<form class="form-horizontal form-validate" role="form" method="post" action="act-list-general-3.php" id="form1" name="form1" enctype="multipart/form-data" novalidate>

					<div class="section-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="box style-transparent">
									<!-- START PROFILE TABS -->
									<div class="box-head">
										<ul class="nav nav-tabs tabs-transparent" data-toggle="tabs">
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Ingresar plano</a></li>
										</ul>
									</div>
									<!-- END PROFILE TABS -->

									<div class="tab-content">

										<!-- START PROFILE EDITOR -->
										<div class="tab-pane active" id="editDetails">
											<div class="box-body style-white">
														<h4>Trazabilidad</h4>
														<hr size="90%">
														<input type="hidden" name="Id" value="<?=$Id?>">
														<div class="row">
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">O.T</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	        <input name="OrdenTrabajo" id="OrdenTrabajo" type="text" value="<?=$OrdenTrabajo?>" class="form-control">
                                                        	      	<!--<select name="jumpMenu" id="jumpMenu" class="form-control"  onChange="MM_jumpMenu('parent',this,0)" required>
                                                        	      	<?/*
                                                                    if(!empty($OrdenTrabajo))
																	{
																	?>
                                                                 	<option value="ing-instrumentodos.php?Orden=<?=$OrdenTrabajo?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>" selected><?=$IdONE?></option>
                                                                    <?
																	}
																	else{
																	?>
                                                                    <option value="" selected>Seleccione una orden de trabajo</option>
																	<?
																	}
                                                        	      	$queryX 		="SELECT * FROM Ordenes WHERE Id <> '$OrdenTrabajo'";
                                                        	      	$resultX 		=mysql_query($queryX,$id);
                                                        	      	while ($rowX 	=mysql_fetch_array($resultX)){
                                                        	      	$IdCli    		=$rowX["Id"];
                                                        	      	?>
                                                        	      	<option value="ing-list-general.php?Orden=<?=$IdCli?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>"><?=$IdCli?></option>
                                                        	      	<?}*/?>
                                                        	      	</select>-->
                                                        	        </div>
                                                        	    </div>
															</div>
															<?if (!empty($OrdenTrabajo)){?>
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Factura</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	        <input name="Factura" id="Factura" type="text" value="<?=$Factura?>" class="form-control">
                                                        	      	<!--<select name="jumpMenu" id="jumpMenu" class="form-control"  onChange="MM_jumpMenu('parent',this,0)" required>
                                                        	      	<?/*
                                                                    if(!empty($Factura))
																	{
																	?>
                                                                 	<option value="ing-instrumentodos.php?Orden=<?=$Orden?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>" selected><?=$IdTWO?></option>
                                                                    <?
																	}
																	else{
																	?>
                                                                    <option value="" selected>Seleccione una orden de trabajo</option>
																	<?
																	}
                                                        	      	$queryf 		="SELECT * FROM Facturas WHERE Idorden = '$OrdenTrabajo'";
                                                        	      	$resultf 		=mysql_query($queryf,$id);
                                                        	      	while ($rowf 	=mysql_fetch_array($resultf)){
                                                        	      	$IdF    		=$rowf["Id"];
                                                        	      	?>
                                                        	      	<option value="ing-list-general.php?Orden=<?=$IdCli?>&Factura=<?=$IdF?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>"><?=$IdF?></option>
                                                        	      	<?}*/?>
                                                        	      	</select>-->
                                                        	        </div>
                                                        	    </div>
															</div>
															<?}?>
														</div>
														<?//if(!empty($Factura)){?>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<div class="col-lg-2 col-md-4 col-sm-6">
																		<label for="RIP" class="control-label">RIP</label>
																	</div>
																	<div class="col-lg-10 col-md-8 col-sm-6">
																		<input type="text" name="Rip" id="RIP" class="form-control" placeholder="RIP" value="<?=$Rip?>" onChange="javascript:this.value=this.value.toUpperCase();" required data-rule-minlength="3">
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Foto</label>
                                                        	        </div>
                                                        	        <div class="col-md-6">
                                                        	            <input name="foto" class="form-control" type="file" id="foto">
                                                        	        </div>
                                                        	        <?if(!empty($Foto)){?>
                                                        	        <div class="col-md-4">
                                                        	            <a href="ListadoPlanos/<?=$Foto?>" target="_blank">(Ver foto)</a>
                                                        	        </div>
                                                        	        <?}?>
                                                        	    </div>
															</div>
														</div>
														<hr size="90%">
														<h4>Nombre del elemento</h4><br>
														<div class="row">
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Cliente</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="Cliente" id="Cliente" value="<?=$Cliente?>" placeholder="Planta o cliente" onChange="javascript:this.value=this.value.toUpperCase();" required>
                                                        	        </div>
                                                        	    </div>
															</div>
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Instalación</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="Instalacion" id="Instalacion" value="<?=$Instalacion?>" placeholder="Instalación" onChange="javascript:this.value=this.value.toUpperCase();" required>
                                                        	        </div>
                                                        	    </div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Sistema</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="Sistema" id="Sistema" value="<?=$Sistema?>" placeholder="Sistema" onChange="javascript:this.value=this.value.toUpperCase();" required>
                                                        	        </div>
                                                        	    </div>
															</div>
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Subsistema</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="Subsistema" id="Subsistema" value="<?=$Subsistema?>" placeholder="Subsistema" onChange="javascript:this.value=this.value.toUpperCase();" required>
                                                        	        </div>
                                                        	    </div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Equipo</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="Equipo" id="Equipo" value="<?=$Equipo?>" placeholder="Equipo" onChange="javascript:this.value=this.value.toUpperCase();" required>
                                                        	        </div>
                                                        	    </div>
															</div>
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Descripción</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="Descripcion" id="Descripcion" value="<?=$Descripcion?>" placeholder="Descripcion" onChange="javascript:this.value=this.value.toUpperCase();" required>
                                                        	        </div>
                                                        	    </div>
															</div>
														</div>
														<hr size="90%">
														<h4>Identificación del cliente</h4><br>
														<div class="row">
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Requerimiento</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="Requerimiento" id="Requerimiento" value="<?=$Requerimiento?>" placeholder="Requerimiento" onChange="javascript:this.value=this.value.toUpperCase();" required>
                                                        	        </div>
                                                        	    </div>
															</div>
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Cod. Sap</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="Cod_sap" id="Cod_sap" value="<?=$Cod_sap?>" placeholder="Cod. Sap" onChange="javascript:this.value=this.value.toUpperCase();" required>
                                                        	        </div>
                                                        	    </div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Código</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="Codigocon" id="Codigocon" value="<?=$Codigocon?>" placeholder="Codigo consecutivo" onChange="javascript:this.value=this.value.toUpperCase();" required>
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
														<hr size="90%">
														<h4>Observaciones</h4>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group">
																	<div class="col-lg-2 col-md-4 col-sm-2">
																		<label for="Fecha" class="control-label"></label>
                                                        		    </div>
                                                        		    <div class="col-sm-12">
                                                        	         	<textarea name="Observaciones" rows="3" class="form-control" id="Observaciones" placeholder="Detalles / Observaciones" onchange="javascript:this.value=this.value.toUpperCase();"><?=$Observaciones?></textarea>
																	</div>
																</div>
															</div>
														</div>
														<hr size="90%">
														<h4>Revisiones</h4><br>
														<div class="row">
															<div class="col-sm-4">
																<div class="form-group">
																	<div class="col-lg-2 col-md-4 col-sm-6">
																		<label for="A" class="control-label">A</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
																		<div class='input-group date' id='demo-date-uno'>
																<input type="text" value="<?=$A?>" class="form-control" required name="A" id="A"/>
																<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																	</div>
																	</div>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="form-group">
																	<div class="col-lg-2 col-md-4 col-sm-6">
																		<label for="B" class="control-label">B</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
																		<div class='input-group date' id='demo-date-dos'>
																<input type="text" value="<?=$B?>" class="form-control" required name="B" id="B"/>
																<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																	</div>
																	</div>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="form-group">
																	<div class="col-lg-2 col-md-4 col-sm-6">
																		<label for="C" class="control-label">C</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
																		<div class='input-group date' id='demo-date-tres'>
																<input type="text" value="<?=$C?>" class="form-control" required name="C" id="C"/>
																<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																	</div>
																	</div>
																</div>
															</div>
														</div>
														<hr size="90%">
														<h4>Trazabilidad de instrumentos</h4><br>
														<div class="row">
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Longitud</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="Longitud" id="Longitud" value="<?=$Longitud?>" placeholder="Longitud" onChange="javascript:this.value=this.value.toUpperCase();" required>
                                                        	        </div>
                                                        	    </div>
															</div>
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Ø Exterior</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="Exterior" id="Exterior" value="<?=$Exterior?>" placeholder="Exterior" onChange="javascript:this.value=this.value.toUpperCase();" required>
                                                        	        </div>
                                                        	    </div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Ø Interior</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="Interior" id="Interior" value="<?=$Interior?>" placeholder="Interior" onChange="javascript:this.value=this.value.toUpperCase();" required>
                                                        	        </div>
                                                        	    </div>
															</div>
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Ángulos</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="Angulos" id="Angulos" value="<?=$Angulos?>" placeholder="Ángulos" onChange="javascript:this.value=this.value.toUpperCase();" required>
                                                        	        </div>
                                                        	    </div>
															</div>
														</div>
														<hr size="90%">
														<h4>Origen</h4><br>
														<div class="row">
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Pieza / Plano</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="PiezaPlano" id="PiezaPlano" value="<?=$PiezaPlano?>" placeholder="Pieza / Plano" onChange="javascript:this.value=this.value.toUpperCase();" required>
                                                        	        </div>
                                                        	    </div>
															</div>
														</div>
														<hr size="90%">


														<div class="form-group">
															<div class="col-sm-1">
															<label for="Descripcion" class="control-label"></label>
                                                        	</div>

															<div class="col-lg-11 col-md-10 col-sm-9">
																	<button type="submit" class="btn btn-primary">Realizar Operación</button>
																	<button type="button" class="btn btn-support5" data-toggle="modal" data-target="#textModal<?=$IdUSERS?>" data-placement="top">Documento</button>
															</div>
														</div>
														<?//}?>
												</form>
												
												<!-- START LARGE TEXT MODAL MARKUP -->
                                                <div class="modal fade" id="textModal<?=$IdUSERS?>" tabindex="-1" role="dialog" aria-labelledby="textModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title" id="textModalLabel">Documento</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                              <div id="Listado">
                                                             	<table class="table table-hover">
                                                             		<thead>
                                                             			<th>Tamaño</th>
                                                             			<th>Número</th>
                                                             			<th>Hoja</th>
                                                             			<th></th>
                                                             		</thead>
                                                             		<tbody id="TablaListado">
                                                             		</tbody>
                                                             	</table>
                                                              </div>
                                                              <div style="display:none;" id="Nuevo">
                                                              <form class="form-horizontal form-validate" role="form" method="post" id="form2" name="form2" enctype="multipart/form-data" novalidate>
                                                              	<table class="table table-hover">
                                                             		<thead>
                                                             		   <tr>
                                                             			<th>Tamaño</th>
                                                             			<th>Número</th>
                                                             			<th>Hoja</th>
                                                             		   </tr>
                                                             		</thead>
                                                             		<tbody>
                                                             			<tr><input type="hidden" name="Id" value="<?=$Id?>">
                                                             			 <td><input type="text" class="form-control" name="Tam" id="Tam" placeholder="Tamaño" onChange="javascript:this.value=this.value.toUpperCase();" required></td>
                                                             			 <td><input type="text" class="form-control" name="Numero" id="Numero" placeholder="Número" onChange="javascript:this.value=this.value.toUpperCase();" required></td>
                                                             			 <td><input type="text" class="form-control" name="Hoja" id="Hoja" placeholder="Hoja" onChange="javascript:this.value=this.value.toUpperCase();" required></td>
                                                             			</tr>
                                                             		</tbody>
                                                             	</table>
                                                              </div>		
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                                <button type="button" id="BtnIng" onclick="Ing();" class="btn btn-info">Ingresar nuevo</button>
                                                                <button type="button" style="display:none;" id="BtnListado" onclick="Todos();CargaDatos();" class="btn btn-info">Ver todos</button>
                                                                <button type="button" id="BtnIng2" style="display:none;" onclick="Ingresar();" class="btn btn-success">Realizar Operacion</button>
                                                            </form>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                                <!-- END LARGE TEXT MODAL MARKUP -->

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
		<!--SCRIPT PARA OCULTAR Y MOSTRAR-->
		<script type="text/javascript">
		function Ing(){
		$("#Listado").css("display","none");
		$("#BtnIng").css("display","none");
		$("#BtnIng2").css("display","");
		$("#BtnListado").css("display","");
		$("#Nuevo").css("display","");
		};


		function Todos(){
		$("#Listado").css("display","");
		$("#BtnIng").css("display","");
		$("#BtnIng2").css("display","none");
		$("#BtnListado").css("display","none");
		$("#Nuevo").css("display","none");
		};


		function Ingresar(){
		var formData = $("#form2").serialize();
		$.ajax({
        url: "ajax-doc-general.php",
        type: "POST",
        data: formData,
        success: function (response) {
        $("#BtnListado").click();


        document.getElementById("form2").reset();

        }
    	});

		};


		function CargaDatos(){
		$.ajax({
        url: "ajax-carga-doc.php",
        method: "GET",
        data: "Id="+<?=$Id?>,
        success: function (response) {
        $("#TablaListado").html(response);
        $("#TablaListado tr:last").animate({ "background-color": "green" }, "slow" );
        }
    	});
		};

		function Eli(Id){
		$.ajax({
        url: "ajax-eli-doc.php",
        method: "GET",
        data: "Id="+Id,
        success: function (response) {
        if (response==1) {
        $("#N"+Id).empty();
        $("#N"+Id).html("<td class='alert alert-success' colspan='4'>Eliminado correctamente</td>");
        $("#N"+Id).delay(2000);
        $("#N"+Id).fadeOut(1000);
        }else{
        alert("Error");
        }
        }
    	});
		};
		</script>
		<!--FIN SCRIPT-->
	</body>
</html>
