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
        Schema::create('lafleur_produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom_produit');
            $table->unsignedBigInteger('couleur_id')->default(1);
            $table->foreign('couleur_id')->references('id_couleur')->on('lafleur_couleurs');
            $table->text('description');
            $table->enum('type',['unité', 'bouquet', 'gerbe'] );
            $table->bigInteger('stock')->default(0);
            $table->string('image')->default('default.png');
            $table->timestamp('mise à jour')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lafleur_produits');
    }
};
