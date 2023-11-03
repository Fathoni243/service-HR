<?php

namespace App\Http\Controllers;

use App\Models\Department;

class DepartmentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function getDepartments()
    {
        $departments = Department::all();

        return response()->json([
            'status' => 'Success',
            'message' => 'all departments grabbed',
            'data' => [
                'departments' => $departments,
            ]
        ], 200);
    }
}
