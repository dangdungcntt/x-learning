<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseType extends Model
{
    public function courses() {
        return $this->hasMany('App\Models\Course', 'type', 'id');
    }
}