<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => 'general@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => 'company@gmail.com',
            'role_type' => 1,
            'password' => bcrypt('secret'),
        ]);

        for($i = 0; $i < 20; $i++) {
            DB::table('works')->insert([
                'user_id' => $i,
                'due' => Carbon::now()->addDays(rand(3, 100)),
                'reward' => rand(100000, 1000000),
                'necessary' => rand(1, 10),
                'type' => rand(1, 6),
                'title' => str_random(10),
                'body' => str_random(1000)
            ]);
        }
    }
}
