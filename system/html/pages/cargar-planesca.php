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

$_SESSION['anterior']	=	$_SERVER['REQUEST_URI']; 
				

					
					$Idt					=$_REQUEST["IdPlan"];

					$query55				="SELECT * FROM Calibracionins WHERE Id='$Idt'";
					$result55 				=mysql_query($query55,$id);
					while ($row55			=mysql_fetch_array($result55)) {
					$IdUS 					=$row55["Instrumento"];
					$IdCAC 					=$row55["Id"];
					$Certificado			=$row55["Certificado"];
					$Incertidumbre			=$row55["Incertidumbre"];
					$Desviacion				=$row55["Desviacion"];
					$FechaCAC 				=$row55["Fecha"];
					$FechaVence				=$row55["FechaVence"];
					$Resultado 				=$row55["Resultado"];
					$ResponsableCAC         =$row55["Responsable"]; 	
					$ToleranciaProceso 		=$row55["ToleranciaProceso"];
					$DesviacionMaxima 		=$row55["DesviacionMaxima"];
					$ToleranciaDesviacion  	=$row55["ToleranciaDesviacion"];
					$Medicion 				=$row55["Medicion"];
					$Unidad 				=$row55["Unidad"];
					$RangoMedicion			=$row55["RangoMedicion"];
					$RutCAC 				=$row55["Foto"];
					$Muestra 				=$row55["Muestra"];
					$Action++;
					}										

					if($Frecuencia1=="360"){
					$Dato="1 AÑO | 360";
					}
					elseif ($Frecuencia1=="720") {
					$Dato="2 AÑOS | 720";
					}
					elseif ($Frecuencia1=="1080") {
					$Dato="3 AÑOS | 1080";
					}
					elseif ($Frecuencia1=="1440") {
					$Dato="4 AÑOS | 1440";
					}
					elseif ($Frecuencia1=="1800") {
					$Dato="5 AÑOS | 1800";
					}
					elseif ($Frecuencia1=="2196") {
					$Dato="6 AÑOS | 2196";
					}
					elseif ($Frecuencia1=="3600") {
					$Dato="10 AÑOS | 3600";
					}


					$jsondata= array(
					"IdIns"=>$IdUS,
					"IdCAC"=>$IdCAC,
					"Certificado"=>$Certificado,
					"Incertidumbre"=>$Incertidumbre,
					"Desviacion"=>$Desviacion,
					"FechaCAC"=>$FechaCAC,
					"FechaVence"=>$FechaVence,
					"Resultado"=>$Resultado,
					"ResponsableCAC"=>$ResponsableCAC,
					"ToleranciaProceso"=>$ToleranciaProceso,
					"DesviacionMaxima"=>$DesviacionMaxima,
					"ToleranciaDesviacion"=>$ToleranciaDesviacion,
					"Medicion"=>$Medicion,
					"Unidad"=>$Unidad,
					"RangoMedicion"=>$RangoMedicion,
					"RutCAC"=>$RutCAC,
					"Muestra"=>$Muestra,
					"Formulario"=>$Action
					);
					
					echo json_encode($jsondata)
?>