<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brief;


class Brief extends Model
{
    use HasFactory;
    public function apprenants(){
        return $this->belongsToMany(Brief::class,'brief_apprenants');
    }
}
