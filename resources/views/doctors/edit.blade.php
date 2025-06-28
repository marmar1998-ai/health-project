@extends('layouts')

@section('content')
<div class="container">
    <div class="row">
        <form method="POST" action="{{ route('doctors.update', $doctor->id) }}" enctype="multipart/form-data" id="doctor-form">
            @csrf
            @method('PUT')

            <!-- حاوية الصورة -->
            <div class="col-md-6 col-sm-6">
                <div class="image-container" style="position: relative; height: 100%;">
                    <!-- معاينة الصورة -->
                    <img src="{{ $doctor->image ? asset('storage/' . $doctor->image) : asset('images/appointment-image.jpg') }}"
                         class="img-responsive"
                         alt="صورة الطبيب" id="preview-image"
                         style="width: 100%; height: 100%; object-fit: cover; border: 2px dashed #27ae60; border-radius: 10px;">

                    <!-- زر إضافة الصورة -->
                    <div style="position: absolute; bottom: 20px; right: 20px;">
                        <label for="image" class="btn btn-primary" style="cursor: pointer; padding: 10px 20px;">
                            <i class="fa fa-camera"></i> تعديل الصورة
                        </label>
                        <input type="file" id="image" name="image" accept="image/*" style="display: none;">
                    </div>
                </div>
            </div>

            <!-- حقول النموذج -->
            <div class="col-md-6 col-sm-6">
                <div class="section-title" style="text-align: center; margin-bottom: 30px;">
                    <h2 style="color: #27ae60;">تعديل بيانات الطبيب</h2>
                </div>

                <div>
                    <!-- اسم الطبيب -->
                    <div class="col-md-12 col-sm-12 form-group">
                        <label for="doctor_name">اسم الطبيب</label>
                        <input type="text" class="form-control"
                               style="border: 1px solid #27ae60; padding: 12px;"
                               id="doctor_name" name="name"
                               value="{{ old('name', $doctor->name) }}"
                               required>
                        @error('name')
                            <div class="text-danger" style="margin-top: 5px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- الاختصاص -->
                    <div class="col-md-12 col-sm-12 form-group">
                        <label for="specialty">الاختصاص</label>
                        <input type="text" class="form-control"
                               style="border: 1px solid #27ae60; padding: 12px;"
                               id="specialty" name="specialty"
                               value="{{ old('specialty', $doctor->specialty) }}"
                               required>
                        @error('specialty')
                            <div class="text-danger" style="margin-top: 5px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- أيام الدوام -->
                    <div class="col-md-12 col-sm-12 form-group">
                        <label for="working_days">أيام الدوام</label>
                        <input type="text" class="form-control"
                               style="border: 1px solid #27ae60; padding: 12px;"
                               id="working_days" name="working_days"
                               value="{{ old('working_days', $doctor->working_days) }}"
                               required>
                        @error('working_days')
                            <div class="text-danger" style="margin-top: 5px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- الفترة -->
                    <div class="col-md-12 col-sm-12 form-group">
                        <label for="period">الفترة</label>
                        <select class="form-control"
                                style="border: 1px solid #27ae60; padding: 12px; height: auto;"
                                id="period" name="period" required>
                            <option value="" disabled>اختر الفترة...</option>
                            <option value="صباحية" {{ old('period', $doctor->period) == 'صباحية' ? 'selected' : '' }}>الفترة الصباحية</option>
                            <option value="ظهرية" {{ old('period', $doctor->period) == 'ظهرية' ? 'selected' : '' }}>فترة الظهيرة</option>
                            <option value="مسائية" {{ old('period', $doctor->period) == 'مسائية' ? 'selected' : '' }}>الفترة المسائية</option>
                        </select>
                        @error('period')
                            <div class="text-danger" style="margin-top: 5px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- رقم الهاتف -->
                    <div class="col-md-12 col-sm-12 form-group">
                        <label for="phone">رقم الهاتف</label>
                        <input type="tel" class="form-control"
                               style="border: 1px solid #27ae60; padding: 12px;"
                               id="phone" name="phone"
                               value="{{ old('phone', $doctor->phone) }}"
                               required>
                        @error('phone')
                            <div class="text-danger" style="margin-top: 5px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- زر الإرسال -->
                    <div class="col-md-12 col-sm-12">
                        <button type="submit" class="form-control" id="cf-submit"
                                style="background-color: #27ae60; color: white; margin-top: 20px;
                                       padding: 12px; font-size: 18px; border: none; cursor: pointer;
                                       transition: all 0.3s ease;">
                            <i class="fa fa-save"></i> حفظ التعديلات
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
// نفس كود المعاينة والرسالة
document.addEventListener('DOMContentLoaded', function() {
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
            const name = document.getElementById('name').value;
            if (doctorName) {
                alert(`سيتم تعديل بيانات الدكتور/ة ${name}`);
            }
        });
    }
});
</script>

@if ($errors->any())
    <div class="alert alert-danger" style="position: fixed; bottom: 20px; right: 20px; max-width: 400px; z-index: 1000;">
        <button type="button" class="close" onclick="this.parentElement.style.display='none'">&times;</button>
        <h5>حدثت الأخطاء التالية:</h5>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success" style="position: fixed; bottom: 20px; right: 20px; max-width: 400px; z-index: 1000;">
        <button type="button" class="close" onclick="this.parentElement.style.display='none'">&times;</button>
        <i class="fa fa-check-circle"></i> {{ session('success') }}
    </div>
@endif


@endsection
