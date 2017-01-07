<?
session_start();


include("../../includes/conexion.php");


$Id 		= $_REQUEST["Id"];

$query		="SELECT* FROM InstrumentosDOS where Id = '$Id'";
$result		=mysql_query($query, $id);
													
while($row	=mysql_fetch_array($result)){
						
$Nombre				=$row["Nombre"];
$TipoInstrumento	=$row["TipoInstrumento"];
$Responsable 		=$row["Responsable"];
$Ubicacion 			=$row["Ubicacion"];
$Denominacion 		=$row["Denominacion"];
$Codigo 			=$row["Codigo"];
$Serie 				=$row["Serie"];
$Manual 			=$row["Manual"];
$Fabricante 		=$row["Fabricante"];
$Modelo 			=$row["Modelo"];
$FabricadoEn 		=$row["FabricadoEn"];
$FechaServicio 		=$row["FechaServicio"];
$EstadoFisico		=$row["EstadoFisico"];
$ValorComercial 	=$row["ValorComercial"];
$Aplicacion 		=$row["Aplicacion"];
$Observaciones		=$row["Observaciones"];
$RangoIntervalo		=$row["RangoIntervalo"];
$IntervaloMedida	=$row["IntervaloMedida"];
$Resolucion			=$row["Resolucion"];
$DivisionEscala		=$row["DivisionEscala"];
$ClaseExactitud		=$row["ClaseExactitud"];
$Indicacion			=$row["Indicacion"];
$Tipo 				=$row["Tipo"];
$Accesorios 		=$row["Accesorios"];
$Procedimiento 		=$row["Procedimiento"];
$Laboratorio		=$row["Laboratorio"];
$Frecuencia1		=$row["Frecuencia"];
$Criterio			=$row["Criterio"];
$Repetibilidad		=$row["Repetibilidad"];
$Desviacion			=$row["Desviacion"];
$ErrorIncertidumbre	=$row["ErrorIncertidumbre"];
$Lin 				=$row["Linea"];
$Cat 				=$row["Categoria"];
$SubCat 			=$row["SubCategoria"];
$Opc 				=$row["Opcion"];
$Rut				=$row["Foto"];

}

$query2   ="SELECT * FROM Calibracionins WHERE Instrumento='$Id'";
$result2  =mysql_query($query2,$id);
while ($row2=mysql_fetch_array($result2)) {
$Certificado++;
$IdCAC 			=$row2["Id"];
$RangoMedicion 	=$row2["RangoMedicion"];
$Nombre 		=$row2["Certificado"];
$FechaCAC 		=$row2["Fecha"];
}
if($Certificado!=0){
$Calibracion=" CERTIFICADO DE CALIBRACIÓN Nº ".$IdCAC." ".$Nombre.". ".$FechaCAC;
}else{
$Calibracion="";
}


$Mensaje=$Denominacion.", RANGO DE MEDICIÓN ".$RangoMedicion.", IDENTIFICACIÓN ".$Codigo.$Calibracion;

echo($Mensaje)
?>


