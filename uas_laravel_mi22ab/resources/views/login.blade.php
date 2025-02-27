<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Tree Girl Abaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Load Google Font Amiri -->
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8f0e6; /* Warna pink seperti di halaman Tentang dan Home */
            font-family: 'Roboto', sans-serif;
        }
        .navbar {
            background-color: #4a2c2a !important;
        }
        .navbar-brand, .nav-link {
            color: #f8f0e6 !important;
        }
        .nav-link.active {
            font-weight: bold;
        }
        .login-section {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }
        .login-card {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .login-card h2 {
            font-family: 'Playfair Display', serif;
            color: #4a2c2a;
            margin-bottom: 20px;
        }
        .login-card .form-control {
            border-radius: 25px;
            padding: 10px 20px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
        }
        .login-card .form-control:focus {
            border-color: #4a2c2a;
            box-shadow: 0 0 5px rgba(74, 44, 42, 0.5);
        }
        .login-card .btn-primary {
            background-color: #4a2c2a;
            border-color: #4a2c2a;
            color: #fff;
            font-weight: 500;
            padding: 10px 20px;
            border-radius: 25px;
            width: 100%;
            transition: background-color 0.3s ease;
        }
        .login-card .btn-primary:hover {
            background-color: #3a1c1a;
            border-color: #3a1c1a;
        }
        .login-card .register-link {
            margin-top: 15px;
            font-size: 0.9rem;
            color: #666;
        }
        .login-card .register-link a {
            color: #4a2c2a;
            text-decoration: none;
            font-weight: 500;
        }
        .login-card .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Tree Girl Abaya</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login Section -->
    <div class="login-section">
        <div class="login-card">
            <h2>Login</h2>
            <form>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary">Masuk</button>
                <div class="register-link">
                    Belum punya akun? <a href="/daftar">Daftar di sini</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>