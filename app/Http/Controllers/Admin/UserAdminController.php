<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function search(Request $request)
    {
        $q = $request->input('q');

        if (empty($q)) {
            return redirect()->route('admin.users.index')->with('flash_error', 'Empty query');
        }

        $permission = getUserPermission();

        $listUsers = User::query()
            ->where('permission', '<', $permission)
            ->where(function ($query) use ($q) {
                $query->where('id', '=', $q)
                    ->orWhere('email', 'LIKE', '%' . $q . '%')
                    ->orWhere('name', 'LIKE', '%' . $q . '%')
                    ->orWhere('phone', 'LIKE', '%' . $q . '%')
                    ->orWhere('socials', 'LIKE', '%' . $q . '%');
            })
            ->paginate(10);

        foreach ($listUsers as &$user) {
            $user->socials = json_decode($user->socials);
        }

        $data = [
            'active' => getAdminActiveMenu('users/index'),
            'listUsers' => $listUsers
        ];

        $noti = "<strong>" . $listUsers->total() . " </strong> result for <strong>\"" . $q . "\"</strong>";

        return view('admin.users.list', $data)->with('noti', $noti);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permission = getUserPermission();

        $listUsers = User::query()->where('permission', '<', $permission)->paginate(10);

        foreach ($listUsers as &$user) {
            $user->socials = json_decode($user->socials);
        }

        $data = [
            'active' => getAdminActiveMenu('users/index'),
            'listUsers' => $listUsers
        ];

        return view('admin.users.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'active' => getAdminActiveMenu('users/create')
        ];

        return view('admin.users.create', $data);
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
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
            'name.max' => 'Name is too long',
            'email.email' => 'Invalid email',
            'email.unique' => 'Email already exist',
            'password.min' => 'Password must be from 6 to 32 characters',
            'password.max' => 'Password must be from 6 to 32 characters'
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:32'
        ], $messages);

        if ($validator->fails()) {
            return redirect()->route('admin.users.create')
                ->withErrors($validator)
                ->withInput();
        }

        $isTeacher = $request->input('teacher') == 'on';

        $request->merge([
            'password' => bcrypt($request->input('password')),
            'is_teacher' => $isTeacher
        ]);

        $user = User::create($request->all());

        if ($user) {
            if ($isTeacher) {

                $teacher = Teacher::create([
                    'id' => $user->id
                ]);

                if (!$teacher) {
                    $user->update(['is_teacher' => 0]);
                }

            }

            return redirect()->route('admin.users.create')->with('flash_success', 'Successfully');
        }

        return redirect()->route('admin.users.create')->with('flash_error', 'Cannot create user, try again later');
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
        return redirect()->route('admin.users.edit', $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = getUserPermission();
        $user = User::query()->where('permission', '<', $permission)->find($id);

        if (empty($user)) {
            return redirect()->route("admin.users.index")->with('flash_error', 'User not exist');
        }

        $user->socials = json_decode($user->socials);

        $data = [
            'active' => getAdminActiveMenu('users'),
            'user' => $user
        ];

        return view('admin.users.edit', $data);
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
        $permission = getUserPermission();
        $user = User::query()->where('permission', '<', $permission)->find($id);

        if (empty($user)) {
            return redirect()->route("admin.users.index")->with('flash_error', 'User not exist');
        }

        $messages = [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'name.max' => 'Name is too long',
            'email.email' => 'Invalid email',
            'email.unique' => 'Email already exist',
            'phone.between' => 'Phone must be from 10 - 16 number',
            'phone.regex' => 'Invalid phone number, format of phone number: +84xxx or 0xxx'
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => ['nullable', 'between:10,16', 'regex:/^(\+[^0]|0)[0-9]+$/']
        ], $messages);

        if ($validator->fails()) {
            return redirect()->route('admin.users.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $isTeacher = $request->input('teacher') == 'on';

        $request->merge(['is_teacher' => $isTeacher]);

        $check = $user->update($request->except(['password']));

        if ($check) {
            $teacher = Teacher::query()->find($id);

            if (!$teacher) {
                $res = Teacher::create([
                    'id' => $id
                ]);

                if (!$res) {
                    $user->update(['is_teacher' => 0]);
                }
            }
            return redirect()->route('admin.users.edit', $id)->with('flash_success', 'Updated');
        }

        return redirect()->route('admin.users.edit', $id)->with('flash_error', 'Cannot update now, try again later');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permission = getUserPermission();
        $user = User::query()->where('permission', '<', $permission)->find($id);

        if (empty($user)) {
            return json_encode([
                'success' => false
            ]);
        }

        $success = true;

        if (!$user->delete()) {
            $success = false;
        };

        return json_encode([
            'success' => $success
        ]);
    }
}
