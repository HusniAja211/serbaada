<?php 
require "../components/header.php";
?>

<main class="bg-gray-100 min-h-screen flex flex-col items-center justify-center px-4">
  <!-- Tombol Kembali -->
  <!-- Card Form -->
  <div class="bg-white shadow-xl rounded-2xl w-full max-w-md p-8 border border-gray-200">
    <h2 class="text-2xl font-semibold text-center text-highlight mb-6">Masuk</h2>

    <form action="#" method="POST" class="space-y-5">

        <!-- Email -->
        <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input type="email" id="email" name="email"
            required
            placeholder="contoh@domain.com"
            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
            title="Masukkan alamat email yang valid"
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-highlight focus:outline-none">
        </div>

        <!-- Password -->
        <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <input type="password" id="password" name="password" 
            required
            minlength="6" maxlength="50"
            placeholder="Tulis password Anda"
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-highlight focus:outline-none">
        </div>

        <!-- Button -->
        <button type="submit" class="w-full bg-highlight text-white py-2 rounded-md hover:brightness-110 transition font-semibold">
         Masuk Sekarang!
        </button>

    </form>

      </form>
  </div>
</main>

</body>
</html>
