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
    <style>
       nav{
        background-color:#F6F7F8;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
       }
    
    </style>
  <nav class="navbar is-transparent">
    <div class="navbar-brand">
      <a class="navbar-item" href="{{route('register')}}">
        <h1 class='has-text-weight-semibold is-size-4  '>DOCTOR HOMES</h1>
      </a>
      <div class="navbar-burger" data-target="navbarExampleTransparentExample">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  
    <div id="navbarExampleTransparentExample" class="navbar-menu">
      <div class="navbar-start">
       
        <a class='navbar-item has-text-weight-semibold'  href='{{route('public')}}'>Public Accounment</a>
        <div class="navbar-item has-dropdown is-hoverable">
       
        </div>
      </div>
  
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="field is-grouped">
            <p class="control">
              <a class="bd-tw-button button" href='booksurgery' >
                  
             
                <span>
                Book for Surgery
                </span>
              </a>
            </p>
            <p class="control">
              <a class="button is-primary" href="allSurgerys">
                <span class="icon">
                  <i class="fas fa-download"></i>
                </span>
                <span>All Surgerys</span>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class='columns'>
    <div id="find" class='mt-5 column is-3-desktop is-offset-2 ' style="        background-color:#F6F7F8;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">


   <form action="{{route('display')}}" method=''>
    {{-- @csrf --}}
    <div class="field has-addons">
      <div class="control">
        <input class="input is-fullwidth" name="card_number" type="text" placeholder="Find a Patient">
      </div>
      <div class="control ml-6">
        <button class="button is-info">
          Find Patient
        </button>
      </div>
    </div>
   </form>
  </div>
  

  <div id="find" class='mt-5 column is-3-desktop is-offset-2 ' style="        background-color:#F6F7F8;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
   
    <div class="field has-addons">
      <div class="control">
        <input class="input is-fullwidth" type="text" placeholder="Find a Staff">
      </div>
      <div class="control ml-6">
        <a class="button is-info">
          Find Staff
        </a>
      </div>
    </div>
  </div>
  </div>



  <section class="section  mt-4">
    <h1 class="has-text-weight-bold has-text-centered is-size-4 pb-6">DOCTOR HOMES DEPARTMENT</h1>

    <div class="columns ">
      <div class="column mr-2" style='box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;'>
      
        <a href="pathology"> 
          <header class="has-text-weight-semibold is-size-5 ">  PATHOLOGY DEPARTMENT</header>
         </a>  
      </div>
    

      <div class="column ml-2" style='box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;'>
        <a href="nursing">
          <header class="has-text-weight-semibold is-size-5">NURSING  DEPARTMENT</header>
        </a>
      </div>
      <div class="column ml-2" style='box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;'>
      
        <a href="pharmacy"> 
          <header class="has-text-weight-semibold is-size-5">PHARMACY DEPARTMENT</header>
        </a>
      </div>
    </div>

    
  </section>

  <section class="mt-4 section">
    <div class="columns ">
      <div class="column mr-2" style='box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;'>

        <a href="radiology"> 
          <header class="has-text-weight-semibold is-size-5 ">RADIOLOGY (X-ray DEPARTMENT)</header>
         </a>
      
      </div>
      <div class="column ml-2" style='box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;'>
        
        <a href="medical">
          <header class="has-text-weight-semibold is-size-5">MEDICAL DEPARTMENT</header>
        </a>
      </div>

     
      
      <div class="column ml-2" style='box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;'>
      
        <a href="department_nose_ear"> 
          <header class="has-text-weight-semibold is-size-5">DEPARTMENT OF EAR, NOSE, THROAT</header>
        </a>
      </div>
    </div>
  </section>
            
</body>

</html>





































{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Document</title>
</head>
<body>
    <h1 class='has-text-weight-bold is-size-3 has-text-centered'>DOCTOR HOMES</h1>
    <hr>

    <section class="columns">
        <div class='column'style="box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;">

        </div>

        <div class='column'style="box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;">

        </div>


        <div class='column' style="box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;">
            <label for="" class="is-size-4 has-text-weight-semibold">Search for a Patient</label>
            <div class="field has-addons mt-5">
                <div class="control">
                   
                  <input class="input" type="text" placeholder="Find a Patient">
                </div>
                <div class="control">
                  <a class="button is-info">
                    Search
                  </a>
                </div>
              </div>
        </div>

    </section>
</body>
</html> --}}