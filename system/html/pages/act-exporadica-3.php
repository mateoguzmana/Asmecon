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

$Id					=$_REQUEST["Id"];
$Idserv				=$_REQUEST["Idserv"];
$Nombreser			=$_REQUEST["Nombreser"];
$Idcliente			=$_REQUEST["Idcliente"];
$Nombrecli			=$_REQUEST["Nombrecli"];
$Nit				=$_REQUEST["Nit"];
$Direccion			=$_REQUEST["Direccion"];
$Ciudad				=$_REQUEST["Ciudad"];
$Telefono			=$_REQUEST["Telefono"];
$Email				=$_REQUEST["Email"];
$Asunto				=$_REQUEST["Asunto"];
$Informacion		=$_REQUEST["Informacion"];
$Alcance			=$_REQUEST["Alcance"];
$Informe			=$_REQUEST["Informe"];
$Lugar				=$_REQUEST["Lugar"];
$Transporte			=$_REQUEST["Transporte"];
$Embalaje			=$_REQUEST["Embalaje"];
$Validez			=$_REQUEST["Validez"];
$Forma				=$_REQUEST["Forma"];
$Entrega			=$_REQUEST["Entrega"];
$Descripcion		=$_REQUEST["Descripcion"];
 

$query		="UPDATE Cotizacionesexp set Cliente = '$Nombrecli', Nit = '$Nit', Telefono = '$Telefono', Direccion = '$Direccion', Ciudad = '$Ciudad', Email = '$Email', Fax = '$Fax', Servicio = '$Nombreser', Idserv = '$Idserv', Asunto = '$Asunto', Informacion = '$Informacion', Alcance = '$Alcance', Condiciones1 = '$Informe', Condiciones2 = '$Lugar', Condiciones3 = '$Transporte', Condiciones4 = '$Embalaje', Condiciones5 = '$Validez', Condiciones6 = '$Forma', Condiciones7 = '$Entrega', Nota = '$Descripcion' Where Id='$Id'";
$result		=mysql_query($query, $id);


$SQL="Delete From Cotizacionesitemexp Where Idcotiz='$Id'";
mysql_query($SQL);




for ( $i = 1 ; $i <= 20 ; $i ++) 
{	
$cant						= $_POST["cant".$i];
$plano						= $_POST["plano".$i];
$descri						= $_POST["descri".$i];	
$vlr						= $_POST["vlr".$i];	

	if(!empty($cant) || !empty($plano) || !empty($descri) || !empty($vlr))	
	{
	$vlr					= str_replace(".","",$vlr);
	$total					= $vlr*$cant;
	
	
		$sql="INSERT INTO  Cotizacionesitemexp (Idcotiz, Cant, Plano, Descripcion, Valor, Total)";
		$sql.= "VALUES ('$Id', '$cant', '$plano', '$descri', '$vlr', '$total')";
		mysql_query($sql);	
		
	}
	
$cant						= '';
$plano						= '';
$descri						= '';
$vlr						= '';
$total						= '';
	
	
}


?>

	
<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = 'act-exporadica.php?Idmenu=<?=$Idmenu?>&Idsubmenu=<?=$Idsubmenu?>&Idopcmenu=<?=$Idopcmenu?>';
</script>	
