<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
{ 
    public function etudiant()
    {
        return $this->hasMany('App\Etudiant');
    }
}
