<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    
    body { 
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
        line-height: 1.6; 
        color: #333;
        background-color: #f8fafc;
        display: flex;
        flex-direction: column;
        min-height: 100vh; 
    }

  
    header { 
        background: #2d3748 ; 
        padding: 1.5rem 10%; 
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    header h1 { color: #ffffff; font-size: 1.5rem; }

    nav a { 
        text-decoration: none; 
        color: #cbd5e0; 
        margin-left: 20px; 
        font-weight: 500;
        transition: color 0.3s ease;
    }

    nav a:hover { color: #3182ce; }
    main { 
        flex: 1; 
        padding: 40px 10%; 
        max-width: 1200px;
        margin: 0 auto;
    }

    .content-card {
        background: white;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    }
    footer { 
        background: #2d3748; 
        color: #cbd5e0; 
        padding: 2rem; 
        text-align: center; 
        font-size: 0.9rem;
    }
</style>
</head>
<body>

    <header>
        <h1>My Website Header</h1>
        <nav>
            <a href="/home">Home</a> 
            <a href="/about">About</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 My Laravel Project</p>
    </footer>

</body>
</html>