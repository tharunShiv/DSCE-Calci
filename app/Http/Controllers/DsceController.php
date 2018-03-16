<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dsce;  //model by shiv

class DsceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewco(Request $request)
    {
        $title = $request->input('title');
        $dsce = Dsce::where('title', $title)->get();
        //when we use get(), it is a collection, so youve to iterate over it or use zero index
        return view('pages.viewco1')->with('subjects', $dsce); 
    }

   
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
        /*Page 1*/
        if($request->input('title') !== NULL){
            $title = $request->input('title');
            $dsce = Dsce::where('title', $title)->get();
            if($dsce->isEmpty()){
               //echo 'Not Available';
               $subject = new Dsce;
               $subject->title = $request->input('title');
               $subject->save();
               return view('pages.addco2')->with('subject', $subject);
            } else {
              // echo 'Available';
               $title = $request->input('title');
               $dsce = Dsce::where('title', $title)->get();
               //when we use get(), it is a collection, so youve to iterate over it or use zero index
               return view('pages.editco2')->with('subjects', $dsce);

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
        $dsce = Dsce::find($id);
        //echo $dsce;
        //echo $request->input('title'); 
        $dsce->title = $request->input('title');
        $dsce->zero1 = $request->input('zero1');
        $dsce->zero2 = $request->input('zero2');
        $dsce->zero3 = $request->input('zero3');
        $dsce->zero4 = $request->input('zero4');
        $dsce->zero5 = $request->input('zero5');
        $dsce->zero6 = $request->input('zero6');
        $dsce->zero7 = $request->input('zero7');
        $dsce->zero8 = $request->input('zero8');
        $dsce->zero9 = $request->input('zero9');
        $dsce->zero10 = $request->input('zero10');
        $dsce->zero11 = $request->input('zero11');
        $dsce->zero12 = $request->input('zero12');
        $dsce->one1 = $request->input('one1');
        $dsce->one2 = $request->input('one2');
        $dsce->one3 = $request->input('one3');
        $dsce->one4 = $request->input('one4');
        $dsce->one5 = $request->input('one5');
        $dsce->one6 = $request->input('one6');
        $dsce->one7 = $request->input('one7');
        $dsce->one8 = $request->input('one8');
        $dsce->one9 = $request->input('one9');
        $dsce->one10 = $request->input('one10');
        $dsce->one11 = $request->input('one11');
        $dsce->one12 = $request->input('one12');
        $dsce->two1 = $request->input('two1');
        $dsce->two2 = $request->input('two2');
        $dsce->two3 = $request->input('two3');
        $dsce->two4 = $request->input('two4');
        $dsce->two5 = $request->input('two5');
        $dsce->two6 = $request->input('two6');
        $dsce->two7 = $request->input('two7');
        $dsce->two8 = $request->input('two8');
        $dsce->two9 = $request->input('two9');
        $dsce->two10 = $request->input('two10');
        $dsce->two11 = $request->input('two11');
        $dsce->two12 = $request->input('two12');
        $dsce->three1 = $request->input('three1');
        $dsce->three2 = $request->input('three2');
        $dsce->three3 = $request->input('three3');
        $dsce->three4 = $request->input('three4');
        $dsce->three5 = $request->input('three5');
        $dsce->three6 = $request->input('three6');
        $dsce->three7 = $request->input('three7');
        $dsce->three8 = $request->input('three8');
        $dsce->three9 = $request->input('three9');
        $dsce->three10 = $request->input('three10');
        $dsce->three11 = $request->input('three11');
        $dsce->three12 = $request->input('three12');
        $dsce->four1 = $request->input('four1');
        $dsce->four2 = $request->input('four2');
        $dsce->four3 = $request->input('four3');
        $dsce->four4 = $request->input('four4');
        $dsce->four5 = $request->input('four5');
        $dsce->four6 = $request->input('four6');
        $dsce->four7 = $request->input('four7');
        $dsce->four8 = $request->input('four8');
        $dsce->four9 = $request->input('four9');
        $dsce->four10 = $request->input('four10');
        $dsce->four11 = $request->input('four11');
        $dsce->four12 = $request->input('four12');
        $dsce->five1 = $request->input('five1');
        $dsce->five2 = $request->input('five2');
        $dsce->five3 = $request->input('five3');
        $dsce->five4 = $request->input('five4');
        $dsce->five5 = $request->input('five5');
        $dsce->five6 = $request->input('five6');
        $dsce->five7 = $request->input('five7');
        $dsce->five8 = $request->input('five8');
        $dsce->five9 = $request->input('five9');
        $dsce->five10 = $request->input('five10');
        $dsce->five11 = $request->input('five11');
        $dsce->five12 = $request->input('five12');
        $dsce->m1 = $request->input('m1');
        $dsce->m2 = $request->input('m2');
        $dsce->m3 = $request->input('m3');
        $dsce->m4 = $request->input('m4');
        $dsce->m5 = $request->input('m5');
        $dsce->m6 = $request->input('m6');
        $dsce->m7 = $request->input('m7');
        $dsce->m8 = $request->input('m8');
        $dsce->m9 = $request->input('m9');
        $dsce->m10 = $request->input('m10');
        $dsce->m11 = $request->input('m11');
        $dsce->m12 = $request->input('m12');
        
        $dsce->save();
        
        return redirect('/viewco')->with('success', 'Edited Successfully, select the subject to view');
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
