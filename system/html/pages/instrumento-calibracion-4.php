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

$Idmenux 	=$_REQUEST["Idmenu"];
$Idsubmenux =$_REQUEST["Idsubmenu"];
$Idopcmenux =$_REQUEST["Idopcmenu"];

$Id 					=$_REQUEST["Id"];

$archivo1 = $_FILES['image']['tmp_name'];

$archiv			=			$_FILES['image']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo1))
{
$foto1= $Id.".".$ext;


(copy($archivo1, "instrumentosdos/certificados/".$foto1));

$query="UPDATE Calibracionins set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);

}				

?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = 'act-instrumentodos-2.php?Id=<?=$Instrumento?>&Idmenu=<?=$Idmenux?>&Idsubmenu=<?=$Idsubmenux?>&Idopcmenu=<?=$Idopcmenux?>';
</script>	