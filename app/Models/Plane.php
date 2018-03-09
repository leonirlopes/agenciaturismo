<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{

    protected $fillable = ['brand_id', 'class', 'total_passengers'];

    public function classes($className = null)
    {
        $classes = [
            ''          => 'Escolha uma classe:',
            'economic'  => 'Econômica',
            'standard'  => 'Standard', 
            'luxury'    => 'Luxo',
        ];

        if(!$className)
            return $classes;

            return $classes[$className];


    }

    public function  brand()
    {
        return $this->belongsTo(Brand::class);    
    }
}
