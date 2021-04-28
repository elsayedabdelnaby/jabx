<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create roles and assign existing permissions
        $role = Role::create([
            'name' => 'administrator', 'guard_name' => 'admin'
        ]);
        $role->givePermissionTo('list admin_users');
        $role->givePermissionTo('create admin_users');
        $role->givePermissionTo('edit admin_users');
        $role->givePermissionTo('delete admin_users');
        $role->givePermissionTo('is_active admin_users');

        $role->givePermissionTo('list roles');
        $role->givePermissionTo('create roles');
        $role->givePermissionTo('edit roles');
        $role->givePermissionTo('delete roles');
        $role->givePermissionTo('is_active roles');

        $role->givePermissionTo('list modules');
        $role->givePermissionTo('create modules');
        $role->givePermissionTo('edit modules');
        $role->givePermissionTo('delete modules');
        $role->givePermissionTo('is_active modules');
    }
}
