<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousCatDepense extends Model
{
    use HasFactory;

    protected $table = 'sous_cat_depenses';
    protected $fillable = ['description'];

    public function cat(){
        return $this->belongsTo(CatDepense::class);
    }
}
