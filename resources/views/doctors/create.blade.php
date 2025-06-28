@extends('layouts')

@section('content')
<div class="container">
    <div class="row">
        <form method="POST" action="{{ route('doctors.store') }}" enctype="multipart/form-data" id="doctor-form">
            @csrf
            
            <!-- حاوية الصورة -->
            <div class="col-md-6 col-sm-6">
                <div class="image-container" style="position: relative; height: 100%;">
                    <!-- معاينة الصورة -->
                    <img src="{{ asset('images/appointment-image.jpg') }}" class="img-responsive" 
                         alt="صورة افتراضية" id="preview-image" 
                         style="width: 100%; height: 100%; object-fit: cover; border: 2px dashed #27ae60; border-radius: 10px;">
                    
                    <!-- زر إضافة الصورة -->
                    <div style="position: absolute; bottom: 20px; right: 20px;">
                        <label for="image" class="btn btn-primary" style="cursor: pointer; padding: 10px 20px;">
                            <i class="fa fa-camera"></i> إضافة صورة
                        </label>
                        <input type="file" id="image" name="image" accept="image/*" style="display: none;">
                    </div>
                </div>
            </div>

            <!-- حقول النموذج -->
            <div class="col-md-6 col-sm-6">
                <!-- عنوان النموذج -->
                <div class="section-title" style="text-align: center; margin-bottom: 30px;">
                    <h2 style="color: #27ae60;">إضافة طبيب جديد</h2>
                </div>

                <div>
                    <!-- حقل اسم الطبيب -->
                    <div class="col-md-12 col-sm-12 form-group">
                        <label for="name">اسم الطبيب</label>
                        <input type="text" class="form-control" 
                               style="border: 1px solid #27ae60; padding: 12px;"
                               id="name" name="name" 
                               placeholder="أدخل الاسم الكامل للطبيب" required>
                        @error('name')
                            <div class="text-danger" style="margin-top: 5px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- حقل الاختصاص -->
                    <div class="col-md-12 col-sm-12 form-group">
                        <label for="specialty">الاختصاص</label>
                        <input type="text" class="form-control" 
                               style="border: 1px solid #27ae60; padding: 12px;"
                               id="specialty" name="specialty" 
                               placeholder="اختصاص الطبيب" required>
                        @error('specialty')
                            <div class="text-danger" style="margin-top: 5px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- حقل أيام الدوام -->
                    <div class="col-md-12 col-sm-12 form-group">
                        <label for="working_days">أيام الدوام</label>
                        <input type="text" class="form-control" 
                               style="border: 1px solid #27ae60; padding: 12px;"
                               id="working_days" name="working_days" 
                               placeholder="أيام العمل (مثال: السبت، الأحد، الإثنين)" required>
                        @error('working_days')
                            <div class="text-danger" style="margin-top: 5px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- قائمة الفترة المنسدلة -->
                    <div class="col-md-12 col-sm-12 form-group">
                        <label for="period">الفترة</label>
                        <select class="form-control" 
                                style="border: 1px solid #27ae60; padding: 12px; height: auto;" 
                                id="period" name="period" required>
                            <option value="" disabled selected>اختر الفترة...</option>
                            <option value="صباحية">الفترة الصباحية</option>
                            <option value="ظهرية">فترة الظهيرة</option>
                            <option value="مسائية">الفترة المسائية</option>
                        </select>
                        @error('period')
                            <div class="text-danger" style="margin-top: 5px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- حقل رقم الهاتف -->
                    <div class="col-md-12 col-sm-12 form-group">
                        <label for="phone">رقم الهاتف</label>
                        <input type="tel" class="form-control" 
                               style="border: 1px solid #27ae60; padding: 12px;"
                               id="phone" name="phone" 
                               placeholder="رقم هاتف الطبيب" required>
                        @error('phone')
                            <div class=
                            
                            
                            "text-danger" style="margin-top: 5px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- زر الإرسال -->
                    <div class="col-md-12 col-sm-12">
                        <button type="submit" class="form-control" id="cf-submit" 
                                style="background-color: #27ae60; color: white; margin-top: 20px; 
                                       padding: 12px; font-size: 18px; border: none; cursor: pointer;
                                       transition: all 0.3s ease;">
                            <i class="fa fa-user-md"></i> حفظ الطبيب
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- معاينة الصورة باستخدام JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // معاينة الصورة عند اختيارها
    const imageInput = document.getElementById('image');
    const previewImage = document.getElementById('preview-image');
    
    if (imageInput && previewImage) {
        imageInput.addEventListener('change', function() {
            if (this.files && this.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    previewImage.style.border = "2px solid #27ae60";
                }
                
                reader.readAsDataURL(this.files[0]);
            }
        });
    }
    

    const form = document.getElementById('doctor-form');
    
if (form) {
    form.addEventListener('submit', function(e) {
        e.preventDefault(); 
        
        const doctorName = document.getElementById('name').value;
        
        if(doctorName) {
           
            if(confirm(`هل أنت متأكد من إضافة الدكتور/ة ${doctorName}؟`)) {
                
                this.submit(); 
            }
        }
    });
}
});
</script>

<!-- إظهار جميع الأخطاء في منطقة واحدة -->
@if ($errors->any())
    <div class="alert alert-danger" style="position: fixed; bottom: 20px; right: 20px; max-width: 400px; z-index: 1000;">
        <button type="button" class="close" style="position: absolute; top: 5px; right: 10px; font-size: 24px;" 
                onclick="this.parentElement.style.display='none'">&times;</button>
        <h5 style="margin-bottom: 10px;">حدثت الأخطاء التالية:</h5>
        <ul style="margin-bottom: 0;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- رسالة نجاح -->
@if (session('success'))
    <div class="alert alert-success" style="position: fixed; bottom: 20px; right: 20px; max-width: 400px; z-index: 1000;">
        <button type="button" class="close" style="position: absolute; top: 5px; right: 10px; font-size: 24px;" 
                onclick="this.parentElement.style.display='none'">&times;</button>
        <i class="fa fa-check-circle"></i> {{ session('success') }}
    </div>
@endif

<!-- أنماط إضافية -->
<style>
    body {
        background-color: #f8f9fa;
        padding: 20px;
    }
    
    .image-container {
        height: 500px;
        background-color: #f0f8ff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    
    .form-group {
        margin-bottom: 20px;
    }
    
    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #2c3e50;
    }
    
    .form-control:focus {
        border-color: #1abc9c;
        box-shadow: 0 0 0 0.2rem rgba(39, 174, 96, 0.25);
    }
    
    #cf-submit:hover {
        background-color: #219653 !important;
        transform: translateY(-3px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    @media (max-width: 768px) {
        .col-md-6 {
            width: 100%;
        }
        
        .image-container {
            height: 300px;
            margin-bottom: 30px;
        }
    }
</style>
@endsection