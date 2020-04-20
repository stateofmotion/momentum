<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- JS -->
    @if(config('app.debug'))
    <script src="http://localhost:35729/livereload.js" defer></script>
    @endif
    <script src="{{ mix('js/manifest.js') }}" async></script>
    <script src="{{ mix('js/vendor.js') }}" async></script>
    <script src="{{ mix('js/app.js') }}" async></script>

    <title>Momentum</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>
    <main>
        @yield('content')
    </main>
</body>

</html>