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

        // PersonalInfo::create([
        // 	'name' => $faker->name,
        // 	'birthday' => $faker->dateTimeBetween('1990-01-01','2012-12-31'),
        // 	'country' => $faker->country,
        // 	'city' => $faker->city,
        // 	'skills' => 'PHP, JAVA, .net',
        // 	'resume' => 'demo.pdf'
        // ]);

        $skills = ['Java,PHP,SQL', 'Java,PHP', 'C#,C++'];
 

        DB::table('personal_infos')->insert([
         ['name' => 'Moshiur Rahman',
         'country' => 'Bangladesh',
         'city' => 'Cox\'s Bazer',
         'skills' => $skills[array_rand($skills)],
         'birthday' =>  $faker->dateTimeBetween('1990-01-01','2012-12-31'),
         'resume' => 'Resume_Moshiur_Rahman.pdf'],

         ['name' => 'Andrew Mike',
         'country' => 'India',
         'city' => 'Mumbai',
         'skills' => $skills[array_rand($skills)],
         'birthday' =>  $faker->dateTimeBetween('1990-01-01','2012-12-31'),
         'resume' => 'Resume_Andrew_Mike.pdf'],

        ['name' => 'Raisul Islam',
         'country' => 'Canada',
         'city' => 'Ottawa',
         'skills' => $skills[array_rand($skills)],
         'birthday' =>  $faker->dateTimeBetween('1990-01-01','2012-12-31'),
         'resume' => 'Resume_Raisul_Islam.pdf'],

        ['name' => 'Salim Khan',
         'country' => 'India',
         'city' => 'Hyderabad',
         'skills' => $skills[array_rand($skills)],
         'birthday' =>  $faker->dateTimeBetween('1990-01-01','2012-12-31'),
         'resume' => 'Resume_Salim_Khan.pdf'],

        ['name' => 'Robert Pit',
         'country' => 'United Kingdom',
         'city' => 'Birmingham',
         'skills' => $skills[array_rand($skills)],
         'birthday' =>  $faker->dateTimeBetween('1990-01-01','2012-12-31'),
         'resume' => 'Resume_Robert_Pit.pdf'],

        ['name' => 'Limon Khan',
         'country' => 'Canada',
         'city' => 'Vancouver',
         'skills' => $skills[array_rand($skills)],
         'birthday' =>  $faker->dateTimeBetween('1990-01-01','2012-12-31'),
         'resume' => 'Resume_Limon_Khan.pdf'],

        ['name' => 'Abdul Rohim',
         'country' => 'Saudi Arabia',
         'city' => 'Modina',
         'skills' => $skills[array_rand($skills)],
         'birthday' =>  $faker->dateTimeBetween('1990-01-01','2012-12-31'),
         'resume' => 'Resume_Abdul_Rohim.pdf'],

        ['name' => 'Abdul Ratul',
         'country' => 'Bangladesh',
         'city' => 'Dhaka',
         'skills' => $skills[array_rand($skills)],
         'birthday' =>  $faker->dateTimeBetween('1990-01-01','2012-12-31'),
         'resume' => 'Resume_Abdu_Ratul.pdf'],

        ['name' => 'Abdul Korim',
         'country' => 'Canada',
         'city' => 'Toronto',
         'skills' => $skills[array_rand($skills)],
         'birthday' =>  $faker->dateTimeBetween('1990-01-01','2012-12-31'),
         'resume' => 'Resume_Abdul_Korim.pdf'],

        ['name' => 'Abdul Kalam',
         'country' => 'Saudi Arabia',
         'city' => 'Modina',
         'skills' => $skills[array_rand($skills)],
         'birthday' =>  $faker->dateTimeBetween('1990-01-01','2012-12-31'),
         'resume' => 'Resume_Abdul_Kalam.pdf'],

        ['name' => 'Abdul Alim',
         'country' => 'United Kingdom',
         'city' => 'London',
         'skills' => $skills[array_rand($skills)],
         'birthday' =>  $faker->dateTimeBetween('1990-01-01','2012-12-31'),
         'resume' => 'Resume_Abdul_Alim.pdf']


     ]);
    }
}
