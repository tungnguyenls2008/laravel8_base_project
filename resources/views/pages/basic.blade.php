<!doctype html>

<html lang="en">

<head>

    <title>

    </title>@include('includes.head')

</head>

<body>

<div class="container">

    <header class="row">

        @include('includes.header')

    </header>

    <div id="main" class="row">

        @yield('content')
        <div class="site-wrap">

        </div> <!-- .site-wrap -->
    </div>
    <footer class="row">

        @include('includes.footer')

    </footer>

</div>

</body>

</html>
