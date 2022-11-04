<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Http\Models\Brief;

class Tache extends Model
{
    use HasFactory;
    public function briefs():HasOne{
        return $this->belongsTo(Brief::class);
    }
}
