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
                            Community Nursing
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="breadcrumbs creote">
                        <ul class="breadcrumb m-auto">
                            <li><a href="#">Home</a></li>
                            <li>Services</li>
                            <li class="active">Community Nursing</li>
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
                        <div class="before_title">Bringing Healthcare Home</div>
                        <div class="title">Community Nursing</div>
                        <p>Community nursing offers a wide range of essential healthcare services directly to individuals in their homes, community centres, or other non-hospital settings. Our dedicated community nurses are passionate about promoting health, well-being, and independence for individuals across all ages and with various healthcare needs.</p>
                        <p><b>Who can benefit from community nursing?</b></p>
                        <p>Our services are ideal for a diverse range of individuals, including:</p>
                    </div>
                </div>
                <div class="row no-space">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ps-0 ps-lg-0 pe-0 pe-lg-0 ps-xl-3">
                        <div class="content_box_cn style_one">
                            <div class="txt_content">
                                <h6>
                                    Individuals with chronic health conditions:
                                </h6>
                                <p> We can help manage conditions like diabetes, heart disease, respiratory problems, and more.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Older adults:
                                </h6>
                                <p>Receive assistance with daily living activities, medication management, and overall health monitoring.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Individuals recovering from surgery or illness:
                                </h6>
                                <p> We provide support with wound care, rehabilitation, and pain management.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    People with disabilities:
                                </h6>
                                <p> Our nurses can assist with personal care, mobility, and navigating daily challenges.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Homebound individuals:
                                </h6>
                                <p>  Unable to access traditional healthcare facilities due to physical limitations or other factors, can receive care in the comfort of their own homes.</p>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_25"></div>
                    <!--===============spacing==============-->
                </div>
                <div class="title_all_box style_one dark_color">
                    <div class="title_sections left">
                        <p><b>What services do community nurses offer?</b></p>
                        <p>Our community nurses personalize their approach to meet your individual needs. Here are some key areas we can assist you with:</p>
                    </div>
                </div>
                <div class="row no-space">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ps-0 ps-lg-0 pe-0 pe-lg-0 ps-xl-3">
                        <div class="content_box_cn style_one">
                            <div class="txt_content">
                                <h6>
                                    Assessment and monitoring:
                                </h6>
                                <p> We conduct thorough health assessments, identify potential risks, and monitor chronic conditions.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Wound care and management: 
                                </h6>
                                <p> Our nurses provide professional wound care, including dressing changes, infection prevention, and promoting healing.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Medication management::
                                </h6>
                                <p>We educate you on your medications, administer injections if needed, and ensure adherence to your treatment plan.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Pain management:
                                </h6>
                                <p>We work with you to implement effective strategies to alleviate pain and improve your comfort.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Patient education and counselling:
                                </h6>
                                <p>Our nurses provide clear information and support on various health topics, self-care strategies, and disease management.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Social and emotional support:
                                </h6>
                                <p>We offer companionship, address emotional concerns, and connect you with valuable community resources.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Advocacy and collaboration:
                                </h6>
                                <p>We work closely with other healthcare professionals, families, and caregivers to ensure coordinated care and support.</p>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_25"></div>
                    <!--===============spacing==============-->
                </div>
                <div class="title_all_box style_one dark_color">
                    <div class="title_sections left">
                        <p><b>Benefits of choosing community nursing with Health 24</b></p>
                    </div>
                </div>
                <div class="row no-space">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ps-0 ps-lg-0 pe-0 pe-lg-0 ps-xl-3">
                        <div class="content_box_cn style_one">
                            <div class="txt_content">
                                <h6>
                                    Increased accessibility and convenience:
                                </h6>
                                <p> Receive high-quality healthcare services in the comfort and familiarity of your own home, eliminating the need for travel and long wait times.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Improved health outcomes: 
                                </h6>
                                <p>Through early intervention, proactive monitoring, and personalized care plans, we can help you manage chronic conditions more effectively and prevent complications.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Enhanced independence and quality of life:
                                </h6>
                                <p> Our services empower you to remain independent in your home for longer and participate more actively in your daily life.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Reduced hospital readmission rates:
                                </h6>
                                <p> Ongoing support and monitoring can help you avoid unnecessary hospital admissions.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Reduced healthcare costs:
                                </h6>
                                <p> Community-based care is often more cost-effective compared to hospital stays.</p>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_25"></div>
                    <!--===============spacing==============-->

                    <div class="description_box">
                        <p>Health 24 can help you navigate the process of finding and securing suitable SDA housing. We offer a variety of resources and support to ensure you find a dwelling that meets your specific needs and preferences.</p>
                        <p><b><a href="#">Contact us today to learn more about how SDA can empower you to live independently and enjoy a better quality of life!</a></b></p>
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