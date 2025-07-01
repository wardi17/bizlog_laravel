
@extends('layouts.template')

@section('content')
 <!-- MAIN -->

<!-- Breadcrumb Area -->
        <section class="breadcrumb-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Depot Parkir</h2>
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="">Beranda</a></li>
                            <li class="list-inline-item"><i class="fa fa-long-arrow-right"></i>>Depot Parkir</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Area -->

        <!-- Welcome Area -->
        <section class="welcome-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="welcome-box">
                            <h4>Depot Parkir BidzLog</h4>
                            <img src="public/assets/images/heartbeat.png" alt="">
                            <p>1. Kontainer  sudah terregistrasi<br>
2. Kontainer memiliki nomor body nya<br>
3. pada saat Kontainer masuk gerbang .akan dilakukan foto plat nomor dan nomor body Kontainer<br>
4.nomor plat nomor&body Kontainer akan di bandingkan dengan data di server
5. jika ada ,gerbang akan terbuka dan sistem akan mengirimkan alamat map parkir Kontainer ke hp sopir ..<br>
6. layanan yg di berikan Kontainer cuci bersih<br>
7. atau di lakuka perbaikan body Kontainer<br>
8.sudah tahap 6 &7 dilakukan ,Kontainer akan di letakan di tepat parkir sesuai dengan data diserver.<br>
9. perhitungan biaya... yg d lakukan  servis & biaya pakir sesua lama parkir<br>

10. pembayaran ada yg cash ada yg transfer dari customer pemilik Kontainer.<br>
11. Kontainer akan di ambil jika validasi bembayaran sudah ok<br>
         <a href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-image">
                            <video width="640" height="340" autoplay loop muted>
										<source src="public/assets/images/video/mobilescan.mp4" type="video/mp4">
										Your browser does not support the video tag.
									</video>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Welcome Area -->

    <!-- END MAIN CONTENT -->

@endsection

@push('scripts')
@endpush   
