<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    public function categorie(){
        return $this->belongsTo('App\Categorie');
    }
}
