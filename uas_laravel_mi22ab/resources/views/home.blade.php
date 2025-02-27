<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Tree Girl Abaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Load Google Font Amiri -->
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8f0e6; /* Warna pink seperti di halaman Tentang */
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
        .hero-section {
            background: url('{{ asset("images/hero-bg.jpg") }}') no-repeat center center/cover;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
            flex-direction: column; /* Menyusun elemen secara vertikal */
        }
        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px; /* Jarak antara teks dan logo */
            color: black; /* Warna hitam */
            font-family: 'Amiri', serif; /* Menggunakan font Amiri */
        }
        .hero-section img {
            width: 300px; /* Ukuran logo */
            margin-bottom: 10px; /* Jarak antara logo dan teks */
        }
        .featured-products {
            margin-top: 50px;
        }
        .product-card {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }
        .product-card:hover {
            transform: translateY(-10px);
        }
        .product-card img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
        }
        .btn-primary {
            background-color: #4a2c2a;
            border-color: #4a2c2a;
        }
        .btn-primary:hover {
            background-color: #3a1c1a;
            border-color: #3a1c1a;
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
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/katalog">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <!-- Logo -->
        <img src="{{ asset('images/logo.png') }}" alt="Logo Tree Girl Abaya">
        <!-- Teks Selamat Datang -->
        <h1>Selamat Datang di Toko Kami</h1>
    </div>

    <!-- Featured Products -->
    <div class="container featured-products">
        <h2 class="text-center mb-4">Tree Girl Abaya</h2>
        <div class="row">
            <!-- Produk dengan nama pendek (2 kata) -->
            <div class="col-md-3">
                <div class="product-card text-center">
                    <img src="{{ asset('images/abaya saudi.jpeg') }}" alt="Produk 1">
                    <h4>Abaya Saudi</h4>
                    <p><h5>Rp.350.000</h5></p>
                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="product-card text-center">
                    <img src="{{ asset('images/telekung.jpeg') }}" alt="Produk 2">
                    <h4>Telekung Azzahra</h4>
                    <p><h5>Rp.250.000</h5></p>
                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="product-card text-center">
                    <img src="{{ asset('images/hijab sabina.jpeg') }}" alt="Produk 3">
                    <h4>Hijab Sabina</h4>
                    <p><h5>Rp.169.000</h5></p>
                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="product-card text-center">
                    <img src="{{ asset('images/inner hijab.jpeg') }}" alt="Produk 4">
                    <h4>Inner Hijab</h4>
                    <p><h5>Rp.99.000</h5></p>
                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>

            <!-- Produk dengan nama panjang -->
            <div class="col-md-3">
                <div class="product-card text-center">
                    <img src="{{ asset('images/serimbit couple family.jpeg') }}" alt="Produk 5">
                    <h4>Serimbit Couple Family</h4>
                    <p><h5>Rp. 450.000</h5></p>
                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="product-card text-center">
                    <img src="{{ asset('images/dress shimer marwah.jpeg') }}" alt="Produk 6">
                    <h4>Dress Shimer Marwah</h4>
                    <p><h5>Rp.350.000</h5></p>
                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="product-card text-center">
                    <img src="{{ asset('images/shafira dress kids.jpeg') }}" alt="Produk 7">
                    <h4>Shafira Dress Kids</h4>
                    <p><h5>Rp.200.000</h5></p>
                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="product-card text-center">
                    <img src="{{ asset('images/abaya elaya.jpeg') }}" alt="Produk 8">
                    <h4>Abaya Elaya</h4>
                    <p><h5>Rp.400.000</h5></p>
                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>