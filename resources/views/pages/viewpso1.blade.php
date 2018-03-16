@extends('layouts.app')

@section('content')

<div class="container coaddtable">
 @foreach ($subjects as $subject)
    <h3 style="text-align:center;">Respective Course Outcomes of {{$subject->title}}</h3>
    
    <br/>
        <table class="table table-bordered table-striped table-responsive">
            <tr>
                <th>CO</th>
                <th>PSO1</th>
                <th>PSO2</th>
                <th>PSO3</th>
            
            </tr>
            <tr>
                <th>CO.1</th>
                <td>{{$subject->zero1 }}</td>
                <td>{{$subject->zero2 }}</td>
                <td>{{$subject->zero3 }}</td>
               
            </tr>
            <tr>
                <th>CO.2</th>
                <td>{{$subject->one1 }}</td>
                <td>{{$subject->one2 }}</td>
                <td>{{$subject->one3 }}</td>
               
            </tr>
            <tr>
                <th>CO.3</th>
                <td>{{$subject->two1}}</td>
                <td>{{$subject->two2}}</td>
                <td>{{$subject->two3}}</td>
            
            </tr>
            <tr>
                <th>CO.4</th>
                <td>{{ $subject->three1}}</td>
                <td>{{ $subject->three2}}</td>
                <td>{{ $subject->three3}}</td>
           
            </tr>
            <tr>
                <th>CO.5</th>
                <td>{{$subject->four1}}</td>
                <td>{{$subject->four2}}</td>
                <td>{{$subject->four3}}</td>
                
            </tr>
            <tr>
                <th>CO.6</th>
                <td>{{$subject->five1}}</td>
                <td>{{$subject->five2}}</td>
                <td>{{$subject->five3}}</td>
              
            </tr>
            <tr>
                <th>Modal*</th>
                <td>{{$subject->m1}}</td>
                <td>{{$subject->m2}}</td>
                <td>{{$subject->m3}}</td>
             
            </tr>
        </table>
        <small>Modal is the maximum frequency of occurence in a particular column.</small>  
    @endforeach
    </div>
@endsection