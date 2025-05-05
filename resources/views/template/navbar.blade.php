<nav class="navbar navbar-expand-lg">
    <div class="container">
        <div class="navbar-brand-wrapper">TASTY FOOD</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
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

<style>
    .navbar {
        background-color: transparent;
        position: absolute;
        top: 20px;
        left: 0;
        right: 0;
        z-index: 1000;
        width: 100%;
    }

    .nav-link {
        color: #ffffff ;
        text-transform: uppercase;
        font-weight: bold;
    }
    .nav-link:hover {
        color: #575757;
    }

    .navbar-brand-wrapper {
        color: #ffffff !important;
        font-size: 1.5rem;
        text-transform: uppercase;
        font-weight: bold;
        margin-left: 20px;
        /* Adjusted for smaller screens */
    }

    .navbar-nav .nav-item+.nav-item {
        margin-left: 20px;
    }


    .navbar-toggler {
        border-color: rgba(255, 255, 255, 0.1);
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }


    @media (max-width: 768px) {
        .navbar {
            top: 0;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .navbar-brand-wrapper {
            font-size: 1.2rem;
            margin-left: 10px;
        }

        .nav-link {
            font-size: 1rem;
            padding: 10px 15px;
        }

        .navbar-nav {
            margin-top: 10px;
        }

        .navbar-nav .nav-item+.nav-item {
            margin-left: 0;
            margin-bottom: 10px;
        }
    }

    @media (max-width: 576px) {
        .navbar {
            top: 0;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .navbar-nav {
            text-align: center;
        }

        .navbar-brand-wrapper {
            font-size: 1.1rem;
        }
    }
</style>
