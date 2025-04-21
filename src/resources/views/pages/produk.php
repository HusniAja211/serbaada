<?php 
require $_SERVER['DOCUMENT_ROOT'] . '/serbaada/src/resources/views/components/header.php';
require $_SERVER['DOCUMENT_ROOT'] . '/serbaada/src/resources/views/components/sidebar.php';
?>

<main class="p-4 sm:ml-64 bg-gray-200 min-h-screen flex flex-col">
   <!-- Menu Kategori -->
   <section class="mb-4">
      <h2 class="text-xl font-semibold mb-2">Menu Kategori</h2>
      <div class="overflow-x-auto whitespace-nowrap scrollbar-thin">
         <div class="flex gap-4">
            <?php for ($i = 0; $i < 10; $i++): ?>
               <div class="w-28 h-28 bg-white rounded shadow flex flex-col items-center justify-center text-center text-sm">
                  <div class="w-12 h-12 bg-gray-300 mb-1">Simbol</div>
                  <p>Nama Kategori</p>
               </div>
            <?php endfor; ?>
         </div>
      </div>
   </section>

   <!-- Kontainer Produk + Pesanan -->
   <div class="flex-1 flex gap-4 overflow-hidden">
      <!-- Produk -->
      <div class="flex-1 overflow-y-auto bg-gray-200 p-2">
         <h2 class="text-xl font-semibold mb-2">Pilih Pesanan Anda</h2>
         <div class="grid grid-cols-4 gap-4">
            <?php for ($i = 0; $i < 12; $i++): ?>
               <div class="bg-white rounded shadow p-2 flex flex-col items-center text-center">
                  <div class="w-full h-24 bg-gray-300 mb-2"></div>
                  <p class="font-semibold">Nama Produk</p>
                  <p class="text-sm text-gray-600">Harga</p>
               </div>
            <?php endfor; ?>
         </div>
      </div>

      <!-- Menu Pesanan -->
      <aside class="w-1/3 bg-white rounded shadow p-4 flex flex-col justify-between h-full">
         <div class="space-y-4">
            <h2 class="text-xl font-semibold">Menu Pesanan</h2>
            <div>
               <label for="kode" class="block font-medium">Kode Member</label>
               <input type="text" id="kode" class="w-full border border-gray-300 rounded px-2 py-1 mt-1">
            </div>
            <div>
               <label for="poin" class="block font-medium">Diskon Poin</label>
               <input type="text" id="poin" class="w-full border border-gray-300 rounded px-2 py-1 mt-1" placeholder="Jumlah Poin Saat Ini">
            </div>

            <!-- Daftar Pesanan -->
            <div class="space-y-2 overflow-y-auto max-h-52">
               <?php for ($i = 0; $i < 3; $i++): ?>
                  <div class="flex gap-2 items-start">
                     <div class="w-12 h-12 bg-gray-300 rounded"></div>
                     <div class="flex-1">
                        <p class="font-semibold text-sm">Nama Produk 1</p>
                        <p class="text-xs text-gray-600">Harga</p>
                        <p class="text-xs">Jumlah x RpHarga</p>
                     </div>
                  </div>
               <?php endfor; ?>
            </div>
         </div>

         <!-- Ringkasan -->
         <div class="space-y-4 pt-4 border-t">
            <div class="text-sm space-y-1">
               <div class="flex justify-between"><span>SubTotal</span><span>Rpxxx</span></div>
               <div class="flex justify-between"><span>Pajak</span><span>Rpxxx</span></div>
               <div class="flex justify-between"><span>Diskon</span><span>Rpxxx</span></div>
               <div class="flex justify-between font-bold text-lg"><span>Total</span><span>Rpxxx</span></div>
            </div>
            <button class="w-full bg-sky-500 text-white py-2 rounded hover:bg-sky-600 font-semibold">Bayar Sekarang</button>
         </div>
      </aside>
   </div>
</main>



<?php 
require $_SERVER['DOCUMENT_ROOT'] . '/serbaada/src/resources/views/components/footer.php';
?>
