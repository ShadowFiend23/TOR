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
        Schema::create('enrollees', function (Blueprint $table) {
            $table->id();
            $table->string('studentID');
            $table->text("enrolledSubjects");
            $table->smallInteger('year');
            $table->smallInteger('semester');
            $table->string('schoolYear');
            $table->string('studentType');
            $table->text("grades")->nullable();
            //$table->string('section')->();
            $table->smallInteger('active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollees');
    }
};
