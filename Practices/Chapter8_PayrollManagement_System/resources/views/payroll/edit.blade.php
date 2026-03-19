<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Payroll</title>
</head>

<body>
    <h2>Edit payroll</h2>
    <form action="{{ route('payroll.update', $payroll) }}" method="POST">
        @csrf
        @method('PUT')
        <div><label>Employee Name <input type="text" name="employee_name" value="{{ $payroll->employee_name }}"  required></label></div>     
        <div><label>Salary <input type="number" name="slary" value="{{ $payroll->slary }}" required></label></div>
        <div><label>Bonus <input type="number" name="bonus" value="{{ $payroll->bonus }}" required></label></div>
        <div><label>Deduction <input type="number" name="deduction" value="{{ $payroll->deduction }}" required></label>
        </div>
        <button type="submit">Update</button>
    </form>
</body>

</html>
