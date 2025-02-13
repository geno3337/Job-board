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
        Schema::create('job_details', function (Blueprint $table) {
            $table->id()->unique();
            $table->softDeletes();
            $table->string('jobRole');
            $table->string('jobArea');
            $table->string('skillsRequired');
            $table->integer('salary');
            $table->string('company');
            $table->string('location');
            $table->integer('experience');
            $table->string('discription');
            $table->string('applyLink');
            $table->boolean('isAproved')->default(false);
            $table->string('postedBy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_details');
    }
};
