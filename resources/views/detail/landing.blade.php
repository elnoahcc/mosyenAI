<section class="pt-36 pb-20 bg-white">

    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Product Images -->
            <div class="lg:w-1/2">
                <div class="mb-4">
                    <img id="mainImage" 
                         src="/assets/product/product1.jpg" 
                         alt="Mosyen AI" 
                         class="w-full h-96 object-cover rounded-lg shadow-lg">
                </div>
                <div class="flex gap-2">
                    <img onclick="changeImage(this.src)" 
                         src="/assets/product/product1.jpg" 
                         alt="Thumbnail 1" 
                         class="w-16 h-16 object-cover rounded cursor-pointer border-2 border-blue-500">
                    <img onclick="changeImage(this.src)" 
                         src="/assets/product/product2.jpg" 
                         alt="Thumbnail 2" 
                         class="w-16 h-16 object-cover rounded cursor-pointer border border-gray-300">
                    <img onclick="changeImage(this.src)" 
                         src="/assets/product/product3.jpg" 
                         alt="Thumbnail 3" 
                         class="w-16 h-16 object-cover rounded cursor-pointer border border-gray-300">
                </div>
                
                <!-- Rating and Location -->
                <div class="mt-4 flex items-center gap-4">
                    <div class="flex items-center gap-2">
                        <span class="text-sm font-medium">⭐ Stylish</span>
                        <span class="text-sm text-gray-600">(4.8) 17.5k reviews</span>
                    </div>
                </div>
                <div class="mt-2 flex items-center gap-2 text-sm text-gray-600">
                    <span>📍 Surakarta, Indonesia</span>
                    <button class="text-blue-500 hover:underline">View More</button>
                </div>
            </div>

            <!-- Product Details -->
            <div class="lg:w-1/2">
                <div class="mb-2">
                    <span class="inline-block bg-blue-100 text-blue-800 text-xs font-medium px-2 py-1 rounded">NEW ARRIVAL</span>
                </div>
                
                <h1 class="text-3xl font-bold text-gray-900 mb-4">Mosyen AI</h1>
                
                <!-- Rating -->
                <div class="flex items-center gap-2 mb-4">
                    <div class="flex text-yellow-400">
                        ⭐⭐⭐⭐⭐
                    </div>
                    <span class="text-sm font-medium">(4.5)</span>
                    <span class="text-sm text-blue-600 hover:underline cursor-pointer">623 reviews</span>
                    <span class="text-sm text-gray-600">1,919 Sold</span>
                </div>

                <!-- Price -->
                <div class="text-3xl font-bold text-purple-600 mb-6">Rp 899.000</div>

                

                <!-- System Requirements -->
                <div class="mb-6">
                    <h3 class="text-sm font-medium text-gray-900 mb-3">System Requirements</h3>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="grid grid-cols-2 gap-4 text-sm">
                            <div>
                                <div class="font-medium">OS:</div>
                                <div class="text-gray-600">Windows 10/11, macOS 12+</div>
                            </div>
                            <div>
                                <div class="font-medium">RAM:</div>
                                <div class="text-gray-600">8GB minimum, 16GB recommended</div>
                            </div>
                            <div>
                                <div class="font-medium">Camera:</div>
                                <div class="text-gray-600">Any standard webcam or phone camera</div>
                            </div>
                            <div>
                                <div class="font-medium">Storage:</div>
                                <div class="text-gray-600">2GB available space</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-6">
                    <h3 class="text-sm font-medium text-gray-900 mb-2">Description:</h3>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• AI 3D Motion Capture pertama di Indonesia untuk kreator independen</li>
                        <li>• Tanpa sensor atau marker, cukup kamera biasa</li>
                        <li>• Interface mudah digunakan, cocok untuk content creator</li>
                        <li>• Export ke berbagai format 3D populer (FBX, OBJ, BVH)</li>
                        <li>• Real-time preview dan editing</li>
                    </ul>
                </div>

                <!-- Software Information -->
                <div class="grid grid-cols-3 gap-4 mb-8 p-4 bg-gray-50 rounded-lg">
                    <div class="text-center">
                        <div class="text-sm font-medium text-gray-900">Download</div>
                        <div class="text-xs text-gray-600">Instant after payment</div>
                    </div>
                    <div class="text-center">
                        <div class="text-sm font-medium text-gray-900">Updates</div>
                        <div class="text-xs text-gray-600">Free lifetime updates</div>
                    </div>
                    <div class="text-center">
                        <div class="text-sm font-medium text-gray-900">Support</div>
                        <div class="text-xs text-gray-600">24/7 technical support</div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex gap-4">
                    <button id="buyBtn" class="flex-1 bg-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Download Sekarang
                    </button>
                    <button class="px-6 py-3 border-2 border-blue-600 text-blue-600 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition">
                        Try Demo
                    </button>
                </div>
            </div>
        </div>

        <!-- Reviews Section -->
        <div class="mt-16">
            <h2 class="text-2xl font-bold text-gray-900 mb-8">Reviews</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Review 1 -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-semibold">
                            AM
                        </div>
                        <div>
                            <div class="font-medium">Andi Maulana</div>
                            <div class="text-sm text-gray-600">13 Oct 2024</div>
                        </div>
                    </div>
                    <p class="text-sm text-gray-700">"Mosyen AI sangat membantu workflow motion capture saya. Tanpa ribet setup sensor, langsung bisa capture gerakan dengan hasil yang memuaskan!"</p>
                </div>

                <!-- Review 2 -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-semibold">
                            AM
                        </div>
                        <div>
                            <div class="font-medium">Ayu Mardini</div>
                            <div class="text-sm text-gray-600">12 Oct 2024</div>
                        </div>
                    </div>
                    <p class="text-sm text-gray-700">"Software yang revolusioner untuk content creator Indonesia! Interface-nya user-friendly dan hasilnya sangat akurat untuk motion capture tanpa peralatan mahal."</p>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
            <div class="bg-white rounded-lg shadow-lg p-8 max-w-sm w-full mx-4 text-center">
                <h3 class="text-xl font-bold mb-4">Info</h3>
                <p class="mb-6">Fitur ini masih kami persiapkan.</p>
                <button id="closeModal" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <script>
        // Image gallery functionality
        function changeImage(src) {
            document.getElementById('mainImage').src = src;
            
            // Update active thumbnail
            document.querySelectorAll('img[onclick]').forEach(img => {
                img.classList.remove('border-2', 'border-blue-500');
                img.classList.add('border', 'border-gray-300');
            });
            event.target.classList.remove('border', 'border-gray-300');
            event.target.classList.add('border-2', 'border-blue-500');
        }

        // Modal functionality
        const buyBtn = document.getElementById('buyBtn');
        const modal = document.getElementById('modal');
        const closeModal = document.getElementById('closeModal');

        buyBtn.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });

        closeModal.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        // Close modal when clicking outside
        modal.addEventListener('click', (e) => {
            if(e.target === modal) modal.classList.add('hidden');
        });

        // Package selection functionality
        document.querySelectorAll('.border.border-gray-300, .border-2.border-blue-500').forEach(pkg => {
            pkg.addEventListener('click', () => {
                // Remove active class from all packages
                pkg.parentElement.querySelectorAll('div').forEach(packageDiv => {
                    packageDiv.classList.remove('border-2', 'border-blue-500', 'bg-blue-50');
                    packageDiv.classList.add('border', 'border-gray-300');
                    // Reset text colors
                    packageDiv.querySelectorAll('.text-blue-700, .text-blue-600').forEach(text => {
                        text.classList.remove('text-blue-700', 'text-blue-600');
                        text.classList.add('text-gray-900');
                    });
                });
                
                // Add active class to clicked package
                pkg.classList.remove('border', 'border-gray-300');
                pkg.classList.add('border-2', 'border-blue-500', 'bg-blue-50');
                
                // Update price display
                const price = pkg.querySelector('.font-bold').textContent;
                document.querySelector('.text-3xl.font-bold.text-purple-600').textContent = price;
            });
        });
    </script>
</section>