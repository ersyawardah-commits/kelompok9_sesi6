
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelanggan - Mie Djotek</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0; min-height: 100vh; padding: 24px;
            display: grid; place-items: center;
            font-family: Arial, sans-serif; background: #fff8e9;
            color: #422b1c;
        }
        .card {
            display: grid; grid-template-columns: 1fr 1fr;
            max-width: 850px; width: 100%; overflow: hidden;
            background: white; border-radius: 28px;
            box-shadow: 0 14px 40px #633b1915;
        }
        .hero {
            background: #ffda70; padding: 42px 30px;
            display: flex; flex-direction: column;
            justify-content: center; align-items: center; text-align: center;
        }
        .food { font-size: 100px; }
        .hero h1 { font-size: 32px; margin: 15px 0 8px; }
        .hero p { line-height: 1.6; }
        .form { padding: 38px 32px; }
        .form h2 { margin-top: 0; }
        .muted { color: #806e5c; line-height: 1.6; }
        label { display: block; font-weight: bold; margin: 18px 0 8px; }
        input {
            width: 100%; padding: 13px; border: 1px solid #e7d9c5;
            border-radius: 12px; font-size: 15px;
        }
        button {
            width: 100%; margin-top: 24px; padding: 14px;
            border: 0; border-radius: 12px; background: #ed8b24;
            color: white; font-weight: bold; font-size: 16px; cursor: pointer;
        }
        a { display: block; text-align: center; margin-top: 20px; color: #a65c16; text-decoration: none; }
        .error { color: #b42318; font-size: 14px; }
        @media (max-width: 650px) {
            .card { grid-template-columns: 1fr; }
            .hero { padding: 25px; }
            .food { font-size: 70px; }
            .form { padding: 28px 22px; }
        }
    </style>
</head>
<body>
<div class="card">
    <section class="hero">
        <div class="food">🍜</div>
        <h1>Mie Djotek</h1>
        <p>Mie enak, pesanan mudah.<br>Isi data singkat untuk mulai memesan.</p>
    </section>

    <section class="form">
        <h2>Halo, Pelanggan!</h2>
        <p class="muted">Masukkan nama dan nomor WhatsApp kamu terlebih dahulu.</p>

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('pelanggan.proses') }}" method="POST">
            @csrf

            <label for="nama">Nama pelanggan</label>
            <input id="nama" name="nama" value="{{ old('nama') }}"
                   placeholder="Contoh: Ersya" maxlength="100" required>

            <label for="nomor_hp">Nomor WhatsApp</label>
            <input id="nomor_hp" name="nomor_hp" type="tel"
                   value="{{ old('nomor_hp') }}"
                   placeholder="Contoh: 081234567890" maxlength="20" required>

            <button type="submit">Lihat Menu →</button>
        </form>

        <a href="/">← Kembali pilih role</a>
    </section>
</div>
</body>
</html>
