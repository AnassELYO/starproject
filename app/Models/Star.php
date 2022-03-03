<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Star extends Model
{
    use HasFactory;
    public $timestamps = false; /* Pas de champs created_at et updated_at en bdd, ce champ permet à eloquent de pas vouloir les inserer */
    protected $guarded = [];  /* Permet d'assigner en masse sans avoir à préciser chaque champ, inserer dans le guarded le ou les champs qu'on ne veut pas inserer en bdd */
    /* j'aurais pu aussi faire un protected $fillables = [] et mettre les champs recquis dedans */

    /* Tableau de verifications de données */
    public static $validateFields = [
        'name' => 'required|string',
        'first_name' => 'required|string',
        'image' => 'required|image',
        'description' => 'required|string'
    ];
}
