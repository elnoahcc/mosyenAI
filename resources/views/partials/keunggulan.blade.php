<section class="py-16">
  <style>
    /* Custom styles for mobile responsive cards */
    @media (max-width: 768px) {
        .mobile-card {
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
            background: white;
        }
        
        .mobile-card-header {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            color: white;
            padding: 1rem;
            border-radius: 0.5rem 0.5rem 0 0;
            text-align: center;
            font-weight: bold;
            font-size: 1.125rem;
        }
        
        .mobile-feature {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.75rem 1rem;
            border-bottom: 1px solid #f3f4f6;
        }
        
        .mobile-feature:last-child {
            border-bottom: none;
        }
        
        .mobile-feature-name {
            font-weight: 500;
            color: #374151;
            flex: 1;
        }
        
        .mobile-feature-value {
            flex-shrink: 0;
            margin-left: 1rem;
        }
        
        .price-section {
            background: #f9fafb;
            padding: 1rem;
            border-radius: 0 0 0.5rem 0.5rem;
            text-align: center;
        }
    }
  </style>
  
  <div class="max-w-6xl mx-auto px-4">
    
    <!-- Desktop Table (Hidden on Mobile) -->
    <div class="hidden md:block bg-white rounded-lg shadow-lg overflow-hidden">
      <div class="overflow-x-auto">
        <table class="w-full">
          <thead>
            <tr class="bg-gray-100">
              <th class="text-left py-4 px-6 font-semibold text-gray-700 w-1/4">Fitur</th>
              <th class="text-center py-4 px-6 font-semibold text-white bg-blue-600 w-1/5">Mosyen</th>
              <th class="text-center py-4 px-6 font-semibold text-gray-700 w-1/5">Rokoko</th>
              <th class="text-center py-4 px-6 font-semibold text-gray-700 w-1/5">Vicon</th>
              <th class="text-center py-4 px-6 font-semibold text-gray-700 w-1/5">Teslasuit</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <tr class="hover:bg-gray-50">
              <td class="py-4 px-6 text-gray-800 font-medium">Tanpa Sensor/Marker</td>
              <td class="py-4 px-6 text-center bg-blue-600">
                <span class="inline-flex items-center justify-center w-8 h-8 bg-green-500 text-white rounded-full text-sm font-bold">✓</span>
              </td>
              <td class="py-4 px-6 text-center">
                <span class="inline-flex items-center justify-center w-8 h-8 bg-red-100 text-red-500 rounded-full text-sm">✗</span>
              </td>
              <td class="py-4 px-6 text-center">
                <span class="inline-flex items-center justify-center w-8 h-8 bg-red-100 text-red-500 rounded-full text-sm">✗</span>
              </td>
              <td class="py-4 px-6 text-center">
                <span class="inline-flex items-center justify-center w-8 h-8 bg-red-100 text-red-500 rounded-full text-sm">✗</span>
              </td>
            </tr>
            
            <tr class="hover:bg-gray-50">
              <td class="py-4 px-6 text-gray-800 font-medium">Hanya Menggunakan Kamera</td>
              <td class="py-4 px-6 text-center bg-blue-600">
                <span class="inline-flex items-center justify-center w-8 h-8 bg-green-500 text-white rounded-full text-sm font-bold">✓</span>
              </td>
              <td class="py-4 px-6 text-center">
                <span class="inline-flex items-center justify-center w-8 h-8 bg-red-100 text-red-500 rounded-full text-sm">✗</span>
              </td>
              <td class="py-4 px-6 text-center">
                <span class="inline-flex items-center justify-center w-8 h-8 bg-red-100 text-red-500 rounded-full text-sm">✗</span>
              </td>
              <td class="py-4 px-6 text-center">
                <span class="inline-flex items-center justify-center w-8 h-8 bg-red-100 text-red-500 rounded-full text-sm">✗</span>
              </td>
            </tr>
            
            <tr class="hover:bg-gray-50">
              <td class="py-4 px-6 text-gray-800 font-medium">Mudah Digunakan</td>
              <td class="py-4 px-6 text-center bg-blue-600">
                <span class="inline-flex items-center justify-center w-8 h-8 bg-green-500 text-white rounded-full text-sm font-bold">✓</span>
              </td>
              <td class="py-4 px-6 text-center">
                <span class="inline-block px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-sm">Perlu Suit</span>
              </td>
              <td class="py-4 px-6 text-center">
                <span class="inline-block px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm">Setup Kompleks</span>
              </td>
              <td class="py-4 px-6 text-center">
                <span class="inline-block px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-sm">Suit Khusus</span>
              </td>
            </tr>
            
            <tr class="hover:bg-gray-50">
              <td class="py-4 px-6 text-gray-800 font-medium">Cocok untuk Kreator Independen</td>
              <td class="py-4 px-6 text-center bg-blue-600">
                <span class="inline-flex items-center justify-center w-8 h-8 bg-green-500 text-white rounded-full text-sm font-bold">✓</span>
              </td>
              <td class="py-4 px-6 text-center">
                <span class="inline-flex items-center justify-center w-8 h-8 bg-red-100 text-red-500 rounded-full text-sm">✗</span>
              </td>
              <td class="py-4 px-6 text-center">
                <span class="inline-flex items-center justify-center w-8 h-8 bg-red-100 text-red-500 rounded-full text-sm">✗</span>
              </td>
              <td class="py-4 px-6 text-center">
                <span class="inline-flex items-center justify-center w-8 h-8 bg-red-100 text-red-500 rounded-full text-sm">✗</span>
              </td>
            </tr>
            
            <tr class="hover:bg-gray-50">
              <td class="py-4 px-6 text-gray-800 font-medium">Retargeting Motion Capture</td>
              <td class="py-4 px-6 text-center bg-blue-600">
                <span class="inline-flex items-center justify-center w-8 h-8 bg-green-500 text-white rounded-full text-sm font-bold">✓</span>
              </td>
              <td class="py-4 px-6 text-center">
                <span class="inline-flex items-center justify-center w-8 h-8 bg-green-100 text-green-600 rounded-full text-sm font-bold">✓</span>
              </td>
              <td class="py-4 px-6 text-center">
                <span class="inline-flex items-center justify-center w-8 h-8 bg-green-100 text-green-600 rounded-full text-sm font-bold">✓</span>
              </td>
              <td class="py-4 px-6 text-center">
                <span class="inline-flex items-center justify-center w-8 h-8 bg-green-100 text-green-600 rounded-full text-sm font-bold">✓</span>
              </td>
            </tr>
            
            <tr class="bg-gray-100 hover:bg-gray-200">
              <td class="py-6 px-6 text-gray-800 font-semibold flex items-center">
                <svg class="w-5 h-5 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                </svg>
                Harga
              </td>
              <td class="py-6 px-6 text-center bg-blue-600">
                <div class="text-white">
                  <div class="text-2xl font-bold">Rp 120K</div>
                  <div class="text-sm opacity-90">/bulan</div>
                </div>
              </td>
              <td class="py-6 px-6 text-center">
                <div class="text-gray-700">
                  <div class="text-2xl font-bold">Rp 325K</div>
                  <div class="text-sm text-gray-500">/bulan</div>
                </div>
              </td>
              <td class="py-6 px-6 text-center">
                <div class="text-gray-700">
                  <div class="text-2xl font-bold">Rp 35 Jt</div>
                  <div class="text-sm text-gray-500">/set</div>
                </div>
              </td>
              <td class="py-6 px-6 text-center">
                <div class="text-gray-700">
                  <div class="text-2xl font-bold">Rp 25 Jt</div>
                  <div class="text-sm text-gray-500">/kit</div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Mobile Cards (Visible only on Mobile) -->
    <div class="md:hidden space-y-6">
      <!-- Mosyen Card -->
      <div class="mobile-card shadow-lg">
        <div class="mobile-card-header">
          <div class="flex items-center justify-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
            </svg>
            Mosyen
          </div>
        </div>
        
        <div class="mobile-feature">
          <div class="mobile-feature-name">Tanpa Sensor/Marker</div>
          <div class="mobile-feature-value">
            <span class="inline-flex items-center justify-center w-8 h-8 bg-green-500 text-white rounded-full text-sm font-bold">✓</span>
          </div>
        </div>
        
        <div class="mobile-feature">
          <div class="mobile-feature-name">Hanya Menggunakan Kamera</div>
          <div class="mobile-feature-value">
            <span class="inline-flex items-center justify-center w-8 h-8 bg-green-500 text-white rounded-full text-sm font-bold">✓</span>
          </div>
        </div>
        
        <div class="mobile-feature">
          <div class="mobile-feature-name">Mudah Digunakan</div>
          <div class="mobile-feature-value">
            <span class="inline-flex items-center justify-center w-8 h-8 bg-green-500 text-white rounded-full text-sm font-bold">✓</span>
          </div>
        </div>
        
        <div class="mobile-feature">
          <div class="mobile-feature-name">Cocok untuk Kreator Independen</div>
          <div class="mobile-feature-value">
            <span class="inline-flex items-center justify-center w-8 h-8 bg-green-500 text-white rounded-full text-sm font-bold">✓</span>
          </div>
        </div>
        
        <div class="mobile-feature">
          <div class="mobile-feature-name">Retargeting Motion Capture</div>
          <div class="mobile-feature-value">
            <span class="inline-flex items-center justify-center w-8 h-8 bg-green-500 text-white rounded-full text-sm font-bold">✓</span>
          </div>
        </div>
        
        <div class="price-section">
          <div class="text-2xl font-bold text-blue-600">Rp 120K</div>
          <div class="text-sm text-gray-600">/bulan</div>
          <div class="mt-2">
            <span class="inline-flex items-center px-3 py-1 bg-blue-100 text-blue-800 text-sm font-medium rounded-full">
              ⭐ Rekomendasi
            </span>
          </div>
        </div>
      </div>

      <!-- Rokoko Card -->
      <div class="mobile-card">
        <div class="bg-gray-600 text-white p-4 rounded-t-lg text-center font-bold text-lg">
          Rokoko
        </div>
        
        <div class="mobile-feature">
          <div class="mobile-feature-name">Tanpa Sensor/Marker</div>
          <div class="mobile-feature-value">
            <span class="inline-flex items-center justify-center w-8 h-8 bg-red-100 text-red-500 rounded-full text-sm">✗</span>
          </div>
        </div>
        
        <div class="mobile-feature">
          <div class="mobile-feature-name">Hanya Menggunakan Kamera</div>
          <div class="mobile-feature-value">
            <span class="inline-flex items-center justify-center w-8 h-8 bg-red-100 text-red-500 rounded-full text-sm">✗</span>
          </div>
        </div>
        
        <div class="mobile-feature">
          <div class="mobile-feature-name">Mudah Digunakan</div>
          <div class="mobile-feature-value">
            <span class="inline-block px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs">Perlu Suit</span>
          </div>
        </div>
        
        <div class="mobile-feature">
          <div class="mobile-feature-name">Cocok untuk Kreator Independen</div>
          <div class="mobile-feature-value">
            <span class="inline-flex items-center justify-center w-8 h-8 bg-red-100 text-red-500 rounded-full text-sm">✗</span>
          </div>
        </div>
        
        <div class="mobile-feature">
          <div class="mobile-feature-name">Retargeting Motion Capture</div>
          <div class="mobile-feature-value">
            <span class="inline-flex items-center justify-center w-8 h-8 bg-green-100 text-green-600 rounded-full text-sm font-bold">✓</span>
          </div>
        </div>
        
        <div class="price-section">
          <div class="text-2xl font-bold text-gray-700">Rp 325K</div>
          <div class="text-sm text-gray-600">/bulan</div>
        </div>
      </div>

      <!-- Vicon Card -->
      <div class="mobile-card">
        <div class="bg-gray-600 text-white p-4 rounded-t-lg text-center font-bold text-lg">
          Vicon
        </div>
        
        <div class="mobile-feature">
          <div class="mobile-feature-name">Tanpa Sensor/Marker</div>
          <div class="mobile-feature-value">
            <span class="inline-flex items-center justify-center w-8 h-8 bg-red-100 text-red-500 rounded-full text-sm">✗</span>
          </div>
        </div>
        
        <div class="mobile-feature">
          <div class="mobile-feature-name">Hanya Menggunakan Kamera</div>
          <div class="mobile-feature-value">
            <span class="inline-flex items-center justify-center w-8 h-8 bg-red-100 text-red-500 rounded-full text-sm">✗</span>
          </div>
        </div>
        
        <div class="mobile-feature">
          <div class="mobile-feature-name">Mudah Digunakan</div>
          <div class="mobile-feature-value">
            <span class="inline-block px-2 py-1 bg-red-100 text-red-700 rounded-full text-xs">Setup Kompleks</span>
          </div>
        </div>
        
        <div class="mobile-feature">
          <div class="mobile-feature-name">Cocok untuk Kreator Independen</div>
          <div class="mobile-feature-value">
            <span class="inline-flex items-center justify-center w-8 h-8 bg-red-100 text-red-500 rounded-full text-sm">✗</span>
          </div>
        </div>
        
        <div class="mobile-feature">
          <div class="mobile-feature-name">Retargeting Motion Capture</div>
          <div class="mobile-feature-value">
            <span class="inline-flex items-center justify-center w-8 h-8 bg-green-100 text-green-600 rounded-full text-sm font-bold">✓</span>
          </div>
        </div>
        
        <div class="price-section">
          <div class="text-2xl font-bold text-gray-700">Rp 35 Jt</div>
          <div class="text-sm text-gray-600">/set</div>
        </div>
      </div>

      <!-- Teslasuit Card -->
      <div class="mobile-card">
        <div class="bg-gray-600 text-white p-4 rounded-t-lg text-center font-bold text-lg">
          Teslasuit
        </div>
        
        <div class="mobile-feature">
          <div class="mobile-feature-name">Tanpa Sensor/Marker</div>
          <div class="mobile-feature-value">
            <span class="inline-flex items-center justify-center w-8 h-8 bg-red-100 text-red-500 rounded-full text-sm">✗</span>
          </div>
        </div>
        
        <div class="mobile-feature">
          <div class="mobile-feature-name">Hanya Menggunakan Kamera</div>
          <div class="mobile-feature-value">
            <span class="inline-flex items-center justify-center w-8 h-8 bg-red-100 text-red-500 rounded-full text-sm">✗</span>
          </div>
        </div>
        
        <div class="mobile-feature">
          <div class="mobile-feature-name">Mudah Digunakan</div>
          <div class="mobile-feature-value">
            <span class="inline-block px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs">Suit Khusus</span>
          </div>
        </div>
        
        <div class="mobile-feature">
          <div class="mobile-feature-name">Cocok untuk Kreator Independen</div>
          <div class="mobile-feature-value">
            <span class="inline-flex items-center justify-center w-8 h-8 bg-red-100 text-red-500 rounded-full text-sm">✗</span>
          </div>
        </div>
        
        <div class="mobile-feature">
          <div class="mobile-feature-name">Retargeting Motion Capture</div>
          <div class="mobile-feature-value">
            <span class="inline-flex items-center justify-center w-8 h-8 bg-green-100 text-green-600 rounded-full text-sm font-bold">✓</span>
          </div>
        </div>
        
        <div class="price-section">
          <div class="text-2xl font-bold text-gray-700">Rp 25 Jt</div>
          <div class="text-sm text-gray-600">/kit</div>
        </div>
      </div>
    </div>
    
    <!-- Call to Action Buttons -->
    <div class="flex flex-col sm:flex-row justify-center gap-4 mt-8">
      <!-- Tombol Berlangganan -->
      <a href="{{ url('/detail') }}"
         class="inline-block px-8 py-3 border-2 border-blue-500 text-white bg-blue-500 font-semibold rounded-lg transition-colors duration-300 hover:bg-blue-600 text-center">
        Berlangganan Sekarang
      </a>
      
      <!-- Tombol Pelajari -->
      <a href="#product"
         class="inline-block px-8 py-3 border-2 border-blue-500 text-blue-500 font-semibold rounded-lg transition-colors duration-300 hover:bg-blue-500 hover:text-white text-center">
        Pelajari Lebih Lanjut
      </a>
    </div>
  </div>
</section>

<script>
  document.querySelector('a[href="#product"]').addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelector('#product').scrollIntoView({ behavior: 'smooth' });
  });
</script>