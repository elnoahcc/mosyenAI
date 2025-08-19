<nav class="fixed top-0 left-0 w-full z-50 flex items-center justify-between px-4 md:px-8 py-4 bg-transparent">
    <!-- Logo -->
    <div class="flex-shrink-0 bg-white rounded-xl p-2">
        <img src="/assets/logomosyen-light.svg" alt="Mosyen Logo" class="w-[100px] h-[50px] object-contain">
    </div>

    <!-- Desktop Menu -->
    <div class="hidden lg:flex flex-1 justify-center">
    <ul id="desktopMenu" class="flex gap-8 font-medium text-white bg-[#001f4d] rounded-full px-10 py-3 shadow-lg">
        <li><a href="{{ url('/') }}" class="menu-item hover:text-sky-400 transition-colors duration-200 font-medium">Home</a></li>
        <li><a href="{{ url('/#about') }}" class="menu-item hover:text-sky-400 transition-colors duration-200 font-medium">About</a></li>
        <li><a href="{{ url('/#product') }}" class="menu-item hover:text-sky-400 transition-colors duration-200 font-medium">Product</a></li>
        <li><a href="{{ url('/#demo') }}" class="menu-item hover:text-sky-400 transition-colors duration-200 font-medium">Demo</a></li>
        <li><a href="{{ url('/pricing') }}" class="menu-item hover:text-sky-400 transition-colors duration-200 font-medium">Pricing</a></li>
        <li><a href="{{ url('/#contact') }}" class="menu-item hover:text-sky-400 transition-colors duration-200 font-medium">Contact</a></li>
    </ul>
</div>


   <!-- icon user -->
   <div class="flex items-center gap-3">
    <div class="bg-white shadow-md rounded-full p-3 hover:shadow-lg transition-shadow duration-200 backdrop-blur-sm">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
             stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-[#001f4d]">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.5 20.25a8.25 8.25 0 0115 0"/>
        </svg>
    </div>
</div>

        <!-- Mobile Menu Button -->
        <button id="mobileMenuBtn" class="lg:hidden bg-white shadow-md rounded-xl p-2 hover:shadow-lg transition duration-200 backdrop-blur-sm">
            <span class="block w-6 h-0.5 bg-[#001f4d] mb-1"></span>
            <span class="block w-6 h-0.5 bg-[#001f4d] mb-1"></span>
            <span class="block w-6 h-0.5 bg-[#001f4d]"></span>
        </button>
    </div>
</nav>
