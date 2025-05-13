<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Average extends Model
{

    use HasFactory;

    protected $table = 'averages';

    protected $fillable = [
        'student_id',
        'participation',
        'book',
        'extra_job',
        'pratical_class',
        'final_exam',
        'recovery_exam',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
