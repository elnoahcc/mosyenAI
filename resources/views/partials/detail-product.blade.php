<!-- PRODUCT SECTION -->
<section id="product" class="py-16 bg-white">
  <div class="container mx-auto px-4 text-center">
    <!-- Title -->
    <h1 class="text-3xl md:text-4xl font-bold mb-2">Mosyen Creator</h1>
    <p class="text-lg md:text-xl font-normal text-gray-600 mb-12">
      AI 3D Integrated Pertama di Indonesia
    </p>

    <!-- Image Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
      <!-- Kolom Kiri - 1 gambar -->
      <div class="rounded-lg overflow-hidden shadow-lg h-full transition-all duration-1000 opacity-0 -translate-x-10" data-animate="left">
        <img src="/assets/product/product1.jpg" alt="Robot Hand 1" class="w-full h-full object-cover">
      </div>

      <!-- Kolom Kanan - 2 gambar vertikal -->
      <div class="grid grid-rows-2 gap-6">
        <div class="rounded-lg overflow-hidden shadow-lg transition-all duration-1000 opacity-0 translate-x-10" data-animate="right" data-delay="200">
          <img src="/assets/product/product2.jpg" alt="Robot Hand 2" class="w-full h-full object-cover">
        </div>
        <div class="rounded-lg overflow-hidden shadow-lg transition-all duration-1000 opacity-0 translate-x-10" data-animate="right" data-delay="400">
          <img src="/assets/product/product3.jpg" alt="Robot Hand 3" class="w-full h-full object-cover">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SCRIPT INTERSECTION OBSERVER -->
<script>
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const delay = el.dataset.delay || 0;
        setTimeout(() => {
          el.classList.add("opacity-100", "translate-x-0");
          el.classList.remove("opacity-0", "-translate-x-10", "translate-x-10");
        }, delay);
        observer.unobserve(el); // biar cuma sekali
      }
    });
  }, { threshold: 0.2 });

  document.querySelectorAll("[data-animate]").forEach(el => observer.observe(el));
</script>
