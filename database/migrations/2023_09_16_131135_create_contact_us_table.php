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
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('cu_number1',20)->nullable();
            $table->string('cu_number2',20)->nullable();
            $table->string('cu_number3',20)->nullable();
            $table->string('cu_number4',20)->nullable();
            $table->string('cu_email1',35)->nullable();
            $table->string('cu_email2',35)->nullable();
            $table->string('cu_email3',35)->nullable();
            $table->string('cu_email4',35)->nullable();
            $table->string('cu_address1',50)->nullable();
            $table->string('cu_address2',50)->nullable();
            $table->string('cu_address3',50)->nullable();
            $table->string('cu_address4',50)->nullable();
            $table->integer('cu_editor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us');
    }
};
