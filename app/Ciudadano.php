<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudadano extends Model
{
    public function tipotramite()
    {
    	return $this->belongsTo(tipotramite::class);
    }
}
