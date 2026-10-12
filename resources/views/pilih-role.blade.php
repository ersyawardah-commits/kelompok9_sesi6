
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Role | Mie Djotek</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@1,700;1,800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            font-family: 'DM Sans', sans-serif;
            background: #fffaf0;
            color: #252018;
        }

        .navbar {
            height: 76px;
            padding: 0 7%;
            display: flex;
            align-items: center;
            gap: 12px;
            background: #fff;
            border-bottom: 1px solid #f3e9d6;
        }

        .logo-icon {
            width: 43px;
            height: 43px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fff1c4;
            border-radius: 50%;
            font-size: 26px;
        }

        .logo-text {
            font-family: 'Playfair Display', serif;
            font-size: 27px;
            font-style: italic;
            font-weight: 800;
        }

        .hero {
            position: relative;
            min-height: calc(100vh - 76px);
            padding: 55px 7% 65px;
            overflow: hidden;
            background:
                radial-gradient(ellipse at 100% 0%, #ffe6a0 0%, transparent 35%),
                radial-gradient(ellipse at 0% 100%, #ffedb8 0%, transparent 36%),
                #fffaf0;
        }

        .decoration {
            position: absolute;
            color: #ffc629;
            font-size: 95px;
            opacity: .32;
            pointer-events: none;
        }

        .decoration.left {
            top: 35px;
            left: -22px;
            transform: rotate(-25deg);
        }

        .decoration.right {
            right: 10px;
            bottom: 20px;
            transform: rotate(20deg);
        }

        .content {
            position: relative;
            z-index: 1;
            max-width: 1100px;
            margin: auto;
        }

        .heading {
            text-align: center;
            margin-bottom: 36px;
        }

        .eyebrow {
            display: inline-block;
            margin-bottom: 12px;
            padding: 8px 17px;
            border-radius: 30px;
            background: #fff0c5;
            color: #9b6200;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        h1 {
            font-size: clamp(30px, 4vw, 46px);
            line-height: 1.2;
            font-weight: 800;
        }

        h1 span {
            display: block;
            margin-top: 3px;
            color: #e99b00;
            font-family: 'Playfair Display', serif;
            font-style: italic;
            font-size: clamp(43px, 6vw, 66px);
        }

        .subtitle {
            margin-top: 17px;
            color: #766c5c;
            font-size: 15px;
            line-height: 1.8;
        }

        .role-list {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 22px;
            max-width: 960px;
            margin: auto;
        }

        .role-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 290px;
            padding: 30px 22px 25px;
            text-align: center;
            background: rgba(255, 255, 255, .94);
            border: 1px solid #f3e6ca;
            border-radius: 22px;
            box-shadow: 0 8px 25px rgba(104, 76, 24, .08);
            transition: transform .2s, box-shadow .2s;
        }

        .role-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 14px 32px rgba(104, 76, 24, .15);
        }

        .role-icon {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 76px;
            height: 76px;
            margin-bottom: 19px;
            border-radius: 50%;
            background: #ffdf78;
            color: #31260e;
        }

        .role-icon svg {
            width: 37px;
            height: 37px;
            fill: none;
            stroke: currentColor;
            stroke-width: 1.8;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .role-card h2 {
            margin-bottom: 10px;
            font-size: 20px;
            font-weight: 800;
        }

        .role-card p {
            min-height: 47px;
            margin-bottom: 22px;
            color: #786f60;
            font-size: 13px;
            line-height: 1.7;
        }

        .btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            margin-top: auto;
            padding: 13px 18px;
            border: none;
            border-radius: 10px;
            background: #ffb900;
            color: #2d2100;
            font-family: inherit;
            font-size: 14px;
            font-weight: 800;
            text-decoration: none;
            cursor: pointer;
            transition: background .2s;
        }

        .btn:hover {
            background: #f3a900;
        }

        .btn svg {
            width: 17px;
            height: 17px;
            fill: none;
            stroke: currentColor;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .footer {
            margin-top: 35px;
            text-align: center;
            color: #948875;
            font-size: 12px;
        }

        @media (max-width: 760px) {
            .navbar {
                height: 66px;
                padding: 0 5%;
            }

            .logo-text {
                font-size: 24px;
            }

            .hero {
                padding: 40px 5%;
            }

            .role-list {
                grid-template-columns: 1fr;
                max-width: 390px;
                gap: 17px;
            }

            .role-card {
                min-height: auto;
                padding: 25px 22px;
            }

            .role-card p {
                min-height: auto;
            }

            .btn {
                max-width: 250px;
            }
        }
    </style>
</head>

<body>
    <header class="navbar">
        <div class="logo-icon">🍜</div>
        <div class="logo-text">Mie Djotek</div>
    </header>

    <main class="hero">
        <div class="decoration left">〰</div>
        <div class="decoration right">✦</div>

        <div class="content">
            <section class="heading">
                <div class="eyebrow">Selamat Datang</div>
                <h1>
                    Selamat Datang di
                    <span>Mie Djotek</span>
                </h1>
                <p class="subtitle">
                    Nikmati kelezatan setiap hidangan kami.<br>
                    Silakan pilih jenis pengguna untuk melanjutkan.
                </p>
            </section>

            <section class="role-list">

                <!-- ROLE PELANGGAN -->
                <article class="role-card">
                    <div class="role-icon">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="8" r="4"></circle>
                            <path d="M4 21v-2a8 8 0 0 1 16 0v2"></path>
                        </svg>
                    </div>

                    <h2>Pelanggan</h2>
                    <p>
                        Masukkan nama dan nomor WhatsApp
                        untuk mulai memesan makanan.
                    </p>

                    <a href="/pelanggan" class="btn">
                        Masuk
                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14M13 6l6 6-6 6"></path>
                        </svg>
                    </a>
                </article>

                <!-- ROLE KASIR / ADMIN -->
                <article class="role-card">
                    <div class="role-icon">
                        <svg viewBox="0 0 24 24">
                            <rect x="3" y="4" width="18" height="16" rx="2"></rect>
                            <path d="M7 8h3M14 8h3M7 12h3M14 12h3M8 16h8"></path>
                        </svg>
                    </div>

                    <h2>Kasir / Admin</h2>
                    <p>
                        Login menggunakan email dan password
                        untuk mengelola pesanan.
                    </p>

                    <a href="/login/kasir" class="btn">
                        Masuk
                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14M13 6l6 6-6 6"></path>
                        </svg>
                    </a>
                </article>

                <!-- ROLE PETUGAS DAPUR -->
                <article class="role-card">
                    <div class="role-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M4 13a8 8 0 0 1 16 0"></path>
                            <path d="M3 13h18v3a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3z"></path>
                            <path d="M8 5c-1-1 1-2 0-3M12 5c-1-1 1-2 0-3M16 5c-1-1 1-2 0-3"></path>
                        </svg>
                    </div>

                    <h2>Petugas Dapur</h2>
                    <p>
                        Login untuk melihat detail pesanan
                        dan memproses makanan.
                    </p>

                    <a href="/login/dapur" class="btn">
                        Masuk
                        <svg viewBox="0 0 24 24">
                            <path d="M5 12h14M13 6l6 6-6 6"></path>
                        </svg>
                    </a>
                </article>

            </section>

            <footer class="footer">
                © 2026 Mie Djotek · Sistem Pemesanan Makanan
            </footer>
        </div>
    </main>
</body>
</html>
