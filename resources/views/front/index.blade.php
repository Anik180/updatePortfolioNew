<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>{{ $logo->title }}</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="{{asset( $logo->fav )}}">
      <!-- ========== Start Stylesheet ========== -->
      <link href="{{asset('public/front/css/bootstrap.min.css')}}" rel="stylesheet" />
      <link href="{{asset('public/front/css/fontawesome.min.css')}}" rel="stylesheet" />
      <link href="{{asset('public/front/css/magnific-popup.css')}}" rel="stylesheet" />
      <link href="{{asset('public/front/css/owl.carousel.min.css')}}" rel="stylesheet" />
      <link href="{{asset('public/front/css/owl.theme.default.min.css')}}" rel="stylesheet" />
      <link href="{{asset('public/front/css/animate.css')}}" rel="stylesheet" />
      <link href="{{asset('public/front/css/flaticon-set.css')}}" rel="stylesheet" />
      <link href="{{asset('public/front/css/themify-icons.css')}}" rel="stylesheet" />
      <link href="{{asset('public/front/css/style.css')}}" rel="stylesheet">
      <link href="{{asset('public/front/css/responsive.css')}}" rel="stylesheet" />


      <!-- ========== End Stylesheet ========== -->
   </head>
   <body id="bdy" class="scroll-style">
      <!-- Start PreLoader 
         ============================================= -->
      <div class="se-pre-con"></div>

      <!-- Start PreLoader-->
      <!-- Start header data-bs-toggle="dropdown"
         ============================================= -->
      <header class="header">
         <div class="main-navigation">
            <nav id="navbar_top" class="navbar navbar-expand-lg">
               <div class="container">
                  <a class="navbar-brand" href="{{url('/')}}">
                  <img src="{{asset( $logo->white_logo)}}" class="logo-display" alt="Itsol" style="width: 80px;height: 79px;">
                  <img src="{{asset( $logo->black_logo )}}" class="logo-scrolled" alt="Itsol" style="width: 80px;height: 79px;">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"><i class="ti-menu-alt"></i></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-center" id="main_nav">
                     <ul id="top-menu" class="navbar-nav v-card-menu">
                        <li class="nav-item">
                           <a class="nav-link smooth-menu" href="#home"> 
                           Home
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link smooth-menu" href="#about"> 
                           About 
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link smooth-menu" href="#work"> 
                           Portfolio
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link smooth-menu" href="#certification"> 
                           Certification
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link smooth-menu" href="#blog"> 
                           Blog
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link smooth-menu" href="#contact"> 
                           Contact 
                           </a>
                        </li>
                     </ul>
                  </div>

                  <!-- navbar-collapse.// -->
                  <div class="side-menu">
                     <div class="menu-tab">
                        <div id="one"></div>
                        <div id="two"></div>
                        <div id="three"></div>
                     </div>
                     <div class="menu-hide">
                        <div class="side-about">
                           <img src="{{asset( $aboutMe->photo )}}" alt="{{ $aboutMe->about_title }}" style="height: 150px;">
                           <p class=" mb-0">
                              {{ $aboutMe->description }}
                           </p>
                        </div>
                        <div class="side-social-content mt-30">
                           <div class="side-address mb-30">
                              <div class="side-addr-box">
                                 <div class="side-addr-icon">
                                    <i class="fas fa-phone"></i>
                                 </div>
                                 <div class="side-addr-desc">
                                    <span>{{ $config->phone }}</span>
                                 </div>
                              </div>
                              <div class="side-addr-box">
                                 <div class="side-addr-icon">
                                    <i class="fas fa-envelope"></i>
                                 </div>
                                 <div class="contact-addr-desc">
                                    <span>{{ $config->mail }}</span> 
                                 </div>
                              </div>
                              <div class="side-addr-box">
                                 <div class="side-addr-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                 </div>
                                 <div class="side-addr-desc">
                                    <span>{{ $config->address }}</span> 
                                 </div>
                              </div>
                           </div>
                           <ul class="side-social">
                              <li><a href="{{ $config->facebook_link }}"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="{{ $config->github_link }}"><i class="fab fa-github"></i></a></li>
                              <li><a href="{{ $config->twitter_link }}"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="{{ $config->linkdin_link }}"><i class="fab fa-linkedin-in"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-- Side Menu -->
               </div>
               <!-- container -->
            </nav>
         </div>
      </header>
      <!-- End header -->
      <main class="main">
         <!-- Start Slider
            ============================================= -->
         <div id="home" class="hero-section">
            <div class="hero-single-2" style="background-image: url({{asset( $homeSlider->slider )}})">
               <div class="container">
                  <div class="row g-5">
                     <div class="col-xl-8">
                        <div class="hero-content-2 wow fadeInLeft" data-wow-duration="4s" data-wow-delay=".2s">
                           <div class="hero-desc">
                              <h5 class="hero-sub-title">
                                 {{ $homeSlider->slider_name }}
                              </h5>
                              <h2 class="hero-title">
                                 I’m a    
                                 <span class="typed-strings">
                                 <span class="type_color">{{ $homeSlider->slider_title }}</span>
                                 </span>
                                 <span class="typed"></span>                              
                              </h2>
                              <div class="hero-btn">
                                 <a href="{{ $homeSlider->slider_link }}" target="_blank" class="tm-btn-1 demo2">
                                 <i class="fab fa-github"></i> GitHub
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="hero-2-img wow fadeInRight" data-wow-duration="4s" data-wow-delay=".2s">
                           <img src="{{asset( $homeSlider->photo )}}" alt="{{ $homeSlider->slider_name }}">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End Slider -->


         <!-- Start About
            ============================================= -->
         <div id="about" class="about-area de-padding">
            <div class="container">
               <div class="about-wpr">
                  <div class="row">
                     <div class="col-xl-6">
                        <div class="about-left wow fadeInLeft" data-wow-duration="4s" data-wow-delay=".2s">
                           <div class="about-pic">
                              <img src="{{asset( $aboutMe->photo )}}" alt="{{ $aboutMe->about_title }}">
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-6">
                        <div class="about-right wow fadeInRight" data-wow-duration="4s" data-wow-delay=".2s">
                           <div class="about-right-content">
                              <h5 class="about-sub-title">
                                 About Me
                              </h5>
                              <h2 class="about-title">
                                 {{ $aboutMe->about_title }}
                              </h2>
                              <h5 class="about-title-3">
                                 {{ $aboutMe->about_subTitle }}
                              </h5>
                              <div class="about-txt mb-30">
                                 <p>
                                    {{ $aboutMe->description }}
                                 </p>
                              </div>
                              <div class="about-btns">
                                 <a href="{{asset('/public/about/'.$cv->cv)}}" download class="tm-btn-2">
                                 Download CV 
                                 <i class="fas fa-arrow-down"></i>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End About -->      
         <!-- Start Video
            ============================================= -->
         <div class="video-area vid-ov de-padding" style="background-image: url({{asset( $skillInfo->banner )}})">
            <div class="container">
               <div class="video-wpr">
                  <div class="row">
                     <div class="col-xl-4">
                        <div class="my-service">
                           <h5>My Skill</h5>
                           <h4>
                              {{ $skillInfo->title }}
                           </h4>
                        </div>
                     </div>
                     <div class="col-xl-2 col-lg-2">
                        <div class="video-box fl-wrap pl">
                           @if($skillInfo->video==NULL)
                           <a class="video-box-btn color-bg popup-vimeo image-popup item popup-youtube" href="{{ $skillInfo->video_link }}">
                           <i class="fas fa-play play-bt"></i>
                           </a>
                           @else
                           <a class="video-box-btn color-bg popup-vimeo image-popup item popup-youtube" href="{{ $skillInfo->video }}">
                           <i class="fas fa-play play-bt"></i>
                           </a>
                           @endif
                        </div>
                     </div>
                     <div class="col-xl-6">
                        <div class="skills-section">
                           <!-- Progress Bar Start -->
                           @foreach( $skillBar as $row)
                           <div class="progress-box">
                              <h5>{{ $row->skill_title }}<span class="pull-right">{{ $row->skill_percent }}%</span></h5>
                              <div class="progress">
                                 <div class="progress-bar" role="progressbar" data-width="{{ $row->skill_percent }}"></div>
                              </div>
                           </div>
                           @endforeach
                           <!-- End Progressbar -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End Video -->
         <!-- Start Project Area
            ============================================= -->
         <div id="work" class="project-area bg de-padding">
            <div class="container">
               <div class="row">
                  <div class="col-xl-8 offset-xl-2">
                     <div class="site-title mb-60 text-center">
                        <h5 class="about-sub-title def">
                           Gallery
                        </h5>
                        <h2 class="mb-0">
                           My Gallery Projects
                        </h2>
                     </div>
                  </div>
               </div>
               <div class="project-wpr">
                  <div id="filters" class="toolbar text-center mb-40">
                     <button class="btn fil-cat filter active"  data-filter="all">
                     All
                     </button>
                     @foreach( $category as $row)
                     <button class="btn fil-cat filter" data-rel="{{ $row->category_name }}" data-filter=".{{ $row->category_name }}">
                     {{ $row->category_name }}
                     </button>
                     @endforeach
                  </div>
                  <div id="portfolio" class="magnific-mix-gallery">
                    
                     <div class="portfolio-grid grid-3">
                        @foreach($project as $row) 
                        <div class="project-box tile scale-anm  {{ $row->category_name }}" >
                           <div class="port-pic">
                              <img src="{{asset( $row->thumb )}}" alt="{{ $row->project_name }}">
                              <div class="port-overlay">
                                 <div class="port-content">
                                    <h5>{{ $row->project_name }}</h5>
                                    <span>{{ $row->category_name }}</span>
                                    <a href="{{asset( $row->photo )}}" class="item popup-link">
                                    <i class="fas fa-eye"></i>                                 
                                    </a>
                                 </div>
                                 <div class="buttons text-center">
                                    <a href="{{ $row->website_link }}" class="btn btn-primary btn-lg">
                                    <i class="fa fa-globe"></i> VISIT WEBSITE</a>
                                    <a href="{{ $row->github_link }}" class="btn btn-primary btn-lg"><i class="fab fa-github"></i> VISIT GITHUB</a>
                                 </div>
                              </div>
                           </div>
                           <br>
                        </div>
                     @endforeach
                     </div>
                     
                  </div>
                  <!--Portfolio-->
               </div>
            </div>
         </div>
         <!-- End Project Area -->
         <!-- Start certificate
            ============================================= -->
         <div id="certification" class="blog-area de-padding blog-bg">
            <div class="container">
               <div class="row">
                  <div class="col-xl-8 offset-xl-2">
                     <div class="site-title mb-60 text-center">
                        <h5 class="about-sub-title wh def">
                           Certification
                        </h5>
                     </div>
                  </div>
               </div>
               <div class="blog-wpr blog-sldr owl-carousel owl-theme">
                  @foreach($certificate as $row) 
                  <a href="{{asset($row->photo)}}" target="_blank">
                     <div class="blog-box wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".2s">
                        <div class="blog-pic">
                           <img src="{{asset($row->photo)}}" alt="thumb">
                        </div>
                        <div class="blog-desc">
                           <h5>
                              {{ $row->title}}
                           </h5>
                        </div>
                     </div>
                  </a>
                  @endforeach
               </div>
            </div>
         </div>
         <!-- End certificate -->
         @php
            $blogList = DB::table('blogs')->get();
          @endphp
            @if(count($blogList) >= 3)
         <div id="blog" class="blog-area de-padding" style="background-color: white;">
            <div class="container">
               <div class="row">
                  <div class="col-xl-8 offset-xl-2">
                     <div class="site-title mb-60 text-center">
                        <h5 class="about-sub-title wh def">
                           My Blog
                        </h5>
                     </div>
                  </div>
               </div>
               <div class="blog-wpr blog-sldr owl-carousel owl-theme">
                  @foreach($blog as $row) 
                     @php
                       $slug=preg_replace('/\s+/u','-',trim($row->title));
                     @endphp
                  <a href="{{URL::to('view-blog/'.$row->id.'/'.$slug)}}" target="_blank">
                     <div class="blog-box wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".2s" style="background-color: #fafafa; border: 1px solid black;">
                        <div class="blog-pic">
                           <img src="{{asset($row->photo)}}" alt="thumb">
                           <div class="blog-date">

                              <span >{{ Carbon\Carbon::parse($row->date)->format(' j  F Y ') }}</span>
                           </div>
                        </div>
                        <div class="blog-desc">
                           <h5>
                              {{ $row->title}}
                           </h5>
                           <p class="mb-0">
                              <button class="btn btn-md btn-primary">Read More</button>
                           </p>
                        </div>
                     </div>
                  </a>
                  @endforeach
               </div>
            </div>
         </div>
         @else
         @endif
         <!-- Start Contact
            ============================================= -->
         <div id="contact" class="contact-area de-pt wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" style="background-color: #fafafa;">
            <div class="container">
               <div class="row">
                  <div class="col-xl-8 offset-xl-2">
                     <div class="site-title mb-60 text-center">
                        <h5 class="about-sub-title def">
                           Contact
                        </h5>
                        <h2 class="mb-0">
                           Contact Me
                        </h2>
                     </div>
                  </div>
               </div>
               <div class="contact-wpr">
                  <div class="contact-content">
                     <div class="contact-lpm mb-100">
                        <div class="row g-5">
                           <div class="col-xl-4 col-md-6 col-lg-6">
                              <div class="contact-addr-box">
                                 <div class="contact-addr-icon">
                                    <i class="fas fa-phone"></i>
                                 </div>
                                 <div class="contact-addr-desc">
                                    <h4>Phone Number</h4>
                                    <span>{{ $config->phone }}</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6 col-lg-6">
                              <div class="contact-addr-box">
                                 <div class="contact-addr-icon">
                                    <i class="fas fa-envelope"></i>
                                 </div>
                                 <div class="contact-addr-desc">
                                    <h4>Email Address</h4>
                                    <span>{{ $config->mail }}</span> 
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-md-6 col-lg-6">
                              <div class="contact-addr-box">
                                 <div class="contact-addr-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                 </div>
                                 <div class="contact-addr-desc">
                                    <h4>Office Address</h4>
                                    <span>{{ $config->address }}</span> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="contact-lpm mb-100">
                        <div class="row g-5">
                           <div class="col-xl-12 col-md-12 col-lg-12">
                    

                      <form class="contact-form" id="contact-form" action="{{route('message.store')}}" method="POST">
                                 @csrf
                                 <h4 class="contact-tl">Send Message</h4>

                                 <div class="col-md-12 mt-20">
                                    <p class="form-message alert alert-success"></p>
                                 </div>
                                 <div class="row g-4">
                                    <div class="col-md-6 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".3s">
                                       <input type="text" name="name" class="form-control input-style-2" placeholder="Your Full Name*">
                                    </div>
                                    <div class="col-md-6 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".4s">
                                       <input type="email" name="email" class="form-control input-style-2" placeholder="Your Email Address*">
                                    </div>
                                    <div class="col-md-12 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".2s">
                                       <input type="text" name="sub" class="form-control input-style-2" placeholder="Subject...">
                                    </div>
                                    <div class="col-md-12 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".5s">
                                       <textarea class="form-control input-style-2" name="message" placeholder="Your Message..."></textarea>
                                    </div>
                                    <div class="col-md-12 mt-50 contact-sub-btn text-center wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".6s">
                                       <button type="submit" id="submit" class="tm-btn-2">
                                       Submit Message 
                                       <i class="fas fa-chevron-right"></i>
                                       </button>
                                    </div>
                                 </div>
                              </form>
                           </div>


                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End Contact -->
      </main>
      <div class="clearfix"></div>

      <!-- Start Footer
         ============================================= -->
      <footer>
         <div class="footer-widget">
            <div class="container">
               <div class="copyright">
                  <div class="row align-items-center">
                     <div class="col-xl-4">
                        <p>@ <?php echo date("Y"); ?> Anik Acharjya. All right reserved</p>
                     </div>
                     <div class="col-xl-4">
                        <ul class="footer-menu">
                           <li>
                              <a href="#about">
                              About Me
                              </a>
                           </li>
                           <li>
                              <a href="#contact">
                              Contact Me
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="col-xl-4">
                        <ul class="footer-social">
                           <li><a href="{{ $config->facebook_link }}"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="{{ $config->github_link }}"><i class="fab fa-github"></i></a></li>
                           <li><a href="{{ $config->twitter_link }}"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="{{ $config->instagram_link }}"><i class="fab fa-instagram"></i></a></li>
                           <li><a href="{{ $config->linkdin_link }}"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- End Footer-->   
      <!-- Start Scroll top
         ============================================= -->
      <a href="#bdy" id="scrtop" class="smooth-menu"><i class="ti-arrow-up"></i></a>
      <!-- End Scroll top-->
      <!-- jQuery Frameworks
         ============================================= -->
      <script src=" {{asset('public/front/js/jquery-1.12.4.min.js')}}"></script>
      <script src=" {{asset('public/front/js/popper.min.js')}}"></script>
      <script src=" {{asset('public/front/js/bootstrap.min.js')}}"></script>
      <script src=" {{asset('public/front/js/jquery.easing.min.js')}}"></script>
      <script src=" {{asset('public/front/js/bootstrap-menu.js')}}"></script>
      <script src=" {{asset('public/front/js/jquery.magnific-popup.min.js')}}"></script>
      <script src=" {{asset('public/front/js/modernizr.custom.13711.js')}}"></script>
      <script src=" {{asset('public/front/js/wow.min.js')}}"></script>
      <script src=" {{asset('public/front/js/isotope.pkgd.min.js')}}"></script>
      <script src=" {{asset('public/front/js/jquery.mixitup.min.js')}}"></script>
      <script src=" {{asset('public/front/js/imagesloaded.pkgd.min.js')}}"></script>
      <script src=" {{asset('public/front/js/jquery.appear.js')}}"></script>
      <script src=" {{asset('public/front/js/count-to.js')}}"></script>
      <script src=" {{asset('public/front/js/owl.carousel.min.js')}}"></script>
      <script src=" {{asset('public/front/js/progress-bar.min.js')}}"></script>
      <script src=" {{asset('public/front/js/typed.js')}}"></script>
      <script src=" {{asset('public/front/js/YTPlayer.min.js')}}"></script>
      <script src=" {{asset('public/front/js/active-class.js')}}"></script>
      <script src=" {{asset('public/front/js/main.js')}}"></script>


   </body>
</html>