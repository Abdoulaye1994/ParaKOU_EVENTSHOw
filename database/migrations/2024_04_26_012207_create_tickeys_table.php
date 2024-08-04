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
        Schema::create('tickeys', function (Blueprint $table) {
            $table->id();
            $table->string('form_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('TicketForm')->nullable();
            $table->string('Form')->nullable();
            $table->string('number')->nullable();
            $table->string('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickeys');
    }
};