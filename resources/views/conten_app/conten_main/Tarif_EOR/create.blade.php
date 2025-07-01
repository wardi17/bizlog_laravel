<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah tarif_eor Baru</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 600px;
            margin-top: 50px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #343a40;
        }

        .form-group label {
            font-weight: bold;
        }

        .btn-success {
            width: 100%;
            padding: 10px;
        }

        .btn-success:hover {
            background-color: #218838;
            transition: background-color 0.3s;
        }
    </style>
</head>
<body>
   
    <div class="container">
        <h1>Tambah Tarif EOR Baru</h1>
        <form action="{{ route('tarif_EOR.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Depo</label>
                <input type="text" name="id_depo" class="form-control" placeholder="depo" required>
            </div>
            <div class="form-group">
                <label>eor type</label>
                <input type="text" name="eor_tipe" class="form-control" placeholder="Masukkan eor_tipe" required>
            </div>
            <div class="form-group">
                <label>size</label>
                <input type="datetime-local" name="size" class="form-control" required>
            </div>
            <div class="form-group">
                <label>price</label>
                <input type="text" name="price" class="form-control">
            </div> 
            <div class="form-group">
                <label>eor_date</label>
                <input type="date" name="eor_date" class="form-control" placeholder="Masukkan eor_date">
            </div>
            <div class="form-group">
                <label>valuta</label>
                <input type="text" name="valuta" class="form-control" placeholder="Masukkan valuta">>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
