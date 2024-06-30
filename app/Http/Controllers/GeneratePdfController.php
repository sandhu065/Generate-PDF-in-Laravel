<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class GeneratePdfController extends Controller
{
    public function index()
    {
    //    1) composer require barryvdh/laravel-dompdf.
    //    2) config/app.php
       
    //         'providers' => [
    //             Barryvdh\DomPDF\ServiceProvider::class,
    //         ],
    //         'aliases' => [
    //             'PDF' => Barryvdh\DomPDF\Facade::class,
    //         ],
    //      3) Add this in controller 
    //      use Barryvdh\DomPDF\Facade\Pdf;

    }

    public function generate_pdf(){
        $data = [];
        $pdf = Pdf::loadView('pdfview', $data);
        return $pdf->download('invoice.pdf');
    }
}
