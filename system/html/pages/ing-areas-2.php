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



$Nombre				=$_REQUEST["Nombre"];
$Codigo				=$_REQUEST["Codigo"];


$sql="INSERT INTO  Areas (Nombre,Codigo)";
$sql.= "VALUES ('$Nombre','$Codigo')";
mysql_query($sql);

				

?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
