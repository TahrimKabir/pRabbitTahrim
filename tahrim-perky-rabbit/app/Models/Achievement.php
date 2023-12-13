<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;
    public function achieve()
    {
        return $this->hasMany(EmpAchieve::class,'id','achievement_id');
    }
}
