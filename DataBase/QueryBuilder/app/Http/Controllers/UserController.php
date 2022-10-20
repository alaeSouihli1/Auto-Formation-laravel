<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
   //exemple 1
    public function index()
    {
        $users_data = UserModel::all();

        return $users_data ;
    }
   //exemple 2

    public function afficher(){
        $promotions=DB::select('SELECT * from promotion');

        echo"<pre>";
        print_r($promotions);
    }

    //exemple 3
    public function show()
    {
        $promotions = DB::table('promotion')->get();

        return view('index', ['promotions' => $promotions]);
    }
    //exemple 4
    // public function afficherParID($id)
    // {
    //     $Promotion = DB::table('promotion')
    //     ->where('id_promotion',$id)
    //     ->get();

    //     return view('index',compact('promotion'));
    // }


    //exemple 5
    public function first()
    {
        $users = DB::table('promotion')->first();


        return $users->name;
    }

    //exemple 6
    public function count(){
        $promotions=DB::table('promotion')->count();
        return $promotions;
    }

     //exemple 7
     public function max(){
        $promotions=DB::table('promotion')->max('id');
        return $promotions;
    }
    //exemple 8

    public function select(){
        $promotion = DB::table('promotion')->select('name')->get();
        return $promotion;
    }

     //exemple 9

     public function join(){
        $request = DB::table('promotion')
        ->join('users','promotion.id','=','users.id')
        ->select('promotion.name','users.nom')
        ->get();
        return $request;
    }


}
