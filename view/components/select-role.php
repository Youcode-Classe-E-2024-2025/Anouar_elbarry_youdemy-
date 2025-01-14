<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Your Role - EduPro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">
    <div class="container max-w-4xl mx-auto">
        <div class="text-center mb-12">
            <h1 class="text-3xl font-bold text-blue-600 mb-4">Welcome to EduPro</h1>
            <p class="text-gray-600">Choose your role to get started with your learning journey</p>
        </div>

        <form action="../../controller/select_role.php" method="POST">
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Student Card -->
                <div class="relative">
                    <input type="radio" name="role" id="student" value="student" class="hidden peer" required>
                    <label for="student" class="block p-6 bg-white rounded-2xl shadow-sm border-2 border-gray-200 cursor-pointer transition-all duration-300 hover:shadow-md hover:border-blue-500 peer-checked:border-blue-500 peer-checked:bg-blue-50">
                        <div class="text-center">
                            <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-user-graduate text-3xl text-blue-600"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Student</h3>
                            <p class="text-gray-600 mb-4">
                                Join as a student to access courses and start learning
                            </p>
                            <ul class="text-left text-sm text-gray-600 space-y-2">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Access all courses
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Track your progress
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Earn certificates
                                </li>
                            </ul>
                        </div>
                    </label>
                </div>

                <!-- Teacher Card -->
                <div class="relative">
                    <input type="radio" name="role" id="teacher" value="teacher" class="hidden peer">
                    <label for="teacher" class="block p-6 bg-white rounded-2xl shadow-sm border-2 border-gray-200 cursor-pointer transition-all duration-300 hover:shadow-md hover:border-blue-500 peer-checked:border-blue-500 peer-checked:bg-blue-50">
                        <div class="text-center">
                            <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-chalkboard-teacher text-3xl text-blue-600"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Teacher</h3>
                            <p class="text-gray-600 mb-4">
                                Join as a teacher to create and manage courses
                            </p>
                            <ul class="text-left text-sm text-gray-600 space-y-2">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Create courses
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Manage students
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Track analytics
                                </li>
                            </ul>
                        </div>
                    </label>
                </div>
            </div>

            <div class="text-center mt-8">
                <button type="submit" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors duration-300">
                    Continue
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </button>
            </div>
        </form>
    </div>
</body>
</html>
