<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('bulma/css/bulma.min.css')}}">
  
</head>
<body>
    <nav class="navbar is-fixed-top is-info" role="navigation" aria-label="main navigation" style=''>
        <div class="navbar-brand">
          <a class="navbar-item" href="https://bulma.io" class="has-text-white">
            <h1 class="is-size-5 has-text-white has-text-weight-bold">DOCTOR HOMES </h1>
          </a>
      
          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
      
        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item">
              Buy Drugs 
            </a>
      
            <a class="navbar-item">
              Documentation
            </a>
      
          
          </div>
      
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="buttons">
              
                <a class="button is-primary" href='{{route('login')}}'>
                  <strong>Register</strong>
                </a>
                <a class="button is-light" href=''>
                  Make Apponitment
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>


    
    
    
    
      @yield('content')


    
</body>
</html>