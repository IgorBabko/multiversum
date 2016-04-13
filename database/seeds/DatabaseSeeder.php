<?php

use Illuminate\Database\Eloquent\Model;
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
        // specific for mysql
        //disable foreign key check for this connection before running seeders
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // $this->call(UsersTableSeeder::class);

        $this->command->info('Unguarding models');
        Model::unguard();

        $tables = [
            'books',
            'categories',
            'disks',
            'post_tag',
            'posts',
            'lectures',
            'tags',
            'webinars',
            'videos',
            'pages',
            'subscriptions',
        ];

        $this->command->info('Truncating existing tables');
        DB::statement('TRUNCATE TABLE ' . implode(',', $tables) . ' RESTART IDENTITY;');

        $this->call(WebinarsTableSeeder::class);
        $this->call(VideosTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(LecturesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        $this->call(DisksTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(SubscriptionsTableSeeder::class);

        // supposed to only apply to a single connection and reset it's self
        // but I like to explicitly undo what I've done for clarity
        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
