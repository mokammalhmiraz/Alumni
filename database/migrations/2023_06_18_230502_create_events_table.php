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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->integer('added_by');
            $table->string('event_title');
            $table->string('event_type');
            $table->integer('event_seat');
            $table->integer('event_participants');
            $table->string('event_speaker');
            $table->string('event_platfrom');
            $table->string('event_location');
            $table->longText('event_description');
            $table->string('event_banner');
            $table->date('event_deadline');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
