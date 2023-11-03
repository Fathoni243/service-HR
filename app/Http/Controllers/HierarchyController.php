<?php

namespace App\Http\Controllers;

use App\Models\Hierarchy;

class HierarchyController extends Controller
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
    public function getHierarchies()
    {
        $hierarchies = Hierarchy::all();

        return response()->json([
            'status' => 'Success',
            'message' => 'all hierarchies grabbed',
            'data' => [
                'hiearchies' => $hierarchies,
            ]
        ], 200);
    }
}
