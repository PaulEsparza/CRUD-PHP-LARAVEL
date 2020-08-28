<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    //
    protected $fillable = ['responsable','description']; //Campos que se van a agregar en la bd
}
