<!DOCTYPE html>
<html lang="en">

<head>
    <title>UmbrellaIT &mdash; Dasturchilar academiyasi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/Logo 1.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">





    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

            <div class="container-fluid">

                @if (session('send'))
                    <div class="alert mysession bg-success text-white alert-dismissible fade show" role="alert">
                        {{ session('send') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif



                <div class="d-flex align-items-center">
                    <div class="site-logo mr-auto w-25"><a href="/">UmbrellaIT</a></div>

                    <div class="mx-auto text-center">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                                <li><a href="#home-section" class="nav-link">Bosh sahifa</a></li>
                                <li><a href="#courses-section" class="nav-link">Kurslar</a></li>
                                <li><a href="#teachers-section" class="nav-link">O'qituvchilar</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="ml-auto w-25">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul
                                class="site-menus cta main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                                <a href="#contact-section" class="nav-link"><span>Bog'lanish</span></a>
                            </ul>
                        </nav>
                        <a href="#"
                            class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span
                                class="icon-menu h3"></span></a>
                    </div>
                </div>
            </div>

        </header>

        <div class="intro-section" id="home-section">

            <div class="slide-1" style="background-image: url('images/hero_1.jpg');"
                data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-4">
                                    <h1 data-aos="fade-up" data-aos-delay="100">{{ $informations->headiTtle }}</h1>
                                    <p class="mb-4" data-aos="fade-up" data-aos-delay="200">
                                        {{ $informations->headText }}</p>
                                </div>

                                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                                    <form action="{{ route('sendContact') }}" method="post" class="form-box">
                                        @csrf
                                        <h3 class="h4 text-black mb-4">Kursga yozilish</h3>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name"
                                                placeholder="To'liq ism" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="test" class="form-control" name="phone"
                                                placeholder="+998901234567" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn-pill" value="Yuborish">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="site-section courses-title" id="courses-section">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
                        <h2 class="section-title">Kurslar</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section courses-entry-wrap" data-aos="fade-up" data-aos-delay="100">
            <div class="container">
                <div class="row">

                    <div class="owl-carousel col-12 nonloop-block-14">

                        @foreach ($courses as $course)
                            <div class="course bg-white h-100 align-self-stretch">
                                <figure class="m-0">
                                    <a href="course-single.html"><img style="height:200px"
                                            src="{{ asset('/storage/' . $course->image) }}" alt="Image"
                                            class="img-fluid"></a>
                                </figure>
                                <div class="course-inner-text py-4 px-4">
                                    <span class="course-price">{{ $course->price }}</span>
                                    <div class="meta"><span class="icon-clock-o"></span>{{ $course->time }}</div>
                                    <h3><a href="#">{{ $course->name }}</a></h3>
                                    <p>{{ $course->info }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-7 text-center">
                        <button class="customPrevBtn btn btn-primary m-1">Orqaga</button>
                        <button class="customNextBtn btn btn-primary m-1">Oldinga</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section" id="teachers-section">
            <div class="container">

                <div class="row mb-5 justify-content-center">
                    <div class="col-lg-7 mb-5 text-center" data-aos="fade-up" data-aos-delay="">
                        <h2 class="section-title">Bizning o'qituvchilar</h2>
                        <p class="mb-5">{{ $informations->teacherText }}</p>
                    </div>
                </div>

                <div class="row">
                    @foreach ($teachers as $teacher)
                        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="teacher text-center">
                                <img style="height:144px" src="{{ asset('/storage/' . $teacher->image) }}"
                                    alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
                                <div class="py-2">
                                    <h3 class="text-black">{{ $teacher->name }}</h3>
                                    <p class="position">{{ $teacher->job }}</p>
                                    <p>{{ $teacher->about }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <div class="site-section bg-image overlay" style="background-image: url('images/hero_1.jpg');">
            <div class="container">
                <div class="row owl-carousel nonloop-block-14 justify-content-center align-items-center">
                    @foreach ($endstudents as $endstudent)
                        <div class="col-12 text-center testimony">
                            <h3 class="mb-4">{{ $endstudent->name }}</h3>
                            <blockquote>
                                <p>&ldquo; {{ $endstudent->comment }} &rdquo;</p>
                            </blockquote>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="site-section pb-0">

            <div class="future-blobs">
                <div class="blob_2">
                    <img src="images/blob_2.svg" alt="Image">
                </div>
                <div class="blob_1">
                    <img src="images/blob_1.svg" alt="Image">
                </div>
            </div>
            <div class="container">
                <div class="row mb-5 justify-content-center" data-aos="fade-up" data-aos-delay="">
                    <div class="col-lg-7 text-center">
                        <h2 class="section-title">Nega aynan Biz?</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto align-self-start" data-aos="fade-up" data-aos-delay="100">
                        <div class="p-4 rounded bg-white why-choose-us-box">
                            @foreach ($advantages as $advantage)
                                <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                                    <div class="mr-3"><span class="custom-icon-inner"><span
                                                class="icon icon-graduation-cap"></span></span></div>
                                    <div>
                                        <h3 class="m-0">{{ $advantage->name }}</h3>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-7 align-self-end" data-aos="fade-left" data-aos-delay="200">
                        <img src="images/person_transparent.png" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section bg-light" id="contact-section">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-7">



                        <h2 class="section-title mb-3">Bizga yozing</h2>
                        <p class="mb-5">{{ $informations->concactText }}</p>

                        <form method="post" action="{{ route('sendMessage') }}" data-aos="fade">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-6 mb-3 mb-lg-0">
                                    <input type="text" name="name" class="form-control" placeholder="Ismingiz"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" name="age" class="form-control"
                                        placeholder="Yoshingiz">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" name="phone" class="form-control" required
                                        placeholder="Telefon raqamingiz">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" id="" cols="30" rows="10"
                                        placeholder="Izoh qoldiring"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">

                                    <input type="submit" class="btn btn-primary py-3 px-5 btn-block btn-pill"
                                        value="Yuborish">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer-section bg-white">
            <div class="container">


                <div class="row text-center">
                    <div class="col-md-12">
                        <p>
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                        </p>
                    </div>
                </div>
            </div>
        </footer>



    </div> <!-- .site-wrap -->

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>


    <script src="js/main.js"></script>

</body>

</html>
