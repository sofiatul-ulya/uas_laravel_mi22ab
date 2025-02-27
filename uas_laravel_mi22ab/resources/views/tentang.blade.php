<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Tree Girl Abaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8f0e6;
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
        .team-member {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }
        .team-member:hover {
            transform: translateY(-10px);
        }
        .team-member img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 15px;
            border: 3px solid #4a2c2a;
        }
        .github-link {
            color: #4a2c2a;
            text-decoration: none;
        }
        .github-link:hover {
            text-decoration: underline;
        }
        h1, h2 {
            font-family: 'Playfair Display', serif;
            color: #4a2c2a;
        }
        .container {
            max-width: 1200px;
        }
        .text-center {
            text-align: center;
        }
        .mb-4 {
            margin-bottom: 1.5rem !important;
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
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Halaman Tentang -->
    <div class="container my-5">
        <h1 class="text-center mb-4">Tentang Kami</h1>
        <div class="row">
            <!-- Anggota Tim 1 -->
            <div class="col-md-4">
                <div class="team-member text-center">
                <img src="{{ asset('images/bilqis.jpg') }}" alt="Syafira Bilqis Farhani">
                    <h2>Syafira Bilqis Farhani</h2>
                    <p>NIM: 2257401043</p>
                    <p>Kelas: MI22B</p>
                </div>
            </div>

            <!-- Anggota Tim 2 -->
            <div class="col-md-4">
                <div class="team-member text-center">
                <img src="{{ asset('images/ulya.jpg') }}" alt="Sofiatul Ulya">
                    <h2>Sofiatul Ulya</h2>
                    <p>NIM: 2257401057</p>
                    <p>Kelas: MI22A</p>
                </div>
            </div>

            <!-- Anggota Tim 3 -->
            <div class="col-md-4">
                <div class="team-member text-center">
                <img src="{{ asset('images/dwi.jpg') }}" alt="Dwi Ainurofiah">
                    <h2>Dwi Ainurofiah</h2>
                    <p>NIM: 2257401054</p>
                    <p>Kelas: MI22B</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>