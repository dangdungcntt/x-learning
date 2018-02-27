<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseTypeAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function search(Request $request)
    {
        $q = $request->input('q');

        if (empty($q)) {
            return redirect()->route('admin.courses.types.index')->with('flash_error', 'Empty query');
        }

        $listCourseTypes = CourseType::query()
            ->where('id', '=', $q)
            ->orWhere('name', 'LIKE', '%' . $q . '%')
            ->orWhere('details', 'LIKE', '%' . $q . '%')
            ->paginate(10);

        $data = [
            'active' => getAdminActiveMenu('courses/types/index'),
            'listCourseTypes' => $listCourseTypes
        ];

        $noti = "<strong>" . $listCourseTypes->total() . " </strong> result for <strong>\"" . $q . "\"</strong>";

        return view('admin.courses.types.list', $data)->with('noti', $noti);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCourseTypes = CourseType::query()->paginate(10);

        $data = [
            'active' => getAdminActiveMenu('courses/types/index'),
            'listCourseTypes' => $listCourseTypes
        ];

        return view('admin.courses.types.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'active' => getAdminActiveMenu('courses/types/create')
        ];
        return view('admin.courses.types.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'Name is required',
            'details.required' => 'Details is required',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'details' => 'required|max:1000'
        ], $messages);

        if ($validator->fails()) {
            return redirect()->route('admin.courses.types.create')
                ->withErrors($validator)
                ->withInput();
        }

        $courseType = CourseType::create($request->all());

        if ($courseType) {
            return redirect()->route('admin.courses.types.create')->with('flash_success', 'Successfully');
        }

        return redirect()->route('admin.courses.types.create')->with('flash_error', 'Cannot create course type, try again later');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('admin.courses.types.edit', $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courseType = CourseType::query()->find($id);

        if (empty($courseType)) {
            return redirect()->route("admin.courses.types.index")->with('flash_error', 'Course type not exist');
        }

        $data = [
            'active' => getAdminActiveMenu('courses/types'),
            'courseType' => $courseType
        ];

        return view('admin.courses.types.edit', $data);
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
        $courseType = CourseType::query()->find($id);

        if (empty($courseType)) {
            return redirect()->route("admin.courses.types.index")->with('flash_error', 'Course type not exist');
        }

        $messages = [
            'name.required' => 'Name is required',
            'details.required' => 'Details is required',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'details' => 'required|max:1000'
        ], $messages);

        if ($validator->fails()) {
            return redirect()->route('admin.courses.types.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $check = $courseType->update($request->all());

        if ($check) {
            return redirect()->route('admin.courses.types.edit', $id)->with('flash_success', 'Updated');
        }

        return redirect()->route('admin.courses.types.edit', $id)->with('flash_error', 'Cannot update now, try again later');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courseType = CourseType::query()->find($id);

        if (empty($courseType)) {
            return json_encode([
                'success' => false
            ]);
        }

        $success = true;

        if (!$courseType->delete()) {
            $success = false;
        };

        return json_encode([
            'success' => $success
        ]);
    }
}
