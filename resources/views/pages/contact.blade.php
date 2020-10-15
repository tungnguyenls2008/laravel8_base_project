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

                        <div class="col-md-6 pt-4"  data-aos="fade-up">
                            <h2 class="text-white mb-4">Contact Me</h2>

                            <div class="row">
                                <div class="col-md-12">
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur <a href="#">adipisicing</a> elit. Ipsa explicabo quasi cum, laudantium neque at veniam itaque atque <a href="#">necessitatibus</a> temporibus! Beatae sit soluta magni neque autem, suscipit dolorem, quo alias.</p>


                                    <div class="row">
                                        <div class="col-md-12">



                                            <form action="#">



                                                <div class="row form-group">
                                                    <div class="col-md-6 mb-3 mb-md-0">
                                                        <label class="text-white" for="fname">First Name</label>
                                                        <input type="text" id="fname" class="form-control">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="text-white" for="lname">Last Name</label>
                                                        <input type="text" id="lname" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="row form-group">

                                                    <div class="col-md-12">
                                                        <label class="text-white" for="email">Email</label>
                                                        <input type="email" id="email" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="row form-group">

                                                    <div class="col-md-12">
                                                        <label class="text-white" for="subject">Subject</label>
                                                        <input type="subject" id="subject" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="row form-group mb-5">
                                                    <div class="col-md-12">
                                                        <label class="text-white" for="message">Message</label>
                                                        <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                                                    </div>
                                                </div>


                                            </form>
                                        </div>

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
