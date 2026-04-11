<!DOCTYPE html>
<html>

<head>
    <title>Add Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            width: 400px;
        }

        input,
        button {
            padding: 10px;
            margin: 10px 0;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            color: #008CBA;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h2>Add Student</h2>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Age: <input type="number" name="age" required><br><br>
        <button type="submit">Add Student</button>
    </form>

    <a href="{{ route('students.index') }}">Back</a>
</body>

</html>
