<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Catalog - EduPro</title>
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
                    <a href="/" class="text-gray-600 hover:text-primary-600 transition-colors">Home</a>
                    <a href="#" class="text-primary-600">Courses</a>
                    <a href="#" class="text-gray-600 hover:text-primary-600 transition-colors">Features</a>
                    <a href="#" class="text-gray-600 hover:text-primary-600 transition-colors">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-24 pb-12 px-4">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-12" data-aos="fade-up">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Explore Our Courses</h1>
                <p class="text-lg text-gray-600">Discover a world of knowledge with our expert-led courses</p>
            </div>

            <!-- Filters -->
            <div class="mb-8 grid grid-cols-1 md:grid-cols-4 gap-4" data-aos="fade-up">
                <!-- Search -->
                <div class="md:col-span-2">
                    <input type="text" placeholder="Search courses..." class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                </div>
                <!-- Category Filter -->
                <div>
                    <select class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                        <option value="">All Categories</option>
                        <option value="web-development">Web Development</option>
                        <option value="design">Design</option>
                        <option value="business">Business</option>
                        <option value="marketing">Marketing</option>
                    </select>
                </div>
                <!-- Sort -->
                <div>
                    <select class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                        <option value="newest">Newest First</option>
                        <option value="popular">Most Popular</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                    </select>
                </div>
            </div>

            <!-- Course Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <?php
                // Sample course data - replace with database data
                $courses = [
                    [
                        'title' => 'Complete Web Development Bootcamp',
                        'instructor' => 'John Smith',
                        'rating' => 4.8,
                        'students' => 1234,
                        'price' => 99.99,
                        'image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085',
                        'category' => 'Web Development'
                    ],
                    [
                        'title' => 'UI/UX Design Masterclass',
                        'instructor' => 'Sarah Johnson',
                        'rating' => 4.9,
                        'students' => 856,
                        'price' => 89.99,
                        'image' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5',
                        'category' => 'Design'
                    ],
                    [
                        'title' => 'Digital Marketing Strategy',
                        'instructor' => 'Michael Chen',
                        'rating' => 4.7,
                        'students' => 2341,
                        'price' => 79.99,
                        'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f',
                        'category' => 'Marketing'
                    ],
                    // Add more courses as needed
                ];

                foreach ($courses as $course):
                ?>
                <!-- Course Card -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300" data-aos="fade-up">
                    <div class="relative">
                        <img src="<?= $course['image'] ?>" alt="<?= $course['title'] ?>" class="w-full h-48 object-cover">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-2 py-1 rounded-lg text-sm font-medium text-primary-600">
                            $<?= $course['price'] ?>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-primary-100 text-primary-600 px-2 py-1 rounded-full text-xs"><?= $course['category'] ?></span>
                            <div class="ml-auto flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="ml-1"><?= $course['rating'] ?></span>
                                <span class="mx-2">•</span>
                                <i class="fas fa-users text-gray-400"></i>
                                <span class="ml-1"><?= number_format($course['students']) ?></span>
                            </div>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2"><?= $course['title'] ?></h3>
                        <p class="text-sm text-gray-500 mb-4">By <?= $course['instructor'] ?></p>
                        <a href="course-details.php" class="block w-full text-center bg-primary-500 text-white py-2 rounded-lg hover:bg-primary-600 transition-colors">
                            View Course
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center space-x-2" data-aos="fade-up">
                <a href="#" class="px-4 py-2 border border-gray-200 rounded-lg hover:border-primary-500 hover:text-primary-600 transition-colors">
                    <i class="fas fa-chevron-left"></i>
                </a>
                <a href="#" class="px-4 py-2 border border-primary-500 bg-primary-500 text-white rounded-lg">1</a>
                <a href="#" class="px-4 py-2 border border-gray-200 rounded-lg hover:border-primary-500 hover:text-primary-600 transition-colors">2</a>
                <a href="#" class="px-4 py-2 border border-gray-200 rounded-lg hover:border-primary-500 hover:text-primary-600 transition-colors">3</a>
                <a href="#" class="px-4 py-2 border border-gray-200 rounded-lg hover:border-primary-500 hover:text-primary-600 transition-colors">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
</body>
</html>