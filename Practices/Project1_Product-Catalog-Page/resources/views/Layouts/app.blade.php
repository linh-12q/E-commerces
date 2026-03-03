<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduFlow - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <nav class="bg-purple-700 p-4 text-white shadow-lg">
        <div class="container mx-auto">
            <span class="text-xl font-bold">EduFlow Catalog</span>
        </div>
    </nav>

    <main class="container mx-auto mt-10 px-4">
        @yield('content')
    </main>
</body>
</html>