<?php

namespace App\Http\Controllers;
use App\Projet;
use App\Http\Requests\StoreProjet;
use Illuminate\Http\Request;
use Auth;

class ProjetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets = Projet::all();
        //compact sert a exporteé la variable posts,  
        // cest pas l url sest le chemin!! filsde
        return view ('admin.index',compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjet $request)
    {

        // création d u n nouveau post
        $projet = new Projet;
        $projet->titre = $request->titre;
        $projet->contenu = $request->contenu;
        if($projet->save()){
            return redirect()->route('projets.show',['projet'=> $projet->id]);
  

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Projet $projet)
    {
    //    Projet = model et projet = le post    dansle dossier admin, la blade show

        return view ('admin.show',compact("projet"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Projet $projet)
    {
        return view ('admin.edit', compact('projet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projet $projet)
    {
        $projet->titre = $request->titre;
        $projet->contenu = $request->contenu;

        if($projet->save()){
            return redirect()->route('projets.show',['projet'=> $projet->id]);
  

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projet $projet)
    {
    
        if($projet->delete()){
            return redirect()->route('projets.index');
        }
    }
}
