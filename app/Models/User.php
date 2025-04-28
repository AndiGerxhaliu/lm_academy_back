<?php

namespace App\Models;
use App\Models\Course;
use App\Models\UserInfo;
use App\Models\UserList;
use App\Models\Scoreboard;
use App\Models\CourseMaterial;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'password',
        'image',
        'date_of_birth',
        'academic_year',
        'acc_status',
        'profile_completed'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function scopeSelectSomeUserData($query){
        return $query->select('users.id', 'first_name' , 'last_name' , 'gender' , 'email' , 'image');
    }

    public function scopeSelectUserName($query){
        return $query->select('users.id', 'first_name' , 'last_name' );
    }

    
    public function userInfo() {
        return $this->hasOne(UserInfo::class, 'user_id', 'id');
    }

    public function lists(){
        return $this->belognsToMany(UserList::class, 'user_list_items','user_id','list_id')->withTimestamps();
    }

    public function scoreOnscoreboard() {
       return $this->hasOne(Scoreboard::class, 'user_id');
    }

    public function createdCourses(){
        return $this->hasMany(Course::class, 'created_by');
    }
    public function updatedCourses(){
        return $this->hasMany(Course::class, 'updated_by');
    }
    public function createdCourseMaterials(){
        return $this->hasMany(CourseMaterial::class, 'created_by');
    }
    public function updatedCourseMaterials(){
        return $this->hasMany(CourseMaterial::class, 'updated_by');
    }
    
}
