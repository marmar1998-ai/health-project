<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مواعيد د. {{ $doctor->name }}</title>
    <style>
        * {
            font-size: 24px;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            max-width: 1000px;
            margin: 0 auto;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .doctor-name {
            font-size: 36px;
            color: #2c3e50;
            margin-bottom: 10px;
        }
        .specialty {
            font-size: 28px;
            color: #3498db;
        }
        .appointment-card {
            border: 2px solid #3498db;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #f8f9fa;
        }
        .appointment-date {
            font-weight: bold;
            font-size: 28px;
            margin-bottom: 10px;
            color: #2c3e50;
        }
        .appointment-period {
            font-size: 26px;
            margin-bottom: 15px;
        }
        .booked {
            background-color: #e74c3c;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            font-weight: bold;
        }
        .available {
            background-color: #27ae60;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }
        .booking-form {
            display: none;
            padding: 20px;
            border: 2px solid #3498db;
            border-radius: 10px;
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 12px;
            font-size: 24px;
            border: 2px solid #ddd;
            border-radius: 5px;
        }
        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 24px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .success-message {
            background-color: #27ae60;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            margin-top: 20px;
            font-size: 26px;
        }
        .error-message {
            background-color: #e74c3c;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            margin-top: 20px;
            font-size: 26px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="doctor-name">د. {{ $doctor->name }}</div>
        <div class="specialty">تخصص: {{ $doctor->specialty }}</div>
    </div>

    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="error-message">
            {{ session('error') }}
        </div>
    @endif

    <h2>المواعيد المتاحة هذا الأسبوع</h2>

    @foreach($appointments as $appointment)
        <div class="appointment-card">
            <div class="appointment-date">
                {{ \Carbon\Carbon::parse($appointment->date)->format('Y-m-d') }}
            </div>
            <div class="appointment-period">
                الفترة: {{ $appointment->period }}
            </div>
            
            @if($appointment->booked)
                <div class="booked">محجوز</div>
            @else
                <div class="available" onclick="showBookingForm('{{ $appointment->id }}')">
                    متاح للحجز
                </div>
                
                <div id="form-{{ $appointment->id }}" class="booking-form">
                    <form method="POST" action="{{ route('appointments.book', $appointment->id) }}">
                        @csrf
                        <div class="form-group">
                            <label for="patient_name">اسم المريض</label>
                            <input type="text" id="patient_name" name="patient_name" required>
                        </div>
                        <div class="form-group">
                            <label for="patient_phone">رقم الهاتف</label>
                            <input type="tel" id="patient_phone" name="patient_phone" required>
                        </div>
                        <button type="submit">تأكيد الحجز</button>
                    </form>
                </div>
            @endif
        </div>
    @endforeach

    <script>
        function showBookingForm(appointmentId) {
            // إخفاء جميع النماذج
            document.querySelectorAll('.booking-form').forEach(form => {
                form.style.display = 'none';
            });
            
            // إظهار النموذج المحدد
            document.getElementById(`form-${appointmentId}`).style.display = 'block';
        }
    </script>
</body>سسسسسس
</html>