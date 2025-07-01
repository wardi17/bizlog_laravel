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
      <h3 class="card-title"> Switch Dms </h3>
    </div>
    <div class="card-body">
      <button type="button" class="btn btn-primary btn-sm mb-4" data-toggle="modal" title="Add" data-target="#addswitch_dmsModal">
        Add
      </button>
      <div class="table-responsive">
        <table id="datatable-basic" class="table table-bordered">
          <thead>
            <tr>
              <th>Actions</th>
              <th>ID</th>
              <th>Switch Dms</th>
              <th>Id Switch Dms</th>
              <th>Container No</th>
              <th>Bl No</th>
              <th>Date In</th>
              <th>Survey Status</th>
              <th>Codeco Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach($switch_dms as $switch_dmss)
              <tr>
                <td>
                  <!-- View Button -->
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" title="View" 
                    data-target="#viewswitch_dmsModal" 
                    data-id-bon-bongkar="{{$switch_dmss->id_switch_dms}}" 
                    data-id-depo="{{$switch_dmss->container_no}}" 
                    data-company-name="{{$switch_dmss->bl_no}}" 
                    data-warehouse-address="{{$switch_dmss->date_in}}" 
                    data-no-unloading-bon="{{$switch_dmss->date_survey_status}}" 
                    data-unload-date="{{$switch_dmss->codeco_status}}">View
                  </button>
                  <!-- Edit Button -->
                  <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" title="Edit"
                    data-target="#Editswitch_dmsModal" 
                    data-id-switch-dms="{{$switch_dmss->id_switch_dms}}" 
                    data-container-no="{{$switch_dmss->container_no}}" 
                    data-bl-no="{{$switch_dmss->bl_no}}" 
                    data-date-in="{{$switch_dmss->date_in}}" 
                    data-date-survey-status="{{$switch_dmss->date_survey_status}}" 
                    data-codeco-status="{{$switch_dmss->codeco_status}}">Edit
                  </button>
                  <!-- Delete Form -->
                  <form action="{{ route('switch_dms.destroy', $switch_dmss->id_switch_dms) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                  </form>
                </td>
                <!-- Data Rows -->
                <td>{{ $switch_dmss->id_switch_dms }}</td>
                <td>{{ $switch_dmss->container_no}}</td>
                <td>{{ $switch_dmss->bl_no }}</td>
                <td>{{ $switch_dmss->container_no}}</td>
                <td>{{ $switch_dmss->date_in }}</td>
                <td>{{ $switch_dmss->date_survey_status }}</td>
                <td>{{ $switch_dmss->codeco_status }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal addswitch_dmsModal -->
  <div class="modal fade" id="addswitch_dmsModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Switch Dms</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('switch_dms.store') }}" method="POST">
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

  <!-- Modal viewswitch_dmsModal -->
  <div class="modal fade" id="viewswitch_dmsModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">View Switch Dms</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table">
            <tbody>
              <tr><th>ID</th><td>{{ $switch_dmss->id_switch_dms ?? ''}}</td></tr>
              <!-- Add other rows similarly -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
