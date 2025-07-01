@extends('layouts.template')

@section('content')
 <!-- MAIN -->
<style>
    contact-container {
            max-width: 500px;
            width: 100%;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }
        .map-container {
            margin-top: 20px;
        }
        iframe {
            width: 100%;
            height: 350px;
            border: 0;
        }
</style>
<!-- Breadcrumb Area -->
        <section class="breadcrumb-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Kontak</h2>
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="">Beranda</a></li>
                            <li class="list-inline-item"><i class="fa fa-long-arrow-right"></i> Kontak</li>
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
                            <h4>Kontak</h4>
                            <img src="public/assets/images/heartbeat.png" alt="">
                        
                            <a href="">Read More</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- End Welcome Area -->

        <!-- Maps Section -->
        <section class="contact-map-area">
            <div class="container">
                <h4 class="text-center">Lokasi Kami</h4>
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.89226316452627!2d106.82623019547434!3d-6.2272677480444285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3fb2d546e7b%3A0x78d76147a4d14d67!2sMenara%20Rajawali%2C%20Jl.%20DR.%20Ide%20Anak%20Agung%20Gde%20Agung%2C%20RT.5%2FRW.2%2C%20Kuningan%2C%20Kuningan%20Tim.%2C%20Kecamatan%20Setiabudi%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012950!5e0!3m2!1sid!2sid!4v1730298883869!5m2!1sid!2sid&zoom=12"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        <!-- End Maps Section -->

    <!-- END MAIN CONTENT -->

@endsection

@push('scripts')
@endpush  
