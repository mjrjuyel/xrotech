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
        Schema::create('ai_mains', function (Blueprint $table) {
            $table->id();
            $table->string('ai_main_title');
            $table->string('ai_main_subtitle');
            $table->integer('ai_main_creator');
            $table->integer('ai_main_editor')->nullable();
            $table->integer('ai_main_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ai_mains');
    }
};
