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



$queryka		=	"UPDATE Calibracionins set Muestra = '2' Where Id='$Id'";
$resultka		=	mysql_query($queryka, $id);	

?>
