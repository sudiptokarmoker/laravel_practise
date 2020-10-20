<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="index.html"><img src="{{ asset('backened/assets/images/icon/logo.png') }}" alt="logo"></a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="active">
                        <a href="{{ route('admin.dashboard') }}" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                        <ul class="collapse">
                            <li <?php if(Route::currentRouteName() == 'roles.index'): ?> class="active" <?php endif; ?>><a href="{{ route('roles.index') }}">Role List</a></li>
                            <li <?php if(Route::currentRouteName() == 'roles.create'): ?> class="active" <?php endif; ?>><a href="{{ route('roles.create') }}">Role Create</a></li>
                        </ul>
                    </li>
                    {{-- users list sidebar --}}
                    <li>
                        <a href="{{ route('users.index') }}" aria-expanded="true"><i class="ti-dashboard"></i><span>Users</span></a>
                        <ul class="collapse">
                            <li <?php if(Route::currentRouteName() == 'users.index'): ?> class="active" <?php endif; ?>><a href="{{ route('users.index') }}">User List</a></li>
                            <li <?php if(Route::currentRouteName() == 'users.create'): ?> class="active" <?php endif; ?>><a href="{{ route('users.create') }}">Create User</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
