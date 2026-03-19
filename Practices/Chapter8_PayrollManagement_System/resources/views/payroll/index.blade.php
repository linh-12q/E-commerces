<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>
    <h2>Payroll List</h2>
    <a href="{{ route('payroll.create') }}"> Add Payroll</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Salary</th>
            <th>Bonus</th>
            <th>Deduction</th>
            <th>Actions</th>
        </tr>
        @foreach ($payrolls as $payroll)
            <tr>
                <td>{{ $payroll->id }}</td>
                <td>{{ $payroll->employee_name }}</td>
                <td>{{ $payroll->slary }}</td>
                <td>{{ $payroll->bonus }}</td>
                <td>{{ $payroll->deduction }}</td>
                <td>
                    <a href="{{ route('payroll.edit', $payroll) }}">Edit</a>
                    <form action="{{ route('payroll.destroy', $payroll) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Delete this payroll?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    </table>
</body>

</html>
