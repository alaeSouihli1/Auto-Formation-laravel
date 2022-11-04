<?php

namespace App\Http\Controllers;
use App\Models\Tache;

use Illuminate\Http\Request;

class TacheController extends Controller
{
   
    public function index()
    {
        
    }

   
    public function create($id)
    {
        return view('taches.create',['id_brief'=>$id]);
    }

    public function store(Request $request)
    {
        $tache=new Tache();
        $tache->nom=$request->input('nom');
        $tache->description=$request->input('description');
        $tache->dateDebut=$request->input('dateDebut');
        $tache->dateFin=$request->input('dateFin');
        $tache->id_brief=$request->input('id_brief');
        $tache->save();
        return redirect()->route('briefs.edit',$tache->id_brief);


    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        return view('taches.edit',['tache'=>Tache::findOrFail($id)]);
    }

    
    public function update(Request $request, $id)
    {
        $toUpdate=Tache::findOrFail($id);
        $toUpdate->nom=strip_tags($request->input('nom'));
        $toUpdate->description=strip_tags($request->input('description'));
        $toUpdate->dateDebut=strip_tags($request->input('dateDebut'));
        $toUpdate->dateFin=strip_tags($request->input('dateFin'));
        $toUpdate->id_brief=strip_tags($request->input('id_brief'));
        $toUpdate->save();
        return redirect()->route('briefs.edit',$toUpdate->id_brief);

        


    }

   
    public function destroy($id)
    {
        
        $toDelete=Tache::findOrFail($id);
        $toDelete->delete();
        return redirect(route('briefs.edit',$toDelete->id_brief));
    }
}
