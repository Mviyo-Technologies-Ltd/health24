@extends('layout')

@section('content')
<section class="slider style_four nav_position_one">
   <div class="owl-carousel owl_nav_block owl_dots_none theme_carousel owl-theme" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 7000, "smartSpeed": 1800, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>

      <div class="slide-item-content">
         <div class="slide-item content_left">
            <div class="image-layer" style="background-image:url({{asset('images/sliders/home_first.jpg')}})">
            </div>
            <div class="auto-container">
               <div class="row">
                  <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                     <div class="slider_content pd_top_180 pd_bottom_200">
                        <h6 class="animate_up d-inline-block"> Health 24</h6>
                        <h1 class="animate_left"> Health Services </h1>
                        <p class="description animate_right text-white"> A comprehensive range of support options to <br> help you achieve your goals and live independently. </p>
                        <div class="button_all animate_down">
                           <a href="#" target="_blank" rel="nofollow" class="theme-btn one  animated">Read
                              More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="slide-item-content">
         <div class="slide-item content_center">
            <div class="image-layer" style="background-image:url({{asset('images/sliders/slider-2.png')}})">
            </div>
            <div class="auto-container">
               <div class="row">
                  <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                     <div class="slider_content pd_top_180 pd_bottom_200">
                        <h6 class="animate_up d-inline-block"> Health 24 </h6>
                        <h1 class="animate_left"> Client Centered Care </h1>
                        <p class="description animate_right"> We are committed to understanding your unique needs and goals.</p> <br>
                        <div class="button_all animate_down">
                           <a href="#" target="_blank" rel="nofollow" class="theme-btn one  animated">Read
                              More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="slide-item-content">
         <div class="slide-item content_right">
            <div class="image-layer" style="background-image:url({{asset('images/sliders/slider-3.png')}})">
            </div>
            <div class="auto-container">
               <div class="row">
                  <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                     <div class="slider_content pd_top_180 pd_bottom_200">
                        <h6 class="animate_up d-inline-block"> Health 24 </h6>
                        <h1 class="animate_left"> Personalized Plans </h1>
                        <p class="description animate_right"> These cases are perfectly simple and easy
                           to distinguish. In a free <br> hour, when our power of choice is untrammelled.
                        </p>
                        <a href="#" target=_blank rel=nofollow class="theme-btn one  animated _zoomIn"> Read
                           More </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!---about us-->
<section class="about_us_section" id="about">
   <!--===============spacing==============-->
   <div class="pd_top_100"></div>
   <!--===============spacing==============-->
   <div class="container pd_zero">
      <div class="row">
         <div class="col-xl-6 col-lg-12">
            <div class="title_all_box style_one dark_color">
               <div class="title_sections left">
                  <div class="before_title"> Empowering individuals to live life to the fullest. </div>
                  <h2> Health 24 Support Services</h2>
                  <p> Health 24 Support Services provides a comprehensive range of support options to help you achieve
                     your goals and live independently.</p>
               </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_20"></div>
            <!--===============spacing==============-->
            <div class="process_box style_one dark_color">
               <div class="process_box_outer">
                  <div class="icon">
                     <span class=" icon-line-chart"></span>
                     <div class="number"> 01 </div>
                  </div>
                  <div class="content_box">
                     <h2>
                        Client-centred care
                     </h2>
                     <p> We believe that you are the expert on your health, and we prioritize your needs and preferences
                        in everything we do.</p>
                  </div>
               </div>
            </div>
            <div class="process_box style_one dark_color">
               <div class="process_box_outer">
                  <div class="icon">
                     <span class=" icon-line-chart"></span>
                     <div class="number"> 02 </div>
                  </div>
                  <div class="content_box">
                     <h2>
                        Empowerment
                     </h2>
                     <p> We equip you with the knowledge, resources, and skills needed to live independently
                        and make informed decisions regarding your support </p>
                  </div>
               </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_30"></div>
            <!--===============spacing==============-->
            <div class="signature_wrapper">
               <div class="row gutter_15px">
                  <div class="col-lg-4 col-md-12">
                     <div class="theme_btn_all color_one">
                        <a href="#" class="theme-btn two">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_30"></div>
            <!--===============spacing==============-->
         </div>
         <div class="col-xl-6 col-lg-12">

            <div class="service_wrapper">
               <div class="move_image_absolute">
                  <img src="images/about/about_first.jpg" class="class-fluid" alt="image" />
               </div>
               {{-- <div class="row">
                  <div class="col-lg-6 col-md-6">
                     <div class="service_box style_one dark_color">
                        <div class="service_content">
                           <div class="image ">
                              <img src="images/service-illu-1.png" class="img-fluid" alt="Service Image" />
                           </div>
                           <div class="content_inner">
                              <h2>
                                 Collaboration
                              </h2>
                              <p> We work collaboratively with you and other healthcare providers to ensure you receive
                                 the most comprehensive and coordinated care possible.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                     <!--===============spacing==============-->
                     <div class="pd_top_100"></div>
                     <div class="pd_top_100 d_md_none"></div>
                     <!--===============spacing==============-->
                     <div class="service_box style_one dark_color last">
                        <div class="service_content">
                           <div class="image ">
                              <img src="images/service-illu-1.png" class="img-fluid" alt="Service Image" />
                           </div>
                           <div class="content_inner">
                              <h2>
                                 Respect
                              </h2>
                              <p> We treat you with dignity and respect, and we value your unique experiences and
                                 perspectives.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> --}}
            </div>
         </div>
      </div>
   </div>
   <!-- spacing -->
   <div class="pd_bottom_30"></div>
   <!-- spacing -->
   <div class="container pd_zero">
      <div class="row">
         <div class="col-xl-6 col-lg-12">

            <div class="title_all_box style_one dark_color">
               <div class="move_image_absolute">
                  <img src="images/about/mother.jpg" class="class-fluid" alt="image" />
               </div>

            </div>
         </div>
         <div class="col-xl-6 col-lg-12">
            <div class="title_all_box style_one dark_color">
               <div class="title_sections right">
                  <div class="before_title"> Point of Difference:  </div>
                  <h2>We provide a wide range of NDIS services 24/7. </h2>
                  <p> Our team members also have extensive experience in perinatal mental health services
                     and facilitate Circle of Security parenting program,
                     offer support with bonding and healthy attachments, promote mother and baby interactions,
                     help you getting into a daily routine with your baby and sleep management. </p>
               </div>
            </div>
           

            <!--===============spacing==============-->
            <!-- <div class="pd_bottom_30"></div> -->
            <!--===============spacing==============-->
            <div class="signature_wrapper">
               <div class="row gutter_15px">
                  <div class="col-lg-4 col-md-12">
                     <div class="theme_btn_all color_one">
                        <a href="#" class="theme-btn two">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_30"></div>
            <!--===============spacing==============-->
         </div>

      </div>
   </div>
   <!--===============spacing==============-->
   <div class="pd_bottom_80"></div>
   <!--===============spacing==============-->
</section>
<!---about us end-->

<!---service--->
<section class="project-section bg_dark_3">
   <!--===============spacing==============-->
   <div class="pd_top_85"></div>
   <!--===============spacing==============-->
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-8 col-md-8 col-sm-12 mb-sm-5 mb-md-0 mb-lg-0 mb-xl-0">
            <div class="title_all_box style_three light_color">
               <div class="title_sections three left">
                  <div class="before_title">Effective Solutions</div>
                  <h2>Our Key Areas of Expertise</h2>
               </div>
            </div>
         </div>
         <!--===============spacing==============-->
         <div class="pd_bottom_35"></div>
         <!--===============spacing==============-->
      </div>
   </div>
   <div class="container-fluid pd_zero">
      <div class="row">
         <div class="col-lg-12">
            <div class="project_caro_section  style_two light_color">
               <div class="swiper-container" data-swiper='{
                                 "autoplay": {
                                   "delay": 6000
                                 },
                                 "freeMode": true,
                                 "loop": true,
                                 "speed": 1000,
                                 "centeredSlides": true,
                                 "slidesPerView": 3,
                                 "spaceBetween": 30,
                                 "pagination": {
                                   "el": ".swiper-pagination",
                                   "clickable": true
                                 },
                                  
                                 "breakpoints": {
                                    "1200": {
                                       "slidesPerView": 5
                                    },
                                    "1024": {
                                     "slidesPerView": 3 
                                    },
                                   "768": {
                                     "slidesPerView": 2 
                                   },
                                   "576": {
                                     "slidesPerView": 1 
                                   },
                                   "0": {
                                     "slidesPerView": 1 
                                   }
                                 }
                               }'>
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="project_post style_seven">
                           <div class="image_box">
                              <img src={{asset("images/banner/about_top.jpg")}} class="img-fluid" alt="img">
                           </div>
                           <div class="content_box ">
                              <h2 class="title_pro"><a href="#" rel="bookmark">Community Participation</a></h2>
                              <p>Building Stronger Together at Health 24 Support Services </p>
                              <div class="mt-5">
                                 <a href="#" class="theme-btn one  animated _zoomIn">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="project_post style_seven">
                           <div class="image_box">
                              <img src={{asset("images/services/support_cc.jpg")}} class="img-fluid" alt="img">
                           </div>
                           <div class="content_box ">
                              <h2 class="title_pro"><a href="#" rel="bookmark">Support Co-ordination</a></h2>
                              <p>Take Control of Your NDIS Journey with Support Coordination at Health 24 </p>
                              <div class="mt-5">
                                 <a href="#" class="theme-btn one  animated _zoomIn">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="project_post style_seven">
                           <div class="image_box">
                              <img src={{asset("images/services/service-3.png")}} class="img-fluid" alt="img">
                           </div>
                           <div class="content_box ">
                              <h2 class="title_pro"><a href="#" rel="bookmark">Group & Centre Activities</a></h2>
                              <p>Discover Meaningful Connections and Enriching Experiences at Health 24 </p>
                              <div class="mt-5">
                                 <a href="#" class="theme-btn one  animated _zoomIn">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="project_post style_seven">
                           <div class="image_box">
                              <img src={{asset("images/services/service-4.png")}} class="img-fluid" alt="img">
                           </div>
                           <div class="content_box ">
                              <h2 class="title_pro"><a href="#" rel="bookmark">Daily & Household Task Assistance</a>
                              </h2>
                              <p>Reclaim Your Time and Reduce Stress with Daily & Household Task Assistance from Heath
                                 24 Support Services</p>
                              <div class="mt-5">
                                 <a href="#" class="theme-btn one  animated _zoomIn">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="project_post style_seven">
                           <div class="image_box">
                              <img src={{asset("images/services/service-5.png")}} class="img-fluid" alt="img">
                           </div>
                           <div class="content_box ">
                              <h2 class="title_pro"><a href="#" rel="bookmark">Travel & Transport Assistance</a></h2>
                              <p>Explore More with Confidence: Travel & Transport Assistance at Heath 24 Support
                                 Services </p>
                              <div class="mt-5">
                                 <a href="#" class="theme-btn one  animated _zoomIn">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="project_post style_seven">
                           <div class="image_box">
                              <img src={{asset("images/services/service-6.png")}} class="img-fluid" alt="img">
                           </div>
                           <div class="content_box ">
                              <h2 class="title_pro"><a href="#" rel="bookmark"> Life Skills Development</a></h2>
                              <p>Unlock Your Potential: Invest in Life Skills Development with Heath 24 Support Services
                              </p>
                              <div class="mt-5">
                                 <a href="#" class="theme-btn one  animated _zoomIn">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="project_post style_seven">
                           <div class="image_box">
                              <img src={{asset("images/services/service-7.png")}} class="img-fluid" alt="img">
                           </div>
                           <div class="content_box ">
                              <h2 class="title_pro"><a href="#" rel="bookmark">Assistance with Personal
                                    Care/Activities</a></h2>
                              <p>Reclaim Your Independence with Personalized Personal Care and Daily Living Assistance
                                 from Heath 24 Support Services </p>
                              <div class="mt-5">
                                 <a href="#" class="theme-btn one  animated _zoomIn">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="project_post style_seven">
                           <div class="image_box">
                              <img src={{asset("images/services/service-8.png")}} class="img-fluid" alt="img">
                           </div>
                           <div class="content_box ">
                              <h2 class="title_pro"><a href="#" rel="bookmark">Assisting Life Stage Transitions</a></h2>
                              <p>Navigate Life's Transitions with Confidence: Support and Resources from Heath 24
                                 Support Services </p>
                              <div class="mt-5">
                                 <a href="#" class="theme-btn one  animated _zoomIn">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="project_post style_seven">
                           <div class="image_box">
                              <img src={{asset("images/services/service-9.png")}} class="img-fluid" alt="img">
                           </div>
                           <div class="content_box ">
                              <h2 class="title_pro"><a href="#" rel="bookmark">Supported Independent Living</a></h2>
                              <p>Empowering Choice and Independence</p>
                              <div class="mt-5">
                                 <a href="#" class="theme-btn one  animated _zoomIn">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="project_post style_seven">
                           <div class="image_box">
                              <img src={{asset("images/services/service-10.png")}} class="img-fluid" alt="img">
                           </div>
                           <div class="content_box ">
                              <h2 class="title_pro"><a href="#" rel="bookmark">Specialist Disability Accommodation</a>
                              </h2>
                              <p>Live Independently with Specialist Disability Accommodation (SDA) at Heath 24 Support
                                 Services </p>
                              <div class="mt-5">
                                 <a href="#" class="theme-btn one  animated _zoomIn">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="project_post style_seven">
                           <div class="image_box">
                              <img src={{asset("images/services/service-11.png")}} class="img-fluid" alt="img">
                           </div>
                           <div class="content_box ">
                              <h2 class="title_pro"><a href="#" rel="bookmark">Community Nursing</a></h2>
                              <p>Receive Personalized Care at Home with Experienced Community Nurses from Heath 24
                                 Support Services </p>
                              <div class="mt-5">
                                 <a href="#" class="theme-btn one  animated _zoomIn">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="project_post style_seven">
                           <div class="image_box">
                              <img src={{asset("images/services/service-12.png")}} class="img-fluid" alt="img">
                           </div>
                           <div class="content_box ">
                              <h2 class="title_pro"><a href="#" rel="bookmark">Mental Health Support</a></h2>
                              <p>Prioritize Your Well-being: Explore Mental Health Support Options at Heath 24 Support
                                 Services</p>
                              <div class="mt-5">
                                 <a href="#" class="theme-btn one  animated _zoomIn">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="project_post style_seven">
                           <div class="image_box">
                              <img src={{asset("images/services/service-13.png")}} class="img-fluid" alt="img">
                           </div>
                           <div class="content_box ">
                              <h2 class="title_pro"><a href="#" rel="bookmark">Respite Care</a></h2>
                              <p>Take a Break and Recharge with Personalized Respite Care Solutions from Heath 24
                                 Support Services </p>
                              <div class="mt-5">
                                 <a href="#" class="theme-btn one  animated _zoomIn">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  {{-- <div class="p_pagination mr_top_minus_90">
                     <div class="swiper-pagination"></div>
                  </div> --}}
               </div>

            </div>
         </div>
      </div>
   </div>

   <!--===============spacing==============-->
   <div class="pd_bottom_65"></div>
   <!--===============spacing==============-->

</section>
<!---service-end--->
<!----icon box---->
<section class="icon-box-section position-relative mr_top_minus_50 z_99">
   <div class="container">
      <div class="row">
         <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
            <div class="icon_box_all style_five">
               <div class="icon_content">
                  <div class="icon">
                     <span class="icon-support"></span>
                  </div>
                  <small>01</small>
                  <div class="text_box">
                     <h2>Expert Customer Service</h2>
                     <p>Get fast, friendly help from our product specialists.</p>
                  </div>
               </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_20"></div>
            <!--===============spacing==============-->
         </div>
         <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
            <div class="icon_box_all style_five">
               <div class="icon_content">
                  <div class="icon">
                     <span class="icon-united"></span>
                  </div>
                  <small>02</small>
                  <div class="text_box">
                     <h2>Experienced Team</h2>
                     <p>Let our knowledgeable team solve your problems with their years of experience.</p>
                  </div>
               </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_20"></div>
            <!--===============spacing==============-->
         </div>
         <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
            <div class="icon_box_all style_five">
               <div class="icon_content">
                  <div class="icon">
                     <span class="icon-solution"></span>
                  </div>
                  <small>03</small>
                  <div class="text_box">
                     <h2>Smart Solutions</h2>
                     <p>Find clever solutions to your challenges with our Smart Solutions.</p>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>
</section>
<!----icon box end---->
<!---about--->
<section class="about-section">
   <!--===============spacing==============-->
   <div class="pd_bottom_80"></div>
   <!--===============spacing==============-->
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-12 col-md-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
            <div class="image_boxes style_six">
               <div class="image_box">
                  <img src="images/about/about-3.jpg" class="img-fluid height_510px object-fit-cover" alt="about">
                  <div class="experience">
                     <div class="experience_inner">
                        <h2> We are here for you.</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-6 col-lg-10 col-md-12">
            <div class="title_all_box style_five dark_color">
               <div class="title_sections five">
                  <div class="before_title">Empowerment</div>
                  <h2>Leaders Health Services</h2>
                  <div class="description_box">
                     <p>Health 24 Support Services, goes beyond basic support. Our team of experts leverages their experience to create personalized plans that empower you to take charge of your health and well-being, guiding you on your unique journey to a healthier you.</p>
                     <p>Unlike traditional healthcare that might focus on one-size-fits-all solutions, Health 24 Support Services, takes a personalized approach. Our team of experienced professionals dives deep to understand your unique health goals and challenges. They then craft a customized plan that empowers you to take control of your well-being, equipping you with the knowledge and resources necessary to achieve lasting positive changes.</p>
                  </div>
               </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_30"></div>
            <!--===============spacing==============-->
            <div class="row gutter_15px">
               <div class="col-lg-5 col-md-5 col-sm-12">
                  <div class="theme_btn_all color_one">
                     <a href="#" target="_blank" rel="nofollow" class="theme-btn five">Learn More <i class="icon-right-arrow"></i></a>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_40"></div>
                  <!--===============spacing==============-->
               </div>
            </div>
         </div>
      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_40"></div>
      <!--===============spacing==============-->
      <div class="row">
         <div class="col-xl-6 col-lg-6 mb-5 mb-lg-0 mb-xl-0">
            <div class="link_box_contents style_one">
               <div class="link_content_bx">
                  <div class="image_box">
                     <img src="images/link-box-2.png" alt="img">
                  </div>
                  <div class="con_box">
                     <h2>For More Information About Our Services </h2>
                     <a href="#"> More About Us <i class="icon-right-arrow-long"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-6 col-lg-6">
            <div class="link_box_contents style_two">
               <div class="link_content_bx">
                  <div class="con_box">
                     <h2>We have experience serving our communities.</h2>
                     <a href="#">Get an Appointment <i class="icon-right-arrow-long"></i></a>
                  </div>
                  <div class="image_box">
                     <img src="images/link-box-1.png" alt="img">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--===============spacing==============-->
   <div class="pd_bottom_80"></div>
   <!--===============spacing==============-->
</section>
<!---about end--->
<section class="content-section pd_left_100 pd_right_100 md_pd_left_15 md_pd_right_15">

   <div class="inner_section bg_light_1 rounded_radius">
      <!--===============spacing==============-->
      <div class="pd_top_90"></div>
      <!--===============spacing==============-->
      <div class="row">
         <div class="col-lg-6 col-md-12 pd_left_100 pd_right_100 md_pd_left_15 md_pd_right_15">
            <!--===============spacing==============-->
            <div class="pd_top_30 d_md_none"></div>
            <!--===============spacing==============-->
            <div class="title_all_box style_one  dark_color">
               <div class="title_sections left">
                  <div class="before_title">
                     Collaboration </div>
                  <div class="title"> Effective Solutions</div>
                  <p> We work with you to identify positional requirements, implement
                     solution programs, and initiate assessments that maximize health efforts</p>
               </div>
            </div>
            <div class="list_item_box style_two style_list">
               <ul class="list-inline">
                  <li class="list_items">
                     <small class="d-flex align-items-start">
                        <span class="icon_bx mr_top_5">
                           <i class="fa fa-check-circle"></i>
                        </span>
                        <a class="nav_link" href="#">
                           We’re here to help you step up you.
                        </a>
                     </small>
                  </li>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_10"></div>
                  <!--===============spacing==============-->
                  <li class="list_items">
                     <small class="d-flex align-items-start">
                        <span class="icon_bx mr_top_5">
                           <i class="fa fa-check-circle"></i>
                        </span>
                        <a class="nav_link" href="#">
                           Access to quality healthcare and employee benefits.
                        </a>
                     </small>
                  </li>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_10"></div>
                  <!--===============spacing==============-->
                  <li class="list_items">
                     <small class="d-flex align-items-center">
                        <span class="icon_bx">
                           <i class="fa fa-check-circle"></i>
                        </span>
                        <a class="nav_link" href="#">
                           The only solutions service provider you'll only ever need
                        </a>
                     </small>
                  </li>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_10"></div>
                  <!--===============spacing==============-->
                  <li class="list_items">
                     <small class="d-flex align-items-center">
                        <span class="icon_bx">
                           <i class="fa fa-check-circle"></i>
                        </span>
                        <a class="nav_link" href="#">
                           We'll always offer you custom solutions that suit your needs.
                        </a>
                     </small>
                  </li>
               </ul>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_20"></div>
            <!--===============spacing==============-->
            <div class="theme_btn_all color_one">
               <a href="#" class="theme-btn one">
                  Contact us
               </a>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_30"></div>
            <!--===============spacing==============-->
         </div>
         <div class="col-lg-6 col-md-12 pd_zero bg_op_1 overflow-hidden rounded_bottom_left_30 rounded_bottom_left_30" style="background: url(images/about/about-11.jpg);">

         </div>
      </div>
      <div class="row">
         <div class="col-lg-6 col-md-12"></div>
         <div class="col-lg-6 col-md-12">
            <div class="row no-space">
               <div class="col-lg-2"></div>
               <div class="col-lg-6 bg_dark_2 mr_top_minus_150 mr_md_top_zero pd_top_50  pd_left_70 pd_right_50 rounded_radius pd_bottom_20 bg_op_1" style="background-image: url(images/pannern-n3.png)!important;">
                  <div class="title_all_box style_one light_color">
                     <div class="title_sections left">
                        <div class="before_title color_white">8,435+</div>
                        <p class="color_white">Trusted, Happy & Satisfied Customers</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-24"></div>
            </div>
         </div>
      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_60"></div>
      <!--===============spacing==============-->
   </div>

</section>
<!--===============spacing==============-->
<div class="pd_bottom_80"></div>
<!--===============spacing==============-->
@endsection