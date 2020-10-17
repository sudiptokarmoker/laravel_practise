<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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
            ]
        ];

        for ($i = 0; $i < count($permissions); $i++) {
            //$permissionGroup = $permissions[$i]['group_name'];
            for($j = 0; $j < count($permissions[$i]['permissions']); $j++){
                $permission = Permission::create([
                    'name' => $permissions[$i]['permissions'][$j],
                    'group_name' => $permissions[$i]['group_name']
                ]);
                $roleSuperAdmin->givePermissionTo($permission);
                $permission->assignRole($roleSuperAdmin);
            }
        }
    }
}
