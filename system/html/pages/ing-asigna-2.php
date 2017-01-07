<?
session_start();

if (empty($_SESSION['sesionx']))
{
header("Location: login.php");
}

include("../../includes/conexion.php");


$Nombre			=	$_REQUEST["Nombre"];
$Idcat			=	$_REQUEST["Idcat"];
$Valor			=	$_REQUEST["Valor"];

$Valor		=	 str_replace("$","",$Valor);
$Valor		=	 str_replace(" ","",$Valor);
$Valor		=	 str_replace(",","",$Valor);
$Valor		=	 str_replace("_","",$Valor);
$Valor		=	 str_replace("___","",$Valor);
$Valor		=	 str_replace("__","",$Valor);



$sql="INSERT INTO  Listrapreciositem (Nombre, Idcat, Valor)";
$sql.= "VALUES ('$Nombre','$Idcat','$Valor')";
mysql_query($sql);


				

?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
