<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    @php

        $Links = ['Home', 'About', 'Service', 'Contact', 'Join'];

    @endphp

    {{-- PASS DATA WITH USING INCLUDE  --}}
    @include('learn-blade.header', ['links' => $Links])

    @yield('main')

    @include('learn-blade.footer')
</body>

@stack('costomJs')

</html>
