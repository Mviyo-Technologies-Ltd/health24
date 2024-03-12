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
                            Daily & Household Task Assistance
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="breadcrumbs creote">
                        <ul class="breadcrumb m-auto">
                            <li><a href="#">Home</a></li>
                            <li>Services</li>
                            <li class="active">Daily & Household Task Assistance</li>
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
                        <div class="before_title">Reclaiming Your Time and Energy </div>
                        <div class="title">Daily & Household Task Assistance</div>
                        <p>Do you find yourself constantly juggling a busy schedule, leaving little time for yourself or your loved ones? Perhaps you have physical limitations or other challenges that make managing daily tasks and household chores difficult.
                        </p>
                        <p><b>Health 24 is here to help!</b> We offer a variety of personalized daily and household task assistance services to <b><a href="#">lighten your load, free up your time, and ensure a clean and comfortable living environment.</a></b></p>
                        <p>Benefits of Choosing Our Services:</p>
                    </div>
                </div>
                <div class="row no-space">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ps-0 ps-lg-0 pe-0 pe-lg-0 ps-xl-3">
                        <div class="content_box_cn style_one">
                            <div class="txt_content">
                                <h6>
                                    Reduced Stress and Workload:
                                </h6>
                                <p>Delegate tasks you dislike or find challenging and free up valuable time for relaxation, pursuing hobbies, or spending quality time with loved ones.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Improved Well-being:
                                </h6>
                                <p>Maintain a clean and organized home, which can significantly <b>contribute to your overall well-being and reduce stress levels.</b></p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Increased Independence:
                                </h6>
                                <p>Receive <b>personalized assistance with specific tasks</b> while maintaining autonomy in other areas of your life.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Peace of Mind:
                                </h6>
                                <p>Gain confidence knowing your home is <b>well-maintained and tasks are completed reliably and efficiently</b> by our highly trained and insured professionals.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Flexible and Customizable:
                                </h6>
                                <p>Choose the services that best suit your needs and preferences. We offer <b>one-time assistance, regular scheduling, and personalized packages </b>to ensure you receive the exact level of support you require.</p>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_25"></div>
                    <!--===============spacing==============-->
                </div>
                <div class="title_all_box style_one dark_color">
                    <div class="title_sections left">
                        <p><b>Services We Offer:</b></p>
                    </div>
                </div>
                <div class="row no-space">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ps-0 ps-lg-0 pe-0 pe-lg-0 ps-xl-3">
                        <div class="content_box_cn style_one">
                            <div class="txt_content">
                                <h6>
                                    Cleaning and Housekeeping: 
                                </h6>
                                <p>Regular cleaning, deep cleaning, laundry, ironing, and organization services to keep your home sparkling clean and clutter-free.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Meal Preparation and Grocery Shopping:
                                </h6>
                                <p>Take the stress out of meal planning and grocery shopping. We offer a range of services, including planning, shopping, cooking, and even meal delivery options.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Errands and Transportation:
                                </h6>
                                <p>Need help running errands, attending appointments, or getting around town? We can assist you with all your transportation and errand needs.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Personal Care and Companionship:
                                </h6>
                                <p>Whether you require assistance with bathing, dressing, medication reminders, or simply need someone to keep you company, we offer personalized care and companionship services.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Pet Care:
                                </h6>
                                <p>We understand the importance of your furry companions. We can assist with pet walking, feeding, and even taking them to vet appointments.</p>
                            </div>
                        </div>

                        <div class="content_box_cn  style_one">
                            <div class="txt_content">
                                <h6>
                                    Home Maintenance and Repairs:
                                </h6>
                                <p>Don't put off those minor repairs any longer. Our handyman services can tackle a variety of tasks to keep your home running smoothly.</p>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_25"></div>
                    <!--===============spacing==============-->

                    <div class="description_box">
                        <p><b><a href="#">Contact Health 24 today for a free consultation and let us help you reclaim your time and reduce stress!</a></b></p>
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