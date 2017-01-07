<?
session_start();

if (empty($_SESSION['sesionx']))
{
?>
<script type="text/javascript">

	alert('Su sesion ha finalizado.');
	parent.location.href=('login.php');

</script>
<?
}

include("../../includes/conexion.php");
include("resize-class.php");


$Fechah					= date("Y-m-d H:i:s");
$Usuario				= $_SESSION['usuario'];	

$Idmenu					= $_REQUEST["Idmenu"];
$Idsubmenu				= $_REQUEST["Idsubmenu"];
$Idopcmenu				= $_REQUEST["Idopcmenu"];


$Nitclien					= $_POST["Nitclien"];
$Idfact						= $_POST["Idfact"];
$Idrecep					= $_POST["Idrecep"];
$Idorden					= $_POST["Idorden"];
$Idccotiz					= $_POST["Idcotiz"];
$Cliente					= $_POST["Cliente"];
$Rip						= $_POST["Rip"];
$Plano						= $_POST["Plano"];
$Fecha						= $_POST["Fecha"];
$Descripcion				= $_POST["Descripcion"];
$Proveedor					= $_POST["Proveedor"];
$Subcliente                 = $_POST["Sub_cliente"];
$Cantidad					= $_POST["Cantidad"];
$Dureza						= $_POST["Dureza"];
$Obtenida					= $_POST["Obtenida"];
$Material					= $_POST["Material"];
$Observaciones				= $_POST["Observaciones"];



$sql="INSERT INTO Fdimensional (Idcotiz, Idorden, Idfact, Idrecep, Cliente, Nit, Rip, Orden, Plano, Fecha, Descripcion, Proveedor, Subcliente, Cantidad, Dureza, Obtenida, Material, Observaciones)";
$sql.= "VALUES ('$Idccotiz', '$Idorden', '$Idfact', '$Idrecep', '$Cliente', '$Nitclien', '$Rip', '$Idorden', '$Plano', '$Fecha', '$Descripcion', '$Proveedor', '$Subcliente' ,'$Cantidad', '$Dureza', '$Obtenida', '$Material', '$Observaciones')";
mysql_query($sql);	


		$query			="SELECT* FROM Fdimensional Order by Id ASC" ;
		$result			=mysql_query($query, $id);
		
		While($row		=mysql_fetch_array($result))
		{
		$Id				=$row["Id"];
		}
		



		$archivo1 		= $_FILES['foto']['tmp_name'];
		
		$archiv			=			$_FILES['foto']['name'];
		$extension 		= 			explode(".",$archiv);
		$ext			= 			$extension[1];


	if(!empty($archivo1))
	{
	$foto1= $Id.".".$ext;
	
	(copy($archivo1, "Fdimensional/".$foto1));
	
	// *** 1) Initialise / load image
	$resizeObj = new resize("Fdimensional/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(1000, 1000, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("Fdimensional/".$foto1, 100);
	
	
	$query="UPDATE Fdimensional set Diagrama='$foto1' Where Id='$Id'";
	$result=mysql_query($query, $id);
	
	}





?>


<script type="text/javascript">
window.location.href = 'add-formato-d-3.php?Id=<?=$Id?>&Idccotiz=<?=$Idccotiz?>&Idord=<?=$Idorden?>&Idmenu=<?=$Idmenu?>&Idsubmenu=<?=$Idsubmenu?>&Idopcmenu=<?=$Idopcmenu?>';
</script>