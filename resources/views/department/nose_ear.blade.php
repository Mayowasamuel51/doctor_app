@extends('department.layout')
@section('content')
    <h1 class="has-text-centered is-size-4 has-text-weight-semibold">DEPARTMENT OF EAR NOSE THROAT</h1>
   
   
    <form action="display" class="column is-half is-offset-3" method="post">
        @csrf
           
        @error('nose_ear')
        <h1 class="has-text-weight-bold has-text-danger">{{$message}}</h1>
        @enderror

        <textarea name="nose_ear" class="textarea" id="" value='{{old('nose_ear')}}' cols="30" rows="10"></textarea>
        <button class="button is-fullwidth is-info mt-3">Send</button>
    </form>


@endsection