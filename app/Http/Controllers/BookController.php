<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{

    public function index()
    {

        // $students = DB::table('users')
        //     ->select('users.*', 'books.bookname as book')
        //     ->orderBy('id', 'asc')
        //     // ->where('books.bookname','=','Ashlynn Lakin')
        //     ->join('books', 'users.book', '=', 'books.id')
        //     ->get();

        // ----------------------------------------------------------------------------------------

        // I WANT TO COUNT HOW MUCH STUDENT READ ONE BOOK;
        // USING GROUP BY

        $students = DB::table('users')
            ->join('books', 'users.book_id', '=', 'books.id')
            ->select(DB::raw('count(*) as student_count'), 'books.bookname')
            ->groupBy('books.bookname')
            ->having('books.bookname', '=', 'Ashlynn Lakin')  // THIS IS SAME WORK AS WHERE BUT WITH GROUP WE USE HAVING
            ->orderBy('student_count')
            ->get();


        return $students;

        return view('learn-query-builder.show-join-data', compact('students'));
        // dd($students);
    }


    public function unionMethod()
    {
        //     $books = DB::table('books')
        //     ->select('id', 'bookname'); // No ->get() here, keep it as a query builder

        // $classes = DB::table('classes')
        //     ->select('id', 'class_name') // Select the same columns as `books`
        //     ->union($books) // Now `union` works with query builders
        //     ->get();


        // ------------------------------------------------------------------------------


        $books = DB::table('books')
            ->select('books.id as book_id') // Alias the `id` column from the books table
            ->join('users', 'books.id', '=', 'users.book_id');

        $classes = DB::table('classes')
            ->select('classes.id as class_id') // Alias the `id` column from the classes table
            ->join('users', 'classes.id', '=', 'users.class_id') // Correct join condition for classes table
            ->union($books)  // Combine the two result sets
            ->get();

        dd($classes);
    }


    public function whenMethod()
    {
        $books = DB::table('books')
            ->when(true, function ($query) {
                $query->where('id', '=', '5');
            })->get();


        dd($books);
    }
}
