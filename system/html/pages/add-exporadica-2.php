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


$horaactual	 			=	date("Y-m-d H:i:s");
$Usuario	 			=	$_SESSION['usuario'];

$Idmenu					=$_REQUEST["Idmenu"];
$Idsubmenu				=$_REQUEST["Idsubmenu"];
$Idopcmenu				=$_REQUEST["Idopcmenu"];



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


$sql="INSERT INTO  Cotizacionesexp (Cliente, Nit, Telefono, Direccion, Ciudad, Email, Servicio, Idserv, Asunto, Informacion, Alcance, Condiciones1, Condiciones2, Condiciones3, Condiciones4, Condiciones5, Condiciones6, Condiciones7, Nota, Fecha, Usuario)";
$sql.= "VALUES ('$Nombrecli', '$Nit', '$Telefono', '$Direccion', '$Ciudad', '$Email', '$Nombreser', '$Idserv', '$Asunto', '$Informacion', '$Alcance', '$Informe', '$Lugar', '$Transporte', '$Embalaje', '$Validez', '$Forma', '$Entrega', '$Descripcion', '$horaactual', '$Usuario')";
mysql_query($sql);	


		$query			="SELECT* FROM Cotizacionesexp Order by Id ASC" ;
		$result			=mysql_query($query, $id);
		
		While($row		=mysql_fetch_array($result))
		{
		$Id				=$row["Id"];
		}
		
		$sql="INSERT INTO  Cotizacionasmeconexp (Idcotiz)";
		$sql.= "VALUES ('$Id')";
		mysql_query($sql);	



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
window.location.href = 'add-exporadica.php?Idmenu=<?=$Idmenu?>&Idsubmenu=<?=$Idsubmenu?>&Idopcmenu=<?=$Idopcmenu?>';
</script>	