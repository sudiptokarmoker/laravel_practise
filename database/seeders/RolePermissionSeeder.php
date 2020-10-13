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
        //$roleAdmin = Role::create(['name' => 'admin']);
        $roleSuperAdmin = Role::create(['name' => 'superadmin']);
        //$roleSuperEditor = Role::create(['name' => 'editor']);
        //$roleSuperUser = Role::create(['name' => 'user']);

        $permissions = [
            'dashboard.default',
            'dashboard.create',
            // 
            'roles.create',
            'roles.edit',
            'roles.delete',
            // 
            'permission.create',
            'permission.edit',
            'permission.delete',
            // blog related
            'blog.index',
            'blog.delete'
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

        for($i = 0; $i < count($permissions); $i++){
            $permission = Permission::create([
                'name' => $permissions[$i]
            ]);
            $roleSuperAdmin->givePermissionTo($permission);
            $permission->assignRole($roleSuperAdmin);            
        }
    }
}
