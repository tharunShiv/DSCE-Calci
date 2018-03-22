<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DsceSt;

class DsceStud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $student = new DsceSt;

        $student->usn = $request->input('usn');
        $student->name = $request->input('name');
        $student->semester = $request->input('semester');
        $student->section = $request->input('section');
        $student->subject = $request->input('subject');
        
        $a = $student->aat1ia1 = $request->input('aat1ia1');
        $b = $student->aat2ia1 = $request->input('aat2ia1');
        $c = $student->assignmentia1 = $request->input('assignmentia1');
        $d =  $student->cieia1 = $request->input('cieia1');

        $e = $student->aat1ia2 = $request->input('aat1ia2');
        $f = $student->aat2ia2 = $request->input('aat2ia2');
        $g = $student->assignmentia2 = $request->input('assignmentia2');
        $h = $student->cieia2 = $request->input('cieia2');

        $i = $student->see = $request->input('see');

        //calculation part
        $totalia1 = $a + $b + $c + $d;
        $totalia2 = $e + $f + $g + $h;
        $averageia = ceil(($totalia1 + $totalia2)/2);

        $final = ceil($i/2) + $averageia;

        $student->totalia1 = $totalia1;
        $student->totalia2 = $totalia2;
        $student->averageia = $averageia;
        $student->final = $final;

        $student->grade = "S+";

        $student->save();
        return view('pages.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
