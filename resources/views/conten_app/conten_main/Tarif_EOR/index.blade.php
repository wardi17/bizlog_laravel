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
      <h3 class="card-title">Tarif EOR</h3>
    </div>
    <div class="card-body">
      <button type="button" class="btn btn-primary btn-sm mb-4" data-toggle="modal" title="Add" data-target="#addTarif_EORModal">
        Add
      </button>
      <div class="table-responsive">
        <table id="datatable-basic" class="table table-bordered">
          <thead>
            <tr>
              <th>Action</th>
              <th>Id </th>
              <th>Description</th>
              <th>Responsibility</th>
              <th>Location</th>
              <th>Length</th>
              <th>Width</th>
              <th>Quantity</th>
              <th>Currency</th>
              <th>Hour</th>
              <th>Labour</th>
              <th>Material</th>
              <th>Subtotal</th>
            </tr>
          </thead>
          <tbody>
			@if(isset($tarif_eor) && !empty($tarif_eor))
          
             @foreach ($tarif_eor as $tarif)
              <tr>
                <td>
                  <!-- View Button -->
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" title="View" 
                    data-target="#viewTarif_EORModal" 
                    data-id-tarif="{{$tarif->id_tarif_EOR}}"
                    data-id-depo="{{$tarif->id_depo}}"
                    data-description="{{$tarif->description}}"
                    data-resp="{{$tarif->resp}}"
                    data-id-location="{{$tarif->id_location}}"
                    data-l="{{$tarif->l}}"
                    data-w="{{$tarif->w}}"
                    data-q="{{$tarif->q}}"
                    data-curruncy="{{$tarif->curruncy}}"
                    data-hour="{{$tarif->hour}}"
                    data-labour="{{$tarif->labour}}"
                    data-material="{{$tarif->material}}"
                    data-subtotal="{{$tarif->subtotal}}"><span class="ti-book"></span>
                  </button>
                  <!-- Edit Button -->
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                   title="Update" data-target="#editTarif_EORModal"
                    data-id-tarif="{{$tarif->id_tarif_EOR}}"
                    data-id-depo="{{$tarif->id_depo}}"
                    data-description="{{$tarif->description}}"
                    data-resp="{{$tarif->resp}}"
                    data-id-location="{{$tarif->id_location}}"
                    data-l="{{$tarif->l}}"
                    data-w="{{$tarif->w}}"
                    data-q="{{$tarif->q}}"
                    data-curruncy="{{$tarif->curruncy}}"
                    data-hour="{{$tarif->hour}}"
                    data-labour="{{$tarif->labour}}"
                    data-material="{{$tarif->material}}"
                    data-subtotal="{{$tarif->subtotal}}"><span class="ti-pencil-alt"></span>
                  </button>
                  <!-- Delete Form -->
                  <form action="{{ route('tarif_EOR.destroy', $tarif->id_tarif_EOR) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Are you sure?')"> <span class="ti-trash"></span></button>
                  </form>
                </td>
                <!-- Data Rows -->
                <td>{{ $tarif->id_tarif_EOR }}</td>
                <td>{{ $tarif->description }}</td>
                <td>{{ $tarif->resp }}</td>
                <td>{{ $tarif->id_location }}</td>
                <td>{{ $tarif->l }}</td>
                <td>{{ $tarif->w }}</td>
                <td>{{ $tarif->q }}</td>
                <td>{{ $tarif->curruncy }}</td>
                <td>{{ $tarif->hour }}</td>
                <td>{{ $tarif->labour }}</td>
                <td>{{ $tarif->material }}</td>
                <td>{{ $tarif->subtotal }}</td>
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

  <!-- Modal addTarifModal -->
  <div class="modal fade" id="addTarif_EORModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Tarif EOR</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('tarif_EOR.store') }}" method="POST">
          @csrf
          <div class="modal-body">
          <div class="row">
            <div class="form-group">
               <input type="hidden" name="id_depo" class="form-control" placeholder="depo" value={{$depo}}  required>
          </div>
          <div class="form-group">
              <label>description</label>
              <input type="text" name="description" class="form-control" placeholder="description" required>
          </div>
          <div class="form-group">
              <label>Responsibility</label>
              <input type="text" name="resp" class="form-control" placeholder=" Responsibility" required>
          </div>
          <div class="form-group">
              <label>Location</label>
              <select name="id_location" id="id_location" class="form-control" style="width: 30%;" required>                         
                @forelse($location as $locations)                  
                    <option value="{{$locations->id_location}}" >{{$locations->description}}</option>
                    @empty
                    <option value="">No data available</option> 
                @endforelse 
              </select>
          </div> 
          <div class="form-group">
              <label>Length</label>
              <input type="text" name="l" class="form-control" placeholder="0">
          </div>
          <div class="form-group">
            <label>Width</label>
            <input type="text" name="w" class="form-control" placeholder="0">
        </div>
        <div class="form-group">
          <label>Quantity</label>
          <input type="text" name="q" class="form-control" placeholder="0">
        </div>
        <div class="form-group">
        <label>Currency</label>
        <select name="currency" id="currency" class="form-control" style="width: 30%;" required>                
          @forelse($valuta as $valutas)          
              <option value="{{$valutas}}" >{{$valutas}}</option>
              @empty
              <option value="">No data available</option> 
          @endforelse 
        </select>
       
        </div>
        <div class="form-group">
         <label>Hour</label>
         <input type="numeric" name="hour" class="form-control" placeholder="0">
        </div>
          <div class="form-group">
              <label>Labour</label>
              <input type="text" name="labour" class="form-control" placeholder="0">
          </div>
          <div class="form-group">
            <label>Material</label>
            <input type="text" name="material" class="form-control" placeholder="0">
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

   <!-- Modal editTarif_EORModal --><!-- Modal addTarifModal -->
  <div class="modal fade" id="editTarif_EORModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Tarif EOR</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('tarif_EOR.store') }}" method="POST">
                        @csrf
                        @method('PUT')
          <div class="modal-body">
          <div class="row">
            <div class="form-group">
               <input type="hidden" name="id_depo" class="form-control" placeholder="depo" value={{$depo}}  required>
          </div>
         

			<div hidden class="col-md-6 mb-3">
            <label for="description">description</label>
             <input type="text" name="description" class="form-control" id="pelayaran_id"
                 value="{{ old('description', $tarif->description) }}" required>
               @error('description')
                 <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
			<div hidden class="col-md-6 mb-3">
            <label for="resp">Responsibility</label>
             <input type="text" name="description" class="form-control" id="resp"
                 value="{{ old('resp', $tarif->resp) }}" required>
               @error('resp')
                 <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

			<div hidden class="col-md-6 mb-3">
            <label for="id_location">Location</label>
			 <select name="id_location" id="id_location" class="form-control" style="width: 30%;" required> 
             @forelse($location as $locations)                  
                    <option value="{{$locations->id_location}}" >{{$locations->description}}</option>
                    @empty
                    <option value="">No data available</option> 
                @endforelse
              </select> 
               @error('id_location')
                 <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
			<div hidden class="col-md-6 mb-3">
            <label for="Length">Length</label>
             <input type="text" name="l" class="form-control" id="l"
                 value="{{ old('l', $tarif->l) }}" required>
               @error('Length')
                 <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
			<div hidden class="col-md-6 mb-3">
            <label for="Width">Width</label>
             <input type="text" name="w" class="form-control" id="w"
                 value="{{ old('w', $tarif->w) }}" required>
               @error('Width')
                 <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
			<div hidden class="col-md-6 mb-3">
            <label for="Quantity">Quantity</label>
             <input type="text" name="q" class="form-control" id="q"
                 value="{{ old('q', $tarif->q) }}" required>
               @error('Quantity')
                 <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
			<div hidden class="col-md-6 mb-3">
            <label for="Currency">Currency</label>
             <select name="currency" id="currency" class="form-control" style="width: 30%;" required>                
				  @forelse($valuta as $valutas)          
					  <option value="{{$valutas}}" >{{$valutas}}</option>
					  @empty
					  <option value="">No data available</option> 
				  @endforelse 
				</select>               
				  @error('Currency')
                 <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
			<div hidden class="col-md-6 mb-3">
            <label for="Hour">Hour</label>
             <input type="text" name="hour" class="form-control" id="hour"
                 value="{{ old('hour', $tarif->hour) }}" required>
               @error('Hour')
                 <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

			<div hidden class="col-md-6 mb-3">
            <label for="Labour">Labour</label>
             <input type="text" name="labour" class="form-control" id="labour"
                 value="{{ old('labour', $tarif->labour) }}" required>
               @error('Labour')
                 <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

          <div hidden class="col-md-6 mb-3">
            <label for="Material">Material</label>
             <input type="text" name="material" class="form-control" id="material"
                 value="{{ old('material', $tarif->material) }}" required>
               @error('Material')
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


@endsection
