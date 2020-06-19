<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PorcentajeDonado;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\DonadosExport;

class PdfdonacionController extends Controller
{
     public function exportPdf(Request $request)
    {   
        $concepto = $request->concepto;
        $donacion = PorcentajeDonado::orderBy('id', 'DESC')
                            ->where('concepto', 'LIKE', '%'.$concepto.'%')
                            ->get();
        
        $pdf = PDF::loadView('pdf.donacion', compact('donacion'));

        return $pdf->download('reportedonaciones.pdf');
        //var_dump($request->input('concepto'));
    }

    public function exportExcel(Request $request)
    {
        $donacion = $request['criterio'];
        $dona = explode("¬",$donacion);

        //return $dona;

    	return view('exports.donadoexcel', compact('dona'));
    }
}
