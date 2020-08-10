<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\PersonalInfo;
class PersonalInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        PersonalInfo::create([
        	'name' => $faker->name,
        	'birthday' => $faker->dateTimeBetween('1990-01-01','2012-12-31'),
        	'country' => $faker->country,
        	'city' => $faker->city,
        	'skills' => 'PHP, JAVA, .net',
        	'resume' => 'demo.pdf'
        ]);
    }
}
