<?
session_start();

if (empty($_SESSION['sesionx']))
{
header("Location: login.php");
}

include("../../includes/conexion.php");


$Casillero			=	$_SESSION['IdR'];

$Nombre				=$_REQUEST["Nombre"];
$TipoInstrumento	=$_REQUEST["TipoInstrumento"];



$sql="INSERT INTO  Instrumentos (Nombre, TipoInstrumento) ";
$sql.="VALUES ('$Nombre','$TipoInstrumento')";
$query=mysql_query($sql);



//Copiar foto al directorio

$query			="SELECT* FROM Instrumentos Order by Id ASC" ;
$result			=mysql_query($query, $id);

while($row		=mysql_fetch_array($result))
{
$Id				=$row["Id"];
}

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
