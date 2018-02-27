<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['id', 'job', 'degree', 'experience'];

    public function user() {
        return $this->hasOne('App\Models\User', 'id', 'id');
    }

    public function courses() {
        return $this->hasMany('App\Models\Course', 'teacher_id', 'id');
    }
}
