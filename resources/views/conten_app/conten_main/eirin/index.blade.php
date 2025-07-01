@extends('conten_app.layouts.app')

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
     <!-- BASIC DATATABLE -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Eir</h3>
            </div>
            <div class="card-body">

                            <button type="button" class="btn btn-primary btn-sm mb-4" data-toggle="modal" title="Add"
                                    data-target="#addEirInModal">
                                    Add
                                </button>


        <div class="table-responsive">

    <table id="datatable-basic" class="table table-bordered">
        <thead>
            <tr>
            <th></th>
                <th>ID</th>
                <th>ID Depo</th>
                <th>Bill Of Lading Number</th>
                <th>Customer</th>
                <th>Vesselvoy</th>
                <th>Ctr NO</th>
                <th>Date In</th>
                <th>Vechile NO</th>
                <th>Block Adv</th>
                <th>Remarks</th>


            </tr>
        </thead>
        <tbody>
            @foreach($eirins as $eirin)
                <tr>
                    <td>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" title="view"
                                    data-target="#viewEirInModal"
                                    data-eirin="{{$eirin->id_eir_in}}"
                                    data-id_depo="{{$eirin->id_depo}}"
                                    data-bill-of-lading-number="{{$eirin->id_eir_in}}"
                                    data-customer="{{$eirin->customer}}"
                                    data-vesselvoy="{{$eirin->vesselvoy}}"
                                    data-ctr-no="{{$eirin->ctr_no}}"
                                    data-date-no="{{$eirin->date_in}}"
                                    data-vehicle-no="{{$eirin->vehicle_no}}"
                                    data-block-adv ="{{$eirin->block_adv}}"
                                    date-remarks="{{$eirin->remarks}}"
                                    >
                                   View
                                </button>
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" title="Edit"
                                    data-target="#EditEirInModal"
                                    data-eirin="{{$eirin->id_eir_in}}"
                                    data-id_depo="{{$eirin->id_depo}}"
                                    data-bill-of-lading-number="{{$eirin->id_eir_in}}"
                                    data-customer="{{$eirin->customer}}"
                                    data-vesselvoy="{{$eirin->vesselvoy}}"
                                    data-ctr-no="{{$eirin->ctr_no}}"
                                    data-date-no="{{$eirin->date_in}}"
                                    data-vehicle-no="{{$eirin->vehicle_no}}"
                                    data-block-adv ="{{$eirin->block_adv}}"
                                    date-remarks="{{$eirin->remarks}}"
                                    >
                                   Edit
                                </button>
                        <form action="{{ route('eirin.destroy', $eirin->id_eir_in) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                    <td>{{ $eirin->id_eir_in }}</td>
                    <td>{{ $eirin->id_depo }}</td>
                    <td>{{ $eirin->bill_of_lading_number }}</td>
                    <td>{{ $eirin->customer}}</td>
                    <td>{{ $eirin->vesselvoy }}</td>
                    <td>{{ $eirin->ctr_no }}</td>
                    <td>{{ $eirin->date_in }}</td>
                    <td>{{ $eirin->vehicle_no }}</td>
                    <td>{{ $eirin->block_adv }}</td>
                    <td>{{ $eirin->remarks }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>


<!-- Modal add Deliveryorders -->
<div class="modal fade" id="addEirInModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Eir In </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('eirin.store') }}" method="POST">
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
                            <label for="bill_of_lading_number">Bill OF Lading Number</label>
                            <input type="text" name="bill_of_lading_number" class="form-control" id="bill_of_lading_number"
                                value="" required>
                            @error('bill_of_lading_number')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    <div class="col-md-6 mb-3">
                        <label for="customer">Customer</label>
                        <input type="text" name="customer" class="form-control" required>
                        @error('customer')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                <div class="col-md-6 mb-3">
                    <label for="vesselvoy">Vesselvoy</label>
                    <input type="text" name="vesselvoy" class="form-control">
                    @error('vesselvoy')
                                <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ctr_no">Ctr No</label>
                    <input type="text" name="ctr_no" class="form-control" required>
                    @error('ctr_no')
                                <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="date_in">Date In</label>
                    <input type="date" name="date_in" class="form-control" required>
                    @error('date_in')
                                <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="vehicle_no">Vehicle No</label>
                    <input type="text" name="vehicle_no" class="form-control" required>
                    @error('vehicle_no')
                                <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="block_adv">Block Adv</label>
                    <input type="text" name="block_adv" class="form-control" required>
                    @error('block_adv')
                                <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="remarks">Remarks</label>
                    <input type="text" name="remarks" class="form-control" required>
                    @error('remarks')
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
</div>


<!-- Modal viewDeliveryordersModal -->
<div class="modal fade" id="viewEirInModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">View  Detail Eir In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

                <div class="modal-body">
                <table class="table">
                    <tbody>
                           <tr><th>ID</th><th>{{ $eirin->id_eir_in}}</th></tr>
                           <tr><th>ID Depo</th><th>{{ $eirin->id_depo}}</th></tr>
                           <tr><th>Bill Of Lading Number</th><th>{{ $eirin->bill_of_lading_number}}</th></tr>
                           <tr><th>Customer</th><th>{{ $eirin->customer}}</th></tr>
                           <tr><th>Vesselvoy</th><th>{{ $eirin->vesselvoy}}</th></tr>
                           <tr><th>Piece Count</th><th>{{ $eirin->ctr_no}}</th></tr>
                           <tr><th>Date IN</th><th>{{ $eirin->date_in}}</th></tr>
                           <tr><th>Vehicle No</th><th>{{ $eirin->vehicle_no}}</th></tr>
                           <tr><th>Block Adv</th><th>{{ $eirin->block_adv}}</th></tr>
                           <tr><th>Remarks</th><th>{{ $eirin->remarks}}</th></tr>

                    </tbody>
                </table>

        </div>

    </div>
</div>


</div>
</div>


    <!-- Modal EditDeliveryordersModal-->
<div class="modal fade" id="EditEirInModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Eir In </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('eirin.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                    <div style="display: none;" class="col-md-6 mb-3">
                            <label for="id_eir_in">ID</label>
                            <input type="hidden" name="id_eir_in" class="form-control" id="id_eir_in"
                                value="{{ old('id_eir_in', $eirin->id_eir_in)}}" required>
                            @error('id_eir_in')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="id_depo">ID Depo</label>
                            <input type="text" name="id_depo" class="form-control" id="id_depo"
                                value="{{ old('id_depo', $eirin->id_depo)}}" required>
                            @error('id_depo')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="bill_of_lading_number">Bill OF Lading Number</label>
                            <input type="text" name="bill_of_lading_number" class="form-control" id="bill_of_lading_number"
                            value="{{ old('bill_of_lading_number', $eirin->bill_of_lading_number)}}" required>
                            @error('bill_of_lading_number')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    <div class="col-md-6 mb-3">
                        <label for="customer">Customer</label>
                        <input type="text"  value="{{ old('customer', $eirin->customer)}}" name="customer" class="form-control" required>
                        @error('customer')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                <div class="col-md-6 mb-3">
                    <label for="vesselvoy">Vesselvoy</label>
                    <input type="text" name="vesselvoy" value="{{ old('vesselvoy', $eirin->vesselvoy)}}" class="form-control">
                    @error('vesselvoy')
                                <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ctr_no">Ctr No</label>
                    <input type="text" value="{{ old('ctr_no', $eirin->ctr_no)}}" name="ctr_no" class="form-control" required>
                    @error('ctr_no')
                                <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="date_in">Date In</label>
                    <input type="date" value="{{ old('date_in', $eirin->date_in)}}" name="date_in" class="form-control" required>
                    @error('date_in')
                                <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="vehicle_no">Vehicle No</label>
                    <input type="text" name="vehicle_no" value="{{ old('vehicle_no', $eirin->vehicle_no)}}" class="form-control" required>
                    @error('vehicle_no')
                                <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="block_adv">Block Adv</label>
                    <input type="text" name="block_adv" value="{{ old('block_adv', $eirin->block_adv)}}" class="form-control" required>
                    @error('block_adv')
                                <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="remarks">Remarks</label>
                    <input type="text" name="remarks"  value="{{ old('remarks', $eirin->remarks)}}"  class="form-control" required>
                    @error('remarks')
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
</div>
</div>
</div>
@endsection
