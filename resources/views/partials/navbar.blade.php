<!-- Navbar component -->
<nav class="bg-white border-gray-200 px-4 sm:px-6 py-3 shadow-md">
    <div class="container mx-auto flex flex-wrap items-center justify-between">
        <!-- Brand Logo -->
        <a href="/" class="flex items-center">
            <img src="https://via.placeholder.com/40" class="h-8 w-8 mr-2" alt="Logo">
            <span class="text-xl font-semibold">BrandName</span>
        </a>

        <!-- Mobile Menu Button -->
        <button @click="open = !open" class="block sm:hidden text-gray-600 focus:outline-none" aria-label="Toggle menu">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <!-- Navigation Links -->
        <div :class="{ 'block': open, 'hidden': !open }" class="w-full sm:block sm:w-auto">
            <ul class="flex flex-col sm:flex-row sm:space-x-6">
                <li><a href="#" class="block py-2 px-4 text-gray-700 hover:bg-gray-100">Home</a></li>
                <li><a href="#" class="block py-2 px-4 text-gray-700 hover:bg-gray-100">About</a></li>
                <li><a href="#" class="block py-2 px-4 text-gray-700 hover:bg-gray-100">Services</a></li>
                <li><a href="#" class="block py-2 px-4 text-gray-700 hover:bg-gray-100">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
