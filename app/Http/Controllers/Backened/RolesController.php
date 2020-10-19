<?php

namespace App\Http\Controllers\Backened;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Spatie\Permission\Contracts\Permission as ContractsPermission;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //die("Called");
        $roles = Role::all();
        //$roles = DB::table('roles')->get();
        //$permissions = DB::table('permissions')->get();
        //dd($roles[0]->name);
        return view('backened.pages.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = DB::table('permissions')->get();
        $permissionGroup = User::getPermissionsGroups();
        //dd($permissionGroup);
        return view('backened.pages.roles.create', compact('permissions', 'permissionGroup'));
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
        $role = Role::findById($id);
        $permissions = Permission::all();
        $permissionGroup = User::getPermissionsGroups();

        //dd($role, $permissions);

        return view('backened.pages.roles.edit', compact('role', 'permissions', 'permissionGroup'));
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
        //dd($request->input('name'));

        $request->validate(
            [
                'name' => 'required|max:100|unique:roles,name,'.$id
            ],
            [
                'name.required' => 'Please give a role name'
            ]
        );
        $role =  Role::findById($id);

        $role->name = $request->input('name');
        $role->update();

        //dd($role);
        //die();

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
    public function destroy($id)
    {
        //dd("FOUND");
        //die();

        $role = Role::findById($id);

        dd($role);
        
        if(!is_null($role)){
            $role->delete();
        }

        //return back();
    }
}
