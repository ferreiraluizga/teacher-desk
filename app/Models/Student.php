<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'name',
        'description',
        'birth',
        'class_id'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'class_id');
    }

    public function average()
    {
        return $this->hasOne(Average::class, 'student_id');
    }
}
