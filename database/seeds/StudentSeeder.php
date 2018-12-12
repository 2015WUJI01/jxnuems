<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
//         = new ();
        $college_id = DB::table('colleges')->inRandomOrder()->take(1)->select('Id')->first();

        for ($i = 20180001; $i < 20180100; $i++) {
            DB::table('students')->insert([
                'Number' => $i,
                'Name' => $faker->firstName,
                'College_id' => $college_id->Id,
                'Gender' => rand(0,1),
                'Email' => $faker->safeEmail,
            ]);
            DB::table('users')->insert([
                'account' => $i,
                'user_type' => 'student',
                'password' => bcrypt('000000'),
                'remember_token' => str_random(10),
            ]);
        }
    }
}
