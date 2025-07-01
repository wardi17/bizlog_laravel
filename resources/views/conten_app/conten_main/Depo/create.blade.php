<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah depo Baru</title>

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
        <h1>Tambah depo Baru</h1>
        <form action="{{ route('depo.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>depo name </label>
                <input type="text" name="depo_name" class="form-control" placeholder="depo_name" required>
            </div>
            <div class="form-group">
                <label>address</label>
                <input type="text" name="address" class="form-control" placeholder="address" required>
            </div>
            <div class="form-group">
                <label>contact number </label>
                <input type="text" name="contact_number" class="form-control" required>
            </div>
            <div class="form-group">
                <label>email </label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>telp </label>
                <input type="text" name="telp" class="form-control" placeholder="telp">
            </div>
			<div class="form-group">
                <label>contact person </label>
                <input type="number" name="contact_person" class="form-control" placeholder="contact_person">
            </div>
			<div class="form-group">
                <label>contact person name </label>
                <input type="text" name="contact_person_name" class="form-control" placeholder="contact_person_name">
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
