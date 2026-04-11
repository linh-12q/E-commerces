<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Details - {{ $classs->name }}</title>
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
            max-width: 1000px;
            margin: 0 auto;
        }

        .header {
            background: white;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .header h1 {
            color: #333;
            font-size: 28px;
            margin-bottom: 10px;
        }

        .class-info {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-top: 15px;
        }

        .info-item {
            margin-bottom: 10px;
        }

        .info-label {
            font-weight: 600;
            color: #333;
        }

        .info-value {
            color: #666;
            margin-left: 10px;
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
            margin-right: 10px;
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
        }

        .btn-secondary:hover {
            background: #5a6268;
        }

        .btn-group {
            margin-top: 20px;
        }

        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            overflow: hidden;
        }

        .card-header {
            background: #f8f9fa;
            border-bottom: 2px solid #dee2e6;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-header h2 {
            font-size: 20px;
            color: #333;
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
            padding: 15px 20px;
            text-align: left;
            font-weight: 600;
            color: #333;
        }

        td {
            padding: 15px 20px;
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

        .btn-info {
            background: #17a2b8;
            color: white;
            font-size: 12px;
            padding: 8px 15px;
        }

        .btn-info:hover {
            background: #138496;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>{{ $class->name }}</h1>
            <div class="class-info">
                <div class="info-item">
                    <span class="info-label">Class ID:</span>
                    <span class="info-value">#{{ $class->id }}</span>
                </div>
                @if ($class->description)
                    <div class="info-item">
                        <span class="info-label">Description:</span>
                        <span class="info-value">{{ $class->description }}</span>
                    </div>
                @endif
                <div class="info-item">
                    <span class="info-label">Total Students:</span>
                    <span class="info-value">{{ $students->count() }}</span>
                </div>
            </div>
            <div class="btn-group">
                <a href="{{ route('classes.edit', $class->id) }}" class="btn btn-secondary">Edit Class</a>
                <a href="{{ route('classes.index') }}" class="btn btn-secondary">Back to Classes</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Students in {{ $class->name }}</h2>
                <a href="{{ route('students.create') }}" class="btn btn-primary">+ Add Student</a>
            </div>

            @if ($students->count() > 0)
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
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
                                    <div class="actions">
                                        <a href="{{ route('students.show', $student->id) }}"
                                            class="btn btn-info">View</a>
                                        <a href="{{ route('students.edit', $student->id) }}"
                                            class="btn btn-secondary">Edit</a>
                                        <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-info" style="background: #dc3545;"
                                                onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="no-data">
                    <p>No students in this class yet. <a href="{{ route('students.create') }}">Add one now</a></p>
                </div>
            @endif
        </div>
    </div>
</body>

</html>
