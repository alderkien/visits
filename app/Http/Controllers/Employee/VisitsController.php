<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\EmployeeVisit;
use App\Models\Enums\VisitType;
use App\Http\Requests\CreateVisit;

class VisitsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function create(Employee $employee)
    {
        return view('employees.visits.form', [
            'employee' => $employee,
            'entity' => new EmployeeVisit(),
            'types' => VisitType::values(),
        ]);
    }

    public function store(CreateVisit $request, Employee $employee)
    {
        $data = $request->validated();
        $employee->visits()->create($data);
        return redirect()->route('employees.show', $employee->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @param  \App\Models\EmployeeVisit  $EmployeeVisit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee, EmployeeVisit $visit)
    {
        $visit->delete();
        return redirect()->route('employees.show', $employee->id);
    }
}
