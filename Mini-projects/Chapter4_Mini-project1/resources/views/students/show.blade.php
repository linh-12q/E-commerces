<!DOCTYPE html>
<html>
<head>
    <title>Student Info</title>
</head>
<body>

<h1>Student Detail</h1>

<p>ID: {{ $student['id'] }}</p>
<p>Name: {{ $student['name'] }}</p>
<p>Age: {{ $student['age'] }}</p>

<a href="{{ route('students.index') }}">Back</a>

</body>
</html>
