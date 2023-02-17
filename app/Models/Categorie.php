<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $table = 'lafleur_categories';
    protected $primaryKey = 'id_categorie';
    protected $fillable = array('nom_categorie');
    public $timestamps = false;
}
