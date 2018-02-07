<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curUser = auth()->user();
        $permission = $curUser->permission;

        $listUsers = User::where('permission', '<', $permission)->get();
        $view = 'admin.users.list';
        $data = [
            'title' => 'List user',
            'active' => getAdminActiveMenu('users/index'),
            'listUsers' => $listUsers
        ];
        return view($view, $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $view = 'admin.users.create';
        $data = [
            'title' => 'Create user',
            'active' => getAdminActiveMenu('users/create')
        ];
        return view($view, $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curUser = auth()->user();
        $permission = $curUser->permission;
        $editingUser = User::where('permission', '<', $permission)->find($id);//->find($id)->first();
//        die(json_encode($editingUser));
        $view = 'admin.users.edit';
        $data = [
            'title' => 'Edit user',
            'active' => getActiveMenu('admin-menu'),
            'editingUser' => $editingUser,
            'showBanner' => false
        ];
        return view($view, $data);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
