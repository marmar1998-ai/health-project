@extends('layouts')

@section('title', 'إدارة الأطباء')

@section('content')
<style>
   
    .doctors-section {
        padding: 60px 0;
        background-color: #f9f9f9;
    }
    
    .section-header {
        text-align: center;
        margin-bottom: 40px;
    }
    
    .section-header h2 {
        font-size: 2.5rem;
        color: #2980b9;
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
        padding-bottom: 10px;
    }
    
    .section-header h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 3px;
        background: linear-gradient(to right, #3498db, #27ae60);
    }
    
    .add-doctor-btn {
        background: #27ae60;
        color: white;
        padding: 12px 30px;
        border-radius: 30px;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin: 20px 0;
        transition: all 0.3s;
        text-decoration: none;
    }
    
    .add-doctor-btn:hover {
        background: #219653;
        transform: translateY(-3px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    
    .doctor-card {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        margin-bottom: 30px;
        height: 100%;
    }
    
    .doctor-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }
    
    .doctor-img-container {
        height: 250px;
        overflow: hidden;
    }
    
    .doctor-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }
    
    .doctor-card:hover .doctor-img {
        transform: scale(1.05);
    }
    
    .doctor-info {
        padding: 20px;
    }
    
    .doctor-name {
        font-weight: 700;
        font-size: 1.4rem;
        color: #2980b9;
        margin-bottom: 8px;
    }
    
    .doctor-specialty {
        color: #27ae60;
        font-weight: 600;
        margin-bottom: 12px;
        display: block;
    }
    
    .doctor-details {
        color: #555;
        margin-bottom: 15px;
        font-size: 0.95rem;
    }
    
    .doctor-details i {
        margin-left: 8px;
        color: #3498db;
        width: 20px;
    }
    
    .doctor-actions {
        display: flex;
        justify-content: center;
        gap: 12px;
        margin-top: 15px;
        flex-wrap: wrap;
    }
    
    .action-btn {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        color: white;
        transition: all 0.2s;
        text-decoration: none;
    }
    
    .action-btn:hover {
        transform: scale(1.1);
    }
    
    .btn-view {
        background: #3498db;
    }
    
    .btn-edit {
        background: #f39c12;
    }
    
    .btn-delete {
        background: #e74c3c;
    }
    
    .empty-state {
        background: white;
        border-radius: 12px;
        padding: 50px 20px;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        margin: 30px 0;
    }
    
    .empty-state i {
        font-size: 5rem;
        color: #bdc3c7;
        margin-bottom: 20px;
    }
    
    .empty-state h3 {
        color: #7f8c8d;
        margin-bottom: 15px;
    }
    
    .alert-message {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 9999;
        min-width: 300px;
        max-width: 90%;
        animation: fadeIn 0.5s, fadeOut 0.5s 2.5s;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes fadeOut {
        from { opacity: 1; transform: translateY(0); }
        to { opacity: 0; transform: translateY(-20px); }
    }
    
    @media (max-width: 768px) {
        .doctor-img-container {
            height: 200px;
        }
        
        .section-header h2 {
            font-size: 2rem;
        }
        
        .doctor-name {
            font-size: 1.2rem;
        }
        
        .doctor-actions {
            gap: 8px;
        }
        
        .action-btn {
            width: 36px;
            height: 36px;
        }
    }
</style>

<!-- رسائل التنبيه -->
@if(session('success'))
<div class="alert alert-success alert-message">
    <i class="fa fa-check-circle me-2"></i> {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger alert-message">
    <i class="fa fa-exclamation-circle me-2"></i> {{ session('error') }}
</div>
@endif

<section class="doctors-section" data-stellar-background-ratio="1">
    <div class="container">
        <div class="section-header">
            <h2><i class="fa fa-user-md me-3"></i>إدارة الأطباء</h2>
            <p>إدارة معلومات الأطباء وتحديث بياناتهم</p>
            
            <a href="{{ route('doctors.create') }}" class="add-doctor-btn">
                <i class="fa fa-plus"></i> إضافة طبيب جديد  </a>
        </div>

        <div class="row">
            @if($doctors->count() > 0)
@foreach($doctors as $doctor)
<div class="col-lg-4 col-md-6">
    <div class="doctor-card">
        <div class="doctor-img-container">
            @if($doctor->image)
                <img src="{{ asset('storage/' . $doctor->image) }}" class="doctor-img" alt="{{ $doctor->name }}">
            @else
                <img src="https://via.placeholder.com/400x300/eef2f7/637381?text=صورة+الطبيب" class="doctor-img" alt="صورة افتراضية">
            @endif
        </div>
        
        <div class="doctor-info">
            <h3 class="doctor-name">{{ $doctor->name }}</h3>
            <span class="doctor-specialty">{{ $doctor->specialty }}</span>
            
            <div class="doctor-details">
                <p><i class="fa fa-user-md"></i> {{ $doctor->period }}</p>
                <p><i class="fa fa-calendar"></i> {{ $doctor->working_days }}</p>
                <p><i class="fa fa-phone"></i> {{ $doctor->phone }}</p>
            </div>
            
            <div class="doctor-actions">
                <a href="{{ route('doctors.show', $doctor->id) }}" class="action-btn btn-view" title="عرض التفاصيل">
                    <i class="fa fa-eye"></i>
                </a>
                <a href="{{ route('doctors.edit', $doctor->id) }}" class="action-btn btn-edit" title="تعديل">
                    <i class="fa fa-edit"></i>
                </a>
                <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="action-btn btn-delete" title="حذف" onclick="return confirm('هل أنت متأكد من حذف هذا الطبيب؟')">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
            @else
                <div class="col-12">
                    <div class="empty-state">
                        <i class="fa fa-user-md"></i>
                        <h3>لا يوجد أطباء مسجلين</h3>
                        <p class="mb-4">يمكنك البدء بإضافة طبيب جديد باستخدام الزر بالأعلى</p>
                        <a href="{{ route('doctors.create') }}" class="add-doctor-btn">
                            <i class="fa fa-plus"></i> إضافة أول طبيب
                        </a>
                    </div>
                </div>
            @endif
        </div>
        
        @if($doctors->count() > 0)
        <div class="text-center mt-4">
            <a href="{{ route('doctors.create') }}" class="add-doctor-btn">
                <i class="fa fa-plus"></i> إضافة طبيب جديد
            </a>
        </div>
        @endif
    </div>
</section>

<script>
    // إخفاء رسائل التنبيه بعد 3 ثوانٍ
    setTimeout(() => {
        document.querySelectorAll('.alert-message').forEach(alert => {
            alert.style.display = 'none';
        });
    }, 3000);
</script>
@endsection