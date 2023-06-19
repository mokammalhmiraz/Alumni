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
        Schema::create('jobapplies', function (Blueprint $table) {
            $table->id();
            $table->integer('job_id');
            $table->integer('applicant_id');
            $table->string('applicant_name', 100);
            $table->string('applicant_email', 100);
            $table->string('applicant_number', 100);
            $table->string('applicant_address', 250);
            $table->string('applicant_photo', 250);
            $table->longText('applicant_about');
            $table->string('applicant_cv', 250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobapplies');
    }
};
