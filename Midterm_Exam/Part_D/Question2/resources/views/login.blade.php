<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .container{
            background:white;
            padding:30px;
            width:350px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
            text-align:center;
        }

        h2{
            margin-bottom:20px;
        }

        input{
            width:100%;
            padding:10px;
            margin:8px 0;
            border:1px solid #ccc;
            border-radius:5px;
        }

        button{
            width:100%;
            padding:10px;
            background:#3498db;
            border:none;
            color:white;
            font-size:16px;
            border-radius:5px;
            cursor:pointer;
        }

        button:hover{
            background:#2980b9;
        }
    </style>
</head>

<body>

<div class="container">

<h2>Login Form Student</h2>

<form method="POST" action="/login">
    @csrf

    <input type="text" name="name" placeholder="Name">

    <input type="email" name="email" placeholder="Email">

    <input type="password" name="password" placeholder="Password">

    <button type="submit">Login</button>

</form>

</div>

</body>
</html>