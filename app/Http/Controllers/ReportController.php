<?php

namespace App\Http\Controllers;


class ReportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function loadPdf()
    {
        $data = array(
            'title' => 'This is it',
            'message' => 'Gotcha',
            'img_url' => 'https://static1.squarespace.com/static/56a3ff78fd5d084f3248a450/t/56a409464bf11808a0af9e35/1480349368121/sponsor-a-duck'
        );
        
        $pdf = app()->make('dompdf.wrapper');
        $pdf->loadView('pdf.invoice', $data);
        return $pdf->stream();
    }

    public function test()
    {
        return 'test controller method';
    }
}
