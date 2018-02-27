<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Course;
use App\Models\CourseType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class CourseAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
    public function store(CourseRequest $request)
    {
        $request->merge(['public' => (int) $request->input('public') == 'on']);

        $courseType = Course::create($request->all());

        if ($courseType) {
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
