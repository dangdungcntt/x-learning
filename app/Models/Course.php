<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "courses";

    protected $fillable = [
        'name', 'description', 'details', 'type_id', 'price',
        'max_students', 'num_students', 'start_at', 'end_at', 'public'
    ];

    public function course_type() {
        return $this->hasOne('App\Models\CourseType', 'id', 'type_id');
    }

    public function users()
    {
        return $this->belongsToMany(
            'App\Models\Users',
            'course_user',
            'user_id',
            'course_id');
    }

    public function wish_users()
    {
        return $this->belongsToMany(
            'App\Models\Users',
            'wishs_list',
            'user_id',
            'course_id');
    }

    public function lessions()
    {
        return $this->hasMany(
            'App\Models\Lesson',
            'course_id',
            'id');
    }

    public function teacher(){
        return $this->hasOne('App\Models\User', 'id', 'teacher_id');
    }

    public function orders()
    {
        return $this->belongsToMany(
            'App\Models\Orders',
            'order_details',
            'order_id',
            'course_id');
    }
}
