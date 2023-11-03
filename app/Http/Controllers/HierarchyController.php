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

    public function deleteHierarchies($id)
    {
        $hierarchies = Hierarchy::find($id);
        $hierarchies->delete();

        return response()->json([
            'status' => 'Success',
            'message' => 'delete hierarchies success',
            'data' => [
                'hiearchies' => $hierarchies,
            ]
        ], 200);
    }
}
