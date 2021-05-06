<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
    <title>@yield('title_page') | La Molisana</title>
</head>
<body>
    
    @include('partial.header')

    @yield('content')

    @include('partial.footer')
</body>
</html>