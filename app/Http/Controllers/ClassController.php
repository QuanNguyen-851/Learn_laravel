<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');

        // $list = DB::select('select * from classroom');//query raw
        // $list = DB::table('classroom')->get();//query builder
        $list = Classroom::where('name', 'LIKE', "%$search%")->paginate(3); //elo
        return view('class.index', [
            "list" => $list,
            "search" => $search,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Class.classroom');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->get('class');
        $classroom = new Classroom();
        $classroom->name = $name;
        $classroom->save();
        return redirect(route('class.index')); // dẫn về trang index 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $class = Classroom::find($id);
        return $class->name;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $name = Classroom::find($id);

        return view('class.edit', [
            'name' => $name->name,
            'id' => $id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->get('name');
        $use = Classroom::find($id);
        $use->name = $name;
        $use->save();
        return redirect(Route('class.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Classroom::find($id);
        $id->delete();
        return redirect(Route('class.index'));
    }

    public function output()
    {
        $list = DB::select('select * from classroom ');

        return view('class.output', [
            'a' => $list
        ]);
    }
}
