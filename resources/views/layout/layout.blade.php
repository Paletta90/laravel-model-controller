<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Link boostrap 5 --}}
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">

    <title>@yield('title')</title>
</head>

<body>

    {{-- Header --}}
    @include('includes.header')


    @yield('content')

    {{-- Footer --}}
    @include('includes.footer')
    
    {{-- Boostrap 5 js --}}
    <script src=" {{ asset('js/app.js') }} "></script>

</body>

</html>