<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   
    public function afficher()
    {
        return 'hello world';
    }

 
    public function index()
    {
        $name="alae";
        $age=20;
        return view('index',compact('name','age'));
    }

    
}
