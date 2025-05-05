<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food - Berita Kami</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            box-sizing: border-box;
            overflow-x: hidden;
        }

        body{
            background: #f4f4f4;
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

        .carousel-inner img {
            max-height: 550px;
            object-fit: cover;
            width: 100%;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 20px;
            height: 20px;
            filter: invert(1)
        }

        .carousel-control-prev,
        .carousel-control-next {
            top: 50%;
            border-radius: 50%;
            opacity: 100%;
            background-color: rgb(255, 255, 255);
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            text-shadow: #000000;
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

        footer h4{
            overflow: hidden;
        }
    </style>
</head>

<body>

    <!-- Header Section -->
    @include('template.navbar')

    <div class="a d-flex align-items-center px-lg-5 text-light text-center">
        <div class="px-lg-5">
            <div class="px-4 ">
                <h1 class=" text-white" style="font-size: 4rem; font-weight:800; overflow: hidden">GALERI KAMI</h1>
            </div>
        </div>
    </div>

    <div class="b px-lg-5 py-lg-5">
        <div class="px-lg-5 px-4 py-lg-5 py-4">
            <div id="carouselExample" class="carousel slide px-lg-4 ">
                <div class="carousel-inner rounded-5">
                    @php
                        $randomgaleri = $cr->shuffle()->take(3);
                    @endphp
                    @foreach ($randomgaleri as $item)
                        <div class="carousel-item active shadow" style="height: 600px;">
                            <img src="{{ asset($item->gambar) }}" class=" d-block w-100 h-100" alt="..."
                                style="object-fit: cover;">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="c py-lg-5 px-lg-5" style="background-color: white">
        <div class="py-4 px-lg-5">
            <div class="row px-4">
                @foreach ($g as $item)
                    <div class="col-lg-3 col-6 mb-4">
                        <div class="card border-0 shadow rounded-4"
                            style="width: 100%; padding-top: 100%; position: relative; overflow: hidden;">
                            <a href="{{ asset($item->gambar) }}" data-toggle="lightbox">
                                <img src="{{ asset($item->gambar) }}" alt=""
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    @include('template.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
