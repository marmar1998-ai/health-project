<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.index', compact('doctors'));
    }

    public function create()
    {
        return view('doctors.create');
    }

    public function store(Request $request)
    {
        // معالجة الصورة
        $imagePath = null;
        
        if ($request->hasFile('image')) {
            // حفظ الصورة في المجلد storage/app/public/doctors
            $imagePath = $request->file('image')->store('doctors', 'public');
        }

        // إنشاء سجل الطبيب
        Doctor::create([
            'name' => $request->name,
            'specialty' => $request->specialty,
            'working_days' => $request->working_days,
            'period' => $request->period,
            'phone' => $request->phone,
            'image' => $imagePath // تخزين المسار أو null إذا لم توجد صورة
        ]);

        // إعادة التوجيه إلى صفحة إنشاء طبيب جديدة مع رسالة نجاح
        return redirect()->route('doctors.create')->with('success', 'تمت إضافة الطبيب بنجاح!');
    }
   
    public function show($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctors.show', compact('doctor'));
    }

    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctors.edit', compact('doctor'));
    }

    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'specialty' => 'required|string|max:255',
            'working_days' => 'required|string|max:255',
            'period' => 'required|in:صباحية,ظهرية,مسائية',
            'phone' => 'required|string|max:20',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // حذف الصورة القديمة إذا وجدت
            if ($doctor->image) {
                Storage::disk('public')->delete($doctor->image);
            }
            $imagePath = $request->file('image')->store('doctors', 'public');
            $doctor->image = $imagePath;
        }

        $doctor->name = $validated['name'];
        $doctor->specialty = $validated['specialty'];
        $doctor->working_days = $validated['working_days'];
        $doctor->period = $validated['period'];
        $doctor->phone = $validated['phone'];
        
        $doctor->save();

        return redirect()->route('doctors.index')->with('success', 'تم تحديث بيانات الطبيب بنجاح');
    }
}