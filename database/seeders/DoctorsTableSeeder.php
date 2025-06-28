<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;

class DoctorsTableSeeder extends Seeder
{
    public function run()
    {
        Doctor::create([
            'name' => 'د. أحمد محمد',
            'specialty' => 'جراحة عامة',
            'working_days' => 'السبت, الأحد, الثلاثاء',
            'period' => 'صباحية',
            'phone' => '0912345678'
        ]);
        
        Doctor::create([
            'name' => 'د. سارة عبد الله',
            'specialty' => 'طب الأطفال',
            'working_days' => 'الأحد, الثلاثاء, الخميس',
            'period' => 'ظهرية',
            'phone' => '0923456789'
        ]);
    }
}
