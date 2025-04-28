<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseMaterial extends Model
{
   protected $fillable =[
    'course_section_id',
    'title',
    'type',
    'contect',
    'material_url',
    'sort_order',
    'created_by',
    'updated_by'

   ];
   public function section(){
    return $this->belognsTo(CourseSection::class, 'course_section_id');
   }
   public function creator(){
    return $this->belognsTo(User::class, 'created_by')->selectUserName();
   }
   public function updator(){
    return $this->belognsTo(User::class, 'updated_by')->selectUserName();
   }
}
