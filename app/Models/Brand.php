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
}
