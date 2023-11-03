<?php

namespace App\Http\Controllers;

use App\Models\User;

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
    
}
