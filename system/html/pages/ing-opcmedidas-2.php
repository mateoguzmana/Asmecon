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
$Linea 				=$_REQUEST["Linea"];
$Categoria 			=$_REQUEST["Categoria"];
$SubCategoria 		=$_REQUEST["SubCategoria"];
$Inicial 			=$_REQUEST["Inicial"];


$sql="INSERT INTO  OpcMediciones (Nombre,Codigo,Inicial,Linea,Categoria,SubCategoria)";
$sql.= "VALUES ('$Nombre','$Codigo','$Inicial','$Linea','$Categoria','$SubCategoria')";
mysql_query($sql);

				

?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
