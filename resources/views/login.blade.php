<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Perpustakaan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Gaya untuk latar belakang perpustakaan */
        body {
            background-image: url('\tampilan perpus.jpg'); /* Pastikan mengganti ini dengan URL gambar latar belakang */
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Box untuk login */
        .login-container {
            background-color: rgba(255, 255, 255, 0.9); /* Transparansi putih */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
        }

        /* Elemen input username dan password */
        .login-input {
            border-radius: 25px;
            border: none;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px 20px;
            width: 100%;
            margin-bottom: 20px;
        }

        /* Tombol login */
        .login-button {
            background-color: black;
            color: white;
            border-radius: 25px;
            border: none;
            padding: 10px 20px;
            width: 100%;
            cursor: pointer;
        }

        /* Social media icons */
        .social-icons {
            margin-top: 20px;
        }

        .social-icons img {
            width: 40px;
            margin: 0 10px;
        }

        /* Text login */
        .login-header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <!-- Login Container -->
    <div class="login-container">
        <div class="login-header">Login</div>

        <!-- Form Input -->
        <form id="loginForm" onsubmit="return handleLogin(event)">
            <input type="text" id="username" class="login-input" placeholder="Username" required>
            <input type="password" id="password" class="login-input" placeholder="Password" required>
            <button type="submit" class="login-button">Login</button>
        </form>

        <!-- Ikon Sosial Media -->
        <div class="social-icons">
            <img src="google-icon.png" alt="Google"> <!-- Ganti dengan URL ikon Google -->
            <img src="twitter-icon.png" alt="Twitter"> <!-- Ganti dengan URL ikon Twitter -->
            <img src="facebook-icon.png" alt="Facebook"> <!-- Ganti dengan URL ikon Facebook -->
        </div>
    </div>

    <script>
        // Array data pengguna
        const users = [
            { username: 'admin', password: 'password123' },
            { username: 'user1', password: 'password1' },
            { username: 'user2', password: 'password2' }
        ];

        // Fungsi untuk menangani login
        function handleLogin(event) {
            event.preventDefault(); // Mencegah reload halaman setelah submit form

            // Ambil nilai input
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            // Cari user di dalam array
            const user = users.find(user => user.username === username && user.password === password);

            // Jika user ditemukan, arahkan ke dashboard
            if (user) {
                window.location.href ="resources\views\Dashboard"; // Ganti dengan URL dashboard Anda
            } else {
                // Jika user tidak ditemukan, tampilkan pesan kesalahan
                alert("Username atau password salah");
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
