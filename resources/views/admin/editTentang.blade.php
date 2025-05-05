<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tentang Kami</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Arial', sans-serif;
        }

        .edit-berita-container {
            max-width: 700px;
            margin: 60px auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .edit-berita-container h3 {
            text-align: center;
            margin-bottom: 40px;
            font-weight: 600;
            color: #343a40;
        }

        .form-control {
            border-radius: 6px;
            font-size: 16px;
            padding: 12px;
            border: 1px solid #ced4da;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: none;
        }

        .form-label {
            font-weight: 600;
            color: #495057;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 6px;
            padding: 12px;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            margin-top: 15px;
            width: 100%;
            border-radius: 6px;
            padding: 12px;
            font-size: 16px;
            background-color: #6c757d;
            border-color: #6c757d;
            transition: background-color 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        textarea {
            resize: none;
        }

        @media (max-width: 768px) {
            .edit-berita-container {
                padding: 20px;
            }

            .edit-berita-container h3 {
                font-size: 24px;
            }

            .btn-primary, .btn-secondary {
                font-size: 14px;
                padding: 10px;
            }
        }

        .alert {
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="edit-berita-container">
        <h3>Edit Tentang Kami</h3>

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

        <form action="{{ route('postEditTentang', $tentang->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="tentang" class="form-label">Tentang</label>
                <textarea name="tentang" class="form-control" id="tentang" cols="30" rows="5">{{ $tentang->tentang }}</textarea>
            </div>
            <div class="form-group">
                <label for="visi" class="form-label">Visi</label>
                <textarea name="visi" class="form-control" id="visi" cols="30" rows="5">{{ $tentang->visi }}</textarea>
            </div>
            <div class="form-group">
                <label for="misi" class="form-label">Misi</label>
                <textarea name="misi" class="form-control" id="misi" cols="30" rows="5">{{ $tentang->misi }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update Tentang Kami</button>
            <a href="{{ route('dashTentang') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
