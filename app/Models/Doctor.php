<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

protected $fillable = [
    'name',         // اسم الطبيب
    'specialty',    // الاختصاص
    'working_days', // أيام الدوام
    'period',       // الفترة (صباحية/ظهرية/مسائية)
    'phone',        // رقم الهاتف
    'image'         // الصورة
];

    public function appointments()
{
    return $this->hasMany(Appointment::class);
}
}