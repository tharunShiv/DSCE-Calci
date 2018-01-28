@extends('layouts.app')

@section('content')

<div class="container coaddtable">
 @foreach ($subjects as $subject)
    <h3 style="text-align:center;">Respective Course Outcomes of {{$subject->title}}</h3>
    
    <br/>
        <table class="table table-bordered table-striped table-responsive">
            <tr>
                <th>CO</th>
                <th>PO1</th>
                <th>PO2</th>
                <th>PO3</th>
                <th>PO4</th>
                <th>PO5</th>
                <th>PO6</th>
                <th>PO7</th>
                <th>PO8</th>
                <th>PO9</th>
                <th>PO10</th>
                <th>PO11</th>
                <th>PO12</th>
            </tr>
            <tr>
                <th>CO.1</th>
                <td>{{$subject->zero1 }}</td>
                <td>{{$subject->zero2 }}</td>
                <td>{{$subject->zero3 }}</td>
                <td>{{$subject->zero4 }}</td>
                <td>{{$subject->zero5 }}</td>
                <td>{{$subject->zero6 }}</td>
                <td>{{$subject->zero7 }}</td>
                <td>{{$subject->zero8 }}</td>
                <td>{{$subject->zero9 }}</td>
                <td>{{$subject->zero10}}</td>
                <td>{{$subject->zero11}}</td>
                <td>{{$subject->zero12}}</td>
            </tr>
            <tr>
                <th>CO.2</th>
                <td>{{$subject->one1 }}</td>
                <td>{{$subject->one2 }}</td>
                <td>{{$subject->one3 }}</td>
                <td>{{$subject->one4 }}</td>
                <td>{{$subject->one5 }}</td>
                <td>{{$subject->one6 }}</td>
                <td>{{$subject->one7 }}</td>
                <td>{{$subject->one8 }}</td>
                <td>{{$subject->one9 }}</td>
                <td>{{$subject->one10}}</td>
                <td>{{$subject->one11}}</td>
                <td>{{$subject->one12}}</td>
            </tr>
            <tr>
                <th>CO.3</th>
                <td>{{$subject->two1}}</td>
                <td>{{$subject->two2}}</td>
                <td>{{$subject->two3}}</td>
                <td>{{$subject->two4}}</td>
                <td>{{$subject->two5}}</td>
                <td>{{$subject->two6}}</td>
                <td>{{$subject->two7}}</td>
                <td>{{$subject->two8}}</td>
                <td>{{$subject->two9}}</td>
                <td>{{$subject->two10}}</td>
                <td>{{$subject->two11}}</td>
                <td>{{$subject->two12}}</td>
            </tr>
            <tr>
                <th>CO.4</th>
                <td>{{ $subject->three1}}</td>
                <td>{{ $subject->three2}}</td>
                <td>{{ $subject->three3}}</td>
                <td>{{ $subject->three4}}</td>
                <td>{{ $subject->three5}}</td>
                <td>{{ $subject->three6}}</td>
                <td>{{ $subject->three7}}</td>
                <td>{{ $subject->three8}}</td>
                <td>{{ $subject->three9}}</td>
                <td>{{ $subject->three10}}</td>
                <td>{{  $subject->three11}}</td>
                <td>{{ $subject->three12}}</td>
            </tr>
            <tr>
                <th>CO.5</th>
                <td>{{$subject->four1}}</td>
                <td>{{$subject->four2}}</td>
                <td>{{$subject->four3}}</td>
                <td>{{$subject->four4}}</td>
                <td>{{$subject->four5}}</td>
                <td>{{$subject->four6}}</td>
                <td>{{$subject->four7}}</td>
                <td>{{$subject->four8}}</td>
                <td>{{$subject->four9}}</td>
                <td>{{ $subject->four10}}</td>
                <td>{{ $subject->four11}}</td>
                <td>{{ $subject->four12}}</td>
            </tr>
            <tr>
                <th>CO.6</th>
                <td>{{$subject->five1}}</td>
                <td>{{$subject->five2}}</td>
                <td>{{$subject->five3}}</td>
                <td>{{$subject->five4}}</td>
                <td>{{$subject->five5}}</td>
                <td>{{$subject->five6}}</td>
                <td>{{$subject->five7}}</td>
                <td>{{$subject->five8}}</td>
                <td>{{$subject->five9}}</td>
                <td>{{ $subject->five10}}</td>
                <td>{{ $subject->five11}}</td>
                <td>{{ $subject->five12}}</td>
            </tr>
            <tr>
                <th>Modal*</th>
                <td>{{$subject->m1}}</td>
                <td>{{$subject->m2}}</td>
                <td>{{$subject->m3}}</td>
                <td>{{$subject->m4}}</td>
                <td>{{$subject->m5}}</td>
                <td>{{$subject->m6}}</td>
                <td>{{$subject->m7}}</td>
                <td>{{$subject->m8}}</td>
                <td>{{$subject->m9}}</td>
                <td>{{$subject->m10}}</td>
                <td>{{$subject->m11}}</td>
                <td>{{$subject->m12}}</td>
            </tr>
        </table>
        <small>Modal is the maximum frequency of occurence in a particular column.</small>  
    @endforeach
    </div>
@endsection