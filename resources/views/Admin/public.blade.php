<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Free Bulma template</title>
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="{{asset('bulma/css/bulma.min.css')}}">
</head>
<body>

<form action="{{route('storepublic')}}" method="post" class="column container">
    @csrf
    {{-- {{url('message')}} --}}
    @error('public_message')
        <h1 class="has-text-danger">{{$message}}</h1>
    @enderror
    <h1 class="has-text-centered has-text-weight-bold is-size-3">PUBLIC MESSAGE</h1>
    <textarea  class="textarea" name='public_message' value='{{old('public_message')}}'></textarea>
    <button class="button mt-4 is-fullwidth is-info ">Publish Message</button>
</form>


</body>
</html>