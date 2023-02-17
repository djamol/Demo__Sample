<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function index() 
    {

    	$pdf = PDF::loadView('pdf.print', [
    		'title' => 'CodeAndDeploy.com Laravel Pdf Tutorial',
    		'description' => 'This is an example Laravel pdf tutorial.',
    		'footer' => 'by <a href="https://codeanddeploy.com">codeanddeploy.com</a>'
    	]);
    	$customPaper = array(0,0,720,1200);
    $pdf->setPaper($customPaper, 'portrait');

        return $pdf->download('invoice.pdf');
    }
}
