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

    public function addpso(Request $request)
    {
        $title = $request->input('title');
        $dsce = Dsce::where('title', $title)->get();
        if($dsce->isEmpty()){

        } else {
        //when we use get(), it is a collection, so youve to iterate over it or use zero index
        return view('pages.viewco1')->with('subjects', $dsce);
        }
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
        $a = array(0,0,0,0,0,0,0,0,0,0,0,0);
        $b = array(0,0,0,0,0,0,0,0,0,0,0,0);
        $c = array(0,0,0,0,0,0,0,0,0,0,0,0);
        $d = array(0,0,0,0,0,0,0,0,0,0,0,0);
        $e = array(0,0,0,0,0,0,0,0,0,0,0,0);
        $f = array(0,0,0,0,0,0,0,0,0,0,0,0);
        $g = array(0,0,0,0,0,0,0,0,0,0,0,0);
        $h = array(0,0,0,0,0,0,0,0,0,0,0,0);
        $i = array(0,0,0,0,0,0,0,0,0,0,0,0);
        $j = array(0,0,0,0,0,0,0,0,0,0,0,0);
        $k = array(0,0,0,0,0,0,0,0,0,0,0,0);
        $l = array(0,0,0,0,0,0,0,0,0,0,0,0);

        $dsce->title = $request->input('title');
        $a[0] = $dsce->zero1 = $request->input('zero1');
        $b[0] = $dsce->zero2 = $request->input('zero2');
        $c[0] = $dsce->zero3 = $request->input('zero3');
        $d[0] = $dsce->zero4 = $request->input('zero4');
        $e[0] = $dsce->zero5 = $request->input('zero5');
        $f[0] = $dsce->zero6 = $request->input('zero6');
        $g[0] = $dsce->zero7 = $request->input('zero7');
        $h[0] = $dsce->zero8 = $request->input('zero8');
        $i[0] = $dsce->zero9 = $request->input('zero9');
        $j[0] = $dsce->zero10 = $request->input('zero10');
        $k[0] = $dsce->zero11 = $request->input('zero11');
        $l[0] = $dsce->zero12 = $request->input('zero12');


        $a[1]=$dsce->one1 = $request->input('one1');
        $b[1]=$dsce->one2 = $request->input('one2');
        $c[1]=$dsce->one3 = $request->input('one3');
        $d[1]=$dsce->one4 = $request->input('one4');
        $e[1]=$dsce->one5 = $request->input('one5');
        $f[1]=$dsce->one6 = $request->input('one6');
        $g[1]=$dsce->one7 = $request->input('one7');
        $h[1]=$dsce->one8 = $request->input('one8');
        $i[1]=$dsce->one9 = $request->input('one9');
        $j[1]=$dsce->one10 = $request->input('one10');
        $k[1]=$dsce->one11 = $request->input('one11');
        $l[1]=$dsce->one12 = $request->input('one12');

        $a[2]=$dsce->two1 = $request->input('two1');
        $b[2]=$dsce->two2 = $request->input('two2');
        $c[2]=$dsce->two3 = $request->input('two3');
        $d[2]=$dsce->two4 = $request->input('two4');
        $e[2]=$dsce->two5 = $request->input('two5');
        $f[2]=$dsce->two6 = $request->input('two6');
        $g[2]=$dsce->two7 = $request->input('two7');
        $h[2]=$dsce->two8 = $request->input('two8');
        $i[2]=$dsce->two9 = $request->input('two9');
        $j[2]=$dsce->two10 = $request->input('two10');
        $k[2]=$dsce->two11 = $request->input('two11');
        $l[2]=$dsce->two12 = $request->input('two12');

        $a[3]=$dsce->three1 = $request->input('three1');
        $b[3]=$dsce->three2 = $request->input('three2');
        $c[3]=$dsce->three3 = $request->input('three3');
        $d[3]=$dsce->three4 = $request->input('three4');
        $e[3]=$dsce->three5 = $request->input('three5');
        $f[3]=$dsce->three6 = $request->input('three6');
        $g[3]=$dsce->three7 = $request->input('three7');
        $h[3]=$dsce->three8 = $request->input('three8');
        $i[3]=$dsce->three9 = $request->input('three9');
        $j[3]=$dsce->three10 = $request->input('three10');
        $k[3]=$dsce->three11 = $request->input('three11');
        $l[3]=$dsce->three12 = $request->input('three12');

        $a[4]=$dsce->four1 = $request->input('four1');
        $b[4]=$dsce->four2 = $request->input('four2');
        $c[4]=$dsce->four3 = $request->input('four3');
        $d[4]=$dsce->four4 = $request->input('four4');
        $e[4]=$dsce->four5 = $request->input('four5');
        $f[4]=$dsce->four6 = $request->input('four6');
        $g[4]=$dsce->four7 = $request->input('four7');
        $h[4]=$dsce->four8 = $request->input('four8');
        $i[4]=$dsce->four9 = $request->input('four9');
        $j[4]=$dsce->four10 = $request->input('four10');
        $k[4]=$dsce->four11 = $request->input('four11');
        $l[4]=$dsce->four12 = $request->input('four12');

        $a[5]=$dsce->five1 = $request->input('five1');
        $b[5]=$dsce->five2 = $request->input('five2');
        $c[5]=$dsce->five3 = $request->input('five3');
        $d[5]=$dsce->five4 = $request->input('five4');
        $e[5]=$dsce->five5 = $request->input('five5');
        $f[5]=$dsce->five6 = $request->input('five6');
        $g[5]=$dsce->five7 = $request->input('five7');
        $h[5]=$dsce->five8 = $request->input('five8');
        $i[5]=$dsce->five9 = $request->input('five9');
        $j[5]=$dsce->five10 = $request->input('five10');
        $k[5]=$dsce->five11 = $request->input('five11');
        $l[5]=$dsce->five12 = $request->input('five12');

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


                  // Finding Max Rep of array d
        $countD = array(0,0,0,0);
        for($var=0 ; $var<6; $var++){
            echo "  ",$d[$var];
        }
        for($var=0 ; $var<6; $var++){
            $temp = $d[$var];
            $countD[$temp] = $countD[$temp] + 1;
        }
        for($var=0 ; $var<4; $var++){
            echo "  ",$countD[$var];
        }
        $max = $countD[0];
        $indD = 0;  //The index of the element max repeted
        for($var=1; $var<4; $var++){
            if($countD[$var]>=$max){
                $max = $countD[$var];
                $indD = $var;
            }
        }


        // Finding Max Rep of array e
        $countE = array(0,0,0,0);
        for($var=0 ; $var<6; $var++){
            echo "  ",$e[$var];
        }
        for($var=0 ; $var<6; $var++){
            $temp = $e[$var];
            $countE[$temp] = $countE[$temp] + 1;
        }
        for($var=0 ; $var<4; $var++){
            echo "  ",$countE[$var];
        }
        $max = $countE[0];
        $indE = 0;  //The index of the element max repeted
        for($var=1; $var<4; $var++){
            if($countE[$var]>=$max){
                $max = $countE[$var];
                $indE = $var;
            }
        }


        // Finding Max Rep of array f
        $countF = array(0,0,0,0);
        for($var=0 ; $var<6; $var++){
            echo "  ",$f[$var];
        }
        for($var=0 ; $var<6; $var++){
            $temp = $f[$var];
            $countF[$temp] = $countF[$temp] + 1;
        }
        for($var=0 ; $var<4; $var++){
            echo "  ",$countF[$var];
        }
        $max = $countF[0];
        $indF = 0;  //The index of the element max repeted
        for($var=1; $var<4; $var++){
            if($countF[$var]>=$max){
                $max = $countF[$var];
                $indF = $var;
            }
        }


        // Finding Max Rep of array g
        $countG = array(0,0,0,0);
        for($var=0 ; $var<6; $var++){
            echo "  ",$g[$var];
        }
        for($var=0 ; $var<6; $var++){
            $temp = $g[$var];
            $countG[$temp] = $countG[$temp] + 1;
        }
        for($var=0 ; $var<4; $var++){
            echo "  ",$countG[$var];
        }
        $max = $countG[0];
        $indG = 0;  //The index of the element max repeted
        for($var=1; $var<4; $var++){
            if($countG[$var]>=$max){
                $max = $countG[$var];
                $indG = $var;
            }
        }


        // Finding Max Rep of array h
        $countH = array(0,0,0,0);
        for($var=0 ; $var<6; $var++){
            echo "  ",$h[$var];
        }
        for($var=0 ; $var<6; $var++){
            $temp = $h[$var];
            $countH[$temp] = $countH[$temp] + 1;
        }
        for($var=0 ; $var<4; $var++){
            echo "  ",$countH[$var];
        }
        $max = $countH[0];
        $indH = 0;  //The index of the element max repeted
        for($var=1; $var<4; $var++){
            if($countH[$var]>=$max){
                $max = $countH[$var];
                $indH = $var;
            }
        }


                 // Finding Max Rep of array i
        $countI = array(0,0,0,0);
        for($var=0 ; $var<6; $var++){
            echo "  ",$i[$var];
        }
        for($var=0 ; $var<6; $var++){
            $temp = $i[$var];
            $countI[$temp] = $countI[$temp] + 1;
        }
        for($var=0 ; $var<4; $var++){
            echo "  ",$countI[$var];
        }
        $max = $countI[0];
        $indI = 0;  //The index of the element max repeted
        for($var=1; $var<4; $var++){
            if($countI[$var]>=$max){
                $max = $countI[$var];
                $indI = $var;
            }
        }


        // Finding Max Rep of array j
        $countJ = array(0,0,0,0);
        for($var=0 ; $var<6; $var++){
            echo "  ",$j[$var];
        }
        for($var=0 ; $var<6; $var++){
            $temp = $j[$var];
            $countJ[$temp] = $countJ[$temp] + 1;
        }
        for($var=0 ; $var<4; $var++){
            echo "  ",$countJ[$var];
        }
        $max = $countJ[0];
        $indJ = 0;  //The index of the element max repeted
        for($var=1; $var<4; $var++){
            if($countJ[$var]>=$max){
                $max = $countJ[$var];
                $indJ = $var;
            }
        }


        // Finding Max Rep of array k
        $countK = array(0,0,0,0);
        for($var=0 ; $var<6; $var++){
            echo "  ",$k[$var];
        }
        for($var=0 ; $var<6; $var++){
            $temp = $k[$var];
            $countK[$temp] = $countK[$temp] + 1;
        }
        for($var=0 ; $var<4; $var++){
            echo "  ",$countK[$var];
        }
        $max = $countK[0];
        $indK = 0;  //The index of the element max repeted
        for($var=1; $var<4; $var++){
            if($countK[$var]>=$max){
                $max = $countK[$var];
                $indK = $var;
            }
        }


        // Finding Max Rep of array l
        $countL = array(0,0,0,0);
        for($var=0 ; $var<6; $var++){
            echo "  ",$l[$var];
        }
        for($var=0 ; $var<6; $var++){
            $temp = $l[$var];
            $countL[$temp] = $countL[$temp] + 1;
        }
        for($var=0 ; $var<4; $var++){
            echo "  ",$countL[$var];
        }
        $max = $countL[0];
        $indL = 0;  //The index of the element max repeted
        for($var=1; $var<4; $var++){
            if($countL[$var]>=$max){
                $max = $countL[$var];
                $indL = $var;
            }
        }

        // $dsce->m1 = $request->input('m1');
        // $dsce->m2 = $request->input('m2');
        // $dsce->m3 = $request->input('m3');
        // $dsce->m4 = $request->input('m4');
        // $dsce->m5 = $request->input('m5');
        // $dsce->m6 = $request->input('m6');
        // $dsce->m7 = $request->input('m7');
        // $dsce->m8 = $request->input('m8');
        // $dsce->m9 = $request->input('m9');
        // $dsce->m10 = $request->input('m10');
        // $dsce->m11 = $request->input('m11');
        // $dsce->m12 = $request->input('m12');

         $dsce->m1 = $indA;
        $dsce->m2 = $indB;
        $dsce->m3 = $indC;
        $dsce->m4 = $indD;
        $dsce->m5 = $indE;
        $dsce->m6 = $indF;
        $dsce->m7 = $indG;
        $dsce->m8 = $indH;
        $dsce->m9 = $indI;
        $dsce->m10 = $indJ;
        $dsce->m11 = $indK;
        $dsce->m12 = $indL;
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
