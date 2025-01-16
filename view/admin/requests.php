<?php
session_start();
require_once __DIR__ . "/../../modal/teacher.php"; 
require_once __DIR__ . "/../../modal/admin.php"; 
require_once __DIR__ . "/../../modal/user.php"; 
$teacher = new Teacher();
$teachers = $teacher->getteachersByStatus();
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Requests - EduPro</title>
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
      <!-- Success/Error Messages -->
      <?php if(isset($_SESSION["successRE"])): ?>
    <div id="successAlert" class="fixed top-20 right-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded z-50">
        <div class="flex items-center">
            <i class="fas fa-check-circle mr-2"></i>
            <span><?php echo $_SESSION["successRE"]; ?></span>
            <button onclick="this.parentElement.parentElement.style.display='none'" class="ml-4">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <?php unset($_SESSION["successRE"]); endif; ?>

    <?php if(isset($_SESSION["errorRE"])): ?>
    <div id="errorAlert" class="fixed top-4 right-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded z-50">
        <div class="flex items-center">
            <i class="fas fa-exclamation-circle mr-2"></i>
            <span><?php echo $_SESSION["errorRE"]; ?></span>
            <button onclick="this.parentElement.parentElement.style.display='none'" class="ml-4">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <?php unset($_SESSION["errorRE"]); endif; ?>
    <!-- Navigation -->
    <nav class="bg-white/80 backdrop-blur-md shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold bg-gradient-to-r from-primary-600 to-secondary-500 text-transparent bg-clip-text">EduPro</a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="dashboard.php" class="text-gray-600 hover:text-primary-600 transition-colors">Dashboard</a>
                    <a href="users.php" class="text-gray-600 hover:text-primary-600 transition-colors">Users</a>
                    <a href="courses.php" class="text-gray-600 hover:text-primary-600 transition-colors">Courses</a>
                    <a href="#" class="text-primary-600">Teacher Requests</a>
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
                <h1 class="text-3xl font-bold text-gray-900">Teacher Requests</h1>
                <p class="mt-2 text-gray-600">Review and manage teacher applications</p>
            </div>

            <!-- Filters -->
            <div class="mb-6 flex flex-wrap gap-4 items-center" data-aos="fade-up">
                <select class="px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                    <option value="">All Status</option>
                    <option value="pending">Pending</option>
                    <option value="approved">Approved</option>
                    <option value="rejected">Rejected</option>
                </select>
            </div>

            <!-- Requests Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" data-aos="fade-up">
                <!-- Request Card 1 -->
                 <?php 
                       foreach($teachers as $teacher):?>
                <div class="bg-white/80 backdrop-blur-md rounded-xl shadow-lg p-6">
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex items-center">
                            <img class="h-12 w-12 rounded-full" src="https://ui-avatars.com/api/?name=<?= $teacher['username'] ?>" alt="Applicant">
                            <div class="ml-3">
                                <h3 class="text-lg font-semibold text-gray-900"><?= $teacher['username'] ?></h3>
                                <p class="text-sm text-gray-500"><?= $teacher['email'] ?></p>
                            </div>
                        </div>
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">
                        <?= $teacher['status'] ?>
                        </span>
                    </div>
                    <div class="space-y-3 mb-4">
                        <div>
                            <span class="text-sm font-medium text-gray-500">Application Date:</span>
                            <p class="text-sm text-gray-900"><?= $teacher['created_At'] ?></p>
                        </div>
                    </div>
                    <?php if(($teacher['status'] !== 'ACTIVE') && ($teacher['status'] !== 'REJECTED')): ?>
                    <div class="flex space-x-2">
                        <a href="../../controller/admin/requestsController.php?id=<?= htmlspecialchars($teacher['id'] ?? '') ?>&action=Accept" class="flex-1 px-4 py-2 bg-primary-500 text-white rounded-lg hover:bg-primary-600 transition-colors">
                            Accept
                        </a>
                        <a href="../../controller/admin/requestsController.php?id=<?= htmlspecialchars($teacher['id']) ?? ''?>&action=Reject" class="flex-1 px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors">
                            Reject
                        </a>
                    </div>
                    <?php endif ?>
                </div>
               <?php endforeach ?>
            </div>
        </div>
    </main>
    <script src="../../Assets/js/sweetAlert.js"></script>
    <script src="../../Assets/js/aos.js"></script>
</body>
</html>