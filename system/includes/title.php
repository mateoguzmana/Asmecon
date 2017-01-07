<?
include("../../includes/conexion.php");


$queryevep			="SELECT* FROM Informacion";
$resultevep			=mysql_query($queryevep, $id);

while($rowevep		=mysql_fetch_array($resultevep))
{
$NombreEmpresa		=$rowevep["Nombre"];
$EmailEmpresa		=$rowevep["Email"];
$DirEmpresa			=$rowevep["Dir"];
$TelefonoEmpresa	=$rowevep["Telefono"];
$CiudadEmpresa		=$rowevep["Ciudad"];
$PaisEmpresa		=$rowevep["Pais"];
$CodigoEmpresa		=$rowevep["Codigo"];
$LogoEmpresa		=$rowevep["Logo"];
$UrlEmpresa			=$rowevep["Url"];
$CasilleroEmpresa	=$rowevep["Casillero"];
}
?>

<title>ASMECON - SISTEMA DE GESTION</title>