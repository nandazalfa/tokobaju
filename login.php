<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('WhatsApp Image 2024-11-10 at 18.48.34_6ef6a815 (1).jpg'); /* Ganti dengan path image Anda */
            background-size: cover;
            background-position: center;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Warna putih transparan */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        /* Mengubah warna tombol login menjadi hitam */
        .btn-black {
            background-color: black;
            color: white;
            border: none;
        }
        .btn-black:hover {
            background-color: #333; /* Warna hitam lebih terang saat di-hover */
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="text-center mb-4">Login</h2>
        <form onsubmit="return handleLogin()">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-black w-100">Login</button> <!-- Menambahkan kelas btn-black -->
        </form>
        <p id="message" class="text-danger text-center mt-3"></p>
    </div>

    <script>
        function handleLogin() {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            // Contoh data username dan password yang valid
            const validUsername = 'zariel';
            const validPassword = 'zariel123';

            if (username === validUsername && password === validPassword) {
                alert('Login berhasil!');
                window.location.href = 'indeks.php'; // Mengarahkan ke indeks.php setelah login berhasil
                return false; // Mencegah submit form agar tidak refresh
            } else {
                document.getElementById('message').textContent = 'Username atau password salah!';
                return false; // Mencegah submit form agar tidak refresh
            }
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
