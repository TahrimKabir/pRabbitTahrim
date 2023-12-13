<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','phone','address','dept_id'];
    public $timestamps=false;

    public function dept()
    {
        return $this->belongsTo(Department::class,'dept_id','id');
    }

    public function eachieve()
    {
        return $this->hasMany(EmpAchieve::class,'employee_id','id');
    }
}
