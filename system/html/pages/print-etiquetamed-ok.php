<?
session_start(); 

include("../../includes/conexion.php");
include("phpqrcode/qrlib.php");

$horaactual 	= date("Y-m-d H:i:s");
$fechahoy 	    = date("Y-m-d");


$Id             = $_REQUEST["Id"];

                 $queryUSERS         ="SELECT * FROM InstrumentosDOS where Id = '$Id'";
                 $resultUSERS        =mysql_query($queryUSERS, $id);
                               
                 While($rowUSERS     =mysql_fetch_array($resultUSERS))
                 {
                 $Nombre             =$rowUSERS["Nombre"];
                 $TipoInstrumento    =$rowUSERS["TipoInstrumento"];
                 $Responsable        =$rowUSERS["Responsable"];
                 $Ubicacion          =$rowUSERS["Ubicacion"];
                 $Denominacion       =utf8_decode($rowUSERS["Denominacion"]);
                 $Codigo             =$rowUSERS["Codigo"];
                 $Serie              =$rowUSERS["Serie"];
                 $Manual             =$rowUSERS["Manual"];
                 $Fabricante         =$rowUSERS["Fabricante"];
                 $Modelo             =$rowUSERS["Modelo"];
                 $FabricadoEn        =$rowUSERS["FabricadoEn"];
                 $FechaServicio      =$rowUSERS["FechaServicio"];
                 $EstadoFisico       =$rowUSERS["EstadoFisico"];
                 $ValorComercial     =$rowUSERS["ValorComercial"];
                 $Aplicacion         =$rowUSERS["Aplicacion"];
                 $Observaciones      =$rowUSERS["Observaciones"];
                 $RangoIntervalo     =$rowUSERS["RangoIntervalo"];
                 $IntervaloMedida    =$rowUSERS["IntervaloMedida"];
                 $Resolucion         =$rowUSERS["Resolucion"];
                 $DivisionEscala     =$rowUSERS["DivisionEscala"];
                 $ClaseExactitud     =$rowUSERS["ClaseExactitud"];
                 $Indicacion         =$rowUSERS["Indicacion"];
                 $Tipo               =$rowUSERS["Tipo"];
                 $Accesorios         =$rowUSERS["Accesorios"];
                 $Procedimiento      =$rowUSERS["Procedimiento"];
                 $Laboratorio        =$rowUSERS["Laboratorio"];
                 $Frecuencia1        =$rowUSERS["Frecuencia"];
                 $Criterio           =$rowUSERS["Criterio"];
                 $Repetibilidad      =$rowUSERS["Repetibilidad"];
                 $Desviacion         =$rowUSERS["Desviacion"];
                 $ErrorIncertidumbre =$rowUSERS["ErrorIncertidumbre"];
                 $Lin                =$rowUSERS["Linea"];
                 $Cat                =$rowUSERS["Categoria"];
                 $SubCat             =$rowUSERS["SubCategoria"];
                 $Opc                =$rowUSERS["Opcion"];
                 $Rut                =$rowUSERS["Foto"];
                }
		
                $queryONE       ="SELECT * FROM Areas WHERE Id='$Lin'";
                $resultONE      =mysql_query($queryONE,$id);
                while         ($rowONE=mysql_fetch_array($resultONE)) {
                $NombreONE      =$rowONE["Nombre"];
                }

                $queryFF      ="SELECT * FROM CatMediciones where Id='$Cat'";
                $resultFF     =mysql_query($queryFF, $id);
                    
                while($rowFF    =mysql_fetch_array($resultFF))  {
                $NombreFF     =$rowFF["Nombre"];
                }


                $queryTRE       ="SELECT * FROM SubMediciones WHERE Id='$SubCat'";
                $resultTRE      =mysql_query($queryTRE,$id);
                while         ($rowTRE=mysql_fetch_array($resultTRE)) {
                $NombreTRE      =$rowTRE["Nombre"];
                }

                $queryLL      ="SELECT * FROM OpcMediciones WHERE Id='$Opc'";
                $resultLL       =mysql_query($queryLL,$id);
                while         ($rowLL=mysql_fetch_array($resultLL)) {
                $NombreLL       =$rowLL["Nombre"];
                }

                //Fabricando el tipo de instrumento
                 $Tipudo = $NombreONE." ".$NombreFF." ".$NombreTRE." | ".$Lin.".".$Cat.".".$SubCat;
                 //Fin de fabricacion

    // Código QR Versión 1.1 por Mateo Guzmán
    $codeContents ='ID: '.$Id.', CODIGO: '.$Codigo.", TIPO INSTRUMENTO: ".$Tipudo; 
     
    // Generando contenido
    QRcode::png($codeContents, $tempDir.'022.png', QR_ECLEVEL_L, 3); 
    
    // Mostrando 
    $QR= '<img src="022.png" width="100"/>';  

?>

<page backtop="0mm" backbottom="0mm" backleft="4mm" backright="4mm">
<table width="720">
<tr>
<td width="238">
<table width="238" cellspacing=0 cellpadding=1 colspan="2" class="table-responsive" style="text-align:center;border:0px solid;" border="0.5">
<tr>
<td colspan="1" width="120" height="40" style="font-size:10.5px;"><img src="logo3.jpg" width="120" height="45"></td>
<td rowspan="4" width="100"><?=$QR?></td>
</tr>
<tr>
<td colspan="1" width="120" height="auto" style="text-align:center;font-size:9px;"><?=$Denominacion?></td>
</tr>
<tr>
<td colspan="1" style="font-size:10.5px;"><?=$RangoIntervalo?></td>
</tr>
<tr>
<td colspan="1" style="font-size:12.5px;"><?=$Codigo?></td>
</tr>
</table>
</td>
<td width="238">
<table width="238" cellspacing=0 cellpadding=1 colspan="2" class="table-responsive" style="text-align:center;border:0px solid;" border="0.5">
<tr>
<td colspan="1" width="120" height="40" style="font-size:10.5px;"><img src="logo3.jpg" width="120" height="45"></td>
<td rowspan="4" width="100"><?=$QR?></td>
</tr>
<tr>
<td colspan="1" width="120" height="auto" style="text-align:center;font-size:9px;"><?=$Denominacion?></td>
</tr>
<tr>
<td colspan="1" style="font-size:10.5px;"><?=$RangoIntervalo?></td>
</tr>
<tr>
<td colspan="1" style="font-size:12.5px;"><?=$Codigo?></td>
</tr>
</table>
</td>
<td width="238">
<table width="238" cellspacing=0 cellpadding=1 colspan="2" class="table-responsive" style="text-align:center;border:0px solid;" border="0.5">
<tr>
<td colspan="1" width="120" height="40" style="font-size:10.5px;"><img src="logo3.jpg" width="120" height="45"></td>
<td rowspan="4" width="100"><?=$QR?></td>
</tr>
<tr>
<td colspan="1" width="120" height="auto" style="text-align:center;font-size:9px;"><?=$Denominacion?></td>
</tr>
<tr>
<td colspan="1" style="font-size:10.5px;"><?=$RangoIntervalo?></td>
</tr>
<tr>
<td colspan="1" style="font-size:12.5px;"><?=$Codigo?></td>
</tr>
</table>
</td>


</tr>


</table>
<page_footer></page_footer>
</page>
	
