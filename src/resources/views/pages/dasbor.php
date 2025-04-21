<?php 
require $_SERVER['DOCUMENT_ROOT'] . '/serbaada/src/resources/views/components/header.php';
require $_SERVER['DOCUMENT_ROOT'] . '/serbaada/src/resources/views/components/sidebar.php';
?>

<main class="p-4 sm:ml-64 bg-gray-200 min-h-screen">
   <div class="flex flex-row justify-center">
      <h1 class="font-bold text-2xl">Dasbor</h1> <!-- Menambahkan text-2xl untuk memperbesar teks -->
   </div>
   <br>
   <!-- Statistik Utama -->
   <div class="grid grid-cols-3 gap-4 mb-4">
      <div class="p-4 bg-white rounded shadow flex flex-col items-center">
         <i class="fa-solid fa-store text-2xl mb-2"></i>
         <p class="text-lg font-semibold">XXXX</p>
         <p class="text-sm text-gray-600">Produk Terjual</p>
      </div>
      <div class="p-4 bg-white rounded shadow flex flex-col items-center">
         <i class="fa-solid fa-dollar-sign text-2xl mb-2"></i>
         <p class="text-lg font-semibold">XXXX</p>
         <p class="text-sm text-gray-600">Keuntungan Bulan XXX</p>
      </div>
      <div class="p-4 bg-white rounded shadow flex flex-col items-center">
         <i class="fa-solid fa-dollar-sign text-2xl mb-2"></i>
         <p class="text-lg font-semibold">XXXX</p>
         <p class="text-sm text-gray-600">Total Keuntungan</p>
      </div>
   </div>

   <!-- Statistik Tambahan -->
   <div class="grid grid-cols-3 gap-4 mb-4">
      <div class="p-4 bg-white rounded shadow flex flex-col items-center">
         <i class="fa-solid fa-user text-2xl mb-2"></i>
         <p class="text-lg font-semibold">XXXX</p>
         <p class="text-sm text-gray-600">Jumlah Admin</p>
      </div>
      <div class="p-4 bg-white rounded shadow flex flex-col items-center">
         <i class="fa-solid fa-cash-register text-2xl mb-2"></i>
         <p class="text-lg font-semibold">XXXX</p>
         <p class="text-sm text-gray-600">Jumlah Kasir</p>
      </div>
      <div class="p-4 bg-white rounded shadow flex flex-col items-center">
         <i class="fa-solid fa-id-card text-2xl mb-2"></i>
         <p class="text-lg font-semibold">XXXX</p>
         <p class="text-sm text-gray-600">Jumlah Member</p>
      </div>
   </div>

   <!-- Filter Bulan & Minggu -->
   <div class="p-4 bg-white rounded shadow mb-4 flex flex-wrap items-center gap-4">
      <label for="bulan" class="font-medium">Bulan:</label>
      <input id="bulan" type="text" class="border border-gray-300 rounded px-2 py-1 w-40">
      <label for="minggu" class="font-medium">Minggu:</label>
      <input id="minggu" type="text" class="border border-gray-300 rounded px-2 py-1 w-40">
   </div>

   <!-- Grafik Lingkaran -->
   <div class="bg-white rounded shadow p-4 mb-4">
      <div class="flex items-center justify-around">
         <div class="w-32 h-32 rounded-full border-8 border-lime-400"></div>
         <div class="space-y-2">
            <div class="flex items-center gap-2"><span class="w-4 h-4 bg-red-600 rounded-full"></span> <span>XXX</span></div>
            <div class="flex items-center gap-2"><span class="w-4 h-4 bg-lime-500 rounded-full"></span> <span>XXX</span></div>
            <div class="flex items-center gap-2"><span class="w-4 h-4 bg-blue-600 rounded-full"></span> <span>XXX</span></div>
         </div>
      </div>
   </div>

   <!-- Tabel Ringkasan -->
   <div class="bg-white rounded shadow p-4">
      <table class="w-full table-auto border-collapse">
         <thead>
            <tr class="bg-blue-400 text-white">
               <th class="p-2 border">Header 1</th>
               <th class="p-2 border">Header 2</th>
               <th class="p-2 border">Header 3</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td class="border p-2">Data 1</td>
               <td class="border p-2">Data 2</td>
               <td class="border p-2">Data 3</td>
            </tr>
            <tr>
               <td class="border p-2">Data 4</td>
               <td class="border p-2">Data 5</td>
               <td class="border p-2">Data 6</td>
            </tr>
         </tbody>
      </table>
   </div>
</main>

<?php 
require $_SERVER['DOCUMENT_ROOT'] . '/serbaada/src/resources/views/components/footer.php';
?>
