<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - Mahakarya Travel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <style>
        body {
            background-color: #d3f0ff; /* Warna biru muda */
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #e9e9e9; /* Warna abu-abu form */
            padding: 20px;
            border-radius: 8px;
        }
        .btn-custom {
            background-color: #1a2850; /* Warna biru gelap */
            border: none;
        }
        .btn-custom:hover {
            background-color: #283b70; /* Warna hover biru gelap */
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="dashboard-header">
        <div class="container">
            <div class="header-container">
                <!-- Logo -->
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="{{ asset('img/logo2.png') }}" alt="Logo">
                </a>
                
                <!-- Navigation -->
                <nav class="nav-links">
                    <a href="{{ route('about.index') }}" class="nav-link">About</a>
                    <a href="{{ route('service.index') }}" class="nav-link">Service</a>
                    <a href="{{ route('booking.index') }}" class="nav-link">Booking</a>
                    <a href="{{ route('booking.cart') }}" class="nav-link">
                        <i class="bi bi-cart"></i> Cart
                    </a>
                    <a href="{{ route('Document.index') }}" class="nav-link">Document</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container" style="margin-top: 100px;">

        <div class="container form-container">
        <h2 class="text-center mb-4">Document Persyaratan</h2>
        <form method="POST" action="{{ route('Document.save') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="fotoKTP" class="form-label">Foto KTP</label>
                <div class="input-group">
                    <input type="file" name="ktp_foto" class="form-control" id="fotoKTP" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="fotoPassport" class="form-label">Foto Passport</label>
                <div class="input-group">
                    <input type="file" name="passport_foto" class="form-control" id="fotoPassport" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="fotoIdentitas" class="form-label">Foto Identitas</label>
                <div class="input-group">
                    <input type="file" name="foto_identitas" class="form-control" id="fotoIdentitas" required>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" style="color: white" class="btn btn-custom px-5">SUBMIT</button>
            </div>
        </form>
    </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white mt-5">
        <div class="container-fluid px-5 py-4">
            <div class="row">
                <div class="col-md-8">
                    <h5 class="mb-3">Mahakarya</h5>
                    <p class="text-white-50">
                        Mahakarya menjadi saranan perjalanan internasional sejak pendirinya merupakan badan usaha jasa Penyelenggara 
                        Perjalanan Ibadah dan Perjalanan Wisata berizin resmi berdasarkan perijinan yang dikeluarkan oleh Pemerintah Republik 
                        Indonesia
                    </p>
                </div>
                <div class="col-md-4 text-md-end">
                    <p class="mb-0">©2024 Mahakarya Group. All right reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>