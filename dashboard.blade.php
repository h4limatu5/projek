<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pengelola PKL</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);
        }
        .dashboard-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        .stats-number {
            font-size: 2.5rem;
            font-weight: bold;
            background: linear-gradient(45deg, #3b82f6, #1e40af);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="bg-gray-50">
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo utama Sistem Pengelola PKL" class="h-16 w-16 md:h-20 md:w-20 mr-6 rounded-lg border-2 border-blue-100 bg-white object-contain" style="max-width:100px; max-height:100px;">
                    <span class="text-xl font-bold text-gray-800">SIPKL</span>
                </div>
                
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-blue-600 transition-colors">Dashboard</a>
                    <a href="#mahasiswa" class="text-gray-600 hover:text-blue-600 transition-colors">Siswa</a>
                    <a href="#perusahaan" class="text-gray-600 hover:text-blue-600 transition-colors">Perusahaan</a>
                    <a href="#laporan" class="text-gray-600 hover:text-blue-600 transition-colors">Laporan</a>
                    <a href="#pengaturan" class="text-gray-600 hover:text-blue-600 transition-colors">Pengaturan</a>
                </div>
                
                <div class="flex items-center space-x-4">
                    <div class="hidden md:block">
                        <div class="relative">
                            <input type="text" placeholder="Cari..." class="px-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <i class="fas fa-search absolute right-3 top-2.5 text-gray-400"></i>
                        </div>
                    </div>
                    <div class="relative">
                        <button class="p-2 bg-gray-100 rounded-full hover:bg-gray-200 transition-colors">
                            <i class="fas fa-bell text-gray-600"></i>
                            <span class="absolute top-0 right-0 bg-red-500 text-white rounded-full text-xs w-4 h-4 flex items-center justify-center">3</span>
                        </button>
                    </div>
                    <div class="relative">
                        <button class="flex items-center space-x-2">
                            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/ce9090e2-aa3b-4a3c-b8d1-7ecbe7aee2ab.png" alt="Foto profil administrator sistem pengelola PKL" class="w-8 h-8 rounded-full">
                            <span class="hidden md:block text-gray-700">Admin</span>
                            <i class="fas fa-chevron-down text-gray-400"></i>
                        </button>
                    </div>
                </div>
                
                <div class="md:hidden">
                    <button class="p-2">
                        <i class="fas fa-bars text-gray-600 text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <section class="gradient-bg text-white py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Sistem Pengelola PKL Terpadu</h1>
                    <p class="text-xl mb-6">Kelola seluruh aktivitas Praktek Kerja Lapangan siswa dengan mudah dan efisien dalam satu platform terintegrasi.</p>
                    <div class="flex flex-wrap gap-4">
                        <button class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                            Mulai Sekarang
                        </button>
                        <button class="border-2 border-white text-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors">
                            Pelajari Lebih Lanjut
                        </button>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('images/Gedung.jpg') }}" alt="Ilustrasi gedung perkantoran atau sekolah">
                </div>
            </div>
        </div>
    </section>
</body>
</html>