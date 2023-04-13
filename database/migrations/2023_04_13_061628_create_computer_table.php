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
        Schema::create('computer', function (Blueprint $table) {
            $table->id('computer_id');
            $table->string('computer_no');
            $table->unsignedBigInteger('lab_id');
            $table->foreign('lab_id')->references('lab_id')->on('lab'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computer');
    }
};
