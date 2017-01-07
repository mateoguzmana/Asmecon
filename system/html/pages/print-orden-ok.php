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


		$Id				=$_REQUEST["Id"];

		
		$query			="SELECT* FROM Ordenes where Id = '$Id' ORDER BY Id Desc" ;
		$result			=mysql_query($query, $id);
		
		While($row		=mysql_fetch_array($result))
		{
		$Idcotiz		=$row["Idcotiz"];
		$Fechaord		=$row["Fechaord"];
		$Fechaentrega	=$row["Fechaentrega"];
		$Valororg		=$row["Valororg"];
		$Valor			=$row["Valor"];
		$Factura		=$row["Factura"];
		$Fechafact		=$row["Fechafact"];
		$Fechafin		=$row["Fechafin"];
		$Aprobo			=$row["Aprobo"];
		}
		
		if($Factura		== '000000' )
		{
		$Factura	=	'';	
		}
		
		if($Fechafact	== '0000-00-00' )
		{
		$Fechafact	=	'';	
		}
		
		if($Fechafin	== '0000-00-00' )
		{
		$Fechafin	=	'';	
		}
		

		$query			="SELECT* FROM Cotizaciones where Id = '$Idcotiz' " ;
		$result			=mysql_query($query, $id);
		
		while($row		=mysql_fetch_array($result))
		{
		$Cliente		=$row["Cliente"];
		$Nit			=$row["Nit"];
		$Contacto		=$row["Contacto"];
		$Telefono		=$row["Telefono"];
		$Direccion		=$row["Direccion"];
		$Ciudad			=$row["Ciudad"];
		$Email			=$row["Email"];
		$Fax			=$row["Fax"];
		$Estado			=$row["Estado"];
		$Servicio		=$row["Servicio"];
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
          <td height="25" align="left" valign="bottom" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal;">ORDEN DE TRABAJO (O.T)</td>
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
    <td width="97" height="9" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold;">FECHA O.T:</td>
    <td width="348" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal;">
      <?=$Fechaord?>
    </td>
    <td width="108" rowspan="2" align="right" valign="middle" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold;">NUMERO (O.T) N<?=utf8_decode("º")?>&nbsp; </td>
    <td width="149" rowspan="2" align="center" bgcolor="#CCFF66" style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; font-weight: bold; color: #F00;"><?=$Id?></td>
  </tr>
  <tr>
    <td height="9" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold;">FECHA ENT:</td>
    <td align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal;"><?=$Fechaentrega?></td>
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
      &nbsp;<strong><?=$Servicio?></strong>
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
    <td width="97" height="20" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">COTIZACION N<?=utf8_decode("º")?>:</td>
    <td width="613" align="left" bgcolor="#CCFF66" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">&nbsp; <strong><?=$Idcotiz?></strong></td>
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
		$query						="SELECT* FROM Cotizacionesitem where Idcotiz = '$Idcotiz'" ;
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
    <td width="98" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">&nbsp;
      $ <?=$cuantoTO?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td height="3" align="left"><img src="linea.jpg" width="720" height="1" /></td>
  </tr>
</table>
<br />
<table width="720" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="374" height="20" align="left" bgcolor="#E5E5E5" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">&nbsp;RELACION COSTO BENEFICIO<strong></strong></td>
    <td width="336" align="left" bgcolor="#E5E5E5" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">&nbsp;</td>
    </tr>
</table>
<table width="720" border="0">
  <tr>
    <td height="3" align="left"><img src="linea.jpg" width="720" height="1" /></td>
  </tr>
</table>
<br />
<table width="720" border="0" class="btn-info" style="font-size:10px; font-weight:bold;">
                                  <tr>
                                    <td width="296" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">&nbsp;OPERACI<?=utf8_decode("Ó")?>N</td>
                                    <td width="39" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">&nbsp;CANT.</td>
                                    <td width="161" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">&nbsp;</td>
                                    <td width="97" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">&nbsp;V/UNID</td>
                                    <td width="105" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">&nbsp;TOTAL.</td>
                                  </tr>
</table>





 

<?
		$Cont						=0;
		
		$query						="SELECT* FROM Ordenesitem where Idorden = '$Id' and Idcotiz = '$Idcotiz' ORDER BY Id" ;
		$result						=mysql_query($query, $id);
		
		while($row					=mysql_fetch_array($result))
		{
		$Operacion					= $row["Operacion"];
		$Cant						= $row["Cant"];
		$Opc						= $row["Opc"];
		$Unidad						= $row["Unidad"];
		$Total						= $row["Total"];
		
		$sumatot					= $Total + $sumatot; 
		
		$Cont++;
?> 
								<table width="720" border="0"  style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
                                  <tr>
                                    <td width="296"  style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Operacion?></td>
                                    <td width="39" align="center"  style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Cant?></td>
                                    <td width="161"  style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Opc?></td>
                                    <td width="97"  style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">&nbsp;
      $        <?=number_format($Unidad,0,'','.');?></td>
                                    <td width="105" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">&nbsp;
      $        <?=number_format($Total,0,'','.');?></td>
                                  </tr>
                                </table>
<?
		}
		
		$sumatotiva		=	$sumatot*0.16;
		$sumatotgran	=	$sumatotiva + $sumatot;	
?>
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
    <td width="98" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">&nbsp;      $
      <?=number_format($sumatot,0,'','.');?></td>
    </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="68" height="15" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">&nbsp;</td>
    <td width="150" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">&nbsp;</td>
    <td width="284" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">&nbsp;</td>
    <td width="98" align="right" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">IVA </td>
    <td width="98" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">&nbsp;
      $
      <?=number_format($sumatotiva,0,'','.')?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="68" height="15" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">&nbsp;</td>
    <td width="150" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">&nbsp;</td>
    <td width="284" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">&nbsp;</td>
    <td width="98" align="right" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">GRAN TOTAL </td>
    <td width="98" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">&nbsp;
      $  <?=number_format($sumatotgran,0,'','.')?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td height="3" align="left"><img src="linea.jpg" width="720" height="1" /></td>
  </tr>
</table>
<br />
  <table width="720" border="0">
  <tr>
    <td height="60" align="center" style="font-family: Arial, Helvetica, sans-serif; font-size: 20px; font-weight: bold; color: #900;">Informe de Facturaci<?=utf8_decode("ó")?>n</td>
    </tr>
</table>
  <table width="720" border="0">
    <tr>
      <td height="3" align="left"><img src="linea.jpg" width="720" height="1" /></td>
    </tr>
  </table>
  <table width="720" border="0">
    <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">Factura:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Factura?></td>
    <td width="91" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">Fecha Factura:</td>
    <td width="165" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Fechafact?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">Fecha Termina:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Fechafin?></td>
    <td align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">Aprobo:</td>
    <td align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Aprobo?></td>
    </tr>
</table>



<table width="720" border="0">
  <tr>
    <td height="3" align="left"><img src="linea.jpg" width="720" height="1" /></td>
    </tr>
</table>
<page_footer></page_footer>
</page>

