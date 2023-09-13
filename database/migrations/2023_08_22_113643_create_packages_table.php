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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('naslov');
            $table->string('godDoba');
            $table->integer('brNocenja');
            $table->string('slika');
            $table->string('hotel');
            $table->string('adresa');
            $table->date('polazak');
            $table->enum('prevoz',['da','ne']);
            $table->longText('opis');
            $table->enum('vrsta',['LJ',"Z","I","O"]); #Ljetovanje, zimovanje, izlet, ostalo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
