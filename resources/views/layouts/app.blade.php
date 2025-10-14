<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Company Portfolio')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2563eb',
                        secondary: '#1e40af',
                        accent: '#3b82f6',
                    }
                }
            }
        }
    </script>
    <style>
        /* Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="/" class="text-2xl font-bold text-primary">YourCompany</a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-8">
                        <a href="/" class="text-gray-700 hover:text-primary transition duration-300 {{ Request::is('/') ? 'text-primary font-semibold' : '' }}">Home</a>
                        <a href="/about" class="text-gray-700 hover:text-primary transition duration-300 {{ Request::is('about') ? 'text-primary font-semibold' : '' }}">About</a>
                        <a href="/blog" class="text-gray-700 hover:text-primary transition duration-300 {{ Request::is('blog') ? 'text-primary font-semibold' : '' }}">Blog</a>
                        <a href="/contact" class="text-gray-700 hover:text-primary transition duration-300 {{ Request::is('contact') ? 'text-primary font-semibold' : '' }}">Contact</a>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-primary focus:outline-none focus:text-primary">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t">
                <a href="/" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-primary hover:text-white transition duration-300 {{ Request::is('/') ? 'bg-primary text-white' : '' }}">Home</a>
                <a href="/about" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-primary hover:text-white transition duration-300 {{ Request::is('about') ? 'bg-primary text-white' : '' }}">About</a>
                <a href="/blog" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-primary hover:text-white transition duration-300 {{ Request::is('blog') ? 'bg-primary text-white' : '' }}">Blog</a>
                <a href="/contact" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-primary hover:text-white transition duration-300 {{ Request::is('contact') ? 'bg-primary text-white' : '' }}">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <h3 class="text-xl font-bold mb-4">YourCompany</h3>
                    <p class="text-gray-400">Building innovative solutions for tomorrow's challenges.</p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-400 hover:text-white transition duration-300">Home</a></li>
                        <li><a href="/about" class="text-gray-400 hover:text-white transition duration-300">About</a></li>
                        <li><a href="/blog" class="text-gray-400 hover:text-white transition duration-300">Blog</a></li>
                        <li><a href="/contact" class="text-gray-400 hover:text-white transition duration-300">Contact</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Services</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>Web Development</li>
                        <li>Mobile Apps</li>
                        <li>Cloud Solutions</li>
                        <li>Consulting</li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>Email: info@yourcompany.com</li>
                        <li>Phone: +1 (555) 123-4567</li>
                        <li>Address: 123 Business St, City</li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} YourCompany. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Toggle Script -->
    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
    </script>

    @stack('scripts')
</body>

</html>