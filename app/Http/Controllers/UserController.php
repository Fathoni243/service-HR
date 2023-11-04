<?php

namespace App\Http\Controllers;

use App\Models\User;
Use \Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Department;
use App\Models\Hierarchy;


class UserController extends Controller
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

    public function createUser(Request $request)
    {
        $department = Department::find($request->department_id);
        $hierarchy = Hierarchy::find($request->hierarchy_id);

        $password = $request->password;

        $user = User::create([
            'department_Id' => $request->department_id,
            'hierarchy_Id' => $request->hierarchy_id,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($password),
            'nik' => $request->nik,
            'contact' => $request->contact,
            'alamat' => $request->alamat,
            'tanggal_masuk' => Carbon::now(),
            'salary' => $request->salary
        ]);

        return response()->json([
            'status' => 'Success',
            'message' => 'new user created',
            'data' => [
                'user' => $user,
            ]
        ], 200);
    }

    //
    public function getUsers()
    {
        $users = User::all()->load('department', 'hiearchy');

        return response()->json([
            'status' => 'Success',
            'message' => 'all user grabbed',
            'data' => [
                'users' => $users,
            ]
        ], 200);
    }

    public function updateUsers(Request $request, $id){
        $users = User::find($id);
        $users = User::where('id', $id)->update([
            'department_Id' => $request->department_id,
            'hierarchy_Id' => $request->hierarchy_id,
            'username' => $request-> $username,
            'email' => $request-> $email,
            'nik' => $request-> $nik,
            'contact'=> $request-> $contact,
            'alamat' => $request-> $alamat,
            'tanggal_masuk' => $request-> $tanggal_masuk,
            'salary' => $request-> $salary
        ]);

        return response()->json([
            'status' => 'Success',
            'message' => 'user is updated',
            'data' => [
                'users' => $users,
            ]
        ], 200);
    }

    public function deleteUsers($id)
    {

        $users = User::find($id);
        $users->delete();

        return response()->json([
            'status' => 'Success',
            'message' => 'delete user succes',
            'data' => [
                'users' => $users,
            ]
        ],200);
    }
    
}
