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




$Id					=$_REQUEST["Id"];
$Idproc				=$_REQUEST["Idproc"];
$Desde				=$_REQUEST["Desde"];
$Hasta				=$_REQUEST["Hasta"];
$Idproc				=$_REQUEST["Idproc"];
$Tolerancia			=$_REQUEST["Tolerancia"];
$Tolerancia			=str_replace(",",".",$Tolerancia);
$Tipo				=$_REQUEST["Tipo"];

		$queryka		=	"UPDATE Tolerancia set Idtipoproc = '$Idproc', Idtipoprocopc = '$Tipo', Desde = '$Desde', Hasta = '$Hasta', Tolerancia = '$Tolerancia' Where Id='$Id'";
		$resultka		=	mysql_query($queryka, $id);	
?>

			<script type="text/javascript">
            alert('La operacion se realizo con exito.');
            window.location.href = '<?=$_SESSION['anterior']?>';
            </script>	
