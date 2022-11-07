<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;

class PromotionController extends Controller
{
    public function hasOne(){
        $data=Promotion::find(1)->oneApprenant;
        return $data;
    }
}
