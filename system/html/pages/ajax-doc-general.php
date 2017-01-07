<?
session_start();

if (empty($_SESSION['sesionx']))
{
header("Location: login.php");
}

include("../../includes/conexion.php");

$Id 			=   $_REQUEST["Id"];
$Tam			=	$_REQUEST["Tam"];
$Numero			=	$_REQUEST["Numero"];
$Hoja			=	$_REQUEST["Hoja"];




$sql="INSERT INTO  DocumentosListado (Idlis, Tam, Numero, Hoja)";
$sql.= "VALUES ('$Id','$Tam','$Numero','$Hoja')";
if(mysql_query($sql)){
echo "Ingresado correctamente";	
}else{
echo "Ha ocurrido un error";
};


				

?>


