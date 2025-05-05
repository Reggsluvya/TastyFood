<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Admin</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <style>
        .sidebar {
            width: 250px;
            background-color: #8967B3;
            padding: 20px;
            min-height: 100vh;
            color: #fff;
            position: fixed;
        }

        .sidebar h3 {
            color: #fff;
            text-align: center;
            margin-bottom: 20px;
            font-family: 'Poppins', sans-serif;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            display: block;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 1.1rem;
        }

        .sidebar ul li a:hover {
            background-color: #212221;
        }

        .logout-wrapper {
            border-top: 1px solid #ddd;
            padding-top: 10px;
            margin-top: auto;
            /* Push logout to the bottom */
        }

        .logout-wrapper a {
            color: #adb5bd;
            text-decoration: none;
            padding: 10px;
            display: block;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .logout-wrapper a:hover {
            background-color: #212221;
        }

        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .card .card-body {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .card .card-body h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        .card .card-body h5 {
            margin: 0;
            font-size: 1.2rem;
            color: #fff;
        }

        .card .icon {
            font-size: 3rem;
            color: #fff;
        }

        .card .icon-container {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.1);
            width: 70px;
            height: 70px;
            border-radius: 50%;
        }

        .card.bg-primary {
            background-color: #007bff;
        }

        .card.bg-secondary {
            background-color: #6c757d;
        }

        .card.bg-success {
            background-color: #28a745;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .nav-link.active {
            color: white !important;
            background-color: #007bff;
        }

        .hr {
            width: 100%;
            height: 3px;
            background-color: #ebe7e7;
            border: none;
            border-radius: 10px;
            opacity: 100%;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h4 class="text-center">Dashboard</h4>
        <hr class="hr">
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a class="nav-link" href="{{ route('homeAdmin') }}">
                    <i class="bi bi-house-door-fill"></i> Home
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link" href="{{ route('dashberita') }}">
                    <i class="bi bi-newspaper"></i> Berita
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link" href="{{ route('dashGaleri') }}">
                    <i class="bi bi-images"></i> Galeri
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link" href="{{ route('dashpesan') }}">
                    <i class="bi bi-chat-left-text"></i> Feedback
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link" href="{{ route('Maps') }}">
                    <i class="bi bi-geo-alt-fill"></i> Maps
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link" href="{{ route('dashTentang') }}">
                    <i class="bi bi-info-circle-fill"></i> Tentang
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link active" href="{{ route('dashKontak') }}">
                    <i class="bi bi-headset"></i> Kontak
                </a>
            </li>
            <hr style="padding-top: 50px;">
            <div class="logout-wrapper">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="bi bi-box-arrow-left"></i> Logout
                </a>
            </div>
        </ul>
    </div>

    <div class="content">
        <div class="container mt-3">
            <div class="card shadow">
                <h2 class="card-title text-center mt-3 mb-4">Daftar Kontak</h2>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <table class="table table-striped">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Info Kontak</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($kontak as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset($item->gambar) }}" style="object-fit: cover;" width="50px"
                                        height="50px" alt=""></td>
                                <td>
                                    <p>{{ $item->judul }}</p>
                                </td>
                                <td>
                                    <p>{{ $item->isi }}</p>
                                </td>
                                <td>
                                    <a href="{{ route('editKontak', $item->id) }}"
                                        class="btn btn-outline-success">Edit</a>
                                    <a href="{{ route('hapusKontak', $item->id) }}" class="btn btn-outline-danger"
                                        onclick = "return confirm('yakin ingin hapus?')">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
