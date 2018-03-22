@extends('layouts.app')

@section('content')
<div class="container">
  <h3>Enter the student details</h3>
  <small>Pro Tip: use the <kbd>Tab</kbd> key to switch quickly between input boxes</small>
   <br/><br/>

 {!! Form::open(['action' => 'DsceStud@store', 'method' => 'POST']) !!}
 <table>
      <tr>
        <th class="addstud">USN</th>
        <td class="addstud"> {{Form::text('usn', '', ['class'=>'form-control', 'required' => 'required', 'placeholder' => 'USN'])}}</td>
      </tr>
      
      <tr>
        <th class="addstud">Name</th>
        <td class="addstud"> {{Form::text('name', '', ['class'=>'form-control','required' => 'required', 'placeholder'=>'Name'])}}</td>
      </tr>

      <tr>
        <th class="addstud">Section</th>
        <td class="addstud"> {{Form::text('section', '', ['class'=>'form-control','required' => 'required', 'placeholder'=>'Section'])}}</td>
      </tr>      
   
      <tr>
        <th class="addstud">CIE1</th>
        <td class="addstud">{{Form::text('aat1ia1', '', ['class'=>'form-control','required' => 'required', 'placeholder' => 'aat1'])}}<td>
        <td class="addstud">{{Form::text('aat2ia1', '', ['class'=>'form-control','required' => 'required', 'placeholder' => 'aat2'])}}<td>  
        <td class="addstud">{{Form::text('assignmentia1', '', ['class'=>'form-control','required' => 'required', 'placeholder' => 'assignment'])}}<td>
        <td class="addstud">{{Form::text('cieia1', '', ['class'=>'form-control','required' => 'required', 'placeholder' => 'CIE out of 30'])}}<td>
      </tr>
      <tr>
      <th class="addstud">CIE2</th>
        <td class="addstud">{{Form::text('aat1ia2', '', ['class'=>'form-control','required' => 'required', 'placeholder' => 'aat1'])}}<td>
        <td class="addstud">{{Form::text('aat2ia2', '', ['class'=>'form-control','required' => 'required', 'placeholder' => 'aat2'])}}<td>  
        <td class="addstud">{{Form::text('assignmentia2', '', ['class'=>'form-control','required' => 'required', 'placeholder' => 'assignment'])}}<td>
        <td class="addstud">{{Form::text('cieia2', '', ['class'=>'form-control','required' => 'required', 'placeholder' => 'CIE out of 30'])}}<td> 
      </tr>
      <tr>
        <th class="addstud">SEE</th>
        <td class="addstud">{{Form::text('see', '', ['class'=>'form-control', 'required' => 'required', 'placeholder' => 'SEE out of 100'])}}</td>
      </tr>
      </table>
    <br/>

 {{Form::submit('Submit & Save', ['class' => 'btn btn-success'])}}
 {!! Form::close() !!}
</div>
@endsection
