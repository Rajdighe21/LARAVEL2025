<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $divisions = Division::orderBy('id', 'desc')->paginate(15);


        // CHUNK
        // Division::chunk(10, function ($divs) {
        //     foreach ($divs as $div) {
        //         echo "$div->division_name - $div->total_student <br>";
        //     }

        //     echo "Hello ------------------------ <br>";
        // });



        // ------------------------------------------------------------------------------------------------------
        // LAZY LOADING IN LARAVEL

        // foreach (Division::lazy() as $divs) {
        //     echo "$divs->division_name - $divs->total_student <br>";
        // }

        // $divisions = Division::lazy();

        // -----------------------------------------------------------------------------------------------

        //   UPDATE DATA USING CHUNK

        // Division::where('class_id', [1])
        //     ->chunkById(10, function ($divs) {
        //         $divs->each->update(['class_id' => 10]);
        //     });



        $divisions = Division::orderBy('id', 'desc')->get();


        return view('learn-eloquent-ORM.index', compact('divisions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('learn-eloquent-ORM.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'usercode' => 'required',
            'totalstudent' => 'required',
        ]);

        // USING SAVE METHOD ;

        // $division = new Division();
        // $division->division_name = $request->name;
        // $division->class_id = $request->usercode;
        // $division->total_student = $request->totalstudent;
        // $division->save();

        // -------------------------------------------------------------------------------------------

        // FIRST OR CREATE
        // Division::firstOrCreate([
        //     'division_name' => $request->name
        // ], [
        //     'class_id' => $request->usercode,
        //     'total_student' => $request->totalstudent,
        // ]);



        // -------------------------------------------------------------------------------------------


        // USING CREATE METHOD

        Division::create([
            'division_name' => $request->name,
            'class_id' => $request->usercode,
            'total_student' => $request->totalstudent,
        ]);





        return redirect()->route('division.index')->with('success', 'Division Store Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($division)
    {
        $division = Division::findOrFail($division);
        return view('learn-eloquent-ORM.show', compact('division'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $division = Division::find($id);
        return view('learn-eloquent-ORM.edit', compact('division'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'usercode' => 'required',
            'totalstudent' => 'required',
        ]);

        // $division = Division::find($id);
        // $division->division_name = $request->name;
        // $division->class_id = $request->usercode;
        // $division->total_student = $request->totalstudent;
        // $division->save();


        // ------------------------------------------------------------------------------




        // USINGN CREATE METHOD
        // Division::where('id', $id)
        //     ->update([
        //         'division_name' => $request->name,
        //         'class_id' => $request->usercode,
        //         'total_student' => $request->totalstudent,
        //     ]);


        // ------------------------------------------------------------------------------


        return redirect()->route('division.index')->with('success', 'Division Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Division $division)
    {
        $division = Division::find($division->id);
        $division->delete();

        // ----------------------------------------------------------------------------
        // $division = Division::destroy($division->id);


        // DELETE MULTIPLE IDS ALSO
        // $division = Division::destroy(55,56,57);


        // ----------------------------------------------------------------------------
        // TURNCATE ALL DETA
        // $division = Division::truncate();

        return redirect()->route('division.index')->with('success', 'Division Deleted Successfully');
    }
}
