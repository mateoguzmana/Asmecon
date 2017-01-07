<?
session_start(); 

include("../../includes/conexion.php");

$horaactual           = date("Y-m-d H:i:s");
$fechahoy             = date("Y-m-d");


  $Id               =$_REQUEST["Id"];

  $query            ="SELECT * FROM CertificadoDureza WHERE Id='$Id'";
  $result           =mysql_query($query,$id);
  while($row        =mysql_fetch_array($result)){
  $Cliente          =$row["Cliente"];
  $OrdenCompra      =$row["OrdenCompra"];
  $Descripcion      =$row["Descripcion"];
  $Material         =$row["Material"];  
  $Trazabilidad     =$row["Trazabilidad"];
  $Uk               =$row["Uk"];
  $TipoDureza       =$row["TipoDureza"];
  $CargaAplicada    =$row["CargaAplicada"];
  $Medidas          =$row["Medidas"];
  $Puntos           =$row["Puntos"];
  $Rain             =$row["Promedio"];
  $Desviacion       =$row["Desviacion"];
  $Resultado        =$row["Resultado"];
  $Req1             =$row["Req1"];
  $Req2             =$row["Req2"];        
  $Req3             =$row["Req3"];
  $Req4             =$row["Req4"];
  $Req5             =$row["Req5"];
  $Req6             =$row["Req6"];
  $Obt1             =$row["Obt1"];
  $Obt2             =$row["Obt2"];
  $Obt3             =$row["Obt3"];
  $Foto             =$row["Foto"];
  $Fecha            =$row["Fecha"];
  }

  $query33          ="SELECT * FROM Clientes WHERE Id='$Cliente'";
  $result33         =mysql_query($query33,$id);
  while ($row33     =mysql_fetch_array($result33)){
  $NombreCliente    =$row33["Nombre"];
  $Rip              =$row33["Cedula"];
  }

  

  $queryXX          ="SELECT * FROM TipoDureza WHERE Id='$TipoDureza'";
  $resultXX         =mysql_query($queryXX,$id);
  while ($rowXX     =mysql_fetch_array($resultXX)){
  $NombreXX         =$rowXX["Nombre"];
  }

  $queryZZ          ="SELECT * FROM CertificadoDurezaItems WHERE Idcertificado='$Id'";
  $resultZZ         =mysql_query($queryZZ,$id);
  while($rowZZ      =mysql_fetch_array($resultZZ)){
  $Valor            =$rowZZ["Nombre"];
  }


  if($Medidas==1){
  $General="123";
  $Width=309;
  }elseif ($Medidas==2) {
  $General="121.5";
  $Width=154.5;
  }elseif ($Medidas==3) {
  $General="120";
  $Width=103;
  }elseif ($Medidas==4) {
  $General="118";
  $Width=77.25;
  }elseif ($Medidas==5) {
  $General="116";
  $Width=61.8;
  }elseif ($Medidas==6) {
  $General="110";
  $Width=53.5;
  }elseif ($Medidas==7) {
  $General="105";
  $Width=47;
  }elseif ($Medidas==8) {
  $General="105";
  $Width=40.12;
  }elseif ($Medidas==9) { 
  $General="105";
  $Width=35;
  }elseif ($Medidas==10) { 
  $General="96";
  $Width=33.5;
  }else{
  $Width="";  
  }

  $query44          ="SELECT * FROM InstrumentosDOS WHERE Id='$Trazabilidad'";
  $result44         =mysql_query($query44,$id);
  while ($row44     =mysql_fetch_array($result44)){
  $instrumento      =$row44["Codigo"];
  $Nombre           =$row44["Nombre"];
  $TipoInstrumento  =$row44["TipoInstrumento"];
  $Responsable      =$row44["Responsable"];
  $Ubicacion        =$row44["Ubicacion"];
  $Denominacion     =$row44["Denominacion"];
  $Codigo           =$row44["Codigo"];
  $Serie            =$row44["Serie"];
  $Manual           =$row44["Manual"];
  $Fabricante       =$row44["Fabricante"];
  $Modelo           =$row44["Modelo"];
  $FabricadoEn      =$row44["FabricadoEn"];
  $FechaServicio    =$row44["FechaServicio"];
  $EstadoFisico     =$row44["EstadoFisico"];
  $ValorComercial   =$row44["ValorComercial"];
  $Aplicacion       =$row44["Aplicacion"];
  $Observaciones    =$row44["Observaciones"];
  $RangoIntervalo   =$row44["RangoIntervalo"];
  $IntervaloMedida  =$row44["IntervaloMedida"];
  $Resolucion       =$row44["Resolucion"];
  $DivisionEscala   =$row44["DivisionEscala"];
  $ClaseExactitud   =$row44["ClaseExactitud"];
  $Indicacion       =$row44["Indicacion"];
  $Tipo             =$row44["Tipo"];
  $Accesorios       =$row44["Accesorios"];
  $Procedimiento    =$row44["Procedimiento"];
  $Laboratorio      =$row44["Laboratorio"];
  $Frecuencia1      =$row44["Frecuencia"];
  $Criterio         =$row44["Criterio"];
  $Repetibilidad    =$row44["Repetibilidad"];
  $ErrorIncertidumbre =$row44["ErrorIncertidumbre"];
  $Lin              =$row44["Linea"];
  $Cat              =$row44["Categoria"];
  $SubCat           =$row44["SubCategoria"];
  $Opc              =$row44["Opcion"];
  $Rut              =$row44["Foto"];

  }

  $query2           ="SELECT * FROM Calibracionins WHERE Instrumento='$Trazabilidad'";
  $result2          =mysql_query($query2,$id);
  while ($row2      =mysql_fetch_array($result2)) {
  $Certificado++;
  $IdCAC            =$row2["Id"];
  $RangoMedicion    =$row2["RangoMedicion"];
  $Nombre           =$row2["Certificado"];
  $FechaCAC         =$row2["Fecha"];
  }
  if($Certificado!=0){
  $Calibracion      =" CERTIFICADO DE CALIBRACIÓN Nº ".$IdCAC." ".$Nombre.". ".$FechaCAC;
  }else{
  $Calibracion      ="";
  }
  
  
  $Mensaje          =$Denominacion.", RANGO DE MEDICIÓN ".$RangoMedicion.", IDENTIFICACIÓN ".$Codigo.$Calibracion;
?>

<page backtop="0mm" backbottom="0mm" backleft="4mm" backright="4mm">


<table width="720" border="0">
  <tr>
    <td width="271" align="left"><img src="logo.jpg" width="250" height="76" /></td>
    <td width="286" bgcolor="#EEEEEE"><table width="227" border="0" align="center">
      <tr>
        <td width="221" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold;">SISTEMA DE GESTI<?=utf8_decode("Ó")?>N DE CALIDAD</td>
      </tr>
    </table>
      <table width="227" border="0" align="center">
        <tr>
          <td width="124" height="25" align="left" valign="bottom" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal;">C<?=utf8_decode("Ó")?>DIGO: A2-1-F02</td>
          <td width="104" align="center" valign="bottom" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal;">Versi<?=utf8_decode("ó")?>n 1</td>
        </tr>
      </table>
    </td>
    <td width="149" align="right"><img src="icontec.jpg" width="122" height="76" /></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td height="3" align="left"><img src="linea.jpg" width="720" height="1" /></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="97" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold;">FECHA:</td>
    <td width="348" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal;">
      <?=$Fecha?>
    </td>
    <td width="108" align="right" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold;"> Nro.</td>
    <td width="149" align="center" bgcolor="#CCFF66" style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; font-weight: bold; color: #F00;"><?=$Id?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td height="3" align="left"><img src="linea.jpg" width="720" height="1" /></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="94" height="20" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">ASUNTO:</td>
    <td width="617" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      CERTIFICADO DE DUREZA
    </td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">CLIENTE:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$NombreCliente?>
    </td>
    <td width="91" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">ORDEN DE COMPRA:</td>
    <td width="165" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$OrdenCompra?>
    </td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">DESCRIPCI<?=utf8_decode("Ó")?>N:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
    <?=$Descripcion?>  
    </td>
    <td width="91" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">MATERIAL:</td>
    <td width="165" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Material?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td height="3" align="left"><img src="linea.jpg" width="720" height="1" /></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="720" height="20" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">PATR<?=utf8_decode("Ó")?>N DE REFERENCIA (TRAZABILIDAD)</td>
  </tr>
</table>

<table width="720" border="0">
  <tr>
    <td width="725" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=utf8_decode($Mensaje)?><br>
    </td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">UK:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Uk?>
    </td>
    <td width="91" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">TIPO DUREZA</td>
    <td width="165" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$NombreXX?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">CARGA APLICADA:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$CargaAplicada?>
    </td>
    <td width="91" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;"></td>
    <td width="165" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      
    </td>
  </tr>
</table>
<?if(!empty($Foto)){?>
<table width="720" border="0">
  <tr>
    <td height="3" align="left"><img src="linea.jpg" width="720" height="1" /></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td height="3" align="left"><img src="CertificadoDureza/<?=$Foto?>" width="720"/></td>
  </tr>
</table>
<?}?>
<table width="720" border="0">
  <tr>
    <td height="3" align="left"><img src="linea.jpg" width="720" height="1" /></td>
  </tr>
</table>
<p>&nbsp;</p> 
        <table>
          <tr>
           <td>
            <table width="<?=$General?>" border="0" style="text-align:center;">
              <tr>
                <td width="<?=$General?>" style="background-color:#F5D0A9;">Prueba N<?=utf8_decode("º")?></td>
              </tr>
                <?for ($z=1;$z<=$Puntos;$z++)
                { 
                ?>
              <tr>
                <td width="<?=$General?>" style="background-color:#F5D0A9;"><?=$z?></td>
              </tr>
                <?
                }
                ?>
              <tr>
                <td width="<?=$General?>" style="background-color:#F5D0A9;">Promedio</td>
              </tr>
            </table> 
           </td>
           <td>
            <table width="600" border="0" style="text-align:center;">
                    <tr>
                        <?
                        for ($z=1;$z<=$Medidas;$z++) { 
                        ?>
                          <td width="<?=$Width?>" style="background-color:#F5D0A9;"><?=$z?></td>
                        <?
                        }
                        ?>
                    </tr>
                    <?
                    for($i=1;$i<=$Puntos;$i++){
                    ?>
                      <tr>
                          <?
                              for($x=1;$x<=$Medidas;$x++){
                              $Value=$i.$x;
                              $consulta="SELECT * FROM CertificadoDurezaItems WHERE Idcertificado='$Id' AND Nombre='$Value'";
                              $consulta2=mysql_query($consulta,$id);
                              if ($raa=mysql_fetch_array($consulta2)) {
                          ?>
                            <td width="<?=$Width?>" name="Vlr<?=$i.$x?>" id="Vlr<?=$i.$x?>"><?=$raa["Valor"]?></td>
                          <?
                          }
                          }
                          ?>
                      </tr>
                    <?
                    }
                    ?>
                    <tr>
                        <?
                        $query55="SELECT * FROM CertificadoDurezaItem2 WHERE Idcertificado='$Id'";
                        $result55=mysql_query($query55,$id);
                        while ($row55=mysql_fetch_array($result55)) {
                        ?>
                          <td width="<?=$Width?>" style="background-color:#99FF99;"><?=$row55["Promedio"]?></td>
                        <?
                        }
                        ?>
                    </tr>
            </table>
           </td>
           <td>
            <table width="<?=$General?>" border="0" style="text-align:center;">
              <tr>
                <td width="<?=$General?>" style="background-color:#F5D0A9;">Promedio</td>
              </tr>
                <?
                $queryRS          ="SELECT * FROM CertificadoDurezaItem1 WHERE Idcertificado='$Id' ORDER BY Id ASC";
                $resultRS         =mysql_query($queryRS,$id);
                while($rowRS      =mysql_fetch_array($resultRS))
                { 
                ?>
              <tr>
                <td width="<?=$General?>" style="background-color:#E6E6E6;"><?=$rowRS["Promedio"];?></td>
              </tr>
                <?
                }
                ?>
              <tr>
                <td width="<?=$General?>" style="background-color:#99FF99;"><?=$Rain?></td>
              </tr>
            </table> 
           </td>
           <td>
            <table width="<?=$General?>" border="0" style="text-align:center;">
              <tr>
                <td width="<?=$General?>" style="background-color:#F5D0A9;">Desviaci<?=utf8_decode("ó")?>n</td>
              </tr>
                <?
                $queryRX          ="SELECT * FROM CertificadoDurezaItem1 WHERE Idcertificado='$Id' ORDER BY Id ASC";
                $resultRX         =mysql_query($queryRX,$id);
                while($rowRX      =mysql_fetch_array($resultRX))
                { 
                ?>
              <tr>
                <td width="<?=$General?>" style="background-color:#E6E6E6;"><?=$rowRX["Desviacion"];?></td>
              </tr>
                <?
                }
                ?>
              <tr>
                <td width="<?=$General?>" style="background-color:#99FF99;"><?=$Desviacion?></td>
              </tr>
            </table> 
           </td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <table width="350">
          <tr>
            <td colspan="5" style="text-align:center;font-size:20px;background-color:#F5D0A9;"><strong>Dureza requerida</strong></td>
          </tr>
          <tr>
            <td rowspan="2" style="text-align:center;width:132.5px;min-height:63px;font-size:17px;background-color:#E6E6E6;"><?=$Req1?></td>
            <td>
            <table>
              <tr>
                <td style="text-align:center;width:10px;min-height:31.5px;font-size:15px;background-color:#FFFFFF;">
                +
                </td>
                <td style="text-align:center;width:132.5px;min-height:31.5px;font-size:15px;background-color:#E6E6E6;">
                <?=$Req2?>
                </td>
              </tr>
              <tr>
                <td style="text-align:center;width:10px;min-height:31.5px;font-size:15px;background-color:#FFFFFF;">
                -
                </td>
                <td style="text-align:center;width:132.5px;min-height:31.5px;font-size:15px;background-color:#E6E6E6;">
                <?=$Req3?>  
                </td>
              </tr>
            </table>
            </td>
            <td>
            <table>
              <tr>
                <td style="text-align:center;width:132.5px;min-height:31.5px;font-size:15px;background-color:#FFFFFF;">
                Max.
                </td>
              </tr>
              <tr>
                <td style="text-align:center;width:132.5px;min-height:31.5px;font-size:15px;background-color:#FFFFFF;">
                Min.  
                </td>
              </tr>
            </table>
            </td>
            <td>
            <table>
              <tr>
                <td style="text-align:center;width:132.5px;min-height:31.5px;font-size:15px;background-color:#E6E6E6;">
                <?=$Req4?>
                </td>
              </tr>
              <tr>
                <td style="text-align:center;width:132.5px;min-height:31.5px;font-size:15px;background-color:#E6E6E6;">
                <?=$Req5?>  
                </td>
              </tr>
            </table>
            </td>
            <td rowspan="2" style="text-align:center;width:132.5px;min-height:63px;font-size:17px;background-color:#E6E6E6;"><?=$Req6?></td>
          </tr>
        </table>
<p>&nbsp;</p>
<table>    
  <tr>  
    <td>
        <table>
        <tr>
          <td colspan="5" style="text-align:center;font-size:20px;background-color:#F5D0A9;"><strong>Dureza obtenida</strong></td>
        </tr>
        <tr>
          <td style="text-align:center;background-color:#E6E6E6;width:115px;height:30px;font-size:17px;">
            <?=$Obt1?>
          </td>
          <td style="text-align:center;background-color:#E6E6E6;width:115px;height:30px;font-size:17px;">
            <?=$Obt3?>
          </td>
          <td style="text-align:right;width:20px;height:30px;font-size:20px;">
            &plusmn; 
          </td>
          <td style="text-align:center;background-color:#E6E6E6;width:95px;height:30px;font-size:17px;">
            <?=$Obt2?>
          </td>
        </tr>
      </table>
    </td>
    <td>
      <table>
        <tr>
          <td colspan="5" style="text-align:center;font-size:20px;background-color:#F5D0A9;"><strong>Resultado</strong></td>
        </tr>
        <tr>
          <td style="text-align:center;background-color:#E6E6E6;width:348px;height:30px;font-size:17px;">
            <?=$Resultado?>
          </td>
        </tr>
      </table>
    </td>
  </tr>    
</table>
<p>&nbsp;</p>
<table width="720" border="0">
  <tr>
    <td width="236" height="98" valign="bottom"><table width="230" border="0" align="center">
      <tr>
        <td height="25" align="left" valign="bottom" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal;"><img src="firm.jpg" width="210" height="93" /></td>
        </tr>
    </table>
      <table width="230" border="0" align="center">
        <tr>
          <td height="3" align="left"><img src="linea.jpg" width="230" height="1" /></td>
        </tr>
        <tr>
          <td height="2" align="left" valign="bottom" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal;"></td>
        </tr>
      </table>
      <table width="230" border="0" align="center">
        <tr>
          <td height="25" align="left" valign="bottom" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal;">Marlon Vega Torres </td>
        </tr>
    </table></td>
    <td width="234">&nbsp;</td>
    <td width="236" align="right" valign="bottom"><table width="230" border="0" align="center">
      <tr>
        <td height="25" align="left" valign="bottom" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal;">&nbsp;</td>
      </tr>
    </table>
      <table width="230" border="0" align="center">
        <tr>
          <td height="3" align="left"><img src="linea.jpg" width="230" height="1" /></td>
        </tr>
        <tr>
          <td height="2" align="left" valign="bottom" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal;"></td>
        </tr>
      </table>
      <table width="230" border="0" align="center">
        <tr>
          <td height="25" align="right" valign="bottom" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal;">Firma de aceptado</td>
        </tr>
    </table></td>
  </tr>
</table>
<page_footer></page_footer>
</page>
  
