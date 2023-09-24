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
        Schema::create('choose_us', function (Blueprint $table) {
            $table->id();
            $table->string('cho_title',50);
            $table->text('cho_detail',200);
            $table->string('cho_icon',30);
            $table->string('cho_slug');
            $table->integer('cho_main');
            $table->integer('cho_creator');
            $table->integer('cho_editor')->nullable();
            $table->integer('cho_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choose_us');
    }
};
