<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        $l1=Etudiant::where('cycle_id','1')->get();
        $l2=Etudiant::where('cycle_id','2')->get();
        $l3=Etudiant::where('cycle_id','3')->get();
        $reseau=Etudiant::where('filiere_id','1')->get();
        $securite=Etudiant::where('filiere_id','3')->get();
        $programation=Etudiant::where('filiere_id','2')->get();
     
        return view('home', compact('l1','l2','l3','reseau','programation','securite'));
    }

   
}
