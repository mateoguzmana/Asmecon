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
					
					$Linea 				=$_REQUEST["Linea"];
					
					$queryONE 			="SELECT * FROM Areas WHERE Id='$Linea'";
					$resultONE 			=mysql_query($queryONE,$id);
					while 				($rowONE=mysql_fetch_array($resultONE)) {
					$NombreONE 			=$rowONE["Nombre"];
					}

					$Categoria 			=$_REQUEST["Categoria"];

					$queryFF			="SELECT * FROM CatMediciones where Id='$Categoria'";
                    $resultFF			=mysql_query($queryFF, $id);
                    
                    while($rowFF		=mysql_fetch_array($resultFF))  {
					$NombreFF			=$rowFF["Nombre"];
					}

					$SubCategoria 		=$_REQUEST["SubCategoria"];

					$queryTRE 			="SELECT * FROM SubMediciones WHERE Id='$SubCategoria'";
					$resultTRE 			=mysql_query($queryTRE,$id);
					while 				($rowTRE=mysql_fetch_array($resultTRE)) {
					$NombreTRE 			=$rowTRE["Nombre"];
					}

					$Opcion 			=$_REQUEST["Opcion"];

					$queryLL 			="SELECT * FROM OpcMediciones WHERE Id='$Opcion'";
					$resultLL 			=mysql_query($queryLL,$id);
					while 				($rowLL=mysql_fetch_array($resultLL)) {
					$NombreLL 			=$rowLL["Nombre"];
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
    	<script type="text/javascript">
		function MM_jumpMenu(targ,selObj,restore){ //v3.0
		  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
		  if (restore) selObj.selectedIndex=0;
		}
		</script>   
        
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
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Ingresar Instrumento</a></li>
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
														?>
												<form class="form-horizontal form-validate"   enctype="multipart/form-data" role="form" method="post" action="ing-instrumentodos-2.php" novalidate>
                                                        <?
														}
														else
														{
														?>
												<form method="post" enctype="multipart/form-data" class="form-horizontal form-validate"  novalidate role="form">
                                                        <?
														}
														?>
												
												
                                                
                                                
													<div class="row">
														<fieldset class="scheduler-border">
															<legend>Identificación</legend>
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
                                                                 		<option value="ing-instrumentodos.php?Linea=<?=$Linea?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>" selected><?=$NombreONE?></option>
                                                                        <?
																		}
																		else{
																		?>
                                                                        <option value="" selected>Seleccione una Linea</option>
																		<?
																		}
                                                                        $query88		="SELECT * FROM Areas where Muestra = 0 and Id <> '$Linea' order by Nombre";
                                                                        $result88		=mysql_query($query88, $id);
                                                                        
                                                                        while($row88	=mysql_fetch_array($result88))
                                                                        {
                                                                        $Id88			=$row88["Id"];
																		$Nombre88		=$row88["Nombre"];
                                                                        ?>
                                                                        <option value="ing-instrumentodos.php?Linea=<?=$Id88?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>"><?=$Nombre88?></option>
																		<?
																		}
																		?>
                                                                </select>
																</div>
															</div>
														</div>
														<?if(!empty($Linea)){?>
                                                    	<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Categoria" class="control-label">Categoria</label>
																	<input name="Categoria" id="Categoria" type="hidden" value="<?=$Categoria?>">
																	  <select name="jumpMenu" id="jumpMenu" class="form-control" onChange="MM_jumpMenu('parent',this,0)" required>
            															<?if(!empty($Categoria)){?>
                                                                        <option value="ing-instrumentodos.php?Linea=<?=$Linea?>&Categoria=<?=$Categoria?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>" selected><?=$NombreFF?></option>
                                                                        <?} else { ?>
                                                                        <option value="" selected>Seleccione una Categoria</option>
																		<?
																		}
                                                                        $query33		="SELECT * FROM CatMediciones where Muestra = 0 AND Linea='$Linea' AND Id <> '$Categoria' order by Nombre";
                                                                        $result33		=mysql_query($query33, $id);
                                                                        
                                                                        while($row33	=mysql_fetch_array($result33))
                                                                        {
                                                                        $Id33			=$row33["Id"];
																		$Nombre33		=$row33["Nombre"];
                                                                        ?>
                                                                        <option value="ing-instrumentodos.php?Linea=<?=$Linea?>&Categoria=<?=$Id33?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>"><?=$Nombre33?></option>
																		<?
																		}
																		?>
                                                                </select>
																</div>
															</div>
														</div>
														<?} if(!empty($Categoria)) {?>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="SubCategoria" class="control-label">Sub Categoria</label>
																	 <input name="SubCategoria" id="SubCategoria" type="hidden" value="<?=$SubCategoria?>">
																	 <select name="jumpMenu" id="jumpMenu" class="form-control" onChange="MM_jumpMenu('parent',this,0)" required>
	            														<?if(!empty($SubCategoria)){?>
                                                                        <option value="ing-instrumentodos.php?Linea=<?=$Linea?>&Categoria=<?=$Categoria?>&SubCategoria=<?=$SubCategoria?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>" selected><?=$NombreTRE?></option>
                                                                        <?} else { ?>
                                                                        <option value="" selected>Seleccione una SubCategoria</option>
																		<?
																		}
                                                                        $queryNN		="SELECT * FROM SubMediciones where Muestra = 0 AND Categoria='$Categoria' AND Id <> '$SubCategoria' order by Nombre";
                                                                        $resultNN		=mysql_query($queryNN, $id);
                                                                        
                                                                        While($rowNN	=mysql_fetch_array($resultNN))
                                                                        {
                                                                        $IdNN			=$rowNN["Id"];
																		$NombreNN		=$rowNN["Nombre"];
                                                                        ?>
                                                                        <option value="ing-instrumentodos.php?Linea=<?=$Linea?>&Categoria=<?=$Categoria?>&SubCategoria=<?=$IdNN?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>"><?=$NombreNN?></option>
																		<?
																		}
																		?>

            
                                                                </select>
																</div>
															</div>
														</div>
														<?} if(!empty($SubCategoria)) {?>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																<label for="email" class="control-label">Opcion</label>
																<input name="Opcion" id="Opcion" type="hidden" value="<?=$Opcion?>">
                                                                <select name="jumpMenu" id="jumpMenu" class="form-control" onChange="MM_jumpMenu('parent',this,0)" required>
	            														<?if(!empty($Opcion)){?>
                                                                        <option value="ing-instrumentodos.php?Linea=<?=$Linea?>&Categoria=<?=$Categoria?>&SubCategoria=<?=$SubCategoria?>&Opcion=<?=$Opcion?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>" selected><?=$NombreLL?></option>
                                                                        <?} else { ?>
                                                                        <option value="" selected>Seleccione una Opcion</option>
																		<?
																		}
                                                                        $queryREX		="SELECT * FROM OpcMediciones where Muestra = 0 AND SubCategoria='$SubCategoria' AND Id <> '$Opcion' order by Nombre";
                                                                        $resultREX		=mysql_query($queryREX, $id);
                                                                        
                                                                        While($rowREX	=mysql_fetch_array($resultREX))
                                                                        {
                                                                        $IdREX			=$rowREX["Id"];
																		$NombreREX		=$rowREX["Nombre"];
                                                                        ?>
                                                                        <option value="ing-instrumentodos.php?Linea=<?=$Linea?>&Categoria=<?=$Categoria?>&SubCategoria=<?=$SubCategoria?>&Opcion=<?=$IdREX?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>"><?=$NombreREX?></option>
																		<?
																		}
																		?>

            
                                                                </select>
																</div>
															</div>
														</div>
														<?}?>
														</fieldset>
														<?if(!empty($Opcion)){?>
                                                    	<hr size="90%">
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Nombre" class="control-label">Nombre</label>
																	<input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Nombre" value="<?=$Nombre?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																	<input type="hidden" name="Id" value="<?=$IdUS?>">
																</div>
															</div>
														</div>

                                                     	<!--<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	 <label for="email" class="control-label">Tipo de instrumento</label>
                                                                <select name="TipoInstrumento" id="TipoInstrumento" class="form-control select2-list" data-placeholder="Seleccione Categoria" required>
            
                                                                        <option value="<?=$IdRR?>" selected><?=$NombreRR?></option>

																		<? /*
                                                                        $queryTIP		="SELECT * FROM OpcMediciones where Muestra = 0 order by Nombre";
                                                                        $resultTIP		=mysql_query($queryTIP, $id);
                                                                        
                                                                        While($rowTIP	=mysql_fetch_array($resultTIP))
                                                                        {
                                                                        $IdTIP			=$rowTIP["Id"];
																		$NombreTIP		=$rowTIP["Nombre"];
                                                                        ?>
                                                                        <option value="<?=$IdTIP?>"><?=$NombreTIP?></option>
																		<?
																		} */
																		?>

            
                                                                </select>
																</div>
															</div>
														</div>-->
														
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Responsable" class="control-label">Responsable</label>
																	<input type="text" name="Responsable" id="Responsable" class="form-control" placeholder="Responsable" value="<?=$Responsable?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Ubicacion" class="control-label">Ubicación</label>
																	 <select name="Ubicacion" id="Ubicacion" class="form-control select2-list" data-placeholder="Seleccione Categoria" required>
            
                                                                        <option value="<?=$IdKK?>" selected><?=$NombreKK?></option>

																		<?
                                                                        $queryNN		="SELECT * FROM Servicios where Activo = 0 and Muestra = 0 order by Nombre";
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
																	<label for="Denominacion" class="control-label">Denominación</label>
																	<input type="text" name="Denominacion" id="Denominacion" class="form-control" placeholder="Denominación" value="<?=$Denominacion?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<!--<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Codigo" class="control-label">Codigo</label>
																	<input type="text" name="Codigo" id="Codigo" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Codigo?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>-->
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Serie" class="control-label">Serie</label>
																	<input type="text" name="Serie" id="Serie" class="form-control" placeholder="Serie" value="<?=$Serie?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Manual" class="control-label">Manual</label>
																	<input type="text" name="Manual" id="Manual" class="form-control" placeholder="Manual" value="<?=$Manual?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Fabricante" class="control-label">Fabricante</label>
																	<input type="text" name="Fabricante" id="Fabricante" class="form-control" placeholder="Fabricante" value="<?=$Fabricante?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Modelo" class="control-label">Modelo</label>
																	<input type="text" name="Modelo" id="Modelo" class="form-control" placeholder="Modelo" value="<?=$Modelo?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="FabricadoEn" class="control-label">Fabricado en</label>
																	<input type="text" name="FabricadoEn" id="FabricadoEn" class="form-control" placeholder="Fabricado en" value="<?=$FabricadoEn?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="FechaServicio" class="control-label">Fecha de servicio</label>
																	<div class='input-group date' id='demo-date-start'>
															<input type="text" value="<?=$FechaServicio?>" class="form-control" required name="FechaServicio" id="FechaServicio"/>
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																</div>
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="EstadoFisico" class="control-label">Estado fisico</label>
																	<select name="EstadoFisico" id="EstadoFisico" class="form-control">
																		<option value="" selected></option>
																		<option value="BUENO">BUENO</option>
																		<option value="MALO">MALO</option>
																		<option value="DEFECTUOSO">DEFECTUOSO</option>
																		<option value="RETIRADO">RETIRADO</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="ValorComercial" class="control-label">Valor Comercial</label>
																	<input type="text" name="ValorComercial" id="ValorComercial" class="form-control dollar-mask" placeholder="Valor comercial" value="<?=$ValorComercial?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Aplicacion" class="control-label">Aplicación</label>
																	<textarea  name="Aplicacion" id="Aplicacion" class="form-control" placeholder="Aplicación" onChange="javascript:this.value=this.value.toUpperCase();" required ></textarea>
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Observaciones" class="control-label">Observaciones</label>
																	<textarea name="Observaciones" id="Observaciones" class="form-control" placeholder="Observaciones"  onChange="javascript:this.value=this.value.toUpperCase();" required ></textarea>
																</div>
															</div>
														</div>
                                                   	</div>
													<h4><strong>Carácteristicas metrologicas</strong></h4>
													<hr width="90%">
													<div class="row">
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="RangoIntervalo" class="control-label">Rango Intervalo</label>
																	<input type="text" name="RangoIntervalo" id="RangoIntervalo" class="form-control" placeholder="Rango Intervalo" value="<?=$RangoIntervalo?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="IntervaloMedida" class="control-label">Intervalo de medida</label>
																	<input type="text" name="IntervaloMedida" id="IntervaloMedida" class="form-control" placeholder="Intervalo de medida" value="<?=$IntervaloMedida?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Resolucion" class="control-label">Resolución</label>
																	<input type="text" name="Resolucion" id="Resolucion" class="form-control" placeholder="Resolución" value="<?=$Resolucion?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="DivisionEscala" class="control-label">División de escala</label>
																	<input type="text" name="DivisionEscala" id="DivisionEscala" class="form-control" placeholder="División de escala" value="<?=$DivisionEscala?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="ClaseExactitud" class="control-label">Clase de exactitud</label>
																	<input type="text" name="ClaseExactitud" id="ClaseExactitud" class="form-control" placeholder="Clase de exactitud" value="<?=$ClaseExactitud?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Indicacion" class="control-label">Indicacion</label>
																	<select name="Indicacion" id="Indicacion" class="form-control">
																		<option value="" selected></option>
																		<option value="LINEAL-ANALÓGICO">LINEAL-ANALÓGICO</option>
																		<option value="CARÁTULA">CARÁTULA</option>
																		<option value="DIGIMATIC">DIGIMATIC</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Tipo" class="control-label">Tipo</label>
																	<input type="text" name="Tipo" id="Tipo" class="form-control" placeholder="Tipo" value="<?=$Tipo?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Accesorios" class="control-label">Accesorios</label>
																	<input type="text" name="Accesorios" id="Accesorios" class="form-control" placeholder="Accesorios" value="<?=$Accesorios?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
													</div>
													<h4><strong>Datos calibración</strong></h4>
													<hr width="90%">
													<div class="row">
													<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Procedimiento" class="control-label">Norma o procedimiento</label>
																	<input type="text" name="Procedimiento" id="Procedimiento" class="form-control" placeholder="Norma o procedimiento" value="<?=$Procedimiento?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
													</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Laboratorio" class="control-label">Laboratorio</label>
																	<input type="text" name="Laboratorio" id="Laboratorio" class="form-control" placeholder="Laboratorio" value="<?=$Laboratorio?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Frecuencia" class="control-label">Frecuencia Calibración</label>
																	<select name="Frecuencia" id="Frecuencia" class="form-control">
																		<option value="" selected></option>
																		 <option value="360">1 AÑO   | 360</option>
																		 <option value="720">2 AÑOS  | 720</option>
																		<option value="1080">3 AÑOS  | 1080</option>
																		<option value="1440">4 AÑOS  | 1440</option>
																		<option value="1800">5 AÑOS  | 1800</option>
																		<option value="2196">6 AÑOS  | 2196</option>
																		<option value="3600">10 AÑOS | 3600</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Criterio" class="control-label">Criterio Frecuencia Calibración</label>
																	<input type="text" name="Criterio" id="Criterio" class="form-control" placeholder="Criterio frecuencia calibración" value="<?=$Criterio?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Repetibilidad" class="control-label">Repetibilidad</label>
																	<input type="text" name="Repetibilidad" id="Repetibilidad" class="form-control" placeholder="Repetibilidad" value="<?=$Repetibilidad?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Desviacion" class="control-label">Desviacion</label>
																	<input type="text" name="Desviacion" id="Desviacion" class="form-control" placeholder="Desviación" value="<?=$Desviacion?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="ErrorIncertidumbre" class="control-label">Error de incertidumbre</label>
																	<input type="text" name="ErrorIncertidumbre" id="ErrorIncertidumbre" class="form-control" placeholder="Error de incertidumbre" value="<?=$ErrorIncertidumbre?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Foto" class="control-label">Foto</label>
																	<input name="foto" class="form-control"  type="file" id="foto">
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
														</div>
													</div>
													<?}?>
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
