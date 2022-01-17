<?php

use App\Models\Flight;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $flights = [
            [
                'price' => '500',
                'destination' => 'Paris',
                'departure' => '2020-01-25',
                'arrival' => '2020-01-26',
                'votes' => '850',
                'stay' => '8'
            ],
            [
                'price' => '9000',
                'destination' => 'Rome',
                'departure' => '2020-02-20',
                'arrival' => '2022-02-20',
                'votes' => '1',
                'stay' => '1'
            ],
            [
                'price' => '150',
                'destination' => 'Femminamorta',
                'departure' => '2021-01-25',
                'arrival' => '2021-01-25',
                'votes' => '1250',
                'stay' => '25'
            ],
            [
                'price' => '900',
                'destination' => 'berlin',
                'departure' => '2020-08-15',
                'arrival' => '2020-05-15',
                'votes' => '1',
                'stay' => '120'
            ],


        ];

        foreach ($flights as $flight) {
            $_flight = new Flight();
            $_flight->price = $flight['price'];
            $_flight->destination = $flight['destination'];
            $_flight->departure = $flight['departure'];
            $_flight->arrival = $flight['arrival'];
            $_flight->votes = $flight['votes'];
            $_flight->stay = $flight['stay'];
            $_flight->save();
        }
    }
}