<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repair Tarif Item</title>

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
        <h1>Repair Tarif Item</h1>
        <form action="{{ route('repair_tarif_item.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Id Task Code</label>
                <input type="text" name="id_task_code" class="form-control" placeholder="Masukkan Id Task Code" required>
            </div>
            <div class="form-group">
                <label>Id Depo</label>
                <input type="text" name="id_depo" class="form-control" placeholder="Masukkan Id Depo" required>
            </div>
            <div class="form-group">
                <label>Id Pelayaran</label>
                <input type="Text" name="id_pelayaran" class="form-control" placeholder="Masukkan Id Pelayaran" required>
            </div>
            <div class="form-group">
                <label>Groups</label>
                <input type="Text" name="groups" class="form-control" placeholder="Masukkan Groups" required>
            </div>
            <div class="form-group">
                <label>Id Component</label>
                <input type="Text" name="id_component" class="form-control" placeholder="Masukkan Id Component" required>
            </div>
            <div class="form-group">
                <label>Repair Type</label>
                <input type="Text" name="repair_type" class="form-control" placeholder="Masukkan Repair Type" required>
            </div>
            <div class="form-group">
                <label>Location</label>
                <input type="Text" name="location" class="form-control" placeholder="Masukkan Location" required>
            </div>
            <div class="form-group">
                <label>Lengths</label>
                <input type="Text" name="lengths" class="form-control" placeholder="Masukkan Lengths" required>
            </div>
            <div class="form-group">
                <label>Width</label>
                <input type="Text" name="width" class="form-control" placeholder="Masukkan Width" required>
            </div>
            <div class="form-group">
                <label>Qty</label>
                <input type="Text" name="qty" class="form-control" placeholder="Masukkan Qty" required>
            </div>
            <div class="form-group">
                <label>Unit</label>
                <input type="Text" name="unit" class="form-control" placeholder="Masukkan Unit" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="Text" name="unit" class="form-control" placeholder="Masukkan Description" required>
            <div class="form-group">
                <label>Lab Hour</label>
                <input type="Text" name="lab_hour" class="form-control" placeholder="Masukkan Lab Hour" required>
            </div>
            <div class="form-group">
                <label>Mat Cost</label>
                <input type="Text" name="mat_cost" class="form-control" placeholder="Masukkan Mat Cost" required>
            </div>
            <div class="form-group">
                <label>Third Party Mat Cost</label>
                <input type="Text" name="third_party_mat_cost" class="form-control" placeholder="Masukkan Third Party Mat Cost" required>
            </div>
            <div class="form-group">
                <label>Lab Rate Flag</label>
                <input type="Text" name="lab_rate_flag" class="form-control" placeholder="Masukkan Lab Rate Flag" required>
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
