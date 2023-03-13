<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('/css/libs.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/style.min.css')}}">
        <title>Yagona milliy mehnat tizimi</title>
</head>
    <body class="font-sans antialiased">

        <div class="header">
            @include('header')
        </div>
        <div class="body">
            @yield('content')
        </div>
        <div class="footer">
            @include('footer')
        </div>
        <script src="{{asset('js/libs.min.js')}}"></script>
        <script src="{{asset('js/script.min.js')}}"></script>
    </body>
</html>
