<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>@yield('title', 'UKMFT-ITC')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo-itc.png') }}">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="min-h-screen bg-white text-slate-900 antialiased">
    @yield('content')
</body>
</html>