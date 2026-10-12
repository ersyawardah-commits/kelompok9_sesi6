
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Dapur - Mie Djotek</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, sans-serif; background: #fff8e9; color: #422b1c; }
        header {
            padding: 22px 6%; background: #ffda70;
            display: flex; justify-content: space-between; align-items: center; gap: 16px; flex-wrap: wrap;
        }
        header h1 { margin: 0; }
        main { max-width: 1100px; margin: auto; padding: 32px 22px; }
        .welcome { margin-bottom: 25px; }
        .stats { display: grid; grid-template-columns: repeat(auto-fit, minmax(190px, 1fr)); gap: 18px; }
        .card { background: white; padding: 23px; border-radius: 18px; box-shadow: 0 8px 25px #633b1910; }
        .number { font-size: 28px; font-weight: bold; color: #c56b18; }
        .empty { margin-top: 22px; padding: 25px; border: 1px dashed #d8bd94; border-radius: 18px; text-align: center; background: white; }
        button { border: 0; padding: 12px 16px; border-radius: 10px; background: #633b19; color: white; font-weight: bold; cursor: pointer; }
        .icon { font-size: 48px; }
    </style>
</head>
<body>
<header>
    <h1>🍜 Mie Djotek — Dapur</h1>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</header>

<main>
    <section class="welcome">
        <h2>Halo, {{ session('username') }}! 👨‍🍳</h2>
        <p>Dashboard petugas dapur untuk memantau dan menyiapkan pesanan.</p>
    </section>

    <div class="stats">
        <section class="card">
            <div class="icon">🕒</div>
            <p>Pesanan Baru</p>
            <div class="number">—</div>
        </section>
        <section class="card">
            <div class="icon">🍳</div>
            <p>Sedang Diproses</p>
            <div class="number">—</div>
        </section>
        <section class="card">
            <div class="icon">✅</div>
            <p>Pesanan Selesai</p>
            <div class="number">—</div>
        </section>
    </div>

    <section class="empty">
        <div class="icon">🍜</div>
        <h3>Daftar Pesanan</h3>
        <p>Belum ada data pesanan yang ditampilkan.</p>
        <p>Daftar ini akan dihubungkan dengan data pesanan setelah fitur transaksi dibuat.</p>
    </section>
</main>
</body>
</html>
