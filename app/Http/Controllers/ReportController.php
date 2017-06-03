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
            'message' => 'Gotcha'
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
