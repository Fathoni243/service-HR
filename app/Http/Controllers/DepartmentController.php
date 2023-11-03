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

    public function deleteDepartments($id)
    {
        $departments = Department::find($id);
        $departments->delete();

        return response()->json([
            'status' => 'Success',
            'message' => 'delete departments success',
            'data' => [
                'departments' => $departments,
            ]
        ], 200);
    }
}
