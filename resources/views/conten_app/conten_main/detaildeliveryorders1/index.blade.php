@extends('layouts.app')

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
              <h3 class="card-title">Detail Delivery Orders1</h3>
            </div>
            <div class="card-body">

                            <button type="button" class="btn btn-primary btn-sm mb-4" data-toggle="modal" title="Add"
                                    data-target="#addDetailDeliveryorder1sModal">
                                    Add
                                </button>


        <div class="table-responsive">

    <table id="datatable-basic" class="table table-bordered">
        <thead>
            <tr>
            <th></th>
                <th>ID</th>
                <th>ID Master Derivery</th>
                <th>Marks</th>
                <th>Package</th>
                <th>Description Of Goods</th>
                <th>Weight</th>
                <th>Measurement</th>


            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" title="view"
                                    data-target="#viewDetailDeliveryorders1Modal"
                                    data-id-master-derivery="{{$order->id_master_derivery}}"
                                    data-id-detail-derivery1="{{$order->id_detail_derivery1}}"
                                    data-marks="{{$order->marks}}"
                                    data-package="{{$order->package }}"
                                    data-description-of-goods="{{$order->description_of_goods}}"
                                    data-port-of-loading="{{$order->port_of_loading}}"
                                    data-weight ="{{$order->weight}}"
                                    data-measurement ="{{$order->measurement}}"
                                    >
                                   View
                                </button>
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" title="Edit"
                                    data-target="#EditDetailDeliveryorders1Modal"
                                    data-id-master-derivery="{{$order->id_master_derivery}}"
                                    data-id-detail-derivery1="{{$order->id_detail_derivery1}}"
                                    data-marks="{{$order->marks}}"
                                    data-package="{{$order->package }}"
                                    data-description-of-goods="{{$order->description_of_goods}}"
                                    data-port-of-loading="{{$order->port_of_loading}}"
                                    data-weight ="{{$order->weight}}"
                                    data-measurement ="{{$order->measurement}}"
                                    >
                                   Edit
                                </button>
                        <form action="{{ route('detaildeliveryorders1.destroy', $order->id_detail_derivery1) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                    <td>{{ $order->id_detail_derivery1 }}</td>
                    <td>{{ $order->id_master_derivery }}</td>
                    <td>{{ $order->marks }}</td>
                    <td>{{ $order->package }}</td>
                    <td>{{ $order->weight }}</td>
                    <td>{{ $order->measurement }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>


<!-- Modal add Deliveryorders -->
<div class="modal fade" id="addDetailDeliveryorder1sModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Detail Delivery Orders1</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('detaildeliveryorders1.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="id_master_derivery">ID Master Derivery</label>
                            <input type="text" name="id_master_derivery" class="form-control" id="id_master_derivery"
                                value="" required>
                            @error('id_master_derivery')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="marks">Marks</label>
                            <input type="text" name="marks" class="form-control" id="marks"
                                value="" required>
                            @error('marks')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                    <div class="col-md-6 mb-3">
                        <label for="package">Package</label>
                        <input type="text" name="package" class="form-control" required>
                        @error('package')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="description_of_goods">Description Of Goods</label>
                        <input type="text" name="description_of_goods" class="form-control">
                        @error('description_of_goods')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>


                <div class="col-md-6 mb-3">
                    <label for="weight">Weight</label>
                    <input type="text" name="weight" class="form-control">
                    @error('weight')
                                <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="measurement">Measurement</label>
                    <input type="text" name="measurement" class="form-control" required>
                    @error('measurement')
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
<div class="modal fade" id="viewDetailDeliveryorders1Modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Delivery Orders</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

                <div class="modal-body">
                <table class="table">
                    <tbody>
                           <tr><th>ID</th><th>{{ $order->id_detail_derivery1}}</th></tr>
                           <tr><th>ID</th><th>{{ $order->id_master_derivery}}</th></tr>
                           <tr><th>Marks</th><th>{{ $order->marks}}</th></tr>
                           <tr><th>Package</th><th>{{ $order->package}}</th></tr>
                           <tr><th>Description Of Goods</th><th>{{ $order->description_of_goods}}</th></tr>
                           <tr><th>weight</th><th>{{ $order->weight}}</th></tr>
                           <tr><th>Measurement</th><th>{{ $order->measurement}}</th></tr>

                    </tbody>
                </table>

        </div>

    </div>
</div>


</div>
</div>


    <!-- Modal EditDeliveryordersModal-->
<div class="modal fade" id="EditDeliveryordersModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Detail Delivery Orders1</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('detaildeliveryorders1.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                    <div style="display: none;" class="col-md-6 mb-3">
                            <label for="id_detail_derivery1">ID</label>
                            <input type="hidden" name="id_detail_derivery1" class="form-control" id="id_detail_derivery1"
                                value="{{ old('id_detail_derivery1', $order->id_detail_derivery1)}}" required>
                            @error('id')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="id_master_derivery">ID Master Derivery</label>
                            <input type="text" name="id_master_derivery" class="form-control" id="id_master_derivery"
                            value="{{ old('id_master_derivery', $order->id_master_derivery)}}" required>
                            @error('id_master_derivery')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="marks">Marks</label>
                            <input type="text" name="marks" class="form-control" id="marks"
                            value="{{ old('marks', $order->marks)}}" required>
                            @error('marks')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                    <div class="col-md-6 mb-3">
                        <label for="package">Package</label>
                        <input type="text"   value="{{ old('package', $order->package)}}"  name="package" class="form-control" required>
                        @error('package')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="description_of_goods">Description Of Goods</label>
                        <input type="text" value="{{ old('description_of_goods', $order->description_of_goods)}}" name="description_of_goods" class="form-control">
                        @error('description_of_goods')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>


                <div class="col-md-6 mb-3">
                    <label for="weight">Weight</label>
                    <input type="text" value="{{ old('weight', $order->weight)}}" name="weight" class="form-control">
                    @error('weight')
                                <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="measurement">Measurement</label>
                    <input type="text" name="measurement" value="{{ old('measurement', $order->measurement)}}" class="form-control" required>
                    @error('measurement')
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
