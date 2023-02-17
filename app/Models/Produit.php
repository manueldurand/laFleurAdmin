<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $table = "lafleur_produits";
    protected $primaryKey = "id";
    protected $fillable = array('nom_produit', 'couleur_id', 'description','type', 'stock', 'image');
    public $timestamps = false;

    public function couleur()
    {
        return $this->belongsTo(Couleur::class);
    }
}
