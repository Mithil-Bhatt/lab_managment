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
        Schema::create('complain', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lab_id');
            $table->foreign('lab_id')->references('lab_id')->on('lab');
            $table->unsignedBigInteger('computer_id');
            $table->foreign('computer_id')->references('computer_id')->on('computer');
            $table->unsignedBigInteger('software_id');
            $table->foreign('software_id')->references('id')->on('software');
            $table->unsignedBigInteger('hardware_id');
            $table->foreign('hardware_id')->references('id')->on('hardware');
            $table->string('feedback');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complain');
    }
};
