<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequestStore;
use App\Http\Requests\CourseRequestUpdate;
use App\Models\Course;
use App\Models\CourseType;
use App\Models\Lesson;
use App\Models\User;
use Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class CourseAdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function lessons($id)
    {
        $lessons = Lesson::query()->where('course_id', $id)->orderBy('num_order')->get();

        dd($lessons);
    }

    public function search(Request $request)
    {
        $q = $request->input('q');

        if (empty($q)) {
            return redirect()->route('admin.courses.index')->with('flash_error', 'Empty query');
        }

        $op = '<';
        if (strtolower($q) === 'public') $op = '>';
        if (strtolower($q) === 'private') $op = '=';

        $listCourses = Course::whereHas('teacher', function ($query) use ($q) {
            $query->where('name', 'LIKE', '%' . $q . '%');
        })
            ->orWhere(function ($query) use ($q) {
                $query->where('id', '=', $q)
                    ->orWhere('details', 'LIKE', '%' . $q . '%')
                    ->orWhere('name', 'LIKE', '%' . $q . '%')
                    ->orWhere('description', 'LIKE', '%' . $q . '%');
            })
            ->orWhere('public', $op, false)
            ->paginate(10);

//        dd($listCourses);

        $data = [
            'active' => getAdminActiveMenu('courses/index'),
            'listCourses' => $listCourses
        ];

        $noti = "<strong>" . $listCourses->total() . " </strong> result for <strong>\"" . $q . "\"</strong>";

        return view('admin.courses.list', $data)->with('noti', $noti);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCourses = Course::with('course_type')->with('teacher')->paginate(10);

        $data = [
            'active' => getAdminActiveMenu('courses/index'),
            'listCourses' => $listCourses
        ];

        return view('admin.courses.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courseTypes = CourseType::all();

        $data = [
            'active' => getAdminActiveMenu('courses/create'),
            'courseTypes' => $courseTypes
        ];

        return view('admin.courses.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequestStore $request)
    {
        $request->merge(['public' => (int)$request->input('public') == 'on']);

        $course = Course::create($request->all());

        if ($course) {
            return redirect()->route('admin.courses.create')->with('flash_success', 'Successfully');
        }

        return redirect()->route('admin.courses.create')->with('flash_error', 'Cannot create course, try again later');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('admin.courses.edit', $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::query()->find($id);

        if (empty($course)) {
            return redirect()->route("admin.courses.index")->with('flash_error', 'Course not exist');
        }

        $courseTypes = CourseType::all();

        $teachers = User::query()->where('is_teacher', '=', 1)->get();

//        dd($teachers);
        $data = [
            'active' => getAdminActiveMenu('courses'),
            'course' => $course,
            'courseTypes' => $courseTypes,
            'teachers' => $teachers
        ];

        return view('admin.courses.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourseRequestUpdate $request, $id)
    {
        $course = Course::query()->find($id);

        if (empty($course)) {
            return redirect()->route("admin.courses.index")->with('flash_error', 'Course not exist');
        }

        $teacher = User::query()->find($request->input('teacher_id'));

        if (!$teacher->is_teacher) {
            return redirect()->route('admin.courses.edit', $id)->with('flash_error', 'Only teacher can assignee to course');
        }

        $public = $request->input('public') == 'on';
        $request->merge(['public' => $public]);

        $check = $course->update($request->all());

        if ($check) {
            return redirect()->route('admin.courses.edit', $id)->with('flash_success', 'Updated');
        }

        return redirect()->route('admin.courses.create')->with('flash_error', 'Cannot create course, try again later');
    }

    public function updateImg(Request $request, $id)
    {
        $course = Course::query()->find($id);

        if (empty($course)) {
            return json_encode([
                'success' => false,
                'message' => 'Courses is not exists'
            ]);
        }

        if (!$request->hasFile('img')) {
            return json_encode([
                'success' => false,
                'message' => 'Missing file (img)'
            ]);
        }

        $file = $request->file('img');

        $ext = strtolower($file->getClientOriginalExtension());

        if (!in_array($ext, ['png', 'jpg', 'jpeg', 'gif'])) {
            return json_encode([
                'success' => false,
                'message' => 'File format must be png|jpg|jpeg|gif'
            ]);
        }
        
        $public = public_path() . DIRECTORY_SEPARATOR;
        $path = Config::get('app.course_path');

        $currentFile = $course->image;
        $fileName = $id . "_" . time() . "." . $ext;

        $newPath = $file->move($public . $path, $fileName);

        if (!$newPath) {
            return json_encode([
                'success' => false,
                'message' => 'An error occurs, try again later'
            ]);
        }

        $check = $course->update(['image' => $fileName]);

        if (!$check) {
            return json_encode([
                'success' => false,
                'message' => 'An error occurs, try again later'
            ]);
        }

        chmod($public . $path . $fileName, 0660);

        return json_encode([
            'success' => true,
            'path' => asset($path . $fileName)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::query()->find($id);

        if (empty($course)) {
            return json_encode([
                'success' => false
            ]);
        }

        $success = true;

        if (!$course->delete()) {
            $success = false;
        };

        return json_encode([
            'success' => $success
        ]);
    }
}
