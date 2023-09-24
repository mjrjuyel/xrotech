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
        Schema::create('basics', function (Blueprint $table) {
            $table->id();
            $table->string('basic_Mlogo',50)->nullable();
            $table->string('basic_Flogo',50)->nullable();
            $table->string('basic_favIcon',50)->nullable();
            $table->text('basic_description')->nullable();
            $table->string('basic_copy')->nullable();
            $table->string('basic_slug');
            $table->integer('basic_creator');
            $table->integer('basic_editor')->nullable();
            $table->integer('basic_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basics');
    }
};
