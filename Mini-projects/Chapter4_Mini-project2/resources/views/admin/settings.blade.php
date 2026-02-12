<!DOCTYPE html>
<html>
<head>
    <title>Admin Settings</title>
</head>
<body>
    <h1>System Settings</h1>
    <p>Here you can change the website configuration.</p>

    <form>
        <label>Site Name:</label>
        <input type="text" placeholder="My Laravel App">
        <button>Save</button>
    </form>
    
    <br>
    <a href="{{ route('admin.users') }}">Back to Users List</a>
</body>
</html>