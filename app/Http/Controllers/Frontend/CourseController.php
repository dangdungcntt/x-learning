<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $params = $request->all();
        $title = 'Course - Academy';
        $view = 'frontend.courses.list';
        $data = [
            'title' => $title,
            'active' => getActiveMenu('courses')
        ];
        $view = empty($params['s']) || $params['s'] != 'list' ? 'frontend.courses.grid' : $view;
        return view($view, $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Course Details - Academy';
        $data = [
            'title' => $title,
            'active' => getActiveMenu('courses')
        ];
        if ($id == 'free') {
            return view('frontend.courses.freeshow', $data);
        }
        return view('frontend.courses.show', $data);
    }


    function a() {

    }
}
