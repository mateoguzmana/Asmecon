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



$Casillero		=	$_SESSION['IdR'];

$archivo		= 	$_REQUEST["Archivo"];
$Codigo 		=   $_REQUEST["Codigo"];

$ext 			= substr($archivo,strrpos($archivo,'.'));

$destino 		= $_REQUEST["Ruta"];

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
