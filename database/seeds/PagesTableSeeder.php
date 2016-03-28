<?php

use Illuminate\Database\Seeder;
use Multiversum\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Page::class, 1)->create();
    }
}
