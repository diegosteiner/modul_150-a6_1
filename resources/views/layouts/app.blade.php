<!doctype html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Homework</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-main navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <img src="/logo.png" height="30" alt="Logo">
        </a>
        <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="/homework">Homework</a>
            <a class="nav-item nav-link" href="/subjects">Subjects</a>
        </div>
    </nav>
    @yield('content')
</body>

</html>
