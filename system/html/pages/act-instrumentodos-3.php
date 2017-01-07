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

//Identificación

$Linea 				=$_REQUEST["Linea"];
$Categoria 			=$_REQUEST["Categoria"];
$SubCategoria 		=$_REQUEST["SubCategoria"];
$Opcion 			=$_REQUEST["Opcion"];

//General

$Id 				=$_REQUEST["Id"];
$Nombre				=$_REQUEST["Nombre"];
$TipoInstrumento	=$_REQUEST["TipoInstrumento"];
$Responsable 		=$_REQUEST["Responsable"];
$Ubicacion 			=$_REQUEST["Ubicacion"];
$Denominacion 		=$_REQUEST["Denominacion"];
$Serie 				=$_REQUEST["Serie"];
$Manual 			=$_REQUEST["Manual"];
$Fabricante 		=$_REQUEST["Fabricante"];
$Modelo 			=$_REQUEST["Modelo"];
$FabricadoEn 		=$_REQUEST["FabricadoEn"];
$FechaServicio 		=$_REQUEST["FechaServicio"];
$EstadoFisico 		=$_REQUEST["EstadoFisico"];
$ValorComercial 	=$_REQUEST["ValorComercial"];
$Aplicacion 		=$_REQUEST["Aplicacion"];
$Observaciones 		=$_REQUEST["Observaciones"];

//Caracteristicas Metrologicas

$RangoIntervalo 	=$_REQUEST["RangoIntervalo"];
$IntervaloMedida 	=$_REQUEST["IntervaloMedida"];
$Resolucion 		=$_REQUEST["Resolucion"];	
$DivisionEscala 	=$_REQUEST["DivisionEscala"];
$ClaseExactitud 	=$_REQUEST["ClaseExactitud"];
$Indicacion 		=$_REQUEST["Indicacion"];
$Tipo 				=$_REQUEST["Tipo"];
$Accesorios 		=$_REQUEST["Accesorios"];

//Datos Calibración

$Procedimiento 		=$_REQUEST["Procedimiento"];
$Laboratorio 		=$_REQUEST["Laboratorio"];
$Frecuencia 		=$_REQUEST["Frecuencia"];
$Criterio 			=$_REQUEST["Criterio"];
$Repetibilidad 		=$_REQUEST["Repetibilidad"];
$Desviacion 		=$_REQUEST["Desviacion"];
$ErrorIncertidumbre =$_REQUEST["ErrorIncertidumbre"];

$ValorComercial		=	 str_replace("$","",$ValorComercial);
$ValorComercial		=	 str_replace(" ","",$ValorComercial);
$ValorComercial		=	 str_replace(",","",$ValorComercial);
$ValorComercial		=	 str_replace("_","",$ValorComercial);
$ValorComercial		=	 str_replace("___","",$ValorComercial);
$ValorComercial		=	 str_replace("__","",$ValorComercial);







// Consulta para el código viejo
$queryRX 			="SELECT * FROM InstrumentosDOS WHERE Id='$Id'";
$resultRX 			=mysql_query($queryRX,$id);
while 				($rowRX=mysql_fetch_array($resultRX)) {
$CodigoViejo 		=$rowRX["Codigo"]; 
}
// Fin de consulta de el código viejo





// Algoritmo del código
if($Ubicacion=="2"){
$Area   ="01";
}
elseif ($Ubicacion=="3") {
$Area 	="03";
}
elseif ($Ubicacion=="4") {
$Area 	="02";
}else{
$Area 	="";
}

$queryLL 			="SELECT * FROM OpcMediciones WHERE Id='$Opcion'";
$resultLL 			=mysql_query($queryLL,$id);
while 				($rowLL=mysql_fetch_array($resultLL)) {
$Inicial 			=$rowLL["Inicial"];
}

$IdReplace=(int)$Id;
$len=strlen($IdReplace);
if($len==1){
$IdReplace="0".$IdReplace;
}
else{
$IdReplace=$IdReplace;
}
$queryONE 			="SELECT * FROM Areas WHERE Id='$Linea'";
$resultONE 			=mysql_query($queryONE,$id);
while 				($rowONE=mysql_fetch_array($resultONE)) {
$CodONE 			=$rowONE["Codigo"];
}
$queryTWO 			="SELECT * FROM CatMediciones WHERE Id='$Categoria'";
$resultTWO 			=mysql_query($queryTWO,$id);
while 				($rowTWO=mysql_fetch_array($resultTWO)) {
$CodTWO 			=$rowTWO["Codigo"];
}
$queryTRE 			="SELECT * FROM SubMediciones WHERE Id='$SubCategoria'";
$resultTRE 			=mysql_query($queryTRE,$id);
while 				($rowTRE=mysql_fetch_array($resultTRE)) {
$CodTRE 			=$rowTRE["Codigo"];
}
// Fin recopilación

$PalabrasCodigo=$Area."-".$CodONE.".".$CodTWO.".".$CodTRE."-".$Inicial.$IdReplace;
$Codigo=$PalabrasCodigo;

// Renombrando la carpeta de el directorio
$RutaVieja="instrumentosdos/explora/server/php/files/".$CodigoViejo;
$RutaNueva="instrumentosdos/explora/server/php/files/".$Codigo;

fopen($RutaVieja, "r");
rename($RutaVieja, $RutaNueva); 

// Fin de el cambio de nombre

$queryka="UPDATE InstrumentosDOS set Nombre='$Nombre', TipoInstrumento='$Opcion', 
Responsable='$Responsable', Ubicacion='$Ubicacion', Denominacion='$Denominacion', Codigo='$Codigo', 
Serie='$Serie', Manual='$Manual', Fabricante='$Fabricante', Modelo='$Modelo', FabricadoEn='$FabricadoEn', 
FechaServicio='$FechaServicio', EstadoFisico='$EstadoFisico', ValorComercial='$ValorComercial', Aplicacion='$Aplicacion', 
Observaciones='$Observaciones', RangoIntervalo='$RangoIntervalo', IntervaloMedida='$IntervaloMedida', 
Resolucion='$Resolucion', DivisionEscala='$DivisionEscala', ClaseExactitud='$ClaseExactitud', Indicacion='$Indicacion', 
Tipo='$Tipo', Accesorios='$Accesorios', Procedimiento='$Procedimiento', Laboratorio='$Laboratorio', Frecuencia='$Frecuencia', 
Criterio='$Criterio', Repetibilidad='$Repetibilidad', Desviacion='$Desviacion', ErrorIncertidumbre='$ErrorIncertidumbre',
Linea='$Linea',Categoria='$Categoria',SubCategoria='$SubCategoria',Opcion='$Opcion'
where Id='$Id'";

$resultka		=	mysql_query($queryka, $id);		

$query3="UPDATE InstrumentosDOS set Codigo='$Codigo' Where Id='$Id'";
$result3=mysql_query($query3, $id);
//Fin del algoritmo para el codigo


//Foto

$archivo1 = $_FILES['foto']['tmp_name'];

$archiv			=			$_FILES['foto']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo1))
{
$foto1= $Id.".".$ext;

(copy($archivo1, "instrumentosdos/".$foto1));

$query="UPDATE InstrumentosDOS set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);

}


?>

<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = '<?=$_SESSION['anterior']?>';
</script>	
