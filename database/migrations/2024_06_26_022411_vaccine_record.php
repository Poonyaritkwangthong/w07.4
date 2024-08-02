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
        Schema::create('vaccine_record', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('std_id');
            $table->unsignedBigInteger('vac_id');
            $table->date('vaccinated_date');
            $table->timestamps();

            $table->foreign('std_id')->references('id')->on('student');
            $table->foreign('vac_id')->references('id')->on('vaccine');
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
