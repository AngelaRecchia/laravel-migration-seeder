<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Trip;

class UpdateGuestsTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $trips = Trip::get();
        $guests = [1,2,3,4,5];
        foreach($trips as $trip) {
            $trip->guests = $guests[array_rand($guests)];
            $trip->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
