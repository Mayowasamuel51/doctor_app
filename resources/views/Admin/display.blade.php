<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Free Bulma template</title>
    <link rel="stylesheet" href="{{asset('bulma/css/bulma.min.css')}}">
</head>
<body>
   

  @isset($total)
   <section class="columns">   
    <div class="column card">
        <div class="card-header"><header class="card-header-title">Paitent Info</header></div>
        <div class="card-content has-text-weight-semibold">
 
            <p>CARD NUMBER : {{$total->card_number}}</p>  <br>
            <p>FULLNAME : {{$total->name}}</p> <br>
            <p>SURNAME  : {{$total->surname}}</p>  <br>
            <p>AGE : {{$total->age}}</p>  <br>
            <p>DEPARTMENT : {{$total->clinic}}</p>
         
        </div>
        <div class="card-footer">
            <a href="admin" class="card-footer-item button has-text-weight-semibold">back</a>
        </div>
    </div>
</section>
@endisset

<div class="column notification mt-4">
<h1 class="is-size-2 has-text-weight-semibold has-text-centered">{{$nouser}}</h1>
<a href="admin" class="card-footer-item button has-text-weight-semibold">back</a>
</div>



</body>
</html>