<style>
  .motion-fade-in {
    transition: all 0.8s ease;
  }
  .motion-fade-in.show {
    opacity: 1 !important;
    transform: translateY(0) !important;
  }
</style>

<section class="py-16 px-4 mb-28">

  <div class="max-w-6xl mx-auto">
    <h1 class="text-3xl font-semibold text-blue-900 text-center mb-12">Motion AI Impact</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Card 1 -->
      <div class="motion-fade-in bg-white rounded-lg p-6 shadow-md border border-gray-200 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 opacity-0 translate-y-6">
        <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M18 4l2 4h-3l-2-4h-2l2 4h-3l-2-4H8l2 4H7L5 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2h-1z"/>
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-blue-900 mb-3">Pengembangan Industri Hiburan</h3>
        <p class="text-gray-600 leading-relaxed">
          Menciptakan peluang bagi <span class="text-blue-600 font-medium">produsen film, animator dan development game</span>. Teknologi motion capture membuka berbagai kemungkinan kreatif baru dalam industri entertainment, memungkinkan penciptaan konten yang lebih realistis dan engaging.
        </p>
      </div>

      <!-- Card 2 -->
      <div class="motion-fade-in bg-white rounded-lg p-6 shadow-md border border-gray-200 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 opacity-0 translate-y-6">
        <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-blue-900 mb-3">Peningkatan Kualitas Produk</h3>
        <p class="text-gray-600 leading-relaxed">
          Meningkatkan <span class="text-blue-600 font-medium">kualitas produk-produk hiburan</span> yang dihasilkan di Indonesia dan meningkatkan daya saing di pasar global. Dengan teknologi AI yang canggih, Indonesia dapat bersaing dengan standar internasional dalam industri kreatif.
        </p>
      </div>

      <!-- Card 3 -->
      <div class="motion-fade-in bg-white rounded-lg p-6 shadow-md border border-gray-200 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 opacity-0 translate-y-6">
        <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM8.5 8C9.33 8 10 8.67 10 9.5S9.33 11 8.5 11 7 10.33 7 9.5 7.67 8 8.5 8zm7 0c.83 0 1.5.67 1.5 1.5S16.33 11 15.5 11 14 10.33 14 9.5 14.67 8 15.5 8zM12 17.5c-2.33 0-4.31-1.46-5.11-3.5h10.22c-.8 2.04-2.78 3.5-5.11 3.5z"/>
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-blue-900 mb-3">Industri Manufaktur</h3>
        <p class="text-gray-600 leading-relaxed">
          Desain produk dengan <span class="text-blue-600 font-medium">motion capture</span> dapat digunakan untuk memahami cara kerja tubuh manusia dalam berbagai situasi untuk membantu dalam perancangan peralatan, alat, atau kendaraan yang lebih <span class="text-blue-600 font-medium">ergonomis dan aman</span>.
        </p>
      </div>

      <!-- Card 4 -->
      <div class="motion-fade-in bg-white rounded-lg p-6 shadow-md border border-gray-200 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 opacity-0 translate-y-6">
        <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/>
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-blue-900 mb-3">Pendidikan</h3>
        <p class="text-gray-600 leading-relaxed">
          Dengan motion capture dapat digunakan untuk <span class="text-blue-600 font-medium">pembelajaran multimedia</span> agar lebih mudah dan efisien. Teknologi ini memungkinkan pembuatan materi edukasi yang interaktif dan immersive untuk meningkatkan kualitas pembelajaran di Indonesia.
        </p>
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".motion-fade-in");

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("show");
        }
      });
    }, { threshold: 0.2 });

    cards.forEach(card => observer.observe(card));
  });
</script>

