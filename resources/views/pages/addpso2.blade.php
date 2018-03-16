@extends('layouts.app')

@section('content')

<div class="container coaddtable">
    <h3 style="text-align:center;">Edit the Respective Course Outcomes of {{$subject->title}}</h3>
    <p>Don't use any special characters, leave it blank for NULL values or use 0</p>
    <br/>
        {!! Form::open(['action' => ['Dsce1Controller@update', $subject->id], 'method' => 'POST']) !!}
        {{Form::text('title', $subject->title, ['class'=>'form-control', 'readonly'])}}
        <table class="table table-bordered table-striped table-responsive">
            <tr>
                <th>CO</th>
                <th>PSO1</th>
                <th>PSO2</th>
                <th>PSO3</th>
            </tr>
            <tr>
                <th>CO.1</th>
                <td>{{Form::text('zero1', $subject->zero1 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('zero2', $subject->zero2 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('zero3', $subject->zero3 , ['class' => 'form-control'])}}</td>
                
            </tr>
            <tr>
                <th>CO.2</th>
                <td>{{Form::text('one1', $subject->one1, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('one2', $subject->one2, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('one3', $subject->one3, ['class' => 'form-control'])}}</td>
                          </tr>
            <tr>
                <th>CO.3</th>
                <td>{{Form::text('two1', $subject->two1, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('two2', $subject->two2, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('two3', $subject->two3, ['class' => 'form-control'])}}</td>
                           </tr>
            <tr>
                <th>CO.4</th>
                <td>{{Form::text('three1', $subject->three1, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('three2', $subject->three2, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('three3', $subject->three3, ['class' => 'form-control'])}}</td>
              
            </tr>
            <tr>
                <th>CO.5</th>
                <td>{{Form::text('four1', $subject->four1, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('four2', $subject->four2, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('four3', $subject->four3, ['class' => 'form-control'])}}</td>
                
            </tr>
            <tr>
                <th>CO.6</th>
                <td>{{Form::text('five1', $subject->five1, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('five2', $subject->five2, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('five3', $subject->five3, ['class' => 'form-control'])}}</td>
                
            </tr>
            <tr>
                <th>Modal*</th>
                <td>{{Form::text('m1', $subject->m1, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('m2', $subject->m2, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('m3', $subject->m3, ['class' => 'form-control'])}}</td>
                
            </tr>
        </table>
        <small>Modal is the maximum frequency of occurence in a particular column.</small>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit & Save', ['class' => 'btn btn-success'])}}
        {!! Form::close() !!}  
</div>
@endsection