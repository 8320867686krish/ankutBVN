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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('mobile_number',20)->nullable();
            $table->date('booking_date')->nullable();
            $table->unsignedBigInteger('xetra_id');
            $table->foreign('xetra_id')->references('id')->on('xetras')->onDelete('cascade');   
            $table->unsignedBigInteger('mandal_id');
            $table->foreign('mandal_id')->references('id')->on('mandals')->onDelete('cascade');           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
