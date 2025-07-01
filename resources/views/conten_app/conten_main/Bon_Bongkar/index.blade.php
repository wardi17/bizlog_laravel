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
        <h3 class="card-title"> Bon Bongkar</h3>
      </div>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-sm mb-4" data-toggle="modal" title="Add" data-target="#addbon_bongkarModal">
          Add
        </button>
        <div class="table-responsive">
          <table id="datatable-basic" class="table table-bordered">
            <thead>
              <tr>
                <th>Actions</th>
                <th>ID</th>
                <th> Depo</th>
                <th>ID bar Code</th>
                <th>Container No</th>
                <th>ID Container</th>
                <th>ID Pelayaran</th>
                <th>ID Consignee</th>
                <th>ID Driver</th>
                <th>ID Vehicle</th>
                <th>Date In</th>
                <th>ID Paydate</th>
                <th>Remak</th>
              </tr>
            </thead>
            <tbody>
              @foreach($bon_bongkar as $bon_bongkars)
                <tr>
                  <td>
                    <!-- View Button -->
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" title="View" 
                      data-target="#viewbon_bongkarModal" 
                      data-id-bon-bongkar="{{$bon_bongkars->id_bon_bongkar}}" 
                      data-id-depo="{{$bon_bongkars->id_depo}}" 
                      data-id-bar-code="{{$bon_bongkars->id_bar_code}}" 
                      data-id-container="{{$bon_bongkars->id_container}}" 
                      data-id-pelayaran="{{$bon_bongkars->id_pelayaran}}" 
                      data-id-consignee="{{$bon_bongkars->id_consignee}}" 
                      data-id-driver="{{$bon_bongkars->id_driver}}" 
                      data-id-vehicle="{{$bon_bongkars->id_vehicle}}" 
                      data-date-in="{{$bon_bongkars->date_in}}" 
                      data-id-paydate="{{$bon_bongkars->id_paydate}}"
                      data-remak="{{$bon_bongkars->remak}}"
                      >
                      View
                    </button>
                    <!-- Edit Button -->
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" title="Edit"
                      data-target="#Editbon_bongkarModal" 
                      data-id-bon-bongkar="{{$bon_bongkars->id_bon_bongkar}}" 
                      data-id-depo="{{$bon_bongkars->id_depo}}" 
                      data-id-bar-code="{{$bon_bongkars->id_bar_code}}" 
                      data-id-container="{{$bon_bongkars->id_container}}" 
                      data-id-pelayaran="{{$bon_bongkars->id_pelayaran}}" 
                      data-id-consignee="{{$bon_bongkars->id_consignee}}" 
                      data-id-driver="{{$bon_bongkars->id_driver}}" 
                      data-id-vehicle="{{$bon_bongkars->id_vehicle}}" 
                      data-date-in="{{$bon_bongkars->date_in}}" 
                      data-id-paydate="{{$bon_bongkars->id_paydate}}"
                      data-remak="{{$bon_bongkars->remak}}"
                      >
                      Edit
                    </button>
                    <!-- Delete Form -->
                    <form action="{{ route('bon_bongkar.destroy', $bon_bongkars->id_bon_bongkar) }}" method="POST" style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                  </td>
                  <!-- Data Rows -->
                  <td>{{ $bon_bongkars->id_bon_bongkar }}</td>
                  <td>{{ $bon_bongkars->id_depo}}</td>
                  <td>{{ $bon_bongkars->id_bar_code }}</td>
                  <td>{{ $bon_bongkars->container_no}}</td>
                  <td>{{ $bon_bongkars->id_container }}</td>
                  <td>{{ $bon_bongkars->id_pelayaran }}</td>
                  <td>{{ $bon_bongkars->id_consignee }}</td>
                  <td>{{ $bon_bongkars->id_driver }}</td>
                  <td>{{ $bon_bongkars->id_vehicle }}</td>
                  <td>{{ $bon_bongkars->date_in }}</td>
                  <td>{{ $bon_bongkars->id_paydate }}</td>
                  <td>{{ $bon_bongkars->remak }}</td>
                  
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

<!-- Modal addbon_bongkarModal -->
<div class="modal fade" id="addbon_bongkarModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add  Bon Bongkar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('bon_bongkar.store') }}" method="POST">
        @csrf
        <div class="modal-body">
                              <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="id_depo">ID Depo</label>
                                    <input type="text" name="id_depo" class="form-control" id="id_depo"
                                        value="" required>
                                    @error('id_depo')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="id_bar_code">ID Bar Code</label>
                                    <input type="text" name="id_bar_code" class="form-control" id="id_bar_code" value="" required>
                                    @error('id_bar_code')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="id_container">ID Container</label>
                                    <input type="text" name="id_container" class="form-control" id="id_container"
                                        value="" required>
                                    @error('id_container')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="id_pelayaran">ID Pelayaran</label>
                                    <input type="text" name="id_pelayaran" class="form-control" id="id_pelayaran" value=""
                                        required>
                                    @error('id_pelayaran')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="id_consignee">ID Consignee</label>
                                    <input type="text" name="id_consignee" class="form-control" id="id_consignee" value="" required>
                                    @error('id_consignee')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="id_driver">ID Driver</label>
                                    <input type="text" name="id_driver" class="form-control" id="id_driver" value=""
                                        required>
                                    @error('id_driver')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="id_vehicle">ID Vehicle</label>
                                    <input type="text" name="id_vehicle" class="form-control" id="id_vehicle" value=""
                                        required>
                                    @error('id_vehicle')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            
                                <div class="col-md-6 mb-3">
                                    <label for="date_in">Date In</label>
                                    <input type="date" name="date_in" class="form-control"
                                        id="date_in" value="" required>
                                    @error('date_in')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="id_paydate">ID Paydate</label>
                                    <input type="date" name="id_paydate" class="form-control"
                                        id="id_paydate" value="" required>
                                    @error('id_paydate')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                              <div class="col-md-6 mb-3">
                                    <label for="id_paydate">ID Paydate</label>
                                    <input type="date" name="id_paydate" class="form-control"
                                        id="id_paydate" value="" required>
                                    @error('id_paydate')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            <div class="col-md-6 mb-3">
                                    <label for="remak">Remak</label>
                                    <textarea type="date" name="remak" class="form-control"
                                        id="remak" value="" required></textarea>
                                    @error('remak')
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

<!-- Modal viewbon_bongkarModal -->
<div class="modal fade" id="viewbon_bongkarModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">View  Bon Bongkar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table">
          <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $bon_bongkars->id_bon_bongkar ?? ''}}</td>
            </tr>
             <tr>
                <th>ID Depo</th>
                <td>{{$bon_bongkars->id_depo}}</td>
              </tr>
              <tr>
                  <th>ID Bar Code</th>
                  <td>{{$bon_bongkars->id_bar_code}}</td>
              </tr>
              <tr>
                  <th>ID Container</th>
                  <td>{{$bon_bongkars->id_container }}</td>
              </tr>
               <tr>
                  <th>ID Pelayaran</th>
                  <td>{{$bon_bongkars->id_pelayaran}}</td>
              </tr>              <tr>
                  <th>ID Consignee</th>
                  <td>{{$bon_bongkars->id_consignee}}</td>
              </tr>              <tr>
                  <th>ID Driver</th>
                  <td>{{$bon_bongkars->id_driver}}</td>
              </tr>              <tr>
                  <th>ID Vehicle</th>
                  <td>{{$bon_bongkars->id_vehicle}}</td>
              </tr>
              <tr>
                  <th>ID Date In</th>
                  <td>{{$bon_bongkars->->date_in}}</td>
              </tr>              
              <tr>
                  <th>ID Paydate</th>
                  <td>{{$bon_bongkars->id_paydate}}</td>
              </tr> 
              <tr>
                  <th>Remak</th>
                  <td>{{$bon_bongkars->remak}}</td>
              </tr>            
            <!-- Add other rows similarly -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Edit bon_bongkar Modal -->
 <div class="modal fade" id="Editbon_bongkarModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Bon Bongkar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('bon_bongkar.update',$bon_bongkars) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                        <div class="row">
                                    <div hidden class="col-md-6 mb-3">
                                        <label for="id_bon_bongkar">id_bon_bongkar</label>
                                        <input type="text" name="id_bon_bongkar" class="form-control" id="id_bon_bongkar"
                                            value="{{ old('id_bon_bongkar', $bon_bongkars->id_bon_bongkar) }}" required>
                                        @error('id_bon_bongkar')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="id_depo">ID Depo</label>
                                        <input type="text" name="id_depo" class="form-control"
                                            id="id_depo"
                                            value="{{ old('id_depo', $bon_bongkars->id_depo) }}" required>
                                        @error('id_depo')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="id_bar_code">ID Bar Code</label>
                                        <input type="text" name="id_bar_code" class="form-control" id="id_bar_code"
                                            value="{{ old('id_bar_code', $bon_bongkars->id_bar_code) }}" required>
                                        @error('id_bar_code')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="id_container">ID Container</label>
                                        <input type="text" name="id_container" class="form-control" id="id_container"
                                            value="{{ old('id_container', $bon_bongkars->id_container) }}" required>
                                        @error('id_container')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="id_pelayaran">ID Pelayaran</label>
                                        <textarea type="text" name="id_pelayaran" class="form-control" id="id_pelayaran"
                                            value="{{ old('id_pelayaran', $bon_bongkars->id_pelayaran) }}" required>{{ ($bon_bongkars->id_pelayaran)}}</textarea>
                                        @error('id_pelayaran')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="id_consignee">ID Consignee</label>
                                        <input type="text" name="id_consignee" class="form-control" id="id_consignee"
                                            value="{{ old('id_consignee', $bon_bongkars->id_consignee) }}" required>
                                        @error('id_consignee')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="id_driver">ID Driver</label>
                                        <input type="text" name="id_driver" class="form-control" id="id_driver"
                                            value="{{ old('id_driver', $bon_bongkars->id_driver) }}" required>
                                        @error('id_driver')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="id_vehicle">ID Vehicle</label>
                                        <input type="text" name="id_vehicle" class="form-control" id="id_vehicle"
                                            value="{{ old('id_vehicle', $bon_bongkars->id_vehicle) }}" required>
                                        @error('id_vehicle')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="date_in">Date In</label>
                                        <input type="date" name="date_in" class="form-control"
                                            id="date_in"
                                            value="{{ old('date_in', $bon_bongkars->date_in) }}"
                                            required>
                                        @error('date_in')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="id_paydate">ID PayDate</label>
                                        <input type="date" name="id_paydate" class="form-control"
                                            id="id_paydate"
                                            value="{{ old('id_paydate', $bon_bongkars->id_paydate) }}"
                                            required>
                                        @error('id_paydate')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                      <div class="col-md-6 mb-3">
                                        <label for="remak">Remak</label>
                                        <textarea type="text" name="remak" class="form-control"
                                            id="remak"
                                            value="{{ old('remak', $bon_bongkars->remak) }}"
                                            required></textarea>
                                        @error('remak')
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
@endsection
