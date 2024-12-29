<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientRecord extends Model
{
    use HasFactory;

    protected $table = 'registry_form';

    protected $fillable = [
        'NAME', 'FATHERNAME', 'LASTNAME', 'AGE', 'MAINRESIDENCE', 'CURRENTRESIDENCE',
        'DISEASE', 'SEX', 'PHONENUMBER', 'ADDRESS', 'DOCTORNAME', 'ATTENDDATE',
        'LASTATTEND', 'COMPLAINS', 'DIAGNOSIS', 'PRESCRIPTION',
    ];
}
