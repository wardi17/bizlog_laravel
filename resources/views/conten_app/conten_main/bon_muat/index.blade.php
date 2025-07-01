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
                <h3 class="card-title"> Bon Muat</h3>
            </div>
            <div class="card-body">

                <button type="button" class="btn btn-primary btn-sm mb-4" data-toggle="modal" title="Add"
                    data-target="#addbon_muatsModal">
                    Add
                </button>


                <div class="table-responsive">

                    <div style="overflow-x: auto;">
                        <table id="datatable-basic" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="padding: 10px;">ID Bon Muat</th>
                                    <th style="padding: 10px;">DO No</th>
                                    <th style="padding: 10px;">Container No</th>
                                    <th style="padding: 10px;">Customer</th>
                                    <th style="padding: 10px;">Email</th>
                                    <th style="padding: 10px;">Vehicle No</th>
                                    <th style="padding: 10px;">Vessel Voy</th>
                                    <th style="padding: 10px;">Party</th>
                                    <th style="padding: 10px;">Driver</th>
                                    <th style="padding: 10px;">Remarks</th>
                                    <th style="padding: 10px;">Commodity</th>
                                    <th style="padding: 10px;">Email Pic</th>
                                    <th style="padding: 10px;">Print Status</th>
                                    <th style="padding: 10px;">Aksi</th> <!-- Kolom Aksi -->
                                </tr>

                            </thead>
                            <tbody>
                                @foreach($bon_muats as $bon_muat)
                                <tr>
                                    <td>{{ $bon_muat->id_bon_muat }}</td>
                                    <td>{{ $bon_muat->do_no }}</td>
                                    <td>{{ $bon_muat->container_no}}</td>
                                    <td>{{ $bon_muat->customer }}</td>
                                    <td>{{ $bon_muat->email }}</td>
                                    <td>{{ $bon_muat->vehicle_no }}</td>
                                    <td>{{ $bon_muat->vessel_voy }}</td>
                                    <td>{{ $bon_muat->party }}</td>
                                    <td>{{ $bon_muat->driver }}</td>
                                    <td>{{ $bon_muat->remarks }}</td>
                                    <td>{{ $bon_muat->commodity }}</td>
                                    <td>{{ $bon_muat->email_pic }}</td>
                                    <td>{{ $bon_muat->print_status }}</td>

                                    <td>
                                        <!-- Tombol View Icon -->
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" title="View"
                                            data-target="#viewbon_muatModal"
                                            data-id-bon-muat="{{$bon_muat->id_bon_muat}}"
                                            data-id-depo="{{$bon_muat->id_depo}}"
                                            data-do-no="{{$bon_muat->do_no}}"
                                            data-container-no="{{$bon_muat->container_no}}"
                                            data-customer="{{$bon_muat->customer}}"
                                            data-email="{{$bon_muat->email}}"
                                            data-vehicle-no="{{$bon_muat->vehicle_no}}"
                                            data-vessel-voy="{{$bon_muat->vessel_voy}}"
                                            data-party="{{$bon_muat->party}}"
                                            data-driver="{{$bon_muat->driver}}"
                                            data-remarks="{{$bon_muat->remarks}}"
                                            data-commodity="{{$bon_muat->commodity}}"
                                            data-email-pic="{{$bon_muat->email_pic}}"
                                            data-print-status="{{$bon_muat->print_status}}">
                                            <i class="fas fa-eye"></i> <!-- Icon View -->
                                        </button>

                                        <!-- Tombol Edit Icon -->
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" title="Edit"
                                            data-target="#Editbon_muatModal"
                                            data-id-bon-muat="{{$bon_muat->id_bon_muat}}"
                                            data-id-depo="{{$bon_muat->id_depo}}"
                                            data-do-no="{{$bon_muat->do_no}}"
                                            data-container-no="{{$bon_muat->container_no}}"
                                            data-customer="{{$bon_muat->customer}}"
                                            data-email="{{$bon_muat->email}}"
                                            data-vehicle-no="{{$bon_muat->vehicle_no}}"
                                            data-vessel-voy="{{$bon_muat->vessel_voy}}"
                                            data-party="{{$bon_muat->party}}"
                                            data-driver="{{$bon_muat->driver}}"
                                            data-remarks="{{$bon_muat->remarks}}"
                                            data-commodity="{{$bon_muat->commodity}}"
                                            data-email-pic="{{$bon_muat->email_pic}}"
                                            data-print-status="{{$bon_muat->print_status}}">
                                            <i class="fas fa-edit"></i> <!-- Icon Edit -->
                                        </button>

                                        <!-- Tombol Delete Icon -->
                                        <form action="{{ route('bon_muat.destroy', $bon_muat->id_bon_muat) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure?')">
                                                <i class="fas fa-trash-alt"></i> <!-- Icon Delete -->
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>


        <!-- Modal add bonmuat -->
        <div class="modal fade" id="addbon_muatsModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Bon Muat</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="{{ route('bon_muat.store') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="id_bon_muat">ID Bon Muat</label>
                                        <input type="text" name="id_bon_muat" class="form-control" id="id_bon_muat"
                                            value="" required>
                                        @error('ID Bon Muat')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="id_depo">ID Depo</label>
                                        <input type="text" name="id_depo" class="form-control" id="id_depo"
                                            value="" required>
                                        @error('ID Depo')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="do_no">Do No</label>
                                        <input type="text" name="do_no" class="form-control" id="do_no"
                                            value="" required>
                                        @error('do_no')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="container_no">Container No</label>
                                        <input type="text" name="container_no" class="form-control" required>
                                        @error('container_no')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="customer">Customer</label>
                                        <input type="text" name="customer" class="form-control">
                                        @error('customer')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-6 mb-3">
                                        <label for="Email">Piece Count</label>
                                        <input type="text" name="Email" class="form-control">
                                        @error('Email')
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
                                        <label for="vessel_voy">Vessel Voy</label>
                                        <input type="text" name="vessel_voy" class="form-control" required>
                                        @error('vessel_voy')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="party">party</label>
                                        <input type="text" name="party" class="form-control" required>
                                        @error('party')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="driver">Driver</label>
                                        <input type="text" name="driver" class="form-control" required>
                                        @error('Driver')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="remarks">Remarks</label>
                                        <input type="text" name="remarks" class="form-control" required>
                                        @error('Remarks')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="commodity">commodity</label>
                                        <input type="text" name="commodity" class="form-control" required>
                                        @error('commodity')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Email_pic">Email pic</label>
                                        <input type="text" name="Email_pic" class="form-control" required>
                                        @error('Email pic')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="print_status">print status</label>
                                        <input type="text" name="print_status" class="form-control" required>
                                        @error('print status')
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

        <!-- Modal viewbon_muatsModal -->
        <div class="modal fade" id="viewbon_muatModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">View Bon Muat</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <table class="table">
                                @foreach($bon_muats as $bon_muat)
                                <tbody>
                                    <tr>
                                        <th>ID Bon Muat</th>
                                        <td>{{ $bon_muat->id_bon_muat }}</td>
                                    </tr>
                                    <tr>
                                        <th>Container Number</th>
                                        <td>{{ $bon_muat->do_no }}</td>
                                    </tr>
                                    <tr>
                                        <th>Seal No</th>
                                        <td>{{ $bon_muat->container_no }}</td>
                                    </tr>
                                    <tr>
                                        <th>Customer</th>
                                        <td>{{ $bon_muat->customer }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $bon_muat->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Vehicle No</th>
                                        <td>{{ $bon_muat->vehicle_no }}</td>
                                    </tr>
                                    <tr>
                                        <th>Vessel Voy</th>
                                        <td>{{ $bon_muat->vessel_voy }}</td>
                                    </tr>
                                    <tr>
                                        <th>Party</th>
                                        <td>{{ $bon_muat->party }}</td>
                                    </tr>
                                    <tr>
                                        <th>Driver</th>
                                        <td>{{ $bon_muat->Driver }}</td>
                                    </tr>
                                    <tr>
                                        <th>Remarks</th>
                                        <td>{{ $bon_muat->Remarks }}</td>
                                    </tr>
                                    <tr>
                                        <th>Commodity</th>
                                        <td>{{ $bon_muat->commodity }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email Pic</th>
                                        <td>{{ $bon_muat->email_pic }}</td>
                                    </tr>
                                    <tr>
                                        <th>Print Status</th>
                                        <td>{{ $bon_muat->print_status }}</td>
                                    </tr>
                                </tbody>
                                @endforeach

                            </table>

                        </div>

                    </div>
                </div>






                <!-- Modal Editbon_muatsModal-->
                <div class="modal fade" id="Editbon_muatModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Bon Muat</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form action="{{ route('bon_muat.store') }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row">
                                            <div style="display: none;" class="col-md-6 mb-3">
                                                <label for="id_bon_muat">ID</label>
                                                <input type="hidden" name="id_bon_muat" value="{{ old('id_bon_muat', $bon_muats[0]->id_bon_muat ?? '') }}">
                                                @error('id_bon_muat')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="id_bon_muat">ID depo</label>
                                                <input type="text" name="id_depo" class="form-control" id="id_depo"
                                                    value="{{ old('id_depo', $bon_muats[0]->id_depo ?? '') }}" required>

                                                @error('ID depo')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="do_no">Do No</label>
                                                <input type="text" name="do_no" class="form-control" id="do_no"
                                                    value="{{ old('do_no', $bon_muats[0]->do_no ?? '') }}" required>
                                                @error('do_no')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="container_no">Container No</label>
                                                <input type="text" name="container_no" class="form-control" id="container_no"
                                                    value="{{ old('container_no', $bon_muats[0]->container_no ?? '') }}" required>
                                                @error('container_no')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="customer">Customer</label>
                                                <input type="text" name="customer" class="form-control" id="customer"
                                                    value="{{ old('customer', $bon_muats[0]->customer ?? '') }}">
                                                @error('customer')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="Email">Email</label>
                                                <input type="text" name="Email" class="form-control" id="Email"
                                                    value="{{ old('Email', $bon_muats[0]->Email ?? '') }}">
                                                @error('Email')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="vehicle_no">Vehicle No</label>
                                                <input type="text" name="vehicle_no" class="form-control" id="vehicle_no"
                                                    value="{{ old('vehicle_no', $bon_muats[0]->vehicle_no ?? '') }}" required>
                                                @error('vehicle_no')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="vessel_voy">Vessel Voy</label>
                                                <input type="text" name="vessel_voy" class="form-control" id="vessel_voy"
                                                    value="{{ old('vessel_voy', $bon_muats[0]->vessel_voy ?? '') }}" required>
                                                @error('vessel_voy')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="party">Party</label>
                                                <input type="text" name="party" class="form-control" id="party"
                                                    value="{{ old('party', $bon_muats[0]->party ?? '') }}" required>
                                                @error('party')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="driver">Driver</label>
                                                <input type="text" name="driver" class="form-control" id="driver"
                                                    value="{{ old('driver', $bon_muats[0]->driver ?? '') }}" required>
                                                @error('driver')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="remarks">Remarks</label>
                                                <input type="text" name="remarks" class="form-control" id="remarks"
                                                    value="{{ old('remarks', $bon_muats[0]->remarks ?? '') }}" required>
                                                @error('remarks')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="commodity">Commodity</label>
                                                <input type="text" name="commodity" class="form-control" id="commodity"
                                                    value="{{ old('commodity', $bon_muats[0]->commodity ?? '') }}" required>
                                                @error('commodity')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="email_pic">Email PIC</label>
                                                <input type="text" name="email_pic" class="form-control" id="email_pic"
                                                    value="{{ old('email_pic', $bon_muats[0]->Email_pic ?? '') }}" required>
                                                @error('email_pic')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="print_status">Print Status</label>
                                                <input type="text" name="print_status" class="form-control" id="print_status"
                                                    value="{{ old('print_status', $bon_muats[0]->print_status ?? '') }}" required>
                                                @error('print_status')
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