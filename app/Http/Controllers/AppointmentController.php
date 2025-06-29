<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with('doctor')->get();
        return view('appointments.index', compact('appointments'));
    }

    public function create()
    {
        $doctors = Doctor::all();
        return view('appointments.create', compact('doctors'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'appointment_date' => 'required|date',
            'patient_name' => 'required|string|max:255',
            'patient_phone' => 'required|string|max:20',
            'notes' => 'nullable|string',
        ]);

        Appointment::create($validated);

        return redirect()->back()->with('success', 'تم حجز الموعد بنجاح!');
    }
}