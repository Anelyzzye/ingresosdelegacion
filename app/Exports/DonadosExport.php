<?php

namespace App\Exports;

use App\PorcentajeDonado;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

//use Maatwebsite\Excel\Concerns\FromCollection;

class DonadosExport implements FromView
{

	use Exportable;
	public function view(): view
	{
		return view('exports.donadoexcel', [
			'donacion' => PorcentajeDonado::all()
		]);
	}
    
    /**public function collection()
    {
        return PorcentajeDonado::all();
    }*/
}
