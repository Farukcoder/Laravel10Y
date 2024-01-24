<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }
    public function manyTeacher()
    {
        return $this->hasMany(Teacher::class);
    }
    public function manyToManyTeacher()
    {
        return $this->belongsToMany(DepartmentTeacher::class, DepartmentTeacher::class);
    }

}
