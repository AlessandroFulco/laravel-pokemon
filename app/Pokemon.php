<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $table = 'pokemons';
    protected $fillable = ['species', 'gender', 'type', 'altezza', 'peso', 'livello'];
}
