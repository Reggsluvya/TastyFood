  <!-- Footer -->
  <footer class="text-white pt-5 pb-4" style="background-color: #000000;">
    <div class="container pt-5 text-md-left">
        <div class="row">
            <div class="col-12 col-lg-3 mx-auto mt-3">
                <h4 class="mb-4 fw-bold">Tasty Food</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum accusamus iste tenetur
                    suscipit, tempora magnam quas officiis repudiandae voluptate explicabo labore doloremque debitis
                    nulla. Culpa nisi omnis vero quibusdam molestiae? Cum facilis enim perferendis porro.
                </p>
                <div class="mt-4">
                    <a href="#" class="me-3 text-white">
                        <img src="{{ asset('img/facebook.png') }}" alt="Facebook" style="width: 24px;">
                    </a>
                    <a href="#" class="me-3 text-white">
                        <img src="{{ asset('img/twitter.png') }}" alt="Twitter" style="width: 24px;">
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mt-3">
                <h4 class="mb-4 fw-bold">Useful Links</h4>
                <div class="fs-5">
                    <p class="mt-3 fw-semibold"><a href="{{ route('berita') }}" class="text-white">Blog</a></p>
                    <p class="mt-3 fw-semibold"><a href="#" class="text-white">Hewan</a></p>
                    <p class="mt-3 fw-semibold"><a href="{{ route('galeri') }}" class="text-white">Galeri</a>
                    </p>
                    <p class="mt-3 fw-semibold"><a href="#" class="text-white">Testimonial</a></p>
                </div>
            </div>
            <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mt-3">
                <h4 class="mb-4 fw-bold">Privacy</h4>
                <p class="mt-3 fw-semibold"><a href="#" class="text-white">Karir</a></p>
                <p class="mt-3 fw-semibold"><a href="#" class="text-white">Tentang Kami</a></p>
                <p class="mt-3 fw-semibold"><a href="#" class="text-white">Kontak Kami</a></p>
                <p class="mt-3 fw-semibold"><a href="#" class="text-white">Servis</a></p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h4 class="mb-4 fw-bold">Contact Info</h4>
                <p class="mt-3 fw-semibold"><img src="img/email.png" alt="" width="50px"
                        height="50px">tastyfood@gmail.com</p>
                <p class="mt-3 fw-semibold"><img src="img/phone.png" alt="" width="50px"
                        height="50px">+62 812 3456 7890</p>
                <p class="mt-3 fw-semibold"><img src="img/location.png" alt="" width="50px"
                        height="50px">Kota Bandung, Jawa</p>
            </div>
        </div>
    </div>

    <hr class="mb-4">

    <div class="row align-items-center">
        <div class="row mt-5">
            <div class="col text-center">
                <p class="mb-0">&copy; 2024 TastyFood. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

<style>
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