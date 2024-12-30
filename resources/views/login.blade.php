<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h1>Selamat Datang</h1>
            <p>Makusan nama dan password dulu yaa</p>
            
            <form method="POST" action="{{ route('login.submit') }}">
                @csrf
                <div class="input-group">
                    <input type="text" name="username" id="username" placeholder="Username" required>
                </div>
                <div class="input-group">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <button type="submit" class="login-btn">Login</button>
            </form>

            <div class="alternative-login">
                <button class="register-btn" onclick="handleRegister()">Register with email</button>
                <button class="google-btn">
                    <img src="{{ asset('img/ggl.png') }}" alt="Google">
                    Continue with Google
                </button>
                <button class="facebook-btn">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook">
                    Continue with Facebook
                </button>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/script.js') }}"></script>
</html>