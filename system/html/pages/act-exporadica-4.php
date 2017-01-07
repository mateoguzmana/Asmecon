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


if($Aprueba	==	'SI')
{
						$query						="SELECT* FROM Cotizacionesexp where Id = '$Id'" ;
						$result						=mysql_query($query, $id);
						
						while($row					=mysql_fetch_array($result))
						{
						$Cliente					= $row["Cliente"];
						$Nit						= $row["Nit"];
						$Contacto					= $row["Contacto"];
						$Telefono					= $row["Telefono"];
						$Direccion					= $row["Direccion"];
						$Ciudad						= $row["Ciudad"];
						$Email						= $row["Email"];
						$Fax						= $row["Fax"];
						$Servicio					= $row["Servicio"];
						$Idservi					= $row["Idserv"];
						$Asunto						= $row["Asunto"];
						$Informacion				= $row["Informacion"];
						$Alcance					= $row["Alcance"];
						$Condiciones1				= $row["Condiciones1"];
						$Condiciones2				= $row["Condiciones2"];
						$Condiciones3				= $row["Condiciones3"];
						$Condiciones4				= $row["Condiciones4"];
						$Condiciones5				= $row["Condiciones5"];
						$Condiciones6				= $row["Condiciones6"];
						$Condiciones7				= $row["Condiciones7"];
						$Nota						= $row["Nota"];
						$Estado						= $row["Estado"];
						$Fecha						= $row["Fecha"];
						$Usuarir					= $row["Usuario"];
						}
						
						
		$sql="INSERT INTO  Cotizaciones (Cliente, Nit, Telefono, Direccion, Ciudad, Email, Servicio, Idserv, Asunto, Informacion, Alcance, Condiciones1, Condiciones2, Condiciones3, Condiciones4, Condiciones5, Condiciones6, Condiciones7, Nota, Fecha, Usuario, Estado)";
		$sql.= "VALUES ('$Cliente', '$Nit', '$Telefono', '$Direccion', '$Ciudad', '$Email', '$Servicio', '$Idservi', '$Asunto', '$Informacion', '$Alcance', '$Condiciones1', '$Condiciones2', '$Condiciones3', '$Condiciones4', '$Condiciones5', '$Condiciones6', '$Condiciones7', '$Nota', '$Fecha', '$Usuarir', '$Aprueba')";
		mysql_query($sql);	


		$query			="SELECT* FROM Cotizaciones Order by Id ASC" ;
		$result			=mysql_query($query, $id);
		
		While($row		=mysql_fetch_array($result))
		{
		$Idu			=$row["Id"];
		}
		
		$sql="INSERT INTO  Cotizacionasmecon (Idcotiz)";
		$sql.= "VALUES ('$Idu')";
		mysql_query($sql);	
		
		
		$query			="SELECT* FROM Cotizacionesitemexp where Idcotiz = '$Id' Order by Id ASC" ;
		$result			=mysql_query($query, $id);
		
		While($row		=mysql_fetch_array($result))
		{
		$Cant			=$row["Cant"];
		$Plano			=$row["Plano"];
		$Descripcion	=$row["Descripcion"];
		$Valor			=$row["Valor"];
		$Total			=$row["Total"];
		
			
			
		$sql="INSERT INTO  Cotizacionesitem (Idcotiz, Cant, Plano, Descripcion, Valor, Total)";
		$sql.= "VALUES ('$Idu', '$Cant', '$Plano', '$Descripcion', '$Valor', '$Total')";
		mysql_query($sql);	

			
		$Cant						= '';
		$Plano						= '';
		$Descripcion				= '';
		$Valor						= '';
		$Total						= '';
			
			
		}
		
		
	$query		="UPDATE Cotizacionasmecon set Nombre = '$Nombre', Sinaprobacion = '$Sinaprobacion', Enviado = '$Enviado', Fechaenvio = '$Fechaenvio', Aprobada = '$Aprueba', Medioaprobacion = '$Medioaprobacion', Nombreaprueba = '$Nombreaprueba', Fechaaprueba = '$Fechaaprueba', Motivonoaprueba = '$Motivonoaprueba', Precio = '$Precio', Tiempoentrega = '$Tiempoentrega', Dispocision = '$Dispocision', Lugar = '$Lugar', Usuario = '$Usuario', Fechanoaprueba = '$Fechanoaprueba', Medionoaprobacion = '$Medionoaprobacion' Where Idcotiz='$Idu'";
	$result		=mysql_query($query, $id);
	
	
	$SQL="Delete From Cotizacionesitemexp Where Idcotiz='$Id'";
	mysql_query($SQL);	
	
	$SQL="Delete From Cotizacionesexp Where Id='$Id'";
	mysql_query($SQL);	
	
	$SQL="Delete From Cotizacionasmeconexp Where Idcotiz='$Id'";
	mysql_query($SQL);	
			
		
					 $queryUSERS		="SELECT* FROM Clientex where Cedula = '$Nit'";
					 $resultUSERS		=mysql_query($queryUSERS, $id);
													
					 While($rowUSERS	=mysql_fetch_array($resultUSERS))
					 {
						$Nombre				=$rowUSERS["Nombre"];
						$Razon				=$rowUSERS["Razon"];
						$Cedula				=$rowUSERS["Cedula"];
						$Cod				=$rowUSERS["Cod"];
						$Rut				=$rowUSERS["Rut"];
						$Ciudad				=$rowUSERS["Ciudad"];
						$Direccion			=$rowUSERS["Dir"];
						$Telefono			=$rowUSERS["Telefono"];
						$Celular			=$rowUSERS["Celular"];
						$Contacto			=$rowUSERS["Contacto"];
						$Celcontacto		=$rowUSERS["Celcontacto"];
						$Email				=$rowUSERS["Email"];
						$Retencion			=$rowUSERS["Retencion"];
						$Contrasena			=$rowUSERS["Contrasena"];
						$Rut				=$rowUSERS["Rut"];
					 }
					 
					 
					$sql="INSERT INTO  Clientes (Nombre, Cedula, Ciudad, Dir, Telefono, Celular, Contacto, Celcontacto, Email, Retencion, Contrasena, Razon, Cod)";
					$sql.= "VALUES ('$Nombre','$Cedula','$Ciudad','$Direccion','$Telefono','$Celular','$Contacto','$Celcontacto','$Email','$Retencion','$Contrasena','$Razon','$Cod')";
					mysql_query($sql);


	$query		="UPDATE Clientex set Muestra = '1' Where Cedula='$Nit'";
	$result		=mysql_query($query, $id);
			
}
else
{

	$query		="UPDATE Cotizacionesexp set Estado = '$Aprueba' Where Id='$Id'";
	$result		=mysql_query($query, $id);
	
	$query		="UPDATE Cotizacionasmeconexp set Nombre = '$Nombre', Sinaprobacion = '$Sinaprobacion', Enviado = '$Enviado', Fechaenvio = '$Fechaenvio', Aprobada = '$Aprueba', Medioaprobacion = '$Medioaprobacion', Nombreaprueba = '$Nombreaprueba', Fechaaprueba = '$Fechaaprueba', Motivonoaprueba = '$Motivonoaprueba', Precio = '$Precio', Tiempoentrega = '$Tiempoentrega', Dispocision = '$Dispocision', Lugar = '$Lugar', Usuario = '$Usuario', Fechanoaprueba = '$Fechanoaprueba', Medionoaprobacion = '$Medionoaprobacion' Where Idcotiz='$Id'";
	$result		=mysql_query($query, $id);

}



?>

	
<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = 'act-exporadica.php?Idmenu=<?=$Idmenu?>&Idsubmenu=<?=$Idsubmenu?>&Idopcmenu=<?=$Idopcmenu?>';
</script>	
