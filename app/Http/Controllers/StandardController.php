<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StandardController extends Controller
{
    public function index()
    {

        // GET DATA
        // $standards = DB::select('select * from standards');

        // USING JOIN
        // $standards = DB::select('select * from standards inner join classes on standards.class_id = classes.id');

        // USING WHERE
        // $standards = DB::select('select * from standards where standard_ name = ?',['sit']);


        // USING WHERE WITH LIKE
        // $standards = DB::select('select * from standards where standard_name like ? and total_student > ? ',['A%',40]);

        // INSERT DATA USING RAW SQL QYERIES;
        // $standards = DB::select("insert into standards(standard_name,class_id,total_student,updated_at,created_at) values (?,?,?,?,?)", ['Second Standard', 16, 77, now(), now()]);

        // UPDATE USING ROW
        // $standards = DB::update("update standards set standard_name = 'Third Standard' , total_student = 69 where id = ? ", ['60']);

        // DELETE USING RAW
        // $standards = DB::delete('delete from standards where id = ?', [59]);

        // dd($standards);
    }


    public function view()
    {

        // RAW WITH QUERY BUILDER GET DATA
        // $standards = DB::table('standards')
        //     ->selectRaw('standard_name,total_student')
        //     ->get();


        // WHERE CLOUSE WITH QUERY BUILDER AND RAW
        // $standards = DB::table('standards')
        //     ->whereRaw('total_student > ? and standard_name like ?', [10, 'r%'])
        //     ->get();


        // ORDER BY WITH RAW QUERY BUILDER
        // $standards = DB::table('standards')
        //      ->orderByRaw('total_student DESC')
        //      ->get();

        // GROUP BY WITH ROW QUERY BUILDER
        $standards = DB::table('standards')
            ->selectRaw('count(*) as standard_class_count , class_id')
            ->groupBy('class_id','total_student')
            ->get();
        dd($standards);
    }
}
