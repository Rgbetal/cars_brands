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
        Schema::create('fournisseurs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('full_name');       // Nom du fournisseur
            $table->string('phone')->unique(); // Téléphone du fournisseur
            $table->string('photo')->nullable(); // URL de la photo du fournisseur
            $table->string('created_at')->unique(); // Date de création du fournisseur
            $table->string('updated_at')->unique(); // Date de mise à jour du fournisseur

    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fournisseurs');
    }
};
