<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputersController extends Controller
{



    //array of static Data
    // private static function  getData(){
    //     return
    //     [
    //         ['id'=> 1, 'name'=>'LG','origin'=>'Korea','price'=>'11'],
    //         ['id'=> 2, 'name'=>'HP','origin'=>'USA','price'=>'112'],
    //         ['id'=> 3, 'name'=>'Siemens','origin'=>'Germany','price'=>'121'],


    //     ];
    // }

    public function index()
    {
        return view('computers.index',[
            'computers' => Computer::all()
        ]);
    }


    public function create()
    {
        return view('computers.create');
    }

    //validation (we use function validate() and strip_tags )

    public function store(Request $request)
    {

        $request->validate([
            'computer-name'=>['required'],
            'computer-origin'=>['required'],
            'computer-price'=>['required','integer']
        ]);

         $computer=new Computer();
         $computer->name= strip_tags($request->input('computer-name'));
         $computer->origin=strip_tags($request->input('computer-origin'));
         $computer->price=strip_tags($request->input('computer-price'));

         $computer->save();

         return redirect()->route('computers.index');


    }

    public function show($computer)
    {
        $index= Computer::findOrFail($computer);

        return view('computers.show',[
            'computer' => $index
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
