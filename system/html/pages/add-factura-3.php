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






$Fecha					= date("Y-m-d H:i:s");
$Usuario	 			= $_SESSION['usuario'];

$Idorden					= $_POST["Id"];
$Idcotiz					= $_POST["Idcotiz"];


		$query			="SELECT* FROM Cotizaciones where Id = '$Idcotiz'" ;
		$result			=mysql_query($query, $id);
		
		While($row		=mysql_fetch_array($result))
		{
		$Nit			=$row["Nit"];
		}
		
		
		$query			="SELECT* FROM Clientes where Cedula = '$Nit'" ;
		$result			=mysql_query($query, $id);
		
		While($row		=mysql_fetch_array($result))
		{
		$Nit			=$row["Cedula"];
		$Cod			=$row["Cod"];
		$Nombre			=$row["Nombre"];
		$Razon			=$row["Razon"];
		$Ciudad			=$row["Ciudad"];
		$Dir			=$row["Dir"];
		$Tel1			=$row["Telefono"];
		$Tel2			=$row["Celular"];
		}






$servicio					= $_POST["servicio"];



$Fechaf						= $_POST["Fechaf"];
$Fechau						= $_POST["Fechau"];
$Rte						= $_POST["Rte"];
$Ica						= $_POST["Ica"];
$Rteiva						= $_POST["Rteiva"];
$Recibo						= $_POST["Recibo"];
$Banco						= $_POST["Banco"];
$Servicios					= $_POST["Servicios"];
$Clase						= $_POST["Clase"];
$Notas						= $_POST["Notas"];

$Valor						= $_POST["GRANTOTAL"];
$Iva						= $_POST["IVA"];
$Total						= $_POST["GRANTOTAL2"];

$Valorreal					= $Total - ($Rte+$Ica+$Rteiva);





$sql="INSERT INTO Facturas (Idorden, Idcotiz, Nit, Codigo, Razon, Direccion, Telefono, Ciudad, Valor, Iva, Total, Fechaf, Fechau, Estado, Usuario, Fechacrea)";
$sql.= "VALUES ('$Idorden', '$Idcotiz', '$Nit', '$Cod', '$Razon', '$Dir', '$Tel1', '$Ciudad', '$Valor', '$Iva', '$Total', '$Fechaf', '$Fechau', 'SIN CANCELAR', '$Usuario', '$Fecha')";
mysql_query($sql);


		$query			="SELECT* FROM Facturas Order by Id ASC" ;
		$result			=mysql_query($query, $id);
		
		While($row		=mysql_fetch_array($result))
		{
		$Id				=$row["Id"];
		}
		
		
		
$query		="UPDATE Ordenes set Factura = '$Id', Fechafact = '$Fechaf', Fechafin = '$Fechau', Aprobo = '$Usuario' Where Id='$Idorden'";
$result		=mysql_query($query, $id);







?>


<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anteriorx']?>';
</script>