<!doctype html>

<html lang="en">

<head>

    <title>

    </title>@include('includes.head')
    <link rel="stylesheet" href="{{asset('css/parallax-hover-cards.scss')}}">

{{--    <style>--}}
{{--    .site-section-hero, .site-section-hero .row {--}}
{{--        height: 100vh;--}}
{{--        min-height: 500px;--}}
{{--        z-index: 2;--}}
{{--        position: relative;--}}
{{--    }--}}
{{--</style>--}}
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
                <h1 class="title">Hover over the cards</h1>

                <div id="app" class="container">
                    <card data-image="https://images.unsplash.com/photo-1479660656269-197ebb83b540?dpr=2&auto=compress,format&fit=crop&w=1199&h=798&q=80&cs=tinysrgb&crop=">
                        <h1 slot="header">Canyons</h1>
                        <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </card>
                    <card data-image="https://images.unsplash.com/photo-1479659929431-4342107adfc1?dpr=2&auto=compress,format&fit=crop&w=1199&h=799&q=80&cs=tinysrgb&crop=">
                        <h1 slot="header">Beaches</h1>
                        <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </card>
                    <card data-image="https://images.unsplash.com/photo-1479644025832-60dabb8be2a1?dpr=2&auto=compress,format&fit=crop&w=1199&h=799&q=80&cs=tinysrgb&crop=">
                        <h1 slot="header">Trees</h1>
                        <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </card>
                    <card data-image="https://images.unsplash.com/photo-1479621051492-5a6f9bd9e51a?dpr=2&auto=compress,format&fit=crop&w=1199&h=811&q=80&cs=tinysrgb&crop=">
                        <h1 slot="header">Lakes</h1>
                        <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </card>
                </div>
            </main>

        </div> <!-- .site-wrap -->
    </div>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

    <footer class="row">

        @include('includes.footer')

    </footer>

</div>
<script src="{{asset('js/parallax-hover-cards.js')}}"></script>
</body>

</html>
