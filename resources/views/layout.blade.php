<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="author" content="Mviyo Technologies" />
    <meta name="description" content="Empowering independent living with compassionate 24/7 NDIS services in Victoria for a fulfilling and inclusive community." />
    <meta name="keywords" content="NDIS services, disability support, independent living, community participation, support coordination, daily tasks assistance, life skills development, respite care, mental health support, specialist disability accommodation, community nursing, Victoria, Health24 Support Services.">
    <title>Health 24 Support Services</title>
    <!-- Fav Icon -->
    @include('components/favicon')
    <!-- Fav Icon -->
    <!-- Google Fonts -->
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Spartan%3A400%2C500%2C600%2C700%2C800%2C900%7CInter%3A300%2C400%2C500%2C600%2C700%2C800%2C900&amp;subset=latin%2Clatin-ext'
        type='text/css' media='all' />
    <!-- Google Fonts -->
    <!-- Style -->
    <link rel='stylesheet' href={{asset('css/bootstrap.min.css')}} type='text/css' media='all' />
    <link rel='stylesheet' href={{asset('css/owl.css')}} type='text/css' media='all' />
    <link rel='stylesheet' href={{asset('css/swiper.min.css')}} type='text/css' media='all' />
    <link rel='stylesheet' href={{asset('css/jquery.fancybox.min.css')}} type='text/css' media='all' />
    <link rel='stylesheet' href={{asset('css/icomoon.css')}} type='text/css' media='all' />
    <link rel='stylesheet' href={{asset('css/flexslider.css')}} type='text/css' media='all' />
    <link rel='stylesheet' href={{asset('css/font-awesome.min.css')}} type='text/css' media='all' />
    <link rel='stylesheet' href={{asset('css/style.css')}} type='text/css' media='all' />
    <link rel='stylesheet' href={{asset('css/scss/elements/theme-css.css')}} type='text/css' media='all' />
    <link rel='stylesheet' id="creote-color-switcher-css" href={{asset('css/scss/elements/color-switcher/color.css')}}
        type='text/css' media='all' />
    <!-- Style-->
    <!----woocommerce---->
    <link rel='stylesheet' href={{asset('css/woocommerce-layout.css')}} type='text/css' media='all' />
    <link rel='stylesheet' href={{asset('css/woocommerce.css')}} type='text/css' media='all' />
    <!----woocommerce---->
</head>

<body class="home theme-creote page-home-default-one">
    <div id="page" class="page_wapper hfeed site">
        <div id="wrapper_full" class="content_all_warpper">
            <!----pre loader----->
            @include('components/pre-loader')
            <!----pre loader end----->
            <!----header----->
            @include('components/header')
            <!----header----->
            <!--===============PAGE CONTENT ==============-->
            <!--===============PAGE CONTENT ==============-->
            <div id="content" class="site-content ">
                @yield('content')
            </div>
            <!--===============PAGE CONTENT END==============-->
            <!--===============PAGE CONTENT END==============-->
        </div>
        <!---==============footer start =================-->
        @include('components/footer')
        <!---==============footer end =================-->
        <!---==============mobile menu =================-->
        @include('components/mobile-menu')
        <!---==============mobile menu end =================-->
        <!---==============search popup =================-->
        <!---==============search popup end =================-->
        <!---==============modal popup =================-->
        <div class="modal_popup one">
            <div class="modal-popup-inner">
                <div class="close-modal"><i class="fa fa-times"></i></div>
                <div class="modal_box">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 form_inner">
                            <div class="form_content">
                                <form class="contact-form" method="post"
                                    action="https://themepanthers.com/html/creote-html/sendemail.php">
                                    <p>
                                        <label> Your name<br />
                                            <input type="text" name="name" value="" size="40"
                                                aria-required="true" aria-invalid="false"
                                                placeholder="Enter Your Name" />
                                            <br />
                                            <i class="fa fa-user"></i><br />
                                        </label>
                                    </p>
                                    <p><label> Your email<br />
                                            <input type="email" name="email" value="" size="40"
                                                aria-required="true" aria-invalid="false"
                                                placeholder="Enter Your Email" />
                                            <br />
                                            <i class="fa fa-envelope"></i><br />
                                        </label>
                                    </p>
                                    <p>
                                        <label> Subject<br />
                                            <input type="text" name="subject" value="" size="40"
                                                aria-required="true" aria-invalid="false"
                                                placeholder="Enter Your Subject" />
                                            <br />
                                            <i class="fa fa-folder"></i><br />
                                        </label>
                                    </p>
                                    <p>
                                        <label> Your message (optional)<br />
                                            <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                                aria-invalid="false" placeholder="Enter Your Message"></textarea>
                                            <br />
                                            <i class="fa fa-comments"></i><br />
                                        </label>
                                    </p>
                                    <p><input type="submit" value="Submit" /></p>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 about_company_inner">
                            <div class="abt_content">
                                <div class="logo">
                                    <img src="images/logo-default.png" alt="img" class="company_logo_modal">
                                </div>
                                <div class="text">
                                    <p> The great explorer of the truth, the master-builder of human happiness no one
                                        rejects
                                        dislikes avoids pleasure itself because it is pleasure but because know who do
                                        not those
                                        how to pursue pleasures rationally encounter consequences that are extremely
                                        painful
                                        desires to obtain.</p>
                                    <a href="#">Read More</a>
                                </div>
                                <div class="post_contet_modal">
                                    <h2> Latest News</h2>
                                    <div class="post_enable">
                                        <div class="modal_post_grid">
                                            <a href="blog-single.html">
                                                <img width="852" height="812" src="images/blog/blog-image-9.jpg"
                                                    class="main_img wp-post-image" alt="img" />
                                            </a>
                                        </div>
                                        <div class="modal_post_grid">
                                            <a href="blog-single.html">
                                                <img width="852" height="812" src="images/blog/blog-image-8.jpg"
                                                    class="main_img wp-post-image" alt="img" />
                                            </a>
                                        </div>
                                        <div class="modal_post_grid">
                                            <a href="blog-single.html">
                                                <img width="852" height="812" src="images/blog/blog-image-7.jpg"
                                                    class="main_img wp-post-image" alt="img" />
                                            </a>
                                        </div>
                                        <div class="modal_post_grid">
                                            <a href="blog-single.html">
                                                <img width="852" height="812" src="images/blog/blog-image-6.jpg"
                                                    class="main_img wp-post-image" alt="img" />
                                            </a>
                                        </div>
                                        <div class="modal_post_grid">
                                            <a href="blog-single.html">
                                                <img width="852" height="812" src="images/blog/blog-image-5.jpg"
                                                    class="main_img wp-post-image" alt="img" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="copright">
                                    © 2023 Creote. All Rights Reserved.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---==============modal popup end=================-->

    </div>
    <!-- Back to top with progress indicator-->
    @include('components/back-to-top')
    <!---========================== javascript ==========================-->
    <script type='text/javascript' src={{asset('js/jquery-3.6.0.min.js')}}></script>
    <script type='text/javascript' src={{asset('js/bootstrap.min.js')}}></script>
    <script type='text/javascript' src={{asset('js/jquery.fancybox.js')}}></script>
    <script type='text/javascript' src={{asset('js/jQuery.style.switcher.min.js')}}></script>
    <script type='text/javascript' src={{asset('js/jquery.flexslider-min.js')}}></script>
    <script type='text/javascript' src={{asset('js/color-scheme.js')}}></script>
    <script type='text/javascript' src={{asset('js/owl.js')}}></script>
    <script type='text/javascript' src={{asset('js/swiper.min.js')}}></script>
    <script type='text/javascript' src={{asset('js/isotope.min.js')}}></script>
    <script type='text/javascript' src={{asset('js/countdown.js')}}></script>
    <script type='text/javascript' src={{asset('js/simpleParallax.min.js')}}></script>
    <script type='text/javascript' src={{asset('js/appear.js')}}></script>
    <script type='text/javascript' src={{asset('js/jquery.countTo.js')}}></script>
    <script type='text/javascript' src={{asset('js/sharer.js')}}></script>
    <script type='text/javascript' src={{asset('js/validation.js')}}></script>
    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src={{asset("js/gmaps.js")}}></script>
    <script src={{asset("js/map-helper.js")}}></script>
    <!-- main-js -->
    <script type='text/javascript' src={{asset('js/creote-extension.js')}}></script>
    <!---========================== javascript ==========================-->
</body>

</html>
