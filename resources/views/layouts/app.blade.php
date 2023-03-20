<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
{{--    <link rel="stylesheet" href="/build/assets/app.e24205f2.css">--}}
{{--    <link rel="stylesheet" href="/build/assets/app.d6815c44.css">--}}

</head>
<body>
    <main class="h-screen w-screen" id="app">
        @yield('main')
    </main>

{{--<script src="/build/assets/app.0aab7b77.js"></script>--}}
<script src="sweetalert2.all.min.js"></script>
</body>
</html>
