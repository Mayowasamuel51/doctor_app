<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('RADIOLOGY (X-ray DEPARTMENT')->nullable();
            $table->string('MEDICAL DEPARTMENT')->nullable();
            $table->string('NURSING  DEPARTMENT')->nullable();
            $table->string('PHARMACY DEPARTMENT')->nullable();
            $table->string('DEPARTMENT OF ANAESTHESIA')->nullable();
            $table->string('DEPARTMENT OF EAR NOSE THROAT')->nullable();
            $table->string('DEPARTMENT OF CHIID DENTAL HEALTH')->nullable();
            $table->string('DEPARTMENT OF FAMILY MEDICINE')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
};
