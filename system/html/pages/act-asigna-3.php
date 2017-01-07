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
$Usuario				= $_SESSION['Usuario'];	


$Id				=	$_REQUEST["Id"];
$Nombre			=	$_REQUEST["Nombre"];
$Idcat			=	$_REQUEST["Idcat"];
$Valor			=	$_REQUEST["Valor"];

$Valor		=	 str_replace("$","",$Valor);
$Valor		=	 str_replace(" ","",$Valor);
$Valor		=	 str_replace(",","",$Valor);
$Valor		=	 str_replace("_","",$Valor);
$Valor		=	 str_replace("___","",$Valor);





$queryka		=	"UPDATE Listrapreciositem set Idcat = '$Idcat', Nombre = '$Nombre', Valor = '$Valor' Where Id='$Id'";
$resultka		=	mysql_query($queryka, $id);




?>


<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anteriorx']?>';
</script>