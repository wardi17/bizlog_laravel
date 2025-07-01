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
                                    data-target="#addPelayaranModal">
                                    <span class="ti-plus"></span>
                             </button>
              <div class="table-responsive">
                <table id="datatable-basic" class="table table-hover table-bordered">
                  <thead class="thead-light">
                        <tr> <th></th>
                            <th>ID</th>
                            <th>Nama Pelayaran</th>
                            <th>Email</th>
                            <th>Nomer Telpon</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>Pos Kode</th>
                            <th>country</th>
                            <th>Status</th>
                            <th>Kontak Pribadi</th>
                            <th>Tanggal Daftar</th>


                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($pelayaran) && !empty($pelayaran))
                        @foreach ($pelayaran as $pelayarans)
                        <tr>
                            <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        title="view" data-target="#viewPelayaranModal"
                                        data-pelayaran-id="{{ $pelayarans->pelayaran_id}}"
                                        data-pelayaran-name="{{$pelayarans->pelayaran_name}}"
                                        data-email="{{$pelayarans->email}}"
                                        data-phone-number="{{$pelayarans->phone_number}}"
                                        data-address="{{$pelayarans->address }}"
                                        data-city="{{$pelayarans->city }}"
                                        data-pos-code="{{$pelayarans->pos_code}}"
                                        data-country="{{$pelayarans->country}}"
                                        data-status-active="{{$pelayarans->status_active}}"
                                        data-registration-date="{{$pelayarans->registration_date}}"
                                        data-contact-personal="{{$pelayarans->contact_personal}}">
                                        <span class="ti-book"></span>
                                    </button>
                                           <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        title="Update" data-target="#editPelayaranModal"
                                        data-pelayaran-id="{{ $pelayarans->pelayaran_id}}"
                                        data-pelayaran-name="{{$pelayarans->pelayaran_name}}"
                                        data-email="{{$pelayarans->email}}"
                                        data-phone-number="{{$pelayarans->phone_number}}"
                                        data-address="{{$pelayarans->address }}"
                                        data-city="{{$pelayarans->city }}"
                                        data-pos-code="{{$pelayarans->pos_code}}"
                                        data-country="{{$pelayarans->country}}"
                                        data-status-active="{{$pelayarans->status_active}}"
                                        data-registration-date="{{$pelayarans->registration_date}}"
                                        data-contact-personal="{{$pelayarans->contact_personal}}">
                                        <span class="ti-pencil-alt"></span>
                                    </button>
                                    <form action="{{ route('pelayaran.destroy', $pelayarans->pelayaran_id) }}" method="POST" style="display:inline-block;" title="Delete">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"  class="btn btn-primary btn-sm" onclick="return confirm('Are you sure?')">
                                            <span class="ti-trash"></span>
                                        </button>
                                    </form>
                            </td>
                            <td>{{$pelayarans->pelayaran_id }}</td>
                            <td>{{$pelayarans->pelayaran_name }}</td>
                            <td>{{$pelayarans->email }}</td>
                            <td>{{$pelayarans->phone_number }}</td>
                            <td>{{$pelayarans->address }}</td>
                            <td>{{$pelayarans->city }}</td>
                            <td>{{$pelayarans->pos_code }}</td>
                            <td>{{$pelayarans->country }}</td>
                            <td>{{$pelayarans->status_active }}</td>
                            <td>{{$pelayarans->contact_personal }}</td>
                            <td>{{$pelayarans->registration_date }}</td>

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
<div class="modal fade" id="addPelayaranModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Pelayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('pelayaran.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                                    <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="pelayaran_name">Nama Pelayaran</label>
                                    <input type="text" name="pelayaran_name" class="form-control" id="pelayaran_name"
                                        value="" required>
                                    @error('pelayaran_name')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" value="" required>
                                    @error('email')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone_number">Nomer Telpon</label>
                                    <input type="number" name="phone_number" class="form-control" id="phone_number"
                                        value="" required>
                                    @error('phone_number')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="address">Alamat</label>
                                    <textarea type="text" name="address" class="form-control" id="address" value=""
                                        required></textarea>
                                    @error('address')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="city">Kota</label>
                                    <input type="text" name="city" class="form-control" id="city" value="" required>
                                    @error('city')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="pos_code">Kode Post</label>
                                    <input type="text" name="pos_code" class="form-control" id="pos_code" value=""
                                        required>
                                    @error('pos_code')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="country">Negara</label>
                                    <input type="text" name="country" class="form-control" id="country" value=""
                                        required>
                                    @error('country')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="status_active">Status</label>
                                    <select name="status_active" class="form-control" id="status_active">
                                        <option value="Y">Y</option>
                                        <option value="N">N</option>

                                    </select>
                                    @error('Status')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="contact_personal">Kontak Pribadi</label>
                                    <input type="text" name="contact_personal" class="form-control"
                                        id="contact_personal" value="" required>
                                    @error('contact_personal')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="registration_date"> Tanggal Registration</label>
                                    <input type="date" name="registration_date" class="form-control"
                                        id="registration_date" value="" required>
                                    @error('registration_date')
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
        <div class="modal fade" id="viewPelayaranModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detail Pelayaran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td id="modal-pelayaran-id"></td>
                                </tr>
                                <tr>
                                    <th>Nama Pelayaran</th>
                                    <td id="modal-pelayaran-name"></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td id="modal-email"></td>
                                </tr>
                                <tr>
                                    <th>Nomer Telpon</th>
                                    <td id="modal-phone-number"></td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td id="modal-address"></td>
                                </tr>
                                <tr>
                                    <th>Kota</th>
                                   <td id="modal-city"></td>
                                </tr>
                                <tr>
                                    <th>Kode Pos</th>
                                    <td id="modal-pos-code"></td>

                                </tr>
                                <tr>
                                    <th>Negara</th>
                                    <td id="modal-country"></td>

                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td id="modal-status-active"></td>

                                </tr>
                                <tr>
                                    <th>contact personal</th>
                                    <td id="modal-contact-personal"></td>

                                </tr>
                                <tr>
                                    <th>registration date</th>
                                    <td id="modal-registration-date"></td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


            <!-- Edit Depo Modal -->
    <div class="modal fade" id="editPelayaranModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Pelayaran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('pelayaran.update',$pelayarans) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                        <div class="row">
                            <div hidden class="col-md-6 mb-3">
                                <label for="modal-pelayaran-id">Pelayaran ID</label>
                                <input type="text" name="pelayaran_id" class="form-control" id="modal-pelayaran-id" required>
                                @error('pelayaran_id')
                                <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="pelayaran_name">Nama Pelayaran</label>
                                        <input type="text" name="pelayaran_name" class="form-control"  id="modal-pelayaran-name" required >
                                        @error('pelayaran_name')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="modal-email"  required>
                                        @error('email')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="phone_number">Nomer Telpon</label>
                                        <input type="number" name="phone_number" class="form-control" id="modal-phone-number"
                                             required>
                                        @error('phone_number')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="address">Alamat</label>
                                        <textarea type="text" name="address" class="form-control" id="modal-address"
                                           required></textarea>
                                        @error('address')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="city">Kota</label>
                                        <input type="text" name="city" class="form-control" id="modal-city" required>
                                        @error('city')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="pos_code">Kode Post</label>
                                        <input type="text" name="pos_code" class="form-control" id="modal-pos-code"   required>
                                        @error('pos_code')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="country">Negara</label>
                                        <input type="text" name="country" class="form-control" id="modal-country"  required>
                                        @error('country')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="status_active">Status</label>
                                        <select name="status_active" class="form-control" id="modal-status_active">
                                            <option value="Y">Y</option>
                                            <option value="N">N</option>
                                        </select>
                                        @error('status_active')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="contact_personal">Kontak Pribadi</label>
                                        <input type="text" name="contact_personal" class="form-control"
                                            id="modal-contact-personal" required>
                                        @error('contact_personal')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="registration_date"> Tanggal Registration</label>
                                        <input type="date" name="registration_date" class="form-control" id="modal-registration-date"   required>
                                        @error('registration_date')
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

    $('#viewPelayaranModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Tombol yang diklik
        var modal = $(this);

        // Ambil data dari atribut tombol
        var pelayaranId = button.data('pelayaran-id');
        var pelayaranName = button.data('pelayaran-name');
        var email = button.data('email');
        var phonenumber = button.data('phone-number');
        var address = button.data('address');
        var city = button.data('city');
        var posCode = button.data('pos-code');
        var country = button.data('country');
        var statusActive = button.data('status-active');
        var contactpersonal = button.data('contact-personal');
        var registrationDate = button.data('registration-date');

        modal.find('#modal-pelayaran-id').text(pelayaranId);
        modal.find('#modal-pelayaran-name').text(pelayaranName);
        modal.find('#modal-email').text(email);
        modal.find('#modal-phone-number').text(phonenumber);
        modal.find('#modal-address').text(address);
        modal.find('#modal-city').text(city);
        modal.find('#modal-pos-code').text(posCode);
        modal.find('#modal-country').text(country);
        modal.find('#modal-status-active').text(statusActive);
        modal.find('#modal-contact-personal').text(contactpersonal);
        modal.find('#modal-registration-date').text(registrationDate);
    });


    $('#editPelayaranModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Tombol yang diklik
    var modal = $(this);

    // Ambil data dari atribut tombol
    var pelayaranId = button.data('pelayaran-id');
    var pelayaranName = button.data('pelayaran-name');
    var email = button.data('email');
    var phonenumber = button.data('phone-number');
    var address = button.data('address');
    var city = button.data('city');
    var posCode = button.data('pos-code');
    var country = button.data('country');
    var statusActive = button.data('status-active');
    var contactpersonal = button.data('contact-personal');
    var registrationdate = button.data('registration-date');

    // Isi nilai ke input
    modal.find('#modal-pelayaran-id').val(pelayaranId);
    modal.find('#modal-pelayaran-name').val(pelayaranName);
    modal.find('#modal-email').val(email);
    modal.find('#modal-phone-number').val(phonenumber);
    modal.find('#modal-address').val(address);
    modal.find('#modal-city').val(city);
    modal.find('#modal-pos-code').val(posCode);
    modal.find('#modal-country').val(country);
    modal.find('#modal-status-active').val(statusActive);
    modal.find('#modal-contact-personal').val(contactpersonal);
    modal.find('#modal-registration-date').val(registrationdate);
});



});
</script>

@endsection
