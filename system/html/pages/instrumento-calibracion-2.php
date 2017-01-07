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

$Idmenux=$_REQUEST["Idmenu"];
$Idsubmenux=$_REQUEST["Idsubmenu"];
$Idopcmenux=$_REQUEST["Idopcmenu"];

$Instrumento			=$_REQUEST["Instrumento"];
$Certificado 			=$_REQUEST["Certificado"];
$Incertidumbre			=$_REQUEST["Incertidumbre"];
$Desviacion 			=$_REQUEST["Desviacion"];
$Fecha 					=$_REQUEST["Fecha"];
$FechaVence 			=$_REQUEST["FechaVence"];
$Resultado 				=$_REQUEST["Resultado"];
$Responsable 			=$_REQUEST["Responsable"];
$ToleranciaProceso		=$_REQUEST["ToleranciaProceso"];
$DesviacionMaxima 		=$_REQUEST["DesviacionMaxima"];
$ToleranciaDesviacion	=$_REQUEST["ToleranciaDesviacion"];
$Medicion 				=$_REQUEST["Medicion"];
$Unidad 				=$_REQUEST["Unidad"];
$RangoMedicion 			=$_REQUEST["RangoMedicion"];


$sql="INSERT INTO  Calibracionins (Instrumento,Certificado,Incertidumbre,Desviacion,Fecha,FechaVence,Resultado,
Responsable,ToleranciaProceso,DesviacionMaxima,ToleranciaDesviacion,Medicion,Unidad,RangoMedicion)";
$sql.= "VALUES ('$Instrumento','$Certificado','$Incertidumbre','$Desviacion','$Fecha','$FechaVence','$Resultado',
'$Responsable','$ToleranciaProceso','$DesviacionMaxima','$ToleranciaProceso','$Medicion','$Unidad','$RangoMedicion')";
mysql_query($sql);
	

$query			="SELECT* FROM Calibracionins Order by Id ASC" ;
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

(copy($archivo1, "instrumentosdos/certificados/".$foto1));

$query="UPDATE Calibracionins set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);

}
?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = 'act-instrumentodos-2.php?Id=<?=$Instrumento?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>';
</script>	
