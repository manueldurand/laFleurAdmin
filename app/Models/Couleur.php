<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Couleur extends Model
{
    use HasFactory;

    protected $table = 'lafleur_couleurs';
    protected $primaryKey = 'id_couleur';
    protected $fillable = array('nom_couleur');
    public $timestamps = false;

    public function produits()
    {
        return $this->hasMany(Produit::class);
    }
}
