<?php

use Illuminate\Database\Seeder;
use Multiversum\Webinar;

class WebinarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Webinar::truncate();
        factory(Webinar::class, 50)->create();
    }
}
