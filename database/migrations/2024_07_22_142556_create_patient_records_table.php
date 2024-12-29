<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('NAME');
            $table->string('FATHERNAME');
            $table->string('LASTNAME')->nullable();
            $table->integer('AGE');
            $table->string('MAINRESIDENCE')->nullable();
            $table->string('CURRENTRESIDENCE')->nullable();
            $table->string('DISEASE');
            $table->string('SEX');
            $table->string('PHONENUMBER');
            $table->string('ADDRESS');
            $table->string('DOCTORNAME')->nullable();
            $table->date('ATTENDDATE');
            $table->date('LASTATTEND')->nullable();
            $table->text('COMPLAINS')->nullable();
            $table->text('DIAGNOSIS')->nullable();
            $table->text('PRESCRIPTION')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
