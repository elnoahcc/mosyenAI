<section class="min-h-screen flex items-center bg-white">
  <div class="w-full grid grid-cols-1 md:grid-cols-2 items-center max-w-[2000px] mx-auto px-10 lg:px-20 gap-12 lg:gap-20">
    
    <!-- Kiri: teks + kotak -->
    <div class="flex flex-col gap-8 pl-4 lg:pl-12 mt-12 lg:mt-20">
      <h1 class="text-7xl lg:text-8xl xl:text-9xl font-extrabold text-gray-900 leading-tight">
        Mosyen
      </h1>

      <div class="flex items-center gap-6 lg:gap-8">
        <h2 class="text-6xl lg:text-7xl xl:text-8xl font-bold leading-none">AI</h2>

        <div class="text-2xl lg:text-3xl xl:text-4xl leading-snug">
          <span class="text-sky-600 font-semibold">Motion</span> Capture<br />
          Terintegrasi AI
        </div>
      </div>

      <!-- Kotak warna -->
      <div class="relative mt-2 lg:mt-4 w-20 h-20 lg:w-24 lg:h-24">
        <div class="absolute top-0 left-0 w-12 h-12 lg:w-16 lg:h-16 rounded-sm" style="background-color: #00FF2F;"></div>
        <div class="absolute top-4 left-4 lg:top-6 lg:left-6 w-12 h-12 lg:w-16 lg:h-16 rounded-sm" style="background-color: #021A48;"></div>
        <div class="absolute top-8 left-0 lg:top-12 w-12 h-12 lg:w-16 lg:h-16 rounded-sm" style="background-color: #0097C2;"></div>
      </div>
    </div> 

    <!-- Kanan: gambar BESAR (hidden on mobile) -->
    <div class="hidden md:flex justify-center items-center h-full w-full">
      <img src="/assets/hero-full.svg" alt="Mosyen AI" 
           class="w-[90%] md:w-[100%] lg:w-[130%] h-auto lg:h-[85vh] object-contain rounded-3xl drop-shadow-xl mt-10 lg:mt-16" />
    </div>

  </div>
</section>

<script>
// Script untuk handling responsiveness atau interaksi tambahan jika diperlukan
document.addEventListener('DOMContentLoaded', function() {
  // Bisa ditambahkan animasi atau interaksi lainnya
  console.log('Mosyen AI Hero Section loaded');
});
</script>