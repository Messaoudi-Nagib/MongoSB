<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function tools(){
        return $this->hasMany('App\Tool');
    }
}
