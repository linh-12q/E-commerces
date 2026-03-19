<?php

namespace App\Http\Controllers;

use App\Models\Payroll;
use Illuminate\Http\Request;

class PayrollController extends Controller
{
    public function index()
    {
        $payrolls = Payroll::all();
        return view('payroll.index', compact('payrolls'));
    }

    public function create()
    {
        return view('payroll.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_name' => 'required|string|max:255',
            'slary' => 'required|integer|min:0',
            'bonus' => 'required|integer|min:0',
            'deduction' => 'required|integer|min:0',
        ]);

        Payroll::create($validated);

        return redirect()->route('payroll.index');
    }

    public function edit(Payroll $payroll)
    {
        return view('payroll.edit', compact('payroll'));
    }

    public function update(Request $request, Payroll $payroll)
    {
        $validated = $request->validate([
            'employee_name' => 'required|string|max:255',
            'slary' => 'required|integer|min:0',
            'bonus' => 'required|integer|min:0',
            'deduction' => 'required|integer|min:0',
        ]);

        $payroll->update($validated);

        return redirect()->route('payroll.index');
    }

    public function destroy(Payroll $payroll)
    {
        $payroll->delete();

        return redirect()->route('payroll.index');
    }
}
