<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Instructors - Academy';
        $view = 'frontend.instructors.list';
        $data = [
            'title' => $title,
            'active' => getActiveMenu('instructors')
        ];
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
        $title = 'Instructors details - Academy';
        $view = 'frontend.instructors.show';
        $data = [
            'title' => $title,
            'active' => getActiveMenu('instructors')
        ];
        return view($view, $data);
    }
}
