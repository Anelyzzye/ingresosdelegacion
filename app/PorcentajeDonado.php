<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PorcentajeDonado extends Model
{
    public function scopeConcepto($query, $concepto){
    	if($concepto)
    		return $query->where('concepto', 'LIKE',"%$concepto%");
    }
}
