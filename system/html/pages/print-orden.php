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


	$Id 	= 	$_REQUEST["Id"];
	
 	// récupération du contenu HTML
	ob_start();
 	include(dirname(__FILE__).'/print-orden-ok.php');
	$content = ob_get_clean();

	// conversion HTML => PDF
	require_once(dirname(__FILE__).'/html2pdf.class.php');

	$html2pdf = new HTML2PDF('P', 'A4', 'es');
	$html2pdf->pdf->SetDisplayMode(fullpage); 
//	$html2pdf->pdf->SetProtection(array('print'), 'spipu');
	$html2pdf->WriteHTML($content, isset($_GET['']));
	$html2pdf->Output('corizacion-'.$Id.'.pdf');

?>	