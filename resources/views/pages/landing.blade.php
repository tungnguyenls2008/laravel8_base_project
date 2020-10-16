<!doctype html>

<html lang="en">

<head>

    <title>

    </title>@include('includes.head')
<style>
    .site-section-hero, .site-section-hero .row {
        height: 100vh;
        min-height: 500px;
        z-index: 2;
        position: relative;
    }
</style>
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

                <section class="site-section-hero bg-image" style="background-image: url('images/img_1.jpg');" data-stellar-background-ratio="0.5" id="section-home">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-7 text-center">
                            <h1 class="text-white heading text-uppercase" data-aos="fade-up">Welcome</h1>
                            <p class="lead text-white mb-5" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore animi accusantium voluptatum saepe. Natus nihil, facere corporis numquam, architecto dolorum.</p>
                            <p data-aos="fade-up" data-aos-delay="100"><a href="#section-contact" class="btn btn-primary btn-md smoothscroll">Contact Me</a></p>
                        </div>
                    </div>
                </section>

                <div class="container-fluid">


                    @include('includes.photos')
                    @include('includes.testimonial')







                    <div class="row justify-content-center">
                        <div class="col-md-12 text-center py-5">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </main>

        </div> <!-- .site-wrap -->
    </div>
    <footer class="row">

        @include('includes.footer')

    </footer>

</div>

</body>

</html>
