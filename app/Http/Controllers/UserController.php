<?php

namespace App\Http\Controllers;

use App\Models\User;
Use \Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


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
        $user = User::create([
            'department_Id' => $request->department_Id,
            'hierarchy_Id' => $request->hierarchy_Id,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nik' => $request->nik,
            'contact' => $request->contact,
            'alamat' => $request->alamat,
            'tanggal_masuk' => $request->tanggal_masuk,
            'salary' => $request->salary
        ]);

        return response()->json([
            'status' => 'Success',
            'message' => 'new user created',
            'data' => $user,
        ], 200);
    }

    //
    public function getUsers()
    {
        $users = User::all()->load('department', 'hierarchy');

        return response()->json([
            'status' => 'Success',
            'message' => 'all users grabbed',
            'data' => $users,
        ], 200);
    }

    public function updateUsers(Request $request, $id){
        User::where('id', $id)->update([
            'department_Id' => $request->department_Id,
            'hierarchy_Id' => $request->hierarchy_Id,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'nik' => $request->nik,
            'contact'=> $request->contact,
            'alamat' => $request->alamat,
            'tanggal_masuk' => $request->tanggal_masuk,
            'salary' => $request-> salary
        ]);

        $newUser = User::find($id);

        return response()->json([
            'status' => 'Success',
            'message' => 'user is updated',
            'data' => $newUser,
        ], 200);
    }

    public function deleteUsers($id)
    {
        $users = User::find($id);
        $users->delete();

        return response()->json([
            'status' => 'Success',
            'message' => 'delete user succes',
            'data' => $users,
        ],200);
    }
}