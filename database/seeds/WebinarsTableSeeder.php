<?php

use Illuminate\Database\Seeder;
use Multiversum\Webinar;

class WebinarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Webinar::class, 50)->create();
    }
}
