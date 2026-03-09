<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Index</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 40px;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }

        .table-container {
            max-width: 1100px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        /* Top Header Area */
        .header-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding: 0 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #4a90e2;
            color: white;
            text-align: left;
            padding: 15px;
            font-weight: 600;
        }

        td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
            vertical-align: middle;
        }

        tr:nth-child(even) { background-color: #f9f9f9; }
        tr:hover { background-color: #f1f7ff; transition: background-color 0.3s ease; }

        /* Buttons Setup */
        .action-cell {
            display: flex;
            gap: 8px;
        }

        .btn {
            padding: 8px 14px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: opacity 0.2s;
        }

        .btn:hover { opacity: 0.8; }

        .btn-create { background-color: #2ecc71; color: white; }
        .btn-edit { background-color: #f39c12; color: white; }
        .btn-delete { background-color: #e74c3c; color: white; }

        /* Success Message Alert */
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            border: 1px solid #c3e6cb;
        }

        @media (max-width: 768px) {
            body { padding: 10px; }
            .header-actions { flex-direction: column; gap: 10px; }
            th, td { padding: 10px 5px; font-size: 13px; }
        }
    </style>
</head>
<body>

    <div class="table-container">
        <h1>Student Directory</h1>

        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="header-actions">
            <a href="{{ route('students.create') }}" class="btn btn-create"> Add New Student</a>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Age</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td><strong>{{ $student->name }}</strong></td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->course }}</td>
                    <td>{{ $student->age }}</td>
                    <td>
                        <div class="action-cell">
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-edit">Edit</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>