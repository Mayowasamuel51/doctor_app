<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('bulma/css/bulma.min.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DashBoard</title>
</head>

<body>
    <style>
    </style>
    <section class="columns"style='box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;'>
        <aside class="menu column  ml-2 is--desktop mt-4">
            <p class="menu-label">
                General
            </p>
            <ul class="menu-list has-text-weight-semibold">
                <li>Fullname {{ auth()->user()->fullname }}</li>
                <li class="pt-4">Email {{ auth()->user()->email }}</li>
            </ul>

            <ul class="menu-list mt-5 has-text-weight-semibold">
                <li>Card Number {{ auth()->user()->card_number }}</li>
                <li>
                <li class="pt-5">Phone Number {{ auth()->user()->phone_number }}</li>
                <li class="pt-5">Age {{ auth()->user()->age }}</li>
                <li class="pt-6">Clinic {{ auth()->user()->clinic }}</li>

                </li>
                <form action="logout" method="post">
                    @csrf
                    <button class='button is-dark mt-4 is-small'>logout</button>

                </form>

            </ul>

        </aside>
        <div class="column is-5-desktop mt-4 is-offset-0 mr-6 ">
            <form action="{{ route('app') }}" class="form  " method="post">
                @csrf
                @if (session()->has('message'))
                    <h1 class=" is-success notification column is-7-desktop is-offset-2">
                        {{ session('message') }}
                    </h1>
                @endif

                @if (session()->has('notfound'))
                    <h1 class=" is-danger column notification is-8-desktop is-offset-2 has-text-weight-semibold   ">
                        {{ session('notfound') }}
                    </h1>
                @endif
                <h1 class="has-text-centered has-text-weight-semibold is-size-5">Book Appointment </h1>
                <div class="field mt-2">
                    @error('fullname')
                        <h1 class="is-size-6 has-text-danger" style="color:red;">{{ $message }}</h1>
                    @enderror
                    <label class="label">Fullname</label>
                    <div class="control ">
                        <input class="input is-success" name="fullname" type="text" placeholder="Fullname "
                            value="{{ auth()->user()->fullname }}">
                    </div>
                </div>
                <div class="field">
                    @error('card_number')
                        <h1 class="is-size-6 has-text-danger" style="color:red;">{{ $message }}</h1>
                    @enderror
                    <label class="label">Card Number</label>
                    <div class="control ">
                        <input class="input is-success" type="text" name="card_number" placeholder="Card Number"
                            value="{{ auth()->user()->card_number }}">
                    </div>
                </div>
                <div class="field">
                    @error('date')
                        <h1 class="is-size-6 has-text-danger" style="color:red;">{{ $message }}</h1>
                    @enderror
                    <label class="label">Date</label>
                    <div class="control ">
                        <input class="input is-success" type="date" name="date" placeholder="Date "
                            value="">
                    </div>
                </div>



                <button class="is-fullwidth button is-info">Submit</button>
            </form>
        </div>


    </section>

    <div class="column">
        <div class="notification  is-info is-light ">
            <h1 class="has-text-centered has-text-weight-semibold  is-size-4"style='text-decoration:undeline;'>Hospital
                Lastest News </h1>
            <p class="has-text-centered">
                {{ $public_message->public }}
            </p>
            <h1 class="has-text-centered has-text-weight-semibold  is-size-4 pt-3"style='text-decoration:undeline;'>Your
                Department Lastest News </h1>

            @foreach ($public_department as $item)
                @switch(auth()->user()->clinic)
                    @case(auth()->user()->clinic === 'PHARMACY DEPARTMENT')
                        <p class="has-text-centered"> {{ $item->PHARMACYDEPARTMENT }}</p>
                    @break

                    @case(auth()->user()->clinic === 'PATHOLOGY DEPARTMENT')
                        <p class="has-text-centered"> {{ $item->PATHOLOGYDEPARTMENT }}</p>
                    @break

                    @case(auth()->user()->clinic === 'RADIOLOGYXrayDEPARTMENT')
                        <p class="has-text-centered"> {{ $item->RADIOLOGYXrayDEPARTMENT }} </p>
                    @break

                    @case(auth()->user()->clinic === 'DEPARTMENT OF FAMILY MEDICINE')
                        <p class="has-text-centered"> {{ $item->DEPARTMENTOFFAMILYMEDICINE }} </p>
                    @break

                    @case(auth()->user()->clinic === 'DEPARTMENT OF CHIID DENTAL HEALTH')
                        <p class="has-text-centered"> {{ $item->DEPARTMENTOFCHIIDDENTALHEALTH }} </p>
                    @break

                    @case(auth()->user()->clinic === 'NURSINGSDEPARTMENT')
                        <p class="has-text-centered"> {{ $item->NURSINGSDEPARTMENT }} </p>
                    @break

                    @case(auth()->user()->clinic === 'MEDICAL DEPARTMENT')
                        <p class="has-text-centered"> {{ $item->MEDICALDEPARTMENT }} </p>
                    @break

                    @case(auth()->user()->clinic === 'DEPARTMENT OF EAR NOSE THROAT')
                        <p class="has-text-centered"> {{ $item->DEPARTMENTOFEARNOSETHROAT }} </p>
                    @break

                    @default
                        Default case...
                @endswitch
            @endforeach
        </div>
    </div>








    <div class="column">


        <div class="column ">
            <h1 class="has-text-centered  is-size-4 has-text-weight-semibold">Your Apponitment Bookings</h1>
            <div class="is-flex">
                @foreach ($users as $user)
                    <div class='card mt-5 ml-5'>
                        <div class="card-header">
                            <header class='card-header-title'>{{ $user->fullname }}</header>
                        </div>
                        <div class="card-content  has-text-weight-semibold">
                            <p>Apponitment Date : {{ $user->date }}</p>
                            <p class="pt-3">Card Number {{ $user->card_number }}</p>
                            <hr>
                            <small class="pt-3 ">Please come with your hospital card</small>
                        </div>
                    </div>
                @endforeach
            </div>



        </div>


    </div>
    <div class="column is-2-desktop is-offset-5 ">
        <a href="">{{ $users->Links() }}</a>

    </div>




    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
