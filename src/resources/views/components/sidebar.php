<button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-black rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 20 20">
      <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>

<aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto bg-white">
      <a href="https://flowbite.com/" class="flex items-center ps-2.5 mb-5">
         <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 me-3 sm:h-7" alt="Flowbite Logo" />
         <span class="self-center text-xl font-semibold whitespace-nowrap text-black">Flowbite</span>
      </a>
      <ul class="space-y-2 font-medium text-black">
         <li>
            <a href="#" class="flex items-center p-2 text-black rounded-lg hover:bg-gray-100 group">
               <svg class="w-5 h-5 text-black transition duration-75 group-hover:text-black" fill="currentColor" viewBox="0 0 22 21">
                  <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                  <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
               </svg>
               <span class="ms-3">Produk</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-black rounded-lg hover:bg-gray-100 group">
               <svg class="shrink-0 w-5 h-5 text-black transition duration-75 group-hover:text-black" fill="currentColor" viewBox="0 0 20 20">
                  <path d="..."/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Dasbor</span>
               <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-black bg-gray-200 rounded-full">3</span>
            </a>
         </li>
         <li>
            <button type="button" class="flex items-center w-full p-2 text-black transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
               <svg class="shrink-0 w-5 h-5 text-black transition duration-75 group-hover:text-black" fill="currentColor" viewBox="0 0 18 21">
                  <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
               </svg>
               <span class="flex-1 ms-3 text-left whitespace-nowrap">Pengaturan</span>
               <svg class="w-3 h-3" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
               </svg>
            </button>
            <ul id="dropdown-example" class="hidden py-2 space-y-2">
               <li>
                  <a href="#" class="flex items-center w-full p-2 text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Products</a>
               </li>
               <li>
                  <a href="#" class="flex items-center w-full p-2 text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Billing</a>
               </li>
               <li>
                  <a href="#" class="flex items-center w-full p-2 text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Invoice</a>
               </li>
            </ul>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-black rounded-lg hover:bg-gray-100 group">
               <svg class="shrink-0 w-5 h-5 text-black transition duration-75 group-hover:text-black" fill="currentColor" viewBox="0 0 20 20">
                  <path d="..."/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Transaksi</span>
            </a>
         </li>
      </ul>
         <button href="#" class="flex items-center w-full p-2 text-black rounded-lg hover:bg-gray-100 group"  onclick="konfirmasiLogout()">
            <svg class="shrink-0 w-5 h-5 text-black transition duration-75 group-hover:text-black" fill="none" viewBox="0 0 18 16">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
            </svg>
            <span class="ms-3 whitespace-nowrap">Keluar</span>
         </button>
   </div>
</aside>
