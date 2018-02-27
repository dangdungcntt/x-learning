<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'address', 'info',
        'permission', 'socials', 'image', 'birthday', 'gender', 'is_teacher'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function order()
    {
        return $this->hasMany('App\ModelsOrder', 'user_id', 'id');
    }

    public function teacher()
    {
        return $this->hasOne('App\Models\Teacher', 'id', 'id');
    }

    public function courses()
    {
        return $this->belongsToMany('App\ModelsCourse', 'course_user', 'course_id', 'user_id');
    }

    public function wish_courses()
    {
        return $this->belongsToMany(
            'App\Models\Course',
            'wishs_list',
            'course_id',
            'user_id');
    }
}
