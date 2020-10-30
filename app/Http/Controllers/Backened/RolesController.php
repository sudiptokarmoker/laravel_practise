<?php
namespace App\Http\Controllers\Backened;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Spatie\Permission\Contracts\Permission as ContractsPermission;

class RolesController extends Controller
{
    public $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ___index()
    {
        //dd("DD");
        $roles = Role::all();
        //$roles = DB::table('roles')->get();
        //$permissions = DB::table('permissions')->get();
        return view('backend.pages.roles.index', compact('roles'));
    }

    public function index()
    {
        
        // if (is_null($this->user) || !$this->user->can('role.view')) {
        //     abort(403, 'Sorry !! You are Unauthorized to view any role !');
        // }

        $roles = Role::all();
        return view('backend.pages.roles.index', compact('roles'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $permissions = DB::table('permissions')->get();
        $permissionGroup = User::getPermissionsGroups();
        return view('backend.pages.roles.create', compact('roles', 'permissions', 'permissionGroup'));
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

        return view('backend.pages.roles.edit', compact('role', 'permissions', 'permissionGroup'));
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
        $role = Role::findById($id);

        if (!is_null($role)) {
            $role->delete();
        }
        $request->session()->flash('success', 'role has been deleted');
        // session->flash('success', 'role has been deleted');
        return back();
    }
}
