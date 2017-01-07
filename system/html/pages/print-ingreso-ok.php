<?
session_start(); 

include("../../includes/conexion.php");

$horaactual 			= date("Y-m-d H:i:s");
$fechahoy 				= date("Y-m-d");


		$Id							= $_REQUEST["Id"];

		$query						="SELECT* FROM Recepcion where Id = '$Id'" ;
		$result						=mysql_query($query, $id);
		
		while($row					=mysql_fetch_array($result))
		{
		$Cliente				  	= utf8_decode($row["Cliente"]);
    $Soporte            = $row["Soporte"];
		$Nit						    = $row["Nit"];
    $Foto               = $row['Foto'];
		$NroCotizacion      = $row["Cotizacion"];
		$Servicio					  = $row["Idservicio"];
		$Asunto						  = utf8_decode($row["Asunto"]);
		$Informacion				= utf8_decode($row["Informacion"]);
		$Alcance					  = utf8_decode($row["Alcance"]);
		$Fecha				      = $row["Fecha"];
		$Nota						    = $row["Nota"];
		$Estado						  = $row["Estado"];
		}
		
		      $queryS         ="SELECT* FROM Soporte where Id = '$Soporte' and Activo = 0 and Muestra = 0  ORDER BY Nombre" ;
          $resultS        =mysql_query($queryS, $id);
          
          while($rowS       =mysql_fetch_array($resultS))
          {
          $NombresopoS      = $rowS["Nombre"];
          $IdsopoS        = $rowS["Id"];
          }

          $queryM         ="SELECT* FROM Servicios where Id = '$Servicio' ORDER BY Nombre" ;
          $resultM        =mysql_query($queryM, $id);
          
          while($rowM       =mysql_fetch_array($resultM))
          {
          $Nombreservicio     = utf8_decode($rowM["Nombre"]);;

          }

          if($Salida == 1)
          {
          $ponga  = 'readonly disabled';  
          }
          else
          {
          $ponga  = ''; 
          }

		
					$queryTITMEN		="SELECT* FROM Clientes WHERE Cedula = '$Nit'" ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
					$Contacto			=utf8_decode($rowTITMEN["Contacto"]);
					$Fax				=utf8_decode($rowTITMEN["Celular"]);
          $Telefono         = $rowTITMEN["Telefono"];
          $Direccion        = $rowTITMEN["Dir"];
          $Ciudad           = utf8_decode($rowTITMEN["Ciudad"]);
          $Email            = $rowTITMEN["Email"];
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
    <td width="348" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal;"><?=$Fecha?></td>
    <td width="108" align="right" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold;">RIP Nro.</td>
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
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">CLIENTE:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Cliente?>
    </td>
    <td width="100" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">COTIZACI<?=utf8_decode("Ó")?>N NRO:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$NroCotizacion?>
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
    <td width="100" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">TELEFONO:</td>
    <td width="165" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Telefono?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">DIRECCION:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Direccion?>
    </td>
    <td width="100" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">CIUDAD:</td>
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
    <td width="100" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">CELULAR:</td>
    <td width="165" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Fax?>
    </td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">SERVICIO:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Nombreservicio?>
    </td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td height="3" align="left"><img src="linea.jpg" width="720" height="1" /></td>
  </tr>
</table>
<?
    $Cont           =0;
    $query            ="SELECT * FROM Recepcion where Id ='$Id'" ;
    $result           =mysql_query($query, $id);
    
    while($row          =mysql_fetch_array($result))
    {
    $Idserv             = $row["Idservicio"];
    $Descripcion        = $row["Descripcion"];
    $Tipoinst           = $row["Tipoinst"];
    $Identificacion     = $row["Identificacion"];
    $Soporte            = $row["Soporte"];
    $Nrosopo            = $row["Nrosopo"];
    $Unidades           = $row["Unidades"];
    $Comentarios        = $row["Comentarios"];
    $Fechahora          = $row["Fechahora"];
    $Usuario            = $row["Usuario"];
    $Usuariosaca        = $row["Usuariosaca"];
    $Fechasale          = $row["Fechasale"];
    $Certificado        = $row["Certificado"];
    $Observaciones      = $row["Observaciones"];
    $Salida             = $row["Salida"];
    
    $Cont++;
  }
?>

<table width="720" border="0">
  <tr>
    <td align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">INFORMACI<?=utf8_decode("Ó")?>N DE INGRESO</span></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="200" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">Fecha:</td>
    <td width="511" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Fecha?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="200" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">Descripcion:</td>
    <td width="511" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Descripcion?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <? if($Idserv == 4)
    {
    ?>
    <td width="200" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">Plano:</td>
    <td width="511" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Identificacion?></td>
   <? } ?>
  </tr>
</table>
<? if($Idserv != 4)
    {
    ?>
<table width="720" border="0">
  <tr>
    <td width="200" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">Identificaci<?=utf8_decode("ó")?>n:</td>
    <td width="511" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Identificacion?></td>
  </tr>
</table>
<? } ?>
<table width="720" border="0">
  <tr>
    <? if(!empty($Tipoinst)){ ?>
    <td width="200" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">Instrumento:</td>
    <td width="511" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Tipoinst?></td>
    <? } ?>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    
    <td width="200" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">Soporte:</td>
    <td width="511" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$NombresopoS?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="200" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">Numero soporte: </td>
    <td width="511" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Nrosopo?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="200" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">Unidades: </td>
    <td width="511" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Unidades?></td>
  </tr>
</table>
<?if(!empty($Foto)){?>
<table width="720" border="0">
  <tr>
    <td width="200" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">Foto de ingreso:</td>
  </tr>
</table>
<table>
<tr>
<td width="511" align="center" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><img src="recepcion/<?=$Foto?>" style="width:720px;height:auto;"></td>
</tr>
</table>
<? } ?>
<table width="720" border="0">
  <tr>
    <td height="3" align="left"><img src="linea.jpg" width="720" height="1" /></td>
  </tr>
</table>
<?
    $contest        =0;
      $queryM          ="SELECT* FROM Estado where Idservicio = '$Idserv' and Activo = 0 and Muestra = 0 and Cant>0 ORDER BY Nombre" ;
      $resultM         =mysql_query($queryM, $id);
      
      while($rowM        =mysql_fetch_array($resultM))
      {
      $NombrePasa     =$rowM["Nombre"];
      $Cante          =$rowM["Cant"];
      $contest++;
      }

      

    $Cont           =0;
    $query            ="SELECT * FROM Recepcionestados where Idrecep ='$Id'" ;
    $result           =mysql_query($query, $id);
    
    while($row          =mysql_fetch_array($result))
    {
    $NombreBP             =utf8_decode($row["Nombre"]);
    $ValorBP              =$row["Valor"];
    $CantidadBP           =$row["Cant"];
    
    $Cont++;
?>
<table width="720" border="0">
  <tr>
    <td align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;"><?=$NombreBP?> </span></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="200" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">Valor:</td>
    <td width="511" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$ValorBP?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <?
    
    if(($ValorBP=="SI" && $CantidadBP>0) || ($NombrePasa==$rowM["Nombre"] && $CantidadBP>0)){?>
    <td width="200" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">Cantidad:</td>
    <td width="511" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$CantidadBP?></td>
    <? } ?>
    </tr>
</table>
    <? } ?>

<?
$queryx            ="SELECT * FROM Recepciondocument where Idrecep ='$Id'" ;
$resultx           =mysql_query($queryx, $id);
if ($rowx=mysql_fetch_array($resultx)) {
?>
<table width="720" border="0">
  <tr>
    <td height="3" align="left"><img src="linea.jpg" width="720" height="1" /></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">DOCUMENTACI<?=utf8_decode("Ó")?>N ENTREGADA</span></td>
  </tr>
</table>
<? } ?>
<?
    
    $Cont           =0;
    $query            ="SELECT * FROM Recepciondocument where Idrecep ='$Id'" ;
    $result           =mysql_query($query, $id);
    
    while($row          =mysql_fetch_array($result))
    {
    mysql_query("SET CHARACTER SET utf8 ");
    $NombreDoc        =utf8_decode($row["Nombre"]); 
    $ValorDoc         =$row["Valor"];
    
    if ($NombreDoc=="PASANTÍAS") {
      $NombreDoc="PASANTIAS";
    }
    
    $Cont++;
?>
<table width="720" border="0">
  <tr>
    <td width="200" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$NombreDoc?></td>
    <td width="511" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$ValorDoc?></td>
  </tr>
</table>
<?
    }
?>
<?if (!empty($Descripcion)) { ?>
<table width="230" border="0" align="center">
        <tr>
          <td height="3" align="left"><img src="linea.jpg" width="720" height="1" /></td></tr>
        <tr><td width="97" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold;">DESCRIPCI<?=utf8_decode("Ó")?>N DEL INGRESO:</td></tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="511" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Descripcion?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td height="3" align="left"><img src="linea.jpg" width="720" height="1" /></td>
  </tr>
</table>
<? } ?>
<? if ($Salida>0) {
  # code...
 ?>
<table width="720" border="0">
  <tr>
    <td align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">INFORMACI<?=utf8_decode("Ó")?>N DE SALIDA</span></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="200" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">Usuario de salida:</td>
    <td width="511" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Usuariosaca?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="200" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">Fecha salida:</td>
    <td width="511" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Fechasale?></td>
  </tr>
</table>
<? } ?>
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
	
