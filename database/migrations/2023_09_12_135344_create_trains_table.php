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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company',64);
            $table->string('departure_station',);
            $table->string('arrival_station',);
            $table->float('departure_time',4,2);
            $table->float('arrival_time',4,2);
            $table->bigInteger('train_code',);
            $table->integer('carriage_number',);
            $table->boolean('delay',)->default(false);
            $table->boolean('deleted',)->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
