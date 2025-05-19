<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jual Server Minecraft</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    #map {
      height: 400px;
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="container py-5">
    <h1 class="text-center">Jual Server Minecraft</h1>
    <p class="text-center">Pilih paket server sesuai kebutuhanmu!</p>

    <div class="row text-center my-4">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Paket Basic</h5>
            <p class="card-text">1GB RAM - 10 Slot</p>
            <p class="card-text">Rp 15.000 / bulan</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Paket Medium</h5>
            <p class="card-text">2GB RAM - 20 Slot</p>
            <p class="card-text">Rp 30.000 / bulan</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Paket Pro</h5>
            <p class="card-text">4GB RAM - 50 Slot</p>
            <p class="card-text">Rp 60.000 / bulan</p>
          </div>
        </div>
      </div>
    </div>

    <h3 class="mt-5">Formulir Pemesanan</h3>
    <form id="waForm">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" required>
      </div>
      <div class="mb-3">
        <label for="kontak" class="form-label">Kontak (WhatsApp)</label>
        <input type="text" class="form-control" id="kontak" required>
      </div>
      <div class="mb-3">
        <label for="paket" class="form-label">Pilih Paket</label>
        <select id="paket" class="form-control" required>
          <option value="Basic">Basic - Rp 15.000</option>
          <option value="Medium">Medium - Rp 30.000</option>
          <option value="Pro">Pro - Rp 60.000</option>
        </select>
      </div>
      <button type="submit" class="btn btn-success">Kirim ke WhatsApp</button>
    </form>

    <h3 class="mt-5">Peta Lokasi Server</h3>
    <div id="map"></div>
  </div>

  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
  <script>
    var map = L.map('map').setView([-6.200000, 106.816666], 5);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: 'Map data &copy; <a href="https://openstreetmap.org">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([-6.200000, 106.816666]).addTo(map)
      .bindPopup('Lokasi Pusat Server')
      .openPopup();
  </script>

  <script>
    document.getElementById('waForm').addEventListener('submit', function(e) {
      e.preventDefault();
      var nama = document.getElementById('nama').value;
      var kontak = document.getElementById('kontak').value;
      var paket = document.getElementById('paket').value;
      var pesan = `Halo, saya ingin pesan server Minecraft:
Nama: ${nama}
Kontak: ${kontak}
Paket: ${paket}`;
      var nomorAdmin = '6281234567890'; // Ganti dengan nomor WA kamu
      window.open(`https://wa.me/${nomorAdmin}?text=${encodeURIComponent(pesan)}`, '_blank');
    });
  </script>
</body>
</html>
