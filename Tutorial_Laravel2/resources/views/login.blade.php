<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 50px;
        }
        .container {
            width: 500px;
        }
        h1 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 36px;
        }
        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }
        .form-group label {
            width: 150px;
            font-size: 18px;
        }
        .form-group input {
            flex: 1;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px; /* Membuat input melengkung */
            font-size: 16px;
        }
        .actions {
            display: flex;
            align-items: center;
            margin-left: 150px; /* Sejajar dengan input */
            gap: 40px;
        }
        button {
            background-color: #198754; /* Warna hijau tombol login */
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
        }
        .register-link {
            color: #0044cc;
            text-decoration: underline;
            font-size: 16px;
        }
        .error-msg {
            color: red;
            margin-left: 150px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>

        <form action="/auth" method="POST">
            @csrf
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>

            <div class="actions">
                <button type="submit">Login</button>
                <a href="/registration" class="register-link">Belum punya akun? Register</a>
            </div>
        </form>

        @if(session('error'))
            <p class="error-msg">{{ session('error') }}</p>
        @endif
    </div>
</body>
</html> 