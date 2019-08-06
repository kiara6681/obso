<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    // Include the main TCPDF library (search for installation path).
	require_once('TCPDF-master/tcpdf.php');
	        // create new PDF document
	
	if (!function_exists('PdfGenrate')) {
	    function PdfGenrate($data,$view) {
	    	$ci = get_instance();
	    	$pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
			$pdf->setPrintHeader(false);
			$pdf->setPrintFooter(false);
 			$pdf->AddPage();
			ob_start();
			// we can have any view part here like HTML, PHP etc
			$content =$ci->load->view($view,$data,true);
			ob_end_clean();
			$pdf->writeHTML($content, true, false, true, false, '');
			$pdf->Output(time().'_invoic.pdf');
	        die();
	        
			
	    }
	}
?>