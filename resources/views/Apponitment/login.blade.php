@extends('layout.login')
@section('content')
<style>
  section{
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;

  }
</style>
    <section class="column is-5-desktop is-offset-3 " style='margin-top:120px'>
        <div>
            <form action="{{route('storelogin')}}" method="post">
                @csrf 
                <div class="field">
                    <h1 class="has-text-weight-bold has-text-centered is-size-3">Login as Patient</h1> <hr>
                   @error('phone_number')
                    <h1 class="is-size-6 has-text-danger" style="color:red;">{{$message}}</h1>
                        
                    @enderror
                    <p class="control has-icons-left has-icons-right  mt-5">
                      <input class="input" type="text" name='phone_number' value="{{old('phone_number')}}" placeholder="Phone Number">
                      <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                      </span>
                      <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                      </span>
                    </p>
                  </div>
                  <div class="field">
                    @error('password')
                    <h1 class="is-size-6 has-text-danger" style="color:red;">{{$message}}</h1>
                     @enderror
                    <p class="control has-icons-left">
                      <input class="input" type="password" name='password' placeholder="Password">
                      <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                      </span>
                    </p>
                  </div>
                  <div class="field">
                    <p class="control">
                      <button class="button is-success is-fullwidth">
                        Login
                      </button>
                    </p>                
                  </div><!DOCTYPE html>
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
                                
                                  <a class="button is-primary" href='{{route('register')}}'>
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
            </form>
        </div>
    </section>

@endsection