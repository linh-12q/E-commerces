<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students - Management System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .header {
            background: white;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            color: #333;
            font-size: 28px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: #667eea;
            color: white;
        }

        .btn-primary:hover {
            background: #5568d3;
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: #6c757d;
            color: white;
            font-size: 12px;
            padding: 8px 15px;
        }

        .btn-secondary:hover {
            background: #5a6268;
        }

        .btn-danger {
            background: #ef5350;
            color: white;
            font-size: 12px;
            padding: 8px 15px;
        }

        .btn-danger:hover {
            background: #d32f2f;
        }

        .btn-info {
            background: #17a2b8;
            color: white;
            font-size: 12px;
            padding: 8px 15px;
        }

        .btn-info:hover {
            background: #138496;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .table-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: #f8f9fa;
            border-bottom: 2px solid #dee2e6;
        }

        th {
            padding: 15px;
            text-align: left;
            font-weight: 600;
            color: #333;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #dee2e6;
        }

        tbody tr:hover {
            background: #f8f9fa;
        }

        .no-data {
            text-align: center;
            padding: 40px;
            color: #999;
        }

        .actions {
            display: flex;
            gap: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Students Management</h1>
            <a href="{{ route('students.create') }}" class="btn btn-primary">+ Add New Student</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($students->count() > 0)
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Class</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>#{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>
                                    @if ($student->classs)
                                        <a href="{{ route('classes.show', $student->classs->id) }}"
                                            class="btn btn-info">{{ $student->classs->name }}</a>
                                    @else
                                        <span style="color: #999;">Not assigned</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="actions">
                                        <a href="{{ route('students.show', $student->id) }}"
                                            class="btn btn-secondary">View</a>
                                        <a href="{{ route('students.edit', $student->id) }}"
                                            class="btn btn-secondary">Edit</a>
                                        <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="table-container">
                <div class="no-data">
                    <p>No students found. <a href="{{ route('students.create') }}">Create one now</a></p>
                </div>
            </div>
        @endif
    </div>
</body>

</html>
