@extends('layout')

@section('content')
    <div class="page_header_default style_one ">
        <div class="parallax_cover">
            <!-- removeed the 1 i first put /about_top.jpg -->
            <img src="{{ asset('images/banner/choose_us_2.jpg') }}" alt="bg_image" class="cover-parallax">
        </div>
        <div class="page_header_content pd_top_90">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_title_inner">
                            <div class="title_page">
                                About Us
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="breadcrumbs creote">
                            <ul class="breadcrumb m-auto">
                                <li><a href="/">Home</a> </li>
                                <li class="active">About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="about-section">
        <!--===============spacing==============-->
        <div class="pd_top_90"></div>
        <!--===============spacing==============-->
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12 ">
                    <div class="about_content position-relative z_99">
                        <div class="title_all_box style_one text-left  dark_color">
                            <div class="title_sections">
                                <div class="before_title">We are</div>
                                <h2>Health 24 Support Services</h2>
                            </div>
                        </div>
                        <div class="description_box">
                            <p>Health24 Support Services, a registered National Disability Insurance Scheme (NDIS) provider,
                                offers a variety of services to aid individuals with disabilities across Victoria State.
                                Established by the Australian government, NDIS provides equal opportunities for people with
                                disabilities. Our commitment to fostering independent living involves facilitating choice
                                and control, creating a supportive environment that emphasizes individuals' strengths, not
                                limitations. Whether you require our services for a few hours or overnight, our amiable
                                staff is ready to collaborate with you, tailoring care to your specific needs, promoting
                                overall well-being.
                            </p>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_25"></div>
                        <!--===============spacing==============-->
                        <div class="row gutter_15px">
                            <div class="col-lg-6 col-md-12">
                                <div class="icon_box_all  style_two">
                                    <div class="icon_content  icon_imgs ">
                                        <div class="icon">
                                            <img src="{{ asset('images/icon-img-n-1.png') }}" class="img-fluid svg_image"
                                                alt="icon png">
                                        </div>
                                        <div class="txt_content">
                                            <h3><a href="/contact" target="_blank" rel="nofollow">Tailored Advice &amp;
                                                    Support</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <!--===============spacing==============-->
                                    <div class="pd_bottom_25"></div>
                                    <!--===============spacing==============-->
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="icon_box_all  style_two">
                                    <div class="icon_content  icon_imgs ">
                                        <div class="icon">
                                            <img src="{{ asset('images/icon-img-n-2.png') }}" class="img-fluid svg_image"
                                                alt="icon png">
                                        </div>
                                        <div class="txt_content">
                                            <h3><a href="/contact" target="_blank" rel="nofollow">Flexible Company
                                                    Policies</a></h3>
                                        </div>
                                    </div>
                                    <!--===============spacing==============-->
                                    <div class="pd_bottom_25"></div>
                                    <!--===============spacing==============-->
                                </div>
                            </div>
                        </div>

                        <div class="theme_btn_all color_one pd_bottom_25">
                            <a href="/contact" target="_blank" rel="nofollow" class="theme-btn five">Contact us<i
                                    class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="image_boxes style_two">
                        <img src="{{ asset('images/shape-1.png') }}" class="background_image" alt="image">
                        <div class="image one">
                            <img src="{{ asset('images/about/about-6.png') }}" class="img-fluid" alt="image">
                        </div>
                        <div class="image two">
                            <img src="{{ asset('images/about/about-7.png') }}" class="img-fluid" alt="image">
                        </div>
                        <div class="authour_quotes">
                            <i class="icon-quote"></i>
                            <h6>Empowering independent living with compassionate 24/7 NDIS services.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_bottom_70"></div>
        <!--===============spacing==============-->
    </section>

    <section class="service-icon-section bg_light_1">
        <!--===============spacing==============-->
        <div class="pd_top_90"></div>
        <!--===============spacing==============-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title_all_box style_one text-center dark_color">
                        <div class="title_sections">
                            <div class="before_title">Our Business</div>
                            <h2 class="title">We Stand Out From The Rest</h2>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_20"></div>
                        <!--===============spacing==============-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="simple_image_boxes parallax_cover height_264px">
                        <img src="{{ asset('images/about/standout.jpg') }}" class="simp_img cover-parallax" alt="image">
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_20"></div>
                    <!--===============spacing==============-->
                    <div class="icon_box_all style_three">
                        <div class="icon_content ">
                            <div class="icon">
                                <span class=" icon-bow-and-arrow"></span>
                            </div>
                            <div class="txt_content">
                                <h3><a href="#" target="_blank" rel="nofollow">Our Mission</a></h3>
                                <p>Our mission is to enrich the lives and bring happiness to people living with disabilities
                                    by providing quality, sustainable, and exceptional services. At Health24 Support
                                    Services, we are committed to helping participants improve their quality of life and
                                    overcome any type of disadvantage.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12 mt-4 mt-lg-0 mt-xl-0">
                    <div class="icon_box_all style_three">
                        <div class="icon_content ">
                            <div class="icon">
                                <span class=" icon-growth"></span>
                            </div>
                            <div class="txt_content">
                                <h3><a href="#" target="_blank" rel="nofollow">Our Values</a></h3>
                                <p>Equal blame belongs to those who fail in their duty through weakness of will which
                                    the same as saying.</p>
                                <ul>
                                    <li>Integrity</li>
                                    <li>Commitment to excellence</li>
                                    <li>Consumer focus</li>
                                    <li>Accountability</li>
                                    <li>Inclusiveness</li>
                                </ul>
                                <div class="btn_left">
                                    <a href="#" target="_blank" rel="nofollow" class="theme-btn one">Our
                                        Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12 mt-4 mt-lg-4 mt-xl-0">
                    <div class="icon_box_all style_three">
                        <div class="icon_content ">
                            <div class="icon">
                                <span class=" icon-binoculars"></span>
                            </div>
                            <div class="txt_content">
                                <h3><a href="#" target="_blank" rel="nofollow">Our Vision</a></h3>
                                <p>Our vision is to build a community where our participants have the ability to experience
                                    a fulfilling life, enabling them to independently and confidently make contributions and
                                    meaningful participation in society.</p>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_20"></div>
                    <!--===============spacing==============-->
                    <div class="simple_image_boxes  height_264px">
                        <img src={{asset('images/about/vision_about.jpg')}} class="simp_img img-fluid" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_top_90"></div>
        <!--===============spacing==============-->
    </section>

    <section class="tab-section bg_op_1">
        <!--===============spacing==============-->
        <div class="pd_top_100"></div>
        <!--===============spacing==============-->
        <div class="container">
            <div class="row">
                <div class="tabs_all_box  tabs_all_box_start type_one">
                    <div class="tab_over_all_box">
                        <div class="s_tab_wrapper">
                            <div class="s_tabs_content">
                                <div class="s_tab fade active-tab show" id="tabtabone">
                                    <div class="tab_content one" style="background-image:url({{asset('images/banner/woman_baby_about.jpg')}})">
                                        <div class="content_image">
                                            <h6>Why Choose Us</h6>

                                            <h2>Affordable &amp; Flexible</h2>

                                            <p>Health24 Support Services provides more than just a service; we bring our lived experience as NDIS users, which helps us deliver a more innovative and client-focused service. We offer a wide range of NDIS services 24/7.</p>

                                            <a href="#" target="_blank" rel="nofollow" class="rd_more">Read More
                                                <i class="icon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_bottom_90"></div>
        <!--===============spacing==============-->
    </section>
@endsection
