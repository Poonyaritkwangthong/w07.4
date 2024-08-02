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
        Schema::create('student', function (Blueprint $table){
            $table->id();
            $table->integer('sid');
            $table->string('fname');
            $table->string('lname');
            $table->unsignedBigInteger('std_prg_id');
            $table->timestamps();

            $table->foreign('std_prg_id')->references('id')->on('program');
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
