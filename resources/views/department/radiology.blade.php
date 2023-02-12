@extends('department.layout')
@section('content')
    <h1 class="has-text-centered is-size-4 has-text-weight-semibold">RADIOLOGY DEPARTMENT</h1>
   
   
    <form action="radiologystore" class="column is-half is-offset-3" method="post">
        @csrf
           
        @error('text')
        <h1 class="has-text-weight-bold has-text-danger">{{$message}}</h1>
        @enderror

        <textarea name="text" class="textarea" id="" value='{{old('text')}}' cols="30" rows="10"></textarea>
        <button class="button is-fullwidth is-info mt-3">Send</button>
    </form>


@endsection