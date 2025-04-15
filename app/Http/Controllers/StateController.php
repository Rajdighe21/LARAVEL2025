<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;
use Illuminate\Support\Facades\Hash;

class StateController extends Controller
{
    public function index()
    {
        // $states = DB::table('states')->get();

        // USE PAGINATEE
        $states = DB::table('states')->orderBy('name', 'asc')->paginate(10);
        // ----------------------------------------------------------------


        // USE WHERE CLOUSE
        //    $states = DB::table('states')->where('id',5)->get();
        // ------------------------------------------------------------------


        // USE FIND THIS IS DIRECT FIND AND AND SHOW ALL ROW ITS NO NEED GET METHOD
        // FIND MTHOD DIDNOT RETURN JSON ITS RETURN ARRAY so no neeed use foreach loop
        // $states = DB::table('states')->find(1);

        // ------------------------------------------------------------------------
        // THIS IS USE FOR REMOVE DUBLICATES AND GET UNIQUE VALUES
        // $states = DB::table('states')->select('name')->distinct()->get();

        //---------------------------------------------------------------------
        // get one or two column data
        // ITS RETURN ARRAY AND NO NEED USE GET METHD
        //   $users = DB::table('users')->pluck('name');

        // ITS RETUN ARRAY BUT ITS I KEY VALUE PAIR
        //   $users = DB::table('users')->pluck('name','pincode');

        //   ---------------------------------------------------------------------
        //    ORDER BY get data
        // $states = DB::table('states')->orderBy('name','asc')->get();

        // ------------------------------------------------------------------------
        // GET FIRST RECORD
        //    $states = DB::table('states')->latest()->first();



        // THIS IS WITHOUT USING COMPACT
        return view('learn-query-builder.get-data', ['states' => $states]);
    }


    public function addStates()
    {

        // ADD SINGLE AND MULTIPLE DATA

        // $state = DB::table('states')->insert([
        //     [
        //         'name' => 'Karnataka',
        //         'pincode' => '560009',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'name' => 'Tamil Nadu',
        //         'pincode' => '600005',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]
        // ]);
        // --------------------------------------------------------------------------------

        // IF RECORD EXIST THEN DIDNOT GIVE SQL ERROR AT ANY COST EVEN DIDNOT GIVEN ERROR ON UNIQUE VALUE
        // $state = DB::table('users')->insertOrIgnore([
        //     [
        //         'name' => 'rajdighe12',
        //         'email' => 'rajdighe@gmail.com',
        //         'password' => Hash::make('user@123'),
        //         'role' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ]
        // ]);


        // -------------------------------------------------------------------------------------------


        return view('learn-query-builder.add-data');
    }



    public function storeStates(Request $request)
    {
        $state = DB::table('states')->insert([
            'name' => $request->name,
            'pincode' => $request->pincode,
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        return redirect()->route('showState')->with('success', 'State Added Successfully');
    }

    public function edit($id)
    {
        // FIND WITH SELECT
        $states = DB::table('states')->select('id','name', 'pincode')->find($id);
        return view('learn-query-builder.edit-data', compact('states'));
    }

    public function updateStates(Request $request)
    {

        // THIS IS FOR TESTING

        // $state = DB::table('states')
        //     ->where('id', 63)
        //     ->update([
        //         'name' => 'Gujrat',
        //         'pincode' => '123456'
        //     ]);

        // return $state;


        // ----------------------------------------------------------------------------

        $state = DB::table('states')->where('id', $request->id)->update([
            'name' => $request->name,
            'pincode' => $request->pincode,
            'updated_at' => now(),
        ]);

        return redirect()->route('showState')->with('success', 'State Updated Successfully');

    }


    public function deleteStates($id)
    {
        $state = DB::table('states')
            ->where('id', $id)
            ->delete();

        return redirect()->back()->with('success', 'Message Deleted Successfull');
    }
}
