<?php

namespace App\Http\Controllers\Api;

use App\Models\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return response()->json($doctors);
    }

    public function show($id)
    {
        $doctor = Doctor::findOrFail($id);
        return response()->json($doctor);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'specialty' => 'required|string|max:255',
            'working_days' => 'required|string|max:255',
            'period' => 'required|in:صباحية,ظهرية,مسائية',
            'phone' => 'required|string|max:20',
        ]);

        $doctor = Doctor::create($validated);
        return response()->json($doctor, 201);
    }
}