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
        factory(Disk::class, 20)->create();
    }
}
