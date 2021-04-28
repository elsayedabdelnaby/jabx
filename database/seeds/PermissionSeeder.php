<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use App\Models\Module;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Get Main Modules
        $admin_users_module = Module::where('name', '=', 'admin_users')->firstOrFail();
        $roles_module = Module::where('name', '=', 'roles')->firstOrFail();
        $modules_module = Module::where('name', '=', 'modules')->firstOrFail();
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions to admin_user module
        Permission::create([
            'guard_name' => 'admin',
            'name' => 'list admin_users',
            'module_id' => $admin_users_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'create admin_users',
            'module_id' => $admin_users_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'edit admin_users',
            'module_id' => $admin_users_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'delete admin_users',
            'module_id' => $admin_users_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'is_active admin_users',
            'module_id' => $admin_users_module->id
        ]);

        // create permissions to roles module
        Permission::create([
            'guard_name' => 'admin',
            'name' => 'list roles',
            'module_id' => $roles_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'create roles',
            'module_id' => $roles_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'edit roles',
            'module_id' => $roles_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'delete roles',
            'module_id' => $roles_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'is_active roles',
            'module_id' => $roles_module->id
        ]);

        // create permissions to modules module
        Permission::create([
            'guard_name' => 'admin',
            'name' => 'list modules',
            'module_id' => $modules_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'create modules',
            'module_id' => $modules_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'edit modules',
            'module_id' => $modules_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'delete modules',
            'module_id' => $modules_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'is_active modules',
            'module_id' => $modules_module->id
        ]);
    }
}
