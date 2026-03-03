<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EduFlow - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-10">
    <div class="container mx-auto">
         <h1 class="text-2xl font-bold mb-4"> Welcome the Student List UI</h1>
        @yield('content')
    </div>
</body>
</html>