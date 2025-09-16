<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jadwal PKL Mahasiswa</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f0f6ff;
      color: #1e3a8a;
    }
    header {
      background: #2563eb;
      color: #fff;
      padding: 20px;
      text-align: center;
      border-bottom: 3px solid #1e40af;
    }
    header h1 {
      margin: 0;
    }
    .container {
      width: 90%;
      margin: auto;
      padding: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      background: #fff;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      border-radius: 8px;
      overflow: hidden;
    }
    table thead {
      background: #2563eb;
      color: #fff;
    }
    table th, table td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    table tr:hover {
      background: #f1f5f9;
    }
    .btn {
      display: inline-block;
      margin-top: 20px;
      background: #2563eb;
      color: #fff;
      padding: 10px 15px;
      border-radius: 6px;
      text-decoration: none;
    }
    .btn:hover {
      background: #1e40af;
    }
    .upload-form {
      margin-top: 30px;
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .upload-form h3 {
      margin-top: 0;
      color: #2c3e50;
    }
    .upload-form label {
      display: block;
      margin: 10px 0 5px;
    }
    .upload-form input, .upload-form select {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    .upload-form button {
      background: #2563eb;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }
    .upload-form button:hover {
      background: #1e40af;
    }
    @media(max-width: 768px) {
      .container {
        width: 100%;
        padding: 10px;
      }
      table th, table td {
        font-size: 14px;
        padding: 8px;
      }
    }
  </style>
</head>
<body>
  <header>
    <h1>Jadwal PKL Mahasiswa</h1>
    <p>Dosen Pembimbing: Dr. Nama Dosen</p>
  </header>

  <div class="container">
    <table>
      <thead>
        <tr>
          <th>Nama Mahasiswa</th>
          <th>NIM</th>
          <th>Jurusan</th>
          <th>Kegiatan</th>
          <th>Jadwal</th>
          <th>Status</th>
          <th>Dokumen</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Andi Saputra</td>
          <td>210101001</td>
          <td>Informatika</td>
          <td>Pendataan Awal</td>
          <td>05 Sept 2025</td>
          <td><span style="color:green;font-weight:600;">Selesai</span></td>
          <td><a href="dokumen/andi_proposal.pdf" target="_blank">Proposal</a></td>
        </tr>
        <tr>
          <td>Citra Lestari</td>
          <td>210101002</td>
          <td>Sistem Informasi</td>
          <td>Presentasi Proposal</td>
          <td>12 Sept 2025</td>
          <td><span style="color:orange;font-weight:600;">Menunggu</span></td>
          <td><a href="dokumen/citra_proposal.pdf" target="_blank">Proposal</a></td>
        </tr>
        <tr>
          <td>Budi Santoso</td>
          <td>210101003</td>
          <td>Teknik Komputer</td>
          <td>Pengumpulan Laporan</td>
          <td>20 Sept 2025</td>
          <td><span style="color:blue;font-weight:600;">Proses</span></td>
          <td><a href="dokumen/budi_laporan.pdf" target="_blank">Laporan</a></td>
        </tr>
      </tbody>
    </table>

    <!-- Form Upload Proposal/Dokumen -->
    <div class="upload-form">
      <h3>Upload Berkas PKL</h3>
      <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="nama">Nama Mahasiswa</label>
        <input type="text" id="nama" name="nama" required>

        <label for="nim">NIM</label>
        <input type="text" id="nim" name="nim" required>

        <label for="jenis">Jenis Dokumen</label>
        <select id="jenis" name="jenis" required>
          <option value="">-- Pilih Jenis Dokumen --</option>
          <option value="proposal">Proposal</option>
          <option value="laporan">Laporan</option>
          <option value="dokumen_lain">Dokumen Lain</option>
        </select>

        <label for="file">Upload File (PDF)</label>
        <input type="file" id="file" name="file" accept=".pdf" required>

        <button type="submit">Upload</button>
      </form>
    </div>

    <a href="index.html" class="btn">⬅ Kembali ke Profil</a>
  </div>
</body>
</html>
