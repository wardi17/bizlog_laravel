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
              <h3 class="card-title">Datatable with Default Features</h3>
            </div>
            <div class="card-body">

                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" title="Add"
                                    data-target="#addConsigneeModal">
                                    <span class="ti-plus"></span>
                                </button>
<!--
                 <a href="{{ route('consignee.create') }}" class="btn btn-primary mb-3"><span class="ti-plus"></span>Add</a>

            @if (session('success'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: '{{ session("success") }}',
                        showConfirmButton: false,
                        timer: 2000
                    });
                </script>
            @endif
                -->
              <div class="table-responsive">
                <table id="datatable-basic" class="table table-hover table-bordered">
                  <thead class="thead-light">
                        <tr> <th>Action</th>
                            <th>ID</th>
                            <th>ID Depo</th>
                            <th>Consignee Name</th>
                            <th>Alamat</th>



                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($consignee as $consignees)
                        <tr>
                            <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        title="view" data-target="#viewConsigneeModal"
                                        data-id-consignee="{{ $consignees->id_consignee}}"
                                        data-id_depo="{{$consignees->id_depo}}"
                                        data-consignee-name="{{$consignees->consignee_name}}"
                                        data-address="{{$consignees->address}}"
                                        >
                                        <span class="ti-book"></span>
                                    </button>
                                           <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        title="Update" data-target="#editConsigneeModal"
                                        data-id-consignee="{{ $consignees->id_consignee}}"
                                        data-id_depo="{{$consignees->id_depo}}"
                                        data-consignee-name="{{$consignees->consignee_name}}"
                                        data-address="{{$consignees->address}}"
                                        >
                                        <span class="ti-pencil-alt"></span>
                                    </button>
                                    <form action="{{ route('consignee.destroy', $consignees->id_consignee) }}" method="POST" style="display:inline-block;" title="Delete">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"  class="btn btn-primary btn-sm" onclick="return confirm('Yakin ingin menghapus?')">
                                            <span class="ti-trash"></span>
                                        </button>
                                    </form>
                            </td>
                            <td>{{$consignees->id_consignee}}</td>
                            <td>{{$consignees->id_depo}}</td>
                            <td>{{$consignees->consignee_name}}</td>
                            <td>{{$consignees->address}}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- END BASIC DATATABLE -->

<!-- Modal add Consignee -->
<div class="modal fade" id="addConsigneeModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add consignee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('consignee.store') }}" method="POST">
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
                                    <label for="consignee_name">consignee_name</label>
                                    <input type="text" name="consignee_name" class="form-control" id="consignee_name" value="" required>
                                    @error('consignee_name')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="address">address</label>
                                    <textarea type="text" name="address" class="form-control" id="address" value=""
                                        required></textarea>
                                    @error('address')
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


        <!-- Modal Consignee  Pelayanan -->
        <div class="modal fade" id="viewConsigneeModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detail Consignee</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <tbody>
                                @foreach ($consignee as $consignees)

                                <tr>
                                    <th>ID</th>
                                    <td>{{ $consignees->id_consignee}}</td>
                                </tr>
                                <tr>
                                    <th>Nama consignee</th>
                                    <td>{{$consignees->consignee_name}}</td>
                                </tr>

                                <tr>
                                    <th>Alamat</th>
                                    <td>{{ $consignees->address }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>





 <div class="modal fade" id="editConsigneeModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit consignee</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('consignee.update',$consignee) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                        <div class="row">
                                   <div class="col-md-6 mb-3">
                                        <label for="consignee_name">Consignee Name</label>
                                        <input type="text" name="consignee_name" class="form-control"
                                            id="consignee_name"
                                            value="{{ old('consignee_name', $consignee->consignee_name) }}" required>
                                        @error('consignee_name')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="consignee_name">Consignee Name</label>
                                        <input type="text" name="consignee_name" class="form-control"
                                            id="consignee_name"
                                            value="{{ old('consignee_name', $consignee->consignee_name) }}" required>
                                        @error('consignee_name')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="address">Address</label>
                                        <textarea type="text" name="address" class="form-control" id="address"
                                            value="{{ old('address', $consignee->address) }}" required>{{ ($consignees->address)}}</textarea>
                                        @error('address')
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
