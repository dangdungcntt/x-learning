<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function course_type() {
        return $this->hasOne('App\CourseType', 'id', 'type');
    }

    public function users()
    {
        return $this->belongsToMany(
            'App\Users',
            'course_user',
            'user_id',
            'course_id');
    }

    public function wish_users()
    {
        return $this->belongsToMany(
            'App\Users',
            'wishs_list',
            'user_id',
            'course_id');
    }

    public function lessions()
    {
        return $this->hasMany(
            'App\Lession',
            'course_id',
            'id');
    }

    public function teacher(){
        return $this->hasOne('App\Teacher', 'id', 'teacher_id');
    }

    public function orders()
    {
        return $this->belongsToMany(
            'App\Orders',
            'order_details',
            'order_id',
            'course_id');
    }
}
