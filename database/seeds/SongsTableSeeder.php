<?php

use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            [
                'title' => str_random(10),
                'artist' => str_random(10),
                'body' => str_random(30),
            ],
            [
                'title' => str_random(10),
                'artist' => str_random(10),
                'body' => str_random(30),
            ],
            [
                'title' => str_random(10),
                'artist' => str_random(10),
                'body' => str_random(30),
            ],
            [
                'title' => str_random(10),
                'artist' => str_random(10),
                'body' => str_random(30),
            ],
            [
                'title' => str_random(10),
                'artist' => str_random(10),
                'body' => str_random(30),
            ],
            [
                'title' => str_random(10),
                'artist' => str_random(10),
                'body' => str_random(30),
            ]
        ]);
    }
}
