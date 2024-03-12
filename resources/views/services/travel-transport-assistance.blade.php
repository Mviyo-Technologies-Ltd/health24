@extends('layout')

@section('content')
<div class="page_header_default style_one ">
    <div class="parallax_cover">
        <div class="simpleParallax"><img src={{asset("images/page-header-default.jpg")}} alt="bg_image"
                class="cover-parallax">
        </div>
    </div>
    <div class="page_header_content pd_top_90">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page">
                            Travel & Transport Assistance
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="breadcrumbs creote">
                        <ul class="breadcrumb m-auto">
                            <li><a href="#">Home</a></li>
                            <li>Services</li>
                            <li class="active">Travel & Transport Assistance</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!----header----->
<!----page-CONTENT----->
<div class="auto-container">
    <div class="row default_row">
        @include('services/components/aside')
        <div id="primary" class="content-area service col-lg-8 col-md-12 col-sm-12 col-xs-12">
            <!--===============spacing==============-->
            <div class="pd_top_85"></div>
            <!--===============spacing==============-->
            <article class="clearfix service type-service status-publish has-post-thumbnail hentry">
                <div class="title_all_box style_one dark_color">
                    <div class="title_sections left">
                        <div class="before_title">Ensuring Accessible and Independent Journeys</div>
                        <div class="title">Travel & Transport Assistance</div>
                        <p>Do you dream of exploring new places, attending events, or simply getting around town independently? At Health 24, we believe <b>traveling and getting around should be accessible to everyone</b>, regardless of disability or mobility limitations.
                        </p>
                        <p>That's why we offer a variety of <b>personalized travel and transport assistance options</b> designed to <b>empower you to navigate your journeys confidently and independently.</b></p>
                        <p>Benefits of Choosing Our Services:</p>
                    </div>
                </div>
                <div class="row no-space">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ps-0 ps-lg-0 pe-0 pe-lg-0 ps-xl-3">
                        <div class="content_box_cn style_one">
                            <div class="txt_content">
                                <h6>
                                    Increased Independence and Freedom: 
                                </h6>
                                <p>Travel for work, leisure, appointments, and social activities without relying solely on others. <b>Expand your horizons and explore new possibilities!</b></p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Improved Accessibility:
                                </h6>
                                <p>We connect you with various <b>accessible transportation options</b> that cater to your specific needs, ensuring <b>safe, comfortable, and stress-free journeys.</b></p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Reduced Stress and Anxiety:
                                </h6>
                                <p> Leave the logistical challenges to us. <b>Travel with peace of mind,</b> knowing you have the support you need to navigate unfamiliar environments and overcome transportation obstacles.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Greater Social Inclusion:
                                </h6>
                                <p>Participate in community activities, reconnect with loved ones, and <b>foster a sense of belonging</b> by participating in events and activities that were previously inaccessible.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Wider Range of Travel Opportunities:
                                </h6>
                                <p>Open doors to <b>exploring new destinations, experiencing different cultures, and creating lasting memories.</b> The world awaits!</p>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_25"></div>
                    <!--===============spacing==============-->
                </div>
                <div class="title_all_box style_one dark_color">
                    <div class="title_sections left">
                        <p><b>Explore Our Travel & Transport Assistance Options:</b></p>
                    </div>
                </div>
                <div class="row no-space">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ps-0 ps-lg-0 pe-0 pe-lg-0 ps-xl-3">
                        <div class="content_box_cn style_one">
                            <div class="txt_content">
                                <h6>
                                    Accessible Public Transportation Guidance:
                                </h6>
                                <p>We assist you in finding and utilizing accessible buses, trains, and trams, including those equipped with ramps, lifts, designated seating, and audio announcements.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Paratransit & Volunteer Transportation Connections: 
                                </h6>
                                <p>We can help you connect with <b>dial-a-ride or door-to-door services</b>, as well as <b>community-based volunteer transportation programs</b>, ensuring you have reliable transportation options to meet your needs.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Mobility Aid Rentals and Support:
                                </h6>
                                <p>Need a wheelchair, scooter, walking cane, or other equipment to make your travels easier? We can help you find rental options and provide assistance with using your chosen mobility aids.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Travel Companion Services:
                                </h6>
                                <p>We offer trained and experienced travel companions who can assist you with boarding, navigating terminals, and ensuring a safe and comfortable travel experience throughout your journey.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Accessible Travel Agency Referrals:
                                </h6>
                                <p>We can connect you with specialized travel agencies that cater to the needs of travellers with disabilities. These agencies can offer tailored itineraries, accessible accommodation options, and travel support throughout your trip.</p>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_25"></div>
                    <!--===============spacing==============-->

                    <div class="description_box">
                        <p><b><a href="#">Contact Health 24 today and let us help you plan your next adventure! We're here to make your travel dreams a reality.</a></b></p>
                    </div>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_25"></div>
                <!--===============spacing==============-->
            </article>
            <!--===============spacing==============-->
            <div class="pd_bottom_65"></div>
            <!--===============spacing==============-->
        </div>
    </div>
</div>
@endsection