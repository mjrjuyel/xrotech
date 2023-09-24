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
        Schema::create('filter_types', function (Blueprint $table) {
            $table->id();
            $table->string('fil_type_title',50);
            $table->string('fil_type_btn',25);
            $table->string('fil_type_slug');
            $table->integer('fil_type_creator');
            $table->integer('fil_type_editor')->nullable();
            $table->integer('fil_type_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filter_types');
    }
};
