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
                    <a href="{{ route('Document.index') }}" class="nav-link">Document</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container" style="margin-top: 100px;">
        <h2 class="mb-4">Document Persyaratan</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        @if(count($documents) > 0)

            <table class="table table-responsive table-bordered">
                    <thead>
                        <tr class="table-primary text-center">
                            <th>Dokumen</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($documents as $document)
                            <tr>
                                <td class="text-center"><p>Foto KTP</p></td>
                                <td class="text-center">
                                <a href="{{ asset('storage/' . $document->ktp_foto) }}" download>
                                    Download Foto KTP
                                </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><p>Foto Passport</p></td>
                        
                                <td class="text-center">
                                <a href="{{ asset('storage/' . $document->passport_foto) }}" download>
                                    Download Foto Passport
                                </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><p>Foto Identitas</p></td>
                        
                                <td class="text-center">
                                <a href="{{ asset('storage/' . $document->foto_identitas) }}" download>
                                    Download Foto Identitas
                                </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <div class="d-flex justify-content-center">
                    <a href="{{ route('document.edit', $document->id) }}" class="btn btn-primary btn-sm me-2">
                        <i class="bi bi-pencil"></i> Edit
                    </a>

                    <form action="{{ route('document.destroy', $document->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" 
                                                onclick="return confirm('Apakah anda yakin ingin menghapus dokumen Anda?')">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </form>
                </div>
                


        @else
            <!-- Content -->
            <div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
                <h5 class="mb-4 text-center">Dokumen persyaratan Anda belum lengkap,<br>mohon untuk segera dilengkapi</h5>
                <img src="{{ asset('img/incompleteDocument.png') }}" alt="Document Icon" class="mb-4" style="max-width: 200px; max-height: 200px; width: auto; height: auto;">
                <a href="{{ route('Document.create') }}"  class="btn btn-primary">Lengkapi dokumen anda</a>
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
</body>
</html>