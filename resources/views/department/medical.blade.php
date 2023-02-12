@extends('department.layout')
@section('content')
    <h1  class="has-text-centered is-size-4 has-text-weight-semibold">MEDICAL DEPARTMENT</h1>
   
   
    <form action="medicalstore" class="column is-half is-offset-3" method="post">
        @csrf
           
        @error('medical')
        <h1 class="has-text-weight-bold has-text-danger">{{$message}}</h1>
        @enderror

        <textarea name="medical" class="textarea" id="" value='{{old('medical')}}' cols="30" rows="10"></textarea>
        <button class=" button is-fullwidth is-info mt-3">Send</button>
    </form>


@endsection