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
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            padding-top: 80px; /* Adjust padding to avoid overlap */
        }

        .dashboard-header {
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            background-color: #343a40;
            padding: 20px 0;
        }

        .table-container {
            overflow-x: auto;
        }

        footer {
            background-color: #343a40;
            color: #ffffff;
            margin-top: auto;
            padding: 20px 0;
        }
        footer .text-white-50 {
            color: rgba(255, 255, 255, 0.7) !important;
        }

        /* Details View */
        .details-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin: 30px auto;
            max-width: 600px;
        }
        .details-label {
            font-weight: bold;
        }
        .details-value {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="dashboard-header">
        <div class="container">
            <div class="header-container d-flex align-items-center justify-content-between">
                <!-- Logo -->
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="{{ asset('img/logo2.png') }}" alt="Logo">
                </a>
                
                <!-- Navigation -->
                <nav class="nav-links d-flex">
                    <a href="{{ route('about.index') }}" class="nav-link">About</a>
                    <a href="{{ route('service.index') }}" class="nav-link">Service</a>
                    <a href="{{ route('booking.index') }}" class="nav-link">Booking</a>
                    <a href="{{ route('feedback') }}" class="nav-link">Feedback</a>
                    <a href="{{ route('booking.cart') }}" class="nav-link">
                        <i class="bi bi-cart"></i> Cart
                    </a>
                    <a href="{{ route('Document.index') }}" class="nav-link">Document</a>
                    <a href="{{ route('Seminar.index') }}" class="nav-link">Seminar</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container mt-4">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('Seminar.create') }}" class="btn btn-primary">Tambah Seminar</a>
        </div>

        @if($seminars->count() > 0)
            <div class="table-container">
                <table class="table table-bordered table-striped">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($seminars as $seminar)
                            <tr>
                                <td class="text-center">{{ $seminar->id }}</td>
                                <td>{{ $seminar->nama }}</td>
                                <td>{{ $seminar->email }}</td>
                                <td class="text-center">{{ ucfirst($seminar->type) }}</td>
                                <td class="text-center">{{ $seminar->date }}</td>
                                <td class="text-center">{{ $seminar->time }}</td>
                                <td class="text-center">
                                    <a href="{{ route('Seminar.show', $seminar->id) }}" class="btn btn-info btn-sm me-2">Detail</a>
                                    <a href="{{ route('Seminar.edit', $seminar->id) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                                    <form action="{{ route('Seminar.destroy', $seminar->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus seminar ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-center">Belum ada seminar yang terdaftar.</p>
        @endif
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white mt-5">
        <div class="container-fluid px-5 py-4">
            <div class="row">
                <div class="col-md-8">
                    <h5 class="mb-3">Mahakarya</h5>
                    <p class="text-white-50">
                        Mahakarya menjadi sarana perjalanan internasional dengan izin resmi berdasarkan perijinan Pemerintah Republik Indonesia.
                    </p>
                </div>
                <div class="col-md-4 text-md-end">
                    <p class="mb-0">&copy;2024 Mahakarya Group. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
