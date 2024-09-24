<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->integer('qteInit')->default(0);
            $table->integer('qteAlerte')->default(0);
            $table->enum('actif', ['Disponible', 'Indisponible']);
            $table->foreignId('categorie_id')->constrained('categories', 'id');
            $table->foreignId('fournisseur_id')->constrained('fournisseurs', 'id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
