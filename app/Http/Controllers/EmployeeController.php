<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$employees = Employee::all();
        //$employees = Employee::find([2,3], ['name', 'email']);
        //$employees = Employee::max('age');
        //$employees = Employee::min('age');
        //$employees = Employee::sum('age');
        //$employees = Employee::where('city', 'Darentown')->where
        //('age', '>', 17)->get();
        //$employees = Employee::whereAge(19)->get();

        //$employees = Employee::whereCity('Darentown')
        //                    ->whereAge(19)
        //                    ->select('name', 'email')
        //                    ->toSql();

        //$employees = Employee::whereCity('Darentown')
        //                    ->whereAge(19)
        //                    ->select('name', 'email')
        //                    ->dd();

        //$employees = Employee::whereCity('Darentown')
        //                    ->whereAge(19)
        //                    ->select('name', 'email')
        //                    ->toRawSql();

        $employees = Employee::whereCity('Darentown')
                            ->whereAge(19)
                            ->select('name', 'email')
                            ->ddRawSql();



        return $employees;

        return view('employee', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
