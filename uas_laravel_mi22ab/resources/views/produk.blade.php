<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - Tree Girl Abaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
        .product-section {
            padding: 50px 0;
        }
        .product-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            margin-bottom: 30px;
        }
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }
        .product-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-bottom: 2px solid #f8f0e6;
        }
        .product-card .card-body {
            padding: 20px;
            text-align: center;
        }
        .product-card h3 {
            font-family: 'Playfair Display', serif;
            color: #4a2c2a;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .product-card p {
            font-size: 1rem;
            color: #666;
            margin-bottom: 15px;
        }
        .product-card .price {
            font-size: 1.25rem;
            color: #4a2c2a;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .product-card .btn {
            background-color: #4a2c2a;
            border-color: #4a2c2a;
            color: #fff;
            font-weight: 500;
            padding: 10px 20px;
            border-radius: 25px;
            transition: background-color 0.3s ease;
        }
        .product-card .btn:hover {
            background-color: #3a1c1a;
            border-color: #3a1c1a;
        }
        .filter-section {
            margin-bottom: 30px;
            text-align: center;
        }
        .filter-section .btn {
            margin: 5px;
            background-color: #4a2c2a;
            border-color: #4a2c2a;
            color: #fff;
            border-radius: 25px;
            padding: 8px 20px;
            transition: background-color 0.3s ease;
        }
        .filter-section .btn:hover {
            background-color: #3a1c1a;
            border-color: #3a1c1a;
        }
        .filter-section .btn.active {
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
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/produk">Produk</a>
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

    <!-- Produk Section -->
    <div class="product-section">
        <div class="container">
            <h1 class="text-center mb-5" style="font-family: 'Playfair Display', serif; color: #4a2c2a;">Produk Kami</h1>
            
            <!-- Filter Section -->
            <div class="filter-section">
                <button class="btn active">Semua</button>
                <button class="btn">Abaya</button>
                <button class="btn">Dress</button>
                <button class="btn">Hijab</button>
                <button class="btn">Telekung</button>
            </div>

            <!-- Produk Grid -->
            <div class="row">
                <!-- Produk 1 -->
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="{{ asset('images/serimbit couple family.jpeg') }}" alt="Serimbit Couple Family">
                        <div class="card-body">
                            <h3>Serimbit Couple Family</h3>
                            <p class="price">Rp. 450.000</p>
                            <a href="#" class="btn">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Produk 2 -->
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="{{ asset('images/abaya saudi.jpeg') }}" alt="Abaya Saudi">
                        <div class="card-body">
                            <h3>Abaya Saudi</h3>
                            <p class="price">Rp. 350.000</p>
                            <a href="#" class="btn">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Produk 3 -->
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="{{ asset('images/abaya elaya.jpeg') }}" alt="Abaya Elaya">
                        <div class="card-body">
                            <h3>Abaya Elaya</h3>
                            <p class="price">Rp. 400.000</p>
                            <a href="#" class="btn">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Produk 4 -->
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="{{ asset('images/telekung.jpeg') }}" alt="Telekung Azzahra">
                        <div class="card-body">
                            <h3>Telekung Azzahra</h3>
                            <p class="price">Rp. 250.000</p>
                            <a href="#" class="btn">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Produk 5 -->
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="{{ asset('images/dress shimer marwah.jpeg') }}" alt="Dress Shimer Marwah">
                        <div class="card-body">
                            <h3>Dress Shimer Marwah</h3>
                            <p class="price">Rp. 350.000</p>
                            <a href="#" class="btn">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Produk 6 -->
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="{{ asset('images/shafira dress kids.jpeg') }}" alt="Shafira Dress Kids">
                        <div class="card-body">
                            <h3>Shafira Dress Kids</h3>
                            <p class="price">Rp. 200.000</p>
                            <a href="#" class="btn">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>