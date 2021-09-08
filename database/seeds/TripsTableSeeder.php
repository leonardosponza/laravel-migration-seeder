<?php

use Illuminate\Database\Seeder;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 0; $x <= 10; $x++){
            $trip = new Trip();
            $trip->country = 'esempio country';
            $trip->city = 'Palermo';
            $trip->hotel = 'belvedere';
            $trip->departure = ' 2021-09-08 17:38:21';
            $trip->return = ' 2021-09-08 17:38:21';
            $trip->description = 'Lorem isspum blblblbl';
            $trip->price = 12;
            $trip->save();
        }
        
    }  
}
