@extends('layouts.app')

@section('content')
    <div class="container" id="addcocontainer">
        <h3>Enter the Subject</h3>
        {!! Form::open(['action' => 'DsceController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::select('title', array('ENGGMATHS' => 'Engg. Maths', 'ENGGPHYSICS' => 'Engg. Physics', 'ENGGCHEM' => 'Engg. Chem', 'ELECM' => 'Ele. of Civil & Engg. Mech', 'PROGC' => 'Prog. in & Data Struc.'), ['class' => 'dropdown'])}}
            </div>
                 {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}  
    </div>
@endsection
