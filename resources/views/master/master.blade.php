<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> {{ $title }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&family=Roboto:wght@400;500;900&display=swap"
        rel="stylesheet">

    {{-- Styles  --}}
    @hasSection('my-css')
        @yield('my-css')
    @endif
</head>

<body>
    @yield('content')

    {{-- Scripts --}}
    @hasSection('my-js')
        @yield('my-js')
    @endif
</body>

</html>
