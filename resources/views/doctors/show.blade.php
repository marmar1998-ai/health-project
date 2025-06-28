@extends('layouts')

@section('content')
<div class="container">
    <div class="row">

        <!-- صورة الطبيب -->
        <div class="col-md-6 col-sm-6">
            <img src="{{ $doctor->image ? asset('storage/' . $doctor->image) : asset('images/appointment-image.jpg') }}"
                 alt="صورة الطبيب" class="img-fluid"
                 style="width: 100%; height: auto; border-radius: 10px; border: 2px solid #27ae60;">
        </div>

        <!-- بيانات الطبيب -->
        <div class="col-md-6 col-sm-6">
            <h2 style="color: #27ae60;">{{ $doctor->name }}</h2>
            <p><strong>الاختصاص:</strong> {{ $doctor->specialty }}</p>
            <p><strong>أيام الدوام:</strong> {{ $doctor->working_days }}</p>
            <p><strong>الفترة:</strong> {{ $doctor->period }}</p>
            <p><strong>رقم الهاتف:</strong> {{ $doctor->phone }}</p>

            <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-primary" style="margin-top: 20px;">
                <i class="fa fa-edit"></i> تعديل
            </a>
        </div>
    </div>
</div>
@endsection
