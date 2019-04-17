<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skate extends Model
{
    protected $fillable = ["model", "size", "type", "price", "description"];

}
