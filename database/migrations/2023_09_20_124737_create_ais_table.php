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
        Schema::create('ais', function (Blueprint $table) {
            $table->id();
            $table->string('ai_title');
            $table->string('ai_slug');
            $table->integer('ai_main');
            $table->integer('ai_creator');
            $table->integer('ai_editor')->nullable();
            $table->integer('ai_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ais');
    }
};
