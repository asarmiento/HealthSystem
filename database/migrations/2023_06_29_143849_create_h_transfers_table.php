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
        Schema::create('h_transfers', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('origin');
            $table->string('destination');
            $table->string('stretcher');
            $table->string('companion');
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('driver_id');
            $table->unsignedBigInteger('vehicle_id');
            $table->timestamps();
            $table->engine = "InnoDB";

            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('driver_id')->references('id')->on('h_drivers');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('h_transfers');
    }
};
