<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | SIPKL</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    .dashboard-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .dashboard-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }
    .stats-number {
      font-size: 2rem;
      font-weight: bold;
      background: linear-gradient(45deg, #3b82f6, #1e40af);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
  </style>
</head>
<body class="bg-gray-100 flex">

  <!-- Sidebar -->
  <aside class="w-64 bg-white shadow-lg h-screen fixed">
    <div class="p-6 flex items-center space-x-3 border-b">
      <img src="{{ asset('logo.png') }}" alt="Logo" class="h-12 w-12 rounded-md border bg-gray-50 object-contain">
      <span class="font-bold text-xl text-gray-700">SIPKL</span>
    </div>
    <nav class="mt-6">
      <a href="{{ route('dashboard') }}" class="flex items-center px-6 py-3 text-blue-600 bg-blue-50 border-r-4 border-blue-600">
        <i class="fas fa-home mr-3"></i> Dashboard
      </a>
      <a href="#siswa" class="flex items-center px-6 py-3 text-gray-600 hover:bg-gray-100">
        <i class="fas fa-user-graduate mr-3"></i> Siswa
      </a>
      <a href="#perusahaan" class="flex items-center px-6 py-3 text-gray-600 hover:bg-gray-100">
        <i class="fas fa-building mr-3"></i> Perusahaan
      </a>
      <a href="#laporan" class="flex items-center px-6 py-3 text-gray-600 hover:bg-gray-100">
        <i class="fas fa-file-alt mr-3"></i> Laporan
      </a>
      <a href="#pengaturan" class="flex items-center px-6 py-3 text-gray-600 hover:bg-gray-100">
        <i class="fas fa-cog mr-3"></i> Pengaturan
      </a>
    </nav>
  </aside>

  <!-- Main Content -->
  <div class="flex-1 ml-64">
    <!-- Header -->
    <header class="bg-white shadow px-6 py-4 flex justify-between items-center">
      <h2 class="text-xl font-bold text-gray-700">Dashboard</h2>
      <div class="flex items-center space-x-6">
        <div class="relative">
          <i class="fas fa-bell text-gray-600 text-lg"></i>
          <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs w-4 h-4 flex items-center justify-center rounded-full">3</span>
        </div>
        <div class="flex items-center space-x-2 cursor-pointer">
          <img src="https://i.pravatar.cc/100" class="w-8 h-8 rounded-full" alt="Foto Profil">
          <span class="text-gray-700 font-semibold hidden md:block">{{ Auth::user()->name ?? 'Admin' }}</span>
          <i class="fas fa-chevron-down text-gray-400"></i>
        </div>
      </div>
    </header>

    <!-- Content -->
    <main class="p-6">
      <!-- Statistik -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="dashboard-card bg-white p-6 rounded-2xl shadow">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-gray-500">Jumlah Siswa</p>
              <p class="stats-number">120</p>
            </div>
            <div class="bg-blue-100 p-4 rounded-xl">
              <i class="fas fa-user-graduate text-blue-600 text-2xl"></i>
            </div>
          </div>
        </div>
        <div class="dashboard-card bg-white p-6 rounded-2xl shadow">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-gray-500">Perusahaan</p>
              <p class="stats-number">15</p>
            </div>
            <div class="bg-green-100 p-4 rounded-xl">
              <i class="fas fa-building text-green-600 text-2xl"></i>
            </div>
          </div>
        </div>
        <div class="dashboard-card bg-white p-6 rounded-2xl shadow">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-gray-500">Laporan</p>
              <p class="stats-number">35</p>
            </div>
            <div class="bg-yellow-100 p-4 rounded-xl">
              <i class="fas fa-file-alt text-yellow-600 text-2xl"></i>
            </div>
          </div>
        </div>
      </div>

      <!-- Tabel Data -->
      <div class="bg-white rounded-2xl shadow p-6">
        <h3 class="text-lg font-bold text-gray-700 mb-4">Daftar Siswa PKL</h3>
        <div class="overflow-x-auto">
          <table class="min-w-full border text-sm">
            <thead class="bg-gray-100 text-gray-600">
              <tr>
                <th class="px-4 py-2 border">No</th>
                <th class="px-4 py-2 border">Nama</th>
                <th class="px-4 py-2 border">Kelas</th>
                <th class="px-4 py-2 border">Perusahaan</th>
                <th class="px-4 py-2 border">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-center">
                <td class="px-4 py-2 border">1</td>
                <td class="px-4 py-2 border">Budi Santoso</td>
                <td class="px-4 py-2 border">XI RPL 1</td>
                <td class="px-4 py-2 border">PT Maju Jaya</td>
                <td class="px-4 py-2 border text-green-600 font-semibold">Aktif</td>
              </tr>
              <tr class="text-center">
                <td class="px-4 py-2 border">2</td>
                <td class="px-4 py-2 border">Siti Aminah</td>
                <td class="px-4 py-2 border">XI TKJ 2</td>
                <td class="px-4 py-2 border">CV Teknologi Nusantara</td>
                <td class="px-4 py-2 border text-yellow-600 font-semibold">Proses</td>
              </tr>
              <tr class="text-center">
                <td class="px-4 py-2 border">3</td>
                <td class="px-4 py-2 border">Andi Pratama</td>
                <td class="px-4 py-2 border">XI DKV 1</td>
                <td class="px-4 py-2 border">Studio Kreatif</td>
                <td class="px-4 py-2 border text-red-600 font-semibold">Belum</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </main>
  </div>
</body>
</html>

