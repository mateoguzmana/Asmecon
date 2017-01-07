<?
session_start();

include("../../includes/conexion.php");

// Tarea programada para las notificaciones por fecha de calibración y verificación Mateo Guzmán. 
// Variables importantes
/*
* Fecha actual
* Fecha calibración
* Fecha Verificación
* Id instrumento
*/

$FechaActual	= date('Y-m-d');
$DiasActual     = date('d',strtotime($FechaActual));

//Funcion diferencia de días

function DiferenciaDias($Actual,$Proxima){
	if (!is_integer($Actual)) $Actual = strtotime($Actual);
    if (!is_integer($Proxima)) $Proxima = strtotime($Proxima);  
    
       return floor(abs($Actual - $Proxima) / 60 / 60 / 24);
}

// Consulta calibración

$query1  		= "SELECT * FROM Calibracionins";
$result1 		= mysql_query($query1,$id);
while 			($row1=mysql_fetch_array($result1)) {
$IdCali 		= $row1["Id"];
$CodigoCali 	= $row1["Codigo"];
$InstrumentoCali= $row1["Instrumento"];
$FechaCali 		= $row1["FechaVence"];

// Consulta codigo
$queryDD 		= "SELECT * FROM InstrumentosDOS WHERE Id='$InstrumentoCali'";
$resultDD 		= mysql_query($queryDD,$id);
while ($rowDD 	=mysql_fetch_array($resultDD)) {
$CodigoCali 	=$rowDD["Codigo"];
}
//Diferencia de días

$DiferenciaCali = DiferenciaDias($FechaActual,$FechaCali);

// Condición para insertar en la base de datos la notificación
if($DiferenciaCali<=5) {

	$TextoCA    ="Faltan ".$DiferenciaCali." días para calibrar el instrumento ".$CodigoCali;


	$queryCA    = "INSERT INTO Notificaciones (Nombre,Texto,Fecha,Muestra)
	VALUES ('Calibración','$TextoCA','$FechaActual',0)";
	$resultCA   = mysql_query($queryCA,$id);
}
}

// Consulta verificación
$query2  		= "SELECT * FROM Verificacionins";
$result2 		= mysql_query($query2,$id);		
while 			($row2=mysql_fetch_array($result2)) {
$IdVeri			= $row2["Id"];
$InstrumentoVeri= $row2["Instrumento"];
$FechaVeri  	= $row2["Proxima"];

// Consulta codigo
$querySS 		= "SELECT * FROM InstrumentosDOS WHERE Id='$InstrumentoVeri'";
$resultSS 		= mysql_query($querySS,$id);
while ($rowSS 	= mysql_fetch_array($resultSS)) {
$CodigoVeri 	=$rowSS["Codigo"];
}
//Diferencia de días
$DiferenciaVeri = DiferenciaDias($FechaActual,$FechaVeri);

// Condición para insertar en la base de datos la notificación
if($DiferenciaVeri<=5) {

	$TextoVE    ="Faltan ".$DiferenciaVeri." días para verificar el instrumento ".$CodigoVeri;


	$queryVE    = "INSERT INTO Notificaciones (Nombre,Texto,Fecha,Muestra)
	VALUES ('Verificación','$TextoVE','$FechaActual',0)";
	$resultVE   = mysql_query($queryVE,$id);
}

}		

?>
