<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Umrah Mahakarya Travel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <style>
        .book-now-btn {
            display: block;
            width: 100%;
            padding: 8px;
            background: #0d6efd;
            color: white;
            text-decoration: none;
            text-align: center;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        
        .book-now-btn:hover {
            background: #0b5ed7;
            color: white;
            text-decoration: none;
        }

        .nav-link .bi-cart {
            font-size: 1.2rem;
            margin-right: 4px;
        }

        .nav-link:hover {
            color: #0d6efd;
        }
    </style>
</head>
<body>

    <header class="dashboard-header">
        <div class="container">
            <div class="header-container">

                <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="{{ asset('img/logo2.png') }}" alt="Logo">
                </a>
                
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

    <div class="packages-section">
        <div class="container">
            <h2 class="text-center mb-4 pt-5">Paket Umrah Mahakarya Travel</h2>


            <div class="program-section mb-5">
                <h4 class="text-center text-success mb-4">Program Syawal</h4>
                <div class="row justify-content-center g-4">
                    <div class="col-md-4">
                        <div class="package-card">
                            <img src="{{ asset('img/syawal (3).png') }}" alt="Program Syawal">
                            <div class="package-info">
                                <h6>Terlahir Kembali di Tanah Suci</h6>
                                <p>Rp. 30,9jt</p>
                                <a href="{{ route('booking.create', ['id' => 1]) }}" class="book-now-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="package-card">
                            <img src="{{ asset('img/syawal (1).png') }}" alt="Langkah Menuju Fitrah">
                            <div class="package-info">
                                <h6>Langkah Menuju Fitrah</h6>
                                <p>Rp. 42,5jt</p>
                                <a href="{{ route('booking.create', ['id' => 2]) }}" class="book-now-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="package-card">
                            <img src="{{ asset('img/syawal (2).png') }}" alt="Langkah Menuju Fitrah Extra">
                            <div class="package-info">
                                <h6>Langkah Menuju Fitrah Extra</h6>
                                <p>Rp. 46,8jt</p>
                                <a href="{{ route('booking.create', ['id' => 3]) }}" class="book-now-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="program-section mb-5">
                <h4 class="text-center text-success mb-4">Program Promo</h4>

                <div class="row justify-content-center g-4 mb-4">
                <div class="col-md-4">
                        <div class="package-card">
                            <img src="{{ asset('img/promo (2).png') }}" alt="Program Syawal">
                            <div class="package-info">
                                <h6>Paket Reguler 9 Hari</h6>
                                <p>Rp. 27jt</p>
                                <a href="{{ route('booking.create', ['id' => 4]) }}" class="book-now-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="package-card">
                            <img src="{{ asset('img/promo (3).png') }}" alt="Langkah Menuju Fitrah">
                            <div class="package-info">
                                <h6>Paket Reguler 12 Hari</h6>
                                <p>Rp. 29,3jt</p>
                                <a href="{{ route('booking.create', ['id' => 5]) }}" class="book-now-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="package-card">
                            <img src="{{ asset('img/promo (1).png') }}" alt="Langkah Menuju Fitrah Extra">
                            <div class="package-info">
                                <h6>Paket Mahakarya 9 Hari</h6>
                                <p>Rp. 30,5jt</p>
                                <a href="{{ route('booking.create', ['id' => 6]) }}" class="book-now-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="program-section mb-5">
                <h4 class="text-center text-success mb-4">Program November</h4>
                <div class="row justify-content-center g-4">
                <div class="col-md-4">
                        <div class="package-card">
                            <img src="{{ asset('img/november.png') }}" alt="Langkah Menuju Fitrah Extra">
                            <div class="package-info">
                                <h6>Penuhi Pangilannya Di Akhir Tahun</h6>
                                <p>Rp. 32,3jt</p>
                                <a href="{{ route('booking.create', ['id' => 7]) }}" class="book-now-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>


   <footer class="footer-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <h2 class="footer-title">Mahakarya</h2>
                    <p class="footer-description">Mahakarya memnjadi saranan perjalanan internasional sejak pendirianya merupakan badan usaha jasa Penyelenggara Perjalanan Ibadah dan Perjalanan Wisata berizin resmi berdasarkan perijinan yang dikeluarkan oleh Pemerintah Republik Indonesia    
                    </p>
                </div>


                <div class="col-lg-6">
                        <div class="contact-item">
                            <span>©2024 Mahakarya Group. All right reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>