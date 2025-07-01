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

  <!-- BASIC DATATABLE -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title"> Estimate Of Repair </h3>
    </div>
    <div class="card-body">
      <button type="button" class="btn btn-primary btn-sm mb-4" data-toggle="modal" title="Add" data-target="#addestimate_of_repairModal">
        Add
      </button>
      <div class="table-responsive">
        <table id="datatable-basic" class="table table-bordered">
          <thead>
            <tr>
              <th>Actions</th>
              <th>ID</th>
              <th>Estimate Of Repair</th>
              <th>No</th>
              <th>Description</th>
              <th>Resp</th>
              <th>Loc</th>
              <th>L</th>
              <th>W</th>
              <th>Q</th>
              <th>Hour</th>
              <th>Labour</th>
              <th>Material</th>
              <th>Subtotal</th>
            </tr>
          </thead>
          <tbody>
            @forelse($estimate_of_repair_detail as $estimate_of_repair_details)
              <tr>
                <td>
                  <!-- View Button -->
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" title="View" 
                    data-target="#viewestimate_of_repairModal" 
                    data-id-estimate-of-repair="{{$estimate_of_repair_details->id_estimate_of_repair}}" 
                    data-ctr-no="{{$estimate_of_repair_details->no}}" 
                    data-customer-name="{{$estimate_of_repair_details->description}}" 
                    data-resp="{{$estimate_of_repair_details->resp}}" 
                    data-loc="{{$estimate_of_repair_details->loc}}" 
                    data-l="{{$estimate_of_repair_details->l}}"
                    data-w="{{$estimate_of_repair_details->w}}"
                    data-q="{{$estimate_of_repair_details->q}}"
                    data-curr="{{$estimate_of_repair_details->curr}}"
                    data-hour="{{$estimate_of_repair_details->hour}}"
                    data-labour="{{$estimate_of_repair_details->labour}}"
                    data-material="{{$estimate_of_repair_details->material}}"
                    data-subtotal="{{$estimate_of_repair_details->subtotal}}">View
                  </button>
                  <!-- Edit Button -->
                  <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" title="Edit"
                    data-target="#Editestimate_of_repairModal" 
                    data-id-estimate-of-repair="{{$estimate_of_repair_details->id_estimate_of_repair}}" 
                    data-ctr-no="{{$estimate_of_repair_details->no}}" 
                    data-customer-name="{{$estimate_of_repair_details->description}}" 
                    data-resp="{{$estimate_of_repair_details->resp}}" 
                    data-loc="{{$estimate_of_repair_details->loc}}" 
                    data-l="{{$estimate_of_repair_details->l}}"
                    data-w="{{$estimate_of_repair_details->w}}"
                    data-q="{{$estimate_of_repair_details->q}}"
                    data-curr="{{$estimate_of_repair_details->curr}}"
                    data-hour="{{$estimate_of_repair_details->hour}}"
                    data-labour="{{$estimate_of_repair_details->labour}}"
                    data-material="{{$estimate_of_repair_details->material}}"
                    data-subtotal="{{$estimate_of_repair_details->subtotal}}">Edit
                  </button>
                  <!-- Delete Form -->
                  <form action="{{ route('estimate_of_repair_detail.destroy', $estimate_of_repair_details->id_estimate_of_repair_detail) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                  </form>
                </td>
                <!-- Data Rows -->
                <td>{{ $estimate_of_repair_details->id_estimate_of_repair }}</td>
                <td>{{ $estimate_of_repair_details->estimate_of_repair }}</td>
                <td>{{ $estimate_of_repair_details->no }}</td>
                <td>{{ $estimate_of_repair_details->description }}</td>
                <td>{{ $estimate_of_repair_details->resp }}</td>
                <td>{{ $estimate_of_repair_details->loc }}</td>
                <td>{{ $estimate_of_repair_details->l }}</td>
                <td>{{ $estimate_of_repair_details->w }}</td>
                <td>{{ $estimate_of_repair_details->q }}</td>
                <td>{{ $estimate_of_repair_details->curr }}</td>
                <td>{{ $estimate_of_repair_details->hour }}</td>
                <td>{{ $estimate_of_repair_details->labour }}</td>
                <td>{{ $estimate_of_repair_details->material }}</td>
                <td>{{ $estimate_of_repair_details->subtotal }}</td>
              </tr>
            @empty
              <tr>
                <td colspan="13" class="text-center">No data available</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal addestimate_of_repairModal -->
  <div class="modal fade" id="addestimate_of_repairModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Estimate Of Repair</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('estimate_of_repair_detail.store') }}" method="POST">
          @csrf
          <div class="modal-body">
            <!-- Form Fields -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal viewestimate_of_repairModal -->
  <div class="modal fade" id="viewestimate_of_repairModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">View Estimate Of Repair</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table">
            <tbody>
              <tr><th>ID</th><td id="view-estimate-of-repair"></td></tr>
              <tr><th>No</th><td id="view-no"></td></tr>
              <tr><th>description</th><td id="view-description"></td></tr>
              <tr><th>resp</th><td id="view-resp"></td></tr>
              <tr><th>loc</th><td id="view-loc"></td></tr>
              <tr><th>l</th><td id="view-l"></td></tr>
              <tr><th>w</th><td id="view-w"></td></tr>
              <tr><th>q</th><td id="view-q"></td></tr>
              <tr><th>curr</th><td id="view-curr"></td></tr>
              <tr><th>hour</th><td id="view-hour"></td></tr>
              <tr><th>labour</th><td id="view-labour"></td></tr>
              <tr><th>material</th><td id="view-material"></td></tr>
              <tr><th>subtotal</th><td id="view-subtotal"></td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection