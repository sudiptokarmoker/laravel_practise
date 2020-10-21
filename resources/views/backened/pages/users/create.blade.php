@php
//use App\Models\User;
@endphp
@extends('backened.layout.master')

@section('title', 'Roles Create Page')

@section('style')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .form-check-label {
        text-transform: capitalize;
    }

</style>
@endsection

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
                        <form action="{{ route('users.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="txtUserName">Name</label>
                                <input type="text" name="name" id="txtUserName" class="form-control" placeholder="type name" />
                            </div>
                            <div class="form-group">
                                <label for="txtUserPassword">Password</label>
                                <input type="password" name="password" id="txtUserPassword" class="form-control" placeholder="type password" />
                            </div>
                            <div class="form-group">
                                <label for="txtUserConfirmPassword">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="txtUserConfirmPassword" class="form-control" placeholder="type password" />
                            </div>
                            <div class="form-group">
                                <label for="txtUserEmail">Type Email</label>
                                <input type="email" name="email" id="txtUserEmail" class="form-control" placeholder="type email address" />
                            </div>
                            <div class="form-group">
                                <label for="lstRolesList">select multiple roles</label>
                                <select name="roles[]" multiple class="form-control select2" id="lstRolesList" name="lstRolesList">
                                    @foreach ($roles as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save User</button>
                            </div>
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    })

</script>
@endsection
