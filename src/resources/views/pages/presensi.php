<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Presensi</title>
  <link rel="stylesheet" href="/serbaada/public/resources/css/output.css" />
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center px-4">

  <!-- Tombol Kembali -->
  <div class="absolute top-6 left-6">
    <a href="#" class="flex items-center text-gray-700 hover:text-highlight transition">
      <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
      </svg>
      <span class="font-medium">Kembali</span>
    </a>
  </div>

  <!-- Card Form -->
  <div class="bg-white shadow-xl rounded-2xl w-full max-w-md p-8 border border-gray-200">
    <h2 class="text-2xl font-semibold text-center text-highlight mb-6">Presensi Sekarang</h2>

    <form action="#" method="POST" class="space-y-5">

      <!-- Nama -->
      <div>
        <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
        <input type="text" id="nama" name="nama" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-highlight focus:outline-none">
      </div>

      <!-- Hari -->
      <div>
        <label for="hari" class="block text-sm font-medium text-gray-700 mb-1">Hari</label>
        <input type="date" id="hari" name="hari" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-highlight focus:outline-none">
      </div>

      <!-- Keterangan -->
      <div>
        <label for="keterangan" class="block text-sm font-medium text-gray-700 mb-1">Keterangan</label>
        <input type="text" id="keterangan" name="keterangan" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-highlight focus:outline-none">
      </div>

      <!-- Button -->
      <button type="submit" class="w-full bg-highlight text-white py-2 rounded-md hover:brightness-110 transition font-semibold">
        Kirim Data Presensi
      </button>

    </form>
  </div>

</body>
</html>
