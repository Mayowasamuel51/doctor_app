<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    {{-- <link rel="stylesheet" href="{{asset('css/foundation.css')}}"> --}}
    <title>Document</title>
</head>
<body>
  

  <div class='column is-5-desktop is-offset-4'>
    <h1 class='is-size-2 has-text-centered'>Make Appointment</h1>
    <div class="field mt-5">
        <label class="label">Patient  Name</label>
        <div class="control">
          <input class="input" type="text" placeholder="Text input">
        </div>
      </div>
      
      <div class="field">
        <label class="label">Patient Surname</label>
        <div class="control ">
          <input class="input is-success" type="text" placeholder="Text input" value="bulma">
       
     
        </div>
       
      </div>
      
      <div class="field">
        <label class="label">Patient Card Number</label>
        <div class="control ">
          <input class="input is-danger" type="text" placeholder="Card Number " value="">
        </div>

      </div>
      
      <div class="field">
        <label class="label">Patient Clinic</label>
        <div class="control">
          <div class="select">
            <select>
              <option>Select dropdown</option>
              <option>With options</option>
            </select>
          </div>
        </div>
      </div>
      
      <div class="field">
        <label class="label">Appointment Date</label>
        <div class="control">
          <input class="input date" placeholder="Textarea" type='date' >
        </div>
      </div>
      
      <div class="field is-grouped mt-6">
        <div class="control">
          <button class="button is-link is-fullwidth">Create Appointment</button>
        </div>
        <div class="control">
          <a class="button is-link is-light" href='{{route('register')}}'>Register As A Patient</a>
        </div>
      </div>
  </div>










    
</body>
</html>