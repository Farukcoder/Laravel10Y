<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public function dealer()
    {
        return $this->hasOne(Dealer::class, 'brand_id', 'id');
    }

    public function meanyDealer()
    {
        return $this->hasMany(Dealer::class, 'brand_id', 'id');
    }

    public function belongsToManyDealer()
    {
        return $this->belongsToMany(Dealer::class, 'brands_dealers');
    }
}
