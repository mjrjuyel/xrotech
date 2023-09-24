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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('ser_title',40)->nullable();
            $table->string('ser_icon',50)->nullable();
            $table->string('ser_elem1',100)->nullable();
            $table->string('ser_elem3',100)->nullable();
            $table->string('ser_elem2',100)->nullable();
            $table->string('ser_slug');
            $table->integer('ser_creator');
            $table->integer('ser_editor')->nullable();
            $table->integer('ser_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
