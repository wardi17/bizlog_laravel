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
              <h3 class="card-title">Master Estimate Of Repair</h3>
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
          <!-- END FILTER COLUMN --ini tdk boleh di hapus pasti error>



   <!-- BASIC DATATABLE -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Datatable with Default Features</h3>
            </div>
            <div class="card-body">

                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" title="Add"
                                    data-target="#addDetailEstimateModal">
                                    <span class="ti-plus"></span>
                                </button>
<!--

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
                        <tr> <th></th>
                            <th>ID</th>
                            <th>ID Depo</th>
                            <th>Eor No</th>
                            <th>Container No</th>
                            <th>Bl No</th>
                            <th>Consignee</th>
                            <th>Eor Date</th>
                            <th>Principal</th>
                            <th>Valuta</th>
                            <th>Vessel Voyage</th>
                            <th>Date In</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($msestimateofrepair as $msestimateofrepairs)
                        <tr>
                            <td>

                            </td>
                            <td>{{$msestimateofrepairs->id_estimate_of_repair}}</td>
                            <td>{{$msestimateofrepairs->id_depo}}</td>
                            <td>{{$msestimateofrepairs->eor_no}}</td>
                            <td>{{$msestimateofrepairs->container_no}}</td>
                            <td>{{$msestimateofrepairs->bl_no}}</td>
                            <td>{{$msestimateofrepairs->consignee}}</td>
                            <td>{{$msestimateofrepairs->eor_date}}</td>
                            <td>{{$msestimateofrepairs->principal}}</td>
                            <td>{{$msestimateofrepairs->valuta}}</td>
                            <td>{{$msestimateofrepairs->vessel_voyage}}</td>
                            <td>{{$msestimateofrepairs->date_in}}</td>



                        </tr>
                        @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- END BASIC DATATABLE -->

                    <!-- Modal add delivery_orders -->



        </div>
      </div>
      <!-- END MAIN CONTENT -->

@endsection

@push('scripts')
@endpush
