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
$Usuario				= $_SESSION['Usuario'];	


$Nombre					= $_REQUEST["Nombre"];
$TOTAL					= $_REQUEST["Total"];
$Id						= $_REQUEST["Id"];


$SQL="Delete From Estado Where Nombre = '$Nombre'";
mysql_query($SQL);	




if(!empty($Nombre))
{
	


		for($i=1;$i<=$TOTAL;$i++)
		{

		  $Tipo					= $_REQUEST["pasa".$i];
		  
		//  echo $Tipo.'<br>';
		  
		  if($Tipo == 1)
		  {
			  
			$Idservicio		= $_REQUEST["Id".$i]; 
			$Cant			= $_REQUEST["Cant".$i];
			
			//echo $Idservicio;
			$sql="INSERT INTO  Estado (Nombre, Idservicio, Cant)";
			$sql.= "VALUES ('$Nombre', '$Idservicio', '$Cant')";
			mysql_query($sql);	


			  
			  
		  }
		  
		}







}

?>


<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anteriorx']?>';
</script>