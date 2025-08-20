<section class="py-20 px-4">
    <div class="max-w-6xl mx-auto text-center">
        <!-- Header -->
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
            Solusi Teknologi Terdepan
        </h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed mb-12">
            Platform lengkap dengan fitur-fitur canggih yang dirancang khusus untuk meningkatkan produktivitas dan efisiensi bisnis Anda.
        </p>
        
        <!-- Main pricing card -->
        <div class="max-w-4xl mx-auto">
            <div class="rounded-2xl shadow-lg border overflow-hidden">
                <div class="px-8 md:px-12 py-12 text-center">
                    <div class="mb-8">
                        <div class="text-lg text-gray-600 font-medium mb-2">
                            Mulai dari
                        </div>
                        <div class="text-6xl md:text-7xl font-bold text-gray-900 mb-2">
                            Rp <span class="text-blue-600" id="counter">0</span>
                        </div>
                        <div class="text-xl text-gray-600 font-medium">
                            per bulan
                        </div>
                    </div>
                    
                    <p class="text-lg text-gray-700 mb-8 max-w-2xl mx-auto">
                        Akses penuh ke semua fitur premium dengan dukungan teknis 24/7 dan pembaruan berkala.
                    </p>
                    
                    <!-- Features (centered for all screens) -->
                    <div class="grid md:grid-cols-3 gap-6 mb-8 justify-items-center">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 font-medium">Akses Unlimited</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 font-medium">Dukungan Premium</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 font-medium">Update Berkala</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <!-- Trust indicators -->
        <div class="mt-12">
            <p class="text-gray-500 text-sm mb-6">Dipercaya oleh lebih dari 10,000+ perusahaan</p>
            <div class="flex flex-wrap justify-center items-center gap-8 opacity-60">
                <!-- Logo perusahaan bisa ditambahkan di sini -->
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const counter = document.getElementById('counter');
            const targetValue = 120000;
            let currentValue = 0;
            const duration = 2000; // 2 seconds
            const increment = targetValue / (duration / 50); // Update every 50ms
            
            const timer = setInterval(() => {
                currentValue += increment;
                if (currentValue >= targetValue) {
                    currentValue = targetValue;
                    clearInterval(timer);
                }
                
                counter.textContent = Math.floor(currentValue).toLocaleString('id-ID');
            }, 50);
        });
    </script>
</section>
