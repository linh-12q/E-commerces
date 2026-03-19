<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Payroll</title>
</head>

<body>
    <h2>Add payroll</h2>
    <form action="{{ route('payroll.store') }}" method="POST">
        @csrf
        <div><label>Employee Name <input type="text" name="employee_name" required></label></div>
        <div><label>Salary <input type="number" name="slary" required></label></div>
        <div><label>Bonus <input type="number" name="bonus" value="0" required></label></div>
        <div><label>Deduction <input type="number" name="deduction" value="0" required></label></div>
        <button type="submit">Save</button>
    </form>

</body>

</html>
