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
                            Support Co-ordination
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="breadcrumbs creote">
                        <ul class="breadcrumb m-auto">
                            <li><a href="#">Home</a></li>
                            <li>Services</li>
                            <li class="active">Support Co-ordination</li>
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
                        <div class="before_title">Navigating Your Path to Independence </div>
                        <div class="title">Support Co-ordination</div>
                        <p><b>Take Control of Your NDIS Journey with Support Coordination at Health 24 </b></p>
                        <p>Support coordination is a personalized service designed to empower you, as an NDIS participant, to take control of your plan and achieve your goals.
                        </p>
                        <p>Here's how Health 24 will work <b>directly with you to make the most of your NDIS experience:</b></p>
                    </div>
                </div>
                <div class="row no-space">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ps-0 ps-lg-0 pe-0 pe-lg-0 ps-xl-3">
                        <div class="content_box_cn style_one">
                            <div class="txt_content">
                                <h6>
                                    Understanding Your Plan:
                                </h6>
                                <p>We will translate complex information into clear terms, explain funding categories, and guide you through the NDIS system.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Finding the Right Supports: 
                                </h6>
                                <p> We will help you identify qualified providers based on your specific needs and preferences, ensuring the best fit for your goals.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Managing Your Budget:
                                </h6>
                                <p>We will assist you in creating and negotiating service agreements with chosen providers, and track your funding usage to ensure it aligns with your plan.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Monitoring and Addressing Concerns:
                                </h6>
                                <p>We will work with you to monitor service delivery, ensuring it meets your expectations, and address any issues that may arise.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Building Your Confidence:
                                </h6>
                                <p> We will empower you by equipping you with the skills and knowledge needed to manage your NDIS plan independently and navigate the system with confidence.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Advocating for Your Rights:
                                </h6>
                                <p> We will provide support and guidance in communicating your needs and advocating for your rights within the NDIS system, ensuring your voice is heard.</p>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_25"></div>
                    <!--===============spacing==============-->

                    <div class="description_box">
                        <p><b>Don't go through this journey alone.  <a href="#">Contact us today to learn how Health 24 will help you make the most of your NDIS plan!</a></b></p>
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