<?
session_start(); 

include("../../includes/conexion.php");

$horaactual           = date("Y-m-d H:i:s");
$fechahoy             = date("Y-m-d");


    $Id               = $_REQUEST["Id"];
   

          $queryPP        ="SELECT * FROM CertificadoMetrologico where Id='$Id'";
          $resultPP       =mysql_query($queryPP, $id);
                    
          while($rowPP    =mysql_fetch_array($resultPP))
          {
          $Cliente        =$rowPP["Cliente"];
          $Rip            =$rowPP["Rip"];
          $Fecha          =$rowPP["Fecha"];
          $Proveedor      =$rowPP["Proveedor"];
          $OrdenTrabajo   =$rowPP["OrdenTrabajo"];
          $Temperatura    =$rowPP["Temperatura"];
          $UK             =$rowPP["UK"];
          $OrdenCompra    =$rowPP["OrdenCompra"];
          $Codigo         =$rowPP["Codigo"];
          $Plano          =$rowPP["Plano"];
          $Descripcion    =$rowPP["Descripcion"];
          $Material       =$rowPP["Material"];
          $DurezaObtenida =$rowPP["DurezaObtenida"];
          $Interior1      =$rowPP["Interior1"];
          $Interior2      =$rowPP["Interior2"];
          $Interior3      =$rowPP["Interior3"];
          $Interior4      =$rowPP["Interior4"];
          $Exterior1      =$rowPP["Exterior1"];
          $Exterior2      =$rowPP["Exterior2"];
          $Exterior3      =$rowPP["Exterior3"];
          $Exterior4      =$rowPP["Exterior4"];
          $Longitud1      =$rowPP["Longitud1"];
          $Longitud2      =$rowPP["Longitud2"];
          $Longitud3      =$rowPP["Longitud3"];
          $Longitud4      =$rowPP["Longitud4"];
          $Chaflanes      =$rowPP["Chaflanes"];
          $Radios         =$rowPP["Radios"];
          $Roscas         =$rowPP["Roscas"];
          $Entalladura    =$rowPP["Entalladura"];
          $Cantidad       =$rowPP["Cantidad"];
          $Revisadas      =$rowPP["Revisadas"];
          $Aceptadas      =$rowPP["Aceptadas"];
          $Rechazadas     =$rowPP["Rechazadas"];
          $Conforme       =$rowPP["Conforme"];
          $Dimensiones    =$rowPP["Dimensiones"];
          $Geometria      =$rowPP["Geometria"];
          $Acabados       =$rowPP["Acabados"];
          $ValConforme    =$rowPP["ValConforme"];
          }

          $queryRR        ="SELECT* FROM Clientesde where Id = '$Proveedor'";
          $resultRR       =mysql_query($queryRR, $id);
                          
          while($rowRR    =mysql_fetch_array($resultRR))
          {
          $NombreP        =$rowRR["Nombre"];
          }

          $queryCC        ="SELECT* FROM Clientes where Id = '$Cliente'";
          $resultCC       =mysql_query($queryCC, $id);
                          
          while($rowCC    =mysql_fetch_array($resultCC))
          {
          $NombreC        =$rowCC["Nombre"];
          }
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
      </table></td>
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
      CERTIFICADO METROLOGICO
    </td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">CLIENTE:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$NombreC?>
    </td>
    <td width="91" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">NIT:</td>
    <td width="165" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Rip?>
    </td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">PROVEEDOR:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$NombreP?>
    </td>
    <td width="91" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">O.T.:</td>
    <td width="165" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$OrdenTrabajo?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">TEMPERATURA:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Temperatura?>
    </td>
    <td width="91" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">UK:</td>
    <td width="165" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$UK?>
    </td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td height="3" align="left"><img src="linea.jpg" width="720" height="1" /></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="720" height="20" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">ESPECIFICACIONES SOLICITADAS POR EL CLIENTE</td>
  </tr>
</table>

<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">ORDEN DE COMPRA:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$OrdenCompra?>
    </td>
    <td width="91" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">C<?=utf8_decode("Ó")?>DIGO:</td>
    <td width="165" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Codigo?>
    </td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">PLANO:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Plano?>
    </td>
    <td width="91" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">DESCRIPCI<?=utf8_decode("Ó")?>N</td>
    <td width="165" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Descripcion?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">MATERIAL:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Material?>
    </td>
    <td width="91" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">DUREZA OBTENIDA:</td>
    <td width="165" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$DurezaObtenida?>
    </td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td height="3" align="left"><img src="linea.jpg" width="720" height="1" /></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="90" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">INTERIOR 1:</td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Interior1?>
    </td>
    <td width="90" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">INTERIOR 2:</td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Interior2?>
    </td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">INTERIOR 3:</td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Interior3?>
    </td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">INTERIOR 4:</td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Interior4?>
    </td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="90" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">EXTERIOR 1:</td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Exterior1?>
    </td>
    <td width="90" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">EXTERIOR 2:</td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Exterior2?>
    </td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">EXTERIOR 3:</td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Exterior3?>
    </td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">EXTERIOR 4:</td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Exterior4?>
    </td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="90" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">LONGITUD 1:</td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Longitud1?>
    </td>
    <td width="90" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">LONGITUD 2:</td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Longitud2?>
    </td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">LONGITUD 3:</td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Longitud3?>
    </td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">LONGITUD 4:</td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Longitud4?>
    </td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="90" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">CHAFLANES:</td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Chaflanes?>
    </td>
    <td width="90" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">RADIOS:</td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Radios?>
    </td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">ROSCAS:</td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Roscas?>
    </td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">ENTALLADURA:</td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Entalladura?>
    </td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="90" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">CANTIDAD:</td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Cantidad?>
    </td>
    <td width="90" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">REVISADAS:</td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Revisadas?>
    </td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">ACEPTADAS:</td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Aceptadas?>
    </td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">RECHAZADAS:</td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Rechazadas?>
    </td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td height="3" align="left"><img src="linea.jpg" width="720" height="1" /></td>
  </tr>
</table>
<?if($Conforme=="SI"){?>
<table width="720" border="0">
  <tr>
    <td width="140" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">PRODUCTO CONFORME:</td>
    <td width="40" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Conforme?>
    </td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">DIMENSIONES:</td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Dimensiones?>
    </td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">GEOMETRIA:</td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Geometria?>
    </td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">ACABADOS:</td>
    <td width="90" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Acabados?>
    </td>
  </tr>
</table>
<?}else{?>
<table width="720" border="0">
  <tr>
    <td width="185" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">PRODUCTO CONFORME:</td>
    <td width="185" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Conforme?>
    </td>
    <td width="190" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">MOTIVO:</td>
    <td width="180" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$ValConforme?>
    </td>
  </tr><!--En tiempos de cambio, quienes estén abiertos al aprendizaje se 
  adueñaran del futuro, mientras que aquellos que creen saberlo todo estarán bien equipados para 
  un mundo que ya no existe.-->
</table>

<?}?>
<table width="720" border="0">
  <tr>
    <td height="3" align="left"><img src="linea.jpg" width="720" height="1" /></td>
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
  
