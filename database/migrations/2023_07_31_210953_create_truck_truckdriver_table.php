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
        Schema::create('truck_truckdriver', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('truck_id')->nullable();
            $table->unsignedBigInteger('truckdriver_id')->nullable();

            $table->foreign('truck_id')
            ->references('id')
            ->on('trucks')->onDelete('cascade');

            $table->foreign('truckdriver_id')
            ->references('id')
            ->on('truckdrivers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('truck_truckdriver');
    }
};
