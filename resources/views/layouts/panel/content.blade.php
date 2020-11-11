<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- laravel mix compiling css-->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="nav-md">

<div class="container body">
    <div class="main_container">
        <!-- include header page -->
    @include('layouts.panel.header')
    <!-- include navbar page -->
    @include('layouts.panel.navbar')
    <!-- include sidebar page -->
    @include('layouts.panel.sidebar')
    <!-- include content page -->
    @yield('content')
    <!-- include footer page -->
        @include('layouts.panel.footer')
    </div>
</div>
<!-- laravel mix compiling js-->
<script src="{{ mix('css/app.js') }}" defer></script>
</body>
</html>
