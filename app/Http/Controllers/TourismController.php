<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tourism;
use Illuminate\Http\Request;

class TourismController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Tourism::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tourism = Tourism::create($request->all());
        return response()->json($tourism, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tourism $tourism)
    {
        return response()->json($tourism, 200);
    }

    public function update(Request $request, Tourism $tourism)
    {
        $tourism->update($request->all());
        return response()->json($tourism, 200);
    }

    public function destroy(Tourism $tourism)
    {
        $tourism->delete();
        return response()->json(null, 204);
    }
}
