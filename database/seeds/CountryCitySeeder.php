<?php

use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\City;
class CountryCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Country::create([
        // 	'name' => 'Bangladesh',
        // ]);
        // City::create([
        // 	'name' => 'Dhaka',
        // 	'country_id' => 1
        // ]);

        DB::table('countries')->insert([
         ['name' => 'Bangladesh'],
         ['name' => 'India'],
         ['name' => 'Canada'],
         ['name' => 'Saudi Arabia'],
         ['name' => 'United Kingdom']
     ]);


        DB::table('cities')->insert([
         ['name' => 'Dhaka', 'country_id' => 1],
         ['name' => 'Chattogram', 'country_id' => 1],
         ['name' => 'Cox\'s Bazer', 'country_id' => 1],
         ['name' => 'Sylhet', 'country_id' => 1],
         ['name' => 'Khulna', 'country_id' => 1],
         ['name' => 'Jessore', 'country_id' => 1],

         ['name' => 'Mumbai', 'country_id' => 2],
         ['name' => 'Chennai', 'country_id' => 2],
         ['name' => 'Bengaluru', 'country_id' => 2],
         ['name' => 'Hyderabad', 'country_id' => 2],

         ['name' => 'Toronto', 'country_id' => 3],
         ['name' => 'Ottawa','country_id' => 3],
         ['name' => 'Vancouver','country_id' => 3],
         ['name' => 'Montreal','country_id' => 3],
         ['name' => 'Calgary','country_id' => 3],


         ['name' => 'Mukka', 'country_id' => 4],
         ['name' => 'Modina', 'country_id' => 4],

         ['name' => 'London','country_id' =>5],
         ['name' => 'Birmingham','country_id' =>5],
         ['name' => 'Manchester','country_id' =>5]



     ]);
    }
}
