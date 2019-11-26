<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class etudiants extends Model
{
    protected $fillable = ['nom','prenom','annee','grp','mat','email','password'];
}
