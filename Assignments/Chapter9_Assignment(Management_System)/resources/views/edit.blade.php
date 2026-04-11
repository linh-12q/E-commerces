<!DOCTYPE html>
<html>

<head>
    <title>Edit Student</title>
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
    <h2>Edit Student</h2>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        Name: <input type="text" name="name" value="{{ $student->name }}" required><br><br>
        Email: <input type="email" name="email" value="{{ $student->email }}" required><br><br>
        Age: <input type="number" name="age" value="{{ $student->age }}" required><br><br>
        <button type="submit">Update Student</button>
    </form>

    <a href="{{ route('students.index') }}">Back</a>
</body>

</html>
