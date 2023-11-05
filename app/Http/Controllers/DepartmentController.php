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
            'message' => 'new department created',
            'data' => $department,
        ], 200);
    }

    public function getDepartmentById(Request $request)
    {
        $department = Department::find($request->id);

        return response()->json([
            'status' => 'Success',
            'message' => 'a department successfully grabbed',
            'data' => $department,
        ], 200);
    }

    //
    public function getDepartments()
    {
        $departments = Department::all();

        return response()->json([
            'status' => 'Success',
            'message' => 'all departments grabbed',
            'data' => $departments,
        ], 200);
    }

    public function updateDepartments(Request $request, $id){
        Department::where('id', $id)->update([
            'nama' => $request->nama
        ]);

        $newDepartment = Department::find($id);

        return response()->json([
            'status' => 'Success',
            'message' => 'department is updated',
            'data' => $newDepartment,
        ], 200);
    }

    public function deleteDepartments($id)
    {
        $departments = Department::find($id);
        $departments->delete();

        return response()->json([
            'status' => 'Success',
            'message' => 'delete department success',
            'data' => $departments,
        ], 200);
    }
}
