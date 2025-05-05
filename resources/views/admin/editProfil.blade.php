<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berita</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e9ecef;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .edit-berita-container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            border: 1px solid #dee2e6;
            background: linear-gradient(135deg, #fdfbfb 0%, #ebedee 100%);
        }

        .edit-berita-container h3 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: 600;
            color: #343a40;
        }

        .edit-berita-container .form-control {
            border-radius: 8px;
            border-color: #ced4da;
        }

        .edit-berita-container .form-control-file {
            border-radius: 8px;
        }

        .edit-berita-container .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 8px;
            padding: 10px;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .edit-berita-container .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .edit-berita-container .btn-outline-danger {
            border-radius: 8px;
            padding: 10px;
            font-size: 16px;
            margin-top: 10px;
            width: 100%;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .edit-berita-container .form-label {
            font-weight: 500;
            color: #495057;
        }

        .edit-berita-container .form-group {
            margin-bottom: 20px;
        }

        .edit-berita-container .btn-secondary {
            margin-top: 10px;
            width: 100%;
            background-color: #6c757d;
            border-color: #6c757d;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .edit-berita-container .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #4e555b;
        }

        .edit-berita-container img {
            display: block;
            margin: 10px auto;
            border-radius: 8px;
            border: 1px solid #ced4da;
        }

    </style>
</head>
<body>

    <div class="edit-berita-container">
        <h3>Edit Akun</h3>
        <form action="{{ route('postEditProfil', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $user->nama }}" required>
            </div>
        
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
            </div>
        
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
        
            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>
        
            <div class="form-group">
                <label for="role">Role</label>
                <input type="text" class="form-control" id="role" name="role" value="{{ $user->role }}" required>
            </div>
        
            <div class="form-group">
                <label for="profil">Profil</label>
                <input type="file" class="form-control-file" id="profil" name="profil" accept="image/*">
                @if ($user->profil)
                    <img src="{{ asset($user->profil) }}" alt="Gambar Profil" width="150" class="mt-2">
                @endif
            </div>
        
            <button type="submit" class="btn btn-primary">Update Akun</button>
            <a href="{{ route('homeAdmin') }}" class="btn btn-outline-danger">Kembali</a>
        </form>        
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
