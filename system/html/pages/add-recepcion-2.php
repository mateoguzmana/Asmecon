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


$Fechah					= date("Y-m-d H:i:s");
$Usuario				= $_SESSION['usuario'];	

$Idmenu					= $_REQUEST["Idmenu"];
$Idsubmenu				= $_REQUEST["Idsubmenu"];
$Idopcmenu				= $_REQUEST["Idopcmenu"];


$Fecha						= $_POST["Fecha"];
$Idservicio					= $_POST["Idservicio"];
$Cotizacion					= $_POST["Idccotiz"];
$Cliente					= $_POST["Cliente"];
$Nit						= $_POST["Nitclien"];
$Descripcion				= $_POST["Descripcion"];
$Tipoinst					= $_POST["Tipoinst"];
$Identificacion				= $_POST["Identificacion"];
$Soporte					= $_POST["Soporte"];
$Nrosopo					= $_POST["Nrosopo"];
$Unidades					= $_POST["Unidades"];
$Comentarios				= $_POST["Descripcion"];






$sql="INSERT INTO  Recepcion (Idservicio, Fecha, Cotizacion, Cliente, Nit, Descripcion, Tipoinst, Identificacion, Soporte, Nrosopo, Unidades, Comentarios, Fechahora, Usuario)";
$sql.= "VALUES ('$Idservicio', '$Fecha', '$Cotizacion', '$Cliente', '$Nit', '$Descripcion', '$Tipoinst', '$Identificacion', '$Soporte', '$Nrosopo', '$Unidades', '$Comentarios', '$Fechah', '$Usuario')";
mysql_query($sql);	


		$query			="SELECT* FROM Recepcion Order by Id ASC" ;
		$result			=mysql_query($query, $id);
		
		While($row		=mysql_fetch_array($result))
		{
		$Id				=$row["Id"];
		}
		
		
		
		$archivo1 		= $_FILES['foto']['tmp_name'];
		
		$archiv			=			$_FILES['foto']['name'];
		$extension 		= 			explode(".",$archiv);
		$ext			= 			$extension[1];


	if(!empty($archivo1))
	{
	$foto1= $Id.".".$ext;
	
	(copy($archivo1, "recepcion/".$foto1));
	
	$query="UPDATE Recepcion set Foto='$foto1' Where Id='$Id'";
	$result=mysql_query($query, $id);
	
	}


			$contest				=0;
			
			$query					="SELECT* FROM Estado where Idservicio = '$Idservicio' ORDER BY Nombre" ;
			$result					=mysql_query($query, $id);
			
			while($row				=mysql_fetch_array($result))
			{
			$Nombreest				= $row["Nombre"];
			
			$contest++;
			

				$estad				= $_POST["estad".$contest];
				
				if($estad == 'SI')
				{
				$Cant				= $_POST["Cant".$contest];
				}
					if(!empty($estad))	
					{
						$sql="INSERT INTO  Recepcionestados (Idrecep, Nombre, Valor, Cant)";
						$sql.= "VALUES ('$Id', '$Nombreest', '$estad', '$Cant')";
						mysql_query($sql);	
					}
					
				$estad		=	'';

			$Nombreest	=	'';

			}
			

			
			$contdoc				=0;
			
			$query					="SELECT* FROM Documentacion where Idservicio = '$Idservicio' ORDER BY Nombre" ;
			$result					=mysql_query($query, $id);
			
			while($row				=mysql_fetch_array($result))
			{
			$Nombredoc				= $row["Nombre"];
			
			$contdoc++;
			
	
				$documen			= $_POST["documen".$contdoc];
				
					if(!empty($documen))	
					{
						$sql="INSERT INTO  Recepciondocument (Idrecep, Nombre, Valor)";
						$sql.= "VALUES ('$Id', '$Nombredoc', '$documen')";
						mysql_query($sql);	
					}
					
				$documen			= '';
			$Nombredoc				= '';
			}
			
		



?>


<script type="text/javascript">
alert('La operacion se realizo con exito.');
window.location.href = 'add-recepcion.php?Idmenu=<?=$Idmenu?>&Idsubmenu=<?=$Idsubmenu?>&Idopcmenu=<?=$Idopcmenu?>';
</script>