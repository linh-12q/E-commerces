<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
</head>
<body>
    <h1>Welcome to your Dashboard!</h1>
    <hr>

    <div class="user-info">
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Account Created:</strong> {{ $user->created_at->format('M d, Y') }}</p>
    </div>

    <a href="{{ url('/login') }}">Back to Login</a>
</body>
</html>