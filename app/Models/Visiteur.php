<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visiteur extends Model{
    //On déclare la table visiteur
    protected $table = 'visiteur';
    protected $primaryKey = 'idVisiteur';
    public $timestamps = false;
}
