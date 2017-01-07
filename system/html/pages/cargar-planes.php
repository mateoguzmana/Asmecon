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
				

					
					$Idt						=$_REQUEST["IdPlan"];

									
					$query44					="SELECT * FROM Verificacionins WHERE Id='$Idt'";
					$result44 					=mysql_query($query44,$id);
					while ($row44				=mysql_fetch_array($result44)) {
					$IdIns 						=$row44["Instrumento"];
					$IdACT 						=$row44["Id"];
					$Fecha						=$row44["Fecha"];
					$Proxima					=$row44["Proxima"];
					$Frecuencia					=$row44["Frecuencia"];
					$Accion 					=$row44["Accion"];
					$Actividad					=$row44["Actividad"];
					$Observacion 				=$row44["Observacion"];
					$Responsable            	=$row44["Responsable"]; 
					$Muestra 					=$row44["Muestra"];
					$Action++;
					}
					$jsondata= array(
					"IdIns"=>$IdIns,
					"IdACT"=>$IdACT,
					"Fecha"=>$Fecha,
					"Proxima"=>$Proxima,
					"Frecuencia"=>$Frecuencia,
					"Accion"=>$Accion,
					"Actividad"=>$Actividad,
					"Observacion"=>$Observacion,
					"Responsable"=>$Responsable,
					"Muestra"=>$Muestra,
					"Formulario"=>$Action
					);
					/* $jsondata["IdIns"]		=$IdIns;
					$jsondata["IdACT"]			=$IdACT;
					$jsondata["Fecha"]			=$Fecha;
					$jsondata["Proxima"]		=$Proxima;
					$jsondata["Frecuencia"] 	=$Frecuencia;
					$jsondata["Accion"]			=$Accion;
					$jsondata["Actividad"]		=$Actividad;
					$jsondata["Observacion"]	=$Observacion;
					$jsondata["Responsable"]	=$Responsable; */

					echo json_encode($jsondata)

?>