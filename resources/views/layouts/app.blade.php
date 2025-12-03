<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MMS Connections - Software Solutions')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}"
                        class="text-2xl font-bold text-sky-600 hover:text-sky-700 transition-colors">
                        MMS Connections
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}"
                        class="nav-link {{ request()->routeIs('home') ? 'text-sky-600 font-semibold' : 'text-gray-700 hover:text-sky-600' }} transition-colors">
                        Home
                    </a>
                    <a href="{{ route('about-us') }}"
                        class="nav-link {{ request()->routeIs('about-us') ? 'text-sky-600 font-semibold' : 'text-gray-700 hover:text-sky-600' }} transition-colors">
                        About Us
                    </a>
                    <a href="{{ route('our-services') }}"
                        class="nav-link {{ request()->routeIs('our-services') ? 'text-sky-600 font-semibold' : 'text-gray-700 hover:text-sky-600' }} transition-colors">
                        Our Services
                    </a>
                    <a href="{{ route('products') }}"
                        class="nav-link {{ request()->routeIs('products') || request()->routeIs('product-detail') ? 'text-sky-600 font-semibold' : 'text-gray-700 hover:text-sky-600' }} transition-colors">
                        Products
                    </a>
                    <a href="{{ route('contact-us') }}"
                        class="nav-link {{ request()->routeIs('contact-us') ? 'text-sky-600 font-semibold' : 'text-gray-700 hover:text-sky-600' }} transition-colors">
                        Contact Us
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-sky-600 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}"
                    class="block px-3 py-2 rounded-md {{ request()->routeIs('home') ? 'bg-sky-50 text-sky-600 font-semibold' : 'text-gray-700 hover:bg-gray-50' }}">
                    Home
                </a>
                <a href="{{ route('about-us') }}"
                    class="block px-3 py-2 rounded-md {{ request()->routeIs('about-us') ? 'bg-sky-50 text-sky-600 font-semibold' : 'text-gray-700 hover:bg-gray-50' }}">
                    About Us
                </a>
                <a href="{{ route('our-services') }}"
                    class="block px-3 py-2 rounded-md {{ request()->routeIs('our-services') ? 'bg-sky-50 text-sky-600 font-semibold' : 'text-gray-700 hover:bg-gray-50' }}">
                    Our Services
                </a>
                <a href="{{ route('products') }}"
                    class="block px-3 py-2 rounded-md {{ request()->routeIs('products') || request()->routeIs('product-detail') ? 'bg-sky-50 text-sky-600 font-semibold' : 'text-gray-700 hover:bg-gray-50' }}">
                    Products
                </a>
                <a href="{{ route('contact-us') }}"
                    class="block px-3 py-2 rounded-md {{ request()->routeIs('contact-us') ? 'bg-sky-50 text-sky-600 font-semibold' : 'text-gray-700 hover:bg-gray-50' }}">
                    Contact Us
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="col-span-1 md:col-span-2">
                    <h3 class="text-2xl font-bold text-sky-400 mb-4">MMS Connections</h3>
                    <p class="text-gray-400 mb-4">
                        Empowering businesses with innovative software solutions. We deliver excellence through
                        cutting-edge technology and exceptional service.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-sky-400 transition-colors">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-sky-400 transition-colors">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-sky-400 transition-colors">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}"
                                class="text-gray-400 hover:text-sky-400 transition-colors">Home</a></li>
                        <li><a href="{{ route('about-us') }}"
                                class="text-gray-400 hover:text-sky-400 transition-colors">About Us</a></li>
                        <li><a href="{{ route('our-services') }}"
                                class="text-gray-400 hover:text-sky-400 transition-colors">Services</a></li>
                        <li><a href="{{ route('products') }}"
                                class="text-gray-400 hover:text-sky-400 transition-colors">Products</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>123 Business Street</li>
                        <li>Tech City, TC 12345</li>
                        <li>Phone: (555) 123-4567</li>
                        <li>Email: info@mmsconnections.com</li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} MMS Connections. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function () {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>

</html>