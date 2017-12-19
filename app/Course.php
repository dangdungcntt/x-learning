<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    
    public function course_type()
    {   
        return $this->belongsTo('App\CourseType', 'type', 'id');     
    }
}
