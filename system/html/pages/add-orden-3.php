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


$Fechah					= date("Y-m-d H:i:s");
$Usuario				= $_SESSION['usuario'];	

$Idmenu					= $_REQUEST["Idmenu"];
$Idsubmenu				= $_REQUEST["Idsubmenu"];
$Idopcmenu				= $_REQUEST["Idopcmenu"];


$Idcotiz					= $_POST["Id"];
$Fechaord					= $_POST["Fechaord"];
$Fechaentrega				= $_POST["Fechaentrega"];


$Valororg					= $_POST["TOTAL"];
$Valor						= $_POST["GRANTOTAL"];

$Ordencte					= $_POST["Ordencte"];


$sql="INSERT INTO Ordenes (Idcotiz, Fechaord, Fechaentrega, Valororg, Valor, Fechacrea, Usuario, Ordencte)";
$sql.= "VALUES ('$Idcotiz', '$Fechaord', '$Fechaentrega', '$Valororg', '$Valor', '$Fechah', '$Usuario', '$Ordencte')";
mysql_query($sql);	


		$query			="SELECT* FROM Ordenes Order by Id ASC" ;
		$result			=mysql_query($query, $id);
		
		While($row		=mysql_fetch_array($result))
		{
		$Id				=$row["Id"];
		}
		



$query		="UPDATE Cotizaciones set Orden = '$Id' Where Id='$Idcotiz'";
$result		=mysql_query($query, $id);

		
for ( $i = 1 ; $i <= 6 ; $i ++) 
{	
$CONCEP						= $_POST["CONCEP".$i];
$CANT						= $_POST["CANT".$i];
$OPC						= $_POST["OPC".$i];	
$VLR						= $_POST["VLR".$i];	
$TOTAL						= $_POST["TOTAL".$i];	

	
	
		$sql="INSERT INTO  Ordenesitem (Idcotiz, Idorden, Operacion, Cant, Opc, Unidad, Total)";
		$sql.= "VALUES ('$Idcotiz', '$Id', '$CONCEP', '$CANT', '$OPC', '$VLR', '$TOTAL')";
		mysql_query($sql);	
		
	
	
}



?>


<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = 'add-orden.php?Idmenu=<?=$Idmenu?>&Idsubmenu=<?=$Idsubmenu?>&Idopcmenu=<?=$Idopcmenu?>';
</script>