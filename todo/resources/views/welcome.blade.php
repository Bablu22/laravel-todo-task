<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Todo App</title>

</head>

<body class="font-sans bg-gray-100">

    <!-- Navigation Bar -->
    <nav class="p-4 bg-gradient-to-r from-blue-500 to-blue-700">
        <div class="container flex items-center justify-between mx-auto">
            <a href="#" class="text-2xl font-semibold text-white">Todo App</a>
            <div class="flex space-x-4">
                <a href="{{ route('login') }}" class="text-white">Login</a>
                <a href="{{ route('register') }}" class="text-white">Registration</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative py-32 overflow-hidden text-white bg-gradient-to-b from-blue-700 to-purple-700">
        <div class="container relative z-10 mx-auto text-center">
            <h1 class="mb-4 text-5xl font-bold">Get Things Done with Ease</h1>
            <p class="mb-8 text-xl">Experience a new level of productivity with our innovative todo app.</p>
            <a href="{{ route('dashboard') }}"
                class="px-8 py-3 font-semibold text-white transition duration-300 bg-blue-600 rounded-md hover:bg-blue-700">Start
                Now</a>
        </div>
        <div class="absolute top-0 left-0 w-1/2 h-full transform -skew-x-12 bg-blue-800 -translate-x-1/4"></div>
        <div class="absolute top-0 left-0 w-1/2 h-full bg-gradient-to-b from-blue-800 to-transparent"></div>
    </header>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto">
            <h2 class="mb-8 text-3xl font-semibold text-center text-gray-800">Why Choose Our Todo App?</h2>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div class="p-6 transition duration-300 transform bg-gray-200 rounded-lg shadow-md hover:scale-105">
                    <h3 class="mb-2 text-xl font-semibold">Intuitive Design</h3>
                    <p class="text-gray-600">Our user-friendly interface makes managing tasks a breeze.</p>
                </div>
                <div class="p-6 transition duration-300 transform bg-gray-200 rounded-lg shadow-md hover:scale-105">
                    <h3 class="mb-2 text-xl font-semibold">Collaboration</h3>
                    <p class="text-gray-600">Effortlessly work together with your team to achieve your goals.</p>
                </div>
                <div class="p-6 transition duration-300 transform bg-gray-200 rounded-lg shadow-md hover:scale-105">
                    <h3 class="mb-2 text-xl font-semibold">Sync Across Devices</h3>
                    <p class="text-gray-600">Access your tasks from anywhere and stay organized on the go.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="p-4 bg-gray-200">
        <div class="container mx-auto text-center">
            <p class="text-gray-600">&copy; 2023 Todo App. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>
