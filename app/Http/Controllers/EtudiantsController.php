<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;
use App\Cycle;
use App\Filiere;
use App\Nationalite;
use App\AnneeUniversitaire;

class EtudiantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiant=Etudiant::all();
       
        return view('forme.liste', compact('etudiant'));
    }

    public function card()
    {
        $etudiant=Etudiant::all();
       
        return view('forme.carte', compact('etudiant'));
    }
    
    public function vuecard($id)
    {
        $etudiant=Etudiant::find($id);
       
        return view('forme.vue', compact('etudiant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function forme(etudiant $etudiant)
    {
        $cycles = Cycle::get();
        $filieres = Filiere::get();
        return view('forme.etudiant',['cycles'=>$cycles],['filieres'=>$filieres]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $etudiant=Etudiant::create([
            'cycle_id'=>$request->cycle_id,
            'filiere_id'=>$request->filiere_id,
            'nationalite_id'=>$request->nationalite_id,
            'anneeUniversitaire_id'=>$request->anneeUniversitaire_id,
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'matricule'=>$request->matricule,
            'dateNaissance'=>$request->dateNaissance,
            'lieuNaissance'=>$request->lieuNaissance,
            'email'=>$request->email,
            'numero'=>$request->numero,
            'photo'=>$request->photo->store('images_etudiant','public')
            
        ]);
   
        return redirect ('nouveau-enregistrement');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($etudiant)
    {
        $etudiant=Etudiant::find($etudiant);
        $etudiant->delete();
        return redirect()->route('etudiant.index')->with(['reponse'=>"Etudiant supprimer"]);
    }
}
