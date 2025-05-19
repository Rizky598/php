<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>🔰RIZKY APP STORE🔰</title>
  <style>
    * {
      box-sizing: border-box;
    }

    html, body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      height: 100%;
      overflow-x: hidden;
      color: white;
      background: transparent;
    }

    video.video-bg {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -2;
    }

    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.4);
      z-index: -1;
    }

    .content {
      position: relative;
      z-index: 1;
      padding: 20px;
      text-align: center;
      background: none;
    }

    .logo {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin: 20px auto 10px auto;
    }

    h1, p, .price-section h2 {
      text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.8);
    }

    h1 {
      font-size: 24px;
      margin: 10px 0 20px 0;
    }

    p {
      font-size: 16px;
      margin-bottom: 20px;
    }

    .btn {
      display: block;
      margin: 10px auto;
      padding: 12px 20px;
      width: 90%;
      max-width: 300px;
      background-color: rgba(255,255,255,0.3);
      border: none;
      border-radius: 10px;
      color: white;
      font-size: 16px;
      text-decoration: none;
      transition: background 0.3s;
    }

    .btn:hover {
      background-color: rgba(255,255,255,0.5);
    }

    .price-section {
      margin-top: 30px;
      background-color: rgba(0, 0, 0, 0.3);
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 0 5px rgba(255, 255, 255, 0.1);
      border-radius: 12px;
      padding: 20px;
    }

    .price-section h2 {
      font-size: 18px;
      margin-bottom: 10px;
    }

    .price-table {
      width: 100%;
      font-size: 14px;
    }

    .price-table th, .price-table td {
      padding: 8px;
      text-align: left;
    }

    .price-table tr:nth-child(even) {
      background-color: rgba(255,255,255,0.1);
    }

    @media screen and (max-width: 400px) {
      h1 { font-size: 20px; }
      p, .btn, .price-table td, .price-table th { font-size: 14px; }
    }
  </style>
</head>
<body>

  <video class="video-bg" autoplay loop playsinline id="bgVideo">
    <source src="https://b.top4top.io/m_3426wybrh0.mp4" type="video/mp4" />
    Browser Anda tidak mendukung video.
  </video>

  <div class="overlay"></div>

  <div class="content">
    <img src="https://b.top4top.io/p_3426payab0.jpg" alt="Logo" class="logo" />
    <h1>🔰RIZKY APP STORE🔰</h1>

    <p>Rizky app store tempat menjual server Minecraft terpercaya</p>

    <a href="https://wa.me/6283850540570" class="btn">Hubungi Admin</a>
    <a href="https://chat.whatsapp.com/J58JyghbGTEDulAXrUlRyh" class="btn">Masuk Grup WhatsApp</a>

    <div class="price-section">
      <h2>Harga Panel</h2>
      <table class="price-table">
        <tr><th>Jenis</th><th>Harga</th></tr>
        <tr><td>server Minecraft 1GB</td><td>Rp2.000</td></tr>
        <tr><td>server Minecraft 2GB</td><td>Rp3.000</td></tr>
        <tr><td>server Minecraft 4GB</td><td>Rp5.000</td></tr>
        <tr><td>server Minecraft 5GB</td><td>Rp6.000</td></tr>
        <tr><td>server Minecraft 6GB</td><td>Rp7.000</td></tr>
        <tr><td>server Minecraft 7GB</td><td>Rp8.000</td></tr>
        <tr><td>server Minecraft 8GB</td><td>Rp9.000</td></tr>
        <tr><td>server Minecraft 9GB</td><td>Rp10.000</td></tr>
        <tr><td>server Minecraft 10GB</td><td>Rp11.000</td></tr>
      </table>

      <h2 style="margin-top:20px;">🔰Harga server Minecraft🔰</h2>
      <table class="price-table">
        <tr><th>Paket</th><th>Harga</th></tr>
        <tr><td>Server Personal</td><td>Rp 15.000</td></tr>
        <tr><td>Server Premium</td><td>Rp 30.000</td></tr>
        <tr><td>Server Unlimited + Panel</td><td>Rp 60.000</td></tr>
      </table>
    </div>
  </div>

  <script>
    // Aktifkan suara video (user harus interaksi dulu agar suara dimulai di browser modern)
    document.addEventListener("click", function () {
      const video = document.getElementById("bgVideo");
      video.muted = false;
      video.play();
    });
  </script>

</body>
</html>