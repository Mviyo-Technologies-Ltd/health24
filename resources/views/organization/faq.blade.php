@extends('layout')

@section('content')
    <div class="page_header_default style_one ">
        <div class="parallax_cover">
            <div class="simpleParallax"><img src="{{ asset('images/banner/faq.png') }}" alt="bg_image"
                    class="cover-parallax">
            </div>
        </div>
        <div class="page_header_content pd_top_90">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_title_inner">
                            <div class="title_page">
                                FAQs
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="breadcrumbs creote">
                            <ul class="breadcrumb m-auto">
                                <li><a href="/">Home</a></li>
                                <li class="active">FAQs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="faqs-section">
        <!--===============spacing==============-->
        <div class="pd_top_90"></div>
        <!--===============spacing==============-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title_all_box style_one text-center dark_color">
                        <div class="title_sections">
                            <div class="before_title"> Find Useful</div>
                            <h2>Question & Answer</h2>
                            <p>Check our FAQs for quick answers to frequently asked questions we receive.<br> If you have
                                other questions write.</p>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_top_15"></div>
                        <!--===============spacing==============-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="faq_section type_two">
                        <div class="block_faq">
                            <div class="accordion">
                                <dl>
                                    <dt class="faq_header active">
                                        What services does Health24 Support Services offer for individuals with disabilities?<span class="icon-play"></span>
                                    </dt>
                                    <dd class="accordion-content hide" style="display:block;">
                                        <p>Health24 Support Services is dedicated to supporting independent living by providing a highly supportive and caring environment that focuses on individuals' strengths and abilities. The organization helps participants exercise choice and control over their lives, offering personalized care tailored to specific requirements.</p>
                                    </dd>
                                    <dt class="faq_header ">
                                        Why choose Health24 Support Services over other NDIS providers?<span class="icon-play"></span>
                                    </dt>
                                    <dd class="accordion-content hide">
                                        <p>Health24 Support Services goes beyond offering services; the team brings lived experience as NDIS users, ensuring a more innovative and client-focused approach. The organization is committed to providing quality, sustainable, and exceptional services, striving to improve participants' quality of life and help them overcome disadvantages.</p>
                                    </dd>
                                    <dt class="faq_header ">
                                        How can I access the services provided by Health24 Support Services?<span class="icon-play"></span>
                                    </dt>
                                    <dd class="accordion-content hide">
                                        <p>To access Health24 Support Services, individuals can contact the organization directly through their website or by reaching out to their friendly staff. The organization offers a wide range of NDIS services 24/7, catering to various needs and preferences.</p>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <section class="faq_section type_two">
                        <div class="block_faq">
                            <div class="accordion">
                                <dl>
                                    <dt class="faq_header active">
                                        What is the mission of Health24 Support Services?<span class="icon-play"></span>
                                    </dt>
                                    <dd class="accordion-content hide" style="display:block;">
                                        <p>Health24 Support Services' mission is to enrich lives and bring happiness to people living with disabilities by providing quality, sustainable, and exceptional services. The organization is committed to helping participants improve their quality of life and overcome any type of disadvantage they may face.</p>
                                    </dd>
                                    <dt class="faq_header">What is the vision of Health24 Support Services for the community it serves?<span
                                            class="icon-play"></span>
                                    </dt>
                                    <dd class="accordion-content hide">
                                        <p>The vision of Health24 Support Services is to build a community where participants have the ability to experience a fulfilling life independently and confidently, making meaningful contributions and active participation in society.</p>
                                    </dd>
                                    <dt class="faq_header">How does Health24 Support Services support independent living?<span
                                            class="icon-play"></span>
                                    </dt>
                                    <dd class="accordion-content hide">
                                        <p>Health24 Support Services is dedicated to supporting independent living by providing a highly supportive and caring environment that focuses on individuals' strengths and abilities. The organization helps participants exercise choice and control over their lives, offering personalized care tailored to specific requirements.</p>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_bottom_60"></div>
        <!--===============spacing==============-->
    </section>
@endsection
