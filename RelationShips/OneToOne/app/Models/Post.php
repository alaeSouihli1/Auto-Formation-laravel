<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;
use App\Models\Detail;

class Post extends Model
{
    use HasFactory;

    public function detail():HasOne{
        return this->hasOne(Detail::class);
    }
}
