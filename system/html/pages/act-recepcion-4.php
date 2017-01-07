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
$Fechasale					= $_POST["Fechasale"];
$Usuariosaca				= $_POST["Usuariosaca"];
$Observaciones				= $_POST["Observaciones"];
$Idservicio					= $_POST["Idservic"];





$query		="UPDATE Recepcion set Salida = '1', Fechasale = '$Fechasale', Certificado = '$Certificado', Observaciones = '$Observaciones', Usuariosaca = '$Usuariosaca' Where Id='$Id'";
$result		=mysql_query($query, $id);


$SQL="Delete From Recepciondocument Where Idrecep='$Id'";
mysql_query($SQL);	



			
			$contdoc				=0;
			
			$query					="SELECT* FROM Documentacion where Idservicio = '$Idservicio' and Activo = 0 and Muestra = 0 ORDER BY Nombre" ;
			$result					=mysql_query($query, $id);
			
			while($row				=mysql_fetch_array($result))
			{
			$Nombredoc				= $row["Nombre"];
			
			$contdoc++;
			
	
				$documen			= $_POST["documen".$contdoc];
				
					if(!empty($documen))	
					{
						
						
						$sql="INSERT INTO  Recepciondocument (Idrecep, Nombre, Valor)";
						$sql.= "VALUES ('$Id', '$Nombredoc', '$documen')";
						mysql_query($sql);	
					}
					
				$documen			= '';
			$Nombredoc				= '';
			}
			
			

?>

	
<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = 'act-recepcion.php?Idmenu=<?=$Idmenu?>&Idsubmenu=<?=$Idsubmenu?>&Idopcmenu=<?=$Idopcmenu?>';
</script>	
