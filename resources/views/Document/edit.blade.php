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
        <h2 class="mb-4">Edit Document</h2>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                    <form action="{{ route('document.update', $document->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="ktp_foto" class="form-label">Foto KTP</label>
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $document->ktp_foto) }}" alt="ktp Photo" class="img-thumbnail" style="max-width: 200px;">
                            </div>

                            <!-- Hidden Input for Old File -->
                            <input type="hidden" name="old_ktp_foto" value="{{ $document->ktp_foto }}">

                            <!-- Choose File Input (Hidden by Default) -->
                            <div id="fileInputContainer" style="display: none;">
                                <input type="file" name="ktp_foto" class="form-control" id="fotoKTP">
                            </div>

                            <!-- Edit Button -->
                            <button type="button" class="btn btn-warning mt-2" id="editButton">
                                Edit File
                            </button>
                        </div>

                        <div class="mb-3">
                            <label for="passport_foto" class="form-label">Foto Passport</label>
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $document->passport_foto) }}" alt="Passport Photo" class="img-thumbnail" style="max-width: 200px;">
                            </div>

                            <!-- Hidden Input for Old File -->
                            <input type="hidden" name="old_passport_foto" value="{{ $document->passport_foto }}">

                            <!-- Choose File Input (Hidden by Default) -->
                            <div id="fileInputContainer2" style="display: none;">
                                <input type="file" name="passport_foto" class="form-control" id="fotoPassport">
                            </div>

                            <!-- Edit Button -->
                            <button type="button" class="btn btn-warning mt-2" id="editButton2">
                                Edit File
                            </button>
                        </div>

                        <div class="mb-3">
                        <label for="foto_identitas" class="form-label">Foto Identitas</label>
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $document->foto_identitas) }}" alt="Identity Photo" class="img-thumbnail" style="max-width: 200px;">
                        </div>
                    

                            <!-- Hidden Input for Old File -->
                            <input type="hidden" name="old_foto_identitas" value="{{ $document->foto_identitas }}">

                            <!-- Choose File Input (Hidden by Default) -->
                            <div id="fileInputContainer3" style="display: none;">
                                <input type="file" name="foto_identitas" class="form-control" id="fotoIdentitas">
                            </div>

                            <!-- Edit Button -->
                            <button type="button" class="btn btn-warning mt-2" id="editButton3">
                                Edit File
                            </button>
                        </div>
                        <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">Update Dokumen</button>
                                <a href="{{ route('Document.index') }}" class="btn btn-secondary">Cancel</a>
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
    <script>
    document.getElementById('editButton').addEventListener('click', function () {
        // Show the file input
        const fileInputContainer = document.getElementById('fileInputContainer');
        fileInputContainer.style.display = 'block';

        // Disable the edit button to avoid multiple clicks
        this.disabled = true;
    });

    document.getElementById('editButton2').addEventListener('click', function () {
        // Show the file input
        const fileInputContainer2 = document.getElementById('fileInputContainer2');
        fileInputContainer2.style.display = 'block';

        // Disable the edit button to avoid multiple clicks
        this.disabled = true;
    });

    document.getElementById('editButton3').addEventListener('click', function () {
        // Show the file input
        const fileInputContainer3 = document.getElementById('fileInputContainer3');
        fileInputContainer3.style.display = 'block';

        // Disable the edit button to avoid multiple clicks
        this.disabled = true;
    });
</script>
</body>
</html> 