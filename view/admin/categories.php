<?php 
require_once __DIR__ . "/../../controller/admin/categoriesController.php";
require_once __DIR__ . "/../../helpers/helper.php";
require_once __DIR__ . "/../../helpers/CSRF.php";

$categories = $categoryController->getAllCategories();
// dd($categories);
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories & Tags Management - EduPro</title>
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
    <?php if(isset($_SESSION["successCAT"])): ?>
    <div id="successAlert" class="fixed top-20 right-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded z-50">
        <div class="flex items-center">
            <i class="fas fa-check-circle mr-2"></i>
            <span><?php echo $_SESSION["successCAT"]; ?></span>
            <button onclick="this.parentElement.parentElement.style.display='none'" class="ml-4">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <?php unset($_SESSION["successCAT"]); endif; ?>

    <?php if(isset($_SESSION["errorCAT"])): ?>
    <div id="errorAlert" class="fixed top-20 right-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded z-50">
        <div class="flex items-center">
            <i class="fas fa-exclamation-circle mr-2"></i>
            <span><?php echo $_SESSION["errorCAT"]; ?></span>
            <button onclick="this.parentElement.parentElement.style.display='none'" class="ml-4">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <?php unset($_SESSION["errorCAT"]); endif; ?>

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
                    <a href="#" class="text-primary-600">Categories</a>
                    <a href="tags.php" class="text-gray-600 hover:text-primary-600 transition-colors">Tags</a>
                    <a href="#" class="text-gray-600 hover:text-primary-600 transition-colors">Settings</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="pt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Categories Section -->
            <div class="mb-12">
                <div class="mb-8" data-aos="fade-up">
                    <h1 class="text-3xl font-bold text-gray-900">Categories Management</h1>
                    <p class="mt-2 text-gray-600">Manage course categories in your platform</p>
                </div>

                <div class="flex justify-end mb-4">
                    <button data-modal-target="add-category-modal" data-modal-toggle="add-category-modal" 
                            class="px-4 py-2 bg-primary-600 text-white rounded-lg hover:bg-primary-700 transition-colors flex items-center">
                        <i class="fas fa-plus mr-2"></i>
                        Add Category
                    </button>
                </div>

                <div class="bg-white/80 backdrop-blur-md rounded-xl shadow-lg overflow-hidden" data-aos="fade-up">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Courses</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created At</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php  foreach($categories as $category): ?>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $category['id'] ?></td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="text-sm font-medium text-gray-900"><?= $category['name'] ?></div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-primary-100 text-primary-800">
                                    <?= $categoryController->countCoursesBycategory($category['id']) ?> Courses
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= convertDateFormat($category['created_at'])  ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button onclick="openUpdateModal(<?= $category['id'] ?>, '<?= $category['name'] ?>')" data-modal-target="update-category-modal" data-modal-toggle="update-category-modal"  class="text-primary-600 hover:text-primary-900 mr-3">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <form method="POST" class="text-red-600 hover:text-red-900">
                                       <button type="submit"><i class="fas fa-trash"></i></button> 
                                        <input name="delete" type="hidden" value="2">       
                                        <input name="categoryId" type="hidden" value="<?= $category['id'] ?>">       
                                        <input name="CSRF" value="<?= generateCsrfToken() ?>" type="hidden">
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach ?>
                            <!-- Add more category rows here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <!-- Add Category Modal -->
    <div id="add-category-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">Add New Category</h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="add-category-modal">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <form class="categoryForm p-6" method="POST" onsubmit="return validateForm()">
                    <div class="mb-6">
                        <label for="category-name" class="block mb-2 text-sm font-medium text-gray-900">Category Name</label>
                        <input type="text" id="category-name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" required>
                        <span id="nameError" class="text-red-500 text-sm mt-1 hidden">Please enter a valid category name (3-50 characters, letters, numbers, spaces, and hyphens only)</span>
                        <input name="create" type="hidden" value="1">
                        <input name="CSRF" value="<?= generateCsrfToken() ?>" type="hidden">
                    </div>
                    <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition-colors">
                        Add Category
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- update Category Modal -->
    <div id="update-category-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">Update Category</h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="update-category-modal">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <form class="categoryForm p-6" method="POST" onsubmit="return validateForm_Update()">
                    <div class="mb-6">
                        <label for="category-name-update" class="block mb-2 text-sm font-medium text-gray-900">Category Name</label>
                        <input type="text" id="category-name-update" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" required>
                        <span id="nameError-update" class="text-red-500 text-sm mt-1 hidden">Please enter a valid category name (3-50 characters, letters, numbers, spaces, and hyphens only)</span>
                        <input name="update" type="hidden" value="3">
                        <input id="category-id-update" name="categoryId" type="hidden" value="">
                        <input name="CSRF" value="<?= generateCsrfToken() ?>" type="hidden">
                    </div>
                    <button type="submit" class="w-full text-white bg-green-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition-colors">
                        Update Category
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="../../Assets/js/sweetAlert.js"></script>
    <script src="../../Assets/js/aos.js"></script>
    <script>

        // Category name validation
        function validateForm() {
            const categoryName = document.getElementById('category-name').value.trim();
            const nameError = document.getElementById('nameError');
            const regex = /^[a-zA-Z0-9\s-]{3,50}$/;

            if (!regex.test(categoryName)) {
                nameError.classList.remove('hidden');
                return false;
            }
            nameError.classList.add('hidden');
            return true;
        }
        function validateForm_Update() {
            const categoryName = document.getElementById('category-name-update').value.trim();
            const nameError = document.getElementById('nameError-update');
            const regex = /^[a-zA-Z0-9\s-]{3,50}$/;

            if (!regex.test(categoryName)) {
                nameError.classList.remove('hidden');
                return false;
            }
            nameError.classList.add('hidden');
            return true;
        }

        // Clear form after successful submission
        <?php if(isset($_SESSION['successCAT'])): ?>
        document.querySelector('categoryForm').reset();
        const modal = document.getElementById('add-category-modal');
        const modalInstance = flowbite.Modal.getInstance(modal);
        if (modalInstance) {
            setTimeout(() => modalInstance.hide(), 1000);
        }
        <?php endif; ?>

        // Real-time validation
        document.getElementById('category-name').addEventListener('input', function() {
            const nameError = document.getElementById('nameError');
            const regex = /^[a-zA-Z0-9\s-]{3,50}$/;
            
            if (this.value.trim() !== '' && !regex.test(this.value.trim())) {
                nameError.classList.remove('hidden');
            } else {
                nameError.classList.add('hidden');
            }
        });
        document.getElementById('category-name-update').addEventListener('input', function() {
            const nameError = document.getElementById('nameError-update');
            const regex = /^[a-zA-Z0-9\s-]{3,50}$/;
            
            if (this.value.trim() !== '' && !regex.test(this.value.trim())) {
                nameError.classList.remove('hidden');
            } else {
                nameError.classList.add('hidden');
            }
        });

        function openUpdateModal(id, name) {
            // Set the category name in the update form
            document.getElementById('category-name-update').value = name;
            document.getElementById('category-id-update').value = id;
        }
    </script>
</body>
</html>
