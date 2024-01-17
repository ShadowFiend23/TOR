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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('studentID');
            $table->string('lastName');
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('suffix')->nullable();
            $table->string('email');
            $table->smallInteger('course');
            $table->smallInteger('curriculum');
            $table->string('birthPlace')->nullable();
            $table->date('birthDate')->nullable();
            $table->string('street')->nullable();
            $table->string('barangay')->nullable();
            $table->string('town')->nullable();
            $table->string('guardian')->nullable();
            $table->string('guardianAddress')->nullable();
            $table->string('ncee')->nullable();
            $table->date('nceeDate')->nullable();
            $table->string('nceePlace')->nullable();
            $table->string('elementarySchool')->nullable();
            $table->string('elementaryYear')->nullable();
            $table->string('secondarySchool')->nullable();
            $table->string('secondaryYear')->nullable();
            $table->string('photo')->nullable();
            $table->string('registered')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
