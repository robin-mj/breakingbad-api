<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;700&display=swap" rel="stylesheet">
        <title>Breaking Bad API</title>
    </head>
    <body>
    @include('layout.header')
    @yield('content')
    @include('layout.footer')
