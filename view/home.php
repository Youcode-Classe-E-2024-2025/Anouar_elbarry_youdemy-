<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduPro - Online Learning Platform</title>
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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body class="bg-gradient-to-b from-primary-50 to-white">
    <!-- Navigation -->
    <nav class="bg-white/80 backdrop-blur-md shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold bg-gradient-to-r from-primary-600 to-secondary-500 text-transparent bg-clip-text">EduPro</a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/courses.html" class="text-gray-600 hover:text-primary-600 transition-colors">Courses</a>
                    <a href="#features" class="text-gray-600 hover:text-primary-600 transition-colors">Features</a>
                    <a href="#testimonials" class="text-gray-600 hover:text-primary-600 transition-colors">Testimonials</a>
                    <a href="view/auth/auth.php" class="text-primary-600 hover:text-primary-700">Login</a>
                    <a href="view/auth/auth.php" class="text-primary-600 hover:text-primary-700">Dashboard</a>
                    <a href="view/auth/auth.php" class="bg-gradient-to-r from-primary-600 to-secondary-500 text-white px-6 py-2 rounded-full hover:from-primary-700 hover:to-secondary-600 transition-colors shadow-lg hover:shadow-primary-500/25">
                        Sign Up
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left" data-aos="fade-right">
                    <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                        Learn Online with 
                        <span class="bg-gradient-to-r from-primary-600 to-secondary-500 text-transparent bg-clip-text">Expert Instructors</span>
                    </h1>
                    <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                        Discover thousands of courses in web development, design, marketing, and more.
                        Learn at your own pace and earn industry-recognized certifications.
                    </p>
                    <div class="mt-8 sm:max-w-lg sm:mx-auto sm:text-center lg:text-left">
                        <a href="/courses.html" class="inline-flex items-center px-8 py-3 rounded-full text-base font-medium shadow-lg bg-gradient-to-r from-primary-600 to-secondary-500 text-white hover:from-primary-700 hover:to-secondary-600 transition-all hover:shadow-primary-500/25">
                            Start Learning Now
                            <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center" data-aos="fade-left">
                    <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80" 
                             alt="Students learning" 
                             class="w-full rounded-lg shadow-xl transform transition-all hover:scale-105 duration-300">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center" data-aos="fade-up">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Why Choose EduPro?
                </h2>
                <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-500">
                    A complete platform for your online learning journey
                </p>
            </div>

            <div class="mt-20 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Feature 1 -->
                <div class="flex flex-col items-center p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-gradient-to-r from-primary-500 to-secondary-500 text-white">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h3 class="mt-8 text-lg font-medium text-gray-900">Quality Courses</h3>
                    <p class="mt-2 text-base text-gray-500 text-center">
                        Courses created by industry-recognized experts
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="flex flex-col items-center p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-gradient-to-r from-primary-500 to-secondary-500 text-white">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="mt-8 text-lg font-medium text-gray-900">Flexible Learning</h3>
                    <p class="mt-2 text-base text-gray-500 text-center">
                        Learn at your own pace, anywhere, anytime
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="flex flex-col items-center p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-gradient-to-r from-primary-500 to-secondary-500 text-white">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="mt-8 text-lg font-medium text-gray-900">Certifications</h3>
                    <p class="mt-2 text-base text-gray-500 text-center">
                        Earn industry-recognized certifications
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center" data-aos="fade-up">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    What Our Students Say
                </h2>
            </div>
            <div class="mt-20 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Testimonial 1 -->
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center">
                        <img class="h-12 w-12 rounded-full" src="https://ui-avatars.com/api/?name=Sarah+Johnson" alt="Sarah Johnson">
                        <div class="ml-4">
                            <h4 class="text-lg font-bold">Sarah Johnson</h4>
                            <p class="text-gray-500">Web Developer</p>
                        </div>
                    </div>
                    <p class="mt-4 text-gray-600">
                        "Thanks to EduPro, I acquired the skills needed to become a web developer. The courses are well-structured and the instructors are excellent."
                    </p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center">
                        <img class="h-12 w-12 rounded-full" src="https://ui-avatars.com/api/?name=Tom+Wilson" alt="Tom Wilson">
                        <div class="ml-4">
                            <h4 class="text-lg font-bold">Tom Wilson</h4>
                            <p class="text-gray-500">UI/UX Designer</p>
                        </div>
                    </div>
                    <p class="mt-4 text-gray-600">
                        "The quality of design courses is exceptional. I was able to build my portfolio and land a job at a major company."
                    </p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center">
                        <img class="h-12 w-12 rounded-full" src="https://ui-avatars.com/api/?name=Mary+Smith" alt="Mary Smith">
                        <div class="ml-4">
                            <h4 class="text-lg font-bold">Mary Smith</h4>
                            <p class="text-gray-500">Digital Marketing</p>
                        </div>
                    </div>
                    <p class="mt-4 text-gray-600">
                        "The digital marketing courses helped me launch my own business. The content is always up-to-date with the latest trends."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-primary-600 to-secondary-500">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl" data-aos="fade-right">
                <span class="block">Ready to Get Started?</span>
                <span class="block text-secondary-100">Join thousands of successful students.</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0" data-aos="fade-left">
                <div class="inline-flex rounded-full shadow">
                    <a href="/signup.html" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-full text-primary-600 bg-white hover:bg-primary-50 transition-colors">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script>
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
    </script>
</body>
</html>
