<?
session_start();

if (empty($_SESSION['sesionx']))
{
header("Location: login.php");
}

include("../../includes/conexion.php");

$IdL 		= $_REQUEST["Id"];


$query 		= "SELECT * FROM DocumentosListado WHERE Muestra=0 AND Idlis='$IdL'";
$result 	= mysql_query($query,$id);

while ($row = mysql_fetch_array($result)) {
$Id 			=   $row["Id"];	
$Tam			=	$row["Tam"];
$Numero			=	$row["Numero"];
$Hoja			=	$row["Hoja"];

echo "<tr id='N".$Id."'><td>".$Tam."</td><td>".$Numero."</td><td>".$Hoja."</td><td class='text-right'><button type='button' onclick='Eli(".$Id.");' class='btn btn-sm btn-danger'>Eliminar</button></td></tr>";

}

	
	

?>


