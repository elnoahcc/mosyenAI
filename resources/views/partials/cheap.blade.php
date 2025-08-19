<section class="py-16 px-4">
    <div class="max-w-4xl mx-auto text-center">
        <div class="mb-6">
            <div class="text-6xl md:text-7xl font-bold text-blue-900 mb-2">
                Hanya 
                <span class="text-blue-600" id="counter">0</span>/bulan
            </div>
        </div>
        
        <p class="text-lg text-gray-600 font-medium">
            Kamu bisa menggunakan AI canggih ini dengan banyak fitur unggulan.
        </p>
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
                
                // Format number with Indonesian locale
                counter.textContent = Math.floor(currentValue).toLocaleString('id-ID');
            }, 50);
        });
    </script>
</section>