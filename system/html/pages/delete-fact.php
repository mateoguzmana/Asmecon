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


$Fechaing				= date("Y-m-d H:i:s");
$Usuario				= $_SESSION['usuario'];	


$Id						= $_REQUEST["Id"];
$Idorden				= $_REQUEST["Idorden"];
	

if(!empty($Id))
{
	
$query		="UPDATE Ordenes set Factura = '' Where Id='$Idorden'";
$result		=mysql_query($query, $id);

$query		="UPDATE Facturas set Anular = '1', Fechaanula = '$Fechaing', Usuarioanula = '$Usuario' Where Id='$Id'";
$result		=mysql_query($query, $id);




}

?>


<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anteriorx']?>';
</script>