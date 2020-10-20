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
