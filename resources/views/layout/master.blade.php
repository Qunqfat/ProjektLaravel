{{-- @extends('layout.main') --}}
{{--
@section('content')
    jestem w masterze
@endsection --}}

<html>
    <head>
        <title> {{ $appName}} </title>
        <style>
            td {
                padding-right: 15px;
            }
        </style>
    </head>
    <body>
        <h1> {{ $appName }}</h1>
        <div class="sidebar">
            @section('sidebar')
                <ul>
                    <li><a href="equipment">jestem w masterze</a></li>
                </ul>
            @show
        </div>

        <div class="container">
            @yield('content')
        </div>



    </body>
</html>
