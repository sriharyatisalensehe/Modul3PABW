<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <style>
        body {
            font-family: Arial;
            margin: 0;
        }

        header {
            padding: 20px;
        }

        nav {
            padding: 10px;
        }

        main {
            padding: 20px;
        }

        footer {
            padding: 20px;
            margin-top: 30px;
        }
    </style>
</head>

<body>

<header>
    <h1>LaporBanjir</h1>
</header>

<nav>
    <a href="{{ route('laporan.form') }}">Form Laporan</a> |
    <a href="{{ route('laporan.index') }}">Daftar Laporan</a>
</nav>

<main>
    @yield('content')
</main>

<footer>
    <p>LaporBanjir - BPBD Kabupaten Bandung</p>
</footer>

</body>
</html>