<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatDepense extends Model
{
    use HasFactory;

    protected $table = 'cat_depenses';
    protected $fillable = ['libelle'];

    public function souscat(){
        return $this->hasMany(SousCatDepense::class);
    }
}
