<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */



     public function up()
{
    Schema::create('appointments', function (Blueprint $table) {
        $table->id();
        $table->foreignId('doctor_id')->constrained()->onDelete('cascade');
        $table->date('date');
        $table->enum('period', ['صباحية', 'ظهرية', 'مسائية']);
        $table->string('patient_name')->nullable();
        $table->string('patient_phone')->nullable();
        $table->boolean('booked')->default(false);
        $table->timestamps();
    });
}
 





    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
