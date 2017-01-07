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


$TOTAL					= $_REQUEST["Total"];

	$SQL="Delete From Certificado Where Id > 0";
	mysql_query($SQL);	


	


		for($i=1;$i<=$TOTAL;$i++)
		{

		  $Tipo					= $_REQUEST["pasa".$i];
		  
		//  echo $Tipo.'<br>';
		  
		  if($Tipo == 1)
		  {
			  
			$Idservicio		= $_REQUEST["Id".$i]; 


				$query			="SELECT* FROM Servicios where Id = '$Idservicio'" ;
				$result			=mysql_query($query, $id);
				
				While($row		=mysql_fetch_array($result))
				{
				$Nombre			=$row["Nombre"];
				}

			$sql="INSERT INTO  Certificado ( Idservicio, Nombre)";
			$sql.= "VALUES ('$Idservicio', '$Nombre')";
			mysql_query($sql);	
			  
		  }
		  
		}






?>


<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>