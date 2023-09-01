<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title')</title>

    {{-- poner style aca, el formato de la tabla que incluye el layaut.app --}}
</head>


<body>

    @include('layouts.navigation')
    @yield('content')


    @if (session('status'))
        <div> {{ session('status') }} </div>
        <br>
    @endif
    
</body>
</html>

{{-- Es como el padre de todo el HTML --}}