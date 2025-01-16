<?php
include_once __DIR__ ."/../../controller/courseControler.php";
include_once __DIR__ ."/../../helpers/helper.php";
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern JavaScript 2025 - EduPro</title>
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
                    <a href="dashboard.html" class="text-gray-600 hover:text-primary-600 transition-colors">My Learning</a>
                    <a href="#" class="text-gray-600 hover:text-primary-600 transition-colors">Browse</a>
                    <div class="relative group">
                        <button class="flex items-center space-x-2 text-gray-600 hover:text-primary-600 transition-colors">
                            <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=John+Doe" alt="John Doe">
                            <span>John Doe</span>
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
            <!-- Breadcrumb -->
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="#" onclick="history.back()" class="text-gray-700 hover:text-primary-600">
                            <i class="fas fa-home mr-2"></i>
                            Back
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <span class="text-gray-500"><?= $course['title'] ?></span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Course Header -->
            <div class="bg-white/80 backdrop-blur-md rounded-xl shadow-lg overflow-hidden mb-8" data-aos="fade-up">
                <div class="relative h-64 md:h-96">
                    <img src="<?= $course['img_cover'] ?>" 
                         alt="Course Cover" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <div class="flex items-center space-x-2 mb-2">
                            <span class="px-2 py-1 text-xs font-semibold bg-white/20 rounded-full">
                                Web Development
                            </span>
                            <span class="px-2 py-1 text-xs font-semibold bg-white/20 rounded-full">
                                <i class="fas fa-video"></i> <?= $course['content'] ?>
                            </span>
                        </div>
                        <h1 class="text-3xl font-bold mb-2"><?= $course['title'] ?></h1>
                        <div class="flex items-center space-x-4">
                            <div class="flex items-center space-x-2">
                                <img src="https://ui-avatars.com/api/?name=<?= $course['instructor'] ?>" 
                                     alt="Instructor" 
                                     class="w-8 h-8 rounded-full border-2 border-white">
                                <span>Instructor: <?= $course['instructor'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course Content -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <!-- Description -->
                    <div class="bg-white/80 backdrop-blur-md rounded-xl shadow-lg p-6 mb-8" data-aos="fade-up">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Course Description</h2>
                        <div class="prose max-w-none">
                            <p class="text-gray-600"><?= $course['description'] ?>.</p>
                           
                        </div>
                    </div>

                    <!-- Course Content -->
                    <div class="bg-white/80 backdrop-blur-md rounded-xl shadow-lg p-6" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Course Content</h2>
                        <div class="space-y-4">
                            <div class="aspect-w-16 aspect-h-9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/siQUekpmImw?si=dxPSr81YKsF-mmHT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <div class="bg-white/80 backdrop-blur-md rounded-xl shadow-lg p-6 sticky top-24" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-xl font-bold text-gray-900 mb-4">Course Information</h2>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-3">
                                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-primary-50 text-primary-600">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Category</p>
                                    <p class="font-medium text-gray-900"><?= $course['category'] ?></p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-3">
                                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-primary-50 text-primary-600">
                                    <?php if($course['content'] === 'video') :?>
                                    <i class="fas fa-video"></i>
                                    <?php else :?>
                                    <i class="fas fa-file-alt"></i>
                                    <?php endif ?>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Content Type</p>
                                    <p class="font-medium text-gray-900"><?= $course['content'] ?> Course</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-3">
                                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-primary-50 text-primary-600">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Instructor</p>
                                    <p class="font-medium text-gray-900"><?= $course['instructor'] ?></p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-3">
                                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-primary-50 text-primary-600">
                                    <i class="fas fa-calendar"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Last Updated</p>
                                    <p class="font-medium text-gray-900"><?= convertDateFormat($course['created_At']) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="../../Assets/js/aos.js"></script>
</body>
</html>
