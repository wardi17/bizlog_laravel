@extends('conten_app.layouts.template')

@section('content')
 <!-- MAIN -->
    <div class="main">

      <!-- MAIN CONTENT -->
      <div class="main-content">

        <div class="content-heading">
          
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item"><a href="#">Parent</a></li>
              <li class="breadcrumb-item active">Current</li>
            </ol>
          </nav>
        </div>

          <!-- FILTER COLUMN -->
         <div style="display: none;">  
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Column Filter Enabled</h3>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="datatable-column-filter" class="table">
                  <thead class="thead-light">
                    <tr>
                      <th>Browser</th>
                      <th>Operating System</th>
                      <th>Visits</th>
                    </tr>
                  </thead>
                  
                </table>
              </div>
            </div>
          </div>
          </div>
          <!-- END FILTER COLUMN --ini tdk boleh di hapus pasti error>


        

          <!-- BASIC DATATABLE -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Datatable with Default Features</h3>
            </div>
            <div class="card-body">

                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" title="Add"
                                    data-target="#addKendaraanModal">
                                    <span class="ti-plus"></span>
                                </button>
<!--
                 <a href="{{ route('kendaraan.create') }}" class="btn btn-primary mb-3"><span class="ti-plus"></span>Add</a>

            @if (session('success'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: '{{ session("success") }}',
                        showConfirmButton: false,
                        timer: 2000
                    });
                </script>
            @endif
                -->
              <div class="table-responsive">
                <table id="datatable-basic" class="table table-hover table-bordered">
                  <thead class="thead-light">
                        <tr> <th></th>
                            <th>ID</th>
                            <th>Nomor Plat</th>
                            <th>Jenis Kendaraan</th>
                            <th>Waktu Masuk</th>
                            <th>Waktu Keluar</th>
                            <th>Biaya Parkir</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kendaraans as $kendaraan)
                        <tr>
                             <td>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" title="view"
                                    data-target="#viewKendaraanModal" 
                                    data-id="{{ $kendaraan->id_kendaraan }}"
                                    data-nomor-plat="{{ $kendaraan->nomor_plat }}"
                                    data-jenis-kendaraan="{{ $kendaraan->jenis_kendaraan }}"
                                    data-waktu-masuk="{{ $kendaraan->waktu_masuk }}"
                                    data-waktu-keluar="{{ $kendaraan->waktu_keluar }}"
                                    data-biaya-parkir="{{ $kendaraan->biaya_parkir }}">
                                    <span class="ti-book"></span>
                                </button>

                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" title="Update"
                                    data-target="#editKendaraanModal"
                                    data-id="{{ $kendaraan->id_kendaraan }}"
                                    data-nomor-plat="{{ $kendaraan->nomor_plat }}"
                                    data-jenis-kendaraan="{{ $kendaraan->jenis_kendaraan }}"
                                    data-waktu-masuk="{{ $kendaraan->waktu_masuk }}"
                                    data-waktu-keluar="{{ $kendaraan->waktu_keluar }}"
                                    data-biaya-parkir="{{ $kendaraan->biaya_parkir }}">
                                    <span class="ti-pencil-alt"></span>
                                </button>
                             <form action="{{ route('kendaraan.destroy', $kendaraan) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Yakin ingin menghapus?')" title="Delete"><span class="ti-trash"></span>
                            </td>
                            <td>{{ $kendaraan->id_kendaraan }}</td>
                            <td>{{ $kendaraan->nomor_plat }}</td>
                            <td>{{ $kendaraan->jenis_kendaraan }}</td>
                            <td>{{ $kendaraan->waktu_masuk }}</td>
                            <td>{{ $kendaraan->waktu_keluar ?? 'Belum keluar' }}</td>
                            <td>Rp {{ number_format($kendaraan->biaya_parkir, 0, ',', '.') }}</td>
                           

                                
                        </tr>
                        @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- END BASIC DATATABLE -->

<!-- Modal add Kendaraan -->
<div class="modal fade" id="addKendaraanModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Kendaraan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('kendaraan.update', $kendaraan) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nomor_plat">Nomor Plat</label>
                            <input type="text" name="nomor_plat" class="form-control" id="nomor_plat"
                                value="" required>
                            @error('nomor_plat')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="jenis_kendaraan">Jenis Kendaraan</label>
                            <input type="text" name="jenis_kendaraan" class="form-control" id="jenis_kendaraan"
                                value="" required>
                            @error('jenis_kendaraan')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="waktu_masuk">Waktu Masuk</label>
                            <input type="datetime-local" name="waktu_masuk" class="form-control" id="waktu_masuk"
                                value="" required>
                            @error('waktu_masuk')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="waktu_keluar">Waktu Keluar</label>
                            <input type="datetime-local" name="waktu_keluar" class="form-control" id="waktu_keluar"
                                value="">
                            @error('waktu_keluar')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="biaya_parkir">Biaya Parkir</label>
                            <input type="number" name="biaya_parkir" class="form-control" id="biaya_parkir"
                                value="">
                            @error('biaya_parkir')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Lihat  Kendaraan -->
<div class="modal fade" id="viewKendaraanModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Kendaraan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tbody>
                        <tr><th>ID</th><td>{{ $kendaraan->id_kendaraan }}</td></tr>
                        <tr><th>Nomor Plat</th><td>{{$kendaraan->nomor_plat}}</td></tr>
                        <tr><th>Jenis Kendaraan</th><td>{{$kendaraan->jenis_kendaraan}}</td></tr>
                        <tr><th>Waktu Masuk</th><td >{{$kendaraan->waktu_masuk}}</td></tr>
                        <tr><th>Waktu Keluar</th><td>{{$kendaraan->waktu_keluar}}</td></tr>
                        <tr><th>Biaya Parkir</th><td>Rp {{ number_format($kendaraan->biaya_parkir, 0, ',', '.') }} </td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Kendaraan -->
<div class="modal fade" id="editKendaraanModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Kendaraan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('kendaraan.update', $kendaraan) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nomor_plat">Nomor Plat</label>
                            <input type="text" name="nomor_plat" class="form-control" id="nomor_plat"
                                value="{{ old('nomor_plat', $kendaraan->nomor_plat) }}" required>
                            @error('nomor_plat')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="jenis_kendaraan">Jenis Kendaraan</label>
                            <input type="text" name="jenis_kendaraan" class="form-control" id="jenis_kendaraan"
                                value="{{ old('jenis_kendaraan', $kendaraan->jenis_kendaraan) }}" required>
                            @error('jenis_kendaraan')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="waktu_masuk">Waktu Masuk</label>
                            <input type="datetime-local" name="waktu_masuk" class="form-control" id="waktu_masuk"
                                value="{{ old('waktu_masuk', $kendaraan->waktu_masuk) }}" required>
                            @error('waktu_masuk')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="waktu_keluar">Waktu Keluar</label>
                            <input type="datetime-local" name="waktu_keluar" class="form-control" id="waktu_keluar"
                                value="{{ old('waktu_keluar', $kendaraan->waktu_keluar) }}">
                            @error('waktu_keluar')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="biaya_parkir">Biaya Parkir</label>
                            <input type="number" name="biaya_parkir" class="form-control" id="biaya_parkir"
                                value="{{ old('biaya_parkir', $kendaraan->biaya_parkir) }}">
                            @error('biaya_parkir')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Kendaraan</button>
                </div>
            </form>
        </div>
    </div>
</div>




        </div>
      </div>
      <!-- END MAIN CONTENT -->

@endsection

@push('scripts')
@endpush
