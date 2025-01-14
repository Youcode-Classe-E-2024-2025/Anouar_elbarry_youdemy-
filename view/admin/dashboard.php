<!DOCTYPE html>
<html lang="fr" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {"50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554"}
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 dark:bg-gray-900">
    <div class="min-h-screen">
        <!-- Sidebar -->
        <aside class="fixed inset-y-0 left-0 bg-white dark:bg-gray-800 shadow-lg max-h-screen w-64">
            <div class="flex flex-col justify-between h-full">
                <div class="flex-grow">
                    <div class="px-4 py-6 text-center border-b">
                        <h2 class="text-xl font-semibold leading-6 text-gray-800 dark:text-white">Administration</h2>
                    </div>
                    <nav class="p-4 space-y-2">
                        <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium text-primary-600 bg-primary-50 dark:bg-primary-900/50 dark:text-primary-100 rounded-lg group">
                            <svg class="w-5 h-5 mr-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            Tableau de bord
                        </a>
                        <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium text-gray-900 dark:text-white rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="w-5 h-5 mr-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            Cours
                            <span class="ml-auto bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                156
                            </span>
                        </a>
                        <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium text-gray-900 dark:text-white rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="w-5 h-5 mr-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                            Enseignants
                            <span class="ml-auto bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">
                                3
                            </span>
                        </a>
                        <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium text-gray-900 dark:text-white rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="w-5 h-5 mr-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            Utilisateurs
                        </a>
                        <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium text-gray-900 dark:text-white rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="w-5 h-5 mr-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                            </svg>
                            Catégories & Tags
                        </a>
                    </nav>
                </div>
                <div class="p-4 border-t">
                    <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium text-red-600 rounded-lg hover:bg-red-50 group">
                        <svg class="w-5 h-5 mr-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        Déconnexion
                    </a>
                </div>
            </div>
        </aside>

        <!-- Main content -->
        <main class="ml-64 p-8">
            <!-- Stats Overview -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <!-- Total Courses -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-blue-100 dark:bg-blue-900">
                            <svg class="w-8 h-8 text-blue-600 dark:text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h2 class="text-gray-600 dark:text-gray-400 text-sm font-medium">Total Cours</h2>
                            <p class="text-2xl font-semibold text-gray-800 dark:text-white">156</p>
                        </div>
                    </div>
                </div>

                <!-- Total Students -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-green-100 dark:bg-green-900">
                            <svg class="w-8 h-8 text-green-600 dark:text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h2 class="text-gray-600 dark:text-gray-400 text-sm font-medium">Total Étudiants</h2>
                            <p class="text-2xl font-semibold text-gray-800 dark:text-white">2,845</p>
                        </div>
                    </div>
                </div>

                <!-- Total Teachers -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-purple-100 dark:bg-purple-900">
                            <svg class="w-8 h-8 text-purple-600 dark:text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h2 class="text-gray-600 dark:text-gray-400 text-sm font-medium">Total Enseignants</h2>
                            <p class="text-2xl font-semibold text-gray-800 dark:text-white">48</p>
                        </div>
                    </div>
                </div>

                <!-- Pending Teachers -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-yellow-100 dark:bg-yellow-900">
                            <svg class="w-8 h-8 text-yellow-600 dark:text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h2 class="text-gray-600 dark:text-gray-400 text-sm font-medium">Enseignants en attente</h2>
                            <p class="text-2xl font-semibold text-gray-800 dark:text-white">3</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="bg-white dark:bg-gray-800 shadow rounded-lg mb-8">
                <div class="px-4 py-5 border-b border-gray-200 dark:border-gray-700">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">
                        Activité récente
                    </h3>
                </div>
                <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                    <li class="p-4 hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <span class="inline-flex items-center justify-center h-8 w-8 rounded-full bg-blue-100 dark:bg-blue-900">
                                    <span class="text-sm font-medium leading-none text-blue-600 dark:text-blue-300">JD</span>
                                </span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 dark:text-white truncate">
                                    John Doe s'est inscrit au cours "Développement web avancé"
                                </p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">
                                    Il y a 2 heures
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="p-4 hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <span class="inline-flex items-center justify-center h-8 w-8 rounded-full bg-green-100 dark:bg-green-900">
                                    <span class="text-sm font-medium leading-none text-green-600 dark:text-green-300">AS</span>
                                </span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 dark:text-white truncate">
                                    Alice Smith a créé un nouveau cours "Conception UI/UX"
                                </p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">
                                    Il y a 5 heures
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="p-4 hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <span class="inline-flex items-center justify-center h-8 w-8 rounded-full bg-purple-100 dark:bg-purple-900">
                                    <span class="text-sm font-medium leading-none text-purple-600 dark:text-purple-300">RJ</span>
                                </span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 dark:text-white truncate">
                                    Robert Johnson a terminé le cours "Programmation Python"
                                </p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">
                                    Hier
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white dark:bg-gray-800 shadow rounded-lg">
                <div class="px-4 py-5 border-b border-gray-200 dark:border-gray-700">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">
                        Actions rapides
                    </h3>
                </div>
                <div class="p-6 grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <a href="courses.html" class="group flex items-center p-4 border rounded-lg hover:border-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/50">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-gray-400 group-hover:text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-base font-medium text-gray-900 dark:text-white group-hover:text-blue-600">
                                Gérer les cours
                            </p>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                                Afficher et gérer tous les cours
                            </p>
                        </div>
                    </a>

                    <a href="users.html" class="group flex items-center p-4 border rounded-lg hover:border-blue-500 hover:bg-blue-50 dark:hover:bg-blue-900/50">
                        <div class="flex-shrink-0">
                            <svg class="h-6 w-6 text-gray-400 group-hover:text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-base font-medium text-gray-900 dark:text-white group-hover:text-blue-600">
                                Gérer les utilisateurs
                            </p>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                                Afficher et gérer les comptes utilisateurs
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Toggle dark mode
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</body>
</html>
