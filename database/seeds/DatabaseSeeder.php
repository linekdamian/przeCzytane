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
        $this->call(RolesTableSeeder::class);
        $this->call(UserTableSeeder::class);

        factory(App\Category::class, 10)->create();
        factory(App\Publisher::class, 20)->create();
        factory(App\Author::class, 30)->create();
        factory(App\Book::class, 100)->create()->each(function ($book) {

            $id_a = rand(1,30);
            $book->authors()->attach($id_a);
        });
        factory(App\User::class, 100)->create()->each(function ($user){
            $rating = rand(1,10);
            $fav = rand(0,1);
            $books = \App\Book::inRandomOrder()->first();


            $user->books()->attach($books->isbn,[
                'rating' => $rating,
                'favourite' => $fav]);
        });
    }
}
