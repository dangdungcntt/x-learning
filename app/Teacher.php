<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['job', 'degree', 'experience'];

    public function user() {
        return $this->hasOne('App\User', 'id', 'id');
    }

    public function courses() {
        return $this->hasMany('App\Course', 'teacher_id', 'id');
    }
}
