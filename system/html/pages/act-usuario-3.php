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
$Nombre				=$_REQUEST["Nombre"];
$Cedula				=$_REQUEST["Cedula"];
$Email				=$_REQUEST["email"];
$Tipo				=$_REQUEST["tipo"];
$Contrasena			=$_REQUEST["Contrasena"];



$queryka		=	"UPDATE Usuarios set Nombre = '$Nombre', Cedula = '$Cedula', Email = '$Email', Clave = '$Contrasena', Tipo = '$Tipo' Where Id='$Id'";
$resultka		=	mysql_query($queryka, $id);
				


$queryevep			="SELECT* FROM Informacion";
$resultevep			=mysql_query($queryevep, $id);

while($rowevep		=mysql_fetch_array($resultevep))
{
$Empresa			=$rowevep["Nombre"];
$EmailEmpresa		=$rowevep["Email"];
$DirEmpresa			=$rowevep["Dir"];
$TelefonoEmpresa	=$rowevep["Telefono"];
$CiudadEmpresa		=$rowevep["Ciudad"];
$PaisEmpresa		=$rowevep["Pais"];
$CodigoEmpresa		=$rowevep["Codigo"];
}



$destinatario = $Email; 

$asunto = "ACTUALIZACION DE CUENTA"; 
$cuerpo = ' 
<font-family: "Arial">
<FONT FACE="arial" SIZE=2>
<br><br>
<strong>'.$Nombre.'</strong>, su cuenta se ha actualizado con exito, a continuacion le ofrecemos los datos de acceso.
<br><br>
<strong> INFORMACION DE CUENTA</strong><br><br>
<strong> NOMBRE USUARIO: </strong>' .$usuario.' <br>
<strong> NOMBRE: </strong>' .$Nombre.' <br>
<strong> EMAIL: </strong> ' .$Email.'  <br>
<strong> CLAVE DE ACCESO: </strong> ' .$Contrasena .' <br><br><br>




Cualquier inquietud sera atendida con gusto.<br><br>
'.$Empresa.'<br>
'.$EmailEmpresa.'<br>
'.$TelefonoEmpresa.'<br>
'.$DirEmpresa.', '.$CiudadEmpresa.'<br>

</font>
<br> 
<br>';

$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: ".$Empresa." <".$EmailEmpresa.">\r\n"; 
//$headers .= "Bcc: info@rapibox.net\r\n"; 
$headers .= "Bcc: ".$EmailEmpresa."\r\n"; 
//dirección de respuesta, si queremos que sea distinta que la del remitente 
$headers .= "Reply-To:".$EmailEmpresa."\r\n"; 


mail($destinatario,$asunto,$cuerpo,$headers); 
				
				

?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
