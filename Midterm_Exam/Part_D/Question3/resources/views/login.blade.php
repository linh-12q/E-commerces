<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>

    <h2>Login Form</h2>

    <form action="/login" method="POST">
        @csrf

        <label>Name:</label><br>
        <input type="text" name="name"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
