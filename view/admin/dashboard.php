<?php 
require_once __DIR__ . "/../../controller/admin/requestsController.php";  
require_once __DIR__ . "/../../controller/admin/dashboard.php";  

?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - EduPro</title>
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
                    <a href="#" class="text-gray-600 hover:text-primary-600 transition-colors">Users</a>
                    <a href="#" class="text-gray-600 hover:text-primary-600 transition-colors">Settings</a>
                    <div class="relative group">
                        <button class="flex items-center space-x-2 text-gray-600 hover:text-primary-600 transition-colors">
                            <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=Admin" alt="Admin">
                            <span>Admin</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg py-2 hidden group-hover:block">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50">Profile Settings</a>
                            <a href="../../controller/signout.php" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50">Sign Out</a>
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
                    Welcome, <span class="bg-gradient-to-r from-primary-600 to-secondary-500 text-transparent bg-clip-text">Administrator</span>
                </h1>
                <p class="mt-2 text-gray-600">Monitor and manage your platform's performance</p>
            </div>

            <!-- Quick Stats -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-4 mb-8">
                <!-- Total Users -->
                <div class="bg-white/80 backdrop-blur-md p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-full bg-gradient-to-r from-primary-500 to-secondary-500 text-white">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">Total Users</h3>
                            <p class="text-2xl font-bold bg-gradient-to-r from-primary-600 to-secondary-500 text-transparent bg-clip-text"><?= $countUsers ?></p>
                        </div>
                    </div>
                </div>

                <!-- Active Courses -->
                <div class="bg-white/80 backdrop-blur-md p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-full bg-gradient-to-r from-primary-500 to-secondary-500 text-white">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">Active Courses</h3>
                            <p class="text-2xl font-bold bg-gradient-to-r from-primary-600 to-secondary-500 text-transparent bg-clip-text"><?= $countCourses ?></p>
                        </div>
                    </div>
                </div>

                <!-- Teachers -->
                <div class="bg-white/80 backdrop-blur-md p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-full bg-gradient-to-r from-primary-500 to-secondary-500 text-white">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">Teachers</h3>
                            <p class="text-2xl font-bold bg-gradient-to-r from-primary-600 to-secondary-500 text-transparent bg-clip-text"><?= $countTeachers ?></p>
                        </div>
                    </div>
                </div>

                <!-- Categories -->
                <div class="bg-white/80 backdrop-blur-md p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-full bg-gradient-to-r from-primary-500 to-secondary-500 text-white">
                            <i class="fas fa-folder"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">Categories</h3>
                            <p class="text-2xl font-bold bg-gradient-to-r from-primary-600 to-secondary-500 text-transparent bg-clip-text"><?= $countCategories ?></p>
                        </div>
                    </div>
                </div>

                <!-- Tags -->
                <div class="bg-white/80 backdrop-blur-md p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="500">
                    <div class="flex items-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-full bg-gradient-to-r from-primary-500 to-secondary-500 text-white">
                            <i class="fas fa-tags"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">Tags</h3>
                            <p class="text-2xl font-bold bg-gradient-to-r from-primary-600 to-secondary-500 text-transparent bg-clip-text"><?= $countTags ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-4 ">
               

             <!-- Quick Actions -->
             <div class="lg:col-span-2 lg:col-start-2 ">
                    <div class="bg-white/80 backdrop-blur-md rounded-xl shadow-lg p-6" data-aos="fade-up">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Quick Actions</h2>
                        <div class="grid grid-cols-3 gap-4">
                            <!-- Top (Users) -->
                            <div class="col-start-2">
                                <a href="users.php" class="flex items-center h-24 justify-center p-4 rounded-lg border border-gray-200 hover:bg-primary-100 transition-colors group">
                                    <div class="flex flex-col items-center text-center">
                                        <i class="fas fa-users text-3xl text-gray-400 group-hover:text-primary-500 mb-2"></i>
                                        <span class="text-sm font-medium text-gray-700 group-hover:text-primary-600">Manage Users</span>
                                    </div>
                                </a>
                            </div>

                            <!-- Left (Categories) -->
                            <div class="row-start-2">
                                <a href="categories.php" class="flex items-center h-24 justify-center p-4 rounded-lg border border-gray-200 hover:bg-primary-100 transition-colors group">
                                    <div class="flex flex-col items-center text-center">
                                        <i class="fas fa-folder text-3xl text-gray-400 group-hover:text-primary-500 mb-2"></i>
                                        <span class="text-sm font-medium text-gray-700 group-hover:text-primary-600">Manage Categories</span>
                                    </div>
                                </a>
                            </div>

                            <!-- Center (Content) -->
                            <div class="row-start-2">
                                <a href="courses.php" class="flex items-center h-24 justify-center p-4 rounded-lg border border-gray-200 hover:bg-primary-100 transition-colors group">
                                    <div class="flex flex-col items-center text-center">
                                        <i class="fas fa-book text-3xl text-gray-400 group-hover:text-primary-500 mb-2"></i>
                                        <span class="text-sm font-medium text-gray-700 group-hover:text-primary-600">Manage Content</span>
                                    </div>
                                </a>
                            </div>

                            <!-- Right (Tags) -->
                            <div class="row-start-2">
                                <a href="tags.php" class="flex items-center h-24 justify-center p-4 rounded-lg border border-gray-200 hover:bg-primary-100 transition-colors group">
                                    <div class="flex flex-col items-center text-center">
                                        <i class="fas fa-tags text-3xl text-gray-400 group-hover:text-primary-500 mb-2"></i>
                                        <span class="text-sm font-medium text-gray-700 group-hover:text-primary-600">Manage Tags</span>
                                    </div>
                                </a>
                            </div>

                            <!-- Bottom (Teacher Requests) -->
                            <div class="col-start-2 row-start-3">
                                <a href="requests.php" class="flex items-center h-24 justify-center p-4 rounded-lg border border-gray-200 hover:bg-primary-100 transition-colors group">
                                    <div class="flex flex-col items-center text-center">
                                        <i class="fas fa-chalkboard-teacher text-3xl text-gray-400 group-hover:text-primary-500 mb-2"></i>
                                        <span class="text-sm font-medium text-gray-700 group-hover:text-primary-600">Teacher Requests</span>
                                        <?php if($requests > 0): ?>
                                        <span class="mt-1 bg-primary-100 text-primary-600 text-xs px-2 py-1 rounded-full"><?= $requests ?></span>
                                        <?php endif ?>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="../../Assets/js/sweetAlert.js"></script>
    <script src="../../Assets/js/aos.js"></script>
</body>
</html>