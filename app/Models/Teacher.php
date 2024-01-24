<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function manyToManyDepartment()
    {
        return $this->belongsToMany(DepartmentTeacher::class, DepartmentTeacher::class);
    }
}
