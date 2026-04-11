<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #f9f9f9;
        align-items: center;
    }

    h1 {
        color: #333;
    }

    table {
        width: 50%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 8px 12px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
</style>

<body>
    <h1>Student List</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student['id'] }}</td>
                <td>{{ $student['name'] }}</td>
                <td>{{ $student['age'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>