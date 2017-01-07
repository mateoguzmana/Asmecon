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

$Id 			= $_REQUEST["Ida"];
$Codigo 		= $_REQUEST["code"];

$archivo  		= $_FILES["files"]["name"];
$archivoTemp	= $_FILES["files"]["tmp_name"];
$ext 			= substr($archivo,strrpos($archivo,'.'));

$destino 		= "instrumentosdos/explora/".$Codigo."/";

move_uploaded_file($archivoTemp, $destino.$archivo);

if ($ext==".zip") {
$melo =$destino.$archivo;
$zip = new ZipArchive();
if ($zip->open($melo) === true) {
		$zip->extractTo($destino);
    	$zip->close();
    	unlink($melo);
}
}



?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
