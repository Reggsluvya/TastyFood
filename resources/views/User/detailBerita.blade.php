<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food - Berita Kami</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/beritakami.css') }}">
    <style>
        .a {
            position: relative;
            overflow: hidden;
            height: 80vh;
        }

        .a h1 {
            overflow: hidden;
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
            background-image: url('{{ asset('img/tentang.jpg') }}');
        }
    </style>
</head>

<body style="background-color: #f6f6f6">

    <!-- Header Section -->
    @include('template.navbar')

    <div class="a d-flex align-items-center px-lg-5 text-light text-center">
        <div class="px-lg-5">
            <div class="px-3 ">
                <h1 class=" text-white" style="font-size: 4rem; font-weight:800;">BERITA KAMI</h1>
            </div>
        </div>
    </div>

    <!-- card besar -->
    <div class="b py-lg-5 px-xl-5">
        <div class=" py-5 px-xl-5">
            <div class="row px-3">
           <div class="col-md-6 mb-4 mb-md-0">
                        <img src="{{ asset($b->gambar) }}" class="img-fluid shadow"
                            style="height: 450px; max-width: 100%; width: 500px; object-fit: cover; border-radius: 20px;"
                            alt="Salad Image">
                    </div>
                    <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                        <h2 style="margin-bottom: 25px">APA SAJA MAKANAN KHAS NUSANTARA?</h2>
                        <p style="margin-bottom: 25px">{{ $b->berita }}.</p>
                        <p>{{ $b->berita }}</p>
                        <a href="{{ route('home') }}" class="btn b btn-dark mt-3 fw-semibold">Kembali ke Home</a>
                    </div>
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
