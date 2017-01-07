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






$Fecha					= date("Y-m-d H:i:s");
$Usuario	 			= $_SESSION['usuario'];

$Idf						= $_POST["Idf"];
$Idforma					= $_POST["Id"];
$Idmenu						= $_POST["Idmenu"];
$Idsubmenu					= $_POST["Idsubmenu"];
$Idopcmenu					= $_POST["Idopcmenu"];
$Medidas					= $_POST["Medidas"];
$Piezas						= $_POST["Piezas"];
$Envia						= $_POST["Envia"];
$Idtole						= $_POST["Idtole"];
$Idproc						= $_POST["Idproc"];


$queryka		=	"UPDATE Fdimensionalitems set Idformato = '$Idforma', Piezas = '$Piezas', Medidas = '$Medidas', Procedimiento = '$Idproc', Tolerancia = '$Idtole' Where Id='$Idf'";
$resultka		=	mysql_query($queryka, $id);	
		
$SQL	="Delete From Fdimensionalitemsc Where Idformato = '$Idforma' and Idformaitem = '$Idf'";
mysql_query($SQL);	






                                                            for ($a = 1; $a <= $Piezas; $a++) 
                                                            {
                                                                //echo 'PIEZA: '.$a.'<br>';
																
																for ($o = 1; $o <= $Medidas; $o++) 
                                                                {
																	
																	//echo 'MEDIDA: '.$o.'<br>';
																	
																	$Valor					=$_REQUEST["Vlr".$o];	
																	$Valor1					=$_REQUEST["Vlr1".$o];	
																	$Valor2					=$_REQUEST["Vlr2".$o];	

																	$Valor3					=$_REQUEST["Itm".$a.$o];
																	
																	$Valor3 				=str_ireplace(",",".",$Valor3);
																	
																	if( ($Valor3 <= $Valor1) && ($Valor3 >= $Valor2))
																	{
																	$cump	=	'CUMPLE';
																	}
																	else
																	{
																	$cump	=	'NO CUMPLE';	
																	}
																	//echo $Valor.' - '.$Valor1.' - '.$Valor2.' - '.$Valor3.' = '.$cump.'<br>';	
																	
																	
																	
																	
																	
																	$sql="INSERT INTO Fdimensionalitemsc (Idformato, Idformaitem, Pieza, Medida, Ref, Desde, Hasta, Valor, Resultado)";
																	$sql.= "VALUES ('$Idforma', '$Idf', '$a', '$o', '$Valor', '$Valor1', '$Valor2', '$Valor3', '$cump')";
																	mysql_query($sql);	
																	
																	
																	
																}
																
															}

?>

<script type="text/javascript">

window.location.href = '<?=$_SESSION['anteriorx']?>';
</script>

