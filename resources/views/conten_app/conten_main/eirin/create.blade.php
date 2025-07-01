@extends('conten_app.layouts.app')

@section('content')
<div class="container">
    <h1>Create New Delivery Order</h1>
    <form action="{{ route('msdeliveryorders.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="order_number">Order Number</label>
            <input type="text" name="order_number" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Do_Date">Do Date</label>
            <input type="date" name="Do_Date" class="form-control">
        </div>
        <div class="form-group">
            <label for="id_depo">ID Depo</label>
            <input type="text" name="id_depo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="number_voyage">Number Voyage</label>
            <input type="text" name="number_voyage" class="form-control">
        </div>
        <div class="form-group">
            <label for="port_of_loading">Port of Loading</label>
            <input type="text" name="port_of_loading" class="form-control">
        </div>
        <div class="form-group">
            <label for="departure_date">Departure Date</label>
            <input type="date" name="departure_date" class="form-control" required>
        </div>
        <!-- Add additional input fields as needed -->
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
