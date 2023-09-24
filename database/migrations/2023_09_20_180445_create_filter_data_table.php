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
        Schema::create('filter_data', function (Blueprint $table) {
            $table->id();
            $table->string('fil_title',50);
            $table->string('fil_detail',200);
            $table->string('fil_pic',50)->nullable();
            $table->string('fil_slug');
            $table->integer('fil_cat');
            $table->integer('fil_creator');
            $table->integer('fil_editor')->nullable();
            $table->integer('fil_status')->default(1);
            $table->timestamps();
        });

        Schema::create('cat_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('filter_data_id')->constrained('filter_data');
            $table->foreignId('filter_type_id')->constrained('filter_types');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filter_data');
        Schema::dropIfExists('cat_data');
    }
};
