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

$Id							= $_POST["Id"];
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
$Subcliente					= $_POST["Sub_cliente"];
$Cantidad					= $_POST["Cantidad"];
$Dureza						= $_POST["Dureza"];
$Obtenida					= $_POST["Obtenida"];
$Material					= $_POST["Material"];
$Observaciones				= $_POST["Observaciones"];





$queryka		=	"UPDATE Fdimensional set Idcotiz = '$Idccotiz', Idorden = '$Idorden', Idfact = '$Idfact', Idrecep = '$Idrecep', Cliente = '$Cliente', Nit = '$Nitclien', Rip = '$Rip', Orden = '$Idorden', Plano = '$Plano', Fecha = '$Fecha', Descripcion = '$Descripcion', Proveedor = '$Proveedor', Subcliente = '$Subcliente', Cantidad = '$Cantidad', Dureza = '$Dureza', Obtenida = '$Obtenida', Material = '$Material', Observaciones = '$Observaciones' Where Id='$Id'";
$resultka		=	mysql_query($queryka, $id);	

		



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



$query			="SELECT* FROM Fdimensionalitems WHERE Idformato = '$Id' Order by Id ASC" ;
$result			=mysql_query($query, $id);
		
while($row		=mysql_fetch_array($result))
{
$IdF			=$row["Id"];
$Idtole			=$row["Tolerancia"];
$Idproc			=$row["Procedimiento"];
$Piezas			=$row["Piezas"];
$Medidas		=$row["Medidas"];
}


?>


<script type="text/javascript">
window.location.href = 'act-formato-d-4.php?Idf=<?=$IdF?>&Paso=1&Envia=1&Idtole=<?=$Idtole?>&Idproc=<?=$Idproc?>&Id=<?=$Idforma?>&Piezas=<?=$Piezas?>&Medidas=<?=$Medidas?>&Id=<?=$Id?>&Idccotiz=<?=$Idccotiz?>&Idord=<?=$Idorden?>&Idmenu=<?=$Idmenu?>&Idsubmenu=<?=$Idsubmenu?>&Idopcmenu=<?=$Idopcmenu?>';
</script>