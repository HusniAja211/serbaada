<?php 
require $_SERVER['DOCUMENT_ROOT'] . '/serbaada/src/resources/views/components/header.php';
require $_SERVER['DOCUMENT_ROOT'] . '/serbaada/src/resources/views/components/sidebar.php';
?>

<main class="p-4 sm:ml-64 bg-gray-200 min-h-screen flex flex-col relative">
   <!-- Judul / Header halaman -->
    <div class="flex flex-row justify-center">
        <h1 class="text-2xl font-semibold mb-4">Data Transaksi</h1>
    </div>
   <!-- Tabel kategori (dengan center alignment) -->
   <div class="overflow-x-auto rounded shadow mb-6 flex justify-center">
      <table class="min-w-full w-3/5 table-auto border-collapse border border-black text-sm">
         <thead class="bg-sky-500 text-white">
            <tr>
               <th class="border border-black px-2 py-1 text-center">ID Transaksi</th>
               <th class="border border-black px-2 py-1 text-center">Tanggal Pembelian</th>
               <th class="border border-black px-2 py-1 text-center">Total Harga</th>
               <th class="border border-black px-2 py-1 text-center">Id Kasir</th>
               <th class="border border-black px-2 py-1 text-center">ID Produk</th>
               <th class="border border-black px-2 py-1 text-center">ID Member</th>
               <th class="border border-black px-2 py-1 text-center">Status</th>
               <th class="border border-black px-2 py-1 text-center">Opsi</th>
            </tr>
         </thead>
         <tbody class="bg-white">
            <!-- Contoh data dummy -->
            <tr>
               <td class="border border-black px-2 py-1 text-center">1</td>
               <td class="border border-black px-2 py-1 text-center">70 April 2030</td>
               <td class="border border-black px-2 py-1 text-center">Rp20,000.00</td>
               <td class="border border-black px-2 py-1 text-center">1</td>
               <td class="border border-black px-2 py-1 text-center">1</td>
               <td class="border border-black px-2 py-1 text-center">1</td>
               <td class="border border-black px-2 py-1 text-center">Lunas Tanpa Masalah</td>
               <td class="border border-black px-2 py-1 text-center">
                  <button class="bg-green-400 text-white px-2 py-1 text-center rounded mr-2">Edit</button>
                  <button class="bg-red-500 text-white px-2 py-1 text-center rounded">Hapus</button>
               </td>
            </tr>
         </tbody>
      </table>
   </div>

   <!-- Pagination -->
   <div class="absolute bottom-16 left-4 flex justify-center items-center space-x-4 mb-6 w-full">
      <?php require "../components/pagination.php"; ?>
   </div>

   <!-- Tombol tambah data -->
   <div class="absolute bottom-4 left-4">
      <a href="tambah_kategori.php" class="inline-block bg-sky-500 text-white px-6 py-2 rounded hover:bg-sky-600">Tambah Data</a>
   </div>
</main>

<?php 
require $_SERVER['DOCUMENT_ROOT'] . '/serbaada/src/resources/views/components/footer.php';
?>
