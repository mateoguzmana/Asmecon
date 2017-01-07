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
include("phpqrcode/qrlib.php");


$_SESSION['anterior']	=	$_SERVER['REQUEST_URI']; 
$_SESSION["carpeta"]  	=  	"";	

				
					$queryTITMEN		="SELECT* FROM Menusub WHERE Id = ".$_REQUEST["Idsubmenu"] ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
					$NombreTITMEN		=$rowTITMEN["Nombre"];
					}
					
					

					
					$LineaMenuS			=$NombreTITMEN;
					
					
					
					
					$IdUS				=$_REQUEST['Id']; 
					
					 $queryUSERS		="SELECT* FROM InstrumentosDOS where Id = '$IdUS'";
					 $resultUSERS		=mysql_query($queryUSERS, $id);
													
					 While($rowUSERS	=mysql_fetch_array($resultUSERS))
					 {
						$Nombre				=$rowUSERS["Nombre"];
						$TipoInstrumento	=$rowUSERS["TipoInstrumento"];
						$Responsable 		=$rowUSERS["Responsable"];
						$Ubicacion 			=$rowUSERS["Ubicacion"];
						$Denominacion 		=$rowUSERS["Denominacion"];
						$Codigo 			=$rowUSERS["Codigo"];
						$Serie 				=$rowUSERS["Serie"];
						$Manual 			=$rowUSERS["Manual"];
						$Fabricante 		=$rowUSERS["Fabricante"];
						$Modelo 			=$rowUSERS["Modelo"];
						$FabricadoEn 		=$rowUSERS["FabricadoEn"];
						$FechaServicio 		=$rowUSERS["FechaServicio"];
						$EstadoFisico		=$rowUSERS["EstadoFisico"];
						$ValorComercial 	=$rowUSERS["ValorComercial"];
						$Aplicacion 		=$rowUSERS["Aplicacion"];
						$Observaciones		=$rowUSERS["Observaciones"];
						$RangoIntervalo		=$rowUSERS["RangoIntervalo"];
						$IntervaloMedida	=$rowUSERS["IntervaloMedida"];
						$Resolucion			=$rowUSERS["Resolucion"];
						$DivisionEscala		=$rowUSERS["DivisionEscala"];
						$ClaseExactitud		=$rowUSERS["ClaseExactitud"];
						$Indicacion			=$rowUSERS["Indicacion"];
						$Tipo 				=$rowUSERS["Tipo"];
						$Accesorios 		=$rowUSERS["Accesorios"];
						$Procedimiento 		=$rowUSERS["Procedimiento"];
						$Laboratorio		=$rowUSERS["Laboratorio"];
						$Frecuencia1		=$rowUSERS["Frecuencia"];
						$Criterio			=$rowUSERS["Criterio"];
						$Repetibilidad		=$rowUSERS["Repetibilidad"];
						$Desviacion			=$rowUSERS["Desviacion"];
						$ErrorIncertidumbre	=$rowUSERS["ErrorIncertidumbre"];
						$Lin 				=$rowUSERS["Linea"];
						$Cat 				=$rowUSERS["Categoria"];
						$SubCat 			=$rowUSERS["SubCategoria"];
						$Opc 				=$rowUSERS["Opcion"];

						$Rut				=$rowUSERS["Foto"];
					 }
					
					$query33				="SELECT * FROM OpcMediciones WHERE Id='$TipoInstrumento'";
					$result33 				=mysql_query($query33,$id);
					while ($row33			=mysql_fetch_array($result33)) {

					$NombreRR 				=$row33["Nombre"];
					$IdRR 					=$row33["Id"];
					}
					
					$queryKK				="SELECT * FROM Servicios WHERE Id='$Ubicacion'";
					$resultKK 				=mysql_query($queryKK,$id);
					while ($rowKK			=mysql_fetch_array($resultKK)) {

					$NombreKK 				=$rowKK["Nombre"];
					$IdKK 					=$rowKK["Id"];
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

					// Todo de identificacion
					$L 				=$_REQUEST["Linea"];
					if (!empty($L)) {
					$Linea=$L;
					}else{
					$Linea=$Lin;	
					}
					
					$queryONE 			="SELECT * FROM Areas WHERE Id='$Linea'";
					$resultONE 			=mysql_query($queryONE,$id);
					while 				($rowONE=mysql_fetch_array($resultONE)) {
					$NombreONE 			=$rowONE["Nombre"];
					}

					$C 			=$_REQUEST["Categoria"];
					if (!empty($C)) {
					$Categoria=$C;
					}else{
					$Categoria=$Cat;
					}

					$queryFF			="SELECT * FROM CatMediciones where Id='$Categoria'";
                    $resultFF			=mysql_query($queryFF, $id);
                    
                    while($rowFF		=mysql_fetch_array($resultFF))  {
					$NombreFF			=$rowFF["Nombre"];
					}

					$SC 		=$_REQUEST["SubCategoria"];
					if (!empty($SC)) {
					$SubCategoria = $SC;
					}else{
					$SubCategoria =$SubCat;
					}

					$queryTRE 			="SELECT * FROM SubMediciones WHERE Id='$SubCategoria'";
					$resultTRE 			=mysql_query($queryTRE,$id);
					while 				($rowTRE=mysql_fetch_array($resultTRE)) {
					$NombreTRE 			=$rowTRE["Nombre"];
					}

					$O 			=$_REQUEST["Opcion"];

					if (!empty($O)) {
					$Opcion = $O;
					}else{
					$Opcion =$Opc;
					}

					$queryLL 			="SELECT * FROM OpcMediciones WHERE Id='$Opcion'";
					$resultLL 			=mysql_query($queryLL,$id);
					while 				($rowLL=mysql_fetch_array($resultLL)) {
					$NombreLL 			=$rowLL["Nombre"];
					}

					//Fin identificacion 

					//Fabricando el tipo de instrumento
					$Tipudo = $NombreONE." ".$NombreFF." ".$NombreTRE." | ".$Linea.".".$Categoria.".".$SubCategoria;
					//Fin de fabricacion

					$_SESSION["carpeta"]  	= $Codigo;		

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
											<li class="active"><a href="#editDetails"><i class="fa fa-edit"></i> Informacion de Instrumento</a></li>
										</ul>
									</div>
									<!-- END PROFILE TABS -->

									<div class="tab-content">

										<!-- START PROFILE EDITOR -->
										<div class="tab-pane active" id="editDetails">
											<div class="box-body style-white">
												
												<form class="form-horizontal form-validate" enctype="multipart/form-data"  role="form" method="post" action="act-instrumentodos-3.php" novalidate>
                                                
                                                
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
                                                                 		<option value="act-instrumentodos-2.php?Id=<?=$IdUS?>&Linea=<?=$Linea?>&Categoria=x&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>" selected><?=$NombreONE?></option>
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
                                                                        <option value="act-instrumentodos-2.php?Id=<?=$IdUS?>&Linea=<?=$Id88?>&Categoria=x&SubCategoria=x&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>"><?=$Nombre88?></option>
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
                                                                        <option value="act-instrumentodos-2.php?Id=<?=$IdUS?>&Linea=<?=$Linea?>&Categoria=<?=$Categoria?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>" selected><?=$NombreFF?></option>
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
                                                                        <option value="act-instrumentodos-2.php?Id=<?=$IdUS?>&Linea=<?=$Linea?>&Categoria=<?=$Id33?>&SubCategoria=x&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>"><?=$Nombre33?></option>
																		<?
																		}
																		?>
                                                                </select>
																</div>
															</div>
														</div>
														<?} if(!empty($Categoria) && $Categoria!="x") {?>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="SubCategoria" class="control-label">Sub Categoria</label>
																	 <input name="SubCategoria" id="SubCategoria" type="hidden" value="<?=$SubCategoria?>">
																	 <select name="jumpMenu" id="jumpMenu" class="form-control" onChange="MM_jumpMenu('parent',this,0)" required>
	            														<?if(!empty($SubCategoria)){?>
                                                                        <option value="act-instrumentodos-2.php?Id=<?=$IdUS?>&Linea=<?=$Linea?>&Categoria=<?=$Categoria?>&SubCategoria=<?=$SubCategoria?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>" selected><?=$NombreTRE?></option>
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
                                                                        <option value="act-instrumentodos-2.php?Id=<?=$IdUS?>&Linea=<?=$Linea?>&Categoria=<?=$Categoria?>&SubCategoria=<?=$IdNN?>&Opcion=x&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>"><?=$NombreNN?></option>
																		<?
																		}
																		?>
                                                                </select>
																</div>
															</div> 
														</div>
														<?} if(!empty($SubCategoria) && $SubCategoria!="x") {?>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																<label for="email" class="control-label">Opcion</label>
																<input name="Opcion" id="Opcion" type="hidden" value="<?=$Opcion?>">
                                                                <select name="jumpMenu" id="jumpMenu" class="form-control" onChange="MM_jumpMenu('parent',this,0)" required>
	            														<?if($Opcion!="x"){?>
                                                                        <option value="act-instrumentodos-2.php?Id=<?=$IdUS?>&Linea=<?=$Linea?>&Categoria=<?=$Categoria?>&SubCategoria=<?=$SubCategoria?>&Opcion=<?=$Opcion?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>" selected><?=$NombreLL?></option>
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
                                                                        <option value="act-instrumentodos-2.php?Id=<?=$IdUS?>&Linea=<?=$Linea?>&Categoria=<?=$Categoria?>&SubCategoria=<?=$SubCategoria?>&Opcion=<?=$IdREX?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>"><?=$NombreREX?></option>
																		<?
																		}
																		?>
                                                                </select>
																</div>
															</div>
														</div>
														<?}?>
														</fieldset>
														<hr size="90%">
                                                    	<div class="col-sm-6"><div class="form-group">
														<div class="col-sm-12">
															<label for="Nombre" class="control-label"></label>
															<a href="instrumentosdos/<?=$Rut?>" target="_blank" title="Imagen del instrumento"><img src="instrumentosdos/<?=$Rut?>" style="width:100%;"></a>
															</div>
														</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Codigo" class="control-label">Identificación Interna</label>
																	<input type="text" name="Codigo" id="Codigo" class="form-control input-lg" readonly placeholder="Descripción del Instrumento" value="<?=$Codigo?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
                                                    	<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Id" class="control-label">Id Instrumento</label>
																	<input type="text" name="Id" id="Id" class="form-control" placeholder="Id" value="<?=$IdUS?>" readonly onChange="javascript:this.value=this.value.toUpperCase();" required >
																	<input type="hidden" name="Id" value="<?=$IdUS?>">
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Nombre" class="control-label">Nombre</label>
																	<input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Nombre" value="<?=$Nombre?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
                                                     	<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	 <label for="email" class="control-label">Tipo de instrumento</label>
                                                                <input type="text" name="TipoInstrumento" id="TipoInstrumento" class="form-control" placeholder="TipoInstrumento" value="<?=$Tipudo?>" onChange="javascript:this.value=this.value.toUpperCase();" required>
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
																	<input type="text" name="Denominacion" id="Denominacion" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Denominacion?>" onChange="javascript:this.value=this.value.toUpperCase();" maxlength="40" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Serie" class="control-label">Serie</label>
																	<input type="text" name="Serie" id="Serie" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Serie?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Manual" class="control-label">Manual</label>
																	<input type="text" name="Manual" id="Manual" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Manual?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Fabricante" class="control-label">Fabricante</label>
																	<input type="text" name="Fabricante" id="Fabricante" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Fabricante?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Modelo" class="control-label">Modelo</label>
																	<input type="text" name="Modelo" id="Modelo" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Modelo?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="FabricadoEn" class="control-label">Fabricado en</label>
																	<input type="text" name="FabricadoEn" id="FabricadoEn" class="form-control" placeholder="Descripción del Instrumento" value="<?=$FabricadoEn?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
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
																		<option value="<?=$EstadoFisico?>" selected><?=$EstadoFisico?></option>
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
																	<input type="text" name="ValorComercial" id="ValorComercial" class="form-control dollar-mask" placeholder="Descripción del Instrumento" value="<?=$ValorComercial?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
                                                   	</div>
													<div class="row">
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Aplicacion" class="control-label">Aplicacion</label>
																	<textarea name="Aplicacion" id="Aplicacion" class="form-control" placeholder="Descripción del Instrumento" onChange="javascript:this.value=this.value.toUpperCase();" required><?=$Aplicacion?></textarea>
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Observaciones" class="control-label">Observaciones</label>
																	<textarea name="Observaciones" id="Observaciones" class="form-control" placeholder="Descripción del Instrumento" onChange="javascript:this.value=this.value.toUpperCase();" required ><?=$Observaciones?></textarea>
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
																	<input type="text" name="RangoIntervalo" id="RangoIntervalo" class="form-control" placeholder="Descripción del Instrumento" value="<?=$RangoIntervalo?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="IntervaloMedida" class="control-label">Intervalo de medida</label>
																	<input type="text" name="IntervaloMedida" id="IntervaloMedida" class="form-control" placeholder="Descripción del Instrumento" value="<?=$IntervaloMedida?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Resolucion" class="control-label">Resolución</label>
																	<input type="text" name="Resolucion" id="Resolucion" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Resolucion?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="DivisionEscala" class="control-label">Division de escala</label>
																	<input type="text" name="DivisionEscala" id="DivisionEscala" class="form-control" placeholder="Descripción del Instrumento" value="<?=$DivisionEscala?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="ClaseExactitud" class="control-label">Clase de exactitud</label>
																	<input type="text" name="ClaseExactitud" id="ClaseExactitud" class="form-control" placeholder="Descripción del Instrumento" value="<?=$ClaseExactitud?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Indicacion" class="control-label">Indicacion</label>
																	<select name="Indicacion" id="Indicacion" class="form-control">
																		<option value="<?=$Indicacion?>" selected><?=$Indicacion?></option>
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
																	<input type="text" name="Tipo" id="Tipo" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Tipo?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Accesorios" class="control-label">Accesorios</label>
																	<input type="text" name="Accesorios" id="Accesorios" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Accesorios?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
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
																	<input type="text" name="Procedimiento" id="Procedimiento" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Procedimiento?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
													</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Laboratorio" class="control-label">Laboratorio</label>
																	<input type="text" name="Laboratorio" id="Laboratorio" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Laboratorio?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Frecuencia" class="control-label">Frecuencia Calibración</label>
																	<select name="Frecuencia" id="Frecuencia" class="form-control">
																		<option value="<?=$Frecuencia1?>" selected><?=$Dato?></option>
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
																	<input type="text" name="Criterio" id="Criterio" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Criterio?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Repetibilidad" class="control-label">Repetibilidad</label>
																	<input type="text" name="Repetibilidad" id="Repetibilidad" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Repetibilidad?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="Desviacion" class="control-label">Desviacion</label>
																	<input type="text" name="Desviacion" id="Desviacion" class="form-control" placeholder="Descripción del Instrumento" value="<?=$Desviacion?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-sm-12">
																	<label for="ErrorIncertidumbre" class="control-label">Error de incertidumbre</label>
																	<input type="text" name="ErrorIncertidumbre" id="ErrorIncertidumbre" class="form-control" placeholder="Descripción del Instrumento" value="<?=$ErrorIncertidumbre?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
															<div class="col-sm-12">
															<label for="Contrasena" class="control-label">Foto</label>
															<input name="foto" class="form-control"  type="file" id="foto">
															</div>
                                                            </div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-2 col-md-4 col-sm-6">
                                                                
																</div>
																<div class="col-lg-10 col-md-8 col-sm-6">
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
                                                                <img src="instrumentosdos/<?=$Rut?>">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                                
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                                <!-- END LARGE TEXT MODAL MARKUP -->
                                                        
													</div>
												
													<?if(!empty($Linea) && !empty($Categoria) && !empty($SubCategoria) && !empty($Opcion)){?>
													<div class="form-group">
														
														<div class="col-lg-11 col-md-10 col-sm-9">
															<button type="submit" class="btn btn-primary">Realizar Operación</button>
															<input name="Procesar" type="button" class="btn btn-success" value="Plan de Calibración" data-toggle="modal" data-target="#Calibracion<?=$IdUS?>" data-placement="top">
															<input name="Procesar" type="button" class="btn btn-support5" value="Plan de Verificación"  data-toggle="modal" data-target="#Verificacion<?=$IdUS?>" data-placement="top">
															<input name="Etiquetas" type="button" class="btn btn-support3" value="Etiquetas"  data-toggle="modal" data-target="#Etiquetas<?=$IdUS?>" data-placement="top">
															<input name="Explorar" type="button" class="btn btn-warning" value="Explorar"   onclick="location.href='ver-directorio.php?Id=<?=$IdUS?>&Codigo=<?=$Codigo?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>'">
															<button type="button" id="enviar" class="btn btn-default" onclick="location.href='act-instrumentodos.php?Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>'">Volver</button> 
														</div>
													</div>
													<?}?>
                                                </div>
												</form>





<!-- MODAL EXPLORAR-->
													<div class="modal fade" target="Explorar<?=$IdUS?>" id="Explorar<?=$IdUS?>" tabindex="-1" role="dialog" aria-labelledby="textModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <h4>Explorar instrumento Nro. <?=$IdUS?></h4>
                                                            </div>
                                                            <div class="modal-body">
                                                            	<!-- START FILE UPLOAD -->
						<div class="row">
							<div class="col-lg-12">
								<div class="box">
								  <div class="box-body">
									  <blockquote>
											<p>Seleccione los archivos que desea procesar.</p>
										</blockquote>
										<form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
											<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
											<div class="row fileupload-buttonbar">
												<div class="col-sm-12">
													<!-- The fileinput-button span is used to style the file input field as button -->
													<div class="btn-group">
														<div class="col-sm-5">
														<span class="btn btn-success btn-rounded btn-sm fileinput-button">
															<input style="width:193.2px;" type="file" name="files[]" multiple>
															<input type="hidden" name="Ida" value="<?=$IdUS?>">
															<input type="hidden" name="code" value="<?=$Codigo?>">
														</span>
													</div>
														<button type="submit" class="btn btn-primary btn-rounded start">
															<i class="glyphicon glyphicon-upload"></i>
															<span>Iniciar la carga</span>
														</button>
														<button type="reset" class="btn btn-warning btn-rounded cancel">
															<i class="glyphicon glyphicon-ban-circle"></i>
															<span>Cancelar la carga</span>
														</button>
														
													</div>

													<!-- The global file processing state -->
													<span class="fileupload-process"></span>
												</div>
												<!-- The global progress state -->
												<div class="col-lg-5 fileupload-progress fade">
													<!-- The global progress bar -->
													<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
														<div class="progress-bar progress-bar-success" style="width:0%;"></div>
													</div>
													<!-- The extended global progress state -->
													<div class="progress-extended">&nbsp;</div>
												</div>
											</div>
											<!-- The table listing the files available for upload/download -->
											<table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
										
										<div class="panel panel-default">
											<div class="panel-heading">
												<h3 class="panel-title">Importante</h3>
											</div>
											<div class="panel-body">
												<ul>
													<li>No salga de esta ventana hasta finalizar la carga de sus archivos.</li>
													<li>Solo es posible cargar archivos con la extension (<strong>ZIP</strong>)</li>
												</ul>
											</div>
										</div>
									</div><!--end .box-body -->
								</div><!--end .box -->
							</div><!--end .col-lg-12 -->
                                                           			<!--<div class="col-sm-12">
                                                           				<div class="form-group">
                                                           				 <h5><strong>Ultimos archivos cargados en el directorio.</strong></h5>
                                                           				 <table id="datatable2" class="table table-hover" style="font-size:14px;">
                                                           				 	<ul>
                                                           				<? /*
                                                           				$directorio = "instrumentosdos/explora/server/php/files/".$Codigo;
                                                           				if ($dir=opendir($directorio)) {
                                                           					$totalarchivos=1;
                                                           					$total=0;
                                                           					while (($archiv=readdir($dir)) && $totalarchivos<=5) {
                                                           						$ur=rawurlencode($archiv);
                                                           						if ($archiv!="." && $archiv!="..") {
                                                           						$totalarchivos++;
                                                           						echo '<tr><td><li><a href="'.$directorio."/".$archiv.'" target="_blank" title="Ver">'.$archiv.'</a></td><td><a href="'.$directorio."/".$archiv.'" target="_blank" download="'.$archiv.'" title="Descargar archivo">&nbsp;&nbsp<i class="fa fa-download i-lg"></i></a></li></td></tr>';

                                                           						}
                                                           					} // Calculando los valores totales en el directorio
                                                           					while ($arc=readdir($dir)) {
                                                           							$total++;
                                                           					} // Fin calculo
                                                           				}else{
                                                           					echo "No se ha podido abrir el directorio, o este no existe.";
                                                           				} */?>
                                                           					</ul>
                                                           					</tr>
                                                           			<tr>-->
                                                           			<!--<td class="alert-success">		
                                                           				Archivos totales en el directorio : <?=$total?>
                                                           			</td>-->
                                                           			<!--</tr>
                                                           				</table>

                                                           				 <div class="alert alert-info">
                                                           				 	<h4><a href="ver-directorio.php?Codigo=<?=$Codigo?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>">Ver directorio completo.</a></h4>
                                                           				 </div>
                                                           				</div>
                                                           			</div>-->
                                                           			</div>
                                                           		</form>
                                                       
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div>
 <!-- FIN MODAL EXPLORAR -->

















  <!-- MODAL DE ETIQUETAS-->
													<div class="modal fade" id="Etiquetas<?=$IdUS?>" tabindex="-1" role="dialog" aria-labelledby="textModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <h4>Etiquetas instrumento Nro. <?=$IdUS?></h4>
                                                            </div>
                                                            <div class="modal-body"><?
                                                            	//Generando código QR Mateo Guzmán 1.1
    															// Aquí construimos los datos
    															$codeContents ='ID: '.$IdUS.', CODIGO: '.$Codigo.", TIPO INSTRUMENTO: ".$Tipudo; 
    															 
    															// Generando QR 
    															QRcode::png($codeContents, $tempDir.'022.png', QR_ECLEVEL_L, 3); 
    															
    															// Mostrando por variable QR 
    															//Tenga en cuenta que le puede asignar las medidas necesarias
    															//El archivo img tiene que ser .png
    															$QR= '<img src="022.png" width="200"/>';
    															$QR2= '<img src="022.png" width="90"/>';
    															$QR3= '<img src="022.png" width="200"/>';
																//Fin de generacion de código QR  ?>
                                                            	<div class="row">
                                                            		<div class="col-sm-12">
                                                            			<h4>Etiqueta <a href="print-etiquetagra.php?Id=<?=$IdUS?>" class="text-muted" style="text-decoration:none;" title="Imprimir etiqueta grande" target="_blank">(Vista previa)</a></h4>
                                                            			<br>
                                                            		<a href="print-etiquetagra.php?Id=<?=$IdUS?>" style="text-decoration:none;" title="Imprimir etiqueta grande" target="_blank">
                                                            			<table class="table-responsive" style="width:100%;border:2px solid;text-align:center;" border="1">
																		<tr>
																			<td colspan="1" rowspan="2"><?=$QR?></td>
																			<td colspan="2" rowspan="1"><img src="logo3.jpg" width="73%"></td>
																		</tr>
																		<tr>
																			<td colspan="2" style="font-size:24px;"><?=$Denominacion?></td>
																		</tr>
																		<tr>
																			<td colspan="1" style="font-size:24px;"><strong>Rango:</strong></td>
																			<td colspan="1" style="font-size:24px;"><?=$RangoIntervalo?></td>
																		</tr>
																		<tr>
																			<td colspan="1" style="font-size:24px;"><strong>Nº</strong></td>
																			<td colspan="1" style="font-size:24px;"><strong><?=$Codigo?></strong></td>
																		</tr>
																		</table>
																	</a>
                                                            		</div>
                                                            		<div class="col-sm-12">
                                                            			<br>
                                                            			<h4>Etiqueta mediana <a href="print-etiquetamed.php?Id=<?=$IdUS?>" class="text-muted" style="text-decoration:none;" title="Imprimir etiqueta mediana" target="_blank">(Vista previa)</a></h4>
                                                            			<br>
                                                            		<a href="print-etiquetamed.php?Id=<?=$IdUS?>" style="text-decoration:none;" title="Imprimir etiqueta mediana" target="_blank">
                                                            			<table class="table-responsive" style="border:2px solid;text-align:center;" border="1">
																		<tr>
																		<td style="width:30%;" rowspan="4"><?=$QR3?></td>
																		<td style="font-size:20px;"><img src="logo3.jpg" width="70%" height="110"></td>
																		</tr>
																		<tr>
																		<td style="font-size:20px;"><?=$Denominacion?></td>
																		</tr>
																		<tr>
																		<td style="font-size:20px;"><?=$RangoIntervalo?></td>
																		</tr>
																		<tr>
																		<td style="font-size:25px;"><strong><?=$Codigo?></strong></td>
																		</tr>
																		</table>
																	</a>
                                                            		</div>
                                                            		<div class="col-sm-12">
                                                            		<br>
                                                            		<h4>Etiqueta pequeña <a href="print-etiquetamin.php?Id=<?=$IdUS?>" class="text-muted" style="text-decoration:none;" title="Impirmir etiqueta pequeña" target="_blank">(Vista previa)</a></h4>
                                                            			<br>
                                                            			<a href="print-etiquetamin.php?Id=<?=$IdUS?>" style="text-decoration:none;" title="Impirmir etiqueta pequeña" target="_blank">
                                                            			<table class="table-responsive" style="border:2px solid;" border="1">
                                                            				<tr>
                                                            					<td style="width:50%;"><img src="logo3.jpg" width="65%" height="80"><?=$QR2?></td>
                                                            					<td style="font-size:40px;text-align:center;"><strong><?=$Codigo?></strong></td>
                                                            				</tr>
                                                            			</table>
                                                            			</a>
                                                            		</div>
                                                            	</div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div>
 <!-- FIN MODAL DE ETIQUETAS -->                                              
                                                
                                               































<!-- EMPIEZA PLAN DE VERIFICACIÓN-->
													<div class="modal fade" id="Verificacion<?=$IdUS?>" tabindex="-1" role="dialog" aria-labelledby="textModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                               	<h4>Plan de verificación Nro. <?=$IdUS?></h4>
                                                            </div>
                                                            <?
														if($Verif==0){
														?>
												<form class="form-horizontal form-validate" role="form" method="post" action="instrumento-verificacion-2.php" novalidate>
                                                        <?
                                                    }
                                                    else{?>
                                                    	<form class="form-horizontal form-validate" role="form" method="post" action="instrumento-verificacion-3.php" novalidate>
                                                    <? }?>
												<form class="form-horizontal form-validate" role="form" method="post"  novalidate>
                                                      
                                                            <div class="modal-body">
                                                             <div class="row">
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																	<label for="Instrumento" class="control-label">Instrumento</label><br>
																	
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" name="Instrumento" class="form-control" placeholder="Instrumento" value="<?=$IdUS?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																	<input type="hidden" name="Id" value="<?=$IdACT?>">
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																	<label for="Fecha" class="control-label">Fecha</label><br>
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<div class='input-group date' id='demo-date'>
																		<input type="text" value="<?=$Fecha?>" class="form-control" required name="Fecha" id="Fecha"/>
																		<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																	<label for="Proxima" class="control-label">Proxima</label><br>
																</div>
																</div>
														<div class="form-group">
															<div class="col-lg-10 col-md-8 col-sm-6">
																<div class='input-group date' id='demo-date-end'>
																		<input type="text" value="<?=$Proxima?>" class="form-control" required name="Proxima" id="Proxima"/>
																		<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
																	</div>
															</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																	<label for="Frecuencia" class="control-label">Frecuencia</label><br>
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" name="Frecuencia" class="form-control" placeholder="Frecuencia" value="<?=$Frecuencia?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																	<label for="Accion" class="control-label">Accion</label><br>
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" name="Accion" class="form-control" placeholder="Accion" value="<?=$Accion?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																	<label for="Actividad" class="control-label">Actividad</label><br>
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" name="Actividad" class="form-control" placeholder="Actividad" value="<?=$Actividad?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																	<label for="Observacion" class="control-label">Observación</label><br>
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" name="Observacion" class="form-control" placeholder="Observación" value="<?=$Observacion?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
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
																	<input type="text" class="form-control" name="Responsable" placeholder="Responsable" value="<?=$Responsable?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
                                                             </div> 
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
																<button type="submit" class="btn btn-primary">Realizar Operación</button>
                                                        		
                                                            </div>
                                                           </form>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div>
                                                <!-- FIN MODAL PLAN DE VERIFICACIÓN -->













<!-- EMPIEZA MODAL DE PLAN DE CALIBRACIÓN -->
<?
                                                       
														if($Calib==0){
														?>
												<form class="form-horizontal form-validate" role="form" enctype="multipart/form-data" method="post" action="instrumento-calibracion-2.php" novalidate>
                                                        <? } else { ?>
                                                 <form class="form-horizontal form-validate" role="form" enctype="multipart/form-data" method="post" action="instrumento-calibracion-3.php" novalidate>
                                                    <?  } ?>
                                                <div class="modal fade" id="Calibracion<?=$IdUS?>" tabindex="-1" role="dialog" aria-labelledby="textModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                               	<h4>Plan de calibración Nro. <?=$IdUS?></h4>
                                                            </div>
                                                            <div class="modal-body">
                                                             <div class="row"><!--
                                                             	<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																	<label for="Desviacion" class="control-label">Id</label>
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" class="form-control" placeholder="Descripción del Instrumento" value="<?=$IdCAC?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
													-->
														<div class="col-sm-6">
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																	<label for="Instrumento" class="control-label">Instrumento</label><br>
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" name="Instrumento" class="form-control" placeholder="Instrumento" value="<?=$IdUS?>" onChange="javascript:this.value=this.value.toUpperCase();" required readonly>
																	<input type="hidden" value="<?=$IdUS?>" name="Id">
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
																	<input type="text" class="form-control" name="Certificado" placeholder="Certificado Nº" value="<?=$Certificado?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
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
																	<input type="text" name="Incertidumbre" class="form-control" placeholder="Incertidumbre" value="<?=$Incertidumbre?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
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
																	<input type="text" class="form-control" name="Desviacion" placeholder="Desviación encontrada" value="<?=$Desviacion?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
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
																		<input type="text" value="<?=$FechaCAC?>" class="form-control" required name="Fecha" id="Fecha"/>
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
																		<input type="text" value="<?=$FechaVence?>" class="form-control" required name="FechaVence" id="FechaVence"/>
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
																	<input type="text" class="form-control" name="Resultado" placeholder="Resultado" value="<?=$Resultado?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
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
																	<input type="text" class="form-control" name="Responsable" placeholder="Responsable" value="<?=$ResponsableCAC?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
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
																	<input type="text" class="form-control" autocomplete="off" name="ToleranciaProceso" onchange="calculo()" id="ToleranciaProceso" value="<?=$ToleranciaProceso?>" required>
																</div>
															</div>
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																		<label for="DesviacionMaxima" class="control-label">Desviación máxima encontrada</label>
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" class="form-control" name="DesviacionMaxima" autocomplete="off" onchange="calculo()" id="DesviacionMaxima" value="<?=$DesviacionMaxima?>" required>
																</div>
															</div>
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																		<label for="ToleranciaDesviacion" class="control-label">Tolerancia vs desviación</label>
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" class="form-control" name="ToleranciaDesviacion"  autocomplete="off" id="ToleranciaDesv" value="<?=$ToleranciaDesviacion?>" required readonly>
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
																	<input type="text" class="form-control" name="Medicion" placeholder="Medición" value="<?=$Medicion?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																	<label for="Unidad" class="control-label">Unidad</label><br>
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" class="form-control" name="Unidad" placeholder="Unidad" value="<?=$Unidad?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
															<div class="form-group">
																<div class="col-lg-12 col-md-12 col-sm-6">
																	<label for="RangoMedicion" class="control-label">Rango de medición</label><br>
																</div>
																</div>
														<div class="form-group">
																<div class="col-lg-10 col-md-8 col-sm-6">
																	<input type="text" class="form-control" name="RangoMedicion" placeholder="Rango de medición" value="<?=$RangoMedicion?>" onChange="javascript:this.value=this.value.toUpperCase();" required >
																</div>
															</div>
														</div>
                                                             </div> 

																	</fieldset>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                                <button type="submit" class="btn btn-primary">Realizar Operación</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                              	      <!-- FIN DEL MODAL DE PLAN DE CALIBRACIÓN -->
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
		<!-- START FILE UPLOAD TEMPLATES -->
		<script id="template-upload" type="text/x-tmpl">
			{% for (var i=0, file; file=o.files[i]; i++) { %}
			<tr class="template-upload fade">
				<td>
					<span class="preview"></span>
				</td>
				<td>
					<p class="name">{%=file.name%}</p>
					<strong class="error text-danger"></strong>
				</td>
				<td>
					<p class="size">Cargando...</p>
					<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
				</td>
				<td>
					{% if (!i && !o.options.autoUpload) { %}
					<button class="btn btn-primary start" disabled>
						<i class="glyphicon glyphicon-upload"></i>
						<span>Cargar</span>
					</button>
					{% } %}
					{% if (!i) { %}
					<button class="btn btn-warning cancel">
						<i class="glyphicon glyphicon-ban-circle"></i>
						<span>Cancelar</span>
					</button>
					{% } %}
				</td>
			</tr>
			{% } %}
		</script>
		<script id="template-download" type="text/x-tmpl">
			{% for (var i=0, file; file=o.files[i]; i++) { %}
			<tr class="template-download fade">
				<td>
					<span class="preview">
						{% if (file.thumbnailUrl) { %}
						<a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
						{% } %}
					</span>
				</td>
				<td>
					<p class="name">
						{% if (file.url) { %}
						<a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
						{% } else { %}
						<span>{%=file.name%}</span>
						{% } %}
					</p>
					{% if (file.error) { %}
					<div><span class="label label-danger">Error</span> {%=file.error%}</div>
					{% } %}
				</td>
				<td>
					<span class="size">{%=o.formatFileSize(file.size)%}</span>
				</td>
				<td>
					{% if (file.deleteUrl) { %}
					<button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
						<i class="glyphicon glyphicon-trash"></i>
						<span>Eliminar</span>
					</button>

					
					{% } else { %}
					<button class="btn btn-warning cancel">
						<i class="glyphicon glyphicon-ban-circle"></i>
						<span>Cancelar</span>
					</button>
					{% } %}
				</td>
			</tr>
			{% } %}
		</script>
		<!-- END FILE UPLOAD TEMPLATES -->
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
		<script src="../../assets/js/libs/blueimp-file-upload/vendor/jquery.ui.widget.js"></script>
		<script src="../../assets/js/libs/blueimp-file-upload/vendor/tmpl.min.js"></script>
		<script src="../../assets/js/libs/blueimp-file-upload/vendor/load-image.min.js"></script>
		<script src="../../assets/js/libs/blueimp-file-upload/vendor/jquery.blueimp-gallery.min.js"></script>
		<script src="../../assets/js/libs/blueimp-file-upload/jquery.iframe-transport.js"></script>
		<script src="../../assets/js/libs/blueimp-file-upload/jquery.fileupload.js"></script>
		<script src="../../assets/js/libs/blueimp-file-upload/jquery.fileupload-process.js"></script>
		<script src="../../assets/js/libs/blueimp-file-upload/jquery.fileupload-image.js"></script>
		<script src="../../assets/js/libs/blueimp-file-upload/jquery.fileupload-audio.js"></script>
		<script src="../../assets/js/libs/blueimp-file-upload/jquery.fileupload-video.js"></script>
		<script src="../../assets/js/libs/blueimp-file-upload/jquery.fileupload-validate.js"></script>
		<script src="../../assets/js/libs/blueimp-file-upload/jquery.fileupload-ui.js"></script>
		<script src="../../assets/js/libs/blueimp-file-upload/main.js"></script>
		<!--[if (gte IE 8)&(lt IE 10)]>
		<script src="../../assets/js/libs/blueimp-file-upload/cors/jquery.xdr-transport.js"></script>
		<![endif]-->
		<!-- END JAVASCRIPT -->

	</body>
</html>
