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
        Schema::create('process_mains', function (Blueprint $table) {
            $table->id();
            $table->string('pro_main_title');
            $table->string('pro_main_subtitle');
            $table->integer('pro_main_creator');
            $table->integer('pro_main_editor')->nullable();
            $table->integer('pro_main_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('process_mains');
    }
};
