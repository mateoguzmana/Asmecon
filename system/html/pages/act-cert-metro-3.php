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


$Casillero			=$_SESSION['IdR'];

$Id 				=$_REQUEST["Id"];
$Cliente 			=$_REQUEST["Cliente"];
$Rip				=$_REQUEST["Rip"];
$Fecha				=$_REQUEST["Fecha"];
$Proveedor 			=$_REQUEST["Proveedor"];
$OrdenTrabajo	 	=$_REQUEST["OrdenTrabajo"];
$Temperatura 		=$_REQUEST["Temperatura"];
$UK 				=$_REQUEST["UK"];
$OrdenCompra 		=$_REQUEST["OrdenCompra"];
$Codigo 			=$_REQUEST["Codigo"];
$Plano 				=$_REQUEST["Plano"];
$Descripcion 		=$_REQUEST["Descripcion"];
$Material 			=$_REQUEST["Material"];
$DurezaObtenida 	=$_REQUEST["DurezaObtenida"];
$Interior1			=$_REQUEST["Interior1"];
$Interior2			=$_REQUEST["Interior2"];
$Interior3			=$_REQUEST["Interior3"];
$Interior4			=$_REQUEST["Interior4"];
$Exterior1			=$_REQUEST["Exterior1"];
$Exterior2			=$_REQUEST["Exterior2"];
$Exterior3			=$_REQUEST["Exterior3"];
$Exterior4			=$_REQUEST["Exterior4"];
$Longitud1			=$_REQUEST["Longitud1"];
$Longitud2			=$_REQUEST["Longitud2"];
$Longitud3			=$_REQUEST["Longitud3"];
$Longitud4			=$_REQUEST["Longitud4"];
$Chaflanes			=$_REQUEST["Chaflanes"];
$Radios				=$_REQUEST["Radios"];
$Roscas				=$_REQUEST["Roscas"];
$Entalladura		=$_REQUEST["Entalladura"];
$Cantidad 			=$_REQUEST["Cantidad"];
$Revisadas 			=$_REQUEST["Revisadas"];
$Aceptadas 			=$_REQUEST["Aceptadas"];
$Rechazadas 		=$_REQUEST["Rechazadas"];
$Conforme 			=$_REQUEST["Conforme"];
$Dimensiones 		=$_REQUEST["Dimensiones"];
$Geometria			=$_REQUEST["Geometria"];
$Acabados			=$_REQUEST["Acabados"];
$ValConforme		=$_REQUEST["ValConforme"];


$sql="UPDATE CertificadoMetrologico SET Cliente='$Cliente',Rip='$Rip',Fecha='$Fecha',Proveedor='$Proveedor',OrdenTrabajo='$OrdenTrabajo',
Temperatura='$Temperatura',UK='$UK',OrdenCompra='$OrdenCompra',Codigo='$Codigo',Plano='$Plano',Descripcion='$Descripcion',
Material='$Material',DurezaObtenida='$DurezaObtenida',Interior1='$Interior1',Interior2='$Interior2',Interior3='$Interior3',
Interior4='$Interior4',Exterior1='$Exterior1',Exterior2='$Exterior2',Exterior3='$Exterior3',Exterior4='$Exterior4',
Longitud1='$Longitud1',Longitud2='$Longitud2',Longitud3='$Longitud3',Longitud4='$Longitud4',Chaflanes='$Chaflanes',
Radios='$Radios',Roscas='$Roscas',Entalladura='$Entalladura',Cantidad='$Cantidad',Revisadas='$Revisadas',Aceptadas='$Aceptadas',
Rechazadas='$Rechazadas',Conforme='$Conforme',Dimensiones='$Dimensiones',Geometria='$Geometria',Acabados='$Acabados',
ValConforme='$ValConforme' WHERE Id='$Id'";
mysql_query($sql,$id);


?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>