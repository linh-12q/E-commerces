<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>

<h1>Students List</h1>

<ul>
    @foreach ($students as $student)
        <li>
            <a href="{{ route('students.show', $student['id']) }}">
                {{ $student['name'] }}
            </a>
        </li>
    @endforeach
</ul>

</body>
</html>
