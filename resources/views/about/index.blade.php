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
                    <a href="{{ route('booking.cart') }}" class="nav-link">
                        <i class="bi bi-cart"></i> Cart
                    </a>
                    <a href="{{ route('Document.index') }}" class="nav-link">Document</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="content-wrapper">
        <!-- Image Container with Gradient -->
        <div class="image-container" style="background-image: url('{{ asset('img/i.jpg') }}'); background-size: cover; background-position: center;">
            <div class="gradient-overlay"></div>
            
            <!-- Hero Content -->
            <div class="hero-content">
                <div class="hero-title">
                    
                </div>
                <div class="hero-description">
                    
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
                        Misi Kami
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
    </div>
</body>
</html>