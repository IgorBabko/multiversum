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
        $this->command->info('Unguarding models');
        Model::unguard();

        $tables = [
            'users',
            'videos',
        ];

        $this->command->info('Truncating existing tables');
        DB::statement('TRUNCATE TABLE ' . implode(',', $tables) . ' RESTART IDENTITY;');

        $this->call(UsersTableSeeder::class);
        $this->call(VideosTableSeeder::class);
    }
}
