<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/userhome.css') }}">

    <style>
        .a {
            position: relative;
            overflow: hidden;
            height: 100vh;
        }

        .c {
            position: relative;
            overflow: hidden;
        }

        .c::before {
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

        /* .s {
            width: 1000px;
            height: auto;
            position: absolute;
            margin-top: -200px;
            margin-left: 200px;
        } */

        .limited-text {
            display: none;
        }

        @media (max-width: 768px) {
            .full-text {
                display: none;
            }

            .limited-text {
                display: inline;
            }
        }
    </style>

</head>

<body style="background-color: #f4f4f4;">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light px-5" style="position: absolute">
        <div class="container px-5">

            <a class="navbar-brand" href="#">TASTY FOOD</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tentang') }}">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('berita') }}">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('galeri') }}">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kontak') }}">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="a d-flex align-items-center px-xl-4">
        <div class="row">
            <div class="col-lg-8 col-12 d-flex align-items-center">
                <div class="container p-lg-5">
                    <div class="px-xl-5 px-2">
                        <div style="width: 15%; height: 3px; background-color: black;"></div>
                        <h1 style="font-size: 4rem; font-weight: 370;" class=" mt-5"> HEALTHY</h1>
                        <h1 style="font-size: 4rem; color: black; font-weight: 800;">TASTY FOOD</h1>
                        <p class=" fs-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit temporibus
                            tempore
                            reiciendis quasi tenetur eius odio libero, veniam velit necessitatibus deserunt est magnam
                            optio, consectetur odit quod consequuntur, voluptates molestias?</p>
                        <a href="#tentang" class=" rounded-0 btn py-3 text-white"
                            style="background-color: black; width: 300px; font-size: 1.1rem; font-weight: 700; padding-left: 110; padding-right: 110;">TENTANG
                            KAMI</a>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-4 col-12 mt-5"> --}}
            <img src="{{ asset('img/img-4-2000x2000.png') }}" class="s" alt="">
            {{-- </div> --}}
        </div>
    </div>


    <!-- Tentang Kami -->
    <div class="b p-lg-4 py-5 px-2" id="tentang" style="background-color: white">
        <div class="container p-lg-5">
            <h2 class=" fw-bold text-center fs-1">TENTANG KAMI</h2>
            <div style="margin-top: 40px">
                <p class=" text-center fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, repellat!
                    Numquam rem
                    <br> sed laborum ipsum
                    excepturi temporibus recusandae veritatis vitae quas deserunt iusto itaque <br> nobis exercitationem
                    quidem
                    nulla, praesentium natus? Lorem ipsum dolor sit amet <br> Lorem ipsum dolor sit.
                </p>
            </div>
            <div class=" d-flex justify-content-center" style="margin-top: 40px">
                <div style="width: 15%; height: 3px; background-color: black;"></div>
            </div>
        </div>
    </div>

    {{-- card --}}
    <div class="c py-5 px-xl-5 d-flex align-items-center">
        <div class=" px-xl-5 py-md-5 mt-5">
            <div class="row px-3 gx-3 d-flex py-xl-5">
                <div class="col-xxl-3 col-lg-3 col-md-6 col-12 mt-5 mt-lg-5 mb-5 pt-xxl-0 pt-5 mb-xl-5 mb-lg-5">
                    <div class="card shadow p-4 mb-lg-5 mb-xxl-0 rounded-4" style="position: relative; height: 400px">
                        <img src="{{ asset('img/img-1.png') }}" alt=""
                            style="position: absolute; top: -140px; left: 50%; transform: translateX(-50%); width: 250px; height: auto; z-index: 0;">
                        <div class="card-body mb-4" style="position: relative; z-index: 1; padding-top: 90px;">
                            <h3 class="card-title fs-1 text-center mt-4" style="font-weight: 700">LOREM IPSUM</h3>
                            <p class="card-text text-center  mt-4">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-3 col-md-6 col-12 mt-5 mt-lg-5 mb-5 pt-5 pt-xxl-0 mb-lg-5 mb-xl-5">
                    <div class="card shadow p-4 mt-md-0 rounded-4 mt-5" style="position: relative; height: 400px">
                        <img class="" src="{{ asset('img/img-2.png') }}" alt=""
                            style="position: absolute; top: -140px; left: 50%; transform: translateX(-50%); width: 250px; height: auto; z-index: 0;">
                        <div class="card-body mb-4" style="position: relative; z-index: 1; padding-top: 90px;">
                            <h3 class="card-title fs-1 text-center mt-4" style="font-weight: 700">LOREM IPSUM</h3>
                            <p class="card-text text-center  mt-4">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="col-xxl-3 col-lg-3 col-md-6 col-12 mt-5 mt-lg-5 pt-5 pt-xl-5 pt-xxl-0 pt-md-5 mb-5 mb-lg-5 mb-xl-5">
                    <div class="card shadow p-4 mt-5 mt-xl-0 mt-lg-5 rounded-4"
                        style="position: relative; height: 400px">
                        <img src="{{ asset('img/img-3.png') }}" alt=""
                            style="position: absolute; top: -140px; left: 50%; transform: translateX(-50%); width: 250px; height: auto; z-index: 0;">
                        <div class="card-body mb-4" style="position: relative; z-index: 1; padding-top: 90px;">
                            <h3 class="card-title fs-1 text-center mt-4" style="font-weight: 700">LOREM IPSUM</h3>
                            <p class="card-text text-center  mt-4">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-3 col-md-6 col-12 mt-5 mt-lg-5 pt-5 pt-xl-5 pt-xxl-0 pt-md-5 mb-xl-5">
                    <div class="card shadow p-4 mt-5 mt-xl-0 mt-lg-5 rounded-4"
                        style="position: relative; height: 400px">
                        <img src="{{ asset('img/img-4.png') }}" alt=""
                            style="position: absolute; top: -140px; left: 50%; transform: translateX(-50%); width: 250px; height: auto; z-index: 0;">
                        <div class="card-body mb-4" style="position: relative; z-index: 1; padding-top: 90px;">
                            <h3 class="card-title fs-1 text-center mt-4" style="font-weight: 700">LOREM IPSUM</h3>
                            <p class="card-text text-center  mt-4">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Berita Kami -->
    <div class="d py-lg-4 px-xl-5">
        <div class="px-xl-5 py-5">
            <h1 class=" fw-bold text-center">BERITA KAMI</h1>
            <div class="row mt-5 px-3 gx-3 pt-3">
                <!-- Card besar di kiri -->
                @foreach ($bs as $item)
                    <div class="col-xl-6 col-12 pb-lg-4">
                        <div class="card shadow h-100 rounded-5 d-flex flex-column">
                            <img src="{{ $item->gambar }}" class="card-img-top img-fluid" alt="News 1"
                                style="max-height: 480px; object-fit: cover;">
                            <div class="card-body p-4 d-flex flex-column flex-grow-1">
                                <h5 class="card-title fw-bold" style="text-align: left;">{{ $item->judul }}</h5>
                                <p class="card-text flex-grow-1">{{ $item->berita }}</p>
                                <div class="card-footer bg-white border-0 p-4 rounded-4 mt-auto">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="{{ route('detailBerita', $item->id) }}"
                                            class="nav-link fw-semibold link-warning">Baca
                                            selengkapnya</a>
                                        <i class="bi bi-three-dots fs-3 text-secondary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Card kecil di kanan -->
                <div class="col-xl-6 col-12 mt-4 mt-lg-0">
                    <div class="row gx-3 gy-0">
                        @foreach ($berita as $item)
                            <div class="col-lg-6 col-md-6 col-12 mb-4">
                                <div class="card h-100 shadow rounded-5">
                                    <img src="{{ asset($item->gambar) }}"
                                        style="max-height: 150px; object-fit: cover;" class="card-img-top img-fluid"
                                        alt="News 3">
                                    <div class="card-body p-4">
                                        <h5 class="card-title fw-bold">{{ $item->judul }}</h5>
                                        <p class="card-text fs-5">{{ $item->berita }}</p>
                                    </div>
                                    <div class="card-footer bg-white border-0 p-4 rounded-4">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="{{ route('detailBerita', $item->id) }}"
                                                class="nav-link fw-semibold link-warning fs-6">Baca selengkapnya</a>
                                            <i class="bi bi-three-dots text-secondary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Galeri Kami -->
    <div class="d py-xl-5 px-xl-5" style="background-color: #ffff">
        <div class="px-xl-5 py-5">
            <h1 class=" fw-bold text-center">GALERI KAMI</h1>
            <div class="row px-3 mt-5">
                @foreach ($galeri as $item)
                    <div class="col-lg-4 col-6 mb-4 gx-3">
                        <div class="card border-0 rounded-4"
                            style="width: 100%; padding-top: 100%; position: relative; overflow: hidden;">
                            <a href="{{ asset($item->gambar) }}" data-toggle="lightbox">
                                <img src="{{ asset($item->gambar) }}" alt=""
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="px-3 px-lg-0 px-xl-0 px-md-0">
                <p class=" text-center mt-5"><a href="{{ route('galeri') }}"
                        class=" rounded-0 btn fs-5 fw-bold text-white py-3"
                        style="background-color: black; padding-left: 80px; padding-right: 80px;">LIHAT LEBIH
                        BANYAK</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('template.footer')

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
