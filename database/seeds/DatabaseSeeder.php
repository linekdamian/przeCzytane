<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(RolesTableSeeder::class);
//
//        factory(App\User::class, 100)->create();
//
//        factory(App\Category::class, 10)->create();
//        factory(App\Publisher::class, 20)->create();
//
        factory(App\Book::class, 100)->create();
    }
}
