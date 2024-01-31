<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class division extends Model
{
    use HasFactory;

    protected $table = 'divisions';

    public function upazilas()
    {
        return $this->hasOneThrough(
          districts::class,
            upazilas::class,
            'district_id',
            'division_id',
            'id',
            'id'
        );
    }
}
