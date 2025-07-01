@extends('conten_app.layouts.app')

@section('content')
<div class="container">
    <h1>Create New Switch Dms</h1>
    <form action="{{ route('msswitchdms.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="container_no">Container No</label>
            <input type="text" name="container_no" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="warehouse_address">Warehouse Address</label>
            <input type="text" name="warehouse_address" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="bl_no">Bl No</label>
            <input type="text" name="bl_no" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="date_in">Date In</label>
            <input type="date" name="date_in" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="survey_status">Survey Status</label>
            <input type="text" name="survey_status" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="codeco_status">Codeco Status</label>
            <input type="text" name="codeco_status" class="form-control" required>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
