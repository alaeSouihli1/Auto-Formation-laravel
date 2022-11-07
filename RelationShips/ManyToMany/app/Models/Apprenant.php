<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Apprenant;

class Apprenant extends Model
{
    use HasFactory;
    public function briefs(){
        return $this->belongsToMany(Apprenant::class,'brief_apprenants');
    }
}
