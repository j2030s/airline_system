<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateFlightsTable extends Migration
{
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {

            $table->id();
            $table->string('flight_number');
            
            $table->foreignId('departure_airport_id')
                ->constrained('airports')
                ->onDelete('cascade');

            $table->foreignId('arrival_airport_id')
                ->constrained('airports')
                ->onDelete('cascade');

            $table->date('departure_date');

            
                
            $table->decimal('price');
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
