<!DOCTYPE html>
<html lang="en">

    <head>
        @include('partials.head')
    </head>

    <body class="index-page">

        @include('partials.header')

        <main class="main">
            @yield('content')
        </main>

        @include('partials.footer')

    </body>

</html>