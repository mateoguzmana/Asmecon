<?
session_start(); 

include("../../includes/conexion.php");

$horaactual           = date("Y-m-d H:i:s");
$fechahoy             = date("Y-m-d");


    $Id               = $_REQUEST["Id"];

    $query            ="SELECT* FROM Fdimensional where Id = '$Id'" ;
    $result           =mysql_query($query, $id);
    
    while($row        =mysql_fetch_array($result))
    {
    $Cliente          = utf8_decode($row["Cliente"]);
    $Nit              = $row["Nit"];
    $Servicio         = utf8_decode($row["Servicio"]);
    $Asunto           = utf8_decode($row["Asunto"]);
    $Informacion      = utf8_decode($row["Informacion"]);
    $Alcance          = utf8_decode($row["Alcance"]);
    $Fecha            = $row["Fecha"];
    $Proveedor        = $row["Proveedor"];
    $Estado           = $row["Estado"];
    $Cantidad         = $row["Cantidad"];
    $Dureza           = $row["Dureza"];
    $Obtenida         = $row["Obtenida"];
    $Descripcion      = utf8_decode($row["Descripcion"]);
    $Material         = $row["Material"];
    $Observaciones    = $row["Observaciones"];
    $Subcliente       = $row["Subcliente"];
    $Rip              = $row["Rip"];
    $Orden            = $row["Orden"];
    $Plano            = $row["Plano"];
    $Diagrama         = $row["Diagrama"];
    }

    $queryKX          ="SELECT* FROM Fdimensionalitems where Idformato = '$Id'" ;
    $resultKX         =mysql_query($queryKX, $id);
    
    while($rowKX      =mysql_fetch_array($resultKX))
    {
    $NumPiezas        =$rowKX["Piezas"];
    $NumMedidas       =$rowKX["Medidas"];
    $Idtole           =$rowKX["Tolerancia"];
    $Idproc           =$rowKX["Procedimiento"];

    }

    $queryTITMEN      ="SELECT* FROM Proveedores WHERE Cedula = '$Proveedor'" ;
    $resultTITMEN     =mysql_query($queryTITMEN, $id);
    
    While($rowTITMEN  =mysql_fetch_array($resultTITMEN))
    {
    $Nombreprove      =$rowTITMEN["Nombre"];
    }
          
    $queryTITMEN      ="SELECT* FROM Tipoproced WHERE Id = '$Idproc'" ;
    $resultTITMEN     =mysql_query($queryTITMEN, $id);
    
    While($rowTITMEN  =mysql_fetch_array($resultTITMEN))
    {
    $Nombreproce      =$rowTITMEN["Nombre"];
    }
          
    $queryTITMEN      ="SELECT* FROM Tipoprocedopc WHERE Id = '$Idtole'" ;
    $resultTITMEN     =mysql_query($queryTITMEN, $id);
    
    While($rowTITMEN  =mysql_fetch_array($resultTITMEN))
    {
    $Nombretole       =$rowTITMEN["Nombre"];
    }
    
    $queryTITMEN      ="SELECT* FROM Clientes WHERE Cedula = '$Nit'" ;
    $resultTITMEN     =mysql_query($queryTITMEN, $id);
    
    While($rowTITMEN  =mysql_fetch_array($resultTITMEN))
    {
    $Contacto         =utf8_decode($rowTITMEN["Contacto"]);
    $Fax              =utf8_decode($rowTITMEN["Celular"]);
    $Telefono         =$rowTITMEN["Telefono"];
    $Direccion        =$rowTITMEN["Dir"];
    $Ciudad           =utf8_decode($rowTITMEN["Ciudad"]);
    $Email            =$rowTITMEN["Email"];
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
    <td width="97" height="20" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">ASUNTO:</td>
    <td width="613" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      FORMATO DIMENSIONAL
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
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">CONT<?=utf8_decode("Á")?>CTO:</td>
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
    <td width="91" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">CELULAR:</td>
    <td width="165" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Fax?>
    </td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">NRO ORDEN:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Orden?>
    </td>
    <td width="91" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">RIP:</td>
    <td width="165" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Rip?>
    </td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">PLANO:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Plano?>
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
    <td width="720" height="20" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">INFORMACI<?=utf8_decode("Ó")?>N DIMENSIONAL</td>
  </tr>
</table>

<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">FECHA:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Fecha?>
    </td>
    <td width="91" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">PROVEEDOR:</td>
    <td width="165" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Nombreprove?>
    </td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">CANTIDAD:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Cantidad?>
    </td>
    <td width="91" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">DESCRIPCI<?=utf8_decode("Ó")?>N</td>
    <td width="165" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Descripcion?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">SUB CLIENTE:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Subcliente?>
    </td>
    <td width="91" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">MATERIAL:</td>
    <td width="165" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Material?>
    </td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">DUREZA:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Dureza?>
    </td>
    <td width="91" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">OBTENIDA:</td>
    <td width="165" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Obtenida?>
    </td>
  </tr>
</table>
<? if(!empty($Diagrama)){ ?>
<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">DIAGRAMA:</td>
  </tr>
  <tr>
    <td>
     <img src="Fdimensional/<?=$Diagrama?>" width="720" border="0">
    </td>
  </tr>
</table>
<? } ?>
<table width="720" border="0">
  <tr>
    <td width="720" height="20" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">OBSERVACIONES</td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Observaciones?>
    </td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td height="3" align="left"><img src="linea.jpg" width="720" height="1" /></td>
  </tr>
</table>
<?
    $Cont             =0;
    $query            ="SELECT  Pieza,Medida,Ref,Desde,Hasta,Valor,Resultado, COUNT(Pieza) AS Cantidad FROM Fdimensionalitemsc where Idformato ='$Id' GROUP BY Pieza" ;
    $result           =mysql_query($query, $id);
    
    while($row        =mysql_fetch_array($result))
    {

    $Cant             =$row["Cantidad"];
    $Pieza            =$row["Pieza"];
    $Medida           =$row["Medida"];
    $Ref              =$row["Ref"];
    $Desde            =$row["Desde"];
    $Hasta            =$row["Hasta"];
    $Valor            =$row["Valor"];
    $Cuanto           =$Valor*$Cant;
    $cuantox          =$Cuanto+$cuantox;
    $Valor            =number_format($Valor,0,'','.');
    $Cuanto           =number_format($Cuanto,0,'','.');
    $Resultado        =$row["Resultado"];
    $Cont++;
    }
    
?>
<table width="720" border="0">
  <tr>
    <td width="720" height="20" align="left" bgcolor="#EEEEEE" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">PIEZAS Y MEDIDAS</td>
  </tr>
</table>

<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">NRO PIEZAS:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$NumPiezas?>
    </td>
    <td width="91" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">NRO MEDIDAS:</td>
    <td width="165" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$NumMedidas?>
    </td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td width="95" height="20" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">PROCEDIMIENTO:</td>
    <td width="351" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;">
      <?=$Nombreproce?>
    </td>
    <td width="91" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold;">TOLERANCIA:</td>
    <td width="165" align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal;"><?=$Nombretole?></td>
  </tr>
</table>
<table width="720" border="0">
  <tr>
    <td height="3" align="left"><img src="linea.jpg" width="720" height="1" /></td>
  </tr>
</table>
<?   
  

  $Registros=6;
  $Paginas=ceil($Cant/$Registros);

  $Inicio=1;
  $Registros2=7;
  $Limite=($Registros*$Paginas); 

  $NumeroPagina=1;
  

 ?>
 <?

  for ($z=1; $z <= $Paginas;$z++) {
    $Inicio2=(($NumeroPagina-1)*$Registros);
    $Delimitante=$Inicio2+6;
  ?>
<table width="800">
    <tr><td width="48" style="background-color:#D8FFB0;font-size:11.5px;"><strong>MEDIDAS</strong></td>
        <?
        $Registros2=($Registros2+6);
          for ($n=$Inicio; $n<=$Delimitante;$n++) { 
          if($n<=$Cant)
          {
          ?>
            <td width="106" style="background-color:#D8FFB0;text-align:center;font-size:11.5px;"><?=$n?></td>  
          <?
          }
              $Inicio=($Registros2-6); 
            
          }
 
          ?>
  </tr>
  
  <tr>  
  <td>&nbsp;</td>
<?
                        for ($i = ($Inicio2+1); $i <= $Delimitante; $i++) 
                        {
                        $queryFS      ="SELECT * FROM Fdimensionalitemsc where Idformato = '$Id' AND Medida = '$i' Order by Id ASC LIMIT $Inicio2, $Registros" ;
                        $resultFS     =mysql_query($queryFS, $id);
                                  
                        while($rowFS  =mysql_fetch_array($resultFS))
                        {
                        $Valor        =$rowFS["Ref"];
                        }
                        if($i<=$Cant){
                        ?>
                          <td align="center" style="font-size:11px;"><?=$Valor?></td>
                        <?
                        }
                        }
                        ?>
  </tr>
  <tr>  
  <td>&nbsp;</td>
<?
                        for ($i = ($Inicio2+1); $i <= $Delimitante; $i++) 
                        {
                        $queryXD    ="SELECT * FROM Fdimensionalitemsc where Idformato = '$Id' AND Medida = '$i' Order by Id ASC LIMIT $Inicio2, $Registros" ;
                        $resultXD   =mysql_query($queryXD, $id);
                          
                        while($rowXD  =mysql_fetch_array($resultXD))
                        {
                        $ValorOne      =$rowXD["Desde"];
                        }
                        if($i<=$Cant)
                        {
                        ?>
                        <td align="center" style="font-size:11px;background-color:#D8FFB0;"><?=$ValorOne?></td>
                        <?
                        }
                        }
                        ?>
  </tr>
  <tr>  
  <td>&nbsp;</td>
<?
                        for ($i = ($Inicio2+1); $i <= $Delimitante; $i++) 
                        {
                        $queryXD    ="SELECT * FROM Fdimensionalitemsc where Idformato = '$Id' AND Medida = '$i' Order by Id ASC LIMIT $Inicio2, $Registros" ;
                        $resultXD   =mysql_query($queryXD, $id);
                          
                        while($rowXD  =mysql_fetch_array($resultXD))
                        {
                        $ValorTwo      =$rowXD["Hasta"];
                        }
                        if($i<=$Cant){
                        ?>
                          <td align="center" style="font-size:11px;background-color:#D8FFB0;"><?=$ValorTwo?></td>
                        <?
                        }
                        }
                        ?>
  </tr>

                                              
                                             </table><table width="800">
                                               <tr>
                                                <th style="font-size:11.5px;">Pieza No.</th>
                                                <?
                                                for ($i = 1; $i <= $Delimitante; $i++) 
                                                {
                                                $queryUSERS     ="SELECT * FROM Tolerancia where (Idtipoproc = '$Idproc' and Idtipoprocopc = '$Idtole' and Muestra = 0) LIMIT $Inicio2, 6";
                                                $resultUSERS    =mysql_query($queryUSERS, $id);
                                                                        
                                                While($rowUSERS   =mysql_fetch_array($resultUSERS))
                                                {
                                                $Desde          =$rowUSERS["Desde"];  
                                                $Hasta          =$rowUSERS["Hasta"];
                                                $Tolerancia     =$rowUSERS["Tolerancia"];
                                                $Tolerancia     =str_replace(",",".",$Tolerancia);
                              
                                                if($Desde <= $Valora && $Hasta >= $Valora)
                                                {
                                                $Valor1       =$Valora+$Tolerancia;
                                                $Valor2       =$Valora-$Tolerancia;
                                                }
                              
                                                if($Envia == 1 && $Paso == 1)
                                                {
                              
                                                $queryFS    ="SELECT * FROM Fdimensionalitemsc where Idformato = '$Id' AND Medida = '$i' Order by Id ASC LIMIT $Inicio2, 6" ;
                                                $resultFS   =mysql_query($queryFS, $id);
                                          
                                                while($rowFS  =mysql_fetch_array($resultFS))
                                                {
                                                $Valor1     =$rowFS["Desde"];
                                                $Valor2     =$rowFS["Hasta"];
                                                }
                                              }
                                            }
                                            ?>
                                                                    
                                            <?
                                            }
                                            ?>
                                            </tr>
                                            <?
                          
?>
<?
                          
?>
                        
                                    <?
                                    for ($a = 1; $a <= $Pieza; $a++) 
                                    {
                                    ?>
                                    <tr>
                                    <td style="background-color:#E3E4E0;text-align:center;font-size:9px;"><?=$a?></td>
                                    <?
                                    for ($o = ($Inicio2+1); $o <= $Delimitante; $o++) 
                                    {
                                  
                                
                                    $queryF     ="SELECT* FROM Fdimensionalitemsc where Idformato = '$Id' AND Pieza = '$a' AND Medida = '$o' Order by Id ASC" ;
                                    $resultF    =mysql_query($queryF, $id);
                                        
                                    while($rowF   =mysql_fetch_array($resultF))
                                    {
                                    $ValorF     =$rowF["Valor"];
                                    $ResultadoF   =$rowF["Resultado"];
                                    }
  
                                    $ValorF         =str_ireplace(".",",",$ValorF);
                                    if($o<=$Cant){
                                    ?>
                                                                
                                                                    
                                    <td style="background-color:#EFEDBA;text-align:left;width:20px;font-size:9px;"><?=$ValorF?></td>
                                    <td style="width:80px;text-align:left;font-size:9px;"><?=$ResultadoF?></td>
                                                                      
            
                                    <?
                                    }
                                    $ValorF       ='';
                                    $ResultadoF   ='';
                                    }
                                    ?>
            
                                    </tr>
                                    <?
                                    }
                                    ?>


                        

                                    <tr>
                                    <td style="background-color:#FEABB1;text-align:center;font-size:9.5px;" width="10%">%</td>
                                    <?
                                    for ($e = ($Inicio2+1); $e <= $Delimitante; $e++) 
                                    {
                                    $queryE     ="SELECT AVG(Valor) AS Valor FROM Fdimensionalitemsc where Idformato = '$Id' AND Medida = '$e' Order by Id ASC" ;
                                    $resultE    =mysql_query($queryE, $id);
                                        
                                    while($rowE   =mysql_fetch_array($resultE))
                                    {
                                    $ValorE     =number_format($rowE["Valor"],1);
                                    }
                                    
                                    $queryR     ="SELECT* FROM Fdimensionalitemsc where Idformato = '$Id' AND Medida = '$e' Order by Id ASC" ;
                                    $resultR    =mysql_query($queryR, $id);
                                        
                                    while($rowR   =mysql_fetch_array($resultR))
                                    {
                                    $DesdeR     =$rowR["Desde"];
                                    $HastaR     =$rowR["Hasta"];
                                    }
                                    
                                    if(($DesdeR >= $ValorE) && ($HastaR <= $ValorE))
                                    {
                                      $ResultadoR = 'CUMPLE';
                                    }
                                    else
                                    {
                                      $ResultadoR = 'NO CUMPLE';
                                    }
                                    if($e<=$Cant){
                                    ?>
                                                                
                                      
                                      
                                         

                                    <td style="background-color:#FEABB1;text-align:left;width:20px;font-size:9px;"><?=$ValorE?></td>
                                    <td style="background-color:#FEABB1;text-align:left;width:80px;font-size:9px;"><?=$ResultadoR?></td>
                                         
                                      
                                      
            
                                    <?
                                    }
                                    $ValorF     ='';
                                    $ResultadoF   ='';
                                    }
                                    ?>
            
                      </tr>

                    </table>
                    <table><tr><td>&nbsp;</td></tr></table> 
                    <? 
                     $NumeroPagina++;
                  } ?>
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
  
