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
        Schema::create('examdetails', function (Blueprint $table) {
            $table->id();
            $table->string('studentId');
            $table->string('M1');
            $table->string('M2');
            $table->string('M3');
            $table->string('M4');
            $table->string('M5');
            $table->string('M6');
            $table->string('M7');
            $table->string('R1');
            $table->string('R2');
            $table->string('R3');
            $table->string('R4');
            $table->string('R5');
            $table->string('E1');
            $table->string('Proj');
            $table->string('Percentage');
            $table->string('ExtraPoint');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examdetails');
    }
};
