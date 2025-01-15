<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management - EduPro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#FFF5F5',
                            100: '#FED7D7',
                            200: '#FEB2B2',
                            300: '#FC8181',
                            400: '#F56565',
                            500: '#E53E3E',
                            600: '#C53030',
                            700: '#9B2C2C',
                            800: '#822727',
                            900: '#63171B',
                        },
                        secondary: {
                            50: '#FFFAF0',
                            100: '#FEEBCB',
                            200: '#FBD38D',
                            300: '#F6AD55',
                            400: '#ED8936',
                            500: '#DD6B20',
                            600: '#C05621',
                            700: '#9C4221',
                            800: '#7B341E',
                            900: '#652B19',
                        }
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body class="bg-gradient-to-b from-primary-50 to-white min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white/80 backdrop-blur-md shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold bg-gradient-to-r from-primary-600 to-secondary-500 text-transparent bg-clip-text">EduPro</a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="dashboard.php" class="text-gray-600 hover:text-primary-600 transition-colors">Dashboard</a>
                    <a href="#" class="text-primary-600">Users</a>
                    <a href="#" class="text-gray-600 hover:text-primary-600 transition-colors">Settings</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Header -->
            <div class="mb-8" data-aos="fade-up">
                <h1 class="text-3xl font-bold text-gray-900">User Management</h1>
                <p class="mt-2 text-gray-600">Manage and monitor all users in your platform</p>
            </div>

            <!-- Filters and Search -->
            <div class="mb-6 flex flex-wrap gap-4 items-center justify-between" data-aos="fade-up">
                <div class="flex flex-wrap gap-4 items-center">
                    <!-- Search -->
                    <div class="relative">
                        <input type="text" placeholder="Search users..." class="pl-10 pr-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    </div>
                    <!-- Role Filter -->
                    <select class="px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                        <option value="">All Roles</option>
                        <option value="student">Student</option>
                        <option value="teacher">Teacher</option>
                        <option value="admin">Admin</option>
                    </select>
                    <!-- Status Filter -->
                    <select class="px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                        <option value="">All Status</option>
                        <option value="active">Active</option>
                        <option value="archived">Archived</option>
                        <option value="pending">Pending</option>
                    </select>
                </div>
                <!-- Add User Button -->
                <button class="px-4 py-2 bg-primary-500 text-white rounded-lg hover:bg-primary-600 transition-colors flex items-center gap-2">
                    <i class="fas fa-plus"></i>
                    Add New User
                </button>
            </div>

            <!-- Users Table -->
            <div class="bg-white/80 backdrop-blur-md rounded-xl shadow-lg overflow-hidden" data-aos="fade-up">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Joined Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Sample User Row -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=John+Doe" alt="User">
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">John Doe</div>
                                        <div class="text-sm text-gray-500">john@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-primary-100 text-primary-800">
                                    Teacher
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Active
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Jan 15, 2024
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                                <button class="text-primary-600 hover:text-primary-900" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-yellow-600 hover:text-yellow-900" title="Archive">
                                    <i class="fas fa-archive"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-900" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <!-- More user rows would be dynamically added here -->
                    </tbody>
                </table>
                <!-- Pagination -->
                <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                    <div class="flex items-center justify-between">
                        <div class="flex-1 flex justify-between sm:hidden">
                            <button class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                Previous
                            </button>
                            <button class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                Next
                            </button>
                        </div>
                        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                            <div>
                                <p class="text-sm text-gray-700">
                                    Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of <span class="font-medium">97</span> results
                                </p>
                            </div>
                            <div>
                                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                    <button class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <span class="sr-only">Previous</span>
                                        <i class="fas fa-chevron-left"></i>
                                    </button>
                                    <button class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">1</button>
                                    <button class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-primary-50 text-sm font-medium text-primary-600 hover:bg-primary-100">2</button>
                                    <button class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">3</button>
                                    <button class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <span class="sr-only">Next</span>
                                        <i class="fas fa-chevron-right"></i>
                                    </button>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
</body>
</html>