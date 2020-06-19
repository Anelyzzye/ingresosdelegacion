<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suborder extends Model
{
	protected $fillable = [
    	'product_id', 'order_id','price','payment'
    ];

     public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
