<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/favicon.svg')}}" type="image/x-icon">
    <!-- <link rel="icon" href="/favicon.ico" type="image/x-icon"> -->


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/inicio.css">
    <link rel="stylesheet" href="/css/temasreg.css">
    <link rel="stylesheet" href="/css/header.css">
    @stack('styles')
    <!-- <link rel="stylesheet" href="/css/post.css">
    <link rel="stylesheet" href="/css/style_nico.css"> -->

</head>
<body>
