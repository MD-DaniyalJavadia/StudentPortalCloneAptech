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
        Schema::create('semeter_nos', function (Blueprint $table) {
            $table->id();
            $table->string('Semester1');
            $table->string('Semester2');
            $table->string('Semester3');
            $table->string('Semester4');
            $table->string('Semester5');
            $table->string('Semester6');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('semeter_nos');
    }
};
