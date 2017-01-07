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
					
					$Cliente 			=$_REQUEST["Cliente"];

					$queryONE 		="SELECT * FROM Clientes WHERE Id='$Cliente'";
                    $resultONE 		=mysql_query($queryONE,$id);
                    while ($rowONE 	=mysql_fetch_array($resultONE)){
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
                                            
                                            
                                            
                                            

					<form class="form-horizontal form-validate" role="form" method="post" action="ing-cert-metro-2.php" id="form1" name="form1" enctype="multipart/form-data" novalidate>

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
                                                        	        <input name="Cliente" id="Cliente" type="hidden" value="<?=$Cliente?>">
                                                        	      	<select name="jumpMenu" id="jumpMenu" class="form-control"  onChange="MM_jumpMenu('parent',this,0)" required>
                                                        	      	<?
                                                                    if(!empty($Cliente))
																	{
																	?>
                                                                 	<option value="ing-instrumentodos.php?Cliente=<?=$Cliente?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>" selected><?=$NombreONE?></option>
                                                                    <?
																	}
																	else{
																	?>
                                                                    <option value="" selected>Seleccione una Linea</option>
																	<?
																	}
                                                        	      	$queryX 		="SELECT * FROM Clientes WHERE Id <> '$Cliente' AND Muestra=0";
                                                        	      	$resultX 		=mysql_query($queryX,$id);
                                                        	      	while ($rowX 	=mysql_fetch_array($resultX)){
                                                        	      	$IdCli    		=$rowX["Id"];
                                                        	      	$NombreCli 		=$rowX["Nombre"];
                                                        	      	?>
                                                        	      	<option value="ing-cert-metro.php?Cliente=<?=$IdCli?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>"><?=$NombreCli?></option>
                                                        	      	<?}?>
                                                        	      	</select>
                                                        	        </div>
                                                        	    </div>
															</div>
															<?if(!empty($Cliente)){?>
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Proveedor</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	      	<select name="Proveedor" id="Proveedor" class="form-control" required>
                                                        	      	<option value="">Seleccione un proveedor</option>
                                                        	      	<?
                                                        	      	$query1 		="SELECT * FROM Clientesde WHERE Idcliente='$Cliente' AND Muestra=0";
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

														</div>


														<div class="row">
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">R.I.P.</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="Rip" id="Rip" value="<?=$Rip?>" placeholder="R.I.P." onChange="javascript:this.value=this.value.toUpperCase();">
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
																<input type="text" value="" class="form-control" required name="Fecha" id="Fecha"/>
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
                                                        	            <label class="control-label">O.T.</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="OrdenTrabajo" id="OrdenTrabajo" value="<?=$OrdenTrabajo?>" placeholder="Orden de trabajo" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>

															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Temperatura</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="Temperatura" id="Temperatura" value="<?=$Temperatura?>" placeholder="Temperatura" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>

															</div>
															<div class="row">

															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">UK</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="UK" id="UK" value="<?=$UK?>" placeholder="UK" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>

															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Orden de compra</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="OrdenCompra" id="OrdenCompra" value="<?=$OrdenCompra?>" placeholder="Orden de compra" onChange="javascript:this.value=this.value.toUpperCase();">
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
                                                        	            <input type="text" class="form-control" name="Codigo" id="Codigo" value="<?=$Codigo?>" placeholder="Código" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>

															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Plano</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="Plano" id="Plano" value="<?=$Plano?>" placeholder="Plano" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>

															</div>
															<div class="row">

															<div class="col-sm-12">
															<div class="form-group">
																	<div class="col-md-1">
																	<label for="Descripcion" class="control-label">Descripción</label>
                                                        	        </div>
                                                        	        <div class="col-md-11">
																	<textarea name="Descripcion" id="Descripcion" class="form-control" placeholder="Descripcion"  onChange="javascript:this.value=this.value.toUpperCase();" ></textarea>
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
                                                        	            <input type="text" class="form-control" name="Material" id="Material" value="<?=$Material?>" placeholder="Material" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>

															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Dureza obtenida</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="DurezaObtenida" id="DurezaObtenida" value="<?=$DurezaObtenida?>" placeholder="DurezaObtenida" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>

															</div>

															<div class="row">
															<div class="col-sm-3">
                                                        	    <div class="form-group">
                                                        	        <div class="col-md-4">
                                                        	            <label class="control-label">Interior 1</label>
                                                        	        </div>
                                                        	        <div class="col-md-8">
                                                        	            <input type="text" class="form-control" name="Interior1" id="Interior1" value="<?=$Interior1?>" placeholder="Interior 1" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>
															<div class="col-sm-3">
                                                        	    <div class="form-group">
                                                        	        <div class="col-md-4">
                                                        	            <label class="control-label">Interior 2</label>
                                                        	        </div>
                                                        	        <div class="col-md-8">
                                                        	            <input type="text" class="form-control" name="Interior2" id="Interior2" value="<?=$Interior2?>" placeholder="Interior 2" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>
															<div class="col-sm-3">
                                                        	    <div class="form-group">
                                                        	        <div class="col-md-4">
                                                        	            <label class="control-label">Interior 3</label>
                                                        	        </div>
                                                        	        <div class="col-md-8">
                                                        	            <input type="text" class="form-control" name="Interior3" id="Interior3" value="<?=$Interior3?>" placeholder="Interior 3" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>
															<div class="col-sm-3">
                                                        	    <div class="form-group">
                                                        	        <div class="col-md-4">
                                                        	            <label class="control-label">Interior 4</label>
                                                        	        </div>
                                                        	        <div class="col-md-8">
                                                        	            <input type="text" class="form-control" name="Interior4" id="Interior4" value="<?=$Interior4?>" placeholder="Interior 4" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>
															</div>

															<div class="row">
															<div class="col-sm-3">
                                                        	    <div class="form-group">
                                                        	        <div class="col-md-4">
                                                        	            <label class="control-label">Exterior 1</label>
                                                        	        </div>
                                                        	        <div class="col-md-8">
                                                        	            <input type="text" class="form-control" name="Exterior1" id="Exterior1" value="<?=$Exterior1?>" placeholder="Exterior 1" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>
															<div class="col-sm-3">
                                                        	    <div class="form-group">
                                                        	        <div class="col-md-4">
                                                        	            <label class="control-label">Exterior 2</label>
                                                        	        </div>
                                                        	        <div class="col-md-8">
                                                        	            <input type="text" class="form-control" name="Exterior2" id="Exterior2" value="<?=$Exterior2?>" placeholder="Exterior 2" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>
															<div class="col-sm-3">
                                                        	    <div class="form-group">
                                                        	        <div class="col-md-4">
                                                        	            <label class="control-label">Exterior 3</label>
                                                        	        </div>
                                                        	        <div class="col-md-8">
                                                        	            <input type="text" class="form-control" name="Exterior3" id="Exterior3" value="<?=$Exterior3?>" placeholder="Exterior 3" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>
															<div class="col-sm-3">
                                                        	    <div class="form-group">
                                                        	        <div class="col-md-4">
                                                        	            <label class="control-label">Exterior 4</label>
                                                        	        </div>
                                                        	        <div class="col-md-8">
                                                        	            <input type="text" class="form-control" name="Exterior4" id="Exterior4" value="<?=$Exterior4?>" placeholder="Exterior 4" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>
															</div>

															<div class="row">
															<div class="col-sm-3">
                                                        	    <div class="form-group">
                                                        	        <div class="col-md-4">
                                                        	            <label class="control-label">Longitud 1</label>
                                                        	        </div>
                                                        	        <div class="col-md-8">
                                                        	            <input type="text" class="form-control" name="Longitud1" id="Longitud1" value="<?=$Longitud1?>" placeholder="Longitud 1" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>
															<div class="col-sm-3">
                                                        	    <div class="form-group">
                                                        	        <div class="col-md-4">
                                                        	            <label class="control-label">Longitud 2</label>
                                                        	        </div>
                                                        	        <div class="col-md-8">
                                                        	            <input type="text" class="form-control" name="Longitud2" id="Longitud2" value="<?=$Longitud2?>" placeholder="Longitud 2" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>
															<div class="col-sm-3">
                                                        	    <div class="form-group">
                                                        	        <div class="col-md-4">
                                                        	            <label class="control-label">Longitud 3</label>
                                                        	        </div>
                                                        	        <div class="col-md-8">
                                                        	            <input type="text" class="form-control" name="Longitud3" id="Longitud3" value="<?=$Longitud3?>" placeholder="Longitud 3" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>
															<div class="col-sm-3">
                                                        	    <div class="form-group">
                                                        	        <div class="col-md-4">
                                                        	            <label class="control-label">Longitud 4</label>
                                                        	        </div>
                                                        	        <div class="col-md-8">
                                                        	            <input type="text" class="form-control" name="Longitud4" id="Longitud4" value="<?=$Longitud4?>" placeholder="Longitud 4" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>
															</div>

															<div class="row">
															<div class="col-sm-3">
                                                        	    <div class="form-group">
                                                        	        <div class="col-md-4">
                                                        	            <label class="control-label">Chaflanes</label>
                                                        	        </div>
                                                        	        <div class="col-md-8">
                                                        	            <input type="text" class="form-control" name="Chaflanes" id="Chaflanes" value="<?=$Chaflanes?>" placeholder="Chaflanes" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>
															<div class="col-sm-3">
                                                        	    <div class="form-group">
                                                        	        <div class="col-md-4">
                                                        	            <label class="control-label">Radios</label>
                                                        	        </div>
                                                        	        <div class="col-md-8">
                                                        	            <input type="text" class="form-control" name="Radios" id="Radios" value="<?=$Radios?>" placeholder="Radios" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>
															<div class="col-sm-3">
                                                        	    <div class="form-group">
                                                        	        <div class="col-md-4">
                                                        	            <label class="control-label">Roscas</label>
                                                        	        </div>
                                                        	        <div class="col-md-8">
                                                        	            <input type="text" class="form-control" name="Roscas" id="Roscas" value="<?=$Roscas?>" placeholder="Roscas" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>
															<div class="col-sm-3">
                                                        	    <div class="form-group">
                                                        	        <div class="col-md-4">
                                                        	            <label class="control-label">Entalladura</label>
                                                        	        </div>
                                                        	        <div class="col-md-8">
                                                        	            <input type="text" class="form-control" name="Entalladura" id="Entalladura" value="<?=$Entalladura?>" placeholder="Entalladura" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>
															</div>

															<div class="row">
															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Cantidad</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="Cantidad" id="Cantidad" value="<?=$Cantidad?>" placeholder="Cantidad" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>

															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Revisadas</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="Revisadas" id="Revisadas" value="<?=$Revisadas?>" placeholder="Revisadas" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>

															</div>
															<div class="row">

															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Aceptadas</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="Aceptadas" id="Aceptadas" value="<?=$Aceptadas?>" placeholder="Aceptadas" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>

															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Rechazadas</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	            <input type="text" class="form-control" name="Rechazadas" id="Rechazadas" value="<?=$Rechazadas?>" placeholder="Rechazadas" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        	        </div>
                                                        	    </div>
															</div>
														</div>
														
														<div class="row">

															<div class="col-sm-6">
                                                        	    <div class="form-group">
                                                        	        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        	            <label class="control-label">Conforme</label>
                                                        	        </div>
                                                        	        <div class="col-md-10">
                                                        	      	<select name="Conforme" id="Conforme" class="form-control" onchange="Desplegar();">
                                                        	      	<option value="">Seleccione una opción</option>
                                                        	      	<option value="SI">SI</option>
                                                        	      	<option value="NO">NO</option>
                                                        	      	</select>
                                                        	        </div>
                                                        	    </div>
															</div>
															<div style="display:none;" id="SI">
																<div class="col-sm-2">
                                                        		    <div class="form-group">
                                                        		        <div class="col-md-12">
                                                        		            <input type="text" class="form-control" name="Dimensiones" id="Dimensiones" value="<?=$Dimensiones?>" placeholder="Dimensiones" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        		        </div>
                                                        		    </div>
																</div>
																<div class="col-sm-2">
                                                        		    <div class="form-group">
                                                        		        <div class="col-md-12">
                                                        		            <input type="text" class="form-control" name="Geometria" id="Geometria" value="<?=$Geometria?>" placeholder="Geometria" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        		        </div>
                                                        		    </div>
																</div>
																<div class="col-sm-2">
                                                        		    <div class="form-group">
                                                        		        <div class="col-md-12">
                                                        		            <input type="text" class="form-control" name="Acabados" id="Acabados" value="<?=$Acabados?>" placeholder="Acabados" onChange="javascript:this.value=this.value.toUpperCase();">
                                                        		        </div>
                                                        		    </div>
																</div>
															</div>
															<div style="display:none;" id="NO">
																<div class="col-sm-6">
                                                        		    <div class="form-group">
                                                        		        <div class="col-lg-2 col-md-4 col-sm-6">
                                                        		            <label class="control-label">Razón</label>
                                                        		        </div>
                                                        		        <div class="col-md-10">
                                                        		      	<select name="ValConforme" id="ValConforme" class="form-control">
                                                        		      	<option value="">Seleccione una opción</option>
                                                        		      	<option value="DEF. CRITICO">DEF. CRITICO</option>
                                                        		      	<option value="DEF. MAYOR">DEF. MAYOR</option>
                                                        		      	<option value="DEF. MENOR">DEF. MENOR</option>
                                                        		      	<option value="RECHAZADO">RECHAZADO</option>
                                                        		      	<option value="REPROCESO">REPROCESO</option>
                                                        		      	<option value="CONCESIÓN">CONCESIÓN</option>
                                                        		      	</select>
                                                        		        </div>
                                                        		    </div>
																</div>	
															</div>
														</div>

														<div class="form-group">
															<div class="col-sm-1">
															<label for="Descripcion" class="control-label"></label>
                                                        	</div>

															<div class="col-lg-11 col-md-10 col-sm-9">
																	<button type="submit" class="btn btn-primary">Realizar Operación</button>
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
		<!-- Script para desplegar los campos -->
		<script type="text/javascript">
		function Desplegar(){
		Valor=$("#Conforme").val();
		SI=$("#SI");
		NO=$("#NO");

		if (Valor=="SI") {
		SI.css("display","");
		NO.css("display","none");
		}
		else if(Valor=="NO"){
		NO.css("display","");
		SI.css("display","none");
		}
		else{
		NO.css("display","none");
		SI.css("display","none");
		}
		};
		</script>
		<!-- Fin script Desplegar()-->
	</body>
</html>
