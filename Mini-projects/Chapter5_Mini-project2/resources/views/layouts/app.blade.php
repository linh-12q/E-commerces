<!DOCTYPE html>
<html>
<head>
    <title>Simple Blog</title>
    <script src="https://cdn.tailwindcss.com"></script> </head>
<body class="bg-gray-100">
    <header class="p-5 bg-blue-600 text-white shadow-lg">
        <h1 class="text-2xl font-bold">My Laravel Blog</h1>
    </header>

    <main class="container mx-auto mt-10 p-5">
        @yield('content') </main>

    <footer class="mt-10 p-5 bg-gray-800 text-white text-center">
        &copy; Chapter5 Mini-Project 2
    </footer>
</body>
</html>