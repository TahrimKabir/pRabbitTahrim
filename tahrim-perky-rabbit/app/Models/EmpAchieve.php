<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpAchieve extends Model
{
    use HasFactory;
    protected $table = 'achievement_employee';
    public function emp()
    {
        return $this->belongsTo(Employee::class,'employee_id','id');
    }

    public function achieve()
    {
        return $this->belongsTo(Achievement::class,'achievement_id','id');
    }
}
