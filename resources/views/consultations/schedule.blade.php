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
            <div class="header-container d-flex justify-content-between align-items-center py-3">
                <!-- Logo -->
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="{{ asset('img/logo2.png') }}" alt="Logo" style="height: 50px;">
                </a>
                
                <!-- Navigation -->
                <nav class="nav-links">
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
    <main class="container my-5">
        <h1 class="text-center mb-4">Jadwal Konsultasi</h1>

        <form id="consultationForm" class="p-4 border rounded shadow">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" id="name" class="form-control" placeholder="Nama Lengkap" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Email" required>
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">Nomor Telepon</label>
                <input type="text" id="phone_number" class="form-control" placeholder="Nomor Telepon" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <input type="text" id="address" class="form-control" placeholder="Alamat" required>
            </div>

            <div class="mb-3">
                <label for="consultation_topic" class="form-label">Topik Konsultasi</label>
                <select id="consultation_topic" class="form-select" required>
                    <option value="">Pilih Topik Konsultasi</option>
                    <option value="persiapan_ibadah">Persiapan Ibadah</option>
                    <option value="doa_umrah">Doa Umrah</option>
                    <option value="paket_perjalanan">Paket Perjalanan</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="consultation_date" class="form-label">Tanggal Konsultasi</label>
                <input type="datetime-local" id="consultation_date" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="ustad_name" class="form-label">Pilih Ustad</label>
                <select id="ustad_name" class="form-select" required>
                    <option value="">Pilih Ustad</option>
                    <option value="Ustad Ahmad">Ustad Ahmad</option>
                    <option value="Ustad Budi">Ustad Budi</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Pesan (Opsional)</label>
                <textarea id="message" class="form-control" placeholder="Pesan (Opsional)" rows="4"></textarea>
            </div>

            <button type="button" id="addButton" class="btn btn-primary w-100">Tambah Data</button>
        </form>

        <h2 class="mt-5">Data Konsultasi</h2>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                    <th>Topik Konsultasi</th>
                    <th>Tanggal</th>
                    <th>Ustad</th>
                    <th>Pesan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="dataTable">
                <!-- Rows will be dynamically added here -->
            </tbody>
        </table>
    </main>

    <script>
        document.getElementById('addButton').addEventListener('click', function () {
           
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone_number').value;
            const address = document.getElementById('address').value;
            const topic = document.getElementById('consultation_topic').value;
            const date = document.getElementById('consultation_date').value;
            const ustad = document.getElementById('ustad_name').value;
            const message = document.getElementById('message').value;

            if (!name || !email || !phone || !address || !topic || !date || !ustad) {
                alert('Mohon lengkapi semua data sebelum menambahkan.');
                return;
            }

            
            const table = document.getElementById('dataTable');
            const row = document.createElement('tr');

            row.innerHTML = `
                <td>${name}</td>
                <td>${email}</td>
                <td>${phone}</td>
                <td>${address}</td>
                <td>${topic}</td>
                <td>${date}</td>
                <td>${ustad}</td>
                <td>${message}</td>
                <td>
                    <button class="btn btn-warning btn-sm edit-button">Edit</button>
                    <button class="btn btn-danger btn-sm delete-button">Hapus</button>
                </td>
            `;

            table.appendChild(row);

            // Clear form inputs
            document.getElementById('consultationForm').reset();

            // Add event listeners for edit and delete
            row.querySelector('.delete-button').addEventListener('click', function () {
                row.remove();
            });

            row.querySelector('.edit-button').addEventListener('click', function () {
                document.getElementById('name').value = name;
                document.getElementById('email').value = email;
                document.getElementById('phone_number').value = phone;
                document.getElementById('address').value = address;
                document.getElementById('consultation_topic').value = topic;
                document.getElementById('consultation_date').value = date;
                document.getElementById('ustad_name').value = ustad;
                document.getElementById('message').value = message;
                row.remove();
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
