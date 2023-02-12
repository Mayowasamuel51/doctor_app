@extends('layout.main_layout')
@section('content')
  <style>
    body{
      margin-bottom:300px;
    }
    .hero{
      background-image: url('')
    }
  </style>
  <section class="hero  mt-1 " id="hero">
    <div class="hero-body columns ">
      
    <div class="column is-offset-4" style='margin-top:300px;' >
      <button class="button is-info">Book Appointment</button>
      <button class="button is-success ml-4">Reach Out</button> 
    </div>

    </div>
  </section>























     <section class='columns' style='margin-top:90px'>
        <div class="column is-5-desktop is-offset--0 ml-6">
            <h1 class='is-size-2 has-text-weight-bold '>We Manage Your Health <br>Affrairs</h1>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui necessitatibus placeat adipisci officia dignissimos ea in illo eligendi, molestiae excepturi? Alias dicta amet sint doloribus, praesentium dolores similique eligendi repellat.</p>
            <div class='is-flex mt-6'>
               
                <button class="button is-info">Get Started</button>
                <button class="button is-success ml-4">Reach Out</button>
            </div>

        </div>

        <div class='column is-4-desktop  is-offset-2'>
            <h1 class="has-text-centered ">Register with Ease</h1>
            <form action="{{route('store')}}" method='post'>
              {{-- @if(has::session('status'))
                <div>
                  {{session('status')}}
                </div>

              @endif --}}
              @csrf
                <div class="field mt-2">
                  @error('fullname')
                  <h1 class="is-size-6 has-text-danger" style="color:red;">{{$message}}</h1>
                   @enderror
                    <label class="label">Patient  FullName</label>
                    <div class="control">
                      <input class="input" name="fullname" value="{{old('fullname')}}" type="text" placeholder="Patient FullName">
                    </div>
                  </div>
                  <div class="field mt-3">
                 
                    <label class="label">Patient Email (optional)</label>
                    <div class="control">
                      <input class="input" name="email" type="email"  placeholder="Patient Surname ">
                    </div>
                  </div>
                  <div class="field">
                    @error('age')
                    <h1 class="is-size-6 has-text-danger" style="color:red;">{{$message}}</h1>
                     @enderror
                    <label class="label">Age</label>
                    <div class="control ">
                      <input class="input is-success" type="text" name="age" placeholder="Your Age " value="{{old('age')}}">
                    </div>
                  </div>
                  <div class="field mt-3">
                    @error('phone_number')
                    <h1 class="is-size-6 has-text-danger" style="color:red;">{{$message}}</h1>
                        
                    @enderror
                    <label class="label">Phone Number</label>
                    <div class="control">
                      <input class="input"value="{{old('phone_number')}}"name="phone_number" type="text"  placeholder="email">
                    </div>
                  </div>
                  
                  <div class="field mt-3">
                    @error('clinic')
                    <h1 class="is-size-6 has-text-danger" style="color:red;">{{$message}}</h1>
                    @enderror
                    <label class="label">Clinic </label>
                    <div class="select is-primary">
                      <select name='clinic' value="{{old("clinic")}}">
                        <option>Select dropdown</option>
                        <option value='RADIOLOGY Xray DEPARTMENT'>RADIOLOGY (X-ray DEPARTMENT)</option>
                        <option value='MEDICAL DEPARTMENT'>MEDICAL DEPARTMENT</option>
                        <option value='NURSING DEPARTMENT'>NURSING  DEPARTMENT</option>
                        <option value='PHARMACY DEPARTMENT'>PHARMACY DEPARTMENT</option>
                        <option value='DEPARTMENT OF CHIID DENTAL HEALTH'>DEPARTMENT OF CHIID DENTAL HEALTH</option>
                        <option value='PATHOLOGY DEPARTMENT'>PATHOLOGY DEPARTMENT</option>
                        <option value='DEPARTMENT OF EAR NOSE THROAT'>DEPARTMENT OF EAR NOSE THROAT</option>
                        <option value='DEPARTMENT OF FAMILY MEDICINE '>DEPARTMENT OF FAMILY MEDICINE</option>
                       
                      </select>
                    </div>
                  </div>

                  




                  <div class="field mt-3">
                    @error('password')
                    <h1 class="is-size-6 has-text-danger" style="color:red;">{{$message}}</h1>
                     @enderror
                    <label class="label">Password</label>
                    <div class="control">
                      <input class="input"value="{{old('password')}}"name="password" type="text"  placeholder="password">
                    </div>
                  </div>
                  <button class='button is-info is-fullwidth'>Register</button>
            </form>

        </div>
 </section>
 <form action="{{route('apponitment')}}" method="post" class="form column is-4-desktop is-offset-4">
  @csrf
  @if(session()->has('message'))
  <h1 class="notification is-success column is-7-desktop is-offset-5 message">
    {{session('message')}}
  </h1>

  @endif
  @if(session()->has('notfound'))
  <h1 class="notification is-danger notfound textt-danger column is-7-desktop is-offset-5">
    {{session('notfound')}}
  </h1>

  @endif
  <h1  class="has-text-centered has-text-weight-semibold is-size-4">Make Your Appointment</h1>
  <div class="field">
    @error('p_surname')
    <h1 class="is-size-6 has-text-danger" style="color:red;">{{$message}}</h1>
     @enderror
    <label class="label">surname</label>
    <div class="control ">
      <input class="input is-success" type="text" placeholder="Fullname " name="p_surname" value="{{old('p_surname')}}">
    </div>
  </div>
  
  <div class="field">
    @error('p_card_number')
    <h1 class="is-size-6 has-text-danger" style="color:red;">{{$message}}</h1>
     @enderror
    <label class="label">Card Number</label>
    <div class="control ">
      <input class="input is-success" type="text" name="p_card_number" placeholder="Card Number " value="{{old('p_card_number')}}">
    </div>
  </div>
  <div class="field">
    @error('p_date')
    <h1 class="is-size-6 has-text-danger" style="color:red;">{{$message}}</h1>
     @enderror
    <label class="label">Date</label>
    <div class="control ">
      <input class="input is-success" name="p_date" type="date" placeholder="Date " value="{{old('p_date')}}">
    </div>
  </div>



  <button class="is-fullwidth button is-info">Submit</button>
</form>


@endsection