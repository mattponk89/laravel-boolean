<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Boolean Laravel - @yield('title-page', 'BENVENUTO')</title>
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body class="debug">

        @include('common.header')

        @section('main')
        @show
        
    </body>
</html>