<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipotramite extends Model
{
    public function ciudadanos()
    {
    	return $this->hasMany(Ciudadano::class);
    }
}
