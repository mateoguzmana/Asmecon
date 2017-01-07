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

$Idfact						= $_POST["Idfact"];
$Idorden					= $_POST["Id"];
$Idcotiz					= $_POST["Idcotiz"];

$Fechaf						= $_POST["Fechaf"];
$Fechau						= $_POST["Fechau"];











$query		="UPDATE Facturas set Fechaf = '$Fechaf', Fechau = '$Fechau'  Where Id='$Idfact'";
$result		=mysql_query($query, $id);
		
		
		
$query		="UPDATE Ordenes set Factura = '$Idfact', Fechafact = '$Fechaf', Fechafin = '$Fechau', Aprobo = '$Usuario' Where Id='$Idorden'";
$result		=mysql_query($query, $id);







?>


<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anteriorx']?>';
</script>