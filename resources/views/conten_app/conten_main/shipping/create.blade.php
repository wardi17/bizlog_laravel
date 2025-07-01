<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Shipping Baru</title>

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
        <h1>Tambah Shipping Baru</h1>
        <form action="{{ route('shipping.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>prefix</label>
                <input type="text" name="prefix" class="form-control" placeholder="Masukkan nomor prefix" required>
            </div>
            <div class="form-group">
                <label>shipping name</label>
                <input type="text" name="shipping_name" class="form-control" placeholder="Masukkan jenis shipping name" required>
            </div>
            <div class="form-group">
                <label>email</label>
                <input type="text" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nomor Telpon</label>
                <input type="text" name="phone_number" class="form-control">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="address" class="form-control" placeholder="Masukkan address">
            </div>
            <div class="form-group">
                <label>Kota</label>
                <input type="text" name="city" class="form-control" placeholder="Masukkan city">
            </div>
            <div class="form-group">
                <label>Kode Pos</label>
                <input type="text" name="pos_code" class="form-control" placeholder="Masukkan pos code">
            </div>
            <div class="form-group">
                <label>Negara</label>
                <input type="text" name="country" class="form-control" placeholder="Masukkan country">
            </div>
            <div class="form-group">
                <label>Status Aktif</label>
                <input type="text" name="status_active" class="form-control" placeholder="Masukkan status active">
            </div>
            <div class="form-group">
                <label>Kontak Pribadi</label>
                <input type="text" name="contact_personal" class="form-control" placeholder="Masukkan contact personal">
            </div>
            <div class="form-group">
                <label>Tanggal Registration</label>
                <input type="text" name="registration_date" class="form-control" placeholder="Masukkan registration date">
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
