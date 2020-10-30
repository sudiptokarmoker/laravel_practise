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
                    <h4 class="header-title">Edit User : {{ $user->name }}</h4>
                    <div>
                        @include('backened.layout.partial.message')
                        <form action="{{ route('users.update', $user->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="name">User Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{ $user->name }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="email">User Email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ $user->email }}">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter Password">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="password">Assign Roles</label>
                                    <select name="roles[]" id="roles" class="form-control select2" multiple>
                                        @foreach ($roles as $role)
                                        <option value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save User</button>
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
