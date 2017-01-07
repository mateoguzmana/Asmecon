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
$Completo       =   $_REQUEST["Completo"];

$ext 			= substr($archivo,strrpos($archivo,'.'));
if (empty($Completo)) {
$destino        = "instrumentosdos/explora/server/php/files/".$Codigo."/";
}
else{
$destino        = $Completo.'/';
}

$dir 			= $destino.$archivo;

/* Función borrar archivos y carpetas por Mateo Guzmán A. */
/* Variable dir es la ruta completa del archivo o carpeta a aboorar */
function BorrarDirectorio($dir) { 
    if (!file_exists($dir)) return true; 
    if (!is_dir($dir) || is_link($dir)) return unlink($dir); 
        foreach (scandir($dir) as $Objetos) { 
            if ($Objetos == '.' || $Objetos == '..') continue; 
            if (!BorrarDirectorio($dir . "/" . $Objetos)) { 
                chmod($dir . "/" . $Objetos, 0777); 
                if (!BorrarDirectorio($dir . "/" . $Objetos)) return false; 
            }; 
        } 
        return rmdir($dir); 
    }
	

	BorrarDirectorio($dir);

?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
