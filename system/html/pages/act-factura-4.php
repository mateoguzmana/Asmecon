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






$Fecha					= date("Y-m-d H:i:s");
$Usuario	 			= $_SESSION['usuario'];

$Id							= $_POST["Id"];
$servicio					= $_POST["servicio"];
$Formapago					= $_POST["Formapago"];
$Nrocheque					= $_POST["Nrocheque"];
$Fechapago					= $_POST["Fechapago"];
$Rte						= $_POST["Rte"];
$Ica						= $_POST["Ica"];
$Rteiva						= $_POST["Rteiva"];
$Recibo						= $_POST["Recibo"];
$Banco						= $_POST["Banco"];
$Servicios					= $_POST["Servicios"];
$Clase						= $_POST["Clase"];


$Total						= $_POST["Totaliza"];

$Valorreal					= $Total - ($Rte+$Ica+$Rteiva);





$query		="UPDATE Facturas set Estado = 'CANCELADA', Formapago = '$Formapago', Nrocheque = '$Nrocheque', Fechapago = '$Fechapago', Rte = '$Rte', Ica = '$Ica', Rteiva = '$Rteiva', Valorreal = '$Valorreal', Notas = '$Notas', Recibo = '$Recibo', Banco = '$Banco', Servicios = '$Servicios', Clase = '$Clase'  Where Id='$Id'";
$result		=mysql_query($query, $id);







?>


<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anteriorx']?>';
</script>