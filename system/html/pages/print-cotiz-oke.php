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

$horaactual 			= date("Y-m-d H:i:s");
$fechahoy 				= date("Y-m-d");


		$Id							= $_REQUEST["Id"];

		$query						="SELECT* FROM Cotizacionesexp where Id = '$Id'" ;
		$result						=mysql_query($query, $id);
		
		while($row					=mysql_fetch_array($result))
		{
		$Cliente					= $row["Cliente"];
		$Nit						= $row["Nit"];
		$Contacto					= $row["Contacto"];
		$Telefono					= $row["Telefono"];
		$Direccion					= $row["Direccion"];
		$Ciudad						= $row["Ciudad"];
		$Email						= $row["Email"];
		$Fax						= $row["Fax"];
		$Servicio					= $row["Servicio"];
		$Asunto						= $row["Asunto"];
		$Informacion				= $row["Informacion"];
		$Alcance					= $row["Alcance"];
		$Condiciones1				= $row["Condiciones1"];
		$Condiciones2				= $row["Condiciones2"];
		$Condiciones3				= $row["Condiciones3"];
		$Condiciones4				= $row["Condiciones4"];
		$Condiciones5				= $row["Condiciones5"];
		$Condiciones6				= $row["Condiciones6"];
		$Condiciones7				= $row["Condiciones7"];
		$Nota						= $row["Nota"];
		$Estado						= $row["Estado"];
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
      <?=$fechahoy?>
    </td>
    <td width="108" align="right" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold;">COTIZACION Nro.</td>
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
    <td width="97" height="20" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">ASUNTO:</td>
    <td width="613" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Servicio?>
    </td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">CLIENTE:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Cliente?>
    </td>
    <td width="91" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">NIT:</td>
    <td width="165" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Nit?>
    </td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">CONTACTO:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Contacto?>
    </td>
    <td width="91" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">TELEFONO:</td>
    <td width="165" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Telefono?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">DIRECCION:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Direccion?>
    </td>
    <td width="91" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">CIUDAD:</td>
    <td width="165" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Ciudad?>
    </td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">E-MAIL:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Email?>
    </td>
    <td width="91" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">FAX:</td>
    <td width="165" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Fax?>
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
    <td width="20" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">1. </td>
    <td width="175" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">ASUNTO:</span></td>
    <td width="511" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Asunto?></td>
    </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="20" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">2. </td>
    <td width="175" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">INFORMACION SUMINISTRADA:</span></td>
    <td width="511" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Informacion?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="20" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">3. </td>
    <td width="175" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">ALCANCE:</span></td>
    <td width="511" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 9px; font-weight: normal;"><?=$Alcance?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="20" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">4. </td>
    <td align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">CONDICIONES GENERALES DE LA PRESTACI<?=utf8_decode("Ó")?>N DEL SERVICIO:</span></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="20" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">&nbsp;</td>
    <td width="175" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">4,1 Informe a entregar:</td>
    <td width="511" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Condiciones1?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="20" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">&nbsp;</td>
    <td width="175" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">4,2 Lugar de inspecci<?=utf8_decode("ó")?>n:</td>
    <td width="511" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Condiciones2?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="20" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">&nbsp;</td>
    <td width="175" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">4,3 Transporte:</td>
    <td width="511" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Condiciones3?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="20" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">&nbsp;</td>
    <td width="175" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">4,4 Embalaje:</td>
    <td width="511" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Condiciones4?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="20" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">&nbsp;</td>
    <td width="175" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">4,5 Validez </td>
    <td width="511" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Condiciones5?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="20" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">&nbsp;</td>
    <td width="175" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">4,6 Forma de pago: </td>
    <td width="511" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Condiciones6?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="20" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">&nbsp;</td>
    <td width="175" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">4,7 Tiempo de entrega:</td>
    <td width="511" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Condiciones7?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td height="3" align="left"><img src="linea.jpg" width="720" height="1" /></td>
  </tr>
</table>

                          <p>
                            <?
                          if($servicio == 'Laboratorio y Calibración')
						  {
							 $poner		=	'INSTRUMENTO'; 
						  }
						  else
						  {
							 $poner		=	'PLANO';   
						  }
						  ?>
                            
                            
                          </p>
<table width="720" border="0">
  <tr>
    <td width="68" height="20" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">CANT. </td>
    <td width="150" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;"><?=$poner?></td>
    <td width="284" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">DESCRIPCI<?=utf8_decode("Ó")?>N DEL SERVICIO</td>
    <td width="98" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">V/UNID.</td>
    <td width="98" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">TOTAL</td>
  </tr>
</table>



<?
		$Cont						=0;
		$query						="SELECT* FROM Cotizacionesitemexp where Idcotiz = '$Id'" ;
		$result						=mysql_query($query, $id);
		
		while($row					=mysql_fetch_array($result))
		{
		$Cant						= $row["Cant"];
		$Plano						= $row["Plano"];
		$Descripcion				= $row["Descripcion"];
		$Valor						= $row["Valor"];
		$Cuanto						= $Valor*$Cant;
		$cuantox					= $Cuanto+$cuantox;
		$Valor						=number_format($Valor,0,'','.');
		$Cuanto						=number_format($Cuanto,0,'','.');
		
		
		
		$Cont++;
?>
<table width="720" border="0">
  <tr>
    <td width="68" height="15" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Cant?> </td>
    <td width="150" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Plano?></td>
    <td width="284" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 9px; font-weight: normal;"><?=$Descripcion?></td>
    <td width="98" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">$ <?=$Valor?></td>
    <td width="98" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">$ <?=$Cuanto?></td>
  </tr>
</table>
<?
		}
		$cuantos					=number_format($cuantox,0,'','.');
		$cuantoivA					=$cuantox*0.16;
		$cuantoiv					=number_format($cuantoivA,0,'','.');
		$cuantoT					=$cuantox+$cuantoivA;
		$cuantoTO					=number_format($cuantoT,0,'','.');
		
?>
<table width="720" border="0">
  <tr>
    <td height="3" align="left"><img src="linea.jpg" width="720" height="1" /></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="68" height="15" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">NOTA:</span></td>
    <td align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Nota?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td height="3" align="left"><img src="linea.jpg" width="720" height="1" /></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="68" height="15" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">&nbsp;</td>
    <td width="150" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">&nbsp;</td>
    <td width="284" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">&nbsp;</td>
    <td width="98" align="right" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">TOTAL NETO</td>
    <td width="98" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">&nbsp;      $ <?=$cuantos?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="68" height="15" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">&nbsp;</td>
    <td width="150" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">&nbsp;</td>
    <td width="284" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">&nbsp;</td>
    <td width="98" align="right" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">IVA </td>
    <td width="98" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">&nbsp;
      $ <?=$cuantoiv?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="68" height="15" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">&nbsp;</td>
    <td width="150" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">&nbsp;</td>
    <td width="284" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">&nbsp;</td>
    <td width="98" align="right" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">GRAN TOTAL </td>
    <td width="98" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">&nbsp;
      $ <?=$cuantoTO?></td>
  </tr>
</table>
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
	
