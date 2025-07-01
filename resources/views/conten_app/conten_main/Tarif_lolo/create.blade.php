@extends('conten_app.layouts.template')

@section('content')
<div class="container">
    <h1>Create New tarif Lolo</h1>
    <form action="{{ route('tarif_lolo.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_tarif_lolo">Id Tarif Lolo</label>
            <input type="number" name="id_tarif_lolo" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="id_depo">Id Depo</label>
            <input type="text" name="id_depo" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="lolo_tipe">Lolo Tipe</label>
            <input type="text" name="lolo_tipe" class="form-control">
        </div>

        <div class="form-group">
            <label for="id_pelayaran">Id Pelayaran</label>
            <input type="text" name="id_pelayaran" class="form-control">
        </div>

        <div class="form-group">
            <label for="size">Size</label>
            <input type="number" name="size" class="form-control">
        </div>

        <div class="form-group">
            <label for="price_lolo">Price Lolo</label>
            <input type="number" name="price_lolo" class="form-control">
        </div>

        <div class="form-group">
            <label for="lolo_date">Lolo Date</label>
            <input type="date" name="lolo_date" class="form-control">
        </div>

        <div class="form-group">
            <label for="valuta">Valuta</label>
            <input type="text" name="valuta" class="form-control">
        </div>

        <div class="form-group">
            <label for="whosing_diterze">Whosing Diterze</label>
            <input type="text" name="whosing_diterze" class="form-control">
        </div>

        <div class="form-group">
            <label for="whosing_chemical">Whosing Diterze</label>
            <input type="text" name="whosing_diterze" class="form-control">
        </div>

        <div class="form-group">
            <label for="whosing_water">Whosing Water</label>
            <input type="text" name="whosing_water" class="form-control">
        </div>

        <div class="form-group">
            <label for="administration">Administration</label>
            <input type="text" name="administration" class="form-control">
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
