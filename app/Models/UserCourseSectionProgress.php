<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCourseSectionProgress extends Model
{
    protected $fillable = [
        'user_id',
        'user_section_id'
    ];
    public function user() {
       return $this->belognsTo(User::class, 'user_id');
    }
    public function courseSection() {
        return $this->belognsTo(CourseSection::class, 'course_sections_id');
     }
 }

