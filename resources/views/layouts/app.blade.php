<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favIcon -->
    <link rel="shortcut icon" href="{{ Vite::asset('/resources/img/logo.png') }}" type="image/x-icon">
    <title>@yield('page-title', 'Movies')</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="">
    <!--  Includo l'header del sito web con il menu tramite un partial -->
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    <!-- Includo il footer del sito web tramite un partial -->
    @include('partials.footer')

    <!-- Assets JS/CSS -->
    @vite('resources/js/app.js')
</body>

</html>
