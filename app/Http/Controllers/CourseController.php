<?php

namespace App\Http\Controllers;

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
        $view = 'courses.list';
        $data = [
            'title' => $title,
            'active' => getActiveMenu('courses')
        ];
        $view = empty($params['s']) || $params['s'] != 'list' ? 'courses.grid' : $view;
        return view($view, $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Not found',
            'active' => getActiveMenu(),
            'showBanner' => false
        ];
        return view('pages.404')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'title' => 'Not found',
            'active' => getActiveMenu(),
            'showBanner' => false
        ];
        return view('pages.404')->with($data);
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
            return view('courses.freeshow', $data);        
        }
        return view('courses.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => 'Not found',
            'active' => getActiveMenu(),
            'showBanner' => false
        ];
        return view('pages.404')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            'title' => 'Not found',
            'active' => getActiveMenu(),
            'showBanner' => false
        ];
        return view('pages.404')->with($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = [
            'title' => 'Not found',
            'active' => getActiveMenu(),
            'showBanner' => false
        ];
        return view('pages.404')->with($data);
    }
}
