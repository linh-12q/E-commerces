<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .form-container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 25px;
            font-size: 24px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #555;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box; /* Important for padding */
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input:focus {
            outline: none;
            border-color: #4a90e2;
            box-shadow: 0 0 5px rgba(74, 144, 226, 0.2);
        }

        .btn-update {
            width: 100%;
            background-color: #4a90e2;
            color: white;
            border: none;
            padding: 14px;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
            margin-top: 10px;
        }

        .btn-update:hover {
            background-color: #357abd;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #777;
            text-decoration: none;
            font-size: 14px;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Edit Student</h1>

        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT') <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" value="{{ $student->name }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="{{ $student->email }}" required>
            </div>

            <div class="form-group">
                <label for="course">Course</label>
                <input type="text" id="course" name="course" value="{{ $student->course }}" required>
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" value="{{ $student->age }}" required>
            </div>

            <button type="submit" class="btn-update">Update Student Info</button>
        </form>

        <a href="{{ route('students.index') }}" class="back-link">← Back to Student List</a>
    </div>

</body>
</html>