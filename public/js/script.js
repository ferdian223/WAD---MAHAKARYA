function handleLogin(event) {
    event.preventDefault();
    
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Di sini Anda bisa menambahkan logika autentikasi
    console.log('Login attempt:', { username, password });
    
    // Contoh validasi sederhana
    if (username && password) {
        // Redirect ke halaman index
        window.location.href = '/index'; // Untuk Laravel route
        // Atau gunakan:
        // window.location.href = '{{ route("index") }}'; // Jika menggunakan named route di Laravel
    } else {
        alert('Mohon isi username dan password');
    }
}

function handleRegister() {
    window.location.href = '/register';
}