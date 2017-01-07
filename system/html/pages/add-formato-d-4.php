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

$Idforma					= $_POST["Id"];
$Idmenu						= $_POST["Idmenu"];
$Idsubmenu					= $_POST["Idsubmenu"];
$Idopcmenu					= $_POST["Idopcmenu"];
$Medidas					= $_POST["Medidas"];
$Piezas						= $_POST["Piezas"];
$Envia						= $_POST["Envia"];
$Idtole						= $_POST["Idtole"];
$Idproc						= $_POST["Idproc"];




$sql="INSERT INTO Fdimensionalitems (Idformato, Piezas, Medidas, Procedimiento, Tolerancia)";
$sql.= "VALUES ('$Idforma', '$Piezas', '$Medidas', '$Idproc', '$Idtole')";
mysql_query($sql);	


$query			="SELECT* FROM Fdimensionalitems Order by Id ASC" ;
$result			=mysql_query($query, $id);
		
while($row		=mysql_fetch_array($result))
{
$Id				=$row["Id"];
}




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
																	$sql.= "VALUES ('$Idforma', '$Id', '$a', '$o', '$Valor', '$Valor1', '$Valor2', '$Valor3', '$cump')";
																	mysql_query($sql);	
																	
																	
																	
																}
																
															}
															
															
															
															

?>

<script type="text/javascript">

window.location.href = 'add-formato-d-3.php?Idf=<?=$Id?>&Paso=1&Envia=1&Idtole=<?=$Idtole?>&Idproc=<?=$Idproc?>&Id=<?=$Idforma?>&Piezas=<?=$Piezas?>&Medidas=<?=$Medidas?>&Idmenu=<?=$Idmenu?>&Idsubmenu=<?=$Idsubmenu?>&Idopcmenu=<?=$Idopcmenu?>';
</script>

