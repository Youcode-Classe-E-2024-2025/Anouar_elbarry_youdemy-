<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Course - EduPro</title>
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
                    <a href="../teacher/dashboard.php" class="text-gray-600 hover:text-primary-600 transition-colors">Dashboard</a>
                    <a href="#" class="text-gray-600 hover:text-primary-600 transition-colors">My Courses</a>
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
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Breadcrumb -->
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="../teacher/dashboard.php" class="text-gray-700 hover:text-primary-600">
                            <i class="fas fa-home mr-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <span class="text-gray-500">Create New Course</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Course Creation Form -->
            <div class="bg-white/80 backdrop-blur-md rounded-xl shadow-lg p-6" data-aos="fade-up">
                <h1 class="text-2xl font-bold text-gray-900 mb-6">Create New Course</h1>
                
                <form action="#" method="POST" class="space-y-6">
                    <!-- Basic Information -->
                    <div class="space-y-4">
                        <h2 class="text-xl font-semibold text-gray-900">Basic Information</h2>
                        
                        <!-- Course Title -->
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Course Title</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">
                                    <i class="fas fa-book"></i>
                                </span>
                                <input type="text" id="title" name="title" 
                                       class="pl-10 w-full rounded-lg border-2 border-gray-200 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50 transition-colors duration-200"
                                       placeholder="e.g., Modern JavaScript 2025">
                            </div>
                        </div>

                        <!-- Category -->
                        <div>
                            <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">
                                    <i class="fas fa-folder"></i>
                                </span>
                                <select id="category" name="category" 
                                        class="pl-10 w-full rounded-lg border-2 border-gray-200 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50 transition-colors duration-200 appearance-none bg-white">
                                    <option value="">Select a category</option>
                                    <option value="web-development">Web Development</option>
                                    <option value="design">Design</option>
                                    <option value="business">Business</option>
                                    <option value="marketing">Marketing</option>
                                </select>
                                <span class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500 pointer-events-none">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </div>
                        </div>

                        <!-- Content Type -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Content Type</label>
                            <div class="mt-2 grid grid-cols-2 gap-4">
                                <label class="relative flex items-center justify-center p-4 rounded-lg border-2 border-gray-200 cursor-pointer hover:border-primary-500 transition-colors duration-200 group">
                                    <input type="radio" name="content_type" value="video" class="sr-only" checked>
                                    <div class="flex flex-col items-center">
                                        <i class="fas fa-video text-2xl text-gray-400 group-hover:text-primary-500 transition-colors duration-200"></i>
                                        <span class="mt-2 text-sm font-medium text-gray-900">Video Course</span>
                                    </div>
                                    <span class="absolute top-2 right-2 w-4 h-4 rounded-full border-2 border-gray-300 group-hover:border-primary-500 transition-colors duration-200"></span>
                                </label>
                                <label class="relative flex items-center justify-center p-4 rounded-lg border-2 border-gray-200 cursor-pointer hover:border-primary-500 transition-colors duration-200 group">
                                    <input type="radio" name="content_type" value="pdf" class="sr-only">
                                    <div class="flex flex-col items-center">
                                        <i class="fas fa-file-pdf text-2xl text-gray-400 group-hover:text-primary-500 transition-colors duration-200"></i>
                                        <span class="mt-2 text-sm font-medium text-gray-900">PDF Course</span>
                                    </div>
                                    <span class="absolute top-2 right-2 w-4 h-4 rounded-full border-2 border-gray-300 group-hover:border-primary-500 transition-colors duration-200"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Course Description -->
                    <div class="space-y-4">
                        <h2 class="text-xl font-semibold text-gray-900">Course Description</h2>
                        
                        <!-- Short Description -->
                        <div>
                            <label for="short_description" class="block text-sm font-medium text-gray-700 mb-1">Short Description</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">
                                    <i class="fas fa-align-left"></i>
                                </span>
                                <input type="text" id="short_description" name="short_description" 
                                       class="pl-10 w-full rounded-lg border-2 border-gray-200 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50 transition-colors duration-200"
                                       placeholder="Brief overview of your course">
                            </div>
                        </div>

                        <!-- Detailed Description -->
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Detailed Description</label>
                            <div class="relative">
                                <textarea id="description" name="description" rows="4" 
                                        class="pl-10 w-full rounded-lg border-2 border-gray-200 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50 transition-colors duration-200"
                                        placeholder="Provide a detailed description of your course"></textarea>
                                <span class="absolute top-3 left-3 text-gray-500">
                                    <i class="fas fa-paragraph"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Course Content -->
                    <div class="space-y-4">
                        <h2 class="text-xl font-semibold text-gray-900">Course Content</h2>
                        
                        <!-- Video URL or PDF Upload -->
                        <div id="video-input" class="space-y-4">
                            <label for="video_url" class="block text-sm font-medium text-gray-700 mb-1">Video URL</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">
                                    <i class="fab fa-youtube"></i>
                                </span>
                                <input type="url" id="video_url" name="video_url" 
                                       class="pl-10 w-full rounded-lg border-2 border-gray-200 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50 transition-colors duration-200"
                                       placeholder="e.g., https://youtube.com/...">
                            </div>
                        </div>
                        
                        <div id="pdf-input" class="space-y-4 hidden">
                            <label class="block text-sm font-medium text-gray-700 mb-1">PDF File</label>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-primary-500 transition-colors duration-200 group cursor-pointer">
                                <div class="space-y-1 text-center">
                                    <i class="fas fa-file-pdf text-gray-400 text-3xl mb-3 group-hover:text-primary-500 transition-colors duration-200"></i>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-none">
                                            <span>Upload a file</span>
                                            <input id="file-upload" name="file-upload" type="file" accept=".pdf" class="sr-only">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PDF up to 10MB</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div class="space-y-4">
                        <h2 class="text-xl font-semibold text-gray-900">Additional Information</h2>
                        
                        <!-- Tags -->
                        <div>
                            <label for="tags" class="block text-sm font-medium text-gray-700 mb-1">Tags</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">
                                    <i class="fas fa-tags"></i>
                                </span>
                                <input type="text" id="tags" name="tags" 
                                       class="pl-10 w-full rounded-lg border-2 border-gray-200 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50 transition-colors duration-200"
                                       placeholder="e.g., javascript, web development, programming">
                            </div>
                            <p class="mt-1 text-sm text-gray-500">Separate tags with commas</p>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button type="submit" 
                                class="w-full flex justify-center py-3 px-4 rounded-full shadow-lg text-sm font-medium text-white bg-gradient-to-r from-primary-600 to-secondary-500 hover:from-primary-700 hover:to-secondary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            Create Course
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true
        });

        // Toggle between video and PDF inputs
        const videoInput = document.getElementById('video-input');
        const pdfInput = document.getElementById('pdf-input');
        const contentTypeRadios = document.getElementsByName('content_type');

        contentTypeRadios.forEach(radio => {
            radio.addEventListener('change', (e) => {
                if (e.target.value === 'video') {
                    videoInput.classList.remove('hidden');
                    pdfInput.classList.add('hidden');
                } else {
                    videoInput.classList.add('hidden');
                    pdfInput.classList.remove('hidden');
                }
            });
        });

        // Add active states to content type radio buttons
        document.querySelectorAll('input[name="content_type"]').forEach(input => {
            const label = input.closest('label');
            input.addEventListener('change', () => {
                // Remove active state from all labels
                document.querySelectorAll('input[name="content_type"]').forEach(radio => {
                    const radioLabel = radio.closest('label');
                    if (radio.checked) {
                        radioLabel.classList.add('border-primary-500');
                        radioLabel.classList.add('bg-primary-50');
                        radioLabel.querySelector('.fa-video, .fa-file-pdf').classList.add('text-primary-500');
                        radioLabel.querySelector('.rounded-full').classList.add('bg-primary-500');
                    } else {
                        radioLabel.classList.remove('border-primary-500');
                        radioLabel.classList.remove('bg-primary-50');
                        radioLabel.querySelector('.fa-video, .fa-file-pdf').classList.remove('text-primary-500');
                        radioLabel.querySelector('.rounded-full').classList.remove('bg-primary-500');
                    }
                });
            });
        });

        // Trigger change event on the default selected radio button
        document.querySelector('input[name="content_type"]:checked').dispatchEvent(new Event('change'));

        // File upload preview
        const fileUpload = document.getElementById('file-upload');
        const dropZone = fileUpload.closest('div.border-dashed');
        
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropZone.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults (e) {
            e.preventDefault();
            e.stopPropagation();
        }

        ['dragenter', 'dragover'].forEach(eventName => {
            dropZone.addEventListener(eventName, highlight, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dropZone.addEventListener(eventName, unhighlight, false);
        });

        function highlight(e) {
            dropZone.classList.add('border-primary-500');
            dropZone.classList.add('bg-primary-50');
        }

        function unhighlight(e) {
            dropZone.classList.remove('border-primary-500');
            dropZone.classList.remove('bg-primary-50');
        }

        dropZone.addEventListener('drop', handleDrop, false);

        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;
            handleFiles(files);
        }

        function handleFiles(files) {
            if (files[0].type !== 'application/pdf') {
                alert('Please upload a PDF file');
                return;
            }
            if (files[0].size > 10 * 1024 * 1024) {
                alert('File size must be less than 10MB');
                return;
            }
            // Handle the file...
        }
    </script>
</body>
</html>