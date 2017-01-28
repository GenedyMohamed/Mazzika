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
            'reviews_no' => 20,
            'link' => 'soundcloud.com',
            'artist_id' => 1
        ]);
    }
}
