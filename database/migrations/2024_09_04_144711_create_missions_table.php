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
        Schema::create('missions', function (Blueprint $table) {
            $table->id();

            $table->string('nom', 100);
            $table->string('nom_interne', 100);

            $table->timestamps();
        });

        DB::table('missions')->insert(
            [
                'nom' => 'Scientifique',
                'nom_interne' => 'scientifique',
            ]
        );

        DB::table('missions')->insert(
            [
                'nom' => 'Administrative',
                'nom_interne' => 'administrative',
            ]
        );

        DB::table('missions')->insert(
            [
                'nom' => 'Valorisation',
                'nom_interne' => 'valorisation',
            ]
        );

        DB::table('missions')->insert(
            [
                'nom' => 'Territoriale',
                'nom_interne' => 'territoriale',
            ]
        );

        DB::table('missions')->insert(
            [
                'nom' => 'Gestion',
                'nom_interne' => 'gestion',
            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('missions');
    }
};
