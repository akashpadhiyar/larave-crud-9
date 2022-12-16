<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class myrcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mydata = DB::table('student')->get();
        return view('student.index', compact('mydata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $txt1 = $request->input('txt1');
        $txt2 = $request->input('txt2');
        DB::table('student')->insert(
            ['name' => $txt1, 'mobileno' => $txt2]
        );
        return redirect('/student');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "Show" . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fetchdata = DB::table('student')->where('id', '=', $id)->first();
        return view('student.edit', compact('fetchdata'));
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
        $txt0 = $request->input('txt0');
        $txt1 = $request->input('txt1');
        $txt2 = $request->input('txt2');
        DB::table('student')
            ->where('id', $txt0)
            ->update(['name' => $txt1, 'mobileno' => $txt2]);
        return redirect('/student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = DB::table('student')->where('id', '=', $id)->delete();
        return redirect('/student');
    }
}
