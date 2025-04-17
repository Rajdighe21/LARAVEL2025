<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // THIS IS USE FOR ADD SIGNLE DATA

        // Book::create([
        //     'bookname' => 'MIND GAME',
        //     'user_id' => 1,
        //     'author' => 'Sunil TLS',
        //     'description' => 'MySQL returned an empty result set'
        // ]);



        // --------------------------------------------------------------------------



        // USIG THIS YOU ARE STORE MULTIPLE DATA
        // collect method use like map
        // $books = collect([
        //     [
        //         'bookname' => 'MIND GAME',
        //         'user_id' => 1,
        //         'author' => 'Sunil TLS',
        //         'description' => 'MySQL returned an empty result set'
        //     ],
        //     [
        //         'bookname' => 'Psychology of money ',
        //         'user_id' => 2,
        //         'author' => 'Anil TLS',
        //         'description' => 'MySQL returned an empty result set'
        //     ],
        //     [
        //         'bookname' => 'Study of the mind',
        //         'user_id' => 3,
        //         'author' => 'Delip TLS',
        //         'description' => 'MySQL returned an empty result set'
        //     ],
        //     [
        //         'bookname' => 'New MIND GAME',
        //         'user_id' => 5,
        //         'author' => 'Vilas TLS',
        //         'description' => 'MySQL returned an empty result set'
        //     ],
        // ]);


        // 1)  WITH USING LOOP

        // $books->each(function ($book) {
        //     Book::insert($book);
        // });


        // 2) WTITHOUT USING LOOP
        // Book::insert($books->toArray());


        // -------------------------------------------------------------------------------------------------

        // ADD HUGE AMOUT OF DATA USING JSON
        // 1)CREATE JSON FOLDER AND FILE AND STORE VALUES THERE

        // $Json = File::get(path: 'database/json/Books.json');
        // $books = collect(json_decode($Json));

        // $books->each(function ($book) {
        //     Book::create([
        //         'bookname' => $book->bookname,
        //         'user_id' => $book->user_id,
        //         'author' => $book->author,
        //         'description' => $book->description
        //     ]);
        // });

        // ------------------------------------------------------------------------------------------

        // FAKE DATA ADD USING FAKER AND LOOP

        for($i=1;$i<=500;$i++){
            Book::create([
                        'bookname' => fake()->name,
                        'user_id' => rand(10, 50),
                        'author' => fake()->name,
                        'description' => fake()->name
                    ]);
        }

    }
}
