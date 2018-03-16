<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dsce1; //model by shiv

class Dsce1Controller extends Controller
{

    public function viewpso(Request $request)
    {
        $title = $request->input('title');
        $dsce = Dsce1::where('title', $title)->get();
        //when we use get(), it is a collection, so youve to iterate over it or use zero index
        return view('pages.viewpso1')->with('subjects', $dsce); 
    }

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
        if($request->input('title') !== NULL){
            $title = $request->input('title');
            $dsce = Dsce1::where('title', $title)->get();
            if($dsce->isEmpty()){
               //echo 'Not Available';
               $subject = new Dsce1;
               $subject->title = $request->input('title');
               $subject->save();
               return view('pages.addpso2')->with('subject', $subject);
            } else {
              // echo 'Available';
               $title = $request->input('title');
               $dsce = Dsce1::where('title', $title)->get();
               //when we use get(), it is a collection, so youve to iterate over it or use zero index
               return view('pages.editpso2')->with('subjects', $dsce);

            }
        }
        else {
            echo 'ERROR-STORE METHOD ELSE BLOCK - Contact Tharun';
        } 
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
        $dsce = Dsce1::find($id);
        //echo $dsce;
        //echo $request->input('title'); 
        $dsce->title = $request->input('title');
        $dsce->zero1 = $request->input('zero1');
        $dsce->zero2 = $request->input('zero2');
        $dsce->zero3 = $request->input('zero3');
       
        $dsce->one1 = $request->input('one1');
        $dsce->one2 = $request->input('one2');
        $dsce->one3 = $request->input('one3');
       
        $dsce->two1 = $request->input('two1');
        $dsce->two2 = $request->input('two2');
        $dsce->two3 = $request->input('two3');
       
        $dsce->three1 = $request->input('three1');
        $dsce->three2 = $request->input('three2');
        $dsce->three3 = $request->input('three3');
       
        $dsce->four1 = $request->input('four1');
        $dsce->four2 = $request->input('four2');
        $dsce->four3 = $request->input('four3');
        
        $dsce->five1 = $request->input('five1');
        $dsce->five2 = $request->input('five2');
        $dsce->five3 = $request->input('five3');
        
        $dsce->m1 = $request->input('m1');
        $dsce->m2 = $request->input('m2');
        $dsce->m3 = $request->input('m3');
       
        
        $dsce->save();
        
        return redirect('/viewpso')->with('success', 'Edited Successfully, select the subject to view');
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
