<div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<header class="header-bar d-flex d-lg-block align-items-center" data-aos="fade-left">
    <div class="site-logo">
        <a href="{{route('landing')}}">@include('includes.logo')</a>
    </div>

    <div class="d-inline-block d-xl-none ml-md-0 ml-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

    <div class="main-menu">
        <ul class="js-clone-nav">
            @php
                $url = url()->current();
                $route = app('router')->getRoutes($url)->match(app('request')->create($url))->getName();
            @endphp
            <li class=@if($route == 'landing')"active"@endif><a href="{{route('landing')}}">Home</a></li>
            <li class=@if($route == 'gallery')"active"@endif><a href="{{route('gallery')}}">Gallery</a></li>
            <li class=@if($route == 'single')"active"@endif><a href="{{route('single')}}">Single</a></li>
            <li class=@if($route == 'photo')"active"@endif><a href="{{route('photo')}}">Photos</a></li>
            <li class=@if($route == 'bio')"active"@endif><a href="{{route('bio')}}">Bio</a></li>
            <li class=@if($route == 'blog')"active"@endif><a href="{{route('blog')}}">Blog</a></li>
            <li class=@if($route == 'contact')"active"@endif><a href="{{route('contact')}}">Contact</a></li>
        </ul>
        <ul class="social js-clone-nav">
            <li><a href="#"><span class="icon-facebook"></span></a></li>
            <li><a href="#"><span class="icon-twitter"></span></a></li>
            <li><a href="#"><span class="icon-instagram"></span></a></li>
        </ul>
    </div>
</header>
