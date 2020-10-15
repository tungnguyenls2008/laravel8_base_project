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
                <div class="container-fluid photos">
                    <div class="row justify-content-center">

                        <div class="col-md-6 pt-4">
                            <figure class="mb-5" data-aos="fade-up">
                                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                            </figure>

                            <h2 class="text-white mb-4" data-aos="fade-up">Hey There! I'm Rhea</h2>

                            <div class="row" data-aos="fade-up">
                                <div class="col-md-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur <a href="#">adipisicing</a> elit. Ipsa explicabo quasi cum, laudantium neque at veniam itaque atque <a href="#">necessitatibus</a> temporibus! Beatae sit soluta magni neque autem, suscipit dolorem, quo alias.</p>
                                    <p>Similique deserunt sit accusamus ipsum optio. Quia, sapiente saepe culpa ad nemo velit, <a href="#">veritatis</a> numquam impedit voluptate quo tempore. Perferendis suscipit dolores, ducimus esse cupiditate possimus quae quis iusto rem?</p>
                                    <p>Excepturi soluta maxime velit vitae tempore corporis, aliquid quidem modi libero! Optio minima esse hic repellendus a dolor perferendis dolore impedit quis et! Minus maxime itaque beatae totam eos reiciendis.</p>
                                    <p class="mb-5">Ad veritatis eos dicta, animi et voluptates iusto, excepturi corporis amet, laboriosam, officiis libero. Odio excepturi aliquid suscipit nobis odit. Tenetur expedita impedit error consequatur sunt voluptatum voluptate voluptatem vitae!</p>

                                    <p cass="mt-4">Thanks! <br> Rhea M.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-12 text-center py-5">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
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
