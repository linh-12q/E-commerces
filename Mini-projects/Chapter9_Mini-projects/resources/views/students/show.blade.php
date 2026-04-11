<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details - {{ $student->name }}</title>
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
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 600px;
        }

        .header {
            margin-bottom: 30px;
            text-align: center;
        }

        .header h1 {
            color: #333;
            font-size: 32px;
            margin-bottom: 10px;
        }

        .student-info {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .info-item {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #dee2e6;
        }

        .info-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .info-label {
            font-weight: 600;
            color: #667eea;
            font-size: 14px;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .info-value {
            color: #333;
            font-size: 18px;
        }

        .badge {
            display: inline-block;
            background: #667eea;
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 14px;
        }

        .btn-group {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-top: 30px;
        }

        .btn {
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            font-weight: 600;
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
            transform: translateY(-2px);
        }

        .btn-danger {
            background: #ef5350;
            color: white;
        }

        .btn-danger:hover {
            background: #d32f2f;
            transform: translateY(-2px);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>{{ $student->name }}</h1>
        </div>

        <div class="student-info">
            <div class="info-item">
                <div class="info-label">Student ID</div>
                <div class="info-value">#{{ $student->id }}</div>
            </div>

            <div class="info-item">
                <div class="info-label">Email Address</div>
                <div class="info-value">
                    <a href="mailto:{{ $student->email }}" style="color: #667eea; text-decoration: none;">
                        {{ $student->email }}
                    </a>
                </div>
            </div>

            <div class="info-item">
                <div class="info-label">Assigned Class</div>
                <div class="info-value">
                    @if ($student->classs)
                        <span class="badge">{{ $student->classs->name }}</span>
                    @else
                        <span style="color: #999;">Not assigned to any class</span>
                    @endif
                </div>
            </div>

            <div class="info-item">
                <div class="info-label">Member Since</div>
                <div class="info-value">{{ $student->created_at->format('F d, Y') }}</div>
            </div>
        </div>

        <div class="btn-group">
            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit Student</a>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to Students</a>
            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"
                    onclick="return confirm('Are you sure you want to delete this student?')">Delete Student</button>
            </form>
        </div>
    </div>
</body>

</html>
