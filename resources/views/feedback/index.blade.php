<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Mahakarya Travel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <!-- Link ke font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Menetapkan font Poppins untuk seluruh halaman */
        body {
            font-family: 'Poppins';
        }

        /* CSS untuk memastikan form edit dan form tambah memiliki ukuran yang konsisten */
        .card {
            margin-top: 20px;  /* Menjaga jarak antar card */
        }

        .card-body {
            padding: 20px;
        }

        #editFeedbackCard {
            display: none; /* Menyembunyikan form edit pada awalnya */
        }

        .form-control {
            border-radius: 0.375rem; /* Konsistensi border radius */
        }

        .btn {
            border-radius: 0.375rem; /* Konsistensi border radius untuk tombol */
        }

        .gradient-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.1); /* Transparansi 50% */
            z-index: 1; /* Di belakang teks */
        }

        .contt {
            position: relative;
            z-index: 2;
        }

    </style>
</head>
<body>
    <!-- Header with Gradient Image -->
    <header class="dashboard-header" style="background-image: url('{{ asset('img/feedback-header.jpg') }}'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="header-container">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="{{ asset('img/logo2.png') }}" alt="Logo">
                </a>
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

    <!-- Image and Text for Hero Section -->
    <div class="image-container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('img/background2.jpg') }}'); background-size: cover; background-position: center; position: relative;">
        <div class="gradient-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;"></div>
        <!-- Hero Content -->
        <br><br><br><br><br><br>
        <div class="contt" style="display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; position: relative; z-index: 2;">
            <div class="desc" style="color: white; font-size: 1.7rem; font-weight: bold;">
                Suara Anda, Perjalanan Kami
            </div>
            <br>
            <div class="hero-description" style="color: white; font-size: 1.2rem; max-width: 800px;">
                Kami menghargai setiap pengalaman yang Anda bagikan. Berikan feedback Anda untuk membantu kami terus meningkatkan layanan kami dan memastikan perjalanan umrah dan haji Anda lebih baik lagi. Setiap masukan Anda sangat berarti bagi kami.
            </div>
        </div>
    </div>
    
    

    <!-- Main Content -->
    <div class="container mt-5 mb-5">
        <div class="text-center mb-4 ">
            <br>
            <h2>
            We Value Your Feedback
            </h2>
        </div>

        <!-- Feedback Form Section -->
        <div class="row">
            <div class="col-md-8 mx-auto">
                <!-- Form Tambah Feedback -->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title ml-2">
                            Submit Your Feedback
                        </h5>
                        
                        <form action="{{ route('feedback.store') }}" method="POST" id="addFeedbackForm">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Your Feedback</label>
                                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Write your feedback" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Submit Feedback</button>
                        </form>
                    </div>
                </div>

                <!-- Form Edit Feedback -->
                <div id="editFeedbackCard" class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Edit Feedback</h5>
                        <form action="" method="POST" id="editFeedbackForm">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="editName" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="editName" name="name" placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3">
                                <label for="editMessage" class="form-label">Your Feedback</label>
                                <textarea class="form-control" id="editMessage" name="message" rows="3" placeholder="Write your feedback" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Submit Feedback</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Display Feedback Section -->
        <div class="text-center mb-4 ">
            <br><br>
            <h2>
            User Feedback
            </h2>
        </div>
        <br>
        <div class="row">
            @foreach ($feedbacks as $feedback)
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $feedback->name }}</h5>
                            <p class="card-text">{{ $feedback->message }}</p>
                            <div class="btn-group">
                                <button class="btn btn-warning btn-sm" data-feedback="{{ json_encode($feedback) }}" onclick="editFeedback(this)">Edit</button>
                                <form action="{{ route('feedback.destroy', $feedback) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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
                    <p class="mb-0">©2024 Mahakarya Group. All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function editFeedback(button) {
            const feedback = JSON.parse(button.getAttribute('data-feedback'));
            document.getElementById('editFeedbackCard').style.display = 'block';
            document.getElementById('addFeedbackForm').style.display = 'none';
            document.getElementById('editName').value = feedback.name;
            document.getElementById('editMessage').value = feedback.message;
            const editForm = document.getElementById('editFeedbackForm');
            editForm.action = `/feedback/${feedback.id}`;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
