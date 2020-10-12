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
        // create roles
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleSuperAdmin = Role::create(['name' => 'superadmin']);
        $roleSuperEditor = Role::create(['name' => 'editor']);
        $roleSuperUser = Role::create(['name' => 'user']);

        $permission = [
            'dashboard.view',
            'dashboard.show',
            'dashboard.create'
        ];

        /*
        // permission
        $permission = [
            'blog.create',
            'blog.view',
            'blog.edit',
            'blog.delete',
            'blog.approve',
            // Admin Permission
            'admin.create',
            'admin.view',
            'admin.edit',
            'admin.delete',
            'admin.approve',
            // Roles permission
            'role.create',
            'role.view',
            'role.delete',
            'role.edit',
            // Dashboard Permission
            'dashboard.view'
        ];
*/

        for($i = 0; $i < count($permission); $i++){
            $_permission = Permission::create([
                'name' => $permission[$i]
            ]);
            $roleSuperAdmin->givePermissionTo($permission);
            $_permission->assignRole($roleSuperAdmin);            
        }
    }
}
