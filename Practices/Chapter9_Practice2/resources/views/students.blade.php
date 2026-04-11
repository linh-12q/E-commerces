<!DOCTYPE html>
<html>

<head>
    <title>Student List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 30px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
        }

        th {
            background: #3490dc;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>All Students</h1>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Major</th>
                <th>Actions</th>
            </tr>

            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->major }}</td>
                    <td>
                        <a href="/update-student/{{ $student->id }}"
                            style="margin-right: 10px; color: #3490dc; text-decoration: none; font-weight: bold;">Update</a>
                        <a href="/delete-student/{{ $student->id }}"
                            style="color: #e74c3c; text-decoration: none; font-weight: bold;">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
