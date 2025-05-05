<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food - Kontak Kami</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        body {
            overflow-x: hidden;
            background: #f4f4f4
        }

        .a {
            position: relative;
            overflow: hidden;
            height: 80vh;
        }

        .a::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            z-index: -1;
            background-image: url(img/tentang.png);
        }

        footer {
            background-color: #222;
            color: white;
        }

        footer a {
            color: #fff;
            text-decoration: none;
        }

        footer a:hover {
            color: #ccc;
        }

        footer .fab,
        footer .fas {
            color: #ffffff;
        }

        footer .fab:hover,
        footer .fas:hover {
            color: #17a2b8;
        }

        footer hr {
            border-top: 1px solid #b5b5b5;
        }

        footer p {
            margin-bottom: 0;
        }

        #map {
            height: 700px;
        }
    </style>
</head>

<body>

    <!-- Header Section -->
    @include('template.navbar')

    <div class="a d-flex align-items-center px-lg-5 text-light text-center">
        <div class="px-lg-5 ps-md-5">
            <div class="px-3">
                <h1 class=" text-white" style="font-size: 4rem; font-weight:800;">KONTAK KAMI</h1>
            </div>
        </div>
    </div>

    <!-- Kontak Section -->
    <div class="b py-lg-5 px-lg-0 px-2" style="background-color: white;">
        <div class="container py-5">
            <h2 class="fw-semibold mb-4" style="overflow: hidden">KONTAK KAMI</h2>

            <!-- Notifikasi -->
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form id="pesan" action="{{ route('pesan') }}" method="POST" class="form-group">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <input type="text" name="subject" placeholder="subject" id="subject"
                            class="form-control p-4 rounded-3 bg-transparent border-dark mt-3">
                        <input type="text" name="name" id="name" placeholder="name"
                            class="form-control p-4 rounded-3 bg-transparent border-dark mt-4">
                        <input type="text" name="email" id="email" placeholder="email"
                            class="form-control p-4 rounded-3 bg-transparent border-dark mt-4">
                    </div>
                    <div class="col-lg-6 col-12 mt-3">
                        <textarea type="text" name="message" id="message" placeholder="message"
                            class="form-control p-4 rounded-3 bg-transparent border-dark" style="height: 200px"></textarea>
                    </div>
                </div>
                <button type="submit" id="simpan" class="fw-semibold w-100 btn text-white py-3 d-block mt-4"
                    style="background-color: black">KIRIM</button>
            </form>
        </div>

        <div class="px-xl-5 py-lg-5">
            <div class="row px-xl-5 py-5 ">
                <div class="py-5 py-lg-0 pt-lg-5 d-lg-flex align-content-lg-center">
                    @foreach ($kontak as $item)
                        <div class="col-lg-4 col-12 mt-lg-0">
                            <div class="card bg-transparent border-0 d-flex align-items-center">
                                <img src="{{ asset($item->gambar) }}" class=" text-center" width="100"
                                    alt="">
                                <h3 class=" fw-bold mt-3">{{ $item->judul }}</h3>
                                <p class="fs-4">{{ $item->isi }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="c py-5 px-lg-5">
        <div class=" py-5 px-lg-5">
            <div class="px-4 py-5">
                <div id="map"></div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    @include('template.footer')
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSl3CenD_FooLvHOobYWc3nZyCUJQI-2M"></script>
    <script>
        function initMap() {
            // Koordinat dari database
            var coordinates = {
                lat: {{ $coordinates->latitude }},
                lng: {{ $coordinates->longitude }}
            };

            // Membuat peta
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: coordinates
            });

            // Menambahkan marker
            var marker = new google.maps.Marker({
                position: coordinates,
                map: map,
                title: 'Lokasi Kami'
            });
        }

        // Inisialisasi peta setelah halaman dimuat
        google.maps.event.addDomListener(window, 'load', initMap);
    </script>
</body>

</html>