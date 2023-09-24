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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('port_title',100);
            $table->string('port_sub_1',70);
            $table->string('port_sub_2',70);
            $table->string('port_pic',50)->nullable();
            $table->integer('port_creator');
            $table->integer('port_editor')->nullable();
            $table->integer('port_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
