<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = 'lessons';

    protected $fillable = [
        'name', 'details', 'course_id', 'image', 'start_at', 'end_at', 'num_order'
    ];

    public function course() {
        return $this->hasOne('App\Models\Course', 'id', 'course_id');
    }
}
