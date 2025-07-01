@extends('conten_app.layouts.app')

@section('content')
<div class="container">
    <h1>Create New Bon Muat</h1>
    <form action="{{ route('bon_muat.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="do_no">Do No</label>
            <input type="text" name="do_no" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="container_no">Container No</label>
            <input type="date" name="container_no" class="form-control">
        </div>
        <div class="form-group">
            <label for="customer">Customer</label>
            <input type="text" name="customer" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="destination">Destination</label>
            <input type="text" name="destination" class="form-control">
        </div>
        <div class="form-group">
            <label for="trucker_name">Trucker Name</label>
            <input type="date" name="trucker_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="vehicle_no">Vehicle No</label>
            <input type="date" name="vehicle_no" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="vessel_voy">Vessel Voy</label>
            <input type="date" name="vessel_voy" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="party">party</label>
            <input type="date" name="party" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="driver">driver</label>
            <input type="date" name="driver" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="remarks">remarks</label>
            <input type="date" name="remarks" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="commodity">commodity</label>
            <input type="date" name="commodity" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email_pic">email pic</label>
            <input type="date" name="email_pic" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="print_status">print status</label>
            <input type="date" name="print_status" class="form-control" required>
        </div>
        <!-- Add additional input fields as needed -->
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
