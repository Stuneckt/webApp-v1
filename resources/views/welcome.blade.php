<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />

    <!-- Page Title -->
    <title>Coming Soon</title>

    <!-- Meta Tags -->


    <!-- Viewport Meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- Template Favicon & Icons End -->

    <!-- Facebook Metadata Start -->
    <meta property="og:image:height" content="1200" />
    <meta property="og:image:width" content="1200" />


    <!-- Facebook Metadata End -->

    <!-- Template Styles Start -->
    <link rel="stylesheet" type="text/css" href="css/loaders/loader.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('v1/css/plugins.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('v1/css/main.css') }}" />
    <!-- Template Styles End -->


    {{-- Toasttify --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <!-- Custom Browser Color Start -->
    <meta name="theme-color" content="#0e0d26" />
    <meta name="msapplication-navbutton-color" content="#0e0d26" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#0e0d26" />

    <script>
        $(window).load(function() {
            $('#myModal').modal('show');
        });
    </script>

    <!-- Custom Browser Color End -->
</head><!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZRG17DB575"></script>
<script>
    window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZRG17DB575');
</script>

<body>
    <!-- Old Browsers Support Start -->
    <!--[if lt IE 9]>
      <script src="js/libs/es5-shim.min.js"></script>
      <script src="js/libs/html5shiv.min.js"></script>
      <script src="js/libs/html5shiv-printshiv.min.js"></script>
      <script src="js/libs/respond.min.js"></script>
    <![endif]-->
    <!-- Old Browsers Support End -->

    <!-- Loader Start -->
    <!-- <div class="loader">
      <div class="loader__container">
        <div class="loader__circle">
          <img src="img/logo-loader.svg" alt="Marvio Template Loader Logo" />
        </div>
      </div>
    </div> -->
    <!-- Loader End -->

    <!-- Menu Start -->
    <nav id="menu" class="menu">
        <div class="menu__content">
            <div class="container-fluid p-0 fullheight">
                <div class="row g-0 flex-xl-row-reverse fullheight">
                    <!--Menu Data Block Start -->
                    <div class="col-12 col-xl-8 menu__data">
                        <!-- Menu Controls Line Start -->
                        <div class="menudata__controls">
                            <div class="controls__content">
                                <div class="container-fluid p-0">
                                    <div class="row g-0">
                                        <div class="col-8">
                                            <div
                                                class="controls__leftline d-flex justify-content-start align-items-center">
                                                <!-- Menu Socials Start -->
                                                <div class="socials-menu">
                                                    <ul>
                                                        <li>
                                                            <a href="https://www.facebook.com/" target="_blank">
                                                                <i class="fa-brands fa-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.instagram.com/" target="_blank">
                                                                <i class="fa-brands fa-instagram"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://twitter.com/" target="_blank">
                                                                <i class="fa-brands fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Menu Socials End -->
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div
                                                class="controls__rightline d-flex justify-content-end align-items-center">
                                                <!-- Menu Close Button Start -->
                                                <a id="menu-close" class="section-close hover-white hover-white-s"
                                                    href="#0">
                                                    <em></em>
                                                    <span></span>
                                                </a>
                                                <!-- Menu Close Button End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Menu Controls Line End -->

                        <!-- Menu Links Start -->

                        <!-- Menu Links End -->

                        <!-- Menu Copyright Start -->
                        <div class="menudata__copyright">
                            <div class="container-fluid p-0">
                                <div class="row g-0">
                                    <div class="col-12">
                                        <p class="copyright">
                                            By
                                            <a href="https://themeforest.net/user/mix_design/portfolio"
                                                target="_blank">Mix Design</a>, 2022
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Menu Copyright End -->
                    </div>
                    <!--Menu Data Block End -->

                    <!--Menu Media Block Start -->
                    <div class="col-12 col-xl-4 menu__media">
                        <div class="media__content">
                            <!-- Menu Image Background Start -->
                            <div class="menu__image menu-image-1"></div>
                            <!-- Menu Image Background End -->
                        </div>
                    </div>
                    <!--Menu Media Block End -->
                </div>
            </div>
        </div>
    </nav>
    <!-- Menu End -->

    <!-- Header Start -->
    <header id="header" class="header">
        <!-- Logo Start -->
        <div class="header__logo">
            <img width="100px" src="{{ url('/v1/logo.png') }}" style="width: 200px" />
        </div>
        <!-- Logo End -->

        <!-- Header Content Start -->
        <div class="header__content fullheight-mobile d-flex align-items-center">
            <div class="container-fluid px-0">
                <div class="row gx-0 justify-content-end justify-content-xl-start">
                    <div class="col-auto col-xl-8">
                        <!-- Header Controls Block Start -->
                        <div class="header__buttons d-flex justify-content-end align-items-center">
                            <!-- Socials Desktop Start -->

                            <!-- Socials Desktop End -->

                            <!-- Notify Trigger Start -->
                            <!-- <a
                  id="notify-trigger"
                  class="btn-round-mobile btn-notify btn-light-outline notify-trigger hover-white hover-white-s"
                  href="#0"
                >
                  <em></em>
                  <i class="fa-solid fa-bell"></i>
                  <span class="btn-caption">Notify Me</span>
                </a> -->
                            <!-- Notify Trigger End -->
                        </div>
                        <!-- Header Controls Block End -->
                    </div>
                    <div class="col-auto col-xl-4">
                        <!-- Menu Trigger Start -->
                        <div class="header__menu d-flex justify-content-end">
                            <!-- <a id="menu-trigger" class="menu-trigger" href="#0">
                  <span class="menu-objects"></span>

                </a> -->
                            <div class="socials-desktop">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://twitter.com/" target="_blank">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Menu Trigger End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Content End -->
    </header>
    <!-- Header End -->

    <!-- Main Section Start -->
    <!-- <div id="particles-js"> -->
    <section id="main" class="main active">
        <div class="main__content">
            <div class="container-fluid p-0 fullheight">
                <div class="row g-0 fullheight">
                    <!-- Main Section Intro Start -->
                    <span class="h1 headline brand"
                        style="text-align: left;font: normal 600  &quot;Poppins&quot;, sans-serif;color: #fffadc;">Network,
                        Explore & Grow</span>
                    <div class="col-12 col-xl-8 main__intro">
                        <!-- Intro Content Start -->
                        <div class="intro__content">
                            <!-- Headline Start -->
                            <div id="headline" class="headline">
                                {{-- <span style="color: #fffadc;" class="headline__subtitle">Launching
                                    soon......</span> --}}
                                <h1>Get Notified When<br>
                                    We Launch</h1>
                                <!-- Menu Notify Trigger Start -->
                                <form action="{{ route('comingSoon.notify') }}" method="POST" style="display:flex"
                                    class=" form noti form-light">
                                    @csrf
                                    <input name="email" style="width: 400px;" class="block-rounded-s" type="email"
                                        placeholder="Your Email" required />
                                    {{-- <input style="margin-left: 17px"
                                        class="btn-caption btn btn-l btn-light hover-gradient hover-gradient-l"
                                        type="submit" value="Submit"> --}}
                                    <button style="margin-left: 17px"
                                        class="btn btn-l btn-light hover-gradient hover-gradient-l" type="submit">
                                        <em></em>

                                        <span s;">Submit</span>
                                    </button>
                                </form>
                                <!-- Menu Notify Trigger End -->
                            </div>

                            <!-- Headline End -->
                        </div>
                        <!-- Intro Content End -->

                        <!-- Bottom Button Start -->

                        <!-- Bottom Button End -->
                    </div>
                    <!-- Main Section Intro End -->

                    <!-- Main Section Media Start -->
                    <div class="col-12 col-xl-4 main__media">
                        <!-- width: 392px; -->
                        <!-- Main Section Image Background Start -->
                        <div class="media__image media-image-2">
                            <!-- <img width="392px" src="shuttle.png" alt="" srcset=""> -->
                            <img width="600px" src="{{ url('v1/rocket.gif') }}" alt="" srcset="" />
                        </div>
                        <!-- Main Section Image Background End -->

                        <!-- Background Effect Start -->
                        <!-- particles background -->


                    </div>
                    <!-- Background Effect End -->
                </div>
                <!-- Main Section Media End -->

                <!-- Sosials Mobile Start -->
                <div class="col-12 socials-mobile">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.com/" target="_blank">
                                <i class="fa-brands fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.behance.net/" target="_blank">
                                <i class="fa-brands fa-behance"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://dribbble.com/" target="_blank">
                                <i class="fa-brands fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Sosials Mobile End -->
            </div>
        </div>
        </div>
    </section>
    <!-- Main Section End -->

    <!-- About Section Start -->
    @if (session()->get('status') == 1)
    @else
    @if (session()->get('proff')==1)

    @else
    <div id="notify" class="popup notify animate-in">
        <div class="popup__container">
            <!-- Popup Controls Start -->
            <div class="popup__controls d-flex justify-content-end">
                <a href="#0" id="notify-close" class="popup-close hover-gradient hover-gradient-s is-scaled-up">
                    <em style="top: 28.3px; left: 5px;"></em>
                    <span></span>
                </a>
            </div>
            <!-- Popup Controls End -->

            <!-- Popup Content Start -->
            <div class="popup__content block-rounded-l">
                <!-- Notify Popup Title Start -->
                <div class="popup-title">
                    <p class="popup-title__title">Welcome to Stunekt</p>
                    <p class="popup-title__text">
                        We would like to know you better to <br>provide you with the best experience!
                    </p>
                </div>
                <!-- Notify Popup Title End -->

                <!-- Notify Form Container Start -->
                <div class="form-container">


                    <!-- Notify Contact Form Start-->
                    <form action="{{ route('analytic.Data') }}" method="POST"
                        style="display: flex;flex-direction:column" class="form form-light">
                        @csrf
                        <select name="proffession" style="margin-top:4px; margin-bottom: 4px;" class="block-rounded-s"
                            id="exampleFormControlSelect1">
                            <option style="color: black;">Choose Proffession</option>
                            <option class="block-rounded-s">Parent</option>
                            <option class="block-rounded-s">Student</option>
                            <option class="block-rounded-s">Other</option>
                            <!-- <option class="block-rounded-s">5</option> -->
                        </select>
                        <input class="block-rounded-s" type="text" placeholder="Enter DOB in the format DD/MM/YYYY"
                            required="" name="dob">

                        <!-- Notify Popup End -->
                        <input style="margin-top:10px" class="btn btn-l btn-dark hover-gradient hover-gradient-l"
                            type="submit" value="Submit">
                    </form>
                    <!-- Notify Contact Form End-->
                </div>
                <!-- Notify Form Container End -->
            </div>
            <!-- Popup Content End -->
        </div>
    </div>
    @endif
    @endif

    <!-- Contact Section End -->

    <!-- Notify Popup Start -->
    <form class="form notify-form form-light">
        <input class="block-rounded-s" type="email" placeholder="Your Email" required />
        <button class="btn btn-l btn-light hover-gradient hover-gradient-l" type="submit">
            <em></em>
            <span class="btn-caption">Submit</span>
        </button>
    </form>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script>
        if ({{ session()->get('status') == 1 }}) {
            Toastify({
                text: "Successfully subscribed",
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                // style: {
                //     background: "linear-gradient(to right, #00b09b, #96c93d)",
                // },
                onClick: function() {} // Callback after click
            }).showToast();
        }
        if ({{ session()->get('prof2') == 1 }}) {
            Toastify({
                text: "Thanks for  giving the information",
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                // style: {
                //     background: "linear-gradient(to right, #00b09b, #96c93d)",
                // },
                onClick: function() {} // Callback after click
            }).showToast();
        }
    </script>
    <!-- Root element of PhotoSwipe. Must have class pswp. -->

    <!-- Load Scripts Start -->
    <script src="{{ url('/v1/js/libs.min.js') }}"></script>
    <script src="{{ url('v1/js/gallery-init.js') }}"></script>
    <script src="{{ url('/v1/js/custom.js') }}"></script>
    <!-- Load Scripts End -->
</body>

</html>
