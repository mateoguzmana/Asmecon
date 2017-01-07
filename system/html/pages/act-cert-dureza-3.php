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

$Id  			= $_REQUEST["Id"];

$Cliente 		= $_REQUEST["Cliente"];
$OrdenCompra 	= $_REQUEST["OrdenCompra"];
$Descripcion 	= $_REQUEST["Descripcion"];
$Material	 	= $_REQUEST["Material"];
$Trazabilidad 	= $_REQUEST["Trazabilidad"];
$Uk 			= $_REQUEST["UK"];
$TipoDureza 	= $_REQUEST["TipoDureza"];
$CargaAplicada 	= $_REQUEST["CargaAplicada"];
$Medidas 		= $_REQUEST["Medidas"];
$Puntos  		= $_REQUEST["Puntos"];
$Fecha 			= $_REQUEST["Fecha"];

$Rain 			= $_REQUEST["Rain"];
$Desviacion		= $_REQUEST["Desviacion"];
$Resultado 		= $_REQUEST["Resultado"];
$Req1 			= $_REQUEST["Req1"];
$Req2 			= $_REQUEST["Req2"];	
$Req3 			= $_REQUEST["Req3"];
$Req4 			= $_REQUEST["Req4"];
$Req5 			= $_REQUEST["Req5"];
$Req6 			= $_REQUEST["Req6"];
$Obt1 			= $_REQUEST["Obt1"];
$Obt2 			= $_REQUEST["Obt2"];
$Obt3 			= $_REQUEST["Obt3"];


$sql="UPDATE CertificadoDureza SET Cliente='$Cliente',OrdenCompra='$OrdenCompra',Descripcion='$Descripcion'
,Material='$Material',Trazabilidad='$Trazabilidad',Uk='$Uk',TipoDureza='$TipoDureza',CargaAplicada='$CargaAplicada',
Medidas='$Medidas',Puntos='$Puntos',Promedio='$Rain',Desviacion='$Desviacion',Resultado='$Resultado',Req1='$Req1'
,Req2='$Req2',Req3='$Req3',Req4='$Req4',Req5='$Req5',Req6='$Req6',Obt1='$Obt1',Obt2='$Obt2',Obt3='$Obt3',Fecha='$Fecha' WHERE Id='$Id'";
mysql_query($sql);


$query6 = "DELETE FROM CertificadoDurezaItems WHERE Idcertificado='$Id'";
mysql_query($query6,$id);

				for ($i=1;$i<=$Puntos;$i++) { 

					for($x=1;$x<=$Medidas;$x++){

						$Valor   		= $_REQUEST["Vlr".$i.$x];
						$NombreValor	= $i.$x;
						$query2  		= "INSERT INTO CertificadoDurezaItems (Idcertificado,Nombre,Valor) VALUES('$Id','$NombreValor','$Valor')";
						$result2 		= mysql_query($query2,$id);

					}

				}


$query7 = "DELETE FROM CertificadoDurezaItem1 WHERE Idcertificado='$Id'";
mysql_query($query7,$id);

				for ($s=1;$s<=$Puntos;$s++) { 

				$Derecho   		= $_REQUEST["Derecho".$s];
				$Desv   		= $_REQUEST["Desv".$s];
				$NombreVal		= $s;
				$query3  		= "INSERT INTO CertificadoDurezaItem1 (Idcertificado,Nombre,Promedio,Desviacion) 
				VALUES('$Id','$NombreVal','$Derecho','$Desv')";
				$result3 		= mysql_query($query3,$id);

				}


$query8 = "DELETE FROM CertificadoDurezaItem2 WHERE Idcertificado='$Id'";
mysql_query($query8,$id);

				for ($y=1;$y<=$Medidas;$y++) { 

				$Prom   		= $_REQUEST["Prom".$y];
				$NombreVa		= $y;
				$query4  		= "INSERT INTO CertificadoDurezaItem2 (Idcertificado,Nombre,Promedio) 
				VALUES('$Id','$NombreVa','$Prom')";
				$result4 		= mysql_query($query4,$id);

				}


$archivo1 = $_FILES['foto']['tmp_name'];

$archiv			=			$_FILES['foto']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo1))
{
$foto1= $Id.".".$ext;

(copy($archivo1, "CertificadoDureza/".$foto1));

$query="UPDATE CertificadoDureza set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);

}

?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
