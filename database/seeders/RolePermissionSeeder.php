<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Create Roles
        $roleSuperAdmin = Role::create(['name' => 'superadmin']);
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleEditor = Role::create(['name' => 'editor']);
        $roleUser = Role::create(['name' => 'user']);


        // Permission List as array
        $permissions = [

            [
                'group_name' => 'dashboard',
                'permissions' => [
                    'dashboard.view',
                    'dashboard.edit',
                ]
            ],
            [
                'group_name' => 'blog',
                'permissions' => [
                    // Blog Permissions
                    'blog.create',
                    'blog.view',
                    'blog.edit',
                    'blog.delete',
                    'blog.approve',
                ]
            ],
            [
                'group_name' => 'admin',
                'permissions' => [
                    // admin Permissions
                    'admin.create',
                    'admin.view',
                    'admin.edit',
                    'admin.delete',
                    'admin.approve',
                ]
            ],
            [
                'group_name' => 'role',
                'permissions' => [
                    // role Permissions
                    'role.create',
                    'role.view',
                    'role.edit',
                    'role.delete',
                    'role.approve',
                ]
            ],
            [
                'group_name' => 'profile',
                'permissions' => [
                    // profile Permissions
                    'profile.view',
                    'profile.edit',
                ]
            ],
        ];


        // Create and Assign Permissions
        for ($i = 0; $i < count($permissions); $i++) {
            $permissionGroup = $permissions[$i]['group_name'];
            for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
                // Create Permission
                $permission = Permission::create(['name' => $permissions[$i]['permissions'][$j], 'group_name' => $permissionGroup]);
                $roleSuperAdmin->givePermissionTo($permission);
                $permission->assignRole($roleSuperAdmin);
            }
        }
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function ___run()
    {
        /*
        $roleSuperAdmin = Role::create(['name' => 'superadmin']);

        $permissions = [
            'dashboard.default',
            'dashboard.create',
            'roles.create',
            'roles.edit',
            'roles.delete',
            'permission.create',
            'permission.edit',
            'permission.delete',
            'blog.index',
            'blog.delete'
        ];
       
        for($i = 0; $i < count($permissions); $i++){
            $permission = Permission::create([
                'name' => $permissions[$i]
            ]);
            $roleSuperAdmin->givePermissionTo($permission);
            $permission->assignRole($roleSuperAdmin);            
        }
        */

        /*
        $roleSuperAdmin = Role::create(['name' => 'superadmin']);
        $permissions = [
            [
                'group_name' => 'dashboard',
                'permissions' => [
                    'dashboard.view',
                    'dashboard.edit'
                ]
            ],
            [
                'group_name' => 'seekers',
                'permissions' => [
                    'seekers.profile',
                    'seekers.create_resume',
                    'seekers.share_resume'
                ]
            ],
            [
                'group_name' => 'vendor',
                'permissions' => [
                    'vendor.create',
                    'vendor.profile',
                    'vendor.list'
                ]
            ]
        ];
        for ($i = 0; $i < count($permissions); $i++) {
            //$permissionGroup = $permissions[$i]['group_name'];
            for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
                $permission = Permission::create([
                    'name' => $permissions[$i]['permissions'][$j],
                    'group_name' => $permissions[$i]['group_name']
                ]);
                $roleSuperAdmin->givePermissionTo($permission);
                $permission->assignRole($roleSuperAdmin);
            }
        }
        */

        /*
        $name = [
            'vendor.create',
            'vendor.profile',
            'vendor.list'
        ];

        $dashboard = [
            'dashboard.create',
            'dashboard.profile'
        ];

        
        $role = Role::create(['name' => 'superadmin']);

        for ($i = 0; $i < count($name); $i++) {
            $permission = Permission::create(
                [
                    'name' => $name[$i]
                ]
            );
            $role->givePermissionTo($permission);
            $permission->assignRole($role);
        }

        for ($i = 0; $i < count($dashboard); $i++) {
            $permission = Permission::create(
                [
                    'name' => $dashboard[$i]
                ]
            );
            $role->givePermissionTo($permission);
            $permission->assignRole($role);
        }
    }
    */
        /*
        $permission_data = [
            [
                'group_name' => 'seekers',
                'permissions' => [
                    'seekers.profile',
                    'seekers.create_resume',
                    'seekers.share_resume'
                ]
            ],
            [
                'group_name' => 'vendor',
                'permissions' => [
                    'vendor.create',
                    'vendor.profile',
                    'vendor.list'
                ]
            ]
        ];
        for ($i = 0; $i < count($permission_data); $i++) {
            for($j = 0; $j < count($permission_data[$i]['permissions']); $j++){
                echo "\n permission list name : ".$permission_data[$i]['permissions'][$j];
            }
        }
        */

        $permission_data = [
            [
                'group_name' => 'seekers',
                'permissions' => [
                    'seekers.profile',
                    'seekers.create_resume',
                    'seekers.share_resume'
                ]
            ],
            [
                'group_name' => 'vendor',
                'permissions' => [
                    'vendor.create',
                    'vendor.profile',
                    'vendor.list'
                ]
            ]
        ];

        /*
        $role = Role::create(['name' => 'superadmin']);
        for ($i = 0; $i < count($name); $i++) {
            $permission = Permission::create(
                [
                    'name' => $name[$i]
                ]
            );
            $role->givePermissionTo($permission);
            $permission->assignRole($role);
        }*/

        $role = Role::create(['name' => 'superadmin']);
        for ($i = 0; $i < count($permission_data); $i++) {
            for ($j = 0; $j < count($permission_data[$i]['permissions']); $j++) {
                $permission = Permission::create(
                    [
                        'name' => $permission_data[$i]['permissions'][$j],
                        'group_name' => $permission_data[$i]['group_name']
                    ]
                );
                $role->givePermissionTo($permission);
                $permission->assignRole($role);
            }
        }
    }
}
