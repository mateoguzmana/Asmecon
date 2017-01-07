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
$Tipo				=$_REQUEST["Tipo"];


$sql="INSERT INTO  Tipoprocedopc (Idtipoproc, Nombre)";
$sql.= "VALUES ('$Tipo', '$Nombre')";
mysql_query($sql);

				

?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
