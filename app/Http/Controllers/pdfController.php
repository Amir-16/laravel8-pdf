<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class pdfController extends Controller
{
    

    public function generatePDF()
    {
        $data = ['title' => 'Welcome to pdf '];
        $pdf = PDF::loadView('myPdf', $data);
  
        return $pdf->download('itsolutionstuff.pdf');
    }
}
