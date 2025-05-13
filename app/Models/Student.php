<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    use HasFactory;
    
    protected $table = 'students';

    protected $fillable = [
        'name',
        'description',
        'birth',
        'course_id'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function average()
    {
        return $this->hasOne(Average::class, 'student_id');
    }
}
