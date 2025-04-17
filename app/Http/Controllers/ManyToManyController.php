<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class ManyToManyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::find(5);

        $userRoles = User::get();

        // foreach ($userRoles as $user) {
        //     echo $user->name . '<br>';
        //     foreach ($user->MyRoles as $use) {
        //        echo $use->id . '<br>';
        //     }
        // }


        return view('many-to-many.index', compact('userRoles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        // ADD DATA USING ATTACH METHOD
        //  $user = User::find(1);
        // $user->myRoles()->attach(1);

        // GIVE MULTIPLE IDS ITS OPTIONAL
        // $Rols = [2,3];
        // $user->myRoles()->attach($Rols);

        // -------------------------------------------------------------------------------------------------

        // FOR DELETE ROLE FROM USER

        // $user = User::find(2);
        // $user->MyRoles()->detach(1);

        // GET ALL REMOVE ROLE
        //  $user->MyRoles()->detach();


        // -------------------------------------------------------------------------------------------------
        //   SYNC METHOD USE FOR ADD, DELETE AND UPDATE
        // YEH FIND KARTA HAI AGAR VALUE HOTI HAI TO DELETE KARTA HAI NHI TO ADD KARTA HAI


        //   $user = User::find(5);
        // ABHI YEH CHECK KARENGA 1,2 RAHENGA TO NHI DEGA AGAR NHI RAHENGA TO DE DEGA
        // $rols = [1,2];


        // ABHI YHE BAKI SAB REMOVE KARDETA HAI JO PASS KIYE HAI VO WALA CHODHKE
        //    $rols = [4];


        //    $user->MyRoles()->sync($rols);



        // --------------------------------------------------------------------------------------------------

        // USING INVERSE FUNCTION

        // $role = Role::find(2);
        // $role->MyUsers;

        // return  $role;

        // ADD DATA USING SYNC
        $role = Role::find(1);
        $user = [1,4,2];
        $role->MyUsers()->sync($user);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {}
}
