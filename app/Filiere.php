<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    public function etudiant()
    {
        return $this->hasMany('App\Etudiant');
    }
}
