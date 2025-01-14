<?php
session_start();
if (!isset($_SESSION['userId']) || $_SESSION['role'] !== 'student') {
    header('Location: ../auth/auth.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - EduPro</title>
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
                    <a href="#" class="text-gray-600 hover:text-primary-600 transition-colors">My Learning</a>
                    <a href="#" class="text-gray-600 hover:text-primary-600 transition-colors">Browse</a>
                    <div class="relative group">
                        <button class="flex items-center space-x-2 text-gray-600 hover:text-primary-600 transition-colors">
                            <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=<?= $_SESSION['username'] ?>" alt="<?= $_SESSION['username'] ?>">
                            <span><?= $_SESSION['username'] ?></span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg py-2 hidden group-hover:block">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50">Profile Settings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50">Certificates</a>
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
                    Welcome back, <span class="bg-gradient-to-r from-primary-600 to-secondary-500 text-transparent bg-clip-text"><?= $_SESSION['username'] ?></span>
                </h1>
                <p class="mt-2 text-gray-600">Pick up where you left off</p>
            </div>

            <!-- Course Progress -->
            <div class="mb-8" data-aos="fade-up">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Continue Learning</h2>
                <div class="bg-white/80 backdrop-blur-md rounded-xl shadow-lg p-6">
                    <div class="flex flex-col md:flex-row items-start space-y-4 md:space-y-0 md:space-x-6">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085" 
                             alt="Course Thumbnail" 
                             class="w-full md:w-64 h-40 object-cover rounded-lg">
                        <div class="flex-1">
                            <div class="flex items-center space-x-2 mb-2">
                                <span class="px-2 py-1 text-xs font-semibold text-primary-800 bg-primary-100 rounded-full">Web Development</span>
                                <span class="text-sm text-gray-500">•</span>
                                <span class="text-sm text-gray-500"><i class="fas fa-video"></i> Video Course</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Modern JavaScript 2025</h3>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4">
                                    <img src="https://ui-avatars.com/api/?name=John+Doe" alt="Instructor" class="w-8 h-8 rounded-full">
                                    <span class="text-sm text-gray-600">Instructor: John Doe</span>
                                </div>
                                <a href="#" class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium shadow-lg bg-gradient-to-r from-primary-600 to-secondary-500 text-white hover:from-primary-700 hover:to-secondary-600 transition-all">
                                    View Details
                                    <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enrollment Stats -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                <div class="bg-white/80 backdrop-blur-md p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-full bg-gradient-to-r from-primary-500 to-secondary-500 text-white">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">Active Courses</h3>
                            <p class="text-2xl font-bold bg-gradient-to-r from-primary-600 to-secondary-500 text-transparent bg-clip-text">4</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white/80 backdrop-blur-md p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-full bg-gradient-to-r from-primary-500 to-secondary-500 text-white">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">Completed</h3>
                            <p class="text-2xl font-bold bg-gradient-to-r from-primary-600 to-secondary-500 text-transparent bg-clip-text">6</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white/80 backdrop-blur-md p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-full bg-gradient-to-r from-primary-500 to-secondary-500 text-white">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">Certificates</h3>
                            <p class="text-2xl font-bold bg-gradient-to-r from-primary-600 to-secondary-500 text-transparent bg-clip-text">3</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enrolled Courses -->
            <div class="mb-8" data-aos="fade-up">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">My Courses</h2>
                    <div class="flex items-center space-x-4">
                        <select class="bg-white/80 backdrop-blur-md rounded-lg border-gray-200 text-sm focus:border-primary-500 focus:ring-primary-500">
                            <option>All Categories</option>
                            <option>Web Development</option>
                            <option>Design</option>
                            <option>Marketing</option>
                        </select>
                        <select class="bg-white/80 backdrop-blur-md rounded-lg border-gray-200 text-sm focus:border-primary-500 focus:ring-primary-500">
                            <option>All Status</option>
                            <option>Active</option>
                            <option>Completed</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Course Card 1 -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 group">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085" 
                                 alt="Course" 
                                 class="w-full h-48 object-cover rounded-t-xl group-hover:opacity-75 transition-opacity">
                            <div class="absolute top-4 right-4">
                                <span class="px-2 py-1 text-xs font-semibold text-primary-800 bg-primary-100 rounded-full">Active</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-medium text-primary-600">Web Development</span>
                                <span class="text-sm text-gray-500"><i class="fas fa-video"></i> Video</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-4 group-hover:text-primary-600">Modern JavaScript 2025</h3>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-2">
                                    <img src="https://ui-avatars.com/api/?name=John+Doe" alt="Instructor" class="w-6 h-6 rounded-full">
                                    <span class="text-sm text-gray-600">John Doe</span>
                                </div>
                                <a href="#" class="text-primary-600 hover:text-primary-700 font-medium text-sm">View Details →</a>
                            </div>
                        </div>
                    </div>

                    <!-- Course Card 2 -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 group">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1517180102446-f3ece451e9d8" 
                                 alt="Course" 
                                 class="w-full h-48 object-cover rounded-t-xl group-hover:opacity-75 transition-opacity">
                            <div class="absolute top-4 right-4">
                                <span class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">Completed</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-medium text-primary-600">Design</span>
                                <span class="text-sm text-gray-500"><i class="fas fa-file-pdf"></i> PDF</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-4 group-hover:text-primary-600">UI/UX Design Principles</h3>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-2">
                                    <img src="https://ui-avatars.com/api/?name=Jane+Smith" alt="Instructor" class="w-6 h-6 rounded-full">
                                    <span class="text-sm text-gray-600">Jane Smith</span>
                                </div>
                                <a href="#" class="text-primary-600 hover:text-primary-700 font-medium text-sm">View Details →</a>
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
