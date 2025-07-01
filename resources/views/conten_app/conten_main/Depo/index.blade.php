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
                    <li class="breadcrumb-item active">Depo</li>
                </ol>
            </nav>
        </div>

        <!-- BASIC DATATABLE -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Depo Management</h3>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addDepoModal">
                    <span class="ti-plus"> Add Depo</span>
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable-basic" class="table table-hover table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>Depo Name</th>
                                <th>Capacity</th>
                                <th>Google Map Link</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Created By</th>
                                <th>Created Date</th>
                                <th>Updated By</th>
                                <th>Last Updated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($depo as $depos)
                            <tr>
                                <td>{{ $depos->id_depo }}</td>
                                <td>{{ $depos->nama_depo }}</td>
                                <td>{{ $depos->kapasitas }}</td>
                                <td><a href="{{ $depos->google_map_link }}" target="_blank">View Map</a></td>
                                <td>{{ $depos->latitude }}</td>
                                <td>{{ $depos->longitude }}</td>
                                <td>{{ $depos->Create_By }}</td>
                                <td>{{ $depos->Create_Date }}</td>
                                <td>{{ $depos->Update_By }}</td>
                                <td>{{ $depos->Last_Update }}</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" data-toggle="modal"
                                        data-target="#editDepoModal"
                                        data-id="{{ $depos->id_depo }}"
                                        data-nama="{{ $depos->nama_depo }}"
                                        data-kapasitas="{{ $depos->kapasitas }}"
                                        data-link="{{ $depos->google_map_link }}"
                                        data-lat="{{ $depos->latitude }}"
                                        data-lng="{{ $depos->longitude }}">
                                        <span class="ti-pencil-alt"></span>
                                    </button>
                                    <form action="{{ route('Depo.destroy', $depos) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">
                                            <span class="ti-trash"></span>
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

        <!-- Add Depo Modal -->
        <div class="modal fade" id="addDepoModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Depo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('Depo.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nama_depo">Depo Name</label>
                                    <input type="text" name="nama_depo" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="kapasitas">Capacity</label>
                                    <input type="number" name="kapasitas" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="google_map_link">Google Map Link</label>
                                    <input type="url" name="google_map_link" class="form-control">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="latitude">Latitude</label>
                                    <input type="text" name="latitude" class="form-control">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="longitude">Longitude</label>
                                    <input type="text" name="longitude" class="form-control">
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

        <!-- Edit Depo Modal -->
        <div class="modal fade" id="editDepoModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Depo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="#" method="POST" id="editDepoForm">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <input type="hidden" name="id_depo" id="edit_id_depo">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="edit_nama_depo">Depo Name</label>
                                    <input type="text" name="nama_depo" id="edit_nama_depo" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="edit_kapasitas">Capacity</label>
                                    <input type="number" name="kapasitas" id="edit_kapasitas" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="edit_google_map_link">Google Map Link</label>
                                    <input type="url" name="google_map_link" id="edit_google_map_link" class="form-control">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="edit_latitude">Latitude</label>
                                    <input type="text" name="latitude" id="edit_latitude" class="form-control">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="edit_longitude">Longitude</label>
                                    <input type="text" name="longitude" id="edit_longitude" class="form-control">
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