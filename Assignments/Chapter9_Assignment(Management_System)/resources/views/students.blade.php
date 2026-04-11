<!DOCTYPE html>
<html>

<head>
    <title>Student List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            color: #008CBA;
            text-decoration: none;
            margin-right: 10px;
        }

        a:hover {
            text-decoration: underline;
        }

        .button {
            padding: 10px 20px;
            background-color: #008CBA;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .button:hover {
            background-color: #007399;
        }

        .success {
            color: green;
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <h2>Student List</h2>

    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <a href="{{ route('students.create') }}"><button class="button">Add Student</button></a>

    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Actions</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->age }}</td>
                <td>
                    <a href="{{ route('students.edit', $student->id) }}">Edit</a> |
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Delete student?')"
                            style="background:none; border:none; color:#008CBA; cursor:pointer; text-decoration:underline;">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
