<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Brief;
use App\Models\Tache;

class BriefController extends Controller
{
 
    public function index()
    {
        return view('briefs.index',['briefs'=>Brief::all()]);
    }

  
    public function create()
    {
        return view('briefs.create');
    }

  
    public function store(Request $request)
    {
        // $user = User::where('email', '=', Input::get('email'))->first();
        // if ($user === null) {
        // // user doesn't exist
        // }
        $brief=new Brief();
        $brief->nom=$request->input('nom');
        
        $brief->dateHeureLivraison=$request->input('dateHeureLivraison');
        $brief->dateHeureRecuperation=$request->input('dateHeureRecuperation');
        $brief->save();
        return redirect(route('briefs.index'));
    }

    
    public function show($id)
    {
        return view('briefs.show',['brief'=>Brief::findOrFail($id)]);

    }

    
    public function edit($id)
    {
        $taches=Tache::select("*")->where('id_brief',$id)->get();
        return view('briefs.edit',['brief'=>Brief::findOrFail($id),'taches'=>$taches]);
    }

   
    public function update(Request $request, $id)
    {
        $toUpdate=Brief::findOrFail($id);
        $toUpdate->nom=strip_tags($request->input('nom'));
        $toUpdate->dateHeureLivraison=strip_tags($request->input('dateHeureLivraison'));
        $toUpdate->dateHeureLivraison=strip_tags($request->input('dateHeureRecuperation'));
        $toUpdate->save();
        return redirect(route('briefs.index'));
    }

    public function destroy($id)
    {
        $toDelete=Brief::findOrFail($id);
        $toDelete->delete();
        return redirect(route('briefs.index'));
        }

        public function search(Request $request){
            if($request->ajax()){
                $output="";
                $briefs=Brief::where('nom','LIKE','%'.$request->search."%")->get();
                if($briefs){
                    foreach($briefs as $brief){
                        $output.='<tr>.
                            <td>'.$brief->nom.'</td>
                            <td>'.$brief->dateHeureLivraison.'</td>
                            <td>'.$brief->dateHeureRecuperation.'</td>

                            <td><a href="'.route('briefs.edit',$brief->id).'" >Modifier</a></td>
                            <td><a href="">assignement</a>
                            <td><a href="'.route('taches.create',$brief->id).'">+Tache</a>
                            <td>
                                <form action="'.route('briefs.destroy',$brief->id).'" method="POST">
                                <input type="hidden" name="_token" value="YE0mBGjemSdxhMQPa9RQK2gUtb7bOW7TnGAqenTj">
                                <input type="hidden" name="_method" value="DELETE">
                                <input  type="submit" value="Supprimer" />
                                </form>
                            </td>
                        </tr>';
                     
                    }
                    return Response($output);
    
                }
            }

        }
}
