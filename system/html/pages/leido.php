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



$Casillero		=	$_SESSION['IdR'];

$Id					=$_REQUEST["Id"];

$queryka		=	"UPDATE Notificaciones set Muestra = 1 WHERE Id='$Id'";
$resultka		=	mysql_query($queryka, $id);

$query000		="SELECT COUNT(*) AS TOTAL FROM Notificaciones WHERE Muestra = 0" ;
$result000		=mysql_query($query000, $id);

While($row000	=mysql_fetch_array($result000))
{
$TOTAL			=$row000["TOTAL"];
if ($TOTAL>0) {
	$MsjNoti="Notificaciones";
}
else{
	$MsjNoti="No tiene notificaciones pendientes.";
}
if ($TOTAL>0) {
$Total=$TOTAL;
}else{
$Total="";	
}
}

echo($Total);
?>
