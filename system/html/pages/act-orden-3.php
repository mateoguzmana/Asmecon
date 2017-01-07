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
$Usuario				= $_SESSION['usuario'];	


$Id							= $_POST["Id"];



$Idcotiz					= $_POST["Idcotiz"];
$Fechaord					= $_POST["Fechaord"];
$Fechaentrega				= $_POST["Fechaentrega"];


$Valororg					= $_POST["TOTAL"];
$Valor						= $_POST["GRANTOTAL"];

$Ordencte					= $_POST["Ordencte"];


$query		="UPDATE Ordenes set Idcotiz = '$Idcotiz', Fechaord = '$Fechaord', Fechaentrega = '$Fechaentrega', Valororg = '$Valororg', Valor = '$Valor', Usuario = '$Usuario', Ordencte = '$Ordencte'  Where Id='$Id'";
$result		=mysql_query($query, $id);


$SQL="Delete From Ordenesitem Where Idorden='$Id'";
mysql_query($SQL);	
		

		
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
window.location.href = '<?=$_SESSION['anteriorx']?>';
</script>