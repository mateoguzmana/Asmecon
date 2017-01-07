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
$Casillero				=	$_SESSION['IdR'];
$IdUS 					= 	$_REQUEST["Id"];
$Codigo 				=   $_REQUEST["Codigo"];
$Completo 				=   $_REQUEST["Completo"];		
$Er 					= 	$_REQUEST["Ar"];
if(!empty($Er)){
$Ar 					=   "/".$_REQUEST["Ar"];
}
$_SESSION["carpeta"]  	=  	"";	
$_SESSION["carpeta"]  	= $Codigo.$Ar;	
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
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/DataTables/jquery.dataTables.css?1403937875" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/DataTables/TableTools.css?1403937875" />
		<link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/toastr/toastr.css?1403937848" />
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
						<h3 class="text-standard"><i class="fa fa-fw fa-arrow-circle-right text-gray-light"></i> Directorio <?=$Codigo?></h3>
					</div>
					<div class="section-body">
						<!-- START DATATABLE 1 -->
						<div class="row">
							<div class="col-lg-12">
								<div class="box">
									<div class="box-body table-responsive">
										<table id="datatable4" class="table table-striped table-hover">
											<thead>
												<tr>
													<th>Nombre</th>
													<th align="right"></th>

												</tr>
											</thead>
											<tbody>
                                            
												<?
												

							$MosPerz1		=	0;
							$MosPerz2		=	0;
					

							
							$queryPerz1			="SELECT* FROM Permisos where Idtipo = '$tipouzer'  and Men = '$Idmenux' and Submenu = '$Idsubmenux' and Opciones = '$Idopcmenux' ";
							$resultPerz1		=mysql_query($queryPerz1, $id);
							
							while($rowPerz1		=mysql_fetch_array($resultPerz1))
							{
							$MosPerzA			=$rowPerz1["Act"];
							$MosPerzB			=$rowPerz1["Del"];
							
							
								if($MosPerzA > 0)
								{
								$MosPerz1	=	1;
								}
							
								if($MosPerzB > 0)
								{
								$MosPerz2	=	1;
								}
							}

							function limpiar_caracteres_especiales($s)
							{
							         $s = ereg_replace("[áàâã]","a",$s);
							         $s = ereg_replace("[ÁÀÂÃ]","A",$s);
							         $s = ereg_replace("[éèê]","e",$s);
							         $s = ereg_replace("[ÉÈÊ]","E",$s);
							         $s = ereg_replace("[íìî]","i",$s);
							         $s = ereg_replace("[ÍÌÎ]","I",$s);
							         $s = ereg_replace("[óòôõ]","o",$s);
							         $s = ereg_replace("[ÓÒÔÕ]","O",$s);
							         //$s = ereg_replace("[úùû]","u",$s);
							         $s = ereg_replace("[ÚÙÛ]","U",$s);
							         $s = ereg_replace("º","&deg;",$s);
							         $s = str_replace("ñ","n",$s);
							         $s = str_replace("Ñ","N",$s);
							         //para ampliar los caracteres a reemplazar agregar lineas de este tipo:
							         //$s = str_replace("caracter-que-queremos-cambiar","caracter-por-el-cual-lo-vamos-a-cambiar",$s);
							         return $s;
							}
					
												
												
												
												
												//Explorando carpetas
												if(empty($Completo)){
												$directorio = "instrumentosdos/explora/server/php/files/".$Codigo;
												$boton 		= "<i class='fa fa-reply'></i> Volver";
												}
												//Ruta cuando ya se exploro la primer carpeta
                                                else{
                                                $directorio = $Completo;
                                                $boton 		= "<i class='fa fa-level-up'></i> Un nivel arriba";
                                                }
                                                //Imprimiendo
                                                if ($dir=opendir($directorio)) {
                                                while ($archiv=readdir($dir)) {
                                                	//Extensión del archivo.
                                                	$ext 			= substr($archiv,strrpos($archiv,'.'));

                                                	//Poniendole el metacharset a los archivos
                                                	//$archiv=(iconv('WINDOWS-1252', 'UTF-8', $archiv));
													//$archiv=(iconv('ISO-8859-1',   'UTF-8', $archiv));
													//$archiv=(iconv('ISO-8859-15',  'UTF-8', $archiv));
													//FIn metacharset

													//Mostrando solo si es diferente a . & .. 
                                                	if ($archiv!="." && $archiv!="..") {
                                                	$totalarchivos++;
                                                	$ur=$directorio.'/'.rawurlencode($archiv);
                                                	$C =$directorio.'/'; 
                                                ?>

												<tr class="gradeA">
													<td><?if(is_dir($directorio.'/'.$archiv)){?>
														<i class='fa fa-folder'></i>&nbsp;   
														<?}?><?=limpiar_caracteres_especiales($archiv)?></td>
													<td class="text-right">
														<?if(!is_dir($directorio.'/'.$archiv)){?>
                                                    	<a href="<?=$directorio."/".$archiv?>" target="_blank" download="<?=$archiv?>" title="Descargar archivo"><button class="btn btn-success"><i class="fa fa-download i-lg"></i></button></a>
                                                    	<?
                                                    	}
                                                    	if($ext==".jpg" || $ext==".png" || $ext==".jpeg" || $ext==".JPG" || $ext==".PNG" || $ext==".JPEG")
														{
														?> 
                                                    	<a href="<?=$directorio."/".$archiv?>" target="_blank" title="Ver"><button class="btn btn-support5"><i class="fa fa-picture-o i-lg"></i></button></a>
                                                    	<?
                                                    	}
                                                    	?>
                                                        <?
                                                        if($ext == ".zip")
														{
														?>                                                    
<button class="btn btn-warning" onClick="location.href='dir-descomprime.php?Codigo=<?=$Codigo?>&Archivo=<?=$archiv?>&Ruta=<?=$C?>&Idsubmenu=<?=$_REQUEST["Idsubmenu"]?>&Idmenu=<?=$_REQUEST["Idmenu"]?>&Idopcmenu=<?=$_REQUEST["Idopcmenu"]?>'" title="Descomprimir"><i class="fa fa-play"></i></button> 
                                                        <?
														}
														?> 
                                                        <?
                                                        if(is_dir($directorio.'/'.$archiv))
														{
														?>
<button class="btn btn-info" title="Abrir Carpeta" onClick="location.href='ver-directorio.php?Ar=<?if(!empty($Ar)){echo($Ar."/".$archiv);}else{echo($archiv);}?>&Codigo=<?=$Codigo?>&Completo=<?=$ur?>&Idsubmenu=<?=$_REQUEST["Idsubmenu"]?>&Idmenu=<?=$_REQUEST["Idmenu"]?>&Idopcmenu=<?=$_REQUEST["Idopcmenu"]?>'"> <i class="fa fa-folder-open-o"></i></button> 
                                                        <?
														}
														?>
                                                        
                                                        <?
                                                        if($MosPerz2 == 1)
														{
														?>  
                                                        <a href="#"  data-toggle="modal" data-target="#textModal<?=$totalarchivos?>" data-placement="top"><button class="btn btn-danger" title="Eliminar"><i class="fa fa-minus-square"></i></button></a>
                                                        <?
														}
														?> 
                                                    </td>

												</tr>
                                                <!-- START LARGE TEXT MODAL MARKUP -->
                                                <div class="modal fade" id="textModal<?=$totalarchivos?>" tabindex="-1" role="dialog" aria-labelledby="textModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title" id="textModalLabel">Eliminar <?=$archiv?></h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Realmente desea eliminar este archivo?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                                <button type="button" class="btn btn-success" onclick="location.href='eli-directorio.php?Codigo=<?=$Codigo?>&Archivo=<?=$archiv?>&Completo=<?=$Completo?>&Idsubmenu=<?=$_REQUEST["Idsubmenu"]?>&Idmenu=<?=$_REQUEST["Idmenu"]?>&Idopcmenu=<?=$_REQUEST["Idopcmenu"]?>'">Confirmar</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                                <!-- END LARGE TEXT MODAL MARKUP -->
                                                
                                                <?
												}
											}
										}
												?>
                                                
                                                <button onclick="javascript:history.back(1)" class="btn btn-support5"><?=$boton?></button>&nbsp;
                                                <button onclick="javascript:document.location.reload()" class="btn btn-support5"><i class='fa fa-refresh'></i> Actualizar</button>&nbsp;
                                                <button class="btn btn-support5" data-toggle="modal" data-target="#Explorar<?=$IdUS?>" data-placement="top"><i class='fa fa-upload'></i> Cargar</button><br></br>
                                                
											</tbody>
										</table>



<!-- MODAL EXPLORAR-->
													<div class="modal fade" target="Explorar<?=$IdUS?>" id="Explorar<?=$IdUS?>" tabindex="-1" role="dialog" aria-labelledby="textModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="javascript:document.location.reload()">&times;</button>
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
													<br>
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




									</div><!--end .box-body -->
								</div><!--end .box -->
							</div><!--end .col-lg-12 -->
						</div>
						<!-- END DATATABLE 1 -->
					</div>
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
		<script src="../../assets/js/libs/jquery/jquery-1.11.0.min.js"></script>
		<script src="../../assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="../../assets/js/core/BootstrapFixed.js"></script>
		<script src="../../assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="../../assets/js/libs/spin.js/spin.min.js"></script>
		<script src="../../assets/js/libs/DataTables/jquery.dataTables.js"></script>
		<script src="../../assets/js/libs/DataTables/extras/ColVis/js/ColVis.js"></script>
		<script src="../../assets/js/libs/DataTables/extras/TableTools/media/js/TableTools.js"></script>
		<script src="../../assets/js/libs/slimscroll/jquery.slimscroll.min.js"></script>
		<script src="../../assets/js/core/demo/DemoTableDynamic.js"></script>
		<script src="../../assets/js/libs/toastr/toastr.min.js"></script>
		<script src="../../assets/js/core/demo/DemoUIMessages.js"></script>
		<script src="../../assets/js/core/App.js"></script>
		<script src="../../assets/js/core/demo/Demo.js"></script>
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
