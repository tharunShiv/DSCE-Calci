@extends('layouts.app')

@section('content')

<div class="container coaddtable">
    @foreach($subjects as $subject)
    <h3 style="text-align:center;">Edit the Respective Course Outcomes of {{$subject->title}}</h3>
    <p>Don't use any special characters, leave it blank for NULL values or use 0</p>
    <br/>
        {!! Form::open(['action' => ['DsceController@update', $subject->id], 'method' => 'POST']) !!}
        {{Form::text('title', $subject->title, ['class'=>'form-control', 'readonly'])}}
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
                <td>{{Form::text('zero1', $subject->zero1 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('zero2', $subject->zero2 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('zero3', $subject->zero3 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('zero4', $subject->zero4 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('zero5', $subject->zero5 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('zero6', $subject->zero6 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('zero7', $subject->zero7 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('zero8', $subject->zero8 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('zero9', $subject->zero9 , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('zero10',$subject->zero10  , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('zero11',$subject->zero11  , ['class' => 'form-control'])}}</td>
                <td>{{Form::text('zero12',$subject->zero12  , ['class' => 'form-control'])}}</td>
            </tr>
            <tr>
                <th>CO.2</th>
                <td>{{Form::text('one1', $subject->one1, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('one2', $subject->one2, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('one3', $subject->one3, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('one4', $subject->one4, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('one5', $subject->one5, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('one6', $subject->one6, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('one7', $subject->one7, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('one8', $subject->one8, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('one9', $subject->one9, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('one10',$subject->one10, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('one11',$subject->one11, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('one12',$subject->one12, ['class' => 'form-control'])}}</td>
            </tr>
            <tr>
                <th>CO.3</th>
                <td>{{Form::text('two1', $subject->two1, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('two2', $subject->two2, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('two3', $subject->two3, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('two4', $subject->two4, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('two5', $subject->two5, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('two6', $subject->two6, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('two7', $subject->two7, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('two8', $subject->two8, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('two9', $subject->two9, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('two10', $subject->two10, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('two11', $subject->two11, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('two12', $subject->two12, ['class' => 'form-control'])}}</td>
            </tr>
            <tr>
                <th>CO.4</th>
                <td>{{Form::text('three1', $subject->three1, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('three2', $subject->three2, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('three3', $subject->three3, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('three4', $subject->three4, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('three5', $subject->three5, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('three6', $subject->three6, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('three7', $subject->three7, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('three8', $subject->three8, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('three9', $subject->three9, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('three10', $subject->three10, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('three11', $subject->three11, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('three12', $subject->three12, ['class' => 'form-control'])}}</td>
            </tr>
            <tr>
                <th>CO.5</th>
                <td>{{Form::text('four1', $subject->four1, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('four2', $subject->four2, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('four3', $subject->four3, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('four4', $subject->four4, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('four5', $subject->four5, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('four6', $subject->four6, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('four7', $subject->four7, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('four8', $subject->four8, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('four9', $subject->four9, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('four10', $subject->four10, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('four11', $subject->four11, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('four12', $subject->four12, ['class' => 'form-control'])}}</td>
            </tr>
            <tr>
                <th>CO.6</th>
                <td>{{Form::text('five1', $subject->five1, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('five2', $subject->five2, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('five3', $subject->five3, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('five4', $subject->five4, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('five5', $subject->five5, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('five6', $subject->five6, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('five7', $subject->five7, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('five8', $subject->five8, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('five9', $subject->five9, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('five10', $subject->five10, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('five11', $subject->five11, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('five12', $subject->five12, ['class' => 'form-control'])}}</td>
            </tr>
            <tr>
                <th>Modal*</th>
                <td>{{Form::text('m1', $subject->m1, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('m2', $subject->m2, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('m3', $subject->m3, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('m4', $subject->m4, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('m5', $subject->m5, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('m6', $subject->m6, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('m7', $subject->m7, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('m8', $subject->m8, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('m9', $subject->m9, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('m10', $subject->m10, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('m11', $subject->m11, ['class' => 'form-control'])}}</td>
                <td>{{Form::text('m12', $subject->m12, ['class' => 'form-control'])}}</td>
            </tr>
        </table>
        <small>Modal is the maximum frequency of occurence in a particular column.</small>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit & Save', ['class' => 'btn btn-success'])}}
        {!! Form::close() !!}  
        @endforeach
</div>
@endsection