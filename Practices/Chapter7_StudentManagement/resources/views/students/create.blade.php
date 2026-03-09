<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>
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
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: #555;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        input:focus {
            outline: none;
            border-color: #4a90e2;
            box-shadow: 0 0 8px rgba(74, 144, 226, 0.2);
        }

        button {
            width: 100%;
            background-color: #2ecc71; /* Green for "Save/Create" */
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

        button:hover {
            background-color: #27ae60;
        }

        /* Error Message Styling */
        .error-box {
            background-color: #fce4e4;
            border: 1px solid #f5c6cb;
            color: #721c24;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .error-box ul {
            margin: 0;
            padding-left: 20px;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #777;
            text-decoration: none;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Add New Student</h1>

        @if($errors->any())
        <div class="error-box">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="/students" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" placeholder="" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" placeholder="" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="course">Course</label>
                <input type="text" name="course" id="course" placeholder="" value="{{ old('course') }}">
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" name="age" id="age" placeholder="" value="{{ old('age') }}">
            </div>

            <button type="submit">Save Student</button>
        </form>

        <a href="/students" class="back-link">← Cancel and Go Back</a>
    </div>

</body>
</html>