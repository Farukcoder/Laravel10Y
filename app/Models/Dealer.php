<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    use HasFactory;

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brands_dealers');
    }

    public function belongsToManyBrand()
    {
        return $this->belongsToMany(Dealer::class, 'brands_dealers');
    }
}
