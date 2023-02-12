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

    <section class="column">
        <table class='table is-bo'></table>
       
    </section>


    <div class="table-container">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            {{-- @foreach ($collection as $item) --}}
            <tr>
                <th>Paitent Names</th>
                <th>Paitent Clinic</th>
                <th>Surgery Type </th>
                <th>Surgery Date</th>

            </tr>
            @foreach ($collection as $item)
                   <tr>
                   <td> {{$item->name}}</td>
                   <td>{{$item->patient_clinic}}</td>
                   <td>{{$item->surgery_type}}</td>
                   <td>{{$item->date}}</td>
                </tr>
            @endforeach
        </table>
      </div>
</body>
</html>