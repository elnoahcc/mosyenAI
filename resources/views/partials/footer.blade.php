<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mosyen AI</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white">

  <div class="bg-[#021a4d] rounded-t-3xl relative w-full text-white overflow-hidden">
    <!-- Bagian atas dengan potongan putih -->
    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-40 h-12 bg-white rounded-b-3xl"></div>
    
    <!-- Logo pojok kanan atas -->
    <div class="absolute top-6 right-10">
      <img src="/assets/logomotion-white.svg" alt="Logo Mosyen" class="w-80 h-auto">
    </div>

    <div class="px-12 pt-12 pb-6">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-sm">
        <!-- SneakPeak -->
        <div>
          <h3 class="font-semibold">SneakPeak</h3>
          <p class="mt-2 text-gray-300 text-xs leading-relaxed">
            Mosyen AI adalah AI 3D interaktif pertama di Indonesia.
          </p>
        </div>

        <!-- Get in Touch -->
        <div>
          <h3 class="font-semibold">Get in Touch</h3>
          <p class="mt-2 text-gray-300 text-xs leading-relaxed">
            Kami akan mengirimkan notifikasi langsung kepada anda
          </p>
          <div class="mt-3 flex max-w-xs">
            <input type="email" placeholder="email anda" class="px-3 py-2 rounded-l-lg w-full text-gray-900 text-xs focus:outline-none">
            <button class="bg-yellow-400 text-black px-4 rounded-r-lg text-xs font-semibold">Send</button>
          </div>
        </div>

        <!-- Sosial -->
        <div>
          <h3 class="font-semibold">Sosial</h3>
          <ul class="mt-2 space-y-1 text-xs">
            <li><a href="#" class="hover:underline">Instagram</a></li>
            <li><a href="#" class="hover:underline">Linkedin</a></li>
            <li><a href="#" class="hover:underline">X</a></li>
          </ul>
        </div>
      </div>

      <!-- Garis pemisah -->
      <div class="my-6 border-t border-gray-500"></div>

      <!-- Bagian bawah -->
      <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="text-center md:text-left">
         

          <h1 class="mt-6 text-6xl font-bold">Mosyen <span class="text-blue-400">AI.</span></h1>
        </div>

        <!-- Robot image (dibesarkan) -->
        <div class="w-[350px] md:w-[400px] mt-6 md:mt-0">
          <img src="/assets/robot-footer.svg" alt="Robot AI" class="w-full">
        </div>
      </div>
    </div>
  </div>

</body>
</html>
