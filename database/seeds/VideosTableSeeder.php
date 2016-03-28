<?php

use Illuminate\Database\Seeder;
use Multiversum\Video;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Video::class, 50)->create();
    }
}
