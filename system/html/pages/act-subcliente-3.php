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



$Casillero		=	$_SESSION['IdR'];

$Id					=$_REQUEST["Id"];
$Cliente			=$_REQUEST["Cliente"];
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



$queryka		=	"UPDATE Clientesde set Idcliente = '$Cliente', Nombre = '$Nombre', Cedula = '$Cedula', Ciudad = '$Ciudad', Dir = '$Dir', Telefono = '$Telefono', Celular = '$Celular', Contacto = '$Contacto', Celcontacto = '$Celcontacto', Email = '$Email', Retencion = '$Retencion', Contrasena = '$Contrasena' , Razon = '$Razon' , Cod = '$Cod' Where Id='$Id'";
$resultka		=	mysql_query($queryka, $id);
				

$archivo1 = $_FILES['rut']['tmp_name'];

$archiv			=			$_FILES['rut']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo1))
{
$foto1= $Id.".".$ext;

(copy($archivo1, "subclientes/".$foto1));

$query="UPDATE Clientesde set Rut='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);

}



?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
