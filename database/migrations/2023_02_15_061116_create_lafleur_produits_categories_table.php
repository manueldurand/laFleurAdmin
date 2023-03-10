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
        Schema::create('lafleur_produits_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('produit_id');
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('produit_id')->references('id')->on('lafleur_produits');
            $table->foreign('categorie_id')->references('id_categorie')->on('lafleur_categories');
            $table->primary(['produit_id', 'categorie_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lafleur_produits_categories');
    }
};
