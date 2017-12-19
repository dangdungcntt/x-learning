<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseType extends Model
{
    protected $table = 'course_types';

    public function course()
    {
        return $this->hasMany('App\Course', 'type', 'id');
    }
}
