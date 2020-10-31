<?php

namespace App\Http\Controllers\Backened;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Dashboard extends Controller
{
    //https://laravelarticle.com/laravel-8-authentication-tutorial
    public $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }

    /*
    public function index(){
        return view('backend.pages.dashboard.index');
    }
    */
    public function index()
    {
        //Auth::guard('admin')->logout();

        //$user = Auth::guard('admin')->user(); 
        //dd($user);

        if (is_null($this->user) || !$this->user->can('dashboard.view')) {
            abort(403, 'Sorry !! You are Unauthorized to view dashboard !');
        }

        $total_roles = count(Role::select('id')->get());
        $total_admins = count(Admin::select('id')->get());
        $total_permissions = count(Permission::select('id')->get());
        return view('backend.pages.dashboard.index', compact('total_admins', 'total_roles', 'total_permissions'));
    }
}