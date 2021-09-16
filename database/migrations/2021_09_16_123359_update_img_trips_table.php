<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Trip;

class UpdateImgTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $trips = Trip::all();
        foreach($trips as $trip) {
            
            $img = 'https://source.unsplash.com/800x600/?' . $trip->category . '/' . mt_rand(1, 250);
            $trip->img = $img;
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
