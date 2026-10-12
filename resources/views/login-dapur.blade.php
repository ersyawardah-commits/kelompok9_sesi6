
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dapur - Mie Djotek</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0; min-height: 100vh; display: grid;
            place-items: center; padding: 20px;
            font-family: Arial, sans-serif; background: #fff8e9;
            color: #422b1c;
        }
        .card {
            width: 100%; max-width: 420px; padding: 34px;
            background: white; border-radius: 24px;
            box-shadow: 0 12px 35px #633b1915;
        }
        .logo {
            width: 66px; height: 66px; display: grid;
            place-items: center; margin: auto; border-radius: 20px;
            background: #ffda70; font-size: 34px;
        }
        h1 { text-align: center; margin-bottom: 8px; }
        .sub { text-align: center; color: #806e5c; margin-bottom: 28px; }
        label { display: block; font-weight: bold; margin: 16px 0 8px; }
        input {
            width: 100%; padding: 13px; border: 1px solid #e7d9c5;
            border-radius: 12px; font-size: 15px;
        }
        button {
            width: 100%; margin-top: 24px; padding: 14px;
            border: 0; border-radius: 12px; background: #ed8b24;
            color: white; font-weight: bold; font-size: 16px;
            cursor: pointer;
        }
        a { color: #a65c16; text-decoration: none; }
        .back { display: block; text-align: center; margin-top: 20px; }
        .error { color: #b42318; font-size: 14px; margin-top: 12px; }
        .role { background: #fff2cf; padding: 10px; border-radius: 10px; text-align: center; }
    </style>
</head>
<body>
<div class="card">
    <div class="logo">👨‍🍳</div>
    <h1>Login Petugas Dapur</h1>
    <p class="sub">Sistem E-Order Mie Djotek</p>
    <p class="role">Masuk sebagai Petugas Dapur</p>

    @if ($errors->any())
        <div class="error">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('login.dapur.proses') }}" method="POST">
        @csrf
        <label for="username">Username</label>
        <input id="username" name="username" value="{{ old('username') }}"
               placeholder="Masukkan username" required autofocus>

        <label for="password">Password</label>
        <input id="password" type="password" name="password"
               placeholder="Masukkan password" required>

        <button type="submit">Login ke Dapur</button>
    </form>

    <a class="back" href="/">← Kembali pilih role</a>
</div>
</body>
</html>
