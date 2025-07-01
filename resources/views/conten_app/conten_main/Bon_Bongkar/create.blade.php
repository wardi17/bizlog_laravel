@extends('conten_app.layouts.app')

@section('content')
<div class="container">
    <h1>Create New Bon Bongkar</h1>
    <form action="{{ route('msbonbongkar.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_depo">ID Depo</label>
            <input type="text" name="id_depo" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="id_bar_code">ID Bar Code</label>
            <input type="text" name="id_bar_code" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="id_container">ID Container</label>
            <input type="text" name="id_container" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="id_pelayaran">ID Pelayaran</label>
            <input type="text" name="id_pelayaran" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="driver_name">Driver Name</label>
            <input type="text" name="driver_name" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="id_consignee">ID Consignee</label>
            <input type="text" name="id_consignee" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="container_number">Container Number</label>
            <input type="text" name="container_number" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="id_driver">ID Driver</label>
            <input type="text" name="id_driver" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="date_in">Date In</label>
            <input type="date" name="date_in" class="form-control" required>
        </div>
          <div class="form-group">
            <label for="id_paydate">ID Paydate</label>
            <input type="text" name="id_paydate" class="form-control" required>
        </div>
         <div class="form-group">
            <label for="remak">Remak</label>
            <textarea type="text" name="remak" class="form-control" required>
        </div>
        <!-- Submit button -->
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
