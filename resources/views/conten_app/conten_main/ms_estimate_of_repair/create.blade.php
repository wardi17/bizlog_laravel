<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kendaraan Baru</title>

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
        <h1>Tambah Kendaraan Baru</h1>
        <form action="{{ route('kendaraan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nomor Plat</label>
                <input type="text" name="nomor_plat" class="form-control" placeholder="Masukkan nomor plat" required>
            </div>
            <div class="form-group">
                <label>Jenis Kendaraan</label>
                <input type="text" name="jenis_kendaraan" class="form-control" placeholder="Masukkan jenis kendaraan" required>
            </div>
            <div class="form-group">
                <label>Waktu Masuk</label>
                <input type="datetime-local" name="waktu_masuk" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Waktu Keluar</label>
                <input type="datetime-local" name="waktu_keluar" class="form-control">
            </div>
            <div class="form-group">
                <label>Biaya Parkir (Rp)</label>
                <input type="number" name="biaya_parkir" class="form-control" placeholder="Masukkan biaya parkir">
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
