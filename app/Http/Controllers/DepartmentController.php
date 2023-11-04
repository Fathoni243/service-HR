<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

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

    public function createDepartment(Request $request)
    {
        $department = Department::create([
            'nama' => $request->nama
        ]);

        return response()->json([
            'status' => 'Success',
            'message' => 'new departments created',
            'data' => [
                'department' => $department,
            ]
        ], 200);
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

    public function updateDepartments(Request $request, $id){
        Department::where('id', $id)->update([
            'nama' => $request->nama
        ]);

        $newDepartment = Department::find($id);

        return response()->json([
            'status' => 'Success',
            'message' => 'departments is updated',
            'data' => [
                'department' => $newDepartment
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
