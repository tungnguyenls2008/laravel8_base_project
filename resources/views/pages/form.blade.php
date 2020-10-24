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
            <main class="main-content">

            <form method="post" action="{{route('form-post')}}">
    @csrf
    <input type="text" id="form_content" name="form_content">
    <button class="btn btn-primary btn-lg" type="submit" name="submit" id="submit">Send it</button>
            </form></main>
        </div> <!-- .site-wrap -->
    </div>
    <footer class="row">

        @include('includes.footer')

    </footer>

</div>

</body>

</html>
