{{-- resources/views/components/footer-mosyen.blade.php --}}
<section class="relative bg-[#00194A] text-white mt-10 overflow-hidden">
    {{-- Notch melengkung di tengah atas seperti HP --}}
    <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 w-40 h-12 bg-[#00194A] rounded-b-3xl shadow-lg"></div>

    <div class="max-w-7xl mx-auto px-6 md:px-12 pt-16 pb-8 relative z-10">
          <div class="flex justify-end pr-6 mb-12">
      <img src="/assets/logomotion-white.svg" alt="Mosyen Logo" class="h-50 w-auto md:h-24 lg:h-60">
    </div>


        {{-- Grid 3 kolom untuk konten utama --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12 mb-16">
            {{-- SneakPeak --}}
            <div>
                <h3 class="font-semibold text-lg mb-4 text-white">SneakPeak</h3>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Mosyen AI adalah AI<br>
                    3D Integrated<br>
                    pertama di<br>
                    Indonesia
                </p>
            </div>

            {{-- Get in Touch --}}
            <div>
                <h3 class="font-semibold text-lg mb-4 text-white">Get in Touch</h3>
                <p class="text-gray-300 text-sm leading-relaxed mb-6">
                    Kami akan mengirimkan notifikasi<br>
                    langsung kepada anda
                </p>
                <div class="flex">
                    <input type="email" 
                           placeholder="Email Address"
                           class="flex-1 rounded-l-lg px-4 py-3 text-black text-sm focus:outline-none focus:ring-2 focus:ring-yellow-400 placeholder-gray-500">
                    <button class="bg-yellow-400 hover:bg-yellow-500 text-black px-6 py-3 rounded-r-lg font-semibold text-sm transition-colors">
                        Submit
                    </button>
                </div>
            </div>

            {{-- Social --}}
            <div>
                <h3 class="font-semibold text-lg mb-4 text-white">Social</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-300 hover:text-white text-sm font-medium transition-colors">Instagram</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white text-sm font-medium transition-colors">LinkedIn</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white text-sm font-medium transition-colors">X</a></li>
                </ul>
            </div>
        </div>

        {{-- Garis pemisah --}}
        <div class="border-t border-gray-600 mb-8"></div>

        {{-- Bagian bawah: Stats, Brand Name, dan Robot --}}
        <div class="flex flex-col lg:flex-row justify-between items-center lg:items-end">
            {{-- Kiri: Stats dan Brand --}}
            <div class="text-center lg:text-left mb-8 lg:mb-0">
                {{-- Statistik --}}
                <div class="flex justify-center lg:justify-start space-x-8 md:space-x-12 mb-6">
                    <div class="text-2xl md:text-4xl font-bold">100+</div>
                    <div class="text-2xl md:text-4xl font-bold">90+</div>
                    <div class="text-2xl md:text-4xl font-bold">80+</div>
                </div>
                
                {{-- Brand Name --}}
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold leading-tight">
                    Mosyen AI<span class="text-cyan-400">.</span>
                </h1>
            </div>

            {{-- Kanan: Robot --}}
            <div class="flex-shrink-0">
                <img src="{{ asset('/assets/robot-footer.svg') }}" 
                     alt="Robot Mosyen AI" 
                     class="w-32 h-32 md:w-48 md:h-48 lg:w-56 lg:h-56 object-contain">
            </div>
        </div>
    </div>
</section>