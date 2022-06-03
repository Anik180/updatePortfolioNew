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
         <div class="container de-padding">
            <div class="card mb-3">
               <div class="card-body">
                  <h5 class="card-title">{{$blog->title}}</h5>
                  <p class="card-text">Published:<small class="text-muted">{{ Carbon\Carbon::parse($blog->date)->format(' j  F Y ') }}</small></p>
                  {{-- <img src="{{asset( $blog->photo )}}" class="card-img-top img-fluid" alt="{{$blog->title}}" style="height: 330px; width:245px;"> --}}
                  <img src="{{asset( $blog->photo )}}" class="img-responsive center-block d-block mx-auto" alt="Sample Image">
                  <p class="card-text">{!! $blog->description !!}</p>
               </div>
            </div>
         </div>
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