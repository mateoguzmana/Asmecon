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


$datos		= $_REQUEST["hidY"];
$datos	 	= explode(',', $datos);

$horaactual = date("Y-m-d H:i:s");
$Usuario	 = $_SESSION['usuario'];


$Idmenu				=$_REQUEST["Idmenu"];
$Idsubmenu			=$_REQUEST["Idsubmenu"];
$Idopcmenu			=$_REQUEST["Idopcmenu"];

$Id							= $_POST["Id"];
$Nombre						= $_POST["Nombrecotiza"];
$Sinaprobacion				= $_POST["Sinaprobacion"];
$Enviado					= $_POST["Enviado"];
$Fechaenvio					= $_POST["Fecha"];
$Aprobada					= $_POST["Aprobada"];
$Medioaprobacion			= $_POST["Medioaprobacion"];
$Nombreaprueba				= $_POST["Nombreaprueba"];
$Fechaaprueba				= $_POST["Fechaaprueba"];
$Motivonoaprueba			= $_POST["Motivonoaprueba"];
$Precio						= $_POST["Precio"];
$Tiempoentrega				= $_POST["Tiempoentrega"];
$Dispocision				= $_POST["Dispocision"];
$Lugar						= $_POST["Lugar"];
$Usuario					= $_POST["Usuario"];
$Medionoaprobacion			= $_POST["Medionoaprobacion"];
$Fechanoaprueba				= $_POST["Fechanoaprueba"];
$Aprueba					= $_POST["Aprueba"];


 

$query		="UPDATE Cotizaciones set Estado = '$Aprueba' Where Id='$Id'";
$result		=mysql_query($query, $id);

$query		="UPDATE Cotizacionasmecon set Nombre = '$Nombre', Sinaprobacion = '$Sinaprobacion', Enviado = '$Enviado', Fechaenvio = '$Fechaenvio', Aprobada = '$Aprueba', Medioaprobacion = '$Medioaprobacion', Nombreaprueba = '$Nombreaprueba', Fechaaprueba = '$Fechaaprueba', Motivonoaprueba = '$Motivonoaprueba', Precio = '$Precio', Tiempoentrega = '$Tiempoentrega', Dispocision = '$Dispocision', Lugar = '$Lugar', Usuario = '$Usuario', Fechanoaprueba = '$Fechanoaprueba', Medionoaprobacion = '$Medionoaprobacion' Where Idcotiz='$Id'";
$result		=mysql_query($query, $id);



?>

	
<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = 'act-cotizacion.php?Idmenu=<?=$Idmenu?>&Idsubmenu=<?=$Idsubmenu?>&Idopcmenu=<?=$Idopcmenu?>';
</script>	
