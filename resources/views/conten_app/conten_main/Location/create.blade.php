@extends('conten_app.layouts.app')

@section('content')
<div class="container">
    <h1>Create New location</h1>
    <form action="{{ route('location.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_location">Id location</label>
            <input type="number" name="id_location" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="id_depo">Id Depo</label>
            <input type="text" name="id_depo" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input type="number" name="description" class="form-control">
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
