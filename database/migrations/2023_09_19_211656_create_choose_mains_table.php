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
        Schema::create('choose_mains', function (Blueprint $table) {
            $table->id();
            $table->string('cho_main_title',100);
            $table->string('cho_main_subtitle',100);
            $table->string('cho_main_pic',100)->nullable();
            $table->integer('cho_main_creator');
            $table->integer('cho_main_editor')->nullable();
            $table->integer('cho_main_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choose_mains');
    }
};
