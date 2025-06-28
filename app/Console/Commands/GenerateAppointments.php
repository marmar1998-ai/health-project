<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Doctor; // استيراد نموذج الطبيب
use App\Models\Appointment; // استيراد نموذج المواعيد
use Carbon\Carbon; // لمعالجة التواريخ

class GenerateAppointments extends Command
{
    /**
     * اسم الأمر وإشارته في الكونسول
     * @var string
     */
    protected $signature = 'appointments:generate';

    /**
     * وصف الأمر
     * @var string
     */
    protected $description = 'Generate weekly appointments for doctors';

    /**
     * تنفيذ الأمر
     */
    public function handle()
    {
        // الحصول على جميع الأطباء
        $doctors = Doctor::all();
        
        // تاريخ بداية الأسبوع الحالي (اليوم الأول من الأسبوع)
        $startDate = Carbon::now()->startOfWeek();
        
        // التكرار لكل طبيب
        foreach ($doctors as $doctor) {
            // إنشاء مواعيد لمدة أسبوع (7 أيام)
            for ($i = 0; $i < 7; $i++) {
                // تاريخ اليوم الحالي في الأسبوع
                $date = $startDate->copy()->addDays($i);
                
                // إضافة الفترات الثلاث لكل يوم
                foreach (['صباحية', 'ظهرية', 'مسائية'] as $period) {
                    // إنشاء الموعد إذا لم يكن موجوداً
                    Appointment::firstOrCreate([
                        'doctor_id' => $doctor->id,
                        'date' => $date->format('Y-m-d'),
                        'period' => $period
                    ], [
                        'booked' => false // افتراضياً غير محجوز
                    ]);
                }
            }
        }
        
        // رسالة نجاح
        $this->info('تم إنشاء المواعيد الأسبوعية بنجاح');
    }
}