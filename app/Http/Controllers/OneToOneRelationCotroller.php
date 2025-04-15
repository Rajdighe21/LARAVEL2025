<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Standard;
use Illuminate\Http\Request;

class OneToOneRelationCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // using hasMany get data


        $classes = Classes::with('myStandards')->orderBy('id', 'desc')->get();


        // return $classes;

        // -----------------------------------------------------------------------------------------

        // USING INVERSE RELATION // USING BELONGSTO

        // $Standards = Standard::with('myClasses')->get();
        // return $Standards;

        // -----------------------------------------------------------------------------------------


        return view('one-to-one.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $classes = Classes::create([
             'class_name'=>'Fisrt Class',
             'teacher_name'=>'Bhakre Madam',
             'description'=>'Natus consequuntur quia illo qui consectetur est eum.',
         ]);

         $classes->myStandards()->create([
              'standard_name' => 'Primary',
              'total_student' => 45
         ]);
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
    public function destroy(string $id)
    {
        //
    }
}
