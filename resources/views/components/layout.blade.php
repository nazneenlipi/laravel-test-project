<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Larevel new first project</title>
</head>
<body >
    <div>
        @include('layouts.header')
        {{ $slot }}
        @include('layouts.footer')
    </div>
</body>
</html>