<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{

    public function up()
{
    Schema::create('doctors', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('specialty');
        $table->string('working_days');
        $table->enum('period', ['صباحية', 'ظهرية', 'مسائية']);
        $table->string('phone');
        $table->text('schedule'); // جدول مواعيد ثابت: {"saturday":["morning"],"sunday":["afternoon"]}
        $table->string('image')->nullable();
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}