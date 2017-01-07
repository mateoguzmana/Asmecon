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

$Instrumento		=$_REQUEST["Instrumento"];
$Fecha 				=$_REQUEST["Fecha"];
$Proxima 			=$_REQUEST["Proxima"];
$Frecuencia 		=$_REQUEST["Frecuencia"];
$Accion 			=$_REQUEST["Accion"];
$Actividad 			=$_REQUEST["Actividad"];
$Observacion	 	=$_REQUEST["Observacion"];		
$Responsable 		=$_REQUEST["Responsable"];


$sql="INSERT INTO  Verificacionins (Instrumento,Fecha,Proxima,Frecuencia,Accion,Actividad,Observacion,Responsable)";
$sql.= "VALUES ('$Instrumento','$Fecha','$Proxima','$Frecuencia','$Accion','$Actividad','$Observacion','$Responsable')";
mysql_query($sql);

				

?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = 'act-instrumentodos-2.php?Id=<?=$Instrumento?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>';
</script>	
