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
        Schema::create('mandals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('xetra_id');
            $table->string('mandal_name');
            $table->foreign('xetra_id')->references('id')->on('xetras')->onDelete('cascade');          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mandals');
    }
};
