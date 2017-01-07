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



$Idproc				=$_REQUEST["Idproc"];
$Desde				=$_REQUEST["Desde"];
$Hasta				=$_REQUEST["Hasta"];
$Idproc				=$_REQUEST["Idproc"];
$Tolerancia			=$_REQUEST["Tolerancia"];
$Tolerancia			=str_replace(",",".",$Tolerancia);
$Tipo				=$_REQUEST["Tipo"];

$sql="INSERT INTO  Tolerancia (Idtipoproc, Idtipoprocopc, Desde, Hasta, Tolerancia)";
$sql.= "VALUES ('$Idproc', '$Tipo', '$Desde', '$Hasta', '$Tolerancia')";
mysql_query($sql);

				

?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
