<?php

use Illuminate\Database\Seeder;
use Multiversum\Lecture;

class LecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Lecture::class, 50)->create();
    }
}
