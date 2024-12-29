<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistryForm extends Model
{
    use HasFactory;

    protected $table = 'REGISTRY_FORM'; // Ensure this matches your table name
    protected $primaryKey = 'id'; // Ensure this matches your primary key column name

    protected $fillable = [
        'NAME',
        'LASTNAME',
        'AGE',
        'PHONENUMBER',
        'ADDRESS',
        'DISEASE',
        'DIAGNOSIS',
        'ATTENDDATE',
    ];
}
