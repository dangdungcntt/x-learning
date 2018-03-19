<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LessonRequestStore;
use App\Http\Requests\LessonRequestUpdate;
use App\Models\Course;
use App\Models\Lesson;
use Config;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class LessonAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function search(Request $request)
    {
        $q = $request->input('q');

        if (empty($q)) {
            return redirect()->route('admin.lessons.index')->with('flash_error', 'Empty query');
        }

//        $op = '<';
//        if (strtolower($q) === 'public') $op = '>';
//        if (strtolower($q) === 'private') $op = '=';

        $listLessons = Lesson::query()->whereHas('course', function (Builder $query) use ($q) {
            $query->where('name', 'LIKE', '%' . $q . '%');
        })->orWhere(function (Builder $query) use ($q) {
            $query->where('id', '=', $q)
                ->orWhere('details', 'LIKE', '%' . $q . '%')
                ->orWhere('name', 'LIKE', '%' . $q . '%');
        })->paginate(10);

        $data = [
            'active' => getAdminActiveMenu('courses/index'),
            'lessons' => $listLessons
        ];

        $noti = "<strong>" . $listLessons->total() . " </strong> result for <strong>\"" . $q . "\"</strong>";

        return view('admin.lessons.list', $data)->with('noti', $noti);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = Lesson::with('course')->paginate(10);

        $data = [
            'active' => getAdminActiveMenu('lessons/index'),
            'lessons' => $lessons
        ];

        return view('admin.lessons.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();

        $data = [
            'active' => getAdminActiveMenu('lessons/create'),
            'courses' => $courses
        ];

        return view('admin.lessons.create')->with($data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(LessonRequestStore $request)
    {
        $lesson = Lesson::query()->create($request->all());

        if ($lesson) {
            return redirect()->route('admin.lessons.create')->with('flash_success', 'Successfully');
        }

        return redirect()->route('admin.lessons.create')->with('flash_error', 'Cannot create lesson`, try again later');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('admin.lessons.edit', $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lesson = Lesson::query()->find($id);

        if (empty($lesson)) {
            return redirect()->route("admin.lessons.index")->with('flash_error', 'Lesson not exist');
        }

        $courses = Course::all();

        $data = [
            'active' => getAdminActiveMenu('lessons'),
            'courses' => $courses,
            'lesson' => $lesson
        ];

        return view('admin.lessons.edit', $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(LessonRequestUpdate $request, $id)
    {
        $lesson = Lesson::query()->find($id);

        if (empty($lesson)) {
            return redirect()->route("admin.lessons.index")->with('flash_error', 'Lesson not exist');
        }

        $check = $lesson->update($request->all());

        if ($check) {
            return redirect()->route('admin.lessons.edit', $id)->with('flash_success', 'Updated');
        }

        return redirect()->route('admin.lessons.create')->with('flash_error', 'Cannot update lesson, try again later');
    }

    public function updateImg(Request $request, $id)
    {
        $lesson = Lesson::query()->find($id);

        if (empty($lesson)) {
            return json_encode([
                'success' => false,
                'message' => 'Lessons is not exists'
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
        $path = Config::get('app.lesson_path');

        $fileName = $id . "_" . time() . "." . $ext;

        $newPath = $file->move($public . $path, $fileName);

        if (!$newPath) {
            return json_encode([
                'success' => false,
                'message' => 'An error occurs, try again later'
            ]);
        }

        $check = $lesson->update(['image' => $fileName]);

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
        //
    }
}
