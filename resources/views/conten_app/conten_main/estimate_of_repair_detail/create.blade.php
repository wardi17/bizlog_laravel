@extends('conten_app.layouts.app')

@section('content')
<div class="container">
    <h1>Create New Switch Dms</h1>
    <form action="{{ route('estimate_of_repair_detail.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="no">No</label>
            <input type="text" name="no" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="resp">Resp</label>
            <input type="text" name="resp" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="loc">Loc</label>
            <input type="text" name="loc" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="l">L</label>
            <input type="text" name="l" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="w">W</label>
            <input type="text" name="w" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="q">Q</label>
            <input type="text" name="q" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="curr">Curr</label>
            <input type="text" name="curr" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="hour">Hour</label>
            <input type="datetime" name="curr" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="labour">Labour</label>
            <input type="text" name="labour" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="material">Material</label>
            <input type="text" name="material" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="subtotal">Subtotal</label>
            <input type="text" name="subtotal" class="form-control" required>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
