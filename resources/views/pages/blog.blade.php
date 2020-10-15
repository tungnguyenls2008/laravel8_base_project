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

                        <div class="col-md-8 pt-4">

                            <div class="row mb-5" data-aos="fade-up">
                                <div class="col-12">
                                    <h2 class="text-white mb-4 text-center">My Blog</h2>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12" data-aos="fade-up">
                                    <div class="d-flex blog-entry align-items-start">
                                        <div class="mr-5 img-wrap"><a href="#"><img src="images/blog_1.jpg" alt="Image" class="img-fluid"></a></div>
                                        <div>
                                            <h2 class="mt-0 mb-2"><a href="#">Advanced Photography Tutorial For Pro</a></h2>
                                            <div class="meta mb-3">Posted by James on <a href="#">Feb. 24, 2020</a></div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis aliquid doloremque qui, saepe alias eum?</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12" data-aos="fade-up">
                                    <div class="d-flex blog-entry align-items-start">
                                        <div class="mr-5 img-wrap"><a href="#"><img src="images/blog_1.jpg" alt="Image" class="img-fluid"></a></div>
                                        <div>
                                            <h2 class="mt-0 mb-2"><a href="#">Advanced Photography Tutorial For Pro</a></h2>
                                            <div class="meta mb-3">Posted by James on <a href="#">Feb. 24, 2020</a></div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis aliquid doloremque qui, saepe alias eum?</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12" data-aos="fade-up">
                                    <div class="d-flex blog-entry align-items-start">
                                        <div class="mr-5 img-wrap"><a href="#"><img src="images/blog_1.jpg" alt="Image" class="img-fluid"></a></div>
                                        <div>
                                            <h2 class="mt-0 mb-2"><a href="#">Advanced Photography Tutorial For Pro</a></h2>
                                            <div class="meta mb-3">Posted by James on <a href="#">Feb. 24, 2020</a></div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis aliquid doloremque qui, saepe alias eum?</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12" data-aos="fade-up">
                                    <div class="d-flex blog-entry align-items-start">
                                        <div class="mr-5 img-wrap"><a href="#"><img src="images/blog_1.jpg" alt="Image" class="img-fluid"></a></div>
                                        <div>
                                            <h2 class="mt-0 mb-2"><a href="#">Advanced Photography Tutorial For Pro</a></h2>
                                            <div class="meta mb-3">Posted by James on <a href="#">Feb. 24, 2020</a></div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis aliquid doloremque qui, saepe alias eum?</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 text-center">
                                    <div class="custom-pagination">
                                        <span>1</span>
                                        <a href="#">2</a>
                                        <a href="#">3</a>
                                        <span>...</span>
                                        <a href="#">7</a>
                                    </div>
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
