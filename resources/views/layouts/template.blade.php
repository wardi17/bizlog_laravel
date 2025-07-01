<!doctype html>
<html class="no-js" lang="id">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>PT Bidzaksana  Logistik Indonesia</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

      
        <!-- Bootstrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Fontawesome Icon -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Animate Css -->
        <link rel="stylesheet" href="assets/css/animate.css">

        <!-- Owl Slider -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

        <!-- Date Picker -->
        <link rel="stylesheet" href="assets/css/tempusdominus-bootstrap-4.min.css">

        <!-- Magnific PopUp -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">

        <!-- Custom Style -->
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
 <style>
    /* CSS untuk memastikan konten berada di tengah https://forwarder2024.vercel.app*/
    .containervideo {
        display: flex;                 /* Mengaktifkan Flexbox */
        justify-content: center;       /* Mencenterkan konten secara horizontal */
        align-items: center;           /* Mencenterkan konten secara vertikal */
        height: 60vh;                 /* Menjadikan tinggi container sebesar viewport */
        background-color: #f9f9f9;     /* Tambahkan background untuk visualisasi */
    }

    .contentvideo {
        padding: 10px;
        background-color: #f0f0f0;
        border-radius: 8px;
        box-shadow: 0 0 7px rgba(0, 0, 0, 0.1);
        display: flex;                 /* Mengatur Flexbox pada konten video */
        justify-content: center;       /* Memastikan video di dalam konten berada di tengah */
    }

    video {
        max-width: 100%;               /* Video akan disesuaikan dengan container */
        height: auto;                  /* Menjaga rasio aspek video */      
    }


</style>
    </head>
    <body>

        <!-- Preloader -->
        <div id="preloader">
            <div class="pr-circle">
                <div class="pr-circle1 pr-child"></div>
                <div class="pr-circle2 pr-child"></div>
                <div class="pr-circle3 pr-child"></div>
                <div class="pr-circle4 pr-child"></div>
                <div class="pr-circle5 pr-child"></div>
                <div class="pr-circle6 pr-child"></div>
                <div class="pr-circle7 pr-child"></div>
                <div class="pr-circle8 pr-child"></div>
                <div class="pr-circle9 pr-child"></div>
                <div class="pr-circle10 pr-child"></div>
                <div class="pr-circle11 pr-child"></div>
                <div class="pr-circle12 pr-child"></div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Top Bar -->
        <section class="top-bar" id="btt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-9">
                        <div class="bar-content">
                            <ul class="list-unstyled list-inline">
                                
                                <li class="list-inline-item"><img src="assets/images/phone.png" alt="">082315171644</li>
                                <li class="list-inline-item"><img src="assets/images/mail.png" alt="">bli_admin@Bidzlog.co.id</li>  
                                <li class="list-inline-item">   
                                    <a href="{{ route('set.locale', 'id') }}">
                                        <img src="{{ asset('assets/images/flag-id.png') }}" title="Indonesia" >
                                    </a> <a href="{{ route('set.locale', 'en') }}">
                                        <img src="{{ asset('assets/images/flag-en.png') }}" title="English" >{{__('messages.selectlanguage')}}</a>
                                    
                                   </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-3">
                        <div class="top-social text-right">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-google-plus"></i></a></li>
                                <li class="list-inline-item">
                                    <span><button type="button" data-toggle="modal" data-target="#model-box">{{__('messages.MakeanAppointment')}}</button></span>
                                    <!-- Appointment Box -->
                                    <div class="modal fade" id="model-box">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content text-center">
                                                <div class="medel-box-top">
                                                    <h4>{{__('messages.BookAnAppointment')}}</h4>
                                                    <img src="assets/images/heartbeat.png" alt="">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                                <form action="#">
                                                    <input type="text" name="name" placeholder="Full Name" required>
                                                    <input type="text" name="phone" placeholder="Phone Number" required>
                                                    <input type="text" name="email" placeholder="Email Address" required>
                                                    <input type="text" id="datetimepicker" data-toggle="datetimepicker" data-target="#datetimepicker" name="appdate" placeholder="Appointment Date">
                                                    <textarea name="message" placeholder="Message" required></textarea>
                                                    <button type="submit">{{__('messages.BookNow')}}</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Top Bar -->

        <!-- Logo Area -->
        <section class="logo-area menu-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href=""><img width="80%" src="assets/images/logo.jpeg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="main-menu text-right">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item active"><a href="{{url('/')}}" >{{__('messages.Home')}}</a>
                                    <ul class="dropdown list-unstyled">
                                       
                                    </ul>
                                </li>
                                <li class="list-inline-item"><a>{{__('messages.Profile')}} <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="{{url('/Tentang_Kami')}}">{{__('messages.AboutUs')}}</a></li>
                                        <li><a href="{{url('/Struktur_Organisasi')}}">{{__('messages.Organizationalstructure')}}</a></li>
                                        <li><a href="">{{__('messages.ContainerDepot')}}</a></li>
                                      
																		 
		  
                                    </ul>
                                </li>
                                <li class="list-inline-item"><a>{{__('messages.NewsandActivities')}} <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="05-about-us.html">{{__('messages.PressRelease')}}</a></li>
                                        <li><a>{{__('messages.Complaint')}} <i class="fa fa-angle-right"></i></a>
                                            <ul class="dropdown2 list-unstyled">
                                                <li><a href="12-department-one.html">{{__('messages.ParkingServices')}}</a></li>
                                                <li><a href="13-department-two.html">{{__('messages.CashierService')}} </a></li>
                                                <li><a href="13-department-two.html">{{__('messages.Otherservices')}} </a></li>
                                            </ul>
                                        </li>
                                                                               
                                       
                                        <li><a>Faq <i class="fa fa-angle-right"></i></a>
                                            <ul class="dropdown2 list-unstyled">
											    <li><a href="20-faq-one.html">{{__('messages.FAQRegistrationContainer')}} </a></li>
                                                <li><a href="20-faq-one.html">{{__('messages.ContainerParkingFAQ')}}</a></li>
                                                <li><a href="21-faq-two.html">{{__('messages.PaymentFAQ')}}</a></li>
											
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li class="list-inline-item"><a>Pelayanan <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="{{url('/Depot_Parkir')}}">{{__('messages.ParkingDepot')}}</a></li>
                                        <li><a href="{{url('Pencucian_Kontainer')}}">{{__('messages.ContainerWashing')}}</a></li>
                                        <li><a href="{{url('/Perbaikan')}}">{{__('messages.Repair')}}</a></li>
                                        <li><a href="{{url('/Pergerakan_Kontainer')}}">{{__('messages.ContainerMovement')}} </a></li>
										<li><a href="{{url('/Kantin')}}">{{__('messages.Canteen')}} </a></li>
                                        
                                    </ul>
                                </li>
                                <li class="list-inline-item"><a href="{{url('/Kontak')}}">Contact</i></a>
                                    
                                </li>
                                <li class="list-inline-item mega-menu"><a>Agenda <i class="fa fa-angle-down"></i></a>
                                    <div class="mega-box">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="q-link">
                                                    <h6>Quick LInks</h6>
                                                    <div class="link-box">
                                                        <a href="{{url('/appdashboard')}}">{{__('messages.ContainerManagementSystem')}}</a>
                                                        <a href="">{{__('messages.WashingManagementSystem')}}</a>
                                                        <a href="">{{__('messages.RepairManagementSystem')}}</a>
                                                        <a href="">{{__('messages.HumanResourceSystem')}} </a>
                                                       
																						
                                                    </div>
				
											
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="lt-news">
                                                    <h6>Latest News</h6>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="assets/images/mega-img-1.jpg" alt="">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>System Parkir Digital.</p>
                                                            <span>Mar 22, 2024</span>
                                                        </div>
                                                    </div>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="assets/images/mega-img-2.jpg" alt="">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>System Parkir Digital.</p>
                                                            <span>Mar 22, 2024</span>
                                                        </div>
                                                    </div>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="assets/images/mega-img-5.jpg" alt="">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>System Parkir Digital.</p>
                                                            <span>Mar 22, 2024</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="m-dept">
                                                    <h6>Departments</h6>
                                                    <div class="dept-box">
                                                        <a href="">{{__('messages.Commissioner')}}</a>
                                                        <a href="">{{__('messages.PresidentDirector')}}</a>
                                                        <a href="">{{__('messages.GeneralManagerofMarketing')}}</a>
                                                        <a href="">{{__('messages.GeneralManagerofHR')}}</a>
                                                        <a href="">{{__('messages.GeneralManagerofOperations')}}</a>
                                                        <a href="">{{__('messages.GeneralManagerofFreightForwarding')}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="m-doc">
                                                    <h6>Our Officer</h6>
                                                    <div class="m-slider owl-carousel">
                                                        <div class="slider-item">
                                                            <img src="assets/images/m-doc-1.png" alt="" class="img-fluid">
                                                            <p> David White</p>
                                                        </div>
                                                        <div class="slider-item">
                                                            <img src="assets/images/m-doc-2.png" alt="" class="img-fluid">
                                                            <p> Sunita Patel</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo Area -->

        <!-- Mobile Menu -->
        <section class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <a href=""><img src="assets/images/logo.png" alt=""></a>
                                <a href=""><i class="fa fa-bell-o"></i></a>
                                <ul class="list-unstyled">
                                    <li><a href="">{{__('messages.Home')}}</a>
                                        <ul class="list-unstyled">
                                            
                                        </ul>
								
                                </li>
                                    </li>
                                    <li><a >{{__('messages.Profile')}}</a></li>
                                    <li><a href="{{url('/Tentang_Kami')}}">{{__('messages.AboutUs')}}</a></li>
                                    <li><a href="{{url('/Struktur_Organisasi')}}">{{__('messages.Organizationalstructure')}}</a></li>
																	   
                                    <li><a href="">{{__('messages.ContainerDepot')}}</a></li>
                               
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Mobile Menu -->

    <div class="main-content">
      @yield('content')
    </div>

        <!-- Footer Section -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="findus">
                            <h4>Find Us</h4>
                            <p>belum ada komentar.</p>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-map-marker"></i>Jakarta Cotainer Service</li>
                                <li><i class="fa fa-envelope"></i>adminbizlog@bidzlog.co.id</li>
                                <li><i class="fa fa-phone"></i>+1 908 875 7678</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="qlink">
                            <h4>Quick Links</h4>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right"></i><a href="">{{__('messages.Information')}}</a></li>
                                <li><i class="fa fa-angle-right"></i><a href="">{{__('messages.ParkingLocation')}}</a></li>
                                <li><i class="fa fa-angle-right"></i><a href="">{{__('messages.WashingContainers')}}</a></li>
                                <li><i class="fa fa-angle-right"></i><a href="">{{__('messages.Repair')}}</a></li>
                                <li><i class="fa fa-angle-right"></i><a href="">{{__('messages.Payment')}}</a></li>
                                <li><i class="fa fa-angle-right"></i><a href="">{{__('messages.Canteen')}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="tpost">
                            <h4>Latest Posts</h4>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-twitter"></i>Lorem ipsum dolor sit amet, consec... <a href="">https://bh.com/</a></li>
                                <li><i class="fa fa-twitter"></i>Lorem ipsum dolor sit amet, consec... <a href="">https://bh.com/</a></li>
                                <li><i class="fa fa-twitter"></i>Lorem ipsum dolor sit amet, consec... <a href="">https://bh.com/</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="newsletter">
                            <h4>Newsletter</h4>
                            <form action="#">
                                <input type="text" name="name" placeholder="Your Name" required>
                                <input type="text" name="email" placeholder="Your Email" required>
                                <button type="submit">Register</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="f-menu text-center">
                            <ul class="menu list-unstyled list-inline">
                                <li class="list-inline-item"><a href="">Home</a></li>
                                <li class="list-inline-item"><a href="">About</a></li>
                                <li class="list-inline-item"><a href="">Service</a></li>
                                <li class="list-inline-item"><a href="">forwarder</a></li>
                               
                                <li class="list-inline-item"><a href="">Contact</a></li>
                            </ul>
                            <p>Copyright &copy; 2024 | Designed With <i class="fa fa-heart"></i> by <a href="#" target="_blank">Bidzlog.co.id</a></p>
                            <ul class="social list-unstyled list-inline">
                                <li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-youtube"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="back-to-top text-center">
                            <a data-scroll href="#btt"><img src="assets/images/backtotop.png" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Section -->

        <!-- =========================================
        JavaScript Files
        ========================================== -->

        <!-- jQuery JS -->
        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

        <!-- Bootstrap -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/assets/bootstrap.min.js"></script>

        <!-- Wow Animation -->
        <script src="assets/js/wow.min.js"></script>

        <!-- Owl Slider -->
        <script src="assets/js/owl.carousel.min.js"></script>

        <!-- Date Picker -->
        <script src="assets/js/moment.min.js"></script>
        <script src="assets/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Isotope -->
        <script src="assets/js/isotope.pkgd.min.js"></script>

        <!-- Magnific PopUp -->
        <script src="assets/js/magnific-popup.min.js"></script>

        <!-- Counter Up -->
        <script src="assets/js/counterup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>

        <!-- Smooth Scroll -->
        <script src="assets/js/smooth-scroll.js"></script>

        <!-- Syotimer -->
        <script src="assets/js/assets/jquery.syotimer.min.js"></script>

        <!-- Mean Menu -->
        <script src="assets/js/jquery.meanmenu.min.js"></script>

        <!-- Form Validation -->
        <script src="assets/js/form.js"></script>

        <!-- Custom JS -->
        <script src="assets/plugins.js"></script>
		<script src="assets/custom.js"></script>
    </body>
</html>
