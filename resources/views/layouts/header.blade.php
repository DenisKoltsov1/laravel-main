<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">    <title>Document</title>

</head>
<body class="bg-light">
<header>
    <nav class="nav nav-pills d-flex justify-content-around mt-2">
        <a class=" btn btn-success" aria-current="page" href="{{route('contracts')}}">Смотреть все договоры</a>
        <a class=" btn btn-success" aria-current="page" href="{{route('home')}}">К созданию договора</a>
    </nav>
</header>
@yield('content')
</body>
</html>
