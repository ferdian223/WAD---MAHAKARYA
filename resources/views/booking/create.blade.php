<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Detail - Mahakarya Travel</title>
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
                    <a href="#" class="nav-link">About</a>
                    <a href="#" class="nav-link">Service</a>
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
    <div class="container-fluid px-5 py-4" style="margin-top: 100px;">
        <h4 class="mb-4">{{ $package->name }}</h4>
        
        <!-- Image Gallery -->
        <div class="row mb-5">
            <div class="col-md-6">
                <img src="{{ asset($package->main_image) }}" class="img-fluid rounded w-100 main-image" alt="Main Image">
            </div>
            <div class="col-md-6">
                <div class="row g-2">
                    @foreach($package->gallery_images as $image)
                    <div class="col-6">
                        <img src="{{ asset($image) }}" class="img-fluid rounded w-100" alt="Gallery Image">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Package Details -->
        <div class="row mb-5">
            <div class="col-md-8">
                <h2 class="mb-4">{{ $package->name }}</h2>
                <p class="text-secondary">{{ $package->description }}</p>

                <!-- Package Info -->
                <div class="package-info mb-4">
                    <div class="info-item mb-3">
                        <i class="bi bi-person"></i>
                        <span class="ms-2">Pembimbing</span>
                        <p class="ms-4">{{ $package->guide }}</p>
                    </div>
                    <div class="info-item mb-3">
                        <i class="bi bi-geo-alt"></i>
                        <span class="ms-2">Tujuan</span>
                        <p class="ms-4">{{ $package->destination }}</p>
                    </div>
                    <div class="info-item mb-3">
                        <i class="bi bi-airplane"></i>
                        <span class="ms-2">Transportasi</span>
                        <p class="ms-4">{{ $package->transportation }}</p>
                    </div>
                </div>

                <!-- Facilities -->
                <h5 class="mb-3">What this place offers</h5>
                <div class="row g-3 mb-5">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-water me-3"></i>
                            <span>Beach access - Beachfront</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-tv me-3"></i>
                            <span>TV</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-p-circle me-3"></i>
                            <span>Free parking on premises</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-wifi me-3"></i>
                            <span>Wifi</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-water me-3"></i>
                            <span>Private Pool</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-snow me-3"></i>
                            <span>Air conditioning</span>
                        </div>
                    </div>
                </div>

                <!-- Booking Form -->
                <form action="{{ route('booking.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="package_id" value="{{ $package->id }}">
                    
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                               name="name" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Nomor Telp</label>
                        <input type="tel" class="form-control @error('phone') is-invalid @enderror" 
                               name="phone" value="{{ old('phone') }}" required>
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">No KTP</label>
                        <input type="text" class="form-control @error('ktp_number') is-invalid @enderror" 
                               name="ktp_number" value="{{ old('ktp_number') }}" required>
                        @error('ktp_number')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Nomor Paspor</label>
                        <input type="text" class="form-control @error('passport_number') is-invalid @enderror" 
                               name="passport_number" value="{{ old('passport_number') }}" required>
                        @error('passport_number')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary w-100">Book Now</button>
                        <a href="{{ route('booking.cart') }}" class="btn btn-secondary">View Cart</a>
                    </div>
                </form>
            </div>
            
            <div class="col-md-4">
                <div class="price-card">
                    <h3 class="mb-3">Rp. {{ number_format($package->price) }} / Quad</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white">
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

    <style>
    .main-image {
        height: 400px;
        object-fit: cover;

    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>