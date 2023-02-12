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
    <a href="admin" class='mb-4 mt-6 button is-info ml-6'>back</a>

    <section class="column container">
        <h1 class="has-text-weight-semibold is-size-2 has-text-centered">BOOK SURGERY PAGE</h1>
        @if(session()->has('message'))
            <div class="notification  is-success">{{session('message')}}</div>
        @endif

        @if(session()->has('error'))
        <div class="notification is-warning ">{{session('error')}}</div>
    @endif
        <form action="surgerystore" method = 'post'>
            @csrf
            @error('name')
                <h1 class="has-text-danger">{{$message}}</h1>  
            @enderror
            <label for="name"class="has-text-weight-bold" >Patient Name</label>
            <input type="text" class="input mt-4 mb-4" name="name" value="{{old('name')}}">
            @error('surgery_type')
            <h1 class="has-text-danger">{{$message}}</h1>  
        @enderror
            <label for="surgery"class="has-text-weight-bold">Surgery Type</label>
            <input type="text" class="input  mt-4 mb-4" name="surgery_type" value="{{old('surgery_type')}}">
            <label for="name" class="has-text-weight-bold">Patient Clinic</label>
            <br>
            <div class="select is-primary mt-4 mb-4">
                <select name='clinic' value="{{old("clinic")}}">
                  <option>Select dropdown</option>
                  <option value='RADIOLOGYXrayDEPARTMENT'>RADIOLOGY (X-ray DEPARTMENT)</option>
                  <option value='MEDICALDEPARTMENT'>MEDICAL DEPARTMENT</option>
                  <option value='NURSINGDEPARTMENT'>NURSING  DEPARTMENT</option>
                  <option value='PHARMACYDEPARTMENT'>PHARMACY DEPARTMENT</option>
                  <option value='DEPARTMENTOFCHIIDDENTALHEALTH'>DEPARTMENT OF CHIID DENTAL HEALTH</option>
                  <option value='PATHOLOGYDEPARTMENT'>PATHOLOGY DEPARTMENT</option>
                  <option value='DEPARTMENTOFEARNOSETHROAT'>DEPARTMENT OF EAR NOSE THROAT</option>
                  <option value='DEPARTMENTOFFAMILYMEDICINE'>DEPARTMENT OF FAMILY MEDICINE</option>
                 
                </select>
              </div> <br>
              @error('date')
              <h1 class="has-text-danger">{{$message}}</h1>  
          @enderror
              <label for="time" class="has-text-weight-bold ">Date of Surgery</label>
            <input type="date" class="input mt-4 "  name="date" value="{{old('date')}}">


            <button class="button has-text-weight-semibold is-fullwidth mt-5">Book</button>
        </form>
    </section>

































</body>
</html>