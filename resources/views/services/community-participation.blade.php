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
                            Community Participation
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="breadcrumbs creote">
                        <ul class="breadcrumb m-auto">
                            <li><a href="#">Home</a></li>
                            <li>Services</li>
                            <li class="active">Community Participation</li>
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
                        <div class="before_title">Building Stronger Together at Health 24 Support Services </div>
                        <div class="title">Community Participation</div>
                        <p>We all want to live in a community that thrives, and your involvement is key to making that
                            happen. Community participation goes beyond just showing up – it's about actively
                            contributing your ideas, voice, and skills to shape the decisions and activities that
                            directly impact your life and the lives of others. Here's why your participation matters:
                        </p>
                    </div>
                </div>
                <div class="row no-space">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ps-0 ps-lg-0 pe-0 pe-lg-0 ps-xl-3">
                        <div class="content_box_cn style_one">
                            <div class="txt_content">
                                <h6>
                                    Empowerment
                                </h6>
                                <p>By taking part, you gain a sense of ownership over your community and its future. You
                                    have a direct say in shaping decisions that affect you, fostering a feeling of
                                    control and responsibility.</p>
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
                                    Stronger Together
                                </h6>
                                <p>Working alongside your neighbours strengthens connections, builds understanding, and
                                    fosters trust. This creates a more supportive and cohesive community where everyone
                                    feels valued and heard.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Making a Lasting Impact
                                </h6>
                                <p>When directly involved, you contribute to creating solutions that are relevant and
                                    long-lasting. Your insights can help ensure solutions address the root causes of
                                    issues and have a sustainable positive impact.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Accountability Matters
                                </h6>
                                <p>By participating, you encourage transparency and hold decision-makers accountable to
                                    the community. This helps ensure decisions are made in the best interests of
                                    everyone and reflect the needs and priorities of the community they serve.</p>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_25"></div>
                    <!--===============spacing==============-->

                    <div class="description_box">
                        <p>Your participation is vital in shaping a brighter future for your community. Get involved, share your passion, and make a difference! <b><a href="#">Contact us today to learn more and discover the perfect program for you!</a></b></p>
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