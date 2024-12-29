<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Mahakarya Travel</title>
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
                    <a href="{{ route('Document.index') }}" class="nav-link">Document</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container" style="margin-top: 100px;">
        <h2 class="mb-4">Shopping Cart</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(count($bookings) > 0)
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Package</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bookings as $booking)
                            <tr>
                                <td>{{ $booking->package_name }}</td>
                                <td>{{ $booking->name }}</td>
                                <td>{{ $booking->phone }}</td>
                                <td>Rp. {{ number_format($booking->price) }}</td>
                                <td>
                                    <a href="{{ route('booking.edit', $booking->id) }}" class="btn btn-primary btn-sm me-2">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                    <form action="{{ route('booking.destroy', $booking->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" 
                                                onclick="return confirm('Are you sure you want to remove this item?')">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="text-end fw-bold">Total:</td>
                            <td class="fw-bold">Rp. {{ number_format($bookings->sum('price')) }}</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>

                <!-- Add a checkout button -->
                <div class="text-end mt-4">
                    <a href="{{ route('booking.index') }}" class="btn btn-secondary me-2">
                        <i class="bi bi-arrow-left"></i> Continue Shopping
                    </a>
                    @if(count($documents) > 0)
                    <!-- Button akan mengarah ke halaman payment -->
                    <a class="btn btn-success">
                         <i class="bi bi-check2-circle"></i> Proceed to Checkout
                    </a>
                    @else
                    <!-- Button akan mengeluarkan alert dan mengarahkan user ke halaman dokumen untuk mengisi dokumen terlebih dahulu -->

                    <button  class="btn btn-success" onclick="alertAndRedirect()">
                        <i class="bi bi-check2-circle"></i> Proceed to Checkout
                    </button>
                    @endif

                </div>
            </div>
        @else
            <div class="alert alert-info">
                Your cart is empty. <a href="{{ route('booking.index') }}">Browse packages</a>
            </div>
        @endif
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
    <script>

    function alertAndRedirect() {

        const userConfirmed = window.confirm('Dokumen persyaratan Anda belum lengkap. Mohon isi dokumen persyaratan Anda terlebih dahulu');

        if (userConfirmed) {
             window.location.href = "{{ route('Document.index') }}"; // Redirect ke halaman Dokumen.index untuk isi dokumen
         }
    }

    </script>

</body>
</html>