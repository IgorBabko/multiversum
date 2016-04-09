<?php

use Illuminate\Database\Seeder;
use Multiversum\Subscription;

class SubscriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Subscription::class, 10)->create();
    }
}
