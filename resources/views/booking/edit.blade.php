<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Booking - Mahakarya Travel</title>
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
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="{{ asset('img/logo2.png') }}" alt="Logo">
                </a>
                
                <nav class="nav-links">
                    <a href="#" class="nav-link">About</a>
                    <a href="#" class="nav-link">Service</a>
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
        <h2 class="mb-4">Edit Booking</h2>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('booking.update', $booking->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-3">
                                <label class="form-label">Package</label>
                                <input type="text" class="form-control" value="{{ $booking->package_name }}" disabled>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                       name="name" value="{{ old('name', $booking->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Nomor Telp</label>
                                <input type="tel" class="form-control @error('phone') is-invalid @enderror" 
                                       name="phone" value="{{ old('phone', $booking->phone) }}" required>
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">No KTP</label>
                                <input type="text" class="form-control @error('ktp_number') is-invalid @enderror" 
                                       name="ktp_number" value="{{ old('ktp_number', $booking->ktp_number) }}" required>
                                @error('ktp_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Nomor Paspor</label>
                                <input type="text" class="form-control @error('passport_number') is-invalid @enderror" 
                                       name="passport_number" value="{{ old('passport_number', $booking->passport_number) }}" required>
                                @error('passport_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">Update Booking</button>
                                <a href="{{ route('booking.cart') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
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