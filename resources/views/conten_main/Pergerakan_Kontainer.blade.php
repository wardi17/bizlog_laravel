@extends('layouts.template')
 @section('content')
<!-- MAIN -->

<!-- Breadcrumb Area -->
<section class="breadcrumb-area text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Pergerakan Kontainer</h2>
                <ul class="list-unstyled list-inline">
                    <li class="list-inline-item"><a href="">Beranda</a></li>
                    <li class="list-inline-item">
                        <i class="fa fa-long-arrow-right"></i>>Pergerakan Kontainer
                    </li>
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
            <div class="col-md-12">
                <div class="welcome-box">
                    <h4>Pergerakan Kontainer</h4>
                    <img src="public//assets/images/heartbeat.png" alt="" />
                    <p style="text-align:justify;">
                        <img src="public/assets/images/gambar1.jpeg" alt="trucking" style=" float: right;
                            margin: 10px; width: 400px;">

                       <span style="color: #0080ff;"><b><span>Pergerakan Kontainer</b></span>
                       Pergerakan kontainer melibatkan berbagai tahapan dari titik asal hingga tujuan akhir.
                       

                    </p>
                    <h6>Booking dan Pemesanan</h6>
                    <p>
                        &nbsp;Pengirim atau eksportir mengajukan permintaan untuk memesan kontainer kepada perusahaan logistik atau perusahaan pelayaran.
                        Pengirim mengisi dokumen terkait, seperti Bill of Lading dan manifest, yang mencakup rincian barang, volume, berat, dan rute pengiriman.

                    </p>
                    <h6>Pengambilan Barang di Lokasi Pengirim</h6>
                    <p>
                        &nbsp;Kontainer kosong dikirim ke lokasi pengirim untuk dimuat.
                        Proses pemuatan dilakukan sesuai dengan standar keamanan, biasanya menggunakan crane atau forklift untuk menghindari kerusakan pada barang.
                        Setelah muatan selesai, kontainer disegel dan disiapkan untuk transportasi.
                    </p>
                    <h6>Transportasi ke Pelabuhan</h6>
                    <p>
                        &nbsp; Biaya dan Efisiensi Waktu: Efisiensi sangat penting dalam proses perbaikan.
                         Perusahaan sering mencari cara untuk mempercepat perbaikan tanpa mengorbankan kualitas,
                         karena waktu yang lama di bengkel bisa mengurangi ketersediaan kontainer untuk digunakan.
                         Biaya perbaikan juga perlu dipertimbangkan agar tetap ekonomis.
                    </p>
                    <p>
                        &nbsp;Kontainer yang sudah terisi diangkut menggunakan truk atau kereta ke pelabuhan ekspor.
                        Dokumen pelengkap untuk ekspor, seperti surat izin dan asuransi, harus dilengkapi sebelum kontainer memasuki pelabuhan.
                    </p>
                     <img src="public/assets/images/gambar2.jpeg" alt="trucking" style=" float: left;
                            margin: 10px; width: 400px;">

                    <p>
                        &nbsp;
                        Pemeriksaan Akhir: Setelah perbaikan, kontainer harus melewati pemeriksaan akhir untuk memastikan bahwa kerusakan telah diperbaiki dengan baik dan kontainer siap untuk digunakan kembali.
                         Pemeriksaan ini biasanya mencakup pengujian ketahanan dan keamanan.
                    </p>
                    <h6>Proses di Pelabuhan</h6>
                    <p>
                        &nbsp;Setibanya di pelabuhan, kontainer menjalani pemeriksaan oleh otoritas bea cukai untuk memastikan isi sesuai dengan dokumen.
                        Kontainer ditempatkan di area penumpukan (stacking area) sambil menunggu jadwal pengiriman.
                    </p>
                    <h6>Pengangkutan Melalui Kapal</h6>
                    <p>
                     &nbsp;Kontainer dipindahkan ke kapal dan diatur dalam posisi yang stabil.
                    Selama pengiriman, kondisi kontainer dipantau untuk menjaga keamanan barang
                    </p>
                    <h6>Kedatangan di Pelabuhan Tujuan</h6>
                    <p>
                    Kontainer dibongkar dari kapal dan dipindahkan ke area pabean untuk pemeriksaan oleh otoritas setempat.
                    Dokumen seperti manifest import harus disesuaikan untuk mendapatkan izin masuk.
                    </p>
                    <h6>Distribusi ke Lokasi Tujuan Akhir</h6>
                    <p>
                    Setelah lolos pemeriksaan, kontainer diangkut menggunakan truk atau kereta ke lokasi penerima.
                    Penerima melakukan proses pemuatan dan pemeriksaan untuk memastikan barang sesuai dengan pesanan.
                    </p>
                    <h6>Pengembalian Kontainer Kosong</h6>
                    <p>Setelah barang dibongkar, kontainer kosong dikembalikan ke depo atau kembali ke pelabuhan untuk persiapan pengiriman berikutnya.
                    Proses ini melibatkan banyak pihak, termasuk perusahaan pelayaran, agen pengiriman, otoritas bea cukai, perusahaan logistik, dan tentu saja pengirim dan penerima</p>
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
