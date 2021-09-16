<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        $categories = ["Mountain", "Sea", "Lake", "Hills", "Other"];
        for ($i = 0; $i < 100; $i++) {
            $newTrip = new Trip();
            $newTrip->destination = $faker->city();
            $newTrip->nights= mt_rand(1, 7);
            $newTrip->price = mt_rand(2000, 30000) / 100 * $newTrip->nights;
            $newTrip->description = $faker->realText(200);
            $newTrip->category = array_rand($categories);
            $newTrip->save();
        }
        
    }
}
