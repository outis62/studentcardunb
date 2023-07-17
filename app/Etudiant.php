<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = [
        'cycle_id','filiere_id','nationalite_id','anneeUniversitaire_id','nom','prenom',
        'matricule','dateNaissance','lieuNaissance','email','numero','photo'
     ];
    public function cycle()
    {
        return $this->belongsTo('App\Cycle');
    }

    public function filiere()
    {
        return $this->belongsTo('App\Filiere');
    }

    
    public function nationalite()
    {
        return $this->belongsTo('App\Nationalite');
    }

    public function anneeUniversitaire()
    {
        return $this->belongsTo('App\AnneeUniversitaire');
    }
}
