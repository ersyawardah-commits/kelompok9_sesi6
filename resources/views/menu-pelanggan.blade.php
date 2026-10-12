
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Mie Djotek</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, sans-serif; background: #fff8e9; color: #422b1c; }
        header {
            display: flex; justify-content: space-between; align-items: center;
            gap: 16px; flex-wrap: wrap; padding: 22px 7%;
            background: #ffda70;
        }
        header h1 { margin: 0; }
        main { max-width: 1050px; margin: auto; padding: 32px 22px; }
        .welcome { margin-bottom: 28px; }
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; }
        .item { background: white; padding: 22px; border-radius: 20px; box-shadow: 0 8px 25px #633b1910; }
        .food { font-size: 58px; }
        .price { font-weight: bold; color: #b95d0b; }
        .tag { background: #fff0c2; display: inline-block; padding: 6px 10px; border-radius: 20px; font-size: 12px; }
        button { border: 0; border-radius: 10px; padding: 11px 15px; background: #ed8b24; color: white; font-weight: bold; cursor: pointer; }
        .logout { background: #633b19; }
    </style>
</head>
<body>
<header>
    <h1>🍜 Mie Djotek</h1>
    <form action="{{ route('pelanggan.logout') }}" method="POST">
        @csrf
        <button class="logout" type="submit">Keluar</button>
    </form>
</header>

<main>
    <div class="welcome">
        <span class="tag">Pelanggan</span>
        <h2>Halo, {{ $pelanggan['nama'] }}! 👋</h2>
        <p>Selamat datang. Silakan lihat pilihan menu Mie Djotek.</p>
        <p>WhatsApp: {{ $pelanggan['nomor_hp'] }}</p>
    </div>

    <div class="grid">
        <article class="item">
            <div class="food">🍜</div>
            <h3>Mie Djotek Original</h3>
            <p>Mie dengan bumbu khas Mie Djotek.</p>
            <p class="price">Harga menyusul</p>
            <span class="tag">Menu contoh</span>
        </article>

        <article class="item">
            <div class="food">🌶️</div>
            <h3>Mie Djotek Pedas</h3>
            <p>Mie untuk pencinta rasa pedas.</p>
            <p class="price">Harga menyusul</p>
            <span class="tag">Menu contoh</span>
        </article>

        <article class="item">
            <div class="food">🥤</div>
            <h3>Minuman</h3>
            <p>Pilihan minuman pendamping makanan.</p>
            <p class="price">Harga menyusul</p>
            <span class="tag">Menu contoh</span>
        </article>
    </div>
    <p style="margin-top:24px;color:#806e5c">
        Ini tampilan menu awal. Pemesanan dan harga belum terhubung ke database menu.
    </p>
</main>
</body>
</html>
