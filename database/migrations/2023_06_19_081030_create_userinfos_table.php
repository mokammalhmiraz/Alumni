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
        Schema::create('userinfos', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unique();
            $table->longText('about')->nullable();
            $table->string('edu_title')->nullable();
            $table->string('start')->nullable();
            $table->string('number')->nullable();
            $table->string('end')->nullable();
            $table->string('photo')->nullable();
            $table->string('location')->nullable();
            $table->longText('edu_about')->nullable();
            $table->string('exp_title')->nullable();
            $table->longText('exp_about')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userinfos');
    }
};
