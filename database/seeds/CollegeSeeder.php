<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 1; $i <= 20; $i++) {
            DB::table('colleges')->insert([
                'Number' => $i,
                'Name' => $faker->word . ' 学院',
                'Email' => $faker->safeEmail,
            ]);
            DB::table('users')->insert([
                'account' => $i,
                'user_type' => 'college',
                'password' => bcrypt('000000'),
                'remember_token' => str_random(10),
            ]);
        }
    }
}
