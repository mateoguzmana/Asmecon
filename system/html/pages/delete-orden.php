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


$Fechaing				= date("Y-m-d H:i:s");
$Usuario	 = $_SESSION['usuario'];


$Id						= $_REQUEST["Id"];

		$query			="SELECT* FROM Ordenes Where Id='$Id' Order by Id ASC" ;
		$result			=mysql_query($query, $id);
		
		While($row		=mysql_fetch_array($result))
		{
		$Idcotiz		=$row["Idcotiz"];
		}
		
		

if(!empty($Id))
{
	
$query		="UPDATE Cotizaciones set Orden = '' Where Id='$Idcotiz'";
$result		=mysql_query($query, $id);


$SQL="Delete From Ordenes Where Id='$Id'";
mysql_query($SQL);	

$SQL="Delete From Ordenesitem Where Idcotiz='$Id'";
mysql_query($SQL);	


}

?>


<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anteriorx']?>';
</script>