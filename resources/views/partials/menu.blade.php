<!-- Admin Sidebar Menu -->
<aside id="sidebar" class="fixed inset-y-0 left-0 z-30 w-64 bg-sidebar text-white transform -translate-x-full transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:inset-0">
    <div class="flex flex-col h-full">
        <!-- Logo/Brand -->
        <div class="flex items-center justify-center h-16 bg-sidebar border-b border-gray-700">
            <a href="/admin" class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-gradient-to-br from-primary to-secondary rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <span class="text-xl font-bold">Admin Panel</span>
            </a>
        </div>

        <!-- Navigation Menu -->
        <nav class="flex-1 px-4 py-6 overflow-y-auto">
            <div class="space-y-2">
                <!-- Dashboard -->
                <a href="/admin" class="flex items-center px-4 py-3 text-gray-300 rounded-lg hover:bg-sidebarHover hover:text-white transition duration-200 {{ Request::is('admin') ? 'bg-sidebarHover text-white' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Dashboard
                </a>

                <!-- Divider -->
                <div class="px-4 pt-4 pb-2">
                    <p class="text-xs font-semibold text-gray-500 uppercase">Content Management</p>
                </div>

                <!-- Blog Posts -->
                <a href="#" class="flex items-center px-4 py-3 text-gray-300 rounded-lg hover:bg-sidebarHover hover:text-white transition duration-200">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                    Blog Posts
                    <span class="ml-auto bg-primary text-white text-xs px-2 py-1 rounded-full">12</span>
                </a>

                <!-- Portfolio Items -->
                <a href="#" class="flex items-center px-4 py-3 text-gray-300 rounded-lg hover:bg-sidebarHover hover:text-white transition duration-200">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    Portfolio
                    <span class="ml-auto bg-green-500 text-white text-xs px-2 py-1 rounded-full">8</span>
                </a>

                <!-- Pages -->
                <a href="#" class="flex items-center px-4 py-3 text-gray-300 rounded-lg hover:bg-sidebarHover hover:text-white transition duration-200">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                    Pages
                </a>

                <!-- Divider -->
                <div class="px-4 pt-4 pb-2">
                    <p class="text-xs font-semibold text-gray-500 uppercase">Communication</p>
                </div>

                <!-- Messages -->
                <a href="#" class="flex items-center px-4 py-3 text-gray-300 rounded-lg hover:bg-sidebarHover hover:text-white transition duration-200">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    Messages
                    <span class="ml-auto bg-red-500 text-white text-xs px-2 py-1 rounded-full">5</span>
                </a>

                <!-- Comments -->
                <a href="#" class="flex items-center px-4 py-3 text-gray-300 rounded-lg hover:bg-sidebarHover hover:text-white transition duration-200">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                    Comments
                    <span class="ml-auto bg-yellow-500 text-white text-xs px-2 py-1 rounded-full">23</span>
                </a>

                <!-- Divider -->
                <div class="px-4 pt-4 pb-2">
                    <p class="text-xs font-semibold text-gray-500 uppercase">System</p>
                </div>

                <!-- Media Library -->
                <a href="#" class="flex items-center px-4 py-3 text-gray-300 rounded-lg hover:bg-sidebarHover hover:text-white transition duration-200">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    Media Library
                </a>

                <!-- Users -->
                <a href="#" class="flex items-center px-4 py-3 text-gray-300 rounded-lg hover:bg-sidebarHover hover:text-white transition duration-200">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    Users
                </a>

                <!-- Settings -->
                <a href="#" class="flex items-center px-4 py-3 text-gray-300 rounded-lg hover:bg-sidebarHover hover:text-white transition duration-200">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Settings
                </a>
            </div>
        </nav>

        <!-- Sidebar Footer -->
        <div class="p-4 border-t border-gray-700">
            <div class="flex items-center justify-between text-sm">
                <span class="text-gray-400">Version 1.0.0</span>
                <a href="/" class="text-primary hover:text-accent transition duration-200" title="View Website">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</aside>