<h1>Student List</h1>

<ul>
    @foreach($students as $student)
        <li>{{ $student }}</li>
    @endforeach
</ul>