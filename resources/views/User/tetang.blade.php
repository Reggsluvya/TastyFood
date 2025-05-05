<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tentangkami.css') }}">
    <style>
        .hero {
            background: url('img/Group 70@2x.png') no-repeat top center/cover;
            color: #fff;
            padding: 150px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    @include('template.navbar')
    <section class="hero">
        <div class="a d-flex align-items-center px-xl-5 text-light text-center">
        <div class="px-xl-5">
            <div class="px-4">
                <h1 class=" text-white" style="font-size: 4rem; font-weight:800; overflow:hidden;">TENTANG KAMI</h1>
            </div>
        </div>
    </div>
    </section>

    <div class="b py-lg-5 px-xl-5">
        <div class=" d-flex px-xl-5 align-items-center py-5">
            <div class="row d-flex align-items-center px-4">
                <div class="col-md-6 col-12">
                    <div>
                        <h1 class=" fw-bold">TASTY FOOD</h1>
                    </div>
                    <div class="mt-4">
                        <p class=" fw-bold fs-5">{{ substr($tentang->tentang, 0, strlen($tentang->tentang) / 2) }}</p>
                    </div>
                    <div class="mt-4">
                        <p class=" fs-5">{{ substr($tentang->tentang, strlen($tentang->tentang) / 2) }}</p>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row gx-3 ">
                        <div class="col-12 col-md-6">
                            <div class="card border-0 shadow rounded-4 mt-4 mt-md-0">
                                <img class=" card-img img-fluid" style="height: 34rem; object-fit:cover;"
                                    src="{{ asset('img/berita1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mt-lg-0 mt-3 mt-md-0">
                            <div class="card border-0 shadow rounded-4">
                                <img class=" card-img img-fluid" style="height: 34rem; object-fit:cover;"
                                    src="{{ asset('img/berita5.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="c py-lg-5 px-xl-5" style="background-color: white">
        <div class=" py-5 px-xl-5">
            <div class="row px-4">
                <div class="col-lg-6 col-12">
                    <div class="row gx-3">
                        <div class="col-6">
                            <div class="card border-0 rounded-4"
                                style="width: 100%; padding-top: 100%; position: relative; overflow: hidden;">
                                <img src="{{ asset('img/berita1.jpg') }}" alt=""
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card border-0 rounded-4"
                                style="width: 100%; padding-top: 100%; position: relative; overflow: hidden;">
                                <img src="{{ asset('img/tt2.jpg') }}" alt=""
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mt-lg-0 mt-4 d-flex align-items-center">
                    <div class="px-lg-0 ms-lg-5">
                        <h3 class=" fw-bold">VISI</h3>
                        <p class=" mt-3 fs-5 mt-3">{{ $tentang->visi }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-lg-5 px-4 pt-3">
                <div class="col-lg-6 col-12 d-flex align-items-center">
                    <div class="">
                        <h3 class="fw-bold">MISI</h3>
                        <p class=" fs-5 mt-3">{{ $tentang->misi }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mt-3 mt-md-0">
                    <div class="card border-0 shadow rounded-4"
                        style="width: 100%; padding-top: 47%; position: relative; overflow: hidden;">
                        <img src="{{ asset('img/tt3.jpg') }}" alt=""
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>
                </div>
        </div>
    </div>

    @include('template.footer')

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
