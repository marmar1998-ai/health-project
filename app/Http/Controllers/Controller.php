<?php

namespace App\Http\Controllers;

abstract class Controller
{
    
public function getDoctors(Request $request) {
    $query = $request->input('query');
    
    $doctors = Doctor::where('name', 'like', "%$query%")
                     ->orWhere('specialty', 'like', "%$query%")
                     ->get();
    
    return response()->json($doctors);
}
}
