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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('about_title',100)->nullable();
            $table->string('about_subtitle',30)->nullable();
            $table->text('about_description')->nullable();
            $table->string('about_pic',100)->nullable();
            $table->string('about_elem1',100)->nullable();
            $table->string('about_elem2',100)->nullable();
            $table->string('about_elem3',100)->nullable();
            $table->string('about_elem4',100)->nullable();
            $table->string('about_slug');
            $table->integer('about_editor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
