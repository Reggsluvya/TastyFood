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
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <style>
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
            color: #8d028d;
        }

        .profile-header p {
            font-size: 1.2rem;
            color: #6c757d;
        }

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

        .nav-link.active {
            color: white !important;
            background-color: #007bff;
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

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .hr {
            width: 100%;
            height: 3px;
            background-color: #ebe7e7;
            border: none;
            border-radius: 10px;
        }

        #map {
            height: 450px;
            width: 100%;
            margin-top: 20px;
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
                <a class="nav-link active" href="{{ route('Maps') }}">
                    <i class="bi bi-geo-alt-fill"></i> Maps
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link" href="{{ route('dashTentang') }}">
                    <i class="bi bi-info-circle-fill"></i> Tentang
                </a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link" href="{{ route('dashKontak') }}">
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
        <div class="container">
            <h1>Pengaturan Peta</h1>

            <!-- Tempat untuk peta -->
            <div id="map"></div>

            <!-- form memperbarui koordinat -->
            <form action="{{ route('editKoordinatMaps') }}" method="POST" class="mt-4">
                @csrf
                <div class="mb-3">
                    <label for="latitude" class="form-label">Latitude:</label>
                    <input type="text" id="latitude" name="latitude" value="{{ $coordinates->latitude }}"
                        class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="longitude" class="form-label">Longitude:</label>
                    <input type="text" id="longitude" name="longitude" value="{{ $coordinates->longitude }}"
                        class="form-control" required>
                </div>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <button type="submit" class="btn btn-outline-primary mt-3">Perbarui Peta</button>
            </form>
        </div>

        <script>
            let map;
            let marker;

            function initMap() {
                const initialLocation = {
                    lat: {{ $coordinates->latitude }},
                    lng: {{ $coordinates->longitude }}
                };

                // Inisialisasi peta
                map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 14,
                    center: initialLocation,
                });

                marker = new google.maps.Marker({
                    position: initialLocation,
                    map: map,
                    draggable: true
                });

                map.addListener("click", (e) => {
                    const clickedLatLng = e.latLng;
                    marker.setPosition(clickedLatLng);
                    document.getElementById("latitude").value = clickedLatLng.lat();
                    document.getElementById("longitude").value = clickedLatLng.lng();
                });

                marker.addListener('dragend', function(e) {
                    const latLng = e.latLng;
                    document.getElementById('latitude').value = latLng.lat();
                    document.getElementById('longitude').value = latLng.lng();
                });
            }
        </script>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSl3CenD_FooLvHOobYWc3nZyCUJQI-2M&callback=initMap"></script>
</body>

</html>
