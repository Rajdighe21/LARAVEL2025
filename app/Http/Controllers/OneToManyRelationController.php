<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class OneToManyRelationController extends Controller
{
    public function index()
    {
        // $users = User::with('CheckBook')->get();
        // $users = User::doesntHave('myPosts')->get();


        // ---------------------------------------------------------------------
        // GET USER INFO WHERE POST ATLEAST ONE THAT MEANS ITS NOT EMPTY
        // $users = User::has('myPosts')->with('myPosts')->get();


        // NOW I WANT TO SHOW WHO POST MORE THAN 50
        // $users = User::has('myPosts','>',50)->with('myPosts')->get();

        // -----------------------------------------------------------------------------

        // I WANT TO COUNT POST OF USE AND I WANT DISPLAY SELECTED ROW WICH I WANT
        // $users = User::select(['name','email'])->withCount('myPosts')->get();



        // ---------------------------------------------------------------------------------------------------------------------------------
        // ---------------------------------------------------------------------------------------------------------------------------------

        //  USE HERE QUIERI CALLED FROM FORIGN MODEL
        // $posts = Post::withWhereHas('myUser', function ($Query) {
        //     $Query->where('name', 'Gladys Schimmel');
        // })->get();

        $users = User::where('name', 'Gladys Schimmel')->get();
        $posts = Post::whereBelongsTo($users)->get();

        return $posts;



        //  NOW HERE INVERCE RELATIONSHIP FOREIGN KEY TO PRIMARY KEY
        // $posts = Post::with('myUser')->where('post_name','voluptates')->get();

        return view('one-to-many.index', compact('posts'));
    }


    public function create()
    {

        // ADD SIGNLE SIGNLE RECORDS

        $user = User::find(5);


        // $user->myPosts()->create([
        //     'post_name' => 'Himalay Treak',
        //     'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
        //     'like'=>234,
        //     'dislike'=>2,
        //     'comments' => 'orem Ipsum is simply dummy text of the prin'
        // ]);

        // -----------------------------------------------------------------------------------------------------------------------

        // ADD MULTIPLE RECORDS INTO

        $user->myPosts()->createMany([
            [
                'post_name' => 'GOA Treak',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'like' => 2346,
                'dislike' => 87,
                'comments' => 'orem Ipsum is simply dummy text of the prin'
            ],
            [
                'post_name' => 'Festival',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'like' => 762,
                'dislike' => 87,
                'comments' => 'orem Ipsum is simply dummy text of the prin'
            ],
            [
                'post_name' => 'Depavali',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'like' => 678,
                'dislike' => 871,
                'comments' => 'orem Ipsum is simply dummy text of the prin'
            ]
        ]);

        //
        return $user;
    }
}
