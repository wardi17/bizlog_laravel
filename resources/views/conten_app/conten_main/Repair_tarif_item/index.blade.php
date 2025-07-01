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
    
    <div class="card">
            <div class="card-header">
              <h3 class="card-title">Repair Tarif Item</h3>
            </div>
        <div class="card-body">

                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" title="Add"
                                    data-target="#addRepair_tarif_itemModal">
                                    <span class="ti-plus"></span>
                                </button>
            
            <div class="table-responsive">
                <table id="datatable-basic" class="table table-hover table-bordered">
                  <thead class="thead-light">
                        <tr> 
                            <th></th>
                            <th>Task Code</th>
                            <th>Depo</th>
                            <th>Group</th>
                            <th>Component</th>
                            <th>Repair Type</th>
                            <th>Location</th>
                            <th>Lengths</th>
                            <th>Width</th>
                            <th>Qty</th>
                            <th>Unit</th>
                            <th>Description</th>
                            <th>Lab Hour</th>
                            <th>Mat Cost</th>
                            <th>Third Party Mat Cost</th>
                            <th>Lab Rate Flag</th>


                        </tr>
                    </thead>
                    <tbody>
                     @if(isset($repair_tarif_item) && !empty($repair_tarif_item))
                        @foreach ($repair_tarif_item as $repair_tarif_items)
                     
                        <tr>
                            <td>

                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        title="view" data-target="#viewRepair_tarif_itemModal"
                                        data-id-task-code="{{$repair_tarif_items->id_task_code}}"
                                        data-id-depo="{{$repair_tarif_items->id_depo}}" 
                                        data-group-com="{{$repair_tarif_items->group_com}}"
                                        data-id-component="{{$repair_tarif_items->id_component}}"
                                        data-repair-type="{{$repair_tarif_items->repair_type}}"
                                        data-location="{{$repair_tarif_items->location}}"
                                        data-lengths="{{$repair_tarif_items->lengths}}"
                                        data-width="{{$repair_tarif_items->width}}"
                                        data-qty="{{$repair_tarif_items->qty}}"
                                        data-unit="{{$repair_tarif_items->unit}}"
                                        data-description="{{$repair_tarif_items->description}}"
                                        data-lab-hour="{{$repair_tarif_items->lab_hour}}"
                                        data-mat-cost="{{$repair_tarif_items->mat_cost}}"
                                        data-third-party-mat-cost="{{$repair_tarif_items->third_party_mat_cost}}"
                                        data-lab-rate-flag="{{$repair_tarif_items->lab_rate_flag}}">
                                        <span class="ti-book"></span>
                                    </button>
                                           <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        title="Update" data-target="#editRepair_tarif_itemModal"
                                        data-id-task-code="{{$repair_tarif_items->id_task_code}}"
                                        data-id-depo="{{$repair_tarif_items->id_depo}}" 
                                        data-group-com="{{$repair_tarif_items->group_com}}"
                                        data-id-component="{{$repair_tarif_items->id_component}}"
                                        data-repair-type="{{$repair_tarif_items->repair_type}}"
                                        data-location="{{$repair_tarif_items->location}}"
                                        data-lengths="{{$repair_tarif_items->lengths}}"
                                        data-width="{{$repair_tarif_items->width}}"
                                        data-qty="{{$repair_tarif_items->qty}}"
                                        data-unit="{{$repair_tarif_items->unit}}"
                                        data-description="{{$repair_tarif_items->description}}"
                                        data-lab-hour="{{$repair_tarif_items->lab_hour}}"
                                        data-mat-cost="{{$repair_tarif_items->mat_cost}}"
                                        data-third-party-mat-cost="{{$repair_tarif_items->third_party_mat_cost}}"
                                        data-lab-rate-flag="{{$repair_tarif_items->lab_rate_flag}}">
                                        <span class="ti-pencil-alt"></span>
                                    </button>
                                    <form action="{{ route('repair_tarif_item.destroy', $repair_tarif_items->id_task_code) }}" method="POST" style="display:inline-block;" title="Delete">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"  class="btn btn-primary btn-sm" onclick="return confirm('Are You Sure delete ?')">
                                            <span class="ti-trash"></span>
                                        </button>
                                    </form>
                            </td>
                           
                            <td>{{$repair_tarif_items->id_task_code}}</td>
                            <td>{{$repair_tarif_items->id_depo}}</td>
                            <td>{{$repair_tarif_items->group_com}}</td>
                            <td>{{$repair_tarif_items->id_component}}</td>
                            <td>{{$repair_tarif_items->repair_type}}</td>
                            <td>{{$repair_tarif_items->location}}</td>
                            <td>{{$repair_tarif_items->lengths}}</td>
                            <td>{{$repair_tarif_items->width}}</td>
                            <td>{{$repair_tarif_items->qty}}</td>
                            <td>{{$repair_tarif_items->unit}}</td>
                            <td>{{$repair_tarif_items->description}}</td>
                            <td>{{$repair_tarif_items->lab_hour}}</td>
                            <td>{{$repair_tarif_items->mat_cost}}</td>
                            <td>{{$repair_tarif_items->third_party_mat_cost}}</td>
                            <td>{{$repair_tarif_items->lab_rate_flag}}</td>

                        </tr>
                        @endforeach
                        @else
                        <p>No data available</p>
                     @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 


        <!-- Modal Lihat  Repair_tarif_item -->
        <div class="modal fade" id="viewRepair_tarif_itemModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detail Repair Tarif Item</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                                    

                            <div class="col-md-6 mb-3">
                                <label for="id_task_code">Task Code</label>
                                <input type="Text" name="id_task_code" class="form-control" id="modal-id-task-code"
                                     readonly >
                               
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="id_depo">Depo</label>
                                <input type="Text" name="id_depo" class="form-control" id="modal-id-depo"
                                readonly>
                                
                            </div>
                           
                            <div class="col-md-6 mb-3">
                                <label for="groups">Groups</label>
                                <input type="text" name="group_com" class="form-control" id="modal-group-com"   readonly>
                                
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="id_component"> Component</label>
                                <input type="text" name="id_component" class="form-control" id="modal-id-component"    readonly>
                               
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="repair_type">Repair Type</label>
                                <input type="text" name="repair_type" class="form-control" id="modal-repair-type"  readonly>
                               
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="location">location</label>
                                <input type="text" name="location" class="form-control"  id="modal-location"  readonly>
                              
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lengths"> Lengths</label>
                                <input type="Text" name="lengths" class="form-control"  id="lengths"  readonly>
                               
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="width"> Width</label>
                                <input type="Text" name="width" class="form-control"  id="modal-width" readonly>
                                
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="qty"> Qty</label>
                                <input type="Text" name="qty" class="form-control"    id="modal-qty" readonly>
                                
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="unit"> Unit</label>
                                <input type="Text" name="unit" class="form-control"  id="modal-unit" readonly>
                               
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="description"> Description</label>
                                <input type="Text" name="description" class="form-control"
                                    id="modal-description"  readonly>
                               
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lab_hour">Lab Hour</label>
                                <input type="Text" name="lab_hour" class="form-control"  id="modal-lab_hour"   readonly>
                                
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="mat_cost">Mat Cost</label>
                                <input type="Text" name="mat_cost" class="form-control"    id="modal-mat_cost"  readonly>
                               
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="third_party_mat_cost">Third Party Mat Cost</label>
                                <input type="Text" name="third_party_mat_cost" class="form-control"  id="modal-third_party_mat_cost"      readonly>
                                
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lab_rate_flag">Lab Rate Flag</label>
                                <input type="Text" name="lab_rate_flag" class="form-control"    id="modal-lab_rate_flag"   readonly>
                                
                            </div>
                            
                 </div>
                    </div>
                </div>
            </div>
        </div>


            <!-- Edit Depo Modal -->
    <div class="modal fade" id="editRepair_tarif_itemModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Repair Tarif Item</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('repair_tarif_item.update',$repair_tarif_items) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                        <div class="row">
                                    

                                    <div class="col-md-6 mb-3">
                                        <label for="id_task_code">Id Task Code</label>
                                        <input type="Text" name="id_task_code" class="form-control" id="modal-id-task-code"
                                             required>
                                        @error('id_task_code')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="id_depo">Id Depo</label>
                                        <input type="Text" name="id_depo" class="form-control" id="modal-id_depo"
                                           required>
                                        @error('id_depo')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="id_repair_tarif_item">Repair Tarif Item</label>
                                        <textarea type="text" name="id_repair_tarif_item" class="form-control" id="modal-id-repair-tarif-item">
                                            </textarea>
                                        @error('id_repair_tarif_item')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="groups">Groups</label>
                                        <input type="text" name="groups" class="form-control" id="modal-groups"   required>
                                        @error('groups')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="id_component">Id Component</label>
                                        <input type="text" name="id_component" class="form-control" id="modal-id-component"
                                             required>
                                        @error('id_component')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="repair_type">Repair Type</label>
                                        <input type="text" name="repair_type" class="form-control" id="modal-repair-type"  required>
                                        @error('repair_type')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="location">location</label>
                                        <input type="text" name="location" class="form-control"  id="modal-location"  required>
                                        @error('location')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lengths"> Lengths</label>
                                        <input type="Text" name="lengths" class="form-control"  id="lengths"  required>
                                        @error('lengths')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="width"> Width</label>
                                        <input type="Text" name="width" class="form-control"  id="modal-width" required>
                                        @error('width')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="qty"> Qty</label>
                                        <input type="Text" name="qty" class="form-control"    id="modal-qty" required>
                                        @error('qty')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="unit"> Unit</label>
                                        <input type="Text" name="unit" class="form-control"  id="modal-unit" required>
                                        @error('unit')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="description"> Description</label>
                                        <input type="Text" name="description" class="form-control"
                                            id="modal-description"  required>
                                        @error('description')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lab_hour">Lab Hour</label>
                                        <input type="Text" name="lab_hour" class="form-control"  id="modal-lab_hour"   required>
                                        @error('lab_hour')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="mat_cost">Mat Cost</label>
                                        <input type="Text" name="mat_cost" class="form-control"    id="modal-mat_cost"  required>
                                        @error('mat_cost')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="third_party_mat_cost">Third Party Mat Cost</label>
                                        <input type="Text" name="third_party_mat_cost" class="form-control"  id="modal-third_party_mat_cost"      required>
                                        @error('third_party_mat_cost')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lab_rate_flag">Lab Rate Flag</label>
                                        <input type="Text" name="lab_rate_flag" class="form-control"    id="modal-lab_rate_flag"   required>
                                        @error('lab_rate_flag')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
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

<script src="assets_multi/js_plugin/jquery-3.6.0.min.js"></script>
<script src="assets_multi/js_plugin/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function () {

$('#viewRepair_tarif_itemModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget); // Tombol yang diklik
  var modal = $(this);
  
  // Ambil data dari atribut tombol
  var idtaskcode = button.data('id-task-code');
  var iddepo = button.data('id-depo');
  var groupcom = button.data('group-com');
  var idcomponent = button.data('id-component');
  var repairtype = button.data('repair-type');
  var location = button.data('location');
  var lengths = button.data('lengths');
  var width = button.data('width');
  var qty = button.data('qty');
  var unit = button.data('unit');
  var description = button.data('description');
  var labhour = button.data('lab-hour');
  var matcost = button.data('mat-cost');
  var thirdpartymatcost = button.data('third-party-mat-cost');
  var labrateflag = button.data('lab-rate-flag');
  

  modal.find('#modal-id-task-code').val(idtaskcode);
  modal.find('#modal-id-depo').val(iddepo);
  modal.find('#modal-group-com').val(groupcom);
  modal.find('#modal-id-component').val(idcomponent);
  modal.find('#modal-repair-type').val(repairtype);
  modal.find('#modal-location').val(location);
  modal.find('#modal-lengths').val(lengths);
  modal.find('#modal-width').val(width);
  modal.find('#modal-qty').val(qty);
  modal.find('#modal-unit').val(unit);
  modal.find('#modal-description').val(description);
  modal.find('#modal-labhour').val(labhour);
  modal.find('#modal-matcost').val(matcost);
  modal.find('#modal-third-party-mat-cost').val(thirdpartymatcost);
  modal.find('#modal-lab-rate-flag').val(labrateflag);
});


$('#editRepair_tarif_itemModal').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget); // Tombol yang diklik
var modal = $(this);

// Ambil data dari atribut tombol
var idtaskcode = button.data('id-task-code');
  var iddepo = button.data('id-depo');
  var groups = button.data('groups');
  var idcomponent = button.data('id-component');
  var repairtype = button.data('repair-type');
  var location = button.data('location');
  var lengths = button.data('lengths');
  var width = button.data('width');
  var qty = button.data('qty');
  var unit = button.data('unit');
  var description = button.data('description');
  var labhour = button.data('lab-hour');
  var matcost = button.data('mat-cost');
  var thirdpartymatcost = button.data('third-party-mat-cost');
  var labrateflag = button.data('lab-rate-flag');

// Isi nilai ke input
modal.find('#modal-id-task-code').val(idtaskcode);
modal.find('#modal-id-depo').val(iddepo);
modal.find('#modal-groups').val(groups);
modal.find('#modal-id-component').val(idcomponent);
modal.find('#modal-repair-type').val(repairtype);
modal.find('#modal-location').val(location);
modal.find('#modal-lengths').val(lengths);
modal.find('#modal-width').val(width);
modal.find('#modal-qty').val(qty);
modal.find('#modal-unit').val(unit);
modal.find('#modal-description').val(description);
modal.find('#modal-labhour').val(labhour);
modal.find('#modal-matcost').val(matcost);
modal.find('#modal-third-party-mat-cost').val(thirdpartymatcost);
modal.find('#modal-lab-rate-flag').val(labrateflag);
});



});
</script>

