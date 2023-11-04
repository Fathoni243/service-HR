<?php

namespace App\Http\Controllers;

use App\Models\Hierarchy;
use Illuminate\Http\Request;

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

    public function createHierarchy(Request $request)
    {
        $hierarchy = Hierarchy::create([
            'nama' => $request->nama
        ]);

        return response()->json([
            'status' => 'Success',
            'message' => 'new hierarchy created',
            'data' => [
                'hiearchy' => $hierarchy,
            ]
        ], 200);
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

    public function updateHierarchies(Request $request, $id){
        Hierarchy::where('id', $id)->update([
            'nama' => $request->nama
        ]);
        
        $newHierarchy = Hierarchy::find($id);

        return response()->json([
            'status' => 'Success',
            'message' => 'hierarchy is updated',
            'data' => [
                'hierarchy' => $newHierarchy,
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
