<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Galeri</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .edit-berita-container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .edit-berita-container h3 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .edit-berita-container .form-control {
            border-radius: 8px;
        }

        .edit-berita-container .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 8px;
            padding: 10px;
            font-size: 16px;
            width: 100%;
        }

        .edit-berita-container .form-label {
            font-weight: bold;
        }

        .edit-berita-container .form-group {
            margin-bottom: 20px;
        }

        .edit-berita-container .btn-secondary {
            margin-top: 10px;
            width: 100%;
        }

        .alert {
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="edit-berita-container">
        <h3>Tambah Galeri</h3>

        <!-- Tempat untuk menampilkan notifikasi -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('postTambahGaleri') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control-file" id="gambar" accept="img/*" name="gambar">
            </div>

            <button type="submit" class="btn btn-primary">Tambah Galeri</button>
            <a href="{{ route('dashberita') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
