<?php 
require "../components/header.php";
?>

<main class="bg-gray-100 min-h-screen flex flex-col items-center justify-center px-4">
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
    <h2 class="text-2xl font-semibold text-center text-highlight mb-6">Tambah Member</h2>

    <form action="#" method="POST" class="space-y-5">
      <!-- Nama -->
      <div>
        <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
        <input type="text" id="nama" name="nama"
        minlength="2" max-length="100"
          required
          pattern="[A-Za-z\s]{2,50}"
          title="Nama hanya boleh mengandung huruf dan spasi, panjang 2-100 karakter"
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-highlight focus:outline-none">
      </div>

      <!-- Nomor Telepon -->
      <div>
        <label for="nomorTelepon" class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label>
        <input type="tel" id="nomorTelepon" name="nomorTelepon"
          required
          pattern="^08[0-9]{8,11}$"
          placeholder="Contoh: 08xxxxxxxxxxx"
          title="Nomor telepon harus dimulai dengan 08 dan diikuti oleh 8-11 digit angka dengan total maksimal 13 digit angka."
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-highlight focus:outline-none">
      </div>

      <!-- Button -->
      <button type="submit" class="w-full bg-highlight text-white py-2 rounded-md hover:brightness-110 transition font-semibold">
        Tambah Member
      </button>

      </form>

  </div>
</main>

</body>
</html>
