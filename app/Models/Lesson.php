<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = 'lessons';

    public function course() {
        return $this->hasOne('App\Models\Course', 'id', 'course_id');
    }
}
