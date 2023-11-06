<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_requests', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('database')->nullable();
            $table->string('device_id')->nullable();
            $table->string('temperature_1')->nullable();
            $table->string('temperature_2')->nullable();
            $table->string('fan_status_1')->nullable();
            $table->string('fan_status_2')->nullable();
            $table->string('fan_status_3')->nullable();
            $table->string('heater_status')->nullable();
            $table->integer('oven_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('api_requests');
    }
};
