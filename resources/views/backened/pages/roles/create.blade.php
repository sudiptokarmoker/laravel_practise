@php
//use App\Models\User;
@endphp
@extends('backened.layout.master')

@section('title', 'Roles Create Page')

@section('admin-content')
<!-- header area start -->
@include('backened.pages.roles.partial.header')
<!-- header area end -->
<!-- page title area start -->
@include('backened.pages.roles.partial.page_title')
<!-- page title area end -->
<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create Roles</h4>
                    <div>
                        @include('backened.layout.partial.message')
                        <form action="{{ route('roles.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="txtRoleName">Enter a role name</label>
                                <input type="text" name="name" class="form-control" id="txtRoleName" placeholder="Enter a role name">
                            </div>

                            <div class="form-group permission-checkbox-raw-wrapper">
                                <label for="name">Permissons</label>
                                <div class="form-check">
                                    <input type="checkbox" name="" class="form-check-input" id="checkPermissionAll" value=""/>
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
                                                <input type="checkbox" class="custom-control-input pr-group-{{ $i }}" id="checkPermissionGroup-{{ $i }}" value="{{ $group->name }}" onclick="checkPermissionByGroupName('role-{{ $i }}-management-checkbox', this)" />
                                                <label class="custom-control-label" for="checkPermissionGroup-{{ $i }}">{{ $group->name }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 role-{{ $i }}-management-checkbox">
                                        @foreach($permissions as $permission)
                                        <div class="form-check">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input checkbox-permission-checkbox-list permission-child-{{ $permission->id }}" name="permissions[]" id="checkPermission-{{ $permission->id }}" value="{{ $permission->name }}" onclick="permissionGroupCheckUncheck('permission-child-{{ $permission->id }}', 'pr-group-{{ $i }}', 'role-{{ $i }}-management-checkbox')" />
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
