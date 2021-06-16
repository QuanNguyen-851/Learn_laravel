<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    public function classroom()
    {
        return view('Class.classroom');
    }
    public function stored(Request $request)
    {
        $name = $request->get('class');
        DB::insert('INSERT INTO classroom(name) values (?)', [
            $name
        ]);
    }
    public function output()
    {
        $list = DB::select('select * from classroom ');

        return view('class.output', [
            'a' => $list
        ]);
    }
}
