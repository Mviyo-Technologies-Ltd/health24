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
                            Group & Centre Activities
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="breadcrumbs creote">
                        <ul class="breadcrumb m-auto">
                            <li><a href="#">Home</a></li>
                            <li>Services</li>
                            <li class="active">Group & Centre Activities</li>
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
                        <div class="before_title">Connecting, Learning, and Thriving Together</div>
                        <div class="title">Group & Centre Activities</div>
                        <p><b>Discover Meaningful Connections and Enriching Experiences at Health 24</b></p>
                        <p>Looking for engaging activities to <b><a href="#">connect with others, explore new interests,
                                    and enhance your well-being?</a></b> Health 24 offers a diverse range of group and
                            centre-based programs designed for individuals of all ages and backgrounds.
                        </p>
                        <p><b>What You Gain Through Participation:</b></p>
                    </div>
                </div>
                <div class="row no-space">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ps-0 ps-lg-0 pe-0 pe-lg-0 ps-xl-3">
                        <div class="content_box_cn style_one">
                            <div class="txt_content">
                                <h6>
                                    Build Lasting Connections: 
                                </h6>
                                <p>Combat social isolation, make new friends, and strengthen your communication skills
                                    through engaging interactions with others.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Better Decisions
                                </h6>
                                <p>Including diverse perspectives and experiences leads to more well-rounded solutions.
                                    Your unique voice and ideas can help create effective plans that address the needs
                                    of everyone in the community.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Unlock Your Potential:
                                </h6>
                                <p>Explore your creativity, learn new skills, and improve existing ones through
                                    workshops, classes, and guided activities tailored to your interests.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Nurture Your Well-being: 
                                </h6>
                                <p>Participate in physical activities, engage in stimulating mental exercises, and
                                    promote your overall health and happiness through a variety of programs.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Boost Confidence and Independence: 
                                </h6>
                                <p>Gain valuable life skills, build self-esteem, and foster a sense of accomplishment
                                    through meaningful participation in our programs.</p>
                            </div>
                        </div>
                    </div>

                    <div class="content_box_cn  style_one">
                        <div class="txt_content">
                            <h6>
                                Access Supportive Resources: 
                            </h6>
                            <p>Connect with professionals, receive guidance, and benefit from a supportive network
                                within our inclusive centre environment.</p>
                        </div>
                    </div>
                </div>
                <div class="title_all_box style_one dark_color">
                    <div class="title_sections left">
                        <p><b>Explore a Variety of Activities</b></p>
                        <p>We offer a diverse range of programs to cater to your unique interests and needs, including:</p>
                    </div>
                </div>
                <div class="row no-space">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ps-0 ps-lg-0 pe-0 pe-lg-0 ps-xl-3">
                        <div class="content_box_cn style_one">
                            <div class="txt_content">
                                <h6>
                                    Creative Expression:
                                </h6>
                                <p>Explore your artistic flair through painting, pottery, music, dance, drama, and creative writing workshops.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Stay Active and Healthy:
                                </h6>
                                <p>Engage in group exercise classes, participate in team sports, enjoy outdoor activities, or choose from personal fitness programs.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Gain Valuable Life Skills: 
                                </h6>
                                <p>Develop essential skills through cooking, budgeting, personal care, and independent living skills workshops.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Expand Your Knowledge: 
                                </h6>
                                <p> Attend lectures, join workshops, and participate in discussions on a variety of captivating topics.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Connect and Enjoy:
                                </h6>
                                <p>Make new friends, share experiences, and have fun at movie nights, game nights, cultural events, and community excursions.</p>
                            </div>
                        </div>
                    </div>

                    <div class="content_box_cn  style_one">
                        <div class="txt_content">
                            <h6>
                                Find Support: 
                            </h6>
                            <p>Connect with individuals facing similar challenges and share experiences in a safe and supportive space offered by our support groups.</p>
                        </div>
                    </div>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_25"></div>
                <!--===============spacing==============-->

                <div class="description_box">
                    <p>Health 24 welcomes you to experience the positive impact of group and centre activities.  <b><a href="#">Contact us today to learn more and discover the perfect program for you!</a></b></p>
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