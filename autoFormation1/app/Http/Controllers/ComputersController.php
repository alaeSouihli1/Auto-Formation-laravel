<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputersController extends Controller
{



    //array of static Data
    private static function  getData(){
        return 
        [
            ['id'=> 1, 'name'=>'LG','origin'=>'Korea'],
            ['id'=> 2, 'name'=>'HP','origin'=>'USA'],
            ['id'=> 3, 'name'=>'Siemens','origin'=>'Germany'],


        ];
    }

    public function index()
    {
        return view('computers.index',[
            'computers' => self::getData()
        ]);
    }

  
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($computer)
    {
        $computers=self::getData( );
        $index=array_search($computer,array_column($computers,'id'));
        if($index===false){
            abort(404);
        }
        return view('computers.show',[
            'computer' => $computers[$index]
        ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
