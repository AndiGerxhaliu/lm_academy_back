<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseModule extends Model
{
    protected $fillable = [
        'course_id',
        'title',
        'description',
        'nr_of_files',
        'duration'

    ];
    public function course(){
        return $this->belognsTo(Course::class, 'course_id');
    }

  
}
