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
                <h3 class="card-title">Master Delivery Orders</h3>
            </div>
            <div class="card-body">

                <button type="button" class="btn btn-primary btn-sm mb-4" data-toggle="modal" title="Add"
                    data-target="#addDeliveryordersModal">
                    Add
                </button>


                <div class="table-responsive">

                    <table id="datatable-basic" class="table table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>Order Number</th>
                                <th>Do Date</th>
                                <th>ID Depo</th>
                                <th>Number Voyage</th>
                                <th>Port of Loading</th>
                                <th>Departure Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($master_delivers) && count($master_delivers) > 0)
                            @foreach ($master_delivers as $master_deliver)
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" title="view"
                                        data-target="#viewDeliveryordersModal"
                                        data-id-master-derivery="{{ $master_deliver->id_master_derivery }}"
                                        data-order-number="{{ $master_deliver->order_number }}"
                                        data-id-depo="{{ $master_deliver->id_depo }}"
                                        data-number-voyage="{{ $master_deliver->number_voyage }}"
                                        data-port-of-loading="{{ $master_deliver->port_of_loading }}"
                                        data-departure-date="{{ $master_deliver->departure_date }}"
                                        data-port-of-discharge="{{ $master_deliver->port_of_discharge }}"
                                        data-estimated-time-of-arrival="{{ $master_deliver->estimated_time_of_arrival }}"
                                        data-call-sign="{{ $master_deliver->call_sign }}">
                                        View
                                    </button>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" title="Edit"
                                        data-target="#EditDeliveryordersModal"
                                        data-id-master-derivery="{{ $master_deliver->id_master_derivery }}"
                                        data-order-number="{{ $master_deliver->order_number }}"
                                        data-id-depo="{{ $master_deliver->id_depo }}"
                                        data-number-voyage="{{ $master_deliver->number_voyage }}"
                                        data-port-of-loading="{{ $master_deliver->port_of_loading }}"
                                        data-departure-date="{{ $master_deliver->departure_date }}"
                                        data-port-of-discharge="{{ $master_deliver->port_of_discharge }}"
                                        data-estimated-time-of-arrival="{{ $master_deliver->estimated_time_of_arrival }}"
                                        data-call-sign="{{ $master_deliver->call_sign }}">
                                        Edit
                                    </button>
                                    <form action="{{ route('msdeliveryorders.destroy', $master_deliver->id_master_derivery) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                                <td>{{ $master_deliver->id_master_derivery }}</td>
                                <td>{{ $master_deliver->order_number }}</td>
                                <td>{{ $master_deliver->Do_Date }}</td>
                                <td>{{ $master_deliver->id_depo }}</td>
                                <td>{{ $master_deliver->number_voyage }}</td>
                                <td>{{ $master_deliver->port_of_loading }}</td>
                                <td>{{ $master_deliver->departure_date }}</td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="8">No delivery orders found.</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>

                </div>
            </div>
        </div>


        <!-- Modal add Deliveryorders -->
        <div class="modal fade" id="addDeliveryordersModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Delivery Orders</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="{{ route('msdeliveryorders.store') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="order_number">Order Number</label>
                                        <input type="text" name="order_number" class="form-control" id="order_number"
                                            value="" required>
                                        @error('order_number')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="Do_Date">Order Number</label>
                                        <input type="date" name="Do_Date" class="form-control" id="Do_Date"
                                            value="" required>
                                        @error('Do_Date')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>



                                    <div class="col-md-6 mb-3">
                                        <label for="id_depo">ID Depo</label>
                                        <input type="text" name="id_depo" class="form-control" required>
                                        @error('id_depo')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="number_voyage">Number Voyage</label>
                                        <input type="text" name="number_voyage" class="form-control">
                                        @error('number_voyage')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6 mb-3">
                                        <label for="port_of_loading">Port of Loading</label>
                                        <input type="text" name="port_of_loading" class="form-control">
                                        @error('port_of_loading')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="departure_date">Departure Date</label>
                                        <input type="date" name="departure_date" class="form-control" required>
                                        @error('departure_date')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="port_of_discharge">Port of Discharge</label>
                                        <input type="text" name="port_of_discharge" class="form-control">
                                        @error('port_of_discharge')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="estimated_time_of_arrival">Estimated Time Of Arrival</label>
                                        <input type="date" name="estimated_time_of_arrival" class="form-control" required>
                                        @error('estimated_time_of_arrival')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="call_sign">Call Signl</label>
                                        <input type="text" name="call_sign" class="form-control" required>
                                        @error('call_sign')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="number_registation">Number Registation</label>
                                        <input type="number" name="number_registation" class="form-control" required>
                                        @error('number_registation')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="place_of_delivery">Place Of Delivery</label>
                                        <input type="text" name="place_of_delivery" class="form-control" required>
                                        @error('place_of_delivery')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="estimated_cargo_arrival_date">Estimated Cargo Arrival Date</label>
                                        <input type="text" name="estimated_cargo_arrival_date" class="form-control" required>
                                        @error('estimated_cargo_arrival_date')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="number_barcode">Number Barcode</label>
                                        <input type="text" name="number_barcode" class="form-control" required>
                                        @error('number_barcode')
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


        <!-- Modal -->
        <div class="modal fade" id="viewDeliveryordersModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Pesanan Pengiriman</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            {{dd($master_delivers)}}
                            @foreach($master_delivers as $master_deliver)
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{$master_deliver->id_master_derivery}}</td>
                                </tr>
                                <tr>
                                    <th>Order Number</th>
                                    <td>{{$master_deliver->order_number}}</td>
                                </tr>
                                <tr>
                                    <th>Do Date</th>
                                    <td>{{$master_deliver->Do_Date}}</td>
                                </tr>
                                <tr>
                                    <th>Depo ID</th>
                                    <td>{{ $master_deliver->id_depo }}</td>
                                </tr>
                                <tr>
                                    <th>Number Voyage</th>
                                    <td>{{ $master_deliver->number_voyage }}</td>
                                </tr>
                                <tr>
                                    <th>Departure Date</th>
                                    <td>{{ $master_deliver->departure_date }}</td>
                                </tr>
                                <tr>
                                    <th>Port Of Discharge</th>
                                    <td>{{ $master_deliver->port_of_discharge }}</td>
                                </tr>
                                <tr>
                                    <th>Estimated Time Of Arrival</th>
                                    <td>{{ $master_deliver->estimated_time_of_arrival }}</td>
                                </tr>
                                <tr>
                                    <th>Call Sign</th>
                                    <td>{{ $master_deliver->call_sign }}</td>
                                </tr>
                                <tr>
                                    <th>Number Registration</th>
                                    <td>{{ $master_deliver->number_registration }}</td>
                                </tr>
                                <tr>
                                    <th>Place Of Delivery</th>
                                    <td>{{ $master_deliver->place_of_delivery }}</td>
                                </tr>
                                <tr>
                                    <th>Estimated Cargo Arrival Date</th>
                                    <td>{{ $master_deliver->estimated_cargo_arrival_date }}</td>
                                </tr>
                                <tr>
                                    <th>Number Barcode</th>
                                    <td>{{ $master_deliver->number_barcode }}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
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
                            <h5 class="modal-title">Add Delivery Orders</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="{{ route('msdeliveryorders.store') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div style="display: none;" class="col-md-6 mb-3">
                                        <label for="id_master_derivery">ID</label>
                                        <input type="hidden" name="id_master_derivery" class="form-control" id="id"
                                            value="{{ old('id_master_derivery', $master_delivers->id_master_derivery)}}" required>
                                        @error('id')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="order_number">Order Number</label>
                                        <input type="text" name="order_number" class="form-control" id="order_number"
                                            value="{{ old('order_number', $master_delivers->order_number)}}" required>
                                        @error('order_number')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="Do_Date">Order Number</label>
                                        <input type="date" name="Do_Date" class="form-control" id="Do_Date"
                                            value="{{ old('Do_Date', $master_delivers->Do_Date)}}" required>
                                        @error('Do_Date')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>



                                    <div class="col-md-6 mb-3">
                                        <label for="id_depo">ID Depo</label>
                                        <input type="text" name="id_depo" value="{{ old('id_depo', $master_delivers->id_depo)}}" class="form-control" required>
                                        @error('id_depo')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="number_voyage">Number Voyage</label>
                                        <input type="text" value="{{ old('number_voyage', $master_delivers->number_voyage)}}" name="number_voyage" class="form-control">
                                        @error('number_voyage')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6 mb-3">
                                        <label for="port_of_loading">Port of Loading</label>
                                        <input type="text" name="port_of_loading" value="{{ old('port_of_loading', $master_delivers->port_of_loading)}}" class="form-control">
                                        @error('port_of_loading')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="departure_date">Departure Date</label>
                                        <input type="date" name="departure_date" value="{{ old('departure_date', $master_delivers->departure_date)}}" class="form-control" required>
                                        @error('departure_date')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="port_of_discharge">Port of Discharge</label>
                                        <input type="text" name="port_of_discharge" value="{{ old('port_of_discharge', $master_delivers->port_of_discharge)}}" class="form-control">
                                        @error('port_of_discharge')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="estimated_time_of_arrival">Estimated Time Of Arrival</label>
                                        <input type="date" value="{{ old('estimated_time_of_arrival', $master_delivers->estimated_time_of_arrival)}}" name="estimated_time_of_arrival" class="form-control" required>
                                        @error('estimated_time_of_arrival')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="call_sign">Call Signl</label>
                                        <input value="{{ old('call_sign', $master_delivers->call_sign)}}" type="text" name="call_sign" class="form-control" required>
                                        @error('call_sign')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="number_registation">Number Registation</label>
                                        <input type="number" value="{{ old('number_registation', $master_delivers->number_registation)}}" name="number_registation" class="form-control" required>
                                        @error('number_registation')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="place_of_delivery">Place Of Delivery</label>
                                        <input type="text" name="place_of_delivery" value="{{ old('place_of_delivery', $master_delivers->place_of_delivery)}}" class="form-control" required>
                                        @error('place_of_delivery')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="estimated_cargo_arrival_date">Estimated Cargo Arrival Date</label>
                                        <input type="date" value="{{ old('estimated_cargo_arrival_date', $master_delivers->estimated_cargo_arrival_date)}}" name="estimated_cargo_arrival_date" class="form-control" required>
                                        @error('estimated_cargo_arrival_date')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="number_barcode">Number Barcode</label>
                                        <input type="text" name="number_barcode" value="{{ old('number_barcode', $master_delivers->number_barcode)}}" class="form-control" required>
                                        @error('number_barcode')
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