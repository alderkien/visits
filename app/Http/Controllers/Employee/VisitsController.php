<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\EmployeeVisit;
use Illuminate\Http\Request;

class VisitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function index(Employee $employee)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function create(Employee $employee)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @param  \App\Models\EmployeeVisit  $EmployeeVisit
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee, EmployeeVisit $EmployeeVisit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @param  \App\Models\EmployeeVisit  $EmployeeVisit
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee, EmployeeVisit $EmployeeVisit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @param  \App\Models\EmployeeVisit  $EmployeeVisit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee, EmployeeVisit $EmployeeVisit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @param  \App\Models\EmployeeVisit  $EmployeeVisit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee, EmployeeVisit $EmployeeVisit)
    {
        //
    }
}
