<?php

use Illuminate\Database\Seeder;
use Multiversum\Disk;

class DisksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Disk::truncate();
        factory(Disk::class, 20)->create();
    }
}
