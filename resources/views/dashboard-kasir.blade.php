
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kasir - Mie Djotek</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, sans-serif; background: #fff8e9; color: #422b1c; }
        aside {
            position: fixed; inset: 0 auto 0 0; width: 235px;
            padding: 28px 18px; background: #633b19; color: white;
        }
        aside h2 { margin-top: 0; }
        aside p { color: #f8dfb4; }
        aside a { display: block; padding: 13px; margin: 8px 0; color: white; text-decoration: none; border-radius: 10px; }
        aside a.active { background: #ed8b24; }
        main { margin-left: 235px; padding: 32px; }
        .top { display: flex; justify-content: space-between; align-items: center; gap: 16px; flex-wrap: wrap; }
        .cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 18px; margin: 28px 0; }
        .card { padding: 23px; border-radius: 18px; background: white; box-shadow: 0 8px 25px #633b1910; }
        .number { font-size: 28px; font-weight: bold; color: #c56b18; }
        .notice { padding: 22px; background: #fff0c2; border-radius: 16px; line-height: 1.6; }
        button { border: 0; padding: 12px 16px; border-radius: 10px; background: #ed8b24; color: white; font-weight: bold; cursor: pointer; }
        @media (max-width: 650px) {
            aside { position: static; width: auto; }
            main { margin: 0; padding: 20px; }
        }
    </style>
</head>
<body>
<aside>
    <h2>🍜 Mie Djotek</h2>
    <p>Panel Kasir / Admin</p>
    <a href="{{ route('dashboard.kasir') }}" class="active">📊 Dashboard</a>
    <a href="#" onclick="return false">🧾 Pesanan Masuk</a>
    <a href="#" onclick="return false">💳 Konfirmasi Pembayaran</a>
    <a href="#" onclick="return false">🍜 Kelola Menu</a>
</aside>

<main>
    <div class="top">
        <div>
            <h1>Dashboard Kasir</h1>
            <p>Halo, {{ session('username') }}. Selamat bekerja!</p>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>

    <div class="cards">
        <section class="card">
            <p>Pesanan Masuk</p>
            <div class="number">—</div>
            <small>Menunggu integrasi database</small>
        </section>
        <section class="card">
            <p>Pembayaran</p>
            <div class="number">—</div>
            <small>Menunggu integrasi database</small>
        </section>
        <section class="card">
            <p>Menu Tersedia</p>
            <div class="number">—</div>
            <small>Menunggu integrasi database</small>
        </section>
    </div>

    <section class="notice">
        <h3>📌 Informasi Kasir</h3>
        <p>Halaman login dan dashboard kasir sudah disiapkan. Bagian pesanan, pembayaran, dan pengelolaan menu saat ini masih berupa tampilan awal, belum melakukan perubahan data.</p>
    </section>
</main>
</body>
</html>
