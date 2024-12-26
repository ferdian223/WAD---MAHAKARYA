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
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container" style="margin-top: 100px;">
        <h2 class="text-center mb-5">Our Services</h2>

        <!-- Services Grid -->
        <div class="row g-4">
            <!-- Umrah Service -->
            <div class="col-md-6">
                <div class="card h-100">
                    <img src="{{ asset('img/gambar (1).jpg') }}" class="card-img-top" alt="Umrah Service">
                    <div class="card-body">
                        <h4 class="card-title">Layanan Umrah</h4>
                        <p class="card-text">
                            Kami menyediakan layanan umrah dengan berbagai paket yang dapat disesuaikan dengan kebutuhan Anda:
                        </p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle text-success"></i> Paket Reguler 9 Hari</li>
                            <li><i class="bi bi-check-circle text-success"></i> Paket Premium 12 Hari</li>
                            <li><i class="bi bi-check-circle text-success"></i> Program Syawal</li>
                            <li><i class="bi bi-check-circle text-success"></i> Program Ramadhan</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Haji Service -->
            <div class="col-md-6">
                <div class="card h-100">
                    <img src="{{ asset('img/oi.jpg') }}" class="card-img-top" alt="Haji Service">
                    <div class="card-body">
                        <h4 class="card-title">Layanan Haji</h4>
                        <p class="card-text">
                            Layanan haji kami mencakup:
                        </p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle text-success"></i> Haji Reguler</li>
                            <li><i class="bi bi-check-circle text-success"></i> Haji Plus</li>
                            <li><i class="bi bi-check-circle text-success"></i> Konsultasi Haji</li>
                            <li><i class="bi bi-check-circle text-success"></i> Pendampingan Penuh</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Additional Services -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">Fasilitas</h4>
                        <p class="card-text">
                            Setiap paket perjalanan kami dilengkapi dengan:
                        </p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle text-success"></i> Hotel Bintang 4/5</li>
                            <li><i class="bi bi-check-circle text-success"></i> Transportasi AC</li>
                            <li><i class="bi bi-check-circle text-success"></i> Pembimbing Berpengalaman</li>
                            <li><i class="bi bi-check-circle text-success"></i> Makanan 3x Sehari</li>
                            <li><i class="bi bi-check-circle text-success"></i> Air Zam-zam</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Customer Support -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">Dukungan Pelanggan</h4>
                        <p class="card-text">
                            Kami menyediakan layanan pendukung:
                        </p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle text-success"></i> Konsultasi 24/7</li>
                            <li><i class="bi bi-check-circle text-success"></i> Pengurusan Visa</li>
                            <li><i class="bi bi-check-circle text-success"></i> Pengurusan Paspor</li>
                            <li><i class="bi bi-check-circle text-success"></i> Asuransi Perjalanan</li>
                            <li><i class="bi bi-check-circle text-success"></i> Manasik Haji & Umrah</li>
                        </ul>
                    </div>
                </div>
            </div>
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