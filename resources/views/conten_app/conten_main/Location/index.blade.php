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
      <h3 class="card-title">location</h3>
    </div>
    <div class="card-body">
      <button type="button" class="btn btn-primary btn-sm mb-4" data-toggle="modal" title="Add" data-target="#addlocationModal">
        Add
      </button>
      <div class="table-responsive">
        <table id="datatable-basic" class="table table-bordered">
          <thead>
            <tr>
              <th>Action</th>
              <th>Id location</th>
              <th>Id Depo</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            @forelse($location as $location)
              <tr>
                <td>
                  <!-- View Button -->
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" title="View" 
                    data-target="#viewlocationModal" 
                    data-id-location="{{$location->id_location_EOR}}"
                    data-id-depo="{{$location->id_depo}}"
                    data-description="{{$location->description}}">View
                  </button>
                  <!-- Edit Button -->
                  <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" title="Edit"
                    data-target="#editlocationModal"
                    data-id-location="{{$location->id_location_EOR}}"
                    data-id-depo="{{$location->id_depo}}"
                    data-description="{{$location->description}}">Edit
                  </button>
                  <!-- Delete Form -->
                  <form action="{{ route('location.destroy', $location->id_location_EOR) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                  </form>
                </td>
                <!-- Data Rows -->
                <td>{{ $location->id_location_EOR }}</td>
                <td>{{ $location->id_depo }}</td>
                <td>{{ $location->description }}</td>
              </tr>
            @empty
              <tr>
                <td colspan="14" class="text-center">No data available</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal addlocationModal -->
  <div class="modal fade" id="addlocationModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add location</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('location.store') }}" method="POST">
          @csrf
          <div class="modal-body">
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

  <!-- Modal viewlocationModal -->
  <div class="modal fade" id="viewlocationModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">View location</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table">
            <tbody>
              <tr><th>Id location</th><td id="view-id-location"></td></tr>
              <tr><th>Id Depo</th><td id="view-id-depo"></td></tr>
              <tr><th>Description</th><td id="view-description"></td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
