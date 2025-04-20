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
    <h2 class="text-2xl font-semibold text-center text-highlight mb-6">Tambah Produk</h2>

    <form action="#" method="POST" enctype="multipart/form-data" class="space-y-5">

      <!-- Nama Produk -->
      <div>
        <label for="nama_produk" class="block text-sm font-medium text-gray-700 mb-1">Nama Produk</label>
        <input type="text" id="nama_produk" name="nama_produk" required minlength="2" maxlength="100"
          pattern="[A-Za-z0-9\s\.\-\,]+" title="Hanya huruf, angka, titik, koma, dan strip"
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-highlight focus:outline-none">
      </div>

      <!-- Tanggal Kadaluwarsa -->
      <div>
        <label for="expired" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Kadaluwarsa</label>
        <input type="date" id="expired" name="expired" required
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-highlight focus:outline-none">
      </div>

      <!-- Stok -->
      <div>
        <label for="stok" class="block text-sm font-medium text-gray-700 mb-1">Stok</label>
        <input type="number" id="stok" name="stok" required min="0" max="100000"
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-highlight focus:outline-none">
      </div>

      <!-- Modal -->
      <div>
        <label for="modal" class="block text-sm font-medium text-gray-700 mb-1">Modal</label>
        <input type="number" id="modal" name="modal" required min="0" step="0.01"
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-highlight focus:outline-none">
      </div>

      <!-- Harga Jual -->
      <div>
        <label for="harga_jual" class="block text-sm font-medium text-gray-700 mb-1">Harga Jual</label>
        <input type="number" id="harga_jual" name="harga_jual" required min="0" step="0.01"
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-highlight focus:outline-none">
      </div>

      <!-- Kategori -->
      <div>
        <label for="kategori" class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
        <input type="text" id="kategori" name="kategori" required pattern="[A-Za-z\s]{2,50}"
          title="Hanya huruf dan spasi, panjang 2-50 karakter"
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-highlight focus:outline-none">
      </div>

      <!-- Gambar -->
      <div>
        <label for="gambar" class="block text-sm font-medium text-gray-700 mb-1">Gambar</label>
        <input type="file" id="gambar" name="gambar" accept=".jpg,.jpeg,.png,.webp" required
          class="w-full px-4 py-2 border border-gray-300 rounded-md file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:bg-highlight file:text-white hover:file:brightness-110">
      </div>

      <!-- Deskripsi -->
      <div>
        <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
        <textarea id="deskripsi" name="deskripsi" required minlength="5" maxlength="500"
          class="w-full px-4 py-2 border border-gray-300 rounded-md resize-none focus:ring-2 focus:ring-highlight focus:outline-none"
          placeholder="Tulis deskripsi produk di sini..."></textarea>
      </div>

      <!-- Tombol Submit -->
      <button type="submit"
        class="w-full bg-highlight text-white py-2 rounded-md hover:brightness-110 transition font-semibold">
        Register
      </button>
    </form>
  </div>
</main>
</body>
</html>
