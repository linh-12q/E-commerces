<!DOCTYPE html>
<html>

<head>
    <title>Register User</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            padding: 50px;
            background: #f0f2f5;
        }

        .form-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .error {
            color: red;
            font-size: 0.8em;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Create Account</h2>

        <form action="{{ url('/login') }}" method="POST">
            @csrf <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}">
            @error('name') <div class="error">{{ $message }}</div> @enderror

            <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}">
            @error('email') <div class="error">{{ $message }}</div> @enderror

            <input type="password" name="password" placeholder="Password">
            @error('password') <div class="error">{{ $message }}</div> @enderror

            <button type="submit">Login</button>
        </form>
    </div>

</body>

</html>