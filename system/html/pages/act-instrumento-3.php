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



$Casillero		=	$_SESSION['IdR'];

$Id 				=$_REQUEST["Id"];
$Nombre				=$_REQUEST["Nombre"];
$TipoInstrumento	=$_REQUEST["TipoInstrumento"];


$queryka="UPDATE Instrumentos set Nombre='$Nombre', TipoInstrumento='$TipoInstrumento'
where Id='$Id'";

$resultka		=	mysql_query($queryka, $id);		

$archivo1 = $_FILES['foto']['tmp_name'];

$archiv			=			$_FILES['foto']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo1))
{
$foto1= $Id.".".$ext;

(copy($archivo1, "instrumentos/".$foto1));

$query="UPDATE Instrumentos set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);

}



?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
