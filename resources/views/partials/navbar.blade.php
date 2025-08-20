<nav class="fixed top-0 left-0 w-full z-50 flex items-center justify-between px-6 md:px-8 py-4 bg-transparent">
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
        <div class="hidden lg:block bg-white shadow-md rounded-full p-3 hover:shadow-lg transition-shadow duration-200 backdrop-blur-sm">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-[#001f4d]">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.5 20.25a8.25 8.25 0 0115 0"/>
            </svg>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobileMenuBtn" class="lg:hidden bg-white shadow-md rounded-xl p-2 hover:shadow-lg transition duration-200 backdrop-blur-sm">
            <span class="block w-6 h-0.5 bg-[#001f4d] mb-1.5 transition-all duration-300 ease-in-out origin-center" id="bar1"></span>
            <span class="block w-6 h-0.5 bg-[#001f4d] mb-1.5 transition-all duration-300 ease-in-out" id="bar2"></span>
            <span class="block w-6 h-0.5 bg-[#001f4d] transition-all duration-300 ease-in-out origin-center" id="bar3"></span>
        </button>
    </div>
</nav>

<!-- Mobile Overlay -->
<div id="mobileOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 opacity-0 invisible transition-all duration-300 lg:hidden"></div>

<!-- Mobile Sidebar -->
<div id="mobileSidebar" class="fixed top-0 left-0 h-full w-[30vw] min-w-[280px] max-w-[320px] bg-white z-50 transform -translate-x-full transition-transform duration-300 lg:hidden shadow-2xl">
    <!-- Sidebar Header -->
    <div class="flex items-center justify-between p-6 border-b border-gray-200 bg-white">
        <img src="/assets/logomosyen-light.svg" alt="Mosyen Logo" class="w-[80px] h-[40px] object-contain">
        <button id="closeSidebarBtn" class="text-gray-600 hover:text-gray-800 transition-colors duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Sidebar Menu -->
    <div class="p-6">
        <ul class="space-y-4">
            <li>
                <a href="{{ url('/') }}" class="flex items-center py-3 px-4 text-gray-700 hover:bg-sky-50 hover:text-sky-600 rounded-lg transition-all duration-200 font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <a href="{{ url('/#about') }}" class="flex items-center py-3 px-4 text-gray-700 hover:bg-sky-50 hover:text-sky-600 rounded-lg transition-all duration-200 font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                    </svg>
                    About
                </a>
            </li>
            <li>
                <a href="{{ url('/#product') }}" class="flex items-center py-3 px-4 text-gray-700 hover:bg-sky-50 hover:text-sky-600 rounded-lg transition-all duration-200 font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                    </svg>
                    Product
                </a>
            </li>
            <li>
                <a href="{{ url('/#demo') }}" class="flex items-center py-3 px-4 text-gray-700 hover:bg-sky-50 hover:text-sky-600 rounded-lg transition-all duration-200 font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                    </svg>
                    Demo
                </a>
            </li>
            <li>
                <a href="{{ url('/pricing') }}" class="flex items-center py-3 px-4 text-gray-700 hover:bg-sky-50 hover:text-sky-600 rounded-lg transition-all duration-200 font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    Pricing
                </a>
            </li>
            <li>
                <a href="{{ url('/#contact') }}" class="flex items-center py-3 px-4 text-gray-700 hover:bg-sky-50 hover:text-sky-600 rounded-lg transition-all duration-200 font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>
                    Contact
                </a>
            </li>
        </ul>

        <!-- User Profile Section -->
        <div class="mt-8 pt-6 border-t border-gray-200">
            <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                <div class="bg-gray-600 rounded-full p-2 mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.5 20.25a8.25 8.25 0 0115 0"/>
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-900">User Profile</p>
                    <p class="text-xs text-gray-500">Manage your account</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileSidebar = document.getElementById('mobileSidebar');
    const mobileOverlay = document.getElementById('mobileOverlay');
    const closeSidebarBtn = document.getElementById('closeSidebarBtn');
    const bar1 = document.getElementById('bar1');
    const bar2 = document.getElementById('bar2');
    const bar3 = document.getElementById('bar3');

    let sidebarOpen = false;

    function openSidebar() {
        mobileSidebar.classList.remove('-translate-x-full');
        mobileOverlay.classList.remove('opacity-0', 'invisible');
        mobileOverlay.classList.add('opacity-100', 'visible');
        
        // Remove hamburger animation since we're not using it
        sidebarOpen = true;
        document.body.style.overflow = 'hidden';
    }

    function closeSidebar() {
        mobileSidebar.classList.add('-translate-x-full');
        mobileOverlay.classList.add('opacity-0', 'invisible');
        mobileOverlay.classList.remove('opacity-100', 'visible');
        
        // Remove hamburger animation since we're not using it
        sidebarOpen = false;
        document.body.style.overflow = 'auto';
    }

    mobileMenuBtn.addEventListener('click', function() {
        if (sidebarOpen) {
            closeSidebar();
        } else {
            openSidebar();
        }
    });

    closeSidebarBtn.addEventListener('click', closeSidebar);
    mobileOverlay.addEventListener('click', closeSidebar);

    // Close sidebar when clicking on menu links
    const sidebarLinks = document.querySelectorAll('#mobileSidebar a');
    sidebarLinks.forEach(link => {
        link.addEventListener('click', closeSidebar);
    });

    // Handle window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 1024 && sidebarOpen) {
            closeSidebar();
        }
    });
});
</script>