<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') Travel Dashboard</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    
    <!-- Custom CSS -->
    
    @stack('prepend-style')
    @stack('addon-style')
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
                    <a href="{{ route('feedback.index') }}" class="nav-link">Feedback</a>
                    <a href="{{ route('booking.cart') }}" class="nav-link">
                        <i class="bi bi-cart"></i> Cart
                    </a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="content-wrapper">
        <!-- Image Container with Gradient -->
        <div class="image-container" style="background-image: url('{{ asset('img/background2.jpg') }}'); background-size: cover; background-position: center;">
            <div class="gradient-overlay"></div>
            
            <!-- Hero Content -->
            <div class="hero-content">
                <div class="hero-title">
                    Perjalanan spiritual menuju Tanah Suci
                </div>
                <div class="hero-description">
                    Rasakan pengalaman ibadah yang mendalam dengan layanan terbaik untuk perjalanan umrah dan haji Anda. Kami hadir untuk membantu setiap langkah menuju Tanah Suci dengan kenyamanan dan kepercayaan.
                </div>
            </div>
        </div>

        <section class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="image-gallery">
                            <div class="gallery-image-1">
                                <img src="{{ asset('img/gambar (1).jpg') }}" alt="gambar 1" class="gallery-image">
                            </div>
                            <div class="gallery-image-2">
                                <img src="{{ asset('img/gambar (2).jpg') }}" alt="gambar 2" class="gallery-image">
                            </div>
                            <div class="gallery-image-3">
                                <img src="{{ asset('img/gambar (3).jpg') }}" alt="gambar 3" class="gallery-image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-title">
                            Mahakarya Travel
                        </div>
                        <div class="about-subtitle">
                            "Mewujudkan Perjalanan Ibadah Nyaman dan Aman"
                        </div>
                        <div class="about-description">
                            Mewujudkan Perjalanan Ibadah Anda dengan Nyaman dan Aman<br/>
                            Mahakarya Travel hadir sebagai mitra perjalanan ibadah Anda, menyediakan layanan Umrah dan Haji terbaik dengan proses pemesanan online yang mudah, transparan, dan terpercaya. Kami berkomitmen untuk menjadi solusi bagi Anda yang ingin menjalankan ibadah di Tanah Suci dengan fasilitas terbaik dan pengalaman yang tak terlupakan.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Packages Section -->
        <section class="packages-section">
            <div class="container">
                <h2 class="packages-title">Paket Umroh Tersedia</h2>
                <h3 class="packages-subtitle">Program Syawal</h3>
                
                <div class="row">
                    <!-- Package Card 1 -->
                    <div class="col-lg-4">
                        <div class="package-card">
                            <img src="{{ asset('img/syawal (3).png') }}" alt="Program Syawal" class="package-image">
                            <div class="package-content">
                                <h4 class="package-name">Program Syawal</h4>
                                <p class="package-price">Rp. 30,9jt</p>
                                <div class="package-duration">
                                    <i class="fas fa-clock"></i>
                                    <span>9 days</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Package Card 2 -->
                    <div class="col-lg-4">
                        <div class="package-card">
                            <img src="{{ asset('img/syawal (1).png') }}" alt="Langkah Menuju Fitrah" class="package-image">
                            <div class="package-content">
                                <h4 class="package-name">Langkah Menuju Fitrah</h4>
                                <p class="package-price">Rp. 42,5jt</p>
                                <div class="package-duration">
                                    <i class="fas fa-clock"></i>
                                    <span>12 days</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Package Card 3 -->
                    <div class="col-lg-4">
                        <div class="package-card">
                            <img src="{{ asset('img/syawal (2).png') }}" alt="Package 3" class="package-image">
                            <div class="package-content">
                                <h4 class="package-name">Premium Package</h4>
                                <p class="package-price">Rp. 46,8jt</p>
                                <div class="package-duration">
                                    <i class="fas fa-clock"></i>
                                    <span>12 days</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <div class="container main-content">
            @yield('content')
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <!-- Company Info Column -->
                <div class="col-lg-6">
                    <h2 class="footer-title">Mahakarya</h2>
                    <p class="footer-description">Mahakarya memnjadi saranan perjalanan internasional sejak pendirianya merupakan badan usaha jasa Penyelenggara Perjalanan Ibadah dan Perjalanan Wisata berizin resmi berdasarkan perijinan yang dikeluarkan oleh Pemerintah Republik Indonesia    
                    </p>
                </div>

                <!-- Contact Info Column -->
                <div class="col-lg-6">
                        <div class="contact-item">
                            <span>©2024 Mahakarya Group. All right reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js"></script>
    @stack('prepend-script')
    @stack('addon-script')
</body>
</html>