<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard - EduPro</title>
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
                    <a href="#" class="text-gray-600 hover:text-primary-600 transition-colors">Dashboard</a>
                    <a href="#" class="text-gray-600 hover:text-primary-600 transition-colors">My Courses</a>
                    <a href="#" class="text-gray-600 hover:text-primary-600 transition-colors">Statistics</a>
                    <div class="relative group">
                        <button class="flex items-center space-x-2 text-gray-600 hover:text-primary-600 transition-colors">
                            <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=John+Smith" alt="John Smith">
                            <span>John Smith</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg py-2 hidden group-hover:block">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50">Profile Settings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50">Sign Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Welcome Section -->
            <div class="mb-8" data-aos="fade-up">
                <h1 class="text-3xl font-bold text-gray-900">
                    Welcome back, <span class="bg-gradient-to-r from-primary-600 to-secondary-500 text-transparent bg-clip-text">John Smith</span>
                </h1>
                <p class="mt-2 text-gray-600">Manage your courses and track your students' progress</p>
            </div>

            <!-- Quick Stats -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                <div class="bg-white/80 backdrop-blur-md p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-full bg-gradient-to-r from-primary-500 to-secondary-500 text-white">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">Total Courses</h3>
                            <p class="text-2xl font-bold bg-gradient-to-r from-primary-600 to-secondary-500 text-transparent bg-clip-text">12</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white/80 backdrop-blur-md p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-full bg-gradient-to-r from-primary-500 to-secondary-500 text-white">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">Total Students</h3>
                            <p class="text-2xl font-bold bg-gradient-to-r from-primary-600 to-secondary-500 text-transparent bg-clip-text">156</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white/80 backdrop-blur-md p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-full bg-gradient-to-r from-primary-500 to-secondary-500 text-white">
                            <i class="fas fa-video"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">Video Courses</h3>
                            <p class="text-2xl font-bold bg-gradient-to-r from-primary-600 to-secondary-500 text-transparent bg-clip-text">8</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white/80 backdrop-blur-md p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-full bg-gradient-to-r from-primary-500 to-secondary-500 text-white">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">PDF Courses</h3>
                            <p class="text-2xl font-bold bg-gradient-to-r from-primary-600 to-secondary-500 text-transparent bg-clip-text">4</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course Management -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Course List -->
                <div class="lg:col-span-2">
                    <div class="bg-white/80 backdrop-blur-md rounded-xl shadow-lg p-6 mb-8" data-aos="fade-up">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-2xl font-bold text-gray-900">My Courses</h2>
                            <a href="../course/creat_course.php" class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium shadow-lg bg-gradient-to-r from-primary-600 to-secondary-500 text-white hover:from-primary-700 hover:to-secondary-600 transition-all">
                                <i class="fas fa-plus mr-2"></i>
                                Add New Course
                            </a>
                        </div>

                        <!-- Course Cards -->
                        <div class="space-y-4">
                            <!-- Course Item -->
                            <div class="bg-white rounded-xl shadow p-4 hover:shadow-md transition-shadow">
                                <div class="flex items-start justify-between">
                                    <div class="flex-1">
                                        <div class="flex items-center space-x-2 mb-2">
                                            <span class="px-2 py-1 text-xs font-semibold text-primary-800 bg-primary-100 rounded-full">Web Development</span>
                                            <span class="text-sm text-gray-500"><i class="fas fa-video"></i> Video</span>
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-900">Modern JavaScript 2025</h3>
                                        <p class="text-sm text-gray-600 mt-1">Master modern JavaScript with this comprehensive course...</p>
                                        <div class="flex items-center space-x-4 mt-2">
                                            <span class="text-sm text-gray-500"><i class="fas fa-users mr-1"></i> 45 Students</span>
                                            <span class="text-sm text-gray-500"><i class="fas fa-calendar mr-1"></i> Jan 14, 2025</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <button class="p-2 text-gray-600 hover:text-primary-600 transition-colors">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="p-2 text-gray-600 hover:text-red-600 transition-colors">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Course Item -->
                            <div class="bg-white rounded-xl shadow p-4 hover:shadow-md transition-shadow">
                                <div class="flex items-start justify-between">
                                    <div class="flex-1">
                                        <div class="flex items-center space-x-2 mb-2">
                                            <span class="px-2 py-1 text-xs font-semibold text-primary-800 bg-primary-100 rounded-full">Design</span>
                                            <span class="text-sm text-gray-500"><i class="fas fa-file-pdf"></i> PDF</span>
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-900">UI/UX Design Principles</h3>
                                        <p class="text-sm text-gray-600 mt-1">Learn the fundamentals of UI/UX design...</p>
                                        <div class="flex items-center space-x-4 mt-2">
                                            <span class="text-sm text-gray-500"><i class="fas fa-users mr-1"></i> 32 Students</span>
                                            <span class="text-sm text-gray-500"><i class="fas fa-calendar mr-1"></i> Jan 10, 2025</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <button class="p-2 text-gray-600 hover:text-primary-600 transition-colors">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="p-2 text-gray-600 hover:text-red-600 transition-colors">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <!-- Quick Actions -->
                    <div class="bg-white/80 backdrop-blur-md rounded-xl shadow-lg p-6 mb-8" data-aos="fade-up">
                        <h2 class="text-xl font-bold text-gray-900 mb-4">Quick Actions</h2>
                        <div class="space-y-4">
                            <a href="#" class="flex items-center p-3 rounded-lg hover:bg-primary-50 transition-colors group">
                                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-primary-100 text-primary-600 group-hover:bg-primary-200">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">Add New Course</p>
                                    <p class="text-xs text-gray-500">Create a new course</p>
                                </div>
                            </a>

                            <a href="#" class="flex items-center p-3 rounded-lg hover:bg-primary-50 transition-colors group">
                                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-primary-100 text-primary-600 group-hover:bg-primary-200">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">Student Management</p>
                                    <p class="text-xs text-gray-500">View and manage students</p>
                                </div>
                            </a>

                            <a href="#" class="flex items-center p-3 rounded-lg hover:bg-primary-50 transition-colors group">
                                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-primary-100 text-primary-600 group-hover:bg-primary-200">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">View Statistics</p>
                                    <p class="text-xs text-gray-500">Course performance metrics</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="bg-white/80 backdrop-blur-md rounded-xl shadow-lg p-6" data-aos="fade-up">
                        <h2 class="text-xl font-bold text-gray-900 mb-4">Recent Activity</h2>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 rounded-full bg-primary-100 text-primary-600 flex items-center justify-center">
                                        <i class="fas fa-user-plus text-sm"></i>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-900">New student enrolled</p>
                                    <p class="text-xs text-gray-500">Modern JavaScript 2025</p>
                                    <p class="text-xs text-gray-400">2 hours ago</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center">
                                        <i class="fas fa-check text-sm"></i>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-900">Course published</p>
                                    <p class="text-xs text-gray-500">UI/UX Design Principles</p>
                                    <p class="text-xs text-gray-400">1 day ago</p>
                                </div>
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