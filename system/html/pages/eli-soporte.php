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

$Nombre				=$_REQUEST["Nombre"];



$queryka		=	"UPDATE Soporte set Muestra = 1, Activo = 1 Where Nombre='$Nombre'";
$resultka		=	mysql_query($queryka, $id);
				

?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anteriorx']?>';
</script>	
