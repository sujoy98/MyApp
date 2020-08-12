<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"  href="{{asset('css/app.css')}}">
        <title>{{config('app/name','MyApp')}}</title>
    </head>
    @include('inc/navbar')
    <body>
        <div class="container">
            @include('inc/messages')
            @yield('content')
        </div>
    </body>
</html>
