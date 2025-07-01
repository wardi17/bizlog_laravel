@extends('layouts.template')

@section('content')
 <!-- MAIN -->
 
 
        <!-- Slider Area -->
        <section class="home-slider">
            <div class="slider-wrapper owl-carousel">
                <div class="slider-item slider1">
                    <div class="slider-table">
                        <div class="slider-tablecell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-md-12">
									     <div class="slider-heading wow fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                            <h1><span>Menjadi penyedia layanan logistik terintegrasi unggulan dengan layanan berkualitas tinggi.</span></h1>
                                        </div>
                                        <div class="slider-para wow fadeInUp" style="color:red;" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                            <p>Menyediakan kontribusi positif untuk stakeholders .</p>
                                        </div>
                                         <a href="">Baca Selanjutnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item slider2">
                    <div class="slider-table">
                        <div class="slider-tablecell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-4 col-md-12 text-right">
                                        <div class="slider-heading wow fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                            <h1><span>Humanis Berbudaya dan Terpercaya Care dan Commitmen</span></h1>
                                        </div>
                                        <div class="slider-para wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                            <p>Terus berinovasi, mendorong konsistensi dan transparansi di seluruh rantai pasokan Indonesia dengan memanfaatkan teknologi</p>
                                        </div>
                                        <div class="slider-btn wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                            <a href="">Baca Selanjutnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="slider-item slider3">
                    <div class="slider-table">
                        <div class="slider-tablecell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-4 col-md-12 text-right">
                                        <div class="slider-heading wow fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                            <h1><span>Mencapai Target Pelayanan kepuasan Pelanggan</span></h1>
                                        </div>
                                        <div class="slider-para wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                            <p>Menyediakan servis dengan kualitas terbaik untuk pelanggan</p>
                                        </div>
                                        <div class="slider-btn wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                            <a href="">Baca Selanjutnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="slider-item slider4">
                    <div class="slider-table">
                        <div class="slider-tablecell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-4 col-md-12 text-right">
                                        <div class="slider-heading wow fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                            <h1><span>Pengelolaan Sumber Daya dan Potensi Karyawan</span></h1>
                                        </div>
                                        <div class="slider-para wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                            <p>Membuka kesempatan dan partisipasi aktif pelaku Sumber Daya manusia dalam mengembangkan pelayanan pelanggan.</p>
                                        </div>
                                        <div class="slider-btn wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                            <a href="">Baca Selanjutnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
            </div>
        </section>
        <!-- End Slider Area -->

        <!-- Service Area -->
        <section class="service-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="service-top text-center">
                            <h4>Isu  Forwarder </h4>
                            <img src="{{asset('public/assets/images/heartbeat.png')}}" alt="">
                            <p>Mengkolaborasikan Upaya Percepatan Logistik dan sistem digital.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 services-lft">
                        <div class="service-box d-flex flex-row-reverse text-right">
                            <div class="box-icon">
                                
                                <span><img src="{{asset('public/assets/images/service-1.png')}}" alt=""></span>
                            </div>
                            <div class="box-content">
                                <h6>Logistic Officer</h6>
                                <p>Mengatur ketersediaan barang dan pendistribusiannya ke konsumen. Tugasnya juga menyampaikan informasi
								supply chain kepada manajer logistik dan mitra bisnis perusahaan.</p>
                            </div>
                        </div>
                        <div class="service-box d-flex flex-row-reverse text-right">
                            <div class="box-icon">
                                <span><img src="{{asset('public/assets/images/service-2.png')}}" alt=""></span>
                            </div>
                            <div class="box-content">
                                <h6>Spesialis logistik</h6>
                                <p>Mengarahkan operasi pergudangan dan mengawasi pengiriman. Spesialis logistik juga disebut ahli logistik.</p>
                            </div>
                        </div>
                        <div class="service-box d-flex flex-row-reverse text-right">
                            <div class="box-icon">
                                <span><img src="{{asset('public/assets/images/service-3.png')}}" alt=""></span>
                            </div>
                            <div class="box-content">
                                <h6>Staff logistik</h6>
                                <p>Bertugas mengurus gudang, pendistribusian dan penyimpanan barang, menentukan lokasi pergudangan, 
								dan merencanakan sistem logistik perusahaan.</p>
                            </div>
                        </div>
                        <div class="service-box d-flex flex-row-reverse text-right">
                            <div class="box-icon">
                                <span><img src="{{asset('public/assets/images/service-4.png')}}" alt=""></span>
                            </div>
                            <div class="box-content">
                                <h6>24 Hours Service</h6>
                                <p>Lorem ipsum dolor sit amet, consectet commodi sit veniam adipisicing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-md-none d-lg-block">
                        <div class="service-image">
							<div class="containervideo">
								<div class="contentvideo">
									<video width="640" height="340" autoplay loop muted>
										<source src="{{asset('public/assets/images/video/bidzcakug.mp4')}}" type="video/mp4">
										Your browser does not support the video tag.
									</video>
								</div>
							</div>
						</div>
											</div>
                    <div class="col-lg-4 col-md-6 services-ryt">
                        <div class="service-box d-flex">
                            <div class="box-icon">
                                <span><img src="{{asset('public/assets/images/service-5.png')}}" alt=""></span>
                            </div>
                            <div class="box-content">
                                <h6>Manajer logistik</h6>
                                <p>Bertugas memecahkan masalah logistik, menjaga metrik tim, mengawasi proses logistik, dan mengarahkan kegiatan proses logistik.</p>
                            </div>
                        </div>
                        <div class="service-box d-flex">
                            <div class="box-icon">
                                <span><img src="{{asset('public/assets/images/service-6.png')}}" alt=""></span>
                            </div>
                            <div class="box-content">
                                <h6>Analis logistik</h6>
                                <p>Bertugas dalam proses pengiriman produk dan pasokan perusahaan. Tugasnya meliputi pengelolaan aktivitas rute, pelacakan, dan pengiriman.</p>
                            </div>
                        </div>
                        <div class="service-box d-flex">
                            <div class="box-icon">
                                <span><img src="{{asset('public/assets/images/service-7.png')}}" alt=""></span>
                            </div>
                            <div class="box-content">
                                <h6>Logistik </h6>
                                <p>manajemen aliran perpindahan barang dari titik asal ke titik konsumsi untuk memenuhi permintaan.</p>
                            </div>
                        </div>
                        <div class="service-box d-flex">
                            <div class="box-icon">
                                <span><img src="{{asset('public/assets/images/service-8.png')}}" alt=""></span>
                            </div>
                            <div class="box-content">
                                <h6>Forwarder</h6>
                                <p>perusahaan atau orang yang mengatur pengiriman barang dari produsen ke pelanggan, pasar, 
								</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Service Area -->

        <!-- Home About Area -->
			
        <section class="h-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="about-box">
						
                            <h4>Mengapa Anda Memilih Kami</h4>
                            <img src="{{asset('public/assets/images/heartbeat2.png')}}" alt="">
                            <p>Pengalaman dan Keahlian:

    Kami memiliki pengalaman bertahun-tahun dalam industri logistik dan forwarder, dengan keahlian yang mendalam dalam menangani pengiriman internasional maupun domestik.
	.
	Layanan Kustom yang Fleksibel:

    Kami menawarkan solusi logistik yang dapat disesuaikan dengan kebutuhan spesifik Anda, termasuk layanan pengiriman darat, laut, dan udara yang terintegrasi.
	
	Teknologi Terkini:

    Kami menggunakan teknologi canggih untuk melacak pengiriman secara real-time, memberikan visibilitas penuh dan ketenangan pikiran bagi pelanggan.
	
	Keamanan dan Asuransi:

    Keamanan barang Anda adalah prioritas kami, dan kami menyediakan opsi asuransi untuk melindungi pengiriman Anda dari potensi risiko selama transit.
	
	Pelayanan Pelanggan yang Responsif:

    Tim layanan pelanggan kami selalu siap membantu Anda 24/7, memastikan setiap pertanyaan atau masalah ditangani dengan cepat.
	</p>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><i class="fa fa-check-square-o"></i>Pengalaman dan Keahlian:</li>
                                <li class="list-inline-item"><i class="fa fa-check-square-o"></i>Layanan Kustom yang Fleksibel:.</li>
                            </ul>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><i class="fa fa-check-square-o"></i>Teknologi Terkini:.</li>
                                <li class="list-inline-item"><i class="fa fa-check-square-o"></i>Keamanan dan Asuransi:.</li>
                            </ul>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><i class="fa fa-check-square-o"></i>Pelayanan Pelanggan yang Responsif:</li>
                                <li class="list-inline-item"><i class="fa fa-check-square-o"></i>layanan berkualitas tinggi.</li>
                            </ul>
                        </div>
                    </div>
					
                    <div class="col-md-4">
					    
                        <div class="shedule-box">
						
                            <div class="open-hr">
                                <h6><i class="fa fa-clock-o"></i>Jam Buka</h6>
                                <ul class="list-unstyled">
                                    <li>Monday - Friday <span>8:30am - 9:00pm</span></li>
                                    <li>Saturday <span>10:30am - 2:30pm</span></li>
                                    <li>Sunday <span>10:00am - 5:00pm</span></li>
                                </ul>
                            </div>
                            <div class="help-box">
                                <h6><i class="fa fa-pencil-square-o"></i>Need Help?</h6>
                                <p>Lorem ipsum dolor sit amet, consecte Molestiae adipisic elit.</p>
                                <a href="">Make an Appointment</a>
                            </div>
                        </div>
                    </div>
					
                </div>
            </div>
        </section>
        <!-- End Home About Area -->

        <!-- Department Area -->
        <section class="department">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="department-top text-center">
                            <h4>Our Departments</h4>
                            <img src="{{asset('public/assets/images/heartbeat.png')}}" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint eius inventore magni quod voluptate, molestiae eos odio illo.</p>
                        </div>
                    </div>
					
					  
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4 nav">
                                <a class="nav-link active mr-4 mb-4" data-toggle="pill" href="#medicine">
                                    <img src="{{asset('public/assets/images/dep-1.png')}}" alt="">
                                    <p>Komisaris</p>
                                </a>
                                <a class="nav-link mb-4" data-toggle="pill" href="#cardio">
                                    <img src="{{asset('public/assets/images/dep-2.png')}}" alt="">
                                    <p>Direktur Utama</p>
                                </a>
                                <a class="nav-link mr-4 mb-4" data-toggle="pill" href="#neuro">
                                    <img src="{{asset('public/assets/images/dep-3.png')}}" alt="">
                                    <p>GM Marketing</p>
                                </a>
                                <a class="nav-link mb-4" data-toggle="pill" href="#gastro">
                                    <img src="{{asset('public/assets/images/dep-4.png')}}" alt="">
                                    <p>GM SDM</p>
                                </a>
                                <a class="nav-link mr-4 mb-4" data-toggle="pill" href="#urology">
                                    <img src="{{asset('public/assets/images/dep-5.png')}}" alt="">
                                    <p>GM Operasional</p>
                                </a>
                                <a class="nav-link mb-4" data-toggle="pill" href="#dental">
                                    <img src="{{asset('public/assets/images/dep-6.png')}}" alt="">
                                    <p>GM Farwader</p>
                                </a>
                                <a class="nav-link mr-4 mb-4" data-toggle="pill" href="#gyneco">
                                    <img src="{{asset('public/assets/images/dep-7.png')}}" alt="">
                                    <p>GM Parkir</p>
                                </a>
                                <a class="nav-link mb-4" data-toggle="pill" href="#child">
                                    <img src="{{asset('public/assets/images/dep-8.png')}}" alt="">
                                    <p>GM IT</p>
                                </a>
                            </div>
                            <div class="col-md-8 tab-content">
                                <div class="tab-pane fade show active" id="medicine" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12 box-heading">
                                            <h4>Forwarder</h4>
                                        </div>
                                        <div class="col-md-7 content-box">
                                            <p>Forwarder atau freight forwarder adalah perusahaan atau orang yang mengatur pengiriman barang dari produsen ke pelanggan, pasar, atau titik distribusi akhir. Forwarder juga dikenal sebagai forwarding agent. 
Forwarder biasanya menangani pengiriman barang dalam jumlah besar dan berat. 



                                            <span>Perbedaan Jasa Logistik dan Freight Forwarding</p>
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check"></i> Forwarder atau freight forwarder.</li>
                                                <li><i class="fa fa-check"></i> Forwarder atau freight forwarder.</li>
                                                <li><i class="fa fa-check"></i> Forwarder atau freight forwarder.</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-5 image-box">
                                            <img src="{{asset('public/assets/images/tab-1.jpg')}}" alt="" class="img-fluid">
                                            <a href="">Baca Selanjutnya</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="cardio" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12 box-heading">
                                            <h4>Penyimpanan Kontener</h4>
                                        </div>
                                        <div class="col-md-7 content-box">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quod labore animi ratione a. Facilis voluptatibus nesciunt voluptate, totam tempore quia culpa, reprehenderit harum reiciendis optio consequuntur odit possimus perferendis!
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, vitae facilis. Deserunt consequatur possimus ratione voluptate perspiciatis. Tempora excepturi illo reprehenderit delectus.</span>
                                            </p>
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check"></i> Komentar 1.</li>
                                                <li><i class="fa fa-check"></i> komentar 2.</li>
                                                <li><i class="fa fa-check"></i> komentar 3.</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-5 image-box">
                                            <img src="{{asset('public/assets/images/tab-2.jpg')}}" alt="" class="img-fluid">
                                            <a href="">Baca Selanjutnya</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="neuro" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12 box-heading">
                                            <h4>Neurology</h4>
                                        </div>
                                        <div class="col-md-7 content-box">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quod labore animi ratione a. Facilis voluptatibus nesciunt voluptate, totam tempore quia culpa, reprehenderit harum reiciendis optio consequuntur odit possimus perferendis!
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, vitae facilis. Deserunt consequatur possimus ratione voluptate perspiciatis. Tempora excepturi illo reprehenderit delectus.</span>
                                            </p>
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check"></i> Facilis voluptatibus nesciunt.</li>
                                                <li><i class="fa fa-check"></i> Consectetur adipisicing elit.</li>
                                                <li><i class="fa fa-check"></i> Deserunt consequatur.</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-5 image-box">
                                            <img src="{{asset('public/assets/images/tab-3.jpg')}}" alt="" class="img-fluid">
                                            <a href="">Baca Selanjutnya</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="gastro" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12 box-heading">
                                            <h4>Gastrology</h4>
                                        </div>
                                        <div class="col-md-7 content-box">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quod labore animi ratione a. Facilis voluptatibus nesciunt voluptate, totam tempore quia culpa, reprehenderit harum reiciendis optio consequuntur odit possimus perferendis!
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, vitae facilis. Deserunt consequatur possimus ratione voluptate perspiciatis. Tempora excepturi illo reprehenderit delectus.</span>
                                            </p>
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check"></i> Facilis voluptatibus nesciunt.</li>
                                                <li><i class="fa fa-check"></i> Consectetur adipisicing elit.</li>
                                                <li><i class="fa fa-check"></i> Deserunt consequatur.</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-5 image-box">
                                            <img src="{{asset('public/assets/images/tab-4.jpg')}}" alt="" class="img-fluid">
                                            <a href="">Baca Selanjutnya</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="urology" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12 box-heading">
                                            <h4>Urology</h4>
                                        </div>
                                        <div class="col-md-7 content-box">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quod labore animi ratione a. Facilis voluptatibus nesciunt voluptate, totam tempore quia culpa, reprehenderit harum reiciendis optio consequuntur odit possimus perferendis!
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, vitae facilis. Deserunt consequatur possimus ratione voluptate perspiciatis. Tempora excepturi illo reprehenderit delectus.</span>
                                            </p>
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check"></i> Facilis voluptatibus nesciunt.</li>
                                                <li><i class="fa fa-check"></i> Consectetur adipisicing elit.</li>
                                                <li><i class="fa fa-check"></i> Deserunt consequatur.</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-5 image-box">
                                            <img src="{{asset('public/assets/images/tab-5.jpg')}}" alt="" class="img-fluid">
                                            <a href="">Baca Selanjutnya</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="dental" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12 box-heading">
                                            <h4>Dental Care</h4>
                                        </div>
                                        <div class="col-md-7 content-box">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quod labore animi ratione a. Facilis voluptatibus nesciunt voluptate, totam tempore quia culpa, reprehenderit harum reiciendis optio consequuntur odit possimus perferendis!
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, vitae facilis. Deserunt consequatur possimus ratione voluptate perspiciatis. Tempora excepturi illo reprehenderit delectus.</span>
                                            </p>
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check"></i> Facilis voluptatibus nesciunt.</li>
                                                <li><i class="fa fa-check"></i> Consectetur adipisicing elit.</li>
                                                <li><i class="fa fa-check"></i> Deserunt consequatur.</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-5 image-box">
                                            <img src="{{asset('public/assets/images/tab-6.jpg')}}" alt="" class="img-fluid">
                                            <a href="">Baca Selanjutnya</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="gyneco" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12 box-heading">
                                            <h4>Gynecology</h4>
                                        </div>
                                        <div class="col-md-7 content-box">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quod labore animi ratione a. Facilis voluptatibus nesciunt voluptate, totam tempore quia culpa, reprehenderit harum reiciendis optio consequuntur odit possimus perferendis!
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, vitae facilis. Deserunt consequatur possimus ratione voluptate perspiciatis. Tempora excepturi illo reprehenderit delectus.</span>
                                            </p>
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check"></i> Facilis voluptatibus nesciunt.</li>
                                                <li><i class="fa fa-check"></i> Consectetur adipisicing elit.</li>
                                                <li><i class="fa fa-check"></i> Deserunt consequatur.</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-5 image-box">
                                            <img src="{{asset('public/assets/images/tab-7.jpg')}}" alt="" class="img-fluid">
                                            <a href="">Baca Selanjutnya</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="child" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12 box-heading">
                                            <h4>Child Care</h4>
                                        </div>
                                        <div class="col-md-7 content-box">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quod labore animi ratione a. Facilis voluptatibus nesciunt voluptate, totam tempore quia culpa, reprehenderit harum reiciendis optio consequuntur odit possimus perferendis!
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, vitae facilis. Deserunt consequatur possimus ratione voluptate perspiciatis. Tempora excepturi illo reprehenderit delectus.</span>
                                            </p>
                                            <ul class="list-unstyled">
                                                <li><i class="fa fa-check"></i> Facilis voluptatibus nesciunt.</li>
                                                <li><i class="fa fa-check"></i> Consectetur adipisicing elit.</li>
                                                <li><i class="fa fa-check"></i> Deserunt consequatur.</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-5 image-box">
                                            <img src="{{asset('public/assets/images/tab-8.jpg')}}" alt="" class="img-fluid">
                                            <a href="">Baca Selanjutnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Department Area -->

        <!-- Specialist Area -->
        <section class="specialist">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="specialist-top text-center">
                            <h4>Temui Profesional Kami</h4>
                            <img src="{{asset('public/assets/images/heartbeat.png')}}" alt="">
                            <p>Profesional forwarder, memainkan peran penting dalam rantai pasokan global, mengelola pengiriman barang dari titik asal ke tujuan akhir. Mereka bertindak sebagai perantara antara pengirim dan berbagai layanan transportasi, baik itu melalui udara, laut, darat, atau rel. </p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="owl-doctor owl-carousel">
                            <div class="carousel-content">
                                <img src="{{asset('public/assets/images/doc-1.png')}}" alt="" class="img-fluid">
                                <div class="doc-content text-center">
                                    <h5>Alex Jones</h5>
                                    <p>Profesional forwarder</p>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="carousel-content">
                                <img src="{{asset('public/assets/images/doc-2.png')}}" alt="" class="img-fluid">
                                <div class="doc-content text-center">
                                    <h5>Maria Perry</h5>
                                    <p>Profesional forwarder</p>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="carousel-content">
                                <img src="{{asset('public/assets/images/doc-3.png')}}" alt="" class="img-fluid">
                                <div class="doc-content text-center">
                                    <h5>David Jones</h5>
                                    <p>Profesional forwarder</p>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="carousel-content">
                                <img src="{{asset('public/assets/images/doc-4.png')}}" alt="" class="img-fluid">
                                <div class="doc-content text-center">
                                    <h5>Alisha Perry</h5>
                                    <p>Profesional forwarder</p>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Specialist Area -->

        <!-- Testimonial Area -->
        <section class="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial-top text-center">
                            <h4>Kata Customer Tentang Kami</h4>
                            <img src="{{asset('public/assets/images/heartbeat2.png')}}" alt="">
                            <p>Kami sangat puas dengan layanan perusahaan ini. Pengiriman tepat waktu dan tim mereka sangat responsif terhadap pertanyaan kami. Proses pengurusan dokumen juga sangat efisien. Sangat direkomendasikan!" – .</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="owl-testimonial owl-carousel">
                            <div class="testimonial-content text-center">
                                <img src="{{asset('public/assets/images/patient-1.jpg')}}" alt="" class="img-fluid">
                                <h5>Amily Brown</h5>
                                <span>Customer</span>
                                <p>Kami sangat puas dengan layanan [Nama Forwarder]. Pengiriman tepat waktu dan tim mereka sangat responsif terhadap pertanyaan kami. Proses pengurusan dokumen juga sangat efisien. Sangat direkomendasikan!" – .</p>
                            </div>
                            <div class="testimonial-content text-center">
                                <img src="{{asset('public/assets/images/patient-2.jpg')}}" alt="" class="img-fluid">
                                <h5>George Dabis</h5>
                                <span>Customer</span>
                                <p>Kami sangat puas dengan layanan [Nama Forwarder]. Pengiriman tepat waktu dan tim mereka sangat responsif terhadap pertanyaan kami. Proses pengurusan dokumen juga sangat efisien. Sangat direkomendasikan!" – .</p>
                            </div>
                            <div class="testimonial-content text-center">
                                <img src="{{asset('public/assets/images/patient-1.jpg')}}" alt="" class="img-fluid">
                                <h5>Amily Brown</h5>
                                <span>Customer</span>
                                <p>Kami sangat puas dengan layanan [Nama Forwarder]. Pengiriman tepat waktu dan tim mereka sangat responsif terhadap pertanyaan kami. Proses pengurusan dokumen juga sangat efisien. Sangat direkomendasikan!" – .</p>
                            </div>
                            <div class="testimonial-content text-center">
                                <img src="{{asset('public/assets/images/patient-2.jpg')}}" alt="" class="img-fluid">
                                <h5>George Dabis</h5>
                                <span>Customer</span>
                                <p>Kami sangat puas dengan layanan [Nama Forwarder]. Pengiriman tepat waktu dan tim mereka sangat responsif terhadap pertanyaan kami. Proses pengurusan dokumen juga sangat efisien. Sangat direkomendasikan!" – .</p>
                            </div>
                            <div class="testimonial-content text-center">
                                <img src="{{asset('public/assets/images/patient-1.jpg')}}" alt="" class="img-fluid">
                            </div>
                            <div class="testimonial-content text-center">
                                <img src="{{asset('public/assets/images/patient-2.jpg')}}" alt="" class="img-fluid">
                                <h5>Amily Brown</h5>
                                <span>Customer</span>
                                <p>Kami sangat puas dengan layanan [Nama Forwarder]. Pengiriman tepat waktu dan tim mereka sangat responsif terhadap pertanyaan kami. Proses pengurusan dokumen juga sangat efisien. Sangat direkomendasikan!" –                                 <h5>George Dabis</h5>
                                <span>Customer</span>
                                <p>Kami sangat puas dengan layanan [Nama Forwarder]. Pengiriman tepat waktu dan tim mereka sangat responsif terhadap pertanyaan kami. Proses pengurusan dokumen juga sangat efisien. Sangat direkomendasikan!" – .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonial Area -->

        <!-- Gallery Area -->
        <section class="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gallery-top text-center">
                            <h4>Gallery Kami</h4>
                            <img src="{{asset('public/assets/images/heartbeat.png')}}" alt="">
                            <p>Saat ini, semua orang menggunakan langkah mudah untuk mendapatkan keuntungan. Tentunya dengan memanfaatkan bisnis online sebagai salah satu pilihan.</p>
                        </div>
                    </div>
                    <div class="col-md-12">
					
    
                        <ul class="gallery-filter list-unstyled list-inline text-center">
                            <li class="list-inline-item active" data-filter="*">All</li>
                            <li class="list-inline-item" data-filter=".car">Air Freight</li>
                            <li class="list-inline-item" data-filter=".neur">Sea Freight</li>
                            <li class="list-inline-item" data-filter=".den">Inland Trucking</li>
                            <li class="list-inline-item" data-filter=".chi">Customs Brokerage</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="gallery-items row">
                            <div class="col-lg-3 col-md-4 grid-item car">
                                <div class="gallery-content">
                                    <img src="{{asset('public/assets/images/gallery-1.jpg')}}" alt="" class="img-fluid">
                                    <div class="fc-icon text-center">
                                        <a href="{{asset('public/assets/images/gallery-1.jpg')}}"><img src="{{asset('public/assets/images/focus.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 grid-item neur">
                                <div class="gallery-content">
                                    <img src="{{asset('public/assets/images/gallery-2.jpg')}}" alt="" class="img-fluid">
                                    <div class="fc-icon text-center">
                                        <a href="{{asset('public/assets/images/gallery-2.jpg')}}"><img src="{{asset('public/assets/images/focus.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 grid-item car">
                                <div class="gallery-content">
                                    <img src="{{asset('public/assets/images/gallery-3.jpg')}}" alt="" class="img-fluid">
                                    <div class="fc-icon text-center">
                                        <a href="{{asset('public/assets/images/gallery-3.jpg')}}"><img src="{{asset('public/assets/images/focus.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 grid-item neur">
                                <div class="gallery-content">
                                    <img src="{{asset('public/assets/images/gallery-4.jpg')}}" alt="" class="img-fluid">
                                    <div class="fc-icon text-center">
                                        <a href="{{asset('public/assets/images/gallery-4.jpg')}}"><img src="{{asset('public/assets/images/focus.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 grid-item den">
                                <div class="gallery-content">
                                    <img src="{{asset('public/assets/images/gallery-5.jpg')}}" alt="" class="img-fluid">
                                    <div class="fc-icon text-center">
                                        <a href="{{asset('public/assets/images/gallery-5.jpg')}}"><img src="{{asset('public/assets/images/focus.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 grid-item chi">
                                <div class="gallery-content">
                                    <img src="{{asset('public/assets/images/gallery-6.jpg')}}" alt="" class="img-fluid">
                                    <div class="fc-icon text-center">
                                        <a href="{{asset('public/assets/images/gallery-6.jpg')}}"><img src="{{asset('public/assets/images/focus.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 grid-item den">
                                <div class="gallery-content">
                                    <img src="{{asset('public/assets/images/gallery-7.jpg')}}" alt="" class="img-fluid">
                                    <div class="fc-icon text-center">
                                        <a href="{{asset('public/assets/images/gallery-7.jpg')}}"><img src="{{asset('public/assets/images/focus.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 grid-item chi">
                                <div class="gallery-content">
                                    <img src="{{asset('public/assets/images/gallery-8.jpg')}}" alt="" class="img-fluid">
                                    <div class="fc-icon text-center">
                                        <a href="{{asset('public/assets/images/gallery-8.jpg')}}"><img src="{{asset('public/assets/images/focus.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Gallery Area -->

        <!-- Counter Area -->
        <section class="counter-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="counter-box">
                            <img src="{{asset('public/assets/images/counter-1.png')}}" alt="" class="img-fluid">
                            <p class="counter">3729</p>
                            <h6>Happy Customers</h6>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box">
                            <img src="{{asset('public/assets/images/counter-2.png')}}" alt="" class="img-fluid">
                            <p class="counter">139</p>
                            <h6>Specialists</h6>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box">
                            <img src="{{asset('public/assets/images/counter-3.png')}}" alt="" class="img-fluid">
                            <p class="counter">124</p>
                            <h6>Ward Rooms</h6>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter-box">
                            <img src="{{asset('public/assets/images/counter-4.png')}}" alt="" class="img-fluid">
                            <p class="counter">337</p>
                            <h6>Cabins</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counter Area -->

        <!-- News & Events -->
        <section class="news">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="news-top text-center">
                            <h4>Berita & Acara Terbaru</h4>
                            <img src="{{asset('public/assets/images/heartbeat.png')}}" alt="">
                            <p>Dalam upaya meningkatkan visibilitas dan efisiensi dalam pengiriman barang, berbagai perusahaan logistik mulai mengadopsi teknologi Internet of Things (IoT).</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news-box">
                            <div class="news-image">
                                <a href=""><img src="{{asset('public/assets/images/news-1.jpg')}}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="news-heading d-flex">
                                <div class="news-date text-center">
                                    <p>25<br> Mar</p>
                                </div>
                                <div class="heading-box">
                                    <h6><a href="">Internet of Things .</a></h6>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="">Jhon Doe</a></li>
                                        <li class="list-inline-item"><i class="fa fa-commenting-o"></i><a href="">(<span>23</span>)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-content">
                                <p>Sensor IoT kini digunakan untuk memantau kondisi barang secara real-time, seperti suhu, kelembapan, dan lokasi geografis, yang sangat penting terutama untuk barang-barang sensitif seperti farmasi dan makanan. ...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news-box">
                            <div class="news-image">
                                <a href=""><img src="{{asset('public/assets/images/news-2.jpg')}}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="news-heading d-flex">
                                <div class="news-date text-center">
                                    <p>11<br> Apr</p>
                                </div>
                                <div class="heading-box">
                                    <h6><a href="">Acara: Konferensi Logistik Digital Asia 2024.</a></h6>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="">Jhon Doe</a></li>
                                        <li class="list-inline-item"><i class="fa fa-commenting-o"></i><a href="">(<span>23</span>)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-content">
                                <p>Dengan data yang dikumpulkan melalui sensor, perusahaan dapat membuat keputusan lebih cepat dan menghindari keterlambatan atau kerusakan barang....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news-box">
                            <div class="news-image">
                                <a href=""><img src="{{asset('public/assets/images/news-3.jpg')}}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="news-heading d-flex">
                                <div class="news-date text-center">
                                    <p>13<br> Apr</p>
                                </div>
                                <div class="heading-box">
                                    <h6><a href="">Penggunaan Drone untuk Pengiriman di Area Pedesaan.</a></h6>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item"><i class="fa fa-user-o"></i><a href="">Jhon Doe</a></li>
                                        <li class="list-inline-item"><i class="fa fa-commenting-o"></i><a href="">(<span>23</span>)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-content">
                                <p>Perusahaan e-commerce di Indonesia mulai melakukan uji coba penggunaan drone untuk mengirimkan paket ke wilayah pedesaan yang sulit dijangkau oleh kendaraan konvensional. Langkah ini diharapkan dapat mengatasi masalah keterlambatan pengiriman di daerah terpencil. Dengan menggunakan drone, pengiriman bisa dilakukan lebih cepat, terutama untuk barang-barang yang mendesak seperti obat-obatan. ...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End News & Events -->

 <!-- END MAIN CONTENT -->

@endsection

@push('scripts')
@endpush
