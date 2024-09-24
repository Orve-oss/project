<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;
    protected $table = 'fournisseurs';
    protected $fillable = ['nom', 'adresse', 'actif'];

    public function produits(){
        return $this->hasMany(Produit::class);
    }
}
