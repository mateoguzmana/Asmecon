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



$queryka		=	"UPDATE DocumentosListado set Muestra = 1 Where Id='$Id'";
if(mysql_query($queryka, $id)){
echo "1";
}else{
echo "2";	
}
				
;
?>
