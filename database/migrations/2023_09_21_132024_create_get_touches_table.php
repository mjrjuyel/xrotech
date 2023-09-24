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
        Schema::create('get_touches', function (Blueprint $table) {
            $table->id();
            $table->string('get_title',100);
            $table->string('get_sub',70);
            $table->string('get_pic',50)->nullable();
            $table->integer('get_creator');
            $table->integer('get_editor')->nullable();
            $table->integer('get_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('get_touches');
    }
};
