@extends('conten_app.layouts.template')

@section('content')
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

  <!-- BASIC DATATABLE -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Tarif Lolo</h3>
    </div>
    <div class="card-body">
      <button type="button" class="btn btn-primary btn-sm mb-4" data-toggle="modal" title="Add" data-target="#addtarif_loloModal">
      Add
      </button>
      <div class="table-responsive">
        <table id="datatable-basic" class="table table-bordered">
          <thead>
            <tr>
              <th>Action</th>
              <th>Id Tarif Lolo</th>
              <th>Id Depo</th>
              <th>Lolo Tipe</th>
              <th>Id Tarif_lolo</th>
              <th>Size</th>
              <th>Price Lolo</th>
              <th>Lolo Date</th>
              <th>Valuta</th>
              <th>Whosing Diterze</th>
              <th>Whosing Chemical</th>
              <th>Whosing Water</th>
              <th>Administration</th>
            </tr>
          </thead>
          <tbody>
            @if(isset($tarif_lolo) && !empty($tarif_lolo))
            @foreach ($tarif_lolo as $tarif_loloS)
              <tr>
                <td>
                  <!-- View Button -->
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" title="View" 
                    data-target="#viewtarif_loloModal" 
                    data-id-tarif-lolo="{{$tarif_lolos->id_tarif_lolo}}"
                    data-id-depo="{{$tarif_lolos->id_depo}}"
                    data-lolo-tipe="{{$tarif_lolos->lolo_tipe}}"
                    data-id-tarif_lolo="{{$tarif_lolos->id_tarif_lolo}}"
                    data-size="{{$tarif_lolos->size}}"
                    data-price-lolo="{{$tarif_lolos->price_lolo}}"
                    data-lolo-date="{{$tarif_lolos->lolo_date}}"
                    data-valuta="{{$tarif_lolos->valuta}}"
                    data-whosing-diterze="{{$tarif_lolos->whosing_diterze}}"
                    data-whosing-chemical="{{$tarif_lolos->whosing_chemical}}"
                    data-whosing-water="{{$tarif_lolos->whosing_water}}"
                    data-administration="{{$tarif_lolos->administration}}">
                     <span class="ti-book"></span>
                  </button>
                  <!-- Edit Button -->
                  <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" title="Edit"
                    data-target="#edittarif_loloModal"
                    data-id-tarif-lolo="{{$tarif_lolos->id_tarif_lolo}}"
                    data-id-depo="{{$tarif_lolos->id_depo}}"
                    data-lolo-tipe="{{$tarif_lolos->lolo_tipe}}"
                    data-id-tarif_lolo="{{$tarif_lolos->id_tarif_lolo}}"
                    data-size="{{$tarif_lolos->size}}"
                    data-price-lolo="{{$tarif_lolos->price_lolo}}"
                    data-lolo-date="{{$tarif_lolos->lolo_date}}"
                    data-valuta="{{$tarif_lolos->valuta}}"
                    data-whosing-diterze="{{$tarif_lolos->whosing_diterze}}"
                    data-whosing-chemical="{{$tarif_lolos->whosing_chemical}}"
                    data-whosing-water="{{$tarif_lolos->whosing_water}}"
                    data-administration="{{$tarif_lolos->administration}}">
                    <span class="ti-pencil-alt"></span>
                  </button>
                  <!-- Delete Form -->
                  <form action="{{ route('tarif_lolo.destroy', $tarif_lolos->tarif_lolo_id) }}" method="POST" style="display:inline-block;" title="Delete">
                    @csrf
                    @method('DELETE')
                    <button type="submit"  class="btn btn-primary btn-sm" onclick="return confirm('Are you sure?')">
                        <span class="ti-trash"></span>
                    </button>
                </form>
                 
                </td>
                <!-- Data Rows -->
                <td>{{ $tarif_lolos->id_tarif_lolo}}</td>
                <td>{{ $tarif_lolos->id_depo}}</td>
                <td>{{ $tarif_lolos->lolo_tipe}}</td>
                <td>{{ $tarif_lolos->id_tarif_lolo}}</td>
                <td>{{ $tarif_lolos->size}}</td>
                <td>{{ $tarif_lolos->price_lolo}}</td>
                <td>{{ $tarif_lolos->lolo_date}}</td>
                <td>{{ $tarif_lolos->valuta}}</td>
                <td>{{ $tarif_lolos->whosing_diterze}}</td>
                <td>{{ $tarif_lolos->whosing_chemical}}</td>
                <td>{{ $tarif_lolos->whosing_water}}</td>
                <td>{{ $tarif_lolos->administration}}</td>
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


        <!-- Modal Lihat  Pelayanan -->
        <div class="modal fade" id="viewtarif_loloModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Detail Tarif Lolo</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <table class="table">
                          <tbody>
                              <tr>
                                  <th>ID</th>
                                  <td>{{ $tarif_lolos->tarif_lolo_id }}</td>
                              </tr>
                              <tr>
                                  <th>Nama Tarif_lolo</th>
                                  <td>{{ $tarif_lolos->tarif_lolo_name }}</td>
                              </tr>
                              <tr>
                                  <th>Email</th>
                                  <td>{{ $tarif_lolos->email }}</td>
                              </tr>
                              <tr>
                                  <th>Nomer Telpon</th>
                                  <td>{{ $tarif_lolos->phone_number }}</td>
                              </tr>
                              <tr>
                                  <th>Alamat</th>
                                  <td>{{ $tarif_lolos->address }}</td>
                              </tr>
                              <tr>
                                  <th>Kota</th>
                                  <td>{{ $tarif_lolos->city }}</td>
                              </tr>
                              <tr>
                                  <th>Kode Pos</th>
                                  <td>{{ $tarif_lolos->pos_code }}</td>
                              </tr>
                              <tr>
                                  <th>Negara</th>
                                  <td>{{ $tarif_lolos->country }}</td>
                              </tr>
                              <tr>
                                  <th>Status</th>
                                  <td>{{ $tarif_lolos->status_active }}</td>
                              </tr>
                              <tr>
                                  <th>ontact_personal</th>
                                  <td>{{ $tarif_lolos->contact_personal }}</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>


          <!-- Edit Depo Modal -->
  <div class="modal fade" id="edittarif_loloModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Edit Tarif LOLO</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <form action="{{ route('tarif_lolo.update',$tarif_lolos) }}" method="POST">
                      @csrf
                      @method('PUT')
                      <div class="modal-body">
                      <div class="row">
                                  <div hidden class="col-md-6 mb-3">
                                      <label for="tarif_lolo_id">tarif_lolo_id</label>
                                      <input type="text" name="tarif_lolo_id" class="form-control" id="tarif_lolo_id"
                                          value="{{ old('tarif_lolo_id', $tarif_lolos->tarif_lolo_id) }}" required>
                                      @error('tarif_lolo_id')
                                      <div class="text-danger mt-1">{{ $message }}</div>
                                      @enderror
                                  </div>
                                  <div class="col-md-6 mb-3">
                                      <label for="tarif_lolo_name">Nama Tarif_lolo</label>
                                      <input type="text" name="tarif_lolo_name" class="form-control"
                                          id="tarif_lolo_name"
                                          value="{{ old('tarif_lolo_name', $tarif_lolos->tarif_lolo_name) }}" required>
                                      @error('tarif_lolo_name')
                                      <div class="text-danger mt-1">{{ $message }}</div>
                                      @enderror
                                  </div>

                                  <div class="col-md-6 mb-3">
                                      <label for="email">Email</label>
                                      <input type="email" name="email" class="form-control" id="email"
                                          value="{{ old('email', $tarif_lolos->email) }}" required>
                                      @error('email')
                                      <div class="text-danger mt-1">{{ $message }}</div>
                                      @enderror
                                  </div>
                                  <div class="col-md-6 mb-3">
                                      <label for="phone_number">Nomer Telpon</label>
                                      <input type="number" name="phone_number" class="form-control" id="phone_number"
                                          value="{{ old('phone_number', $tarif_lolos->phone_number) }}" required>
                                      @error('phone_number')
                                      <div class="text-danger mt-1">{{ $message }}</div>
                                      @enderror
                                  </div>
                                  <div class="col-md-6 mb-3">
                                      <label for="address">Alamat</label>
                                      <textarea type="text" name="address" class="form-control" id="address"
                                          value="{{ old('address', $tarif_lolos->address) }}" required>{{ ($tarif_lolos->address)}}</textarea>
                                      @error('address')
                                      <div class="text-danger mt-1">{{ $message }}</div>
                                      @enderror
                                  </div>
                                  <div class="col-md-6 mb-3">
                                      <label for="city">Kota</label>
                                      <input type="text" name="city" class="form-control" id="city"
                                          value="{{ old('city', $tarif_lolos->city) }}" required>
                                      @error('city')
                                      <div class="text-danger mt-1">{{ $message }}</div>
                                      @enderror
                                  </div>
                                  <div class="col-md-6 mb-3">
                                      <label for="pos_code">Kode Post</label>
                                      <input type="text" name="pos_code" class="form-control" id="pos_code"
                                          value="{{ old('pos_code', $tarif_lolos->pos_code) }}" required>
                                      @error('pos_code')
                                      <div class="text-danger mt-1">{{ $message }}</div>
                                      @enderror
                                  </div>
                                  <div class="col-md-6 mb-3">
                                      <label for="country">Negara</label>
                                      <input type="text" name="country" class="form-control" id="country"
                                          value="{{ old('country', $tarif_lolos->country) }}" required>
                                      @error('country')
                                      <div class="text-danger mt-1">{{ $message }}</div>
                                      @enderror
                                  </div>
                                  <div class="col-md-6 mb-3">
                                      <label for="status_active">Status</label>
                                      <select value="{{ old('status_active', $tarif_lolos->status_active) }}"
                                          name="status_active" class="form-control" id="status_active">
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
                                          id="contact_personal"
                                          value="{{ old('contact_personal', $tarif_lolos->contact_personal) }}"
                                          required>
                                      @error('contact_personal')
                                      <div class="text-danger mt-1">{{ $message }}</div>
                                      @enderror
                                  </div>
                                  <div class="col-md-6 mb-3">
                                      <label for="registration_date"> Tanggal Registration</label>
                                      <input type="datetime-local" name="registration_date" class="form-control"
                                          id="registration_date"
                                          value="{{ old('registration_date', $tarif_lolos->registration_date) }}"
                                          required>
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
    <!-- END MAIN CONTENT -->

@endsection

@push('scripts')
@endpush















  <!-- Modal addtarif_loloModal -->
  <div class="modal fade" id="addtarif_loloModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add tarif_lolo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('tarif_lolo.store') }}" method="POST">
          @csrf
          <div class="modal-body">
            <div class="form-group">
              <label for="id_tarif_lolo">Id Tarif Lolo</label>
              <input type="number" name="id_tarif_lolo" class="form-control" required>
          </div>
  
          <div class="form-group">
              <label for="id_depo">Id Depo</label>
              <input type="text" name="id_depo" class="form-control" required>
          </div>
  
          <div class="form-group">
              <label for="lolo_tipe">Lolo Tipe</label>
              <input type="text" name="lolo_tipe" class="form-control">
          </div>
  
          <div class="form-group">
              <label for="id_tarif_lolo">Id Tarif_lolo</label>
              <input type="text" name="id_tarif_lolo" class="form-control">
          </div>
  
          <div class="form-group">
              <label for="size">Size</label>
              <input type="number" name="size" class="form-control">
          </div>
  
          <div class="form-group">
              <label for="price_lolo">Price Lolo</label>
              <input type="number" name="price_lolo" class="form-control">
          </div>
  
          <div class="form-group">
              <label for="lolo_date">Lolo Date</label>
              <input type="date" name="lolo_date" class="form-control">
          </div>
  
          <div class="form-group">
              <label for="valuta">Valuta</label>
              <input type="text" name="valuta" class="form-control">
          </div>
  
          <div class="form-group">
              <label for="whosing_diterze">Whosing Diterze</label>
              <input type="text" name="whosing_diterze" class="form-control">
          </div>
  
          <div class="form-group">
              <label for="whosing_chemical">Whosing Diterze</label>
              <input type="text" name="whosing_diterze" class="form-control">
          </div>
  
          <div class="form-group">
              <label for="whosing_water">Whosing Water</label>
              <input type="text" name="whosing_water" class="form-control">
          </div>
  
          <div class="form-group">
              <label for="administration">Administration</label>
              <input type="text" name="administration" class="form-control">
          </div>
  
            <!-- Tambahkan form fields di sini -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal viewtarif_loloModal -->
  <div class="modal fade" id="viewtarif_loloModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">View Tarif Lolo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table">
            <tbody>
              <tr><th>Id tarif_lolo</th><td id="view-id-tarif-lolo"></td></tr>
              <tr><th>Id Depo</th><td id="view-id-depo"></td></tr>
              <tr><th>Lolo Tipe</th><td id="view-lolo-tipe"></td></tr>
              <tr><th>Id Tarif_lolo</th><td id="view-id-tarif_lolo"></td></tr>
              <tr><th>Size</th><td id="view-size"></td></tr>
              <tr><th>Price Lolo</th><td id="view-price-lolo"></td></tr>
              <tr><th>Lolo Date</th><td id="view-lolo-date"></td></tr>
              <tr><th>Valuta</th><td id="view-valuta"></td></tr>
              <tr><th>Whosing Diterze</th><td id="view-whosing_diterze"></td></tr>
              <tr><th>Whosing Chemical</th><td id="view-whosing_chemical"></td></tr>
              <tr><th>Whosing Water</th><td id="view-whosing-water"></td></tr>
              <tr><th>Administration</th><td id="view-administration"></td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

 </div>
</div>
@endsection
