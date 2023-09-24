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
        Schema::create('processes', function (Blueprint $table) {
            $table->id();
            $table->string('pro_title',40)->nullable();
            $table->string('pro_elem1',100)->nullable();
            $table->string('pro_elem2',100)->nullable();
            $table->string('pro_elem3',100)->nullable();
            $table->string('pro_elem4',100)->nullable();
            $table->integer('pro_main');
            $table->string('pro_slug');
            $table->integer('pro_creator');
            $table->integer('pro_editor')->nullable();
            $table->integer('pro_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('processes');
    }
};
