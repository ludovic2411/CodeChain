<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BeCode CodeChain Alpha">
    <meta name="author" content="Daniel Muyshond, Ludovic Ceccotti, Kévin Charlier, Philippe Hennaux, Jordan Flament">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">

    @yield('custom-css')

    <title> @yield('title') </title>

</head>

<body>

    {{-- <header class="header-box">

        @yield('header-content')

    </header> --}}

    <section class="main-box">

        @yield('main-content')

    </section>

    {{-- <footer class="footer-box">

        @yield('footer')

    </footer> --}}

</body>

</html>