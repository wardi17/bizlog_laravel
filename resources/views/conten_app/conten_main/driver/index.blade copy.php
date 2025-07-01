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
          <!-- END FILTER COLUMN --ini tdk boleh di hapus pasti error -->



   <!-- BASIC DATATABLE -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Pelayaran</h3>
            </div>
            <div class="card-body">

                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" title="Add"
                                    data-target="#addDriverModal">
                                    <span class="ti-plus"></span>
                             </button>
              <div class="table-responsive">
                <table id="datatable-basic" class="table table-hover table-bordered">
                  <thead class="thead-light">
                        <tr> <th></th>
                            <th>ID</th>
                            <th>Driver Name</th>
                            <th>ID Pelayaran</th>
                            <th>Phone Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($driver) && !empty($driver))
                        @foreach ($driver as $drivers)
                        <tr>
                            <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        title="view" data-target="#viewDriverModal"
                                        data-id-driver="{{ $drivers->id_diver}}"
                                        data-Driver-name="{{$drivers->Driver_name}}"
                                        data-id-pelayaran="{{$drivers->id_pelayaran}}"
                                        data-phone-number="{{$drivers->phone_number}}"
                                       >
                                        <span class="ti-book"></span>
                                    </button>
                                           <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        title="Update" data-target="#editDriverModal"
                                        data-id-driver="{{$drivers->id_diver}}"
                                        data-Driver-name="{{$drivers->Driver_name}}"
                                        data-id-pelayaran="{{$drivers->id_pelayaran}}"
                                        data-phone-number="{{$drivers->phone_number}}"
                                        >
                                        <span class="ti-pencil-alt"></span>
                                    </button>
                                    <form action="{{ route('driver.destroy', $drivers->id_driver) }}" method="POST" style="display:inline-block;" title="Delete">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"  class="btn btn-primary btn-sm" onclick="return confirm('Are you sure?')">
                                            <span class="ti-trash"></span>
                                        </button>
                                    </form>
                            </td>
                            <td>{{$drivers->id_driver }}</td>
                            <td>{{$drivers->Driver_name }}</td>
                            <td>{{$drivers->id_pelayaran }}</td>
                            <td>{{$drivers->phone_number }}</td>


                        </tr>
                        @endforeach
                        @else
                        <p>No data available</p>
                    @endif
                    </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- END BASIC DATATABLE -->

                    <!-- Modal add delivery_orders -->
<div class="modal fade" id="addDriverModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Driver</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('driver.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                                    <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="Driver_name">Driver Name</label>
                                    <input type="text" name="Driver_name" class="form-control" id="Driver_name"
                                        value="" required>
                                    @error('Driver_name')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div  class="col-md-6 mb-3">
                                        <label>ID Pelayaran</label>
                                        
                                        <select name="id_pelayaran" id="id_pelayaran" class="form-control" style="width: 30%;" required>
                                            @forelse($pelayaran as $pelayarans)
                                                <option value="{{$pelayarans->pelayaran_name}}" >{{$pelayarans->pelayaran_name}}</option>
                                                @empty
                                                <option value="">No data available</option>
                                            @endforelse
                                        </select>
                                    </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone_number">Nomer Telpon</label>
                                    <input type="number" name="phone_number" class="form-control" id="phone_number"
                                        value="" required>
                                    @error('phone_number')
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


        <!-- Modal Lihat  Pelayanan -->
        <div class="modal fade" id="viewDriverModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detail Driver</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td id="modal-id-driver"></td>
                                </tr>
                                <tr>
                                    <th>Nama Driver</th>
                                    <td id="modal-Driver-name"></td>
                                </tr>
                                <tr>
                                    <th>ID Pelayaran</th>
                                    <td id="modal-id-pelayaran"></td>
                                </tr>
                                <tr>
                                    <th>Nomer Telpon</th>
                                    <td id="modal-phone-number"></td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


            <!-- Edit Depo Modal -->
    <div class="modal fade" id="editDriverModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Driver</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('driver.update',$driver) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                        <div class="row">
                            <div hidden class="col-md-6 mb-3">
                                <label for="modal-id-driver">ID Driver</label>
                                <input type="text" name="id_driver" class="form-control" id="modal-id-driver" required>
                                @error('id_driver')
                                <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="modal-Driver-name">Nama Driver</label>
                                        <input type="text" name="Driver_name" class="form-control"  id="modal-Driver-name" required >
                                        @error('Driver_name')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div  class="col-md-6 mb-3">
                                        <label>ID Pelayaran</label>
                                        <select name="id_pelayaran" id="id_pelayaran" class="form-control" style="width: 30%;" required>
                                            @forelse($pelayaran as $pelayarans)
                                                <option value="{{$pelayarans->pelayaran_name}}" >{{$pelayarans->pelayaran_name}}</option>
                                                @empty
                                                <option value="">No data available</option>
                                            @endforelse
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="phone_number">Nomer Telpon</label>
                                        <input type="number" name="phone_number" class="form-control" id="modal-phone-number"
                                             required>
                                        @error('phone_number')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                         </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>

   </div>
</div>
      <!-- END MAIN CONTENT assets_multti/js_plugin/ -->

      <script src="assets_multi/js_plugin/jquery-3.6.0.min.js"></script>
      <script src="assets_multi/js_plugin/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function () {

    $('#viewDriverModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Tombol yang diklik
        var modal = $(this);

        // Ambil data dari atribut tombol
        var IDdriver = button.data('id-driver');
        var Drivername = button.data('Driver-name');
        var IDpelayaran = button.data('id-pelayaran');
        var phonenumber = button.data('phone-number');


        modal.find('#modal-id-driver').text(IDdriver);
        modal.find('#modal-Driver-name').text(Drivername);
        modal.find('#modal-id-pelayaran').text(IDpelayaran);
        modal.find('#modal-phone-number').text(phonenumber);

    });


    $('#editDriverModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Tombol yang diklik
    var modal = $(this);

    // Ambil data dari atribut tombol
         var IDdriver = button.data('id-driver');
        var Drivername = button.data('Driver-name');
        var IDpelayaran = button.data('id-pelayaran');
        var phonenumber = button.data('phone-number');


        modal.find('#modal-id-driver').text(IDdriver);
        modal.find('#modal-Driver-name').text(Drivername);
        modal.find('#modal-id-pelayaran').text(IDpelayaran);
        modal.find('#modal-phone-number').text(phonenumber);
});



});
</script>

@endsection
