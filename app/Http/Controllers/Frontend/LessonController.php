<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Course;
use App\Models\CourseUser;
use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LessonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id)
    {

    }

    public function play($id)
    {
//        $lesson = Lesson::query()->with('course')->find($id);
//
//        if (!$lesson) {
//            return redirect()->route('account.courses')->with('flash_error', 'Lesson does not exist');
//        }
//
//        $user = auth()->user();
//        $course = $lesson->course;
//
//        $check = CourseUser::query()
//            ->where('course_id', $course->id)
//            ->where('user_id', $user->id)->first();
//
//        if (!$check) {
//            return redirect()->route('courses.show', $course->id)->with('flash_error', 'You must enroll course before can learn');
//        }
//
//        $data = [
//            'course' => $course,
//            'lesson' => $lesson
//        ];

        return view('frontend.lessons.play');
    }

}
