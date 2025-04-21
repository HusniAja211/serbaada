<?php 
require $_SERVER['DOCUMENT_ROOT'] . '/serbaada/src/resources/views/components/header.php';
?>

<main class="bg-gray-100 min-h-screen flex flex-col items-center justify-center px-4">
  <!-- Tombol Kembali -->
  <div class="absolute top-6 left-6">
    <a href="/serbaada/kategori" class="flex items-center text-gray-700 hover:text-highlight transition">
      <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
      </svg>
      <span class="font-medium">Kembali</span>
    </a>
  </div>

  <!-- Card Form -->
  <div class="bg-white shadow-xl rounded-2xl w-full max-w-md p-8 border border-gray-200">
    <h2 class="text-2xl font-semibold text-center text-highlight mb-6">Tambah Kategori</h2>

    <form action="/serbaada/kategori/store" method="POST" class="space-y-5">
      <!-- Nama Kategori -->
      <div>
        <label for="namaKategori" class="block text-sm font-medium text-gray-700 mb-1">Nama Kategori</label>
        <input type="text" id="namaKategori" name="namaKategori"
          required
          pattern="[A-Za-z\s]{2,50}"
          title="Nama hanya boleh mengandung huruf dan spasi, panjang 2-50 karakter"
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-highlight focus:outline-none">
      </div>

      <!-- Deskripsi -->
      <div>
        <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
        <textarea id="deskripsi" name="deskripsi" required minlength="5" maxlength="500"
          class="w-full px-4 py-2 border border-gray-300 rounded-md resize-none focus:ring-2 focus:ring-highlight focus:outline-none"
          placeholder="Tulis deskripsi kategori di sini..."></textarea>
      </div>

      <!-- Button -->
      <button type="submit" class="w-full bg-highlight text-white py-2 rounded-md hover:brightness-110 transition font-semibold">
        Tambah Kategori
      </button>
      
      </form>
  </div>
</main>

</body>
</html>
