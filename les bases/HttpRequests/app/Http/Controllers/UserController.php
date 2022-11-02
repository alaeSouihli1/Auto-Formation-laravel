<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    //premier exemple
    public function index(Request $request)
    {
        $name=$request->input('name');
        return view('index',compact('name'));
    }

    public function findId(Request $request,$id){

        if($id < 1){
        $name = $request->input("name");
        return "Hello $name";
    }
    }

}
