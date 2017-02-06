<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('artists')->insert([
            'username' => str_random(10),
            'password' => 20,
        ]);
        
        DB::table('music')->insert([
            'name' => str_random(10),
            'reviews_no' => gmp_random_range(0,255),
            'link' => 'soundcloud.com',
            'created_at' =>  date("Y-m-d H:i:s"),
            'artist_id' => 2
        ]);
    }
}
