<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h1>Daftar Akun Baru</h1>
            <p>Silakan isi data diri Anda</p>
            
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register.submit') }}">
                @csrf
                <div class="input-group">
                    <input type="text" name="name" id="name" placeholder="Nama Lengkap" required>
                </div>
                <div class="input-group">
                    <input type="email" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <input type="text" name="username" id="username" placeholder="Username" required>
                </div>
                <div class="input-group">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="input-group">
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Konfirmasi Password" required>
                </div>
                <button type="submit" class="login-btn">Daftar</button>
            </form>

            <div class="alternative-login">
                <p>Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></p>
                <button class="google-btn">
                    <img src="{{ asset('img/ggl.png') }}" alt="Google">
                    Register with Google
                </button>
                <button class="facebook-btn">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook">
                    Register with Facebook
                </button>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/script.js') }}"></script>
</html>