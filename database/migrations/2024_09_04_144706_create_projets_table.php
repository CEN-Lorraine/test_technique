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
        Schema::create('projets', function (Blueprint $table) {
            $table->id();

            $table->string('nom', 250);
            $table->date('debut')->nullable();
            $table->date('fin')->nullable();

            $table->timestamps();
        });

        DB::table('projets')->insert(
            [
                'nom' => 'Projet 1',
                'debut' => null,
                'fin' => null,
            ]
        );

        DB::table('projets')->insert(
            [
                'nom' => 'Projet 2',
                'debut' => null,
                'fin' => null,
            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projets');
    }
};
