<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'name',
        'description',
        'small_description',
        'orginal_price',
        'price',
        'stock',
        'is_active'
    ];

    protected $casts=[
        'start_date' => 'date',
        'end_date' => 'datetime:Y-m-d',
        'is_active' => 'boolean',
    ];

    protected $appends = [
        'name_price'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    public function getNamePriceAttribute()
    {
        return $this->name . ' - ' . $this->price;
    }
}
