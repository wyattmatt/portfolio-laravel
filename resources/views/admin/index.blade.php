@extends('layouts.master')

@section('title', 'Dashboard - Admin Panel')

@section('page-title', 'Dashboard Overview')

@section('content')
<!-- Welcome Banner -->
<div class="bg-gradient-to-r from-primary to-secondary rounded-lg shadow-lg p-6 mb-8 text-white">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold mb-2">Welcome back, Admin! 👋</h2>
            <p class="text-blue-100">Here's what's happening with your website today</p>
        </div>
        <div class="hidden md:block">
            <svg class="w-24 h-24 opacity-20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
            </svg>
        </div>
    </div>
</div>

<!-- Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Total Views -->
    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
        <div class="flex items-center justify-between mb-4">
            <div>
                <p class="text-sm text-gray-600 font-semibold">Total Views</p>
                <h3 class="text-3xl font-bold text-gray-800">24,532</h3>
            </div>
            <div class="bg-blue-100 p-3 rounded-full">
                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
            </div>
        </div>
        <div class="flex items-center text-sm">
            <span class="text-green-500 font-semibold">+12.5%</span>
            <span class="text-gray-500 ml-2">vs last month</span>
        </div>
    </div>

    <!-- Blog Posts -->
    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
        <div class="flex items-center justify-between mb-4">
            <div>
                <p class="text-sm text-gray-600 font-semibold">Blog Posts</p>
                <h3 class="text-3xl font-bold text-gray-800">127</h3>
            </div>
            <div class="bg-purple-100 p-3 rounded-full">
                <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                </svg>
            </div>
        </div>
        <div class="flex items-center text-sm">
            <span class="text-green-500 font-semibold">+8</span>
            <span class="text-gray-500 ml-2">new this month</span>
        </div>
    </div>

    <!-- Messages -->
    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
        <div class="flex items-center justify-between mb-4">
            <div>
                <p class="text-sm text-gray-600 font-semibold">New Messages</p>
                <h3 class="text-3xl font-bold text-gray-800">45</h3>
            </div>
            <div class="bg-green-100 p-3 rounded-full">
                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
            </div>
        </div>
        <div class="flex items-center text-sm">
            <span class="text-red-500 font-semibold">5</span>
            <span class="text-gray-500 ml-2">unread messages</span>
        </div>
    </div>

    <!-- Portfolio Items -->
    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
        <div class="flex items-center justify-between mb-4">
            <div>
                <p class="text-sm text-gray-600 font-semibold">Portfolio Items</p>
                <h3 class="text-3xl font-bold text-gray-800">32</h3>
            </div>
            <div class="bg-yellow-100 p-3 rounded-full">
                <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
            </div>
        </div>
        <div class="flex items-center text-sm">
            <span class="text-green-500 font-semibold">+3</span>
            <span class="text-gray-500 ml-2">added this week</span>
        </div>
    </div>
</div>

<!-- Two Column Layout -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
    <!-- Recent Activity -->
    <div class="lg:col-span-2 bg-white rounded-lg shadow-md">
        <div class="p-6 border-b border-gray-200">
            <h3 class="text-lg font-bold text-gray-800">Recent Activity</h3>
        </div>
        <div class="p-6">
            <div class="space-y-4">
                <!-- Activity Item -->
                <div class="flex items-start space-x-4 pb-4 border-b border-gray-100">
                    <div class="bg-blue-100 p-2 rounded-full flex-shrink-0">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-gray-800">New blog post published</p>
                        <p class="text-sm text-gray-500">"The Future of Web Development in 2025" has been published</p>
                        <p class="text-xs text-gray-400 mt-1">2 hours ago</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4 pb-4 border-b border-gray-100">
                    <div class="bg-green-100 p-2 rounded-full flex-shrink-0">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-gray-800">New contact message</p>
                        <p class="text-sm text-gray-500">John Doe sent a message from contact form</p>
                        <p class="text-xs text-gray-400 mt-1">5 hours ago</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4 pb-4 border-b border-gray-100">
                    <div class="bg-purple-100 p-2 rounded-full flex-shrink-0">
                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-gray-800">New comment received</p>
                        <p class="text-sm text-gray-500">Sarah commented on "UI/UX Design Trends"</p>
                        <p class="text-xs text-gray-400 mt-1">1 day ago</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4 pb-4 border-b border-gray-100">
                    <div class="bg-yellow-100 p-2 rounded-full flex-shrink-0">
                        <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-gray-800">Portfolio item updated</p>
                        <p class="text-sm text-gray-500">Project "E-commerce Platform" has been updated</p>
                        <p class="text-xs text-gray-400 mt-1">2 days ago</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="bg-red-100 p-2 rounded-full flex-shrink-0">
                        <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-gray-800">System update required</p>
                        <p class="text-sm text-gray-500">Security patch available for installation</p>
                        <p class="text-xs text-gray-400 mt-1">3 days ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="bg-white rounded-lg shadow-md">
        <div class="p-6 border-b border-gray-200">
            <h3 class="text-lg font-bold text-gray-800">Quick Actions</h3>
        </div>
        <div class="p-6">
            <div class="space-y-3">
                <button class="w-full bg-primary text-white px-4 py-3 rounded-lg font-semibold hover:bg-secondary transition duration-300 flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    New Blog Post
                </button>

                <button class="w-full bg-white text-gray-700 border border-gray-300 px-4 py-3 rounded-lg font-semibold hover:bg-gray-50 transition duration-300 flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Add Portfolio Item
                </button>

                <button class="w-full bg-white text-gray-700 border border-gray-300 px-4 py-3 rounded-lg font-semibold hover:bg-gray-50 transition duration-300 flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                    Create Page
                </button>

                <button class="w-full bg-white text-gray-700 border border-gray-300 px-4 py-3 rounded-lg font-semibold hover:bg-gray-50 transition duration-300 flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                    </svg>
                    Upload Media
                </button>
            </div>

            <div class="mt-6 pt-6 border-t border-gray-200">
                <h4 class="text-sm font-semibold text-gray-700 mb-3">System Status</h4>
                <div class="space-y-2">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Website Status</span>
                        <span class="flex items-center text-green-600 font-semibold">
                            <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                            Online
                        </span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Server Load</span>
                        <span class="text-gray-800 font-semibold">23%</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Storage Used</span>
                        <span class="text-gray-800 font-semibold">4.2 GB</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Last Backup</span>
                        <span class="text-gray-800 font-semibold">2h ago</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recent Posts -->
<div class="bg-white rounded-lg shadow-md mb-8">
    <div class="p-6 border-b border-gray-200 flex items-center justify-between">
        <h3 class="text-lg font-bold text-gray-800">Recent Blog Posts</h3>
        <a href="#" class="text-primary hover:text-secondary text-sm font-semibold">View All →</a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Title</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Author</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Views</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <tr class="hover:bg-gray-50 transition duration-150">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-semibold text-gray-800">The Future of Web Development</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-600">John Smith</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Published</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">1,234</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Oct 10, 2025</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <button class="text-blue-600 hover:text-blue-800 mr-3">Edit</button>
                        <button class="text-red-600 hover:text-red-800">Delete</button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 transition duration-150">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-semibold text-gray-800">Building Scalable Laravel Apps</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-600">Sarah Johnson</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Published</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">987</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Oct 8, 2025</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <button class="text-blue-600 hover:text-blue-800 mr-3">Edit</button>
                        <button class="text-red-600 hover:text-red-800">Delete</button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 transition duration-150">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-semibold text-gray-800">UI/UX Design Trends for 2025</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-600">Michael Davis</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-3 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Draft</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">-</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Oct 5, 2025</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <button class="text-blue-600 hover:text-blue-800 mr-3">Edit</button>
                        <button class="text-red-600 hover:text-red-800">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection