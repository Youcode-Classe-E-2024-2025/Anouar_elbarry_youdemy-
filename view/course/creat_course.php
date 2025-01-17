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
                                       class="pl-10 py-2 w-full rounded-lg border-2 border-gray-200 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50 transition-colors duration-200"
                                       placeholder="e.g., Modern JavaScript 2025">
                            </div>
                        </div>
                        <!-- Course background -->
                        <div>
                            <label for="background_url" class="block text-sm font-medium text-gray-700 mb-1">Course Background Image</label>
                            <div class="grid grid-cols-1 gap-4">
                                <!-- URL Input -->
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">
                                        <i class="fas fa-image"></i>
                                    </span>
                                    <input type="url" id="background_url" name="background_url" required
                                           class="pl-10 py-2 w-full rounded-lg border-2 border-gray-200 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50 transition-colors duration-200"
                                           placeholder="https://example.com/image.jpg">
                                </div>
                                
                                <!-- Image Preview -->
                                <div id="image-preview" class="hidden">
                                    <div class="relative rounded-lg overflow-hidden bg-gray-50 border-2 border-gray-200">
                                        <img id="preview-img" src="" alt="Background Preview" class="w-full h-48 object-cover">
                                        <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-200">
                                            <button type="button" id="remove-image" class="text-white bg-red-500 hover:bg-red-600 px-4 py-2 rounded-lg transition-colors duration-200">
                                                <i class="fas fa-trash mr-2"></i>Remove Image
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Upload Alternative -->
                                <div class="relative">
                                    <div class="text-center">
                                        <span class="text-sm text-gray-500">or</span>
                                    </div>
                                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-200 border-dashed rounded-lg hover:border-primary-500 transition-colors duration-200 cursor-pointer">
                                        <div class="space-y-1 text-center">
                                            <i class="fas fa-cloud-upload-alt text-gray-400 text-3xl mb-3"></i>
                                            <div class="flex text-sm text-gray-600">
                                                <label for="background-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-none">
                                                    <span>Upload a file</span>
                                                    <input id="background-upload" name="background-upload" type="file" class="sr-only" accept="image/*">
                                                </label>
                                                <p class="pl-1">or drag and drop</p>
                                            </div>
                                            <p class="text-xs text-gray-500">PNG, JPG, GIF up to 5MB</p>
                                        </div>
                                    </div>
                                </div>
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
                                        class="pl-10 py-2 w-full rounded-lg border-2 border-gray-200 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50 transition-colors duration-200 appearance-none bg-white">
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
                                    <input type="radio" name="content_type" value="static" class="sr-only">
                                    <div class="flex flex-col items-center">
                                        <i class="fas fa-file-alt text-2xl text-gray-400 group-hover:text-primary-500 transition-colors duration-200"></i>
                                        <span class="mt-2 text-sm font-medium text-gray-900">Static Content</span>
                                    </div>
                                    <span class="absolute top-2 right-2 w-4 h-4 rounded-full border-2 border-gray-300 group-hover:border-primary-500 transition-colors duration-200"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Course Description -->
                    <div class="space-y-4">
                        <h2 class="text-xl font-semibold text-gray-900">Course Description</h2>
                        

                        <!-- Detailed Description -->
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Detailed Description</label>
                            <div class="relative">
                                <textarea id="description" name="description" rows="4" 
                                        class="pl-10 pt-2 w-full rounded-lg border-2 border-gray-200 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50 transition-colors duration-200"
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
                        
                        <div id="video-input" class="space-y-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Course Video</label>
                            
                            <!-- Upload Zone -->
                            <div class="relative">
                                <div id="video-drop-zone" class="border-2 border-dashed border-gray-300 rounded-lg p-6 transition-all duration-200 ease-in-out hover:border-primary-500 hover:bg-primary-50">
                                    <div class="space-y-4 text-center">
                                        <div class="space-y-2">
                                            <i class="fas fa-cloud-upload-alt text-4xl text-gray-400"></i>
                                            <h4 class="text-gray-700 font-medium">Drag and drop your video here</h4>
                                            <p class="text-sm text-gray-500">or</p>
                                            <div>
                                                <label class="inline-flex items-center px-4 py-2 bg-primary-600 text-white rounded-lg hover:bg-primary-700 cursor-pointer transition duration-200">
                                                    <i class="fas fa-plus mr-2"></i>
                                                    <span>Select Video</span>
                                                    <input type="file" class="hidden" id="video-upload" accept="video/*">
                                                </label>
                                            </div>
                                            <p class="text-xs text-gray-500 mt-2">MP4, WebM or Ogg (Max. 500MB)</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Video Preview -->
                                <div id="video-preview" class="hidden mt-4">
                                    <div class="relative rounded-lg overflow-hidden bg-gray-50 border-2 border-gray-200">
                                        <video id="preview-video" class="w-full h-auto" controls>
                                            Your browser does not support the video tag.
                                        </video>
                                        <div class="absolute top-4 right-4 flex space-x-2">
                                            <button type="button" id="remove-video" class="p-2 bg-red-500 text-white rounded-full hover:bg-red-600 transition-colors duration-200">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                    
                                    <!-- Upload Progress -->
                                    <div id="upload-progress" class="hidden mt-4">
                                        <div class="flex items-center justify-between text-sm text-gray-600 mb-1">
                                            <span id="progress-text">Uploading...</span>
                                            <span id="progress-percentage">0%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div id="progress-bar" class="bg-primary-600 h-2 rounded-full transition-all duration-300" style="width: 0%"></div>
                                        </div>
                                    </div>

                                    <!-- File Info -->
                                    <div id="video-info" class="mt-4 p-4 bg-gray-50 rounded-lg border border-gray-200">
                                        <div class="flex items-start space-x-3">
                                            <i class="fas fa-file-video text-gray-400 mt-1"></i>
                                            <div class="flex-1">
                                                <p id="video-name" class="text-sm font-medium text-gray-700 truncate"></p>
                                                <p id="video-size" class="text-xs text-gray-500"></p>
                                            </div>
                                            <span id="upload-status" class="px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">
                                                Ready to upload
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="static-input" class="space-y-4 hidden">
                            <div class="mb-8">
                                <h2 class="text-2xl font-bold text-gray-900 mb-4">Static Content</h2>
                                <div class="bg-white/80 backdrop-blur-md rounded-xl shadow-lg p-6">
                                    <!-- Markdown Editor -->
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Content (Markdown)</label>
                                        <div class="flex gap-4">
                                            <div class="flex-1">
                                                <textarea id="markdownInput" rows="12" class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 font-mono" placeholder="Write your content in Markdown...
Example:
# Main Title
## Subtitle
- List item 1
- List item 2

**Bold text** and *italic text*

[Link text](https://example.com)

```javascript
console.log('Code block');
``>
"></textarea>
                                            </div>
                                            <div class="flex-1">
                                                <div id="markdownPreview" class="prose max-w-none p-4 border border-gray-200 rounded-lg h-full overflow-y-auto bg-white">
                                                    <!-- Preview will be rendered here -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Markdown Tips -->
                                    <div class="mt-4 bg-primary-50 rounded-lg p-4">
                                        <h3 class="text-sm font-semibold text-primary-900 mb-2">Markdown Tips</h3>
                                        <div class="grid grid-cols-2 gap-4 text-sm">
                                            <div>
                                                <p class="font-medium text-primary-800">Basic Syntax:</p>
                                                <ul class="space-y-1 text-primary-700">
                                                    <li># Heading 1</li>
                                                    <li>## Heading 2</li>
                                                    <li>**Bold Text**</li>
                                                    <li>*Italic Text*</li>
                                                    <li>- List Item</li>
                                                </ul>
                                            </div>
                                            <div>
                                                <p class="font-medium text-primary-800">Advanced:</p>
                                                <ul class="space-y-1 text-primary-700">
                                                    <li>[Link](url)</li>
                                                    <li>![Image](url)</li>
                                                    <li>```code block```</li>
                                                    <li>> Blockquote</li>
                                                    <li>--- Horizontal Rule</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
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
                                       class="pl-10 py-2 w-full rounded-lg border-2 border-gray-200 shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50 transition-colors duration-200"
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
    <script src="../../Assets/js/aos.js"></script>
    <script>
        // Toggle between video and static inputs
        const videoInput = document.getElementById('video-input');
        const staticInput = document.getElementById('static-input');
        const contentTypeRadios = document.getElementsByName('content_type');

        contentTypeRadios.forEach(radio => {
            radio.addEventListener('change', (e) => {
                if (e.target.value === 'video') {
                    videoInput.classList.remove('hidden');
                    staticInput.classList.add('hidden');
                } else {
                    videoInput.classList.add('hidden');
                    staticInput.classList.remove('hidden');
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
                        radioLabel.querySelector('.fa-video, .fa-file-alt').classList.add('text-primary-500');
                        radioLabel.querySelector('.rounded-full').classList.add('bg-primary-500');
                    } else {
                        radioLabel.classList.remove('border-primary-500');
                        radioLabel.classList.remove('bg-primary-50');
                        radioLabel.querySelector('.fa-video, .fa-file-alt').classList.remove('text-primary-500');
                        radioLabel.querySelector('.rounded-full').classList.remove('bg-primary-500');
                    }
                });
            });
        });

        // Trigger change event on the default selected radio button
        document.querySelector('input[name="content_type"]:checked').dispatchEvent(new Event('change'));

        // Image Preview Functionality
        const backgroundUrl = document.getElementById('background_url');
        const imagePreview = document.getElementById('image-preview');
        const previewImg = document.getElementById('preview-img');
        const removeImageBtn = document.getElementById('remove-image');
        const backgroundUpload = document.getElementById('background-upload');
        const dropZone = backgroundUpload.closest('div.border-dashed');

        // URL Input Preview
        backgroundUrl.addEventListener('input', function() {
            if (this.value) {
                previewImg.src = this.value;
                imagePreview.classList.remove('hidden');
                previewImg.onerror = function() {
                    imagePreview.classList.add('hidden');
                    backgroundUrl.classList.add('border-red-500');
                    // Show error message
                    if (!document.getElementById('image-error')) {
                        const errorMsg = document.createElement('p');
                        errorMsg.id = 'image-error';
                        errorMsg.className = 'mt-1 text-sm text-red-500';
                        errorMsg.textContent = 'Please enter a valid image URL';
                        backgroundUrl.parentNode.appendChild(errorMsg);
                    }
                };
                previewImg.onload = function() {
                    backgroundUrl.classList.remove('border-red-500');
                    const errorMsg = document.getElementById('image-error');
                    if (errorMsg) errorMsg.remove();
                };
            } else {
                imagePreview.classList.add('hidden');
            }
        });

        // Initialize Markdown preview
        const markdownInput = document.getElementById('markdownInput');
        const markdownPreview = document.getElementById('markdownPreview');

        function updatePreview() {
            const markdown = markdownInput.value;
            const html = marked.parse(markdown);
            markdownPreview.innerHTML = html;
        }

        markdownInput.addEventListener('input', updatePreview);
        
        // Initial preview
        updatePreview();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
</body>
</html>