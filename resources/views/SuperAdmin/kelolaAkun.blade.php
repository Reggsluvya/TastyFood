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
        body {
            background-color: #f4f6f9;
        }

        .rounded-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid #6c757d;
            margin-bottom: 20px;
        }

        .profile-header {
            display: flex;
            align-items: center;
            flex-direction: column;
            padding: 20px;
            width: 1000px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
            margin: 10px auto 30px;
            text-align: center;
        }

        .profile-header h1 {
            margin: 15px;
            font-size: 2rem;
            font-weight: 700;
            color: #007bff;
        }

        .profile-header p {
            font-size: 1.2rem;
            color: #6c757d;
        }

        .sidebar {
            width: 250px;
            background-color: #343a40;
            padding: 20px;
            min-height: 100vh;
            color: #fff;
            position: fixed;
            display: flex;
            flex-direction: column;
            /* Align children vertically */
        }

        .sidebar h4 {
            color: #ffffff;
            text-align: center;
        }

        .sidebar ul {
            flex: 1;
            /* Allow ul to take available space */
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .sidebar ul li a {
            color: #adb5bd;
            text-decoration: none;
            padding: 10px;
            display: block;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .sidebar ul li a:hover {
            background-color: #495057;
            color: white;
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
            background-color: #495057;
            color: white;
        }

        .content {
            margin-left: 270px;
            padding: 30px;
        }
        .nav-link.active {
            color: rgb(0, 0, 0) !important;
            background-color: #00eeff;
        }

        .hr {
            width: 100%;
            height: 3px;
            background-color: #f1f1f1;
            border: none;
            border-radius: 10px;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
            background-color: #fff;
            border-collapse: collapse;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #d7ecff;
        }

        /* Button */
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .actions .btn {
            margin: 0 2px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h4 class="text-center">Dashboard</h4>
        <hr class="hr">
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a class="nav-link" href="{{ route('homeSuper') }}">
                    <i class="bi bi-house-door-fill"></i> Home
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link active" href="{{ route('kelolaAkun') }}">
                    <i class="bi bi-person-circle"></i> Akun
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link " href="{{ route('tambahAkun') }}">
                    <i class="bi bi-person-plus-fill"></i> Tambah Akun
                </a>
            </li>
        </ul>
        <div class="logout-wrapper">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="bi bi-box-arrow-left"></i> Logout
            </a>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="profile-header">
                <img src="{{ asset($user->profil) }}" alt="Profile Picture" class="rounded-image">
                <p>{{ $user->nama }}</p>
                <h1>Selamat Datang di Home Super Admin</h1>
            </div>
        </div>

        <div class="container mt-5">
            <div class="shadow p-4 mb-5 bg-white rounded">
                <h2 class="mb-4">Akun Admin yang Tersedia</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Profil</th>
                            <th>Nama Admin</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admin as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset($item->profil) }}" style="" width="70px" height="70px"
                                        class="rounded-circle" alt=""></td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->email }}</td>
                                <td class="actions">
                                    <a href="{{ route('editAkun', $item->id) }}"
                                        class="btn btn-outline-success">Edit</a>
                                    <a href="{{ route('hapusAkun', $item->id) }}"
                                        class="btn btn-outline-danger" onclick="return confirm('yakin ingin hapus?') ">Hapus</a>
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
