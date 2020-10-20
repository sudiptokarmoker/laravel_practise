<?php

namespace App\Http\Controllers\Backened;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Spatie\Permission\Contracts\Permission as ContractsPermission;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        $roles = Role::all();

        //$permissions = DB::table('permissions')->get();
        return view('backened.pages.users.index', compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('backened.pages.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|max:100|unique:roles'
            ],
            [
                'name.required' => 'Please give a role name'
            ]
        );

        $role =  Role::create(['name' => $request->name]);
        $permissions = $request->input('permissions');

        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
        }

        return back();
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
        $user = User::findById($id);
        $role = Role::all($id);

        return view('backened.pages.users.edit', compact('users', 'role'));
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
        $request->validate(
            [
                'name' => 'required|max:100|unique:roles,name,' . $id
            ],
            [
                'name.required' => 'Please give a role name'
            ]
        );
        $role =  Role::findById($id);

        $role->name = $request->input('name');
        $role->update();

        $permissions = $request->input('permissions');

        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
        } else {
            $role->syncPermissions([]);
        }

        return back();
    }

    /**0
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($request, $id)
    {
        $user = User::findById($id);
        if (!is_null($user)) {
            $user->delete();
        }
        
        $request->session()->flash('success', 'User has been deleted');
        //session->flash('success', 'User has been deleted');
        return back();
    }
}
