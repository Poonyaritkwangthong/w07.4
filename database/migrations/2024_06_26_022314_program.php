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
        Schema::create('program', function (Blueprint $table){
            $table->id();
            $table->string('program_th');
            $table->string('program_en');
            $table->integer('grad_year');
            $table->unsignedBigInteger('prg_fac_id');
            $table->timestamps();

            $table->foreign('prg_fac_id')->references('id')->on('faculty');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
