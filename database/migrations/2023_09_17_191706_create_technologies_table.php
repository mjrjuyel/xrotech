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
        Schema::create('technologies', function (Blueprint $table) {
            $table->id();
            $table->string('tech_title',30);
            $table->string('tech_icon',100)->nullable();
            $table->text('tech_description');
            $table->string('tech_slug');
            $table->integer('tech_creator');
            $table->integer('tech_editor')->nullable();
            $table->integer('tech_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technologies');
    }
};
