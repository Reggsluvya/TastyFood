<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food - Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background: url(img/beria4.jpg)no-repeat;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 15px;
        }

        .login-card {
            background: #fff;
            border-radius: 10px;
            padding: 40px 25px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        .login-card h3 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .login-card .form-control {
            border-radius: 30px;
        }

        .login-card .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 30px;
            padding: 10px;
            width: 100%;
            font-size: 16px;
        }

        .login-card .btn-outline-warning {
            border-radius: 30px;
            padding: 10px;
            width: 100%;
            font-size: 16px;
            margin-top: 5px;
        }

        .login-card .form-check-label {
            font-size: 14px;
        }

        .login-card .forgot-password {
            display: block;
            text-align: right;
            margin-top: 10px;
        }

        .login-card .forgot-password a {
            color: #007bff;
            text-decoration: none;
        }

        .login-card .forgot-password a:hover {
            text-decoration: underline;
        }

        @media (max-width: 1024px) {
            .login-card {
                padding: 35px 20px;
            }

            .login-card h3 {
                font-size: 28px;
            }

            .login-card .btn-primary {
                font-size: 15px;
            }

            .login-card .form-check-label {
                font-size: 13px;
            }
        }

        @media (max-width: 768px) {
            .login-card {
                padding: 30px 15px;
            }
        }

        @media (max-width: 576px) {
            .login-card {
                padding: 20px 10px;
            }

            .login-card h3 {
                font-size: 24px;
            }

            .login-card .btn-primary {
                font-size: 14px;
            }

            .login-card .form-check-label {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>

    <!-- Login Form Section -->
    <div class="login-container">
        <div class="login-card col-md-4">
            <h3>Login</h3>
            
            <!-- Notification Area -->
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <form action="{{ route('postLogin') }}" class="form-group" method="POST">
                @csrf
                <div class="form-group mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email" required>
                </div>
                <div class="form-group mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="{{ route('home') }}" class="btn btn-outline-warning">Kembali</a>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
