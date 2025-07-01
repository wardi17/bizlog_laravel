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
              <h3 class="card-title">Detail Delivery Orders2</h3>
            </div>
            <div class="card-body">

                            <button type="button" class="btn btn-primary btn-sm mb-4" data-toggle="modal" title="Add"
                                    data-target="#addDetailDeliveryorder2sModal">
                                    Add
                                </button>


        <div class="table-responsive">

    <table id="datatable-basic" class="table table-bordered">
        <thead>
            <tr>
            <th></th>
                <th>ID</th>
                <th>ID Master Derivery</th>
                <th>Container Number</th>
                <th>Seal No</th>
                <th>Size Type</th>
                <th>Piece Count</th>
                <th>Traffic Terms</th>


            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" title="view"
                                    data-target="#viewDetailDeliveryorders2Modal"
                                    data-id-master-derivery="{{$order->id_master_derivery}}"
                                    data-id-detail-derivery2="{{$order->id_detail_derivery2}}"
                                    data-container-number="{{$order->container_number}}"
                                    data-seal-no="{{$order->seal_no}}"
                                    data-size-type="{{$order->size_type}}"
                                    data-piece-count="{{$order->piece_count}}"
                                    data-traffic-terms="{{$order->traffic_terms}}"
                                    data-container-remarks="{{$order->container_remarks}}"

                                    >
                                   View
                                </button>
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" title="Edit"
                                    data-target="#EditDetailDeliveryorders2Modal"
                                    data-id-master-derivery="{{$order->id_master_derivery}}"
                                    data-id-detail-derivery2="{{$order->id_detail_derivery2}}"
                                    data-container-number="{{$order->container_number}}"
                                    data-seal-no="{{$order->seal_no}}"
                                    data-size-type="{{$order->size_type}}"
                                    data-piece-count="{{$order->piece_count}}"
                                    data-traffic-terms="{{$order->traffic_terms}}"
                                    data-container-remarks="{{$order->container_remarks}}"
                                    >
                                   Edit
                                </button>
                        <form action="{{ route('detaildeliveryorders2.destroy', $order->id_detail_derivery2) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                    <td>{{ $order->id_detail_derivery2 }}</td>
                    <td>{{ $order->id_master_derivery }}</td>
                    <td>{{ $order->container_number }}</td>
                    <td>{{ $order->seal_no}}</td>
                    <td>{{ $order->size_type }}</td>
                    <td>{{ $order->piece_count }}</td>
                    <td>{{ $order->traffic_terms }}</td>
                    <td>{{ $order->container_remarks }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>


<!-- Modal add Deliveryorders -->
<div class="modal fade" id="addDetailDeliveryorder2sModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Detail Delivery Orders2</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('detaildeliveryorders2.store') }}" method="POST">
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
                            <label for="container_number">Container Number</label>
                            <input type="text" name="container_number" class="form-control" id="container_number"
                                value="" required>
                            @error('container_number')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                    <div class="col-md-6 mb-3">
                        <label for="seal_no">Seal No</label>
                        <input type="text" name="seal_no" class="form-control" required>
                        @error('seal_no')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="size_type">Size Type</label>
                        <input type="text" name="size_type" class="form-control">
                        @error('size_type')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>


                <div class="col-md-6 mb-3">
                    <label for="piece_count">Piece Count</label>
                    <input type="text" name="piece_count" class="form-control">
                    @error('piece_count')
                                <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="traffic_terms">Traffic Terms</label>
                    <input type="text" name="traffic_terms" class="form-control" required>
                    @error('traffic_terms')
                                <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="container_remarks">Container Remarks</label>
                    <input type="text" name="container_remarks" class="form-control" required>
                    @error('container_remarks')
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
<div class="modal fade" id="viewDetailDeliveryorders2Modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">View  Detail Delivery Orders</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

                <div class="modal-body">
                <table class="table">
                    <tbody>
                           <tr><th>ID</th><th>{{ $order->id_detail_derivery2}}</th></tr>
                           <tr><th>ID Master</th><th>{{ $order->id_master_derivery}}</th></tr>
                           <tr><th>Container Number</th><th>{{ $order->container_number}}</th></tr>
                           <tr><th>Seal No</th><th>{{ $order->seal_no}}</th></tr>
                           <tr><th>Size Tipe</th><th>{{ $order->size_type}}</th></tr>
                           <tr><th>Piece Count</th><th>{{ $order->piece_count}}</th></tr>
                           <tr><th>Traffic Terms</th><th>{{ $order->traffic_terms}}</th></tr>
                           <tr><th>Container Remarks</th><th>{{ $order->container_remarks}}</th></tr>

                    </tbody>
                </table>

        </div>

    </div>
</div>


</div>
</div>


    <!-- Modal EditDeliveryordersModal-->
<div class="modal fade" id="EditDetailDeliveryorders2Modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Detail Delivery Orders1</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('detaildeliveryorders2.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                    <div style="display: none;" class="col-md-6 mb-3">
                            <label for="id_detail_derivery1">ID</label>
                            <input type="hidden" name="id_detail_derivery2" class="form-control" id="id_detail_derivery1"
                                value="{{ old('id_detail_derivery2', $order->id_detail_derivery2)}}" required>
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
                            <label for="container_number">Container Number</label>
                            <input type="text" name="container_number" class="form-control" id="container_number"
                                value="{{ old('container_number', $order->container_number)}}" required>
                            @error('container_number')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                    <div class="col-md-6 mb-3">
                        <label for="seal_no">Seal No</label>
                        <input type="text"  value="{{ old('seal_no', $order->seal_no)}}" name="seal_no" class="form-control" required>
                        @error('seal_no')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="size_type">Size Type</label>
                        <input type="text" value="{{ old('size_type', $order->size_type)}}" name="size_type" class="form-control">
                        @error('size_type')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>


                <div class="col-md-6 mb-3">
                    <label for="piece_count">Piece Count</label>
                    <input type="text" name="piece_count"  value="{{ old('piece_count', $order->piece_count)}}" class="form-control">
                    @error('piece_count')
                                <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="traffic_terms">Traffic Terms</label>
                    <input type="text" name="traffic_terms" value="{{ old('traffic_terms', $order->traffic_terms)}}" class="form-control" required>
                    @error('traffic_terms')
                                <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="container_remarks">Container Remarks</label>
                    <input type="text" name="container_remarks"  value="{{ old('container_remarks', $order->container_remarks)}}" class="form-control" required>
                    @error('container_remarks')
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
