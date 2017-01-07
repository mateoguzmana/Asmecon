<?
session_start();

if (empty($_SESSION['sesionx']))
{
header("Location: login.php");
}

include("../../includes/conexion.php");


$Casillero		=	$_SESSION['IdR'];

$Nombre				=$_REQUEST["Nombre"];
$Razon				=$_REQUEST["Razon"];
$Cedula				=$_REQUEST["Cedula"];
$Cod				=$_REQUEST["Cod"];
$Ciudad				=$_REQUEST["Ciudad"];
$Dir				=$_REQUEST["Direccion"];
$Telefono			=$_REQUEST["Telefono"];
$Celular			=$_REQUEST["Celular"];
$Contacto			=$_REQUEST["Contacto"];
$Celcontacto		=$_REQUEST["Celcontacto"];
$Email				=$_REQUEST["Email"];
$Retencion			=$_REQUEST["Retencion"];
$Contrasena			=$_REQUEST["Contrasena"];


$queryevep			="SELECT COUNT(*) AS TOTAL FROM Clientex where Cedula = '$Cedula' and Muestra = 0";
$resultevep			=mysql_query($queryevep, $id);

while($rowevep		=mysql_fetch_array($resultevep))
{
$TOTAL				=$rowevep["TOTAL"];
}

if($TOTAL > 0)
{
?>
<script type="text/javascript">
alert('El cliente ingresado ya existe en el sistema.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
<?	
}
else
{
$sql="INSERT INTO  Clientex (Nombre, Cedula, Ciudad, Dir, Telefono, Celular, Contacto, Celcontacto, Email, Retencion, Contrasena, Razon, Cod)";
$sql.= "VALUES ('$Nombre','$Cedula','$Ciudad','$Dir','$Telefono','$Celular','$Contacto','$Celcontacto','$Email','$Retencion','$Contrasena','$Razon','$Cod')";
mysql_query($sql);

		$query			="SELECT* FROM Clientes Order by Id ASC" ;
		$result			=mysql_query($query, $id);
		
		while($row		=mysql_fetch_array($result))
		{
		$Id				=$row["Id"];
		}



?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
<?
}
?>