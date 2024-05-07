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
        Schema::create('label_ticket', function (Blueprint $table) {
            $table->foreignId('ticket_id')->references('id')->on('tickets')->constrained()->onDelete('cascade');
            $table->foreignId('label_id')->references('id')->on('labels')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('label_ticket');
    }
};
