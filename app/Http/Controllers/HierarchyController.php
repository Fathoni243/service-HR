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
            'data' => $hierarchy,
        ], 200);
    }

    //get hierarchy by Id
    public function getHierarchyById(Request $request)
    {
        $hierarchy = Hierarchy::find($request->id);

        return response()->json([
            'status' => 'Success',
            'message' => 'a hierarchy successfully grabbed',
            'data' => $hierarchy,
        ], 200);
    }

    //
    public function getHierarchies()
    {
        $hierarchies = Hierarchy::all();

        return response()->json([
            'status' => 'Success',
            'message' => 'all hierarchies grabbed',
            'data' => $hierarchies,
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
            'data' => $newHierarchy,
        ], 200);
    }

    public function deleteHierarchies($id)
    {
        $hierarchy = Hierarchy::find($id);
        $hierarchy->delete();

        return response()->json([
            'status' => 'Success',
            'message' => 'delete hierarchy success',
            'data' => $hierarchy,
        ], 200);
    }
}
