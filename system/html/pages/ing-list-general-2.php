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



$OrdenTrabajo 		= $_REQUEST["OrdenTrabajo"];
$Factura 			= $_REQUEST["Factura"];
$Rip 				= $_REQUEST["Rip"];
$Cliente			= $_REQUEST["Cliente"];
$Instalacion		= $_REQUEST["Instalacion"];
$Sistema 			= $_REQUEST["Sistema"];
$Subsistema 		= $_REQUEST["Subsistema"];
$Equipo 			= $_REQUEST["Equipo"];
$Descripcion 		= $_REQUEST["Descripcion"];
$Requerimiento 		= $_REQUEST["Requerimiento"];
$Cod_sap 			= $_REQUEST["Cod_sap"];
$Codigocon 			= $_REQUEST["Codigocon"];
$Fecha 				= $_REQUEST["Fecha"];
$Observaciones 		= $_REQUEST["Observaciones"];
$A 					= $_REQUEST["A"];
$B 					= $_REQUEST["B"];
$C  				= $_REQUEST["C"];
$Longitud 			= $_REQUEST["Longitud"];
$Exterior 			= $_REQUEST["Exterior"];
$Interior 			= $_REQUEST["Interior"];
$Angulos 			= $_REQUEST["Angulos"];
$PiezaPlano 		= $_REQUEST["PiezaPlano"];



$sql="INSERT INTO  ListadoPlanos (OrdenTrabajo,Factura,Rip,Cliente,Instalacion,Sistema,Subsistema,Equipo,Descripcion,
Requerimiento,Cod_sap,Codigocon,Fecha,Observaciones,A,B,C,Longitud,Exterior,Interior,Angulos,PiezaPlano)";
$sql.= "VALUES ('$OrdenTrabajo','$Factura','$Rip','$Cliente','$Instalacion','$Sistema','$Subsistema','$Equipo','$Descripcion',
'$Requerimiento','$Cod_sap','$Codigocon','$Fecha','$Observaciones','$A','$B','$C','$Longitud','$Exterior','$Interior','$Angulos','$PiezaPlano')";
mysql_query($sql,$id);


$query     		= "SELECT * FROM ListadoPlanos ORDER BY Id ASC";
$result 		= mysql_query($query,$id);
while($row 		= mysql_fetch_array($result)) {
$Id 			= $row["Id"];
}
				
$archivo1 = $_FILES['foto']['tmp_name'];

$archiv			=			$_FILES['foto']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo1))
{
$foto1= $Id.".".$ext;

(copy($archivo1, "ListadoPlanos/".$foto1));

$query="UPDATE ListadoPlanos set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);

}
?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
