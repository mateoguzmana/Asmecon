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

$SQL1="Delete From Fdimensional where  Id='$Id'";
mysql_query($SQL1);	

$SQL1="Delete From Fdimensionalitems where  Idformato='$Id'";
mysql_query($SQL1);	

$SQL1="Delete From Fdimensionalitemsc where  Idformato='$Id'";
mysql_query($SQL1);	


?>

			<script type="text/javascript">
            alert('La operacion se realizo con exito.');
            window.location.href = '<?=$_SESSION['anteriorx']?>';
            </script>	
