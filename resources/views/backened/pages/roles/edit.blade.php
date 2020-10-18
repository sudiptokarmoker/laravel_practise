@php
//use App\Models\User;
@endphp
@extends('backened.layout.master')

@section('title', 'Roles Create Page')

@section('admin-content')
<!-- header area start -->
<div class="header-area">
    <div class="row align-items-center">
        <!-- nav and search button -->
        <div class="col-md-6 col-sm-8 clearfix">
            <div class="nav-btn pull-left">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="search-box pull-left">
                <form action="#">
                    <input type="text" name="search" placeholder="Search..." required>
                    <i class="ti-search"></i>
                </form>
            </div>
        </div>
        <!-- profile info & task notification -->
        <div class="col-md-6 col-sm-4 clearfix">
            <ul class="notification-area pull-right">
                <li id="full-view"><i class="ti-fullscreen"></i></li>
                <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                <li class="dropdown">
                    <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                        <span>2</span>
                    </i>
                    <div class="dropdown-menu bell-notify-box notify-box">
                        <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                        <div class="nofity-list">
                            <a href="#" class="notify-item">
                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                <div class="notify-text">
                                    <p>You have Changed Your Password</p>
                                    <span>Just Now</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                <div class="notify-text">
                                    <p>New Commetns On Post</p>
                                    <span>30 Seconds ago</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                <div class="notify-text">
                                    <p>Some special like you</p>
                                    <span>Just Now</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                <div class="notify-text">
                                    <p>New Commetns On Post</p>
                                    <span>30 Seconds ago</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                <div class="notify-text">
                                    <p>Some special like you</p>
                                    <span>Just Now</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                <div class="notify-text">
                                    <p>You have Changed Your Password</p>
                                    <span>Just Now</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                <div class="notify-text">
                                    <p>You have Changed Your Password</p>
                                    <span>Just Now</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
                    <div class="dropdown-menu notify-box nt-enveloper-box">
                        <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                        <div class="nofity-list">
                            <a href="#" class="notify-item">
                                <div class="notify-thumb">
                                    <img src="{{ asset('backened/assets/images/author/author-img1.jpg') }}" alt="image">
                                </div>
                                <div class="notify-text">
                                    <p>Aglae Mayer</p>
                                    <span class="msg">Hey I am waiting for you...</span>
                                    <span>3:15 PM</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb">
                                    <img src="{{ asset('backened/assets/images/author/author-img2.jpg') }}" alt="image">
                                </div>
                                <div class="notify-text">
                                    <p>Aglae Mayer</p>
                                    <span class="msg">When you can connect with me...</span>
                                    <span>3:15 PM</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb">
                                    <img src="{{ asset('backened/assets/images/author/author-img3.jpg') }}" alt="image">
                                </div>
                                <div class="notify-text">
                                    <p>Aglae Mayer</p>
                                    <span class="msg">I missed you so much...</span>
                                    <span>3:15 PM</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb">
                                    <img src="{{ asset('backened/assets/images/author/author-img4.jpg') }}" alt="image">
                                </div>
                                <div class="notify-text">
                                    <p>Aglae Mayer</p>
                                    <span class="msg">Your product is completely Ready...</span>
                                    <span>3:15 PM</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb">
                                    <img src="{{ asset('backened/assets/images/author/author-img2.jpg') }}" alt="image">
                                </div>
                                <div class="notify-text">
                                    <p>Aglae Mayer</p>
                                    <span class="msg">Hey I am waiting for you...</span>
                                    <span>3:15 PM</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb">
                                    <img src="{{ asset('backened/assets/images/author/author-img1.jpg') }}" alt="image">
                                </div>
                                <div class="notify-text">
                                    <p>Aglae Mayer</p>
                                    <span class="msg">Hey I am waiting for you...</span>
                                    <span>3:15 PM</span>
                                </div>
                            </a>
                            <a href="#" class="notify-item">
                                <div class="notify-thumb">
                                    <img src="{{ asset('backened/assets/images/author/author-img3.jpg') }}" alt="image">
                                </div>
                                <div class="notify-text">
                                    <p>Aglae Mayer</p>
                                    <span class="msg">Hey I am waiting for you...</span>
                                    <span>3:15 PM</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="settings-btn">
                    <i class="ti-settings"></i>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- header area end -->
<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Edit Roles</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('roles.index') }}">All Roles</a></li>
                    <li><span>Edit Role</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            <div class="user-profile pull-right">
                <img class="avatar user-thumb" src="{{ asset('backened/assets/images/author/avatar.png') }}" alt="avatar">
                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Kumkum Rai <i class="fa fa-angle-down"></i></h4>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Message</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Log Out</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->
<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit Roles : {{ $role->name }}</h4>
                    <div>
                        @include('backened.layout.partial.message')
                        <form action="{{ route('roles.update', $role->id) }}" method="POST">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="txtRoleName">Enter a role name</label>
                                <input type="text" name="name" class="form-control" id="txtRoleName" value="{{ $role->name }}" placeholder="Enter a role name">
                            </div>

                            <div class="form-group permission-checkbox-raw-wrapper">
                                <label for="name">Permissons</label>
                                <div class="form-check">
                                    <input type="checkbox" name="" class="form-check-input" id="checkPermissionAll" value="" />
                                    <label class="form-check-label" for="checkPermissionAll">All</label>
                                </div>
                                <hr>
                                @php $i = 1; @endphp
                                @foreach($permissionGroup as $group)
                                <div class="row">
                                    @php
                                    $permissions = App\Models\User::getPermissionsByGroupName($group->name);
                                    $j = 1;
                                    @endphp
                                    <div class="col-4">
                                        <div class="form-check">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input" id="checkPermissionGroup-{{ $i }}" value="{{ $group->name }}" onclick="checkPermissionByGroupName('role-{{ $i }}-management-checkbox', this)" {{ App\Models\User::roleHasPermissions($role, $permissions) ? 'checked' : '' }} />
                                                <label class="custom-control-label" for="checkPermissionGroup-{{ $i }}">{{ $group->name }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 role-{{ $i }}-management-checkbox">
                                        @foreach($permissions as $permission)
                                        <div class="form-check">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input" data-value="{{ $role->hasPermissionTo($permission->name) }}" name="permissions[]" {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }} id="checkPermission-{{ $permission->id }}" value="{{ $permission->name }}" />
                                                <label class="custom-control-label" for="checkPermission-{{ $permission->id }}">{{ $permission->name }}</label>
                                            </div>
                                        </div>
                                        @php $j++; @endphp
                                        @endforeach
                                    </div>
                                </div>
                                <hr>
                                @php $i++; @endphp
                                @endforeach
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save role</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- data table end -->
        <!-- Primary table start -->

        <!-- Primary table end -->
        <!-- Dark table start -->

        <!-- Dark table end -->
    </div>
</div>
@endsection

@section('footer_datatable_script')
@include('backened.pages.roles.partial.script')
@endsection
