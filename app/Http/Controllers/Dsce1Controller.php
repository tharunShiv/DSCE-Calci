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
        $a = array(0,0,0,0,0,0);
        $b = array(0,0,0,0,0,0);
        $c = array(0,0,0,0,0,0);

        $dsce->title = $request->input('title');
        $a[0] = $dsce->zero1 = $request->input('zero1');
        $b[0] = $dsce->zero2 = $request->input('zero2');
        $c[0] = $dsce->zero3 = $request->input('zero3');

        $a[1] = $dsce->one1 = $request->input('one1');
        $b[1] = $dsce->one2 = $request->input('one2');
        $c[1] = $dsce->one3 = $request->input('one3');

        $a[2] = $dsce->two1 = $request->input('two1');
        $b[2] = $dsce->two2 = $request->input('two2');
        $c[2] = $dsce->two3 = $request->input('two3');

        $a[3] = $dsce->three1 = $request->input('three1');
        $b[3] = $dsce->three2 = $request->input('three2');
        $c[3] = $dsce->three3 = $request->input('three3');

        $a[4] = $dsce->four1 = $request->input('four1');
        $b[4] = $dsce->four2 = $request->input('four2');
        $c[4] = $dsce->four3 = $request->input('four3');

        $a[5] = $dsce->five1 = $request->input('five1');
        $b[5] = $dsce->five2 = $request->input('five2');
        $c[5] = $dsce->five3 = $request->input('five3');


        // Finding Max Rep of array a
        $countA = array(0,0,0,0);
        for($var=0 ; $var<6; $var++){
            echo "  ",$a[$var];
        }
        for($var=0 ; $var<6; $var++){
            $temp = $a[$var];
            $countA[$temp] = $countA[$temp] + 1;
        }
        for($var=0 ; $var<4; $var++){
            echo "  ",$countA[$var];
        }
        $max = $countA[0];
        $indA = 0;  //The index of the element max repeted
        for($var=1; $var<4; $var++){
            if($countA[$var]>=$max){
                $max = $countA[$var];
                $indA = $var;
            }
        }

        // Finding Max Rep of array b
        $countB = array(0,0,0,0);
        for($var=0 ; $var<6; $var++){
            echo "  ",$b[$var];
        }
        for($var=0 ; $var<6; $var++){
            $temp = $b[$var];
            $countB[$temp] = $countB[$temp] + 1;
        }
        for($var=0 ; $var<4; $var++){
            echo "  ",$countB[$var];
        }
        $max = $countB[0];
        $indB = 0;  //The index of the element max repeted
        for($var=1; $var<4; $var++){
            if($countB[$var]>=$max){
                $max = $countB[$var];
                $indB = $var;
            }
        }



                // Finding Max Rep of array c
        $countC = array(0,0,0,0);
        for($var=0 ; $var<6; $var++){
            echo "  ",$c[$var];
        }
        for($var=0 ; $var<6; $var++){
            $temp = $c[$var];
            $countC[$temp] = $countC[$temp] + 1;
        }
        for($var=0 ; $var<4; $var++){
            echo "  ",$countC[$var];
        }
        $max = $countC[0];
        $indC = 0;  //The index of the element max repeted
        for($var=1; $var<4; $var++){
            if($countC[$var]>=$max){
                $max = $countC[$var];
                $indC = $var;
            }
        }
        $dsce->m1 = $indA;
        $dsce->m2 = $indB;
        $dsce->m3 = $indC;


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
