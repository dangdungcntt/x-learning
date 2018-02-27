<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseType extends Model
{
    protected $table = "course_types";

    protected $fillable = ['name', 'details', 'image'];

    public function courses() {
        return $this->hasMany('App\Models\Course', 'type_id', 'id');
    }
}
