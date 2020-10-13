<?php

namespace App\Http\Controllers\Backened;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //https://laravelarticle.com/laravel-8-authentication-tutorial
    public function index(){
        return view('backened.layout.master');
    }
}