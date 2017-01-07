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
					
					$Id					=$_REQUEST["Id"];
					$Envia				=$_REQUEST["Envia"];
					$Paso				=$_REQUEST["Paso"];
					$Idf				=$_REQUEST["Idf"];

					$queryTITMEN		="SELECT * FROM Fdimensional WHERE Id = '$Id'" ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
						$Nitclien					= $rowTITMEN["Nit"];
						$Idfact						= $rowTITMEN["Idfact"];
						$Idrecep					= $rowTITMEN["Idrecep"];
						$Idord						= $rowTITMEN["Idorden"];
						$Idccotiz					= $rowTITMEN["Idcotiz"];
						$Cliente					= $rowTITMEN["Cliente"];
						$Rip						= $rowTITMEN["Rip"];
						$Plano						= $rowTITMEN["Plano"];
						$Fecha						= $rowTITMEN["Fecha"];
						$Descripcion				= $rowTITMEN["Descripcion"];
						$Proveedor					= $rowTITMEN["Proveedor"];
						$Subcliente					= $rowTITMEN["Subcliente"];
						$Cantidad					= $rowTITMEN["Cantidad"];
						$Dureza						= $rowTITMEN["Dureza"];
						$Obtenida					= $rowTITMEN["Obtenida"];
						$Material					= $rowTITMEN["Material"];
						$Observaciones				= $rowTITMEN["Observaciones"];
						$Diagrama					= $rowTITMEN["Diagrama"];
					}
					
					

					$Piezas				=$_REQUEST["Piezas"];
					$Medidas			=$_REQUEST["Medidas"];
					$Idproc				=$_REQUEST["Idproc"];
					$Idtole				=$_REQUEST["Idtole"];


					
					$queryTITMEN		="SELECT* FROM Proveedores WHERE Cedula = '$Proveedor'" ;
					$resultTITMEN		=mysql_query($queryTITMEN, $id);
					
					While($rowTITMEN	=mysql_fetch_array($resultTITMEN))
					{
					$Nombreprove		=$rowTITMEN["Nombre"];
					}
					
					
					$horaactual 		=date("Y-m-d");

					$horaactual 		= date("Y-m-d H:i:s");
					$horaactuala 		= date("Y-m-d");
					$Idconso			=$_REQUEST['Id'];


header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=formato-dimensional-nro-$Id-$horaactuala.xls");

 	$Cont             =0;
    $query            ="SELECT  Pieza,Medida,Ref,Desde,Hasta,Valor,Resultado, COUNT(Pieza) AS Cantidad FROM Fdimensionalitemsc where Idformato ='$Id' GROUP BY Pieza" ;
    $result           =mysql_query($query, $id);
    
    while($row          =mysql_fetch_array($result))
    {
    $Cant             = $row["Cantidad"];
    $Pieza            = $row["Pieza"];
    $Medida           = $row["Medida"];
    $Ref              = $row["Ref"];
    $Desde            = $row["Desde"];
    $Hasta            = $row["Hasta"];
    $Valor            = $row["Valor"];
    $Cuanto           = $Valor*$Cant;
    $cuantox          = $Cuanto+$cuantox;
    $Valor            = number_format($Valor,0,'','.');
    $Cuanto           = number_format($Cuanto,0,'','.');
    $Resultado        = $row["Resultado"];
    $Cont++;
    }
	
	$query            ="SELECT* FROM Fdimensionalitems where Id = '$Id'" ;
    $result           =mysql_query($query, $id);
    
    while($row          =mysql_fetch_array($result))
    {
    $Idtole            = $row["Tolerancia"];
    $Idproc            = $row["Procedimiento"];
    }

    	  $queryk    ="SELECT* FROM Tipoproced WHERE Id = '$Idproc'" ;
          $resultk   =mysql_query($queryk, $id);
          
          While($rowk  =mysql_fetch_array($resultk))
          {
          $Nombreproce    =$rowk["Nombre"];
          }
          
          $queryk    ="SELECT* FROM Tipoprocedopc WHERE Id = '$Idtole'" ;
          $resultk   =mysql_query($queryk, $id);
          
          While($rowk  =mysql_fetch_array($resultk))
          {
          $Nombretole     =$rowk["Nombre"];
          }

?>
<html LANG="es">
<title>::. FORMATO DIMENSIONAL .::</title>
</head>
<body>
<!-- TABLA PRINCIPAL -->	<table border="1" width="720" name="principal">
<thead>
<th colspan="7" rowspan="2"><p style="text-align:center;font-size:50px;">ASMECON</p></th>
<th colspan="6" rowspan="2"><p style="text-align:center;font-size:25px;">INFORME DE METROLOGIA <br> DIMENSIONAL</p></th>
</thead>
<tbody>
<tr>
<table width="720" border='1' align="center" cellpading='1' cellspacing='1' bgcolor="#F2F2F2">
<tr><td align="left" colspan="5"><strong>ORDEN NRO. </strong></td><td colspan="5" ><p align="left"><? echo str_pad($Id, 6, '0', STR_PAD_LEFT); ?></p></td><td colspan="3">F3 2015 VERSION 3</td></tr>
<tr><td align="left" colspan="5"><strong>CLIENTE: </strong></td><td colspan="5" ><p align="left"><?=$Cliente?></p></td><td colspan="3">REVISION 2003-08-10</td></tr>
<tr><td align="left" colspan="5"><strong>RIP:  </strong></td><td colspan="5" ><p align="left"><?=$Rip?></p></td><td colspan="3">Info@asmecon.com</td></tr>
<tr><td align="left" colspan="5"><strong>PLANO:  </strong></td><td colspan="5" ><p align="left"><?=$Plano?></p></td><td colspan="3">&nbsp;</td></tr>
</table>
</tr>
<tr>
<table border="1">
<tr><td colspan="13">&nbsp;</td></tr>
</table>
</tr>
<tr>
<table width="720" border='1' align="center">
<tr><td><strong align="center">INFORMACION DIMENSIONAL</strong></td></tr>
<tr><td align="left" colspan="6"><strong>FECHA: </strong><?=$Fecha?></td><td colspan="7" align="left"><strong>DESCRIPCION: </strong><?=$Descripcion?></td></tr>
<tr><td align="left" colspan="6"><strong>PROVEEDOR: </strong><?=$Nombreprove?></td><td colspan="7" align="left"><strong>SUB CLIENTE: </strong><?=$Subcliente?></td></tr>
<tr><td align="left" colspan="6"><strong>CANTIDAD: </strong><?=$Cantidad?></td><td colspan="7" align="left"><strong>DUREZA: </strong><?=$Dureza?></td></tr>
<tr><td align="left" colspan="6"><strong>OBTENIDA: </strong><?=$Obtenida?></td><td colspan="7" align="left"><strong>MATERIAL: </strong><?=$Material?></td></tr>
</table>
</tr>
<tr>
<table border="1">
<tr><td colspan="13">&nbsp;</td></tr>
</table>
</tr>
<tr>
<table width="720" border='1' align="center">
<tr><td colspan="13"><strong align="center">OBSERVACIONES:   </strong><p align="left"><?=$Observaciones?></p></td>  <tr>                                                              
</table>
</tr>
<tr>
<table border="1">
<tr><td colspan="13">&nbsp;</td></tr>
</table>
</tr>
<tr>
<table width="720" border='1' align="center">
<tr><td><strong align="center">PIEZAS Y MEDIDAS</strong></td><tr>
<tr><td colspan="7" align="left"><strong>NRO.PIEZAS:  </strong><?=$Pieza?></td><td colspan="6" align="left"><strong>NRO.MEDIDAS:  </strong><?=$Cant?></td></tr>
<tr><td colspan="7" align="left"><strong>PROCEDIMIENTO:  </strong><?=$Nombreproce?></td><td colspan="6" align="left"><strong>TOLERANCIA:  </strong><?=$Nombretole?></td></tr>
</table>
</tr>
</tbody>									
</table>
<table>

</table>
<table width="720" border="1">
<thead><th colspan="1" width="15%"><strong>MEDIDAS</strong></th>
	<?
	for ($i=1; $i <= $Cant; $i++) 
	{ 
	?> 

		<th colspan="1.5" style="background-color:#EFEDBA;"><?=$i?></th>	

	<? } ?>
	</thead>
	<tr>	
	<th></th>
<?
                                                for ($i = 1; $i <= $Cant; $i++) 
												{
							

								$queryFS		="SELECT * FROM Fdimensionalitemsc where Idformato = '$Id' AND Medida = '$i' Order by Id ASC" ;
								$resultFS		=mysql_query($queryFS, $id);
													
								while($rowFS	=mysql_fetch_array($resultFS))
								{
								$Valor			=$rowFS["Ref"];
								}

												?>
													<td colspan="1" align="center"><?=$Valor?></td>
                                                <?
												}
												?>
                                               </tr>
                                               <tr>
                                                <th>Pieza No.</th>
                                                <?
                                                for ($i = 1; $i <= $Cant; $i++) 
												{
															$queryUSERS			="SELECT * FROM Tolerancia where (Idtipoproc = '$Idproc' and Idtipoprocopc = '$Idtole' and Muestra = 0)";
															$resultUSERS		=mysql_query($queryUSERS, $id);
																											
															While($rowUSERS		=mysql_fetch_array($resultUSERS))
															{
															$Desde				=$rowUSERS["Desde"];	
															$Hasta				=$rowUSERS["Hasta"];
															$Tolerancia			=$rowUSERS["Tolerancia"];
															$Tolerancia			=str_replace(",",".",$Tolerancia);
															
															if($Desde <= $Valora && $Hasta >= $Valora)
															{
															$Valor1 			=$Valora+$Tolerancia;
															$Valor2 			=$Valora-$Tolerancia;
															
															}
															
															if($Envia == 1 && $Paso == 1)
															{
															
																$queryFS		="SELECT * FROM Fdimensionalitemsc where Idformato = '$Id' AND Medida = '$i' Order by Id ASC" ;
																$resultFS		=mysql_query($queryFS, $id);
																					
																while($rowFS	=mysql_fetch_array($resultFS))
																{
																$Valor1			=$rowFS["Desde"];
																$Valor2			=$rowFS["Hasta"];

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
    
											</thead>

 
											<tbody>
<?
													
?>
												
															<?
                                                            for ($a = 1; $a <= $Pieza; $a++) 
                                                            {
                                                            ?>
                                                            <tr>
                                                            <td style="background-color:#E3E4E0;"><p align="center"><?=$a?></p></td>
                                                                <?
                                                                for ($o = 1; $o <= $Cant; $o++) 
                                                                {
																	
																
																		$queryF			="SELECT* FROM Fdimensionalitemsc where Idformato = '$Id' AND Pieza = '$a' AND Medida = '$o' Order by Id ASC" ;
																		$resultF		=mysql_query($queryF, $id);
																				
																		while($rowF		=mysql_fetch_array($resultF))
																		{
																		$ValorF			=$rowF["Valor"];
																		$ResultadoF		=$rowF["Resultado"];
																		}
	
																		$ValorF 				=str_ireplace(".",",",$ValorF);
																	
                                                                ?>
                                                                
                                                                    <td>
                                                                    <table width="200px" border="0">
                                                                      <tr>
                                                                        <td width="50%" style="text-align:center;background-color:#EFEDBA;"><?=$ValorF?></td>
                                                                        <td width="50%" style="text-align:center;"><?=$ResultadoF?></td>
                                                                      </tr>
                                                                    </table>
                                                                    </td>
            
                                                                <?
																	$ValorF			='';
																	$ResultadoF		='';
                                                                }
                                                                ?>
            
                                                                
               
                                                            </tr>
                                                            <?
                                                            }
                                                            ?>


												

                                                            <tr>
                                                            <td style="background-color: #FEABB1"><p align="center">%</p></td>
                                                                <?
                                                                for ($e = 1; $e <= $Cant; $e++) 
                                                                {

																		$queryE			="SELECT AVG(Valor) AS Valor FROM Fdimensionalitemsc where Idformato = '$Id' AND Medida = '$e' Order by Id ASC" ;
																		$resultE		=mysql_query($queryE, $id);
																				
																		while($rowE		=mysql_fetch_array($resultE))
																		{
																		$ValorE			=$rowE["Valor"];
																		}
																		
																		$queryR			="SELECT* FROM Fdimensionalitemsc where Idformato = '$Id' AND Medida = '$e' Order by Id ASC" ;
																		$resultR		=mysql_query($queryR, $id);
																				
																		while($rowR		=mysql_fetch_array($resultR))
																		{
																		$DesdeR			=$rowR["Desde"];
																		$HastaR			=$rowR["Hasta"];
																		}
																		
																		if(($DesdeR >= $ValorE) && ($HastaR <= $ValorE))
																		{
																			$ResultadoR	= 'CUMPLE';
																		}
																		else
																		{
																			$ResultadoR	= 'NO CUMPLE';
																		}
																		

                                                                ?>
                                                                
                                                                    <td style="background-color: #FEABB1">
                                                                    <table width="100%" border="0">
                                                                      <tr>
                                                                        <td width="50%" style="text-align:center;"><?=$ValorE?></td>
                                                                        <td width="50%" style="text-align:center;"><?=$ResultadoR?></td>
                                                                      </tr>
                                                                    </table>
                                                                    </td>
            
                                                                <?
																	$ValorF			='';
																	$ResultadoF		='';
                                                                }
                                                                ?>
            
                                                            </tr>


											</tbody>
										</table>

</body>
</html>

